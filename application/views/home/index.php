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
    <!-- 皮肤 S-->
        <!-- 皮肤 E-->
    <link rel="stylesheet" href="<?=static_url("css")?>iconfont.css">
    <link rel="stylesheet" type="text/css" href="<?=static_url("css")?>cms_ggw.css" />
<title>帮您淘优惠-每天千款优惠券秒杀，一折限时疯抢！-帮您淘优惠</title>
    <meta name="Keywords" content="帮您淘优惠,优惠券折扣,9块9包邮,限时特卖,优品折扣,帮您淘优惠"/>
    <meta name="Description" content="帮您淘优惠-优惠券折扣直播第一站！每天更新千款，纯人工筛选验货，限时限量特卖，全场1折包邮！"/>
    <script src="<?=static_url("js")?>jquery.min.js"></script>
    <script src="<?=static_url("js")?>layer.js"></script>
    <script src="<?=static_url("js")?>dtk.js"></script>
    <script src="<?=static_url("js")?>swiper.min.js"></script>
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
        <div id="topleft" style="margin: 0;line-height: 25px;">欢迎加入淘宝优惠群：540278806，每日更新最新产品                            <a target="_blank" style="height: 22px;float: right;" href="https://jq.qq.com/?_wv=1027&amp;k=4BcHFOp">
                    <img border="0" src="<?=static_url("image")?>tb2sfmwqfxxxxb4xpxxxxxxxxxx_!!2508158775.png">
                </a>
                    </div>
        <ul id="topright" style="line-height: 25px;">
            <li style=" margin-right: 8px;">
                <a class="set_home" href="javascript:void(0)" onclick="SetHome(this,window.location)" style="color: #757575" title="将本站设为首页">设为首页</a>
            </li>
            <li style="margin-right: 8px;">
                <a class="add_favorite" href="javascript:void(0)" onclick="shoucang(document.title,window.location)" style="color: #757575" title="加入收藏，方便下次打开">加入收藏</a>
            </li>
            <li>
                <a class="header_service" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1417915250&site=qq&menu=yes" style="color: #8da7cb" title="联系我帮你解答">遇到购物问题? 联系我 ></a>
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
            <div class="swiper-button-next"><img class="arrow" id="ar" src="picture/arrowr.png" alt="next" width="25" height="50"></div>
            <div class="swiper-button-prev"><img class="arrow" id="al" src="picture/arrowl.png" alt="prev" width="25" height="50"></div>

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
        
                    <div class="theme-hover-border-color-1 pro_detail addLeft">
                        <a rel="nofollow" data-gid="4381813" data-ci="199940" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=l/d&id=4381813&u=681200"  target="_blank" >
                            <img src="picture/tb15x9mprwtmejjsszfxxxbtfxa_!!0-item_pic.jpg_310x310.jpg" height="272" style="border: 0;max-width:272px;"/>
                        </a>
                        <div class="pro_intro fr">
                            <p class="pro_title">
                                <a href="/index.php?r=l/d&id=4381813&u=681200" rel="nofollow"
                                   target="_blank"                                    title="运动裤男加绒加厚男士小脚裤子秋冬季卫裤潮流九分哈伦裤休闲裤男" style="font-size: 16px;"
                                   data-gid="4381813" data-ci="199940" data-in="1" data-uid="681200" data-cn="20"
                                >运动裤男加绒加厚男士小脚裤子秋冬季卫裤潮流九分哈伦裤休闲裤男</a>
                            </p>
                            <div class="pro_price color_p">
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>30</b></span>
                                <div class="out-time theme-color-4" data-goodsid="560389190911" data-seller="2021751930"></div>
                            </div>
                                                            <div class="residue">优惠券总数<i class="color_p theme-color-1">10000</i>张</div>
                            
                            <div class="pro_nowPri theme-bg-color-1">
                                <div class="buy-price">39</div>
                                <div class="old-price">
                                    <p><i>￥</i>69</p>
                                    <span>券后价</span>
                                </div>
                                <div class="go-buy">
                                    <a class="theme-color-1" data-gid="4381813" data-ci="199940" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=index/middleurl&id=4381813" target="_blank">去抢购</a>
                                </div>
                            </div>
                        </div>
                    </div>

                
                    <div class="theme-hover-border-color-1 pro_detail fr">
                        <a rel="nofollow" data-gid="4395639" data-ci="200563" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=l/d&id=4395639&u=681200"  biz-itemid="538234054389" isconvert="1"  target="_blank" >
                            <img src="picture/tb2akh4dbai.ebjy1xdxxcoqxxa_!!2854543420.jpg_310x310.jpg" height="272" style="border: 0;max-width:272px;"/>
                        </a>
                        <div class="pro_intro fr">
                            <p class="pro_title">
                                <a href="/index.php?r=l/d&id=4395639&u=681200" rel="nofollow"
                                   target="_blank"  biz-itemid="538234054389" isconvert="1"                                    title="韩国挂坠饰品秋冬百搭装饰毛衣链子长款天鹅项链配饰女挂件吊坠" style="font-size: 16px;"
                                   data-gid="4395639" data-ci="200563" data-in="1" data-uid="681200" data-cn="20"
                                >韩国挂坠饰品秋冬百搭装饰毛衣链子长款天鹅项链配饰女挂件吊坠</a>
                            </p>
                            <div class="pro_price color_p">
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                                <div class="out-time theme-color-4" data-goodsid="538234054389" data-seller="2854543420"></div>
                            </div>
                                                            <div class="residue">优惠券总数<i class="color_p theme-color-1">10000</i>张</div>
                            
                            <div class="pro_nowPri theme-bg-color-1">
                                <div class="buy-price">8.9</div>
                                <div class="old-price">
                                    <p><i>￥</i>11.9</p>
                                    <span>券后价</span>
                                </div>
                                <div class="go-buy">
                                    <a class="theme-color-1" data-gid="4395639" data-ci="200563" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=index/middleurl&id=4395639" target="_blank">去抢购</a>
                                </div>
                            </div>
                        </div>
                    </div>

                
                    <div class="theme-hover-border-color-1 pro_detail addLeft">
                        <a rel="nofollow" data-gid="4427409" data-ci="202365" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=l/d&id=4427409&u=681200"  biz-itemid="536105944921" isconvert="1"  target="_blank" >
                            <img src="picture/tb2_39nacvhfkjjszfpxxbttpxa_!!2944024434.jpg_310x310.jpg" height="272" style="border: 0;max-width:272px;"/>
                        </a>
                        <div class="pro_intro fr">
                            <p class="pro_title">
                                <a href="/index.php?r=l/d&id=4427409&u=681200" rel="nofollow"
                                   target="_blank"  biz-itemid="536105944921" isconvert="1"                                    title="【买2送1】竹棒棉签双头纯棉无菌清洁美容化妆卸妆1000头袋装包邮" style="font-size: 16px;"
                                   data-gid="4427409" data-ci="202365" data-in="1" data-uid="681200" data-cn="20"
                                >【买2送1】竹棒棉签双头纯棉无菌清洁美容化妆卸妆1000头袋装包邮</a>
                            </p>
                            <div class="pro_price color_p">
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                                <div class="out-time theme-color-4" data-goodsid="536105944921" data-seller="2944024434"></div>
                            </div>
                                                            <div class="residue">优惠券总数<i class="color_p theme-color-1">10000</i>张</div>
                            
                            <div class="pro_nowPri theme-bg-color-1">
                                <div class="buy-price">9.9</div>
                                <div class="old-price">
                                    <p><i>￥</i>19.9</p>
                                    <span>券后价</span>
                                </div>
                                <div class="go-buy">
                                    <a class="theme-color-1" data-gid="4427409" data-ci="202365" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=index/middleurl&id=4427409" target="_blank">去抢购</a>
                                </div>
                            </div>
                        </div>
                    </div>

                
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

                
                    <div class="theme-hover-border-color-1 pro_detail fr">
                        <a rel="nofollow" data-gid="4367090" data-ci="199216" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=l/d&id=4367090&u=681200"  biz-itemid="556840023110" isconvert="1"  target="_blank" >
                            <img src="picture/tb2ijikcdzkl1jjszfixxx_dfxa_!!2984304743.jpg_310x310.jpg" height="272" style="border: 0;max-width:272px;"/>
                        </a>
                        <div class="pro_intro fr">
                            <p class="pro_title">
                                <a href="/index.php?r=l/d&id=4367090&u=681200" rel="nofollow"
                                   target="_blank"  biz-itemid="556840023110" isconvert="1"                                    title="吹风机家用大小功率电吹风负离子理发店宿舍发廊冷热风吹风筒静音" style="font-size: 16px;"
                                   data-gid="4367090" data-ci="199216" data-in="1" data-uid="681200" data-cn="20"
                                >吹风机家用大小功率电吹风负离子理发店宿舍发廊冷热风吹风筒静音</a>
                            </p>
                            <div class="pro_price color_p">
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>30</b></span>
                                <div class="out-time theme-color-4" data-goodsid="556840023110" data-seller="2984304743"></div>
                            </div>
                                                            <div class="residue">优惠券总数<i class="color_p theme-color-1">1000</i>张</div>
                            
                            <div class="pro_nowPri theme-bg-color-1">
                                <div class="buy-price">29.8</div>
                                <div class="old-price">
                                    <p><i>￥</i>59.8</p>
                                    <span>券后价</span>
                                </div>
                                <div class="go-buy">
                                    <a class="theme-color-1" data-gid="4367090" data-ci="199216" data-in="1" data-uid="681200" data-cn="20" href="/index.php?r=index/middleurl&id=4367090" target="_blank">去抢购</a>
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
                                    <li class="theme-hover-border-color-1 ">
                        <a data-gid="4428683" href="/index.php?r=l/d&id=4428683&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1c4l3spxxxxbcxvxxxxxxxxxx_!!0-item_pic.jpg_310x310.jpg" alt="">

                            <span class="video_icon"></span>
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428683" target="_blank" href="/index.php?r=l/d&id=4428683&u=681200">男士长短袜中筒秋冬季防臭吸汗袜子10双</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>65397</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427885" href="/index.php?r=l/d&id=4427885&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1mztycc_i8kjjy0foxxafnvxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>23.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>33.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427885" target="_blank" href="/index.php?r=l/d&id=4427885&u=681200">决明子枕头枕芯正品</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>90918</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429957" href="/index.php?r=l/d&id=4429957&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb254z6jgmpmejjy1xcxxxpppxa_!!3071181831.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.7</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.7</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429957" target="_blank" href="/index.php?r=l/d&id=4429957&u=681200">【棉芭莎】加绒加厚保暖小脚裤袜</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>81428</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4429605" href="/index.php?r=l/d&id=4429605&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1veodxqfb_ujksmryxxbwxvxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429605" target="_blank" href="/index.php?r=l/d&id=4429605&u=681200">【妮维雅】男士控油美白洗面奶2只装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>61742</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427824" href="/index.php?r=l/d&id=4427824&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb20_jce138sejjszfpxxc_vfxa_!!1677801128.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>31.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>51.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427824" target="_blank" href="/index.php?r=l/d&id=4427824&u=681200">【煌上煌】掌翅锁组合670g</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>38291</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429461" href="/index.php?r=l/d&id=4429461&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2_xbkpystmejjy1zcxxxagxxa_!!695768367.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>11.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>14.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429461" target="_blank" href="/index.php?r=l/d&id=4429461&u=681200">【收纳盒装】24色超轻粘土橡皮泥套装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>88288</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433645" href="/index.php?r=l/d&id=4433645&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2ifhjaaagskjjy0fgxxcrqfxa_!!3012913363.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>14.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>17.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433645" target="_blank" href="/index.php?r=l/d&id=4433645&u=681200">不锈钢防风晾衣架20夹袜架+10个衣架</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>83331</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4428574" href="/index.php?r=l/d&id=4428574&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1m6s.x.riwkjjszfgxxboxxxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>39.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>59.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428574" target="_blank" href="/index.php?r=l/d&id=4428574&u=681200">【北极绒】男女加绒加厚保暖内衣套装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>114591</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427657" href="/index.php?r=l/d&id=4427657&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1x.zfsfxxxxasxfxxxxxxxxxx_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427657" target="_blank" href="/index.php?r=l/d&id=4427657&u=681200">【黛尔佳人】纯棉女士内裤7条礼盒装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>78651</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433676" href="/index.php?r=l/d&id=4433676&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2phnrajhz11bjy0fpxxcnivxa_!!2179302836.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>38</b>券后价</span>
                                <span class="old-price"><i>￥</i>48</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433676" target="_blank" href="/index.php?r=l/d&id=4433676&u=681200">简约四季床上用品四件套</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>95501</b></span>
                                <div class="goods-type">
                                                                    </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4428567" href="/index.php?r=l/d&id=4428567&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2iooqclusmejjy1zdxxar3fxa_!!2024228961.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428567" target="_blank" href="/index.php?r=l/d&id=4428567&u=681200">【新边界】每日枣餐20袋大枣1000g</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>84821</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427621" href="/index.php?r=l/d&id=4427621&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1dk4kmfxxxxamxxxxxxxxxxxx_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>16.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>26.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427621" target="_blank" href="/index.php?r=l/d&id=4427621&u=681200">【英雄】专业水溶性彩色铅笔36支装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>37456</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427778" href="/index.php?r=l/d&id=4427778&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb16e0bxaigskjjssppxxabnpxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            <span class="video_icon"></span>
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>24.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427778" target="_blank" href="/index.php?r=l/d&id=4427778&u=681200">【姿梵娜】加厚加绒外穿踩脚打底裤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>50850</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429862" href="/index.php?r=l/d&id=4429862&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2tudacrdh8kjjy1zexxxjepxa_!!2189078313.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>14.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429862" target="_blank" href="/index.php?r=l/d&id=4429862&u=681200">寿全斋 姜母茶大姨妈 买一送一</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>66586</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430806" href="/index.php?r=l/d&id=4430806&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2mitpwehnpufjszfpxxcpuxxa_!!705235443.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>27.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>42.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430806" target="_blank" href="/index.php?r=l/d&id=4430806&u=681200">老金磨坊 黑芝麻粉核桃粉600g</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>93374</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4432443" href="/index.php?r=l/d&id=4432443&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2dyuhxgmwq1jjszphxxxcjfxa_!!771184756.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>33.5</b>券后价</span>
                                <span class="old-price"><i>￥</i>38.5</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432443" target="_blank" href="/index.php?r=l/d&id=4432443&u=681200">收纳博士特大真空压缩袋11件/送手泵</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>204460</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432537" href="/index.php?r=l/d&id=4432537&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1erw8kmoqmejjy1xaxxcssfxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>49.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>59.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432537" target="_blank" href="/index.php?r=l/d&id=4432537&u=681200">牧鹿男士保暖衬衫男长袖格子加绒</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>147356</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4428301" href="/index.php?r=l/d&id=4428301&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb27jwelsxlpufjy0fexxcjbfxa_!!2742972769.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24.98</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.98</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428301" target="_blank" href="/index.php?r=l/d&id=4428301&u=681200">拉芳无硅油去屑洗发水护发素套装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>54834</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4428182" href="/index.php?r=l/d&id=4428182&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2_nsoxjgy_ujjszk9xxxvlfxa_!!1759060462.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>49.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428182" target="_blank" href="/index.php?r=l/d&id=4428182&u=681200">【蜂蜜3瓶】妙语纯净蜂蜜1215g</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>52531</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4433839" href="/index.php?r=l/d&id=4433839&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2q.x0cnti8kjjsspixxbm4fxa_!!96663413.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>64.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>45</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433839" target="_blank" href="/index.php?r=l/d&id=4433839&u=681200">马丁男士古龙香氛竹炭控油去黑头洁面乳</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>91890</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427825" href="/index.php?r=l/d&id=4427825&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2swx0mwrkpufjy1zexxc.6fxa_!!2867224287.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>28.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>43.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427825" target="_blank" href="/index.php?r=l/d&id=4427825&u=681200">香菇脆即食零食休闲食品</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>38344</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433876" href="/index.php?r=l/d&id=4433876&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb26g_0cldh8kjjy1zexxxjepxa_!!2005506561.png_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433876" target="_blank" href="/index.php?r=l/d&id=4433876&u=681200">【杜蕾斯】超薄避孕套组合装19只</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>128894</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4423258" href="/index.php?r=l/d&id=4423258&u=681200" class="img" rel="nofollow" target="_blank">
                                                        <img src="picture/tb2gtpfqhstmejjsszdxxceupxa_!!1823144704.jpg_310x310.jpg" alt="">

                            <span class="video_icon"></span>
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>17.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>42.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>25</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4423258" target="_blank" href="/index.php?r=l/d&id=4423258&u=681200">家用迷你榨橙汁水果柠檬榨汁机</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>11105</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4429836" href="/index.php?r=l/d&id=4429836&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2cxggx7fb_ujjssrbxxb6bvxa_!!1751793962.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>38</b>券后价</span>
                                <span class="old-price"><i>￥</i>118</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>80</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429836" target="_blank" href="/index.php?r=l/d&id=4429836&u=681200">咪咪兔儿童电话手表防水定位手环</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>61843</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430031" href="/index.php?r=l/d&id=4430031&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2yxklxrfm8kjjszfhxxcryfxa_!!1771955875.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430031" target="_blank" href="/index.php?r=l/d&id=4430031&u=681200">便携大容量不锈钢保温杯可定制</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>279194</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432577" href="/index.php?r=l/d&id=4432577&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2joacodquqkjjszfixxcokfxa_!!2137359912.jpg_310x310.jpg" alt="">

                            <span class="video_icon"></span>
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>20</b>券后价</span>
                                <span class="old-price"><i>￥</i>30</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432577" target="_blank" href="/index.php?r=l/d&id=4432577&u=681200">女士加绒加厚V领美体塑身保暖内衣</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>33914</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4426245" href="/index.php?r=l/d&id=4426245&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2u2x_ssfjpufjsszhxxabuvxa_!!1812054091.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>89.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>60</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4426245" target="_blank" href="/index.php?r=l/d&id=4426245&u=681200">苹果6/6s/7p智能背夹移动充电宝</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>52200</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4430710" href="/index.php?r=l/d&id=4430710&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2lrfwxldh8kjjy1xcxxcpdxxa_!!1985763176.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>11.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>16.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430710" target="_blank" href="/index.php?r=l/d&id=4430710&u=681200">【第二支1元】双头防水持久不脱色眉笔</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>400262</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430817" href="/index.php?r=l/d&id=4430817&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1qnowb3ssmejjsspexxa77vxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>49.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>30</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430817" target="_blank" href="/index.php?r=l/d&id=4430817&u=681200">伊妮丝旗舰店　补水保湿黑面膜20片</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>72424</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4426818" href="/index.php?r=l/d&id=4426818&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2dwg6lbxmpufjszjixxxauvxa_!!739576765.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>109</b>券后价</span>
                                <span class="old-price"><i>￥</i>159</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>50</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4426818" target="_blank" href="/index.php?r=l/d&id=4426818&u=681200">【天骏】家用1200w大功率干衣机</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>46607</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4422191" href="/index.php?r=l/d&id=4422191&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2jiosb4pi8kjjsspoxxx6mfxa_!!2086974204.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>18</b>券后价</span>
                                <span class="old-price"><i>￥</i>28</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4422191" target="_blank" href="/index.php?r=l/d&id=4422191&u=681200">冬季加厚保暖法兰绒毛毯午睡盖毯</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>41790</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4429224" href="/index.php?r=l/d&id=4429224&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2pecgcjnj8kjjsszdxxaxufxa_!!1847547178.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19</b>券后价</span>
                                <span class="old-price"><i>￥</i>29</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429224" target="_blank" href="/index.php?r=l/d&id=4429224&u=681200">进口纯麦片冲饮全麦免煮代餐粥</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>53540</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="haitao" title="海淘"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433906" href="/index.php?r=l/d&id=4433906&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2bpd9xm69f1jjszpixxxfcxxa_!!2963831926.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>13.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>14.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>1</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433906" target="_blank" href="/index.php?r=l/d&id=4433906&u=681200">【猪太帅】厚底防滑时尚棉拖鞋</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>76149</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4428492" href="/index.php?r=l/d&id=4428492&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb29n1rxfjm8kjjszfnxxbqjfxa_!!85682526.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>16.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>19.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428492" target="_blank" href="/index.php?r=l/d&id=4428492&u=681200">通用型金毛泰迪萨摩狗粮【5斤】</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>151149</b></span>
                                <div class="goods-type">
                                                                    </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429563" href="/index.php?r=l/d&id=4429563&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb21_iwlvbntkjjsszcxxbo2vxa_!!2139226392.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>24.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429563" target="_blank" href="/index.php?r=l/d&id=4429563&u=681200">恩尔美玻璃杯男双层带盖便携杯子</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>124580</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427644" href="/index.php?r=l/d&id=4427644&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2.h3gair_f1jjszfoxxbvrxxa_!!2389957613.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>34.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427644" target="_blank" href="/index.php?r=l/d&id=4427644&u=681200">【贝夫】芝士蛋糕800g</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>21129</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4423073" href="/index.php?r=l/d&id=4423073&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2ncqpgvbntkjjy1zdxxascpxa_!!642841100.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>14.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4423073" target="_blank" href="/index.php?r=l/d&id=4423073&u=681200">【Ymer】环保防霉小麦切菜板</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>27320</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4428733" href="/index.php?r=l/d&id=4428733&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2f_cki2mtuejjszfkxxagopxa_!!772971083.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>39</b>券后价</span>
                                <span class="old-price"><i>￥</i>59</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428733" target="_blank" href="/index.php?r=l/d&id=4428733&u=681200">【华星浩泰】304不锈钢真空保温饭盒</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>54618</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429808" href="/index.php?r=l/d&id=4429808&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1cepmhzoil1jjszfyxxbfbpxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>26.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429808" target="_blank" href="/index.php?r=l/d&id=4429808&u=681200">买一送一春秋季中厚美腿连体袜2条装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>107536</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4428834" href="/index.php?r=l/d&id=4428834&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2iuyhipihskjjy0ffxxbgzfxa_!!2431902155.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>36.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>46.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428834" target="_blank" href="/index.php?r=l/d&id=4428834&u=681200">【噜噜豆】新款秋装男童针织衫</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>28109</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433324" href="/index.php?r=l/d&id=4433324&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1ddkycsni8kjjsspexxcwipxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>18.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>23.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433324" target="_blank" href="/index.php?r=l/d&id=4433324&u=681200">潮男装V领纯棉圆领修身长袖T恤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>87337</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427661" href="/index.php?r=l/d&id=4427661&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1ka_1pxxxxxxwxpxxxxxxxxxx_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427661" target="_blank" href="/index.php?r=l/d&id=4427661&u=681200">南极人3条装高腰经期防漏生理内裤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>35420</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433638" href="/index.php?r=l/d&id=4433638&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2ukahsc3pl1jjszfxxxcbbvxa_!!855476597.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>89</b>券后价</span>
                                <span class="old-price"><i>￥</i>99</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433638" target="_blank" href="/index.php?r=l/d&id=4433638&u=681200">雪中飞保暖内衣男 纯棉薄款</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>51802</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4429675" href="/index.php?r=l/d&id=4429675&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2iyl4aldh8kjjsszcxxbdtfxa_!!2005506561.png_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>89</b>券后价</span>
                                <span class="old-price"><i>￥</i>99</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429675" target="_blank" href="/index.php?r=l/d&id=4429675&u=681200">【韩夫人】迷你手持推杆两用吸尘器</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>50247</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429445" href="/index.php?r=l/d&id=4429445&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2t7w5rlusmejjy1zkxxawmpxa_!!2431902155.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>36.5</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.5</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429445" target="_blank" href="/index.php?r=l/d&id=4429445&u=681200">【噜噜豆】秋冬季男童加厚牛仔裤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>33294</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429924" href="/index.php?r=l/d&id=4429924&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2_jlucnpi8kjjsspoxxx6mfxa_!!2141387578.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24</b>券后价</span>
                                <span class="old-price"><i>￥</i>29</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429924" target="_blank" href="/index.php?r=l/d&id=4429924&u=681200">孕妇加绒高腰显瘦打底裤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>49552</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432363" href="/index.php?r=l/d&id=4432363&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2p85axibi8kjjy1zdxxbe1vxa_!!1985763176.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>17</b>券后价</span>
                                <span class="old-price"><i>￥</i>22</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432363" target="_blank" href="/index.php?r=l/d&id=4432363&u=681200">苹果6s/6p手机壳个性创意硅胶保护套</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>46438</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427630" href="/index.php?r=l/d&id=4427630&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1spnkcxti8kjjsspixxbm4fxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427630" target="_blank" href="/index.php?r=l/d&id=4427630&u=681200">【淘茗苑】桂圆红枣枸杞茶</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>35162</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4423509" href="/index.php?r=l/d&id=4423509&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2j4ftcf5n.ebjszfvxxbvmfxa_!!2207839197.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>14.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>19.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4423509" target="_blank" href="/index.php?r=l/d&id=4423509&u=681200">儿童剪纸书diy手工制作材料</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>23936</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432274" href="/index.php?r=l/d&id=4432274&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2rtvxnbchl1jjszjixxckcpxa_!!2420984287.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>11.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>16.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432274" target="_blank" href="/index.php?r=l/d&id=4432274&u=681200">【都市依邦】情侣款加绒加厚暖棉手套</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>42898</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430552" href="/index.php?r=l/d&id=4430552&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2ugwrxmuc61bjszfmxxbjhfxa_!!2167057107.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>12.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>17.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430552" target="_blank" href="/index.php?r=l/d&id=4430552&u=681200">升级款太空棉3D立体眼罩3件套</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>42747</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427978" href="/index.php?r=l/d&id=4427978&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2_hwsf3jkpufjsszcxxxfsfxa_!!1127360157.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427978" target="_blank" href="/index.php?r=l/d&id=4427978&u=681200">【飞利浦】办公家用游戏有线静音鼠标</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>51751</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432549" href="/index.php?r=l/d&id=4432549&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1kmwzhz2vu1jjszfwxxx2cpxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>80</b>券后价</span>
                                <span class="old-price"><i>￥</i>85</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432549" target="_blank" href="/index.php?r=l/d&id=4432549&u=681200">韩版百搭小清新上衣秋冬卫衣外套</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>39679</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430994" href="/index.php?r=l/d&id=4430994&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2kp3paqln8kjjszfmxxcq6xxa_!!1771424048.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>69</b>券后价</span>
                                <span class="old-price"><i>￥</i>99</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>30</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430994" target="_blank" href="/index.php?r=l/d&id=4430994&u=681200">【蜡笔小新】蚕丝玻尿酸美白补水面膜26片</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>35748</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429258" href="/index.php?r=l/d&id=4429258&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2_pwaxjmnykjjszphxxaezvxa_!!1822825446.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>14.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>25</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429258" target="_blank" href="/index.php?r=l/d&id=4429258&u=681200">ENMI大麦若叶青汁代餐粉20袋/盒</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>46848</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4432128" href="/index.php?r=l/d&id=4432128&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1oafxcv2h8kjjy1zkxxxr7pxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>38.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>58.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432128" target="_blank" href="/index.php?r=l/d&id=4432128&u=681200">秋季款套头圆领印花大码卫衣</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>42631</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432988" href="/index.php?r=l/d&id=4432988&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2tdlfxtho8kjjszftxxchfxxa_!!1637360641.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>14.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432988" target="_blank" href="/index.php?r=l/d&id=4432988&u=681200">雅邦黑管国产网红口红</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>45114</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433836" href="/index.php?r=l/d&id=4433836&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2g.facmvd8kjjy0flxxagbfxa_!!2047035621.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>28</b>券后价</span>
                                <span class="old-price"><i>￥</i>31</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433836" target="_blank" href="/index.php?r=l/d&id=4433836&u=681200">南洋牛筋乳胶手套加厚耐用橡胶手套</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>42911</b></span>
                                <div class="goods-type">
                                                                    </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4418712" href="/index.php?r=l/d&id=4418712&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2fpbqhgmgskjjssplxxaicpxa_!!908483460.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>22.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>32.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4418712" target="_blank" href="/index.php?r=l/d&id=4418712&u=681200">青蛙王子婴儿洗衣液4斤+皂3块</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>36370</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4428594" href="/index.php?r=l/d&id=4428594&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2ixyermxlpufjsszgxxcjdpxa_!!2829087341.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>109</b>券后价</span>
                                <span class="old-price"><i>￥</i>169</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>60</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428594" target="_blank" href="/index.php?r=l/d&id=4428594&u=681200">南极人-电动足疗自助按摩泡脚桶</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>33287</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430681" href="/index.php?r=l/d&id=4430681&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1soyisfxxxxcnaxxxxxxxxxxx_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>25.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>85.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>60</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430681" target="_blank" href="/index.php?r=l/d&id=4430681&u=681200">【明星指定牙膏】小巨蛋奢侈品牙膏</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>33290</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429482" href="/index.php?r=l/d&id=4429482&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2p.nnlhstmejjsszgxxacpfxa_!!3104746236.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>34.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429482" target="_blank" href="/index.php?r=l/d&id=4429482&u=681200">脂肪秤电子称多功能家用体重称</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>36544</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432794" href="/index.php?r=l/d&id=4432794&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2eekrxgln8kjjszfmxxcq6xxa_!!1925513940.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>99.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>80</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432794" target="_blank" href="/index.php?r=l/d&id=4432794&u=681200">【天猫】华珍堂阿胶糕500g</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>36339</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427653" href="/index.php?r=l/d&id=4427653&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2lbudtudnpufjszphxxbchpxa_!!1812054091.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>88</b>券后价</span>
                                <span class="old-price"><i>￥</i>158</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>70</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427653" target="_blank" href="/index.php?r=l/d&id=4427653&u=681200">【志高】手持挂烫机家用蒸汽电熨斗</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>30534</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427898" href="/index.php?r=l/d&id=4427898&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1qqfcahstmejjsszgxxacpfxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>59.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>69.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427898" target="_blank" href="/index.php?r=l/d&id=4427898&u=681200">新款宽松拼色条纹针织衫女</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>24956</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427645" href="/index.php?r=l/d&id=4427645&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2vu6eshplpufjsspixxcdffxa_!!796576434.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>59</b>券后价</span>
                                <span class="old-price"><i>￥</i>99</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>40</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427645" target="_blank" href="/index.php?r=l/d&id=4427645&u=681200">德国保温杯时尚男女真空316不锈钢水杯</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>18472</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4431921" href="/index.php?r=l/d&id=4431921&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1dmqzlhstmejjy1zcxxxagxxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>16.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>19.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4431921" target="_blank" href="/index.php?r=l/d&id=4431921&u=681200">【品彩】加绒加厚男女通用袜3双装</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>44557</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4428887" href="/index.php?r=l/d&id=4428887&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb29thyiolnpufjszfgxxbi7fxa_!!2111008293.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>30.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>35.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4428887" target="_blank" href="/index.php?r=l/d&id=4428887&u=681200">宝宝秋衣秋裤纯棉男童女童长袖</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>37261</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432543" href="/index.php?r=l/d&id=4432543&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2feyqbsyh8kjjsspdxxcrgvxa_!!2925048162.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>49.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432543" target="_blank" href="/index.php?r=l/d&id=4432543&u=681200">【买2送1】力维健乳清蛋白质粉455g</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>32057</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4427799" href="/index.php?r=l/d&id=4427799&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb27qfqbzni8kjjsspexxcwipxa-2244166499.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>89</b>券后价</span>
                                <span class="old-price"><i>￥</i>109</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427799" target="_blank" href="/index.php?r=l/d&id=4427799&u=681200">【禧天龙】55L大号整理收纳箱3个</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>24921</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4431246" href="/index.php?r=l/d&id=4431246&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb21rk1cmvd8kjjy0flxxagbfxa_!!137941124.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>109.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>139.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>30</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4431246" target="_blank" href="/index.php?r=l/d&id=4431246&u=681200">炊大皇麦饭石不粘无烟炒锅电磁炉燃气灶通用</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>20833</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427616" href="/index.php?r=l/d&id=4427616&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb28cdacjnj8kjjsszdxxaxufxa_!!2005506561.png_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>28.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>38.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427616" target="_blank" href="/index.php?r=l/d&id=4427616&u=681200">【志高】智能双棒打蛋器</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>22654</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429442" href="/index.php?r=l/d&id=4429442&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2frvwqbusmejjy1zjxxc0dxxa_!!3400741770.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>59</b>券后价</span>
                                <span class="old-price"><i>￥</i>69</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429442" target="_blank" href="/index.php?r=l/d&id=4429442&u=681200">熊博士婴儿迷你玻璃榨汁料理电动研磨机</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>24539</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4424064" href="/index.php?r=l/d&id=4424064&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1mlakcdvi8kjjsspjxxcgjxxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>33</b>券后价</span>
                                <span class="old-price"><i>￥</i>38</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4424064" target="_blank" href="/index.php?r=l/d&id=4424064&u=681200">【伊诺小镇】男女童加绒打底牛仔裤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>22396</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i><i class="ddq" title="咚咚"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429677" href="/index.php?r=l/d&id=4429677&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb25ulxc9sq2ujjszffxxxyufxa_!!67523328.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>84.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>99.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429677" target="_blank" href="/index.php?r=l/d&id=4429677&u=681200">3个装52升特大号收纳箱加厚</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>43879</b></span>
                                <div class="goods-type">
                                                                    </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4430585" href="/index.php?r=l/d&id=4430585&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2jsz4glchl1jjszfbxxaigxxa_!!3406617370.jpg_310x310.jpg" alt="">

                            <span class="video_icon"></span>
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430585" target="_blank" href="/index.php?r=l/d&id=4430585&u=681200">【董阿姨】柳州正宗特产螺蛳粉320g*5</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>18995</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4426270" href="/index.php?r=l/d&id=4426270&u=681200" class="img" rel="nofollow" target="_blank">
                                                        <img src="picture/tb2ej86ckejl1jjszfgxxa6oxxa_!!350915163.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>49</b>券后价</span>
                                <span class="old-price"><i>￥</i>99</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>50</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4426270" target="_blank" href="/index.php?r=l/d&id=4426270&u=681200">【欧诗漫旗舰店】补水保湿美肤三件套</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>272062</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432291" href="/index.php?r=l/d&id=4432291&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb23hpnardh8kjjsspnxxbnavxa_!!1616090327.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>108</b>券后价</span>
                                <span class="old-price"><i>￥</i>168</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>60</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432291" target="_blank" href="/index.php?r=l/d&id=4432291&u=681200">九阳净水器家用厨房水龙头过滤器</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>31093</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429870" href="/index.php?r=l/d&id=4429870&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2qdynm6ihskjjy0fixxcuifxa_!!695768367.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>12.5</b>券后价</span>
                                <span class="old-price"><i>￥</i>15.5</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429870" target="_blank" href="/index.php?r=l/d&id=4429870&u=681200">【收纳盒装】透明水晶泥果冻彩泥玩具</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>21734</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4432487" href="/index.php?r=l/d&id=4432487&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2dl9nxwzpyujjsspmxxx2ixxa_!!653088143.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>13.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>18.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432487" target="_blank" href="/index.php?r=l/d&id=4432487&u=681200">腹肌轮男士训练器收腹部健身器</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>29549</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4431221" href="/index.php?r=l/d&id=4431221&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2phw7aizd61bjszflxxxmmfxa_!!2048827825.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4431221" target="_blank" href="/index.php?r=l/d&id=4431221&u=681200">情侣室内包跟棉拖鞋防滑厚底毛绒</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>32150</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432048" href="/index.php?r=l/d&id=4432048&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb241wvav2h8kjjy0fcxxadlfxa_!!683819784.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>48</b>券后价</span>
                                <span class="old-price"><i>￥</i>58</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432048" target="_blank" href="/index.php?r=l/d&id=4432048&u=681200">时尚简约四件套1.2/1.5m床上用品</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>28919</b></span>
                                <div class="goods-type">
                                    <i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432540" href="/index.php?r=l/d&id=4432540&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1lpc6aslj8kjjy0fnxxcfdpxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432540" target="_blank" href="/index.php?r=l/d&id=4432540&u=681200">黛尔佳人5条女士内裤女纯棉三角裤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>27530</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4431561" href="/index.php?r=l/d&id=4431561&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb257uxds7pl1jjszfhxxccixxa_!!2697717584.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>7.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>17.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4431561" target="_blank" href="/index.php?r=l/d&id=4431561&u=681200">FANBIYA Q1重低音苹果安卓小米</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>245443</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433680" href="/index.php?r=l/d&id=4433680&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2gw7mfekjl1jjszfmxxcw0xxa_!!2254386826.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433680" target="_blank" href="/index.php?r=l/d&id=4433680&u=681200">【3条装】性感蕾丝内裤女舒适透气纯棉裆</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>25819</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4431363" href="/index.php?r=l/d&id=4431363&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2fz8gem0jpufjy0flxxc0bpxa_!!752091158.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>39</b>券后价</span>
                                <span class="old-price"><i>￥</i>59</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>20</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4431363" target="_blank" href="/index.php?r=l/d&id=4431363&u=681200">【百家好世旗舰店】拖把桶旋转双驱动拖把</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>25781</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4433427" href="/index.php?r=l/d&id=4433427&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1bu0_rvxxxxa5xvxxxxxxxxxx_!!2-item_pic.png_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24</b>券后价</span>
                                <span class="old-price"><i>￥</i>29</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4433427" target="_blank" href="/index.php?r=l/d&id=4433427&u=681200">【半亩花田】美白保湿脚膜赠足霜</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>25351</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427692" href="/index.php?r=l/d&id=4427692&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb21vmycsni8kjjsszixxb8qpxa_!!2364195246.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24.5</b>券后价</span>
                                <span class="old-price"><i>￥</i>27.5</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>3</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427692" target="_blank" href="/index.php?r=l/d&id=4427692&u=681200">奥宇5斤太空沙套装儿童玩具魔力安全无毒</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>34159</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4431119" href="/index.php?r=l/d&id=4431119&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb24wdzflxntkjjy0fjxxx6yvxa_!!1079320886.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>29.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4431119" target="_blank" href="/index.php?r=l/d&id=4431119&u=681200">【浪莎】6双纯棉秋冬男袜防臭耐穿</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>23049</b></span>
                                <div class="goods-type">
                                                                    </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430529" href="/index.php?r=l/d&id=4430529&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2rpqscsri8kjjy0fhxxbfnpxa_!!2535850806.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>24</b>券后价</span>
                                <span class="old-price"><i>￥</i>29</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430529" target="_blank" href="/index.php?r=l/d&id=4430529&u=681200">绿植园艺植物绿萝盆栽室内办公室花卉盆</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>32835</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4424058" href="/index.php?r=l/d&id=4424058&u=681200" class="img" rel="nofollow" target="_blank">
                                                        <img src="picture/tb2my_wxini8kjjsspexxcwipxa_!!392905216.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>21.4</b>券后价</span>
                                <span class="old-price"><i>￥</i>31.4</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4424058" target="_blank" href="/index.php?r=l/d&id=4424058&u=681200">【正泰旗舰店】21孔多位插排接线板</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>95719</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4432510" href="/index.php?r=l/d&id=4432510&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb29mthrulnpufjszfjxxxtavxa_!!1074335429.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>44.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>59.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>15</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432510" target="_blank" href="/index.php?r=l/d&id=4432510&u=681200">【自力旗舰店】304不锈钢焖烧壶</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>22729</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="you" title="优品"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429715" href="/index.php?r=l/d&id=4429715&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2qzboxdbj8kjjy1zjxxaqapxa_!!644172319.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>28.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>38.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429715" target="_blank" href="/index.php?r=l/d&id=4429715&u=681200">秋冬保暖加绒女童打底裤</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>30060</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430146" href="/index.php?r=l/d&id=4430146&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2rhcyccyh8kjjsspdxxcrgvxa_!!2582574782.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>11.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>16.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430146" target="_blank" href="/index.php?r=l/d&id=4430146&u=681200">车载手机支架吸盘导航仪座多功能</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>24167</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4430138" href="/index.php?r=l/d&id=4430138&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb1ham5ctfj8kjjy0fexxxkexxa_!!0-item_pic.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>12.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>17.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4430138" target="_blank" href="/index.php?r=l/d&id=4430138&u=681200">PVC防水防烫餐桌垫茶几垫60*120</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>25527</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4431014" href="/index.php?r=l/d&id=4431014&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2omv5cxti8kjjsspixxbm4fxa_!!2579599124.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>34</b>券后价</span>
                                <span class="old-price"><i>￥</i>59</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>25</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4431014" target="_blank" href="/index.php?r=l/d&id=4431014&u=681200">男士圆领渐变条纹毛衣针织衫</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>30958</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432955" href="/index.php?r=l/d&id=4432955&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb254ilagl8f1jjsszbxxbguvxa_!!2922388436.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>84</b>券后价</span>
                                <span class="old-price"><i>￥</i>169</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>85</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432955" target="_blank" href="/index.php?r=l/d&id=4432955&u=681200">沐美纳净石活性炭家用装修去除甲醛</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>20938</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4432764" href="/index.php?r=l/d&id=4432764&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2b2anmlnntkjjsspcxxb4kvxa_!!843758493.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>34.9</b>券后价</span>
                                <span class="old-price"><i>￥</i>39.9</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>5</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4432764" target="_blank" href="/index.php?r=l/d&id=4432764&u=681200">【舒冠】美白牙齿洗牙粉</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>22566</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 ">
                        <a data-gid="4429586" href="/index.php?r=l/d&id=4429586&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2.uo7xklm8kjjszfqxxa7.fxa_!!282272216.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>19.8</b>券后价</span>
                                <span class="old-price"><i>￥</i>29.8</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>10</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4429586" target="_blank" href="/index.php?r=l/d&id=4429586&u=681200">吴三公 庆元香菇干货剪脚干香菇</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>28438</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i>                                </div>
                            </div>
                        </div>
                    </li>
                                        <li class="theme-hover-border-color-1 no-right">
                        <a data-gid="4427647" href="/index.php?r=l/d&id=4427647&u=681200" class="img" rel="nofollow" target="_blank">
                                                            <i class="today-new"></i>
                                                        <img src="picture/tb2z8rynkj8pufjy1xbxxagqvxa_!!698090144.jpg_310x310.jpg" alt="">

                            
                        </a>
                        <div class="goods-padding">
                            <div class="coupon-wrap clearfix">
                                <span class="price theme-color-8"><b><i>￥</i>1.1</b>券后价</span>
                                <span class="old-price"><i>￥</i>2.1</span>
                                <span class="coupon theme-bg-color-9 theme-color-1 theme-border-color-1">券<b><i>￥</i>1</b></span>
                            </div>
                            <div class="title">
                                <a data-gid="4427647" target="_blank" href="/index.php?r=l/d&id=4427647&u=681200">卡贝304不锈钢衣柜橱柜门铰链</a>
                            </div>
                            <div class="goods-num-type">
                                <span class="goods-num">销量<b>266157</b></span>
                                <div class="goods-type">
                                    <i class="tmall" title="天猫"></i><i class="miaosha" title="秒杀"></i>                                </div>
                            </div>
                        </div>
                    </li>
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
<a class="next-page" href="/index.php?r=l&amp;page=2">下一页</a></div>    </div>
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
</body>
</html>
