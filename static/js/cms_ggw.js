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
    return ""
}


var randData = function(switch_type,content_source,data_source,datacookie){
    var returnArr = '';
    data_source = data_source.switch_type == 1 ?data_source:data_source.data[0];//内容切换方式 1 页面刷新时切换 ，2 窗口内定时切换（轮播）

    if(content_source == 2){//推荐位内容源2 列表随机，3指定id
        var ad_id;
        if(getCookie(datacookie) == ''){//
            ad_id = '';
        }else{
            ad_id = getCookie(datacookie);
        }
        if(data_source.data.length > 1){
            var l = data_source.data.length,
                dataArr = [];
            for(var s = 0 ; s < l ; s ++){
                if (data_source.data[s].ad_id != ad_id){
                    dataArr.push(data_source.data[s]);
                }
            }
            l = parseInt(Math.random()*dataArr.length);
            returnArr = dataArr[l];
        }else{
            returnArr = data_source.data[0];
        }

        ad_id = returnArr.ad_id;
        setCookie(datacookie,ad_id,9999999999999999);
    }else{
        returnArr = data_source.data[0];
    }
    return returnArr;
}


$(document).ready(function (e) {
    var c = 0,
        ggwUrl = $('#content').data('ggwurl');
$.ajax({
    type: "POST",
    url: ggwUrl,
    dataType: 'json',
    success: function (res) {
        if(res.status == 0){
            if(res.data.length> 0){
                //弹出
                if(res.data[0].cms_web_index){
                    if(res.data[0].cms_web_index.data.length>0) {
                        var oDomIndex = res.data[0].cms_web_index,
                            closeBtn = oDomIndex.close_btn == 1 ? '<span class="ggw_fm_close"></span>' : '',
                            oDomCok = oDomIndex.close_after == 1 ? "ggw_cok" : "",
                            oDomdata = randData(oDomIndex.switch_type,oDomIndex.content_source,oDomIndex,'cms_web_sort_index'),
                            target = oDomdata.open_type == 1?"_blank":"_self" ;
                         var htmlStrFm = '<div class="ggw_fm ' + oDomCok + '" data-cok="cms_web_index"><div class="img_size"><img src="' + oDomdata.img_url + '"></div><div class="ggw_fm_main cms_ggw"><a href="' + oDomdata.href + '" target="'+target+'"></a></div>' + closeBtn + '</div>';
                        if (oDomIndex.close_after == 1) {
                            if (getCookie('cms_web_index') != 0 || getCookie('cms_web_index') == '') {
                                $('body').append(htmlStrFm);
                            }
                        } else {
                            setCookie('cms_web_index','0',1);
                            $('body').append(htmlStrFm);
                        }
                    }
                }
                //右侧
                if(res.data[0].cms_web_right){
                    if(res.data[0].cms_web_right.data.length>0) {
                        var oDomRight = res.data[0].cms_web_right,
                            oDomCok = oDomRight.close_after == 1 ? "ggw_cok ggw_clo" : oDomRight.close_after == 2?"ggw_clo":"",
                            oDomdata = randData(oDomRight.switch_type,oDomRight.content_source,oDomRight,'cms_web_sort_right'),
                            target = oDomdata.open_type == 1?"_blank":"_self" ,
                            htmlStrFr = '<div class="ggw_fr ' + oDomCok + '" data-cok="cms_web_right"><div class="ggw_fr_main"><a href="' + oDomdata.href + '" target="'+target+'" ><img src="' + oDomdata.img_url + '" alt=""></a></div></div>';
                        if (oDomRight.close_after == 1) {
                            if (getCookie('cms_web_right') != 0 || getCookie('cms_web_right') == '') {
                                $('body').append(htmlStrFr);
                            }
                        } else {
                            setCookie('cms_web_right','0',1);
                            $('body').append(htmlStrFr);
                        }
                    }
                }
            }
        }
    }

    }).then(
        function(){
            ggw_fr_fun();

            //右侧广告位定位 Start
            var ggwFrLeft = $('.banner_con').width() + $('.banner_con').offset().left + 20 + "px";
            $('.ggw_fr').css({'left':ggwFrLeft,'visibility':'visible'});
            $(window).resize(function () {
                var ggwFrLeft = $('.banner_con').width() + $('.banner_con').offset().left + 20 + "px";
                $('.ggw_fr').css({'left':ggwFrLeft,'visibility':'visible'});
            })
            //右侧广告位定位 End


            var timeStamp = new Date() ;
            timeStamp.setHours('23');
            timeStamp.setMinutes('59');
            timeStamp.setSeconds('60');

            $('.ggw_cok a').click(function(){
                document.cookie = $(this).parents('.ggw_cok').data('cok') + "=" + escape(0) + (";expires=" + timeStamp.toGMTString());
            });
            $('.ggw_cok .ggw_fm_close').click(function(){
                document.cookie = $(this).parents('.ggw_cok').data('cok') + "=" + escape(0) + (";expires=" + timeStamp.toGMTString());
            });


            $('.ggw_fm_close').on('click',function(){
                layer.closeAll();
            });
            $('.ggw_fm_main a').on('click',function(e){

                var url = $(this).attr('href'),
                    newOpen = $(this).attr('target') == "_blank"?1:0;
                layer.closeAll();
                e.preventDefault();
                setTimeout(function(){
                    if(newOpen){
                        window.open(url);
                    }else{
                        window.location.href = url;
                    }
                },10)
            });
            $('.ggw_clo .ggw_fr_main a').on('click',function(e){
                var url = $(this).attr('href'),
                    newOpen = $(this).attr('target') == "_blank"?1:0;
                $('.ggw_clo').remove();
                e.preventDefault();
                setTimeout(function(){
                    if(newOpen){
                        window.open(url);
                    }else{
                        window.location.href = url;
                    }
            },10)
            });
        }
   );
    //弹出告位定位 Start
    var ggw_fr_fun = function(){
        c ++;
        if(c < 200){
            if($('.img_size img').width() == 0){
                setTimeout(arguments.callee,10) ;
            }else{
                var fmWid = $('.img_size img').width(),
                    fmHeight = $('.img_size img').height();
                fmWid = fmWid > 600?600:fmWid+1;
                fmHeight = fmHeight > 600?600:fmHeight+1;
                fmWid += "px";
                fmHeight += "px";
                $('.ggw_fm_main a').append('<img src="'+$('.img_size img').attr('src')+'" />');
                $('.img_size').remove();
                if ($('.ggw_fm img').length > 0) {
                    var alowScroll = 0;
                    $('.cms_ggw').parents('.layui-layer').css({'background':'none','box-shadow':'none'});
                    layer.open({
                        type: 1,
                        title: '',
                        closeBtn: 0,
                        shade: 0.7,
                        skin: 'layui-layer-molv',
                        area: [fmWid, fmHeight],
                        content: $('.ggw_fm'),
                        end: function () {
                            $('body').css('overflow', '');
                            alowScroll = 1;
                        }
                    });

                    $(document).on('mousewheel', function () {
                        if (alowScroll != 1) {
                            return false;
                        }
                    });
                }
            }
        }
    };
    //弹出告位定位 End)

});