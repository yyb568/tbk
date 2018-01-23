<?php defined('BASEPATH') OR exit('No direct script access allowed');


/**
 * 用户账户相关
 * add by zhixiao476@gmail.com
 * 2017年05月14日14:08:50
 */
class Account extends ApiController{
	
	/**
	 * 初始化
	 * add by zhixiao476@gmail.com
	 * 2017年05月14日14:09:06
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model("app_model");
	}
	
	/**
	 * 获取当前用户的余额及上次收益及是否可提现、可用提现金额
	 * add by zhxiao476@gmail.com
	 * 2017年05月14日14:09:38
	 */
	public function getAccountBalance(){
		$this->splitJson($this->userinfo, 0);
	}
	
	/**
	 * 获取当前用户是否有未领取的账单
	 * add by yinyibin@woshop.cn
	 * 2017年6月5日14:10:59
	 */
	public function receivebill(){
		$open_id = $this->input->get("opd",true);
		// 查询当前是联通渠道用户是否有未领取的账单
		$usr_list = $this->getDisUser($open_id);
		if (!empty($usr_list)){ //表示联通用户
			$params = array(
					'table' => 'commis',
					'select' => 'id,price',
					'where' => array('unicode' => $this->userinfo['unicode'],'status' => 1),
					'limit' => -1
			);
			$list = $this->app_model->get_list($params);
			$_bill = 0;
			if (!empty($list)){
				foreach($list as $key => $val){
					$_bill += $val['price'];
				}
			}
			$this->splitJson($_bill, 0);
		}else{//社会渠道用户
			$this->Collect();
		}
	}
	
