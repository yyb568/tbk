<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="zh-CN">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">
    <meta name="renderer" content="webkit">
    <link rel="stylesheet" type="text/css" href="<?=static_url("css")?>reset.css">
    <link rel="stylesheet" type="text/css" href="<?=static_url("css")?>footer.css">
    <link rel="stylesheet" type="text/css" href="<?=static_url("css")?>pager.css">
    <link rel="stylesheet" type="text/css" href="<?=static_url("css")?>swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?=static_url("css")?>dtk.css">
    <link rel="stylesheet" href="<?=static_url("css")?>iconfont.css">
    <link rel="stylesheet" type="text/css" href="<?=static_url("css")?>cms_ggw.css" />
    <title>帮您淘优惠-每天千款优惠券秒杀，一折限时疯抢！-帮您淘优惠</title>
    <meta name="Keywords" content="帮您淘优惠,优惠券折扣,9块9包邮,限时特卖,优品折扣,帮您淘优惠"/>
    <meta name="Description" content="帮您淘优惠-优惠券折扣直播第一站！每天更新千款，纯人工筛选验货，限时限量特卖，全场1折包邮！"/>
</head>
<body>
<style>
    #navTop {
        width: 100%;
        background-color: #FFF;
    }
    .toTop {
        font-family: iconfont;
        position: fixed;
        right: 70px;
        bottom: 70px;
        line-height: 50px;
        text-align: center;
        border: 1px solid #CCCCCC;
        border-radius: 50px;
        color: #858585;
        width: 50px;
        font-size: 36px;
        cursor: pointer;
        background-color: #fff;
    }

    .toTop:hover, .toTop:focus {
        color: rgb(234, 42, 96);
    }

    body #headNav #header #showList dl {
        margin: 5px 16px;
    }

    body #headNav #header #showList #search button {
        height: 37px;
        overflow: hidden;
        padding: 7px 30px;
    }
    .floatNav{
        width: 100%;
        height: 50px;
        background-color: #fff;
        position: fixed;
        top:0;
        z-index: 9999;
        display: none;
    }
    .fn-block{
        width: 490px;
        height:32px;
        border: 2px solid #E8314B;
        margin: 6px auto;
        position: relative;
    }
    .fn-src{
        width: 425px;
        height: 32px;
        border: none;
        font-size: 12px;
        font-family: 'microsoft yahei';
        color: #aaa;
        padding-left: 15px;
    }
    .srcBtn{
        width: 50px;
        height: 36px;
        background-color: #E8314B;
        border: none;
        position: absolute;
        right: -2px;
        top:-2px;
        color: #fff;
        background-image: url("<?=static_url("image")?>srcicos.png");
        background-size:auto 60% ;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>

<div id="navTop">

    <div id="top">
        <ul id="topright" style="line-height: 25px;">
            <li style=" margin-right: 8px;">
                <a class="set_home" href="javascript:void(0)" onclick="SetHome(this,window.location)" style="color: #757575" title="将本站设为首页">设为首页</a>
            </li>
            <li style="margin-right: 8px;">
                <a class="add_favorite" href="javascript:void(0)" onclick="shoucang(document.title,window.location)" style="color: #757575" title="加入收藏，方便下次打开">加入收藏</a>
            </li>
            <li>
                <!-- <a class="header_service" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1417915250&site=qq&menu=yes" style="color: #8da7cb" title="联系我帮你解答">遇到购物问题? 联系我 ></a> -->
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>

<div id="headNav">
    <div id="header" style="padding-bottom: 10px;">
        <a class="header_logo" href="/index.php?r=index/index&u=681200"
           style="width: 380px; height: 80px;display: inline-block;float: left;    background-size: inherit;    background: url('<?=static_url("image")?>hui4.png')left top no-repeat;    margin-top: -7px;text-align: left;line-height: 80px;color: red;font-size: 36px;padding-left: 20px;">
                </a>
        <div id="showList">
            <div id="search">
                                <form action="/index.php?r=index/index">
                    <input type="hidden" name="r" value="l">
                    <input type="text" class="theme-border-color-1" value="" name="kw" placeholder="好宝贝 等你搜"/>
                    <button type="submit" class="theme-bg-color-1">搜索</button>
                </form>
            </div>

            <dl>
                <dt class="rg"></dt>
            </dl>
            <dl>
                <dt class="zy"></dt>
            </dl>
            <dl>
                <dt class="qc"></dt>
            </dl>

        </div>
        <div class="clear"></div>
    </div>

<!--    悬浮搜索框-->
            <div class="floatNav">
            <div class="fn-block">
                <form action="/index.php?r=index/index">
                    <input type="hidden" name="r" value="l">
                    <input type="text" class="fn-src" value="" name="kw" placeholder="好宝贝 等你搜"/>
                    <button type="submit" class="srcBtn"></button>
                </form>
            </div>
        </div>
    </div>

<div id="baner" class="theme-bg-color-1">
    <div id="nav" style="font-size: 15px;">
        <a href="/index.php?r=index/index&u=681200" class="theme-hover-bg-color-8 iconM active" style="padding:8px 27px;">
            <i class="iconfont">&#xe601;</i><span style="margin-right: 7px;">今日上新</span>
        </a>

        <a class="theme-hover-bg-color-8 " href="/index.php?r=l&u=681200" style="padding:8px 15px;">
            领券优惠直播
        </a>

        <a class="theme-hover-bg-color-8 " href="/index.php?r=ddq&u=681200" style="padding:8px 15px;">
            咚咚抢<div style="position:absolute; width:24px; height:32px; background:#FFCC00;margin-left: 107px; margin-top: -25px; background:url(images/hott_qeu.gif)"></div>
        </a>

        <a href="/index.php?r=p&u=681200" class="theme-hover-bg-color-8 iconH " style="padding:8px 15px;">
            超级人气榜
        </a>

        <a class="theme-hover-bg-color-8 " href="/index.php?r=nine&u=681200" style="padding:8px 15px;">
            9块9包邮
        </a>

        
    </div>
</div>

<div id="dtk_mian">
    <link rel="stylesheet" href="<?=static_url("css")?>iconfont.css">
<link rel="stylesheet" href="<?=static_url("css")?>index.css">
<style>
            #dtk_mian {
            background: url("<?=static_url("image")?>tb2ebjvqfxxxxanxpxxxxxxxxxx_!!2508158775.jpg") top center repeat-y;
        }
        .layui-layer.layui-layer-molv {
        background: none !important;
        box-shadow: none !important;
    }
