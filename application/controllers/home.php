<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 首页
 * add by yyb5683@gmail.com
 * 2017年6月12日16:31:04
 */
header("Content-type: text/html; charset=utf-8");
class Home extends MY_Controller {
	/**
	 * 初始化
	 * add by yyb5683@gmail.com
	 * 2017年6月12日16:32:00
	 */
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
        $day = 'http://api.taokezhushou.com/api/v1/top_day?app_key=7c7b0a07f0973598';
        $shishi = 'http://api.dataoke.com/index.php?r=Port/index&type=paoliang&appkey=d73f59a183&v=2';
        $shihislist = $this->getDate($shishi);
        $goodslist = $this->getDate($day);
        $this->template['shishilist'] = $shihislist['result'];
        $this->template['twohours'] =  $goodslist['data'];
        $this->load->view("home/index",$this->template);
	}

    /**
     * 获取数据
     * add by yyb5683@gmail.com
     * 2017年11月13日15:02:43
     */

    public function getDate($urls = ''){
        // 1. 初始化
        $ch = curl_init();
        // 2. 设置选项，包括URL
        curl_setopt($ch,CURLOPT_URL,$urls);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        // 3. 执行并获取HTML文档内容
        $output = curl_exec($ch);
        if($output === FALSE ){
        echo "CURL Error:".curl_error($ch);
        }
        
        return json_decode($output,true);

        // 4. 释放curl句柄
        curl_close($ch);
    }
    
}

