<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 控制器基类
 * add by zhixiao476@gmail.com
 * 2015年12月10日11:33:26
 */
if (ENVIRONMENT != 'product'){
	ini_set('memory_limit', '256M');
}
class MY_Controller extends CI_Controller{
	/**
	 * 常量变量定义
	 */
	public $template = array();			//模板数据
	/**
	 * 初始化操作
	 * add by zhixiao476@gmail.com
	 * 2015年12月10日11:34:15
	 */
	public function __construct(){
		parent::__construct();
	}

}


/**
 * api接口统一基础类
 * add by 尹义斌
 * 2018年1月23日15:06:43
 */
class ApiController extends CI_Controller{

	/**
	 * 常量变量定义
	 */
	public $template = array();			//模板数据
	/**
	 * 初始化操作
	 * add by 尹义斌
	 * 2018年1月23日15:06:53
	 */
	public function __construct(){
		parent::__construct();
	}
}