</style>
<!--banner-->
<div id="banner">
    <div class="banner_con clearfix">
        <!--列表   -->
        <div class="list fl theme-bg-color-7">
            <ul>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe603;</i>
                    <a data-catid="1" href="/index.php?r=l&cid=1&u=681200">服装 </a>
                </li>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe607;</i>
                    <a data-catid="2" href="/index.php?r=l&cid=2&u=681200">母婴<em style=" margin-left: 10px; margin-top: 10px;width:9px; height:14px; position: absolute;background:url(<?=static_url("image")?>x_hot.gif);/* background-color: red; */"> </em></a>
                </li>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe602;</i>
                    <a data-catid="3" href="/index.php?r=l&cid=3&u=681200">化妆品</a>
                </li>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe609;</i>
                    <a data-catid="4" href="/index.php?r=l&cid=4&u=681200">居家、日用<em style=" margin-left: 4px; margin-top: 10px;width:9px; height:14px; position: absolute;background:url(<?=static_url("image")?>x_hot.gif);/* background-color: red; */"> </em></a>
                </li>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe605;</i>
                    <a data-catid="5" href="/index.php?r=l&cid=5&u=681200">鞋包、配饰</a>
                </li>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe604;</i>
                    <a data-catid="6" href="/index.php?r=l&cid=6&u=681200">美食</a>
                </li>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe608;</i>
                    <a data-catid="7" href="/index.php?r=l&cid=7&u=681200">文体、车品</a>
                </li>
                <li class="theme-hover-bg-color-6"><i class="theme-color-3 iconfont">&#xe606;</i>
                    <a data-catid="8" href="/index.php?r=l&cid=8&u=681200">数码、家电</a>
                </li>
            </ul>
        </div>

        <!-- 轮播-->
        <div class="unslider swiper-container fl">
            <div class="swiper-wrapper" >
                                <div class="swiper-slide">
                        <a href="/index.php?r=l/d&id=4422498&u=681200" data-gid="4422498" data-ci="202488" data-in="1" data-uid="681200" data-cn="21" target="_blank">
                            <img style="border: 0" src="<?=static_url("image")?>2017111310070962793889.jpg" width="720" height="300">
                        </a>
                    </div>
                                <div class="swiper-slide">
                        <a href="/index.php?r=l/d&id=4411596&u=681200" data-gid="4411596" data-ci="201256" data-in="1" data-uid="681200" data-cn="21" target="_blank">
                            <img style="border: 0" src="<?=static_url("image")?>2017111109105168978294.jpg" width="720" height="300">
                        </a>
                    </div>
                                <div class="swiper-slide">
                        <a href="/index.php?r=l/d&id=4401409&u=681200" data-gid="4401409" data-ci="200753" data-in="1" data-uid="681200" data-cn="21" target="_blank">
                            <img style="border: 0" src="<?=static_url("image")?>2017111116211016398579.jpg" width="720" height="300">
                        </a>
                    </div>
                                <div class="swiper-slide">
                        <a href="/index.php?r=l/d&id=102234&u=681200" data-gid="102234" data-ci="201547" data-in="1" data-uid="681200" data-cn="21" target="_blank">
                            <img style="border: 0" src="<?=static_url("image")?>2017111110390550375652.jpg" width="720" height="300">
                        </a>
                    </div>
                        </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"><img class="arrow" id="ar" src="" alt="next" width="25" height="50"></div>
            <div class="swiper-button-prev"><img class="arrow" id="al" src="" alt="prev" width="25" height="50"></div>

        </div>

        <!--右边大图 -->
        <div class="rightPic fr" style="position: relative">
            <div class="bdshare" style="position: absolute;top: 95px;left: 76px;">
                <div class="bdsharebuttonbox">
                    <a href="#" class="bds_more" data-cmd="more"></a>
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a>
                </div>
                <script>window._bd_share_config = {
                        "common": {
                            "bdSnsKey": {},
                            "bdText": "最近发现了一个领独享优惠券的网站，都是限时限量抢购，一般人享受不到的！性价比超高哦，分享给大家，保证你会惊喜滴！",
                            "bdMini": "2",
                            "bdMiniList": false,
                            "bdPic": "",
                            "bdStyle": "0",
                            "bdSize": "24"
                        }, "share": {}
                    };
                    with (document)0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];</script>
            </div>

            <a href="/index.php?r=ddq" target="_blank" style="    position: absolute;
    display: block;
    width: 100%;
    height: 143px;
    top: 156px;"></a>
            <img src="<?=static_url("image")?>tb2luylh2bntkjjsszbxxafrfxa_!!2053469401.jpg" alt="" width="300" height="300">

        </div>
    </div>
