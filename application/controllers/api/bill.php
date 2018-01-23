<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 账单等相关 接口
 * add by yinyibin@woshop.cn
 * 2017年6月7日14:45:37
 */

class Bill extends ApiController{
	
	/**
	 * 初始化
	 * add by yinyibin@woshop.cn
	 * 2017年6月7日14:48:08
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model("app_model");
	}
	
	/**
	 * 获取数据
	 * add by yinyibin@woshop.cn
	 * 2017年6月7日16:12:00
	 * $type 有效订单 和 无效订单
	 */
	public function getBillList($type = 'cis'){
		$open_id = $this->input->get("opd",true);
		$offset = $this->input->get("currentPage",true);
		$pageSize = 20;
		if ($offset > 0){
			$offset = ($offset * $pageSize) ;
		}else{
			$offset = 0;
		}
		//查询是否是联通用户
		$userlist = $this->getDisUser($open_id);
		if (!empty($userlist)){//联通用户 账单查询
			if ($type == 'cis'){
				$params = array(
						'table' => 'commis',
						'select' => 'id,phonetypeid',
						'where' => array('unicode' => $this->userinfo['unicode']),
						'total' => true
				);
				$total = $this->common_model->get_list($params);
				$sql = "select m.id,m.serialCode,m.phonetypeid,m.price,m.buss_id,m.sendtime,m.imptime,m.status,e.mach_type from dw_commis m left join dw_excation e on (m.phonetypeid = e.id) where m.unicode = '{$this->unicode}' and m.status=2 order by id desc limit {$offset},{$pageSize}";
				$list = $this->common_model->execute($sql);
			}else if ($type == 'nocis'){
				$params = array(
						'table' => 'notcommis',
						'select' => "id,phonetypeid",
						"where" => array("unicode" => $this->userinfo['unicode']),
						'total' => true
				);
				$total = $this->common_model->get_list($params);
				$sql = "select m.id,m.serialCode,m.phonetypeid,m.price,m.buss_id,m.sendtime,m.imptime,m.comment,e.mach_type from dw_notcommis m left join dw_excation e on (m.phonetypeid = e.id) where m.unicode = '{$this->unicode}' order by id desc limit {$offset},{$pageSize}";
				$list = $this->common_model->execute($sql);
			}
		}else{ //社会渠道订单查询
			$params = array(
					'table' => 'socommis',
					'select' => 'id',
					'where' => array('phone' => $this->phone, 'status' => 2),
					'total' => true
			);
			$total = $this->common_model->get_list($params);
			$sql = "select id,unicode,phone,price,created,sendtime,status from dw_socommis where phone='{$this->phone}' and status=2 order by id desc limit {$offset},{$pageSize}";
			
			$list = $this->common_model->execute($sql);
			
		}
		
		$this->splitJson($list, 0,$total);
	}
}