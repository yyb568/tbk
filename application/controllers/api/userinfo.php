<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 接受用户信息
 * add by 尹义斌
 * 2018年1月23日15:07:57
 */
class Userinfo extends ApiController{
	
	/**
	 * 初始化接口
	 * add by zhixiao476@gmail.com
	 * 2017年05月14日14:01:18
	 */
	public function __construct(){
		parent::__construct();
	}
	
	/**
	 * 接收授权资料及手机号验证码信息进行验证
	 * add by zhixiao476@gmail.com
	 * 2017年05月14日14:01:56
	 */
	public function getUserinfo(){
		echo 1;die;
		// $data['phone'] = $this->input->post("phone", true);
		// $code = $this->input->post("code", true);
		// $subscribe = $this->input->post("subscribe", true);
		
		// $open_id = $this->input->post("open_id", true);
		// // 先查询手机号是否存在
		
		// // 如果存在，则跟传递过来的open_id比较
		
		// // 如果两者不同，标示更换过微信，则用新的替换老的
		
		// // 如果相同跳过
		
		// // 如果数据库中的open_id = null  则标示没有注册
		// // 如果手机号查询结果为null则标示没有注册将信息写入数据库
		
		// // 跳转到完善信息页面并返回跳转url+token
		// // 已经注册过并通过验证的，直接进行登录，返回成功标示+token
		
		
		// // token生成方式参数如下：
		// // user_id + open_id + phone + 渠道编码 = token
	}
}