</div>

<!--content-->
<div id="content" style="padding-bottom: 58px;" data-ggwurl="?r=index/recomd&t=44">
            <div class="theme-border-color-5 divider" style="text-align: left;padding: 0 10px;width: 1178px;border: 1px solid #ffd6d6; color: #9c9c9c;background-color: #FDFCE7;">
            这些年，我们每天坚持为大家更新超值宝贝... 感谢您多年来的支持！无论再苦再苦，我们都会坚持下去！因为您的信任，我们会带着这份责任，做到极致...        </div>
        <!--领券优惠-->
    <div class="discount">
        <!-- 领券优惠头部-->
        <div class="discount_head clearfix" style="margin-bottom: 10px;">
            <div class="dishead_left fl" style="color: #fbacc2">
                <h1 style="color: #585858;font-weight: normal;">领券秒杀精选</h1>
                <span class="color_p pd  theme-color-4">/</span>
                <span class="color_p  theme-color-4">实时更新</span>
                <span class="color_p  theme-color-4">/</span>
                <span class="color_p  theme-color-4">独享优惠券</span>
            </div>
            <div class="dishead_right fr" style="color: #fbacc2">
                <span class="color_p  theme-color-4">/</span>
                <span class="color_p theme-color-4">将优选、性价比做到极致</span>
                <span class="color_p  theme-color-4">/</span>
            </div>
        </div>
        <!--领券优惠商品-->
        <div class="dis_product">
            <!-- 商品-->
                    <div class="theme-hover-border-color-1 pro_detail fr">
                        <a rel="nofollow" data-gid="4384622" data-ci="200087" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=l/d&id=4384622&u=681200"  biz-itemid="548595316985" isconvert="1"  target="_blank" >
                            <img src="<?=static_url("image")?>tb2yqa4lzuhskjjsspaxxxfgfxa_!!801966992.jpg_310x310.jpg" height="272" style="border: 0;max-width:272px;"/>
                        </a>
                        <div class="pro_intro fr">
                            <p class="pro_title">
                                <a href="/index.php?r=l/d&id=4384622&u=681200" rel="nofollow"
                                   target="_blank"  biz-itemid="548595316985" isconvert="1"                                    title="秋冬季加绒小白鞋女百搭学生板鞋韩版休闲保暖单鞋厚底运动棉鞋子" style="font-size: 16px;"
                                   data-gid="4384622" data-ci="200087" data-in="1" data-uid="681200" data-cn="20"
                                >秋冬季加绒小白鞋女百搭学生板鞋韩版休闲保暖单鞋厚底运动棉鞋子</a>
                            </p>
                            <div class="pro_price color_p">
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                                <div class="out-time theme-color-4" data-goodsid="548595316985" data-seller="801966992"></div>
                            </div>
                                                            <div class="residue">优惠券总数<i class="color_p theme-color-1">10000</i>张</div>
                            
                            <div class="pro_nowPri theme-bg-color-1">
                                <div class="buy-price">38</div>
                                <div class="old-price">
                                    <p><i>￥</i>48</p>
                                    <span>券后价</span>
                                </div>
                                <div class="go-buy">
                                    <a class="theme-color-1" data-gid="4384622" data-ci="200087" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=index/middleurl&id=4384622" target="_blank">去抢购</a>
                                </div>
                            </div>
                        </div>
                    </div>

                
                    <div class="theme-hover-border-color-1 pro_detail addLeft">
                        <a rel="nofollow" data-gid="4386537" data-ci="200166" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=l/d&id=4386537&u=681200"  target="_blank" >
                            <img src="picture/tb157nxjhuavkjjszfjxxcjmpxa_!!0-item_pic.jpg_310x310.jpg" height="272" style="border: 0;max-width:272px;"/>
                        </a>
                        <div class="pro_intro fr">
                            <p class="pro_title">
                                <a href="/index.php?r=l/d&id=4386537&u=681200" rel="nofollow"
                                   target="_blank"                                    title="秋冬男士保暖内衣男加厚加绒青少年韩版可外穿学生秋衣秋裤套装" style="font-size: 16px;"
                                   data-gid="4386537" data-ci="200166" data-in="1" data-uid="681200" data-cn="20"
                                >秋冬男士保暖内衣男加厚加绒青少年韩版可外穿学生秋衣秋裤套装</a>
                            </p>
                            <div class="pro_price color_p">
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>50</b></span>
                                <div class="out-time theme-color-4" data-goodsid="558554630841" data-seller="2262181864"></div>
                            </div>
                                                            <div class="residue">优惠券总数<i class="color_p theme-color-1">10000</i>张</div>
                            
                            <div class="pro_nowPri theme-bg-color-1">
                                <div class="buy-price">69</div>
                                <div class="old-price">
                                    <p><i>￥</i>119</p>
                                    <span>券后价</span>
                                </div>
                                <div class="go-buy">
                                    <a class="theme-color-1" data-gid="4386537" data-ci="200166" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=index/middleurl&id=4386537" target="_blank">去抢购</a>
                                </div>
                            </div>
                        </div>
                    </div>
         </div>
    </div>

    <!--领券优惠直播-->
    <div class="live">
        <!-- 领券优惠头部-->
        <div class="discount_head clearfix" style="margin-bottom: 10px;">
            <div class="dishead_left fl">
                <h1 style="font-weight: normal;">领券优惠直播<span class="tatal" style="background-color: #5dcac5;color: #FFFFFF;padding: 3px 7px;border-radius: 15px; font-family: 'Arial'; margin-left: 10px;">30885</span></h1>
            </div>
            <div class="dishead_right fr">
                <a href="/index.php?r=l&u=681200"><span style="color: #505050;font-size: 14px;" class="color_p">更多优惠 »</span></a>
            </div>
        </div>
        <!-- 领券优惠商品-->
        <div class="goods-list main-container">
            <ul class="clearfix">
                <?php foreach((array)$twohours as $key => $val){ ?>
                    <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427647" href="/index.php?r=l/d&id=4427647&u=681200" class="img" rel="nofollow" target="_blank">
                            <i class="today-new"></i>
                            <img src="<?=$val['goods_pic']?>" alt="">
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i><?=$val['coupon_apply_amount'] - $val['coupon_amount']?> </b>券后价</span>
                                <span class="old-price"><i>￥</i><?=$val['coupon_apply_amount']?></span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i><?=$val['coupon_amount']?></b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427647" target="_blank" href="/index.php?r=l/d&id=4427647&u=681200"><?=$val['goods_short_title']?></a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>266157</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i> 
                                </div>
                            </div>
                        </div>
                    </li>
                <?php }?>
             </ul>
        </div>
    </div>
    <div class="mainbody_6" style="margin: 0 auto;margin-bottom: 0px;margin-top: 26px;">