	/**
	 * 用户提现
	 * add by zhixiao476@gmail.com
	 * 2017年05月14日14:13:28
	 */
	public function turnout(){
		$phone = $this->input->get("phone", true);
		$open_id = $this->input->get("opd", true);
		$Amount = $this->input->get("Amount", true);
		if (empty($Amount) || !is_numeric($Amount)){
			$this->splitJson('您输入的金额有误，请输入有效金额！',1);
		}
		if ($this->userInfo['totalprice'] < 0){
			$this->splitJson('账户余额不足！', 1);
		}
		if (is_float($Amount) === true){
			$this->splitJson('不支持小数点，请输入正整数的金额！',1);
		}
		if ($Amount > 800){
			$this->splitJson('单次提现额度不允许超过800元，请修改！',1);
		}
		if ($Amount > $this->userInfo['totalprice']){
			$this->splitJson('您的账户余额不足，请重新输入金额！',1);
		}
		
		if ($Amount < 1){
			$this->splitJson('由于微信限制,单笔最小金额默认为1元',1);
		}
		
		if ($Amount > 20000){
			$this->splitJson('由于微信限制,单笔单日限额2W/2W',1);
		}
		
		// 判断是否存在上月可领金额
		if ($this->userInfo['month_day'] > 0 && date("d") >= $this->userInfo['month_day']){
			$monthprice = (int)$this->app_model->getMachDayPrice($phone, $this->allOkPrice);
			if ($monthprice <= 0){
				$this->splitJson('您的上月可领金额为：0',1);
			}
		}elseif ($this->userInfo['month_day'] > 0 && date("d") < $this->userInfo['month_day']){
			$this->splitJson('您领取的日期为本月'.$this->userinfo['month_day'].'日 领取上月总额；当前日期为：'.date("Y-m-d"));
		}
		
		if ($this->userInfo['month_day'] > 0){
			$priceinfo = $this->getMonthTotalPrice($this->phone);
			if ($priceinfo['price'] <= $priceinfo['transprice']){
				$this->splitJson('您上月可用余额已经提现完毕！', 1);
			}
			if ($priceinfo['transprice'] == 0){	// 如果本月领取为0
				if ($Amount >= $this->userInfo['totalprice']){		//如果输入的金额跟账户总余额相同，则提示下
					$this->splitJson('您输入的金额不能是账户总余额，请输入小于的金额',1);
				}elseif ($Amount >= $priceinfo['price']){
					$this->splitJson('您输入的金额不能是账户总余额，请输入小于的金额',1);
				}
			}
		}
		// 从memcache中获取提现锁
		$this->load->library("Memcache");
		$transfer_price = $this->memcache->get($this->userInfo['unicode'].'_transfers_price');
		if ($transfer_price == 1){
			$this->splitJson('提现进行中，提现间隔建议至少大于5秒钟!', 1);
		}else{	// 锁住账户提现，防止高并发下重复提现
			$this->memcache->set($this->userInfo['unicode'].'_transfers_price', 1, 60*10);			// 将验证码的值作为key/value
		}
		//$this->splitJson('数据维护，提现功能暂停关闭！',1);
		$randNum = rand(1000, 9999);
		$order_id = date("YmdHis") . $randNum;
		
		// 根据等级分配
		if ($this->userInfo['level'] == -1 && $this->rgt != 1){		// 200限额
		
			$cumTrL = $this->app_model->getCumTr($this->unicode);
			if (!empty($cumTrL)){
				if ($cumTrL['total'] < 200){
					$_cprice = 200 - $cumTrL['total'];
					if ($Amount > $_cprice){
						$this->splitJson('您当日限额还剩：'.$_cprice.'请您修改金额或进行实名认证！',1);
					}
				}else{
					$this->splitJson('您当日限额200已经提取,请实名认证后继续提现！',1);
				}
			}else{		// 如果没有找到，则直接给他加上限额
				if ($Amount > 200){
					$this->splitJson('由于您的账户级别较低，每天只能提现200元，请修改金额或者进行实名认证！',1);
				}
				// 设置200元限额
				$_cul['idate'] = date("Y-m-d");
				$_cul['unicode'] = $this->userInfo['unicode'];
				$_cul['user_id'] = $this->user_id;
				$_cul['total'] = 0;
				$this->log_model->set_table("cumtransferlog");
				$this->log_model->save($_cul);
			}
			$params = array(
					'mch_appid'			=>	$this->APPID,							// 公众账号appid
					'mchid'				=>	$this->mchid,							// 商户id
					'nonce_str'			=>  tokenHash(),							// 随机字符串
					'partner_trade_no'  =>  $order_id,								// 商户订单号
					'openid'			=>	$this->userInfo['open_id'],				// 微信用户open_id
					'check_name'		=>	'NO_CHECK',								// 校验用户姓名选项 NO_CHECK：不校验真实姓名 FORCE_CHECK：强校验真实姓名
					're_user_name'		=>	$this->userInfo['uname'],				//	收款用户姓名
					'amount'			=>	$Amount * 100,							//	收款金额 转成分之后再进行付款
					'desc'				=>	'佣乐享账户资金余额转出',					//	描述信息
					'spbill_create_ip'	=>	$this->input->ip_address(),				//  Ip地址
			);
		}elseif ($this->userInfo['level'] == 0 && $this->rgt != 1){
			$this->splitJson('您的账户没有实名认证，请实名认证！',1);
		}elseif ($this->userInfo['level'] == 1 && $this->rgt != 1){
			$params = array(
					'mch_appid'			=>	$this->APPID,							// 公众账号appid
					'mchid'				=>	$this->mchid,							// 商户id
					'nonce_str'			=>  tokenHash(),							// 随机字符串
					'partner_trade_no'  =>  $order_id,								// 商户订单号
					'openid'			=>	$this->userInfo['open_id'],				// 微信用户open_id
					'check_name'		=>	'FORCE_CHECK',							// 校验用户姓名选项 NO_CHECK：不校验真实姓名 FORCE_CHECK：强校验真实姓名
					're_user_name'		=>	$this->userInfo['uname'],				//	收款用户姓名
					'amount'			=>	$Amount * 100,							//	收款金额 转成分之后再进行付款
					'desc'				=>	'佣乐享账户资金余额转出',					//	描述信息
					'spbill_create_ip'	=>	$this->input->ip_address(),				//  Ip地址
			);
		}elseif ($this->rgt != 1 && (!array($this->userInfo['level'], array(-1,0,1)))){	// 如果三个级别都不是，则不允许提现
			$this->splitJson('账户级别错误，不允许提现！',1);
		}elseif ($this->rgt == 1){	// 如果是社会渠道，则直接放开提现
			if ($this->customer != 4 && $this->userInfo['level'] == -1){// 根据等级分配
				$cumTrL = $this->app_model->getCumTr($this->unicode);
				if (!empty($cumTrL)){
					if ($cumTrL['total'] < 200){
						$_cprice = 200 - $cumTrL['total'];
						if ($Amount > $_cprice){
							$this->splitJson('您当日限额还剩：'.$_cprice.'请您修改金额或进行实名认证！',1);
						}
					}else{
						$this->splitJson('您当日限额200已经提取,请实名认证后继续提现！',1);
					}
				}else{		// 如果没有找到，则直接给他加上限额
					if ($Amount > 200){
						$this->splitJson('由于您的账户级别较低，每天只能提现200元，请修改金额或者进行实名认证！',1);
					}
					// 设置200元限额
					$_cul['idate'] = date("Y-m-d");
					$_cul['unicode'] = $this->unicode;
					$_cul['user_id'] = $this->user_id;
					$_cul['total'] = 0;
					$this->log_model->set_table("cumtransferlog");
					$this->log_model->save($_cul);
				}
				$params = array(
						'mch_appid'			=>	$this->APPID,							// 公众账号appid
						'mchid'				=>	$this->mchid,							// 商户id
						'nonce_str'			=>  tokenHash(),							// 随机字符串
						'partner_trade_no'  =>  $order_id,								// 商户订单号
						'openid'			=>	$this->userInfo['open_id'],				// 微信用户open_id
						'check_name'		=>	'NO_CHECK',								// 校验用户姓名选项 NO_CHECK：不校验真实姓名 FORCE_CHECK：强校验真实姓名
						're_user_name'		=>	$this->userInfo['uname'],				//	收款用户姓名
						'amount'			=>	$Amount * 100,							//	收款金额 转成分之后再进行付款
						'desc'				=>	'佣乐享账户资金余额转出',					//	描述信息
						'spbill_create_ip'	=>	$this->input->ip_address(),				//  Ip地址
				);
			}else if ($this->customer != 4 && $this->userInfo['level'] == 0){
				$this->splitJson('您的账户没有实名认证，请实名认证！',1);
			}else if ($this->customer != 4 && $this->rgt == 1){
				$params = array(
						'mch_appid'			=>	$this->APPID,							// 公众账号appid
						'mchid'				=>	$this->mchid,							// 商户id
						'nonce_str'			=>  tokenHash(),							// 随机字符串
						'partner_trade_no'  =>  $order_id,								// 商户订单号
						'openid'			=>	$this->userInfo['open_id'],				// 微信用户open_id
						'check_name'		=>	'FORCE_CHECK',							// 校验用户姓名选项 NO_CHECK：不校验真实姓名 FORCE_CHECK：强校验真实姓名
						're_user_name'		=>	$this->userInfo['uname'],				//	收款用户姓名
						'amount'			=>	$Amount * 100,							//	收款金额 转成分之后再进行付款
						'desc'				=>	'佣乐享账户资金余额转出',					//	描述信息
						'spbill_create_ip'	=>	$this->input->ip_address(),				//  Ip地址
				);
			}else if ($this->customer != 4 && (!array($this->userInfo['level'], array(-1,0,1)))){// 如果三个级别都不是，则不允许提现
				$this->splitJson('账户级别错误，不允许提现！',1);
			}else{
				$params = array(
						'mch_appid'			=>	$this->APPID,							// 公众账号appid
						'mchid'				=>	$this->mchid,							// 商户id
						'nonce_str'			=>  tokenHash(),							// 随机字符串
						'partner_trade_no'  =>  $order_id,								// 商户订单号
						'openid'			=>	$this->userInfo['open_id'],				// 微信用户open_id
						'check_name'		=>	'NO_CHECK',							// 校验用户姓名选项 NO_CHECK：不校验真实姓名 FORCE_CHECK：强校验真实姓名
						're_user_name'		=>	$this->userInfo['uname'],				//	收款用户姓名
						'amount'			=>	$Amount * 100,							//	收款金额 转成分之后再进行付款
						'desc'				=>	'佣乐享账户资金余额转出',					//	描述信息
						'spbill_create_ip'	=>	$this->input->ip_address(),				//  Ip地址
				);
			}
		}
		$params['sign'] = $this->MakeSign($params);								// 签名
		
		$xml = toXml($params);
		
		$url = "https://api.mch.weixin.qq.com/mmpaymkttransfers/promotion/transfers";
		$data = $this->postXmlCurl($xml, $url, true, 30);
		//$data['result_code'] = 'SUCCESS';
		if ($data['result_code'] != 'SUCCESS'){
			$this->log_model->writeLog('微信转账失败 return_code:'.$data['return_code'].'return_msg:'.$data['return_msg']." result_code:".$data['result_code']."err_code:".$data['err_code']." err_code_des:".$data['err_code_des']);
			if ($data['err_code'] == 'NAME_MISMATCH'){
				// 将该用户重置为未实名认证的用户
				if ($this->rgt != 1){		// 只开放联通渠道
					$_up_user['level'] = -1;		// 通过提现识别出的未实名认证
					$this->log_model->set_table("users");
					$this->log_model->set_primary_key("open_id");
					$this->log_model->save($_up_user, $this->open_id);
						
					$_culist = $this->app_model->getCumTr($this->unicode);
						
					// 设置200元限额
					if (empty($_culist)){
						$_cul['idate'] = date("Y-m-d");
						$_cul['unicode'] = $this->unicode;
						$_cul['user_id'] = $this->user_id;
						$_cul['total'] = 0;
						$this->log_model->set_table("cumtransferlog");
						$this->log_model->save($_cul);
					}
					$this->splitJson("您的微信实名认证未通过，将被限制每天最多取200元，请进行微信实名认证<br>点击这里查看流程",1);
				}
				if ($this->rgt == 1 && $this->customer !=4){
					$_up_user['level'] = -1;		// 通过提现识别出的未实名认证
					$this->log_model->set_table("sousers");
					$this->log_model->set_primary_key("open_id");
					$this->log_model->save($_up_user, $this->open_id);
		
					$_culist = $this->app_model->getCumTr($this->unicode);
		
					// 设置200元限额
					if (empty($_culist)){
						$_cul['idate'] = date("Y-m-d");
						$_cul['unicode'] = $this->unicode;
						$_cul['user_id'] = $this->user_id;
						$_cul['total'] = 0;
						$this->log_model->set_table("cumtransferlog");
						$this->log_model->save($_cul);
					}
					$this->splitJson("您的微信实名认证未通过，将被限制每天最多取200元，请进行微信实名认证<br>点击这里查看流程",1);
				}
			}else{
				$this->splitJson($data['return_msg'],1);
			}
		}
		
		// 更新用户表中的总金额为0
		$dw['totalprice'] = $this->userInfo['totalprice'] - $Amount;
		if ($this->rgt == 1){
			$this->app_model->set_table("sousers");
		}else{
			$this->app_model->set_table("users");
		}
		$this->app_model->set_primary_key('open_id');
		$this->app_model->save($dw, $this->open_id);
		
		// 顺势将微信字段中的余额扣除
		//$sql = "update dw_funds set wxtotal=wxtotal-{$price} where id = 1";
		//$this->common_model->query($sql);
		
		if ($this->rgt == 1){
			$isso = 1;
		}else{
			$isso = 0;
		}
		//$data['payment_no'] = 'sadfsd121212121';
		// 将转账数据保存起来
		$dt['unicode'] = $this->unicode;
		$dt['phone'] = $this->phone;
		$dt['price'] = $Amount;
		$dt['open_id'] = $this->open_id;
		$dt['isso'] = $isso;
		$dt['order_id'] = $order_id;
		$dt['wx_order_id'] = $data['payment_no'];
		$dt['datetime'] = time();
		
		$this->app_model->set_table("transferlog");
		$this->app_model->save($dt);
		
		// 将账户中的金额减去
		$this->memcache->delete($this->unicode.'_transfers_price');
		// 转账成功
		if ($data['result_code'] == 'SUCCESS'){
			// S级别的账户设置限额
			if ($this->rgt != 1){
				$sql = "update dw_cumtransferlog set total = total+".$Amount." where unicode={$this->unicode}";
				$this->app_model->query($sql);
			}
			$this->memcache->delete($this->unicode.'_transfers_price');			// 删除锁
			$this->splitJson("转出成功，转出总金额：".$Amount."元，成功时间：".$data['payment_time'],0);
		}else{
			$this->splitJson('转账失败',1);
		}
		
	}
}