<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 用户查询接口
 * add by yinyibin@woshop.cn
 * 2017年6月8日10:33:17
 */
class Explain extends ApiController{
	/**
	 * 初始化
	 * add by yinyibin@woshop.cn
	 * 2017年05月14日14:09:06
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model("app_model");
	}
	
	/**
	 * 查询信息
	 * add by yinyibin@woshop.cn
	 * 2017年6月8日10:35:10
	 */
	public function getModelinfo() {
		$orderid = $this->input->get("unorderid",true);//订单号
		$serialCode = $this->input->get("serialCode",true);//串号
// 		$serialCode = '869488021824096';
		if(empty($orderid) && empty($serialCode)){
			$this->splitJson('订单或串号必须有一项才可以！',1);
			return false;
		}
		//查询commis
		if (!empty($serialCode)){
			$params = array(
					'table' => 'commis',
					'select' => 'unicode,phonetypeid,ordertype,uname,area,city,dis,buss_id,sendtime,user_id,sendtime,imptime,datetime,status',
					'where' => array('serialCode' =>$serialCode),
					'limit' => 1
			);
		}else if (!empty($orderid)){
			$params = array(
					'table' => 'commis',
					'select' => 'unicode,phonetypeid,ordertype,uname,area,city,dis,buss_id,sendtime,user_id,sendtime,imptime,datetime,status',
					'where' => array('unorderid' =>$orderid),
					'limit' => 1
			);
		}else if (!empty($serialCode) && !empty($orderid)){
			$params = array(
					'table' => 'commis',
					'select' => 'unicode,phonetypeid,ordertype,uname,area,city,dis,buss_id,sendtime,user_id,sendtime,imptime,datetime,status',
					'where' => array('unorderid' =>$orderid,'serialCode' =>$serialCode),
					'limit' => 1
			);
		}
		
		// 查询notcommis
		if (!empty($serialCode)){
			$paramstwo = array (
					'table' => 'notcommis',
					'select' => 'unicode,phonetypeid,area,ordertype,price,buss_id,imptime,datetime,sendtime',
					'where' => array('serialCode' =>$serialCode),
					'limit' => 1
			);
			
		}else if(!empty($orderid)){
			$paramstwo = array (
					'table' => 'notcommis',
					'select' => 'unicode,phonetypeid,area,ordertype,price,buss_id,imptime,datetime,sendtime',
					'where' => array('unorderid' =>$orderid),
					'limit' => 1
			);
		}
		
		$info = $this->app_model->get_list($params);
		unset($params);
		$paramstwos = $this->app_model->get_list($paramstwo);
		if (!empty($info) || !empty($paramstwos)){
			//机器型号查询
			$excationone = array (
					'table' => 'excation',
					'select' => 'id,mach_type,price',
					'where' => array('id' => $paramstwos['phonetypeid']),
					'limit' => 1
			);
			
			$excationones =$this->app_model->get_list($excationone);
			
			$params = array (
					'table' => 'excation',
					'select' => 'id,mach_type,price',
					'where' => array('id' => $info['phonetypeid']),
					'limit' => 1
			);
			$commislist =$this->app_model->get_list($params);
			
			if (!empty($excationones)){
				//将数据进行整合
				if ($paramstwos['phonetypeid'] == $excationones['id']){
					$paramstwos['mach_type'] = $excationones['mach_type'];
					$paramstwos['price'] = $excationones['price'];
						
				}
				//获取地区
				$pro = $this->app_model->getDqByIdInfo($paramstwos['area'],'sf');
				$excationones['pro'] = $pro['ProvinceName'];
				$this->splitJson($excationones,0); //notcommit机器型号
			}else if (!empty($commislist)){
				if ($info['phonetypeid'] == $commislist['id']){
					$info['mach_type'] = $commislist['mach_type'];
					$info['price'] = $commislist['price'];
				}
				//获取地区
				$pro = $this->app_model->getDqByIdInfo($info['area'],'sf');
				$info['pro'] = $pro['ProvinceName'];
				$this->splitJson($info,0); //notcommit机器型号
			}
		}else { //都为空就查history_commis表
			if (!empty($serialCode)){
				$params = array(
						'table' => 'history_commis',
						'select' => 'id,unicode,price,status,machname',
						'where' => array('serialCode' =>$serialCode),
						'limit' => 1
				);
			}else if (!empty($orderid)){
				$params = array(
						'table' => 'history_commis',
						'select' => 'id,unicode,price,status,machname',
						'where' => array('order_id' =>$orderid),
						'limit' => 1
				);
			}else if (!empty($serialCode) && !empty($orderid)){
				$params = array(
						'table' => 'history_commis',
						'select' => 'id,unicode,price,status,machname',
						'where' => array('order_id' =>$orderid,'serialCode' =>$serialCode),
						'limit' => 1
				);
			}
			$hislist = $this->app_model->get_list($params);
			$this->splitJson($hislist,0);
		}
	}
} 