<div id="yw0" class="pager"><a class="pre-page disabled" href="javascript:void(0);">上一页</a>
<a class="item cur" href="javascript:void(0);">1</a>
<a class="item" href="/index.php?r=l&amp;page=2">2</a>
<a class="item" href="/index.php?r=l&amp;page=3">3</a>
<a class="item" href="/index.php?r=l&amp;page=4">4</a>
<a class="item" href="/index.php?r=l&amp;page=5">5</a>
<a class="item" href="/index.php?r=l&amp;page=6">6</a>
<a class="item more" href="javascript:void(0);">...</a>
<a class="item" href="/index.php?r=l&amp;page=309">309</a>
<a class="next-page" href="/index.php?r=l&amp;page=2">下一页</a>
</div>    
</div>
</div>
<script src="js/cms_ggw.js"></script>

<script src="js/jquery.cookie.min.js"></script>

<script>
    $(document).ready(function (e) {

        $('.dis_product .pro_detail a').on('click', function(){
            xctj("tid=xc-dtk-cms-"+$(this).data('uid'), "at=crs","ds=web","in="+$(this).data('in'),"ec=click","gid="+$(this).data('gid'),"ci="+$(this).data('ci'),"cn="+$(this).data('cn'));
        });

        $('.swiper-container .swiper-wrapper .swiper-slide a').on('click', function(){
            xctj("tid=xc-dtk-cms-"+$(this).data('uid'), "at=crs","ds=web","in="+$(this).data('in'),"ec=click","gid="+$(this).data('gid'),"ci="+$(this).data('ci'),"cn="+$(this).data('cn'));
        });

        //设置cookie
        function setCookie(c_name, value,t) {
            var exdate = new Date();
            exdate.setTime(exdate.getTime() + t);
            document.cookie = c_name + "=" + escape(value) + (";expires=" + exdate.toGMTString());
        }
        // 获取cookie
        function getCookie(c_name) {
            if (document.cookie.length > 0) {
                c_start = document.cookie.indexOf(c_name + "=")
                if (c_start != -1) {
                    c_start = c_start + c_name.length + 1;
                    c_end = document.cookie.indexOf(";", c_start);
                    if (c_end == -1) c_end = document.cookie.length;
                    return unescape(document.cookie.substring(c_start, c_end));
                }
            }
            return "";
        };

        var dpDom = $('.dis_product .pro_detail');
        for(var i = 0 ; i < dpDom.length ; i++){
            (function(i){
                var dpGoodsid = $('.out-time').eq(i).data('goodsid').toString(),
                    str = "店铺名称：";
                if(getCookie(dpGoodsid) == '' || getCookie(dpGoodsid) == undefined){
                    $.ajax({
                        url:"http://hws.m.taobao.com/cache/wdetail/5.0/",
                        dataType:'jsonp',
                        data:{id:dpGoodsid},
                        jsonp:'callback',
                        success:function(res) {
                            $('.out-time').eq(i).html(str+res.data.seller.shopTitle);
                            setCookie(dpGoodsid,res.data.seller.shopTitle,600000);
                            $('.out-time').eq(i).removeClass('hide');
                        }
                    });
                }else{
                    $('.out-time').eq(i).html(str+getCookie(dpGoodsid));
                    $('.out-time').eq(i).removeClass('hide');
                }
            })(i)

        }
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 1,
            paginationClickable: true,
            spaceBetween: 30,
            autoplay: 3000,
            loop: true
        });

        var overSwiper = function(s){
            if(swiper){
                $('.unslider').mouseleave(function(){
                    swiper.startAutoplay();
                });
                $('.swiper-pagination .swiper-pagination-bullet').mouseenter(function(){
                    $(this).click();
                    swiper.startAutoplay();
                });
            }else{
                if(s < 10){
                    s++ ;
                    setTimeout(function(){overSwiper(s);},500);
                }
            }
        }

        if(swiper){
            $('.unslider').mouseleave(function(){
                swiper.startAutoplay();
            });
            $('.swiper-pagination .swiper-pagination-bullet').mouseenter(function(){
                $(this).click();
                swiper.startAutoplay();
            });
        }else{
            overSwiper(s);
        }

    });
