<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 排行榜 等相关 接口
 * add by yinyibin@woshop.cn
 * 2017年6月6日11:12:49
 */
class Rank extends ApiController{
	/**
	 * 初始化
	 * add by yinyibin@woshop.cn
	 * 2017年6月6日11:20:47
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model("app_model");
	}
	
	
	/**
	 * 项目首页
	 * add by yinyibin@woshop.cn
	 * 2017年6月6日11:25:52
	 */
	public function getRankList($wtype = 'day'){
		$currentPage = $this->input->get("currentPage",true);
		$pageSize = 20;
		if ($currentPage > 0){
			$currentPage = ($currentPage * $pageSize);
		}else{
			$currentPage = 0;
		}
	
		if ($wtype == 'day'){
				
			$timed = date("Y-m-d");
// 			$timed = '2017-05-06';
			$sql = "select s.id,s.unicode,s.ordertotal,s.day,u.unicode as uicode,u.uname,u.province,u.city from dw_statistics s left join dw_users u on (s.unicode = u.unicode) where s.day='{$timed}' order by s.ordertotal desc limit {$currentPage},20";
			$totalsql = "select count(*) as num from dw_statistics s left join dw_users u on (s.unicode = u.unicode) where s.day='{$timed}' ";
		}elseif ($wtype == 'week'){
			$sDay = getdate()['wday'];			// 获取当前星期中的第几天
			$start = date("Y-m-d",strtotime("-{$sDay} day"));
			$end = date("Y-m-d");
			$sql = "select s.id,s.unicode,s.ordertotal,s.day,u.unicode as uicode,u.uname,u.province,u.city from dw_statistics s left join dw_users u on (s.unicode = u.unicode) where s.day >='{$start}' and s.day <= '{$end}' order by s.ordertotal desc limit {$currentPage},20";
			$totalsql = "select count(*) as num from dw_statistics s left join dw_users u on (s.unicode = u.unicode) where s.day >= '{$start}' and s.day <= '{$end}'";
				
		}elseif ($wtype == 'month'){
				
			$sDay = getdate()['mday'];			// 获取月份中的第几天
			$start = date("Y-m-d",strtotime("-{$sDay} day"));
			$end = date("Y-m-d");
			$sql = "select s.id,s.unicode,s.ordertotal,s.day,u.unicode as uicode,u.uname,u.province,u.city from dw_statistics s left join dw_users u on (s.unicode = u.unicode) where s.day >='{$start}' and s.day <= '{$end}' order by s.ordertotal desc limit {$currentPage},20";
			$totalsql = "select count(*) as num from dw_statistics s left join dw_users u on (s.unicode = u.unicode) where s.day >= '{$start}' and s.day <= '{$end}'";
		}
		
		$orderList = $this->app_model->execute($sql);
		if (empty($orderList)){
			$orderList = array();
			$total = 0;
		}else{
			$totalNum = $this->app_model->execute($totalsql);
			$total = ceil($totalNum[0]['num'] / 20);
		}
		$this->splitJson($orderList, 0,$total);
	}
}