</script>
</div>

<div id="footer" class="theme-border-top-color-1" style="background-color: #373737;padding-bottom: 30px;width: 100%;border-top: 3px solid #ff3366;">
    <div class="footer-wrapper " style="width: 1200px;margin: 0 auto;position: relative;text-align: center">
        <img src="picture/bottom_text.png" alt="" style="border: 0;margin-top: 50px;">
        <div class="author" style="    position: absolute;
    top: 67px;
    left: 990px;
    color: #FFFFFF;
    font-size: 18px;">by &nbsp;&nbsp;帮您淘优惠</div>
        <div class="text" style="color: #a2a2a2; font-size: 16px; margin-top: 33px;">
            <script src="js/z_stat.js" language="JavaScript"></script>&copy; CopyRight&nbsp;2017            &nbsp;
            <a href="http://www.bntyh.com" target="_blank" rel="nofollow" style="color:#a2a2a2;">
                帮您淘优惠            </a>
            &nbsp;http://www.bntyh.com&nbsp;&nbsp;
            <a class="miitbeian" href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow" style="color:#a2a2a2;">
                皖ICP备17004841号-2            </a>
            &nbsp;&nbsp;                <a target="_blank" class="footer_service" href="http://wpa.qq.com/msgrd?v=3&uin=1417915250&site=qq&menu=yes" style="color: #8da7cb" title="联系我帮你解答">^_^亲遇到问题，联系我帮你处理哈</a>
            
            <p style="text-algin:center;margin-top:30px;"></p>
        </div>
    </div>
</div>

<div class="toTop" style="display: none" onclick=" $('body,html').animate({scrollTop:0},1000);"> &#xe60c;</div>

<script type="text/javascript">

    
    //xc statistics
        ;!(function(window, document) {
            "use strict"
            try {
                var space = "xctj";

                // 创建队列
                window["xckj"] = space;
                window[space] = window[space] || function () {
                        (window[space].list = window[space].list || new Array()).push(arguments)
                    };
                window[space].time = window[space].time || 1 * new Date();

                // 创建元素
                var script = document.createElement("script");

                // 设置元素
                script.type = "text/javascript";
                script.src = "https://tj.ffquan.com/satc.js?z=20170801" ; /* 配置satc.js路径 */
                script.async = 1;

                // 添加元素
                var node = document.getElementsByTagName("script")[0];
                node.parentNode.insertBefore(script, node)
            } catch (error) { }
        })(window, document);

        //xc statistics 必填项
        xctj("tid=xc-dtk-cms-681200", "at=pageview","ds=web","in=1");

        var coutData =[{"page":"0","event_name":"index_search","page_event":"click","page_class":"#search button","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"app_download_hover","page_event":"mouseenter","page_class":".app_download","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"record_number","page_event":"click","page_class":".miitbeian","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"service_bottom","page_event":"click","page_class":".footer_service","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"service_top","page_event":"click","page_class":".header_service","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"logo","page_event":"click","page_class":"#header .header_logo","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"home_set","page_event":"click","page_class":".set_home","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"collect_set","page_event":"click","page_class":".add_favorite","is_data":"","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"index_banner ","page_event":"click","page_class":".swiper-slide a","is_data":"gid","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"index_left_cid","page_event":"click","page_class":"#banner .list li a","is_data":"catid","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"index_qlist_goods","page_event":"click","page_class":".live .goods-list li a","is_data":"gid","is_posting_events":"0","is_num":"0","is_param":""},{"page":"0","event_name":"index_search_fixed","page_event":"click","page_class":".floatNav .srcBtn","is_data":"","is_posting_events":"0","is_num":"0","is_param":""}],
            pageR =window.location.href.split('r=').length>1?"r="+window.location.href.split('r=')[1].split('&')[0]:'noR';
            for(var i = 0 ; i < coutData.length ; i++){
                if(coutData[i].page == pageR || coutData[i].page=="0"){//事件触发页面
                    (function(s){
                        var paramBoole =true;
                        for(var a = 0 ;a < coutData[s].is_param.split(',').length ; a ++){
                            var paramKey = coutData[s].is_param.split(',')[a]+"=";
                            if(coutData[s].is_param.split(',')[a] != ''){
                                if( window.location.href.split(paramKey).length<2){
                                    paramBoole = false;
                                    return false;
                                }
                            }
                        }

                        if(paramBoole ==false){//如果有参数，是否满足参数条件
                            return false
                        }

                        var isData = coutData[s].is_data !=""?(($(coutData[s].page_class).data(coutData[s].is_data)!='' && $(coutData[s].page_class).data(coutData[s].is_data)!=undefined)?',"'+coutData[s].is_data+'='+$(coutData[s].page_class).data(coutData[s].is_data)+'"':''):'',//是否获取元素自定义数据
                            xcStr = '"tid=xc-dtk-cms-681200","ds=web","ec='+coutData[s].page_event+'","in=1"'+isData;

                        if(coutData[s].is_posting_events == 0){//是否事件代理
                            $(coutData[s].page_class).on(coutData[s].page_event,function(){
                                var eventName = coutData[s].is_num==1?',"ea='+coutData[s].event_name+'_'+($(this).index()+1)+'"':',"ea='+coutData[s].event_name+'"';//是否添加序号
                                eval('xctj('+xcStr+eventName+')');
                            });
                        }else{
                            $('body').on(coutData[s].page_event,coutData[s].page_class,function(){
                                var eventName = coutData[s].is_num==1?',"ea='+coutData[s].event_name+'_'+($(this).index()+1)+'"':',"ea='+coutData[s].event_name+'"';//是否添加序号
                                eval('xctj('+xcStr+eventName+')');
                            })
                        }
                    })(i)
                }
            }

    

    // 设置为主页
    function SetHome(obj, vrl) {
        try {
            obj.style.behavior = 'url(#default#homepage)';
            obj.setHomePage(vrl);
        }
        catch (e) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
                }
                catch (e) {
                    alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
                }
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage', vrl);
            } else {
                alert("您的浏览器不支持，请按照下面步骤操作：1.打开浏览器设置。2.点击设置首页。3.输入：" + vrl + "点击确定。");
            }
        }
    }
    // 加入收藏 兼容360和IE6
    function shoucang(sTitle, sURL) {
        try {
            window.external.addFavorite(sURL, sTitle);
        }
        catch (e) {
            try {
                window.sidebar.addPanel(sTitle, sURL, "");
            }
            catch (e) {
                alert("加入收藏失败，请使用Ctrl+D进行添加");
            }
        }
    }

    var ok = '';
    $(function () {
        $('#search button').click(function () {
            if($('#search input[name="kw"]').val().length > 16){
                layer.msg("您搜索的关键词过长！",{
                    timer: 2500
                });
                return false;
            }
        });
        $(window).scroll(function () {
            if ($(window).scrollTop() > 500) {
                $(".toTop").fadeIn(1000);
            }
            else {
                $(".toTop").fadeOut(1000);
            }
        });
    });


    $(window).scroll(function(){

        var _scroll = $(window).scrollTop();

        if(_scroll>130){
            $(".floatNav").fadeIn();
        }else{
            $(".floatNav").fadeOut();
        }

    })

</script>

<script type="text/javascript" src="<?=static_url("js")?>scrolltop2.js"></script>
<script src="<?=static_url("js")?>jquery.min.js"></script>
    <script src="<?=static_url("js")?>layer.js"></script>
    <script src="<?=static_url("js")?>dtk.js"></script>
    <script src="<?=static_url("js")?>swiper.min.js"></script>
</body>
</html>
