<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>360VR全景通</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="__PUBLIC__/common/style/common.css" rel="stylesheet" type="text/css"/>
        <link href="__PUBLIC__/member/style/login.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="__PUBLIC__/common/js/jquery.js"></script>
        <script type="text/javascript" src="__PUBLIC__/common/js/common.js"></script>
        <script type="text/javascript">
            function changeAuthCode() {
                var num = new Date().getTime();
                var rand = Math.round(Math.random() * 10000);
                num = num + rand;
                $('#ver_code').css('visibility', 'visible');
                if ($("#vdimgck")[0]) {
                    $("#vdimgck")[0].src = "../require/vdimgck.php?tag=" + num;
                }
                return false;
            }
            $(document).ready(function(){
                $("#userid").focus();
                $("input").focus(function(){
                    $(this).addClass("cheaked");
                });
                $("input").blur(function(){
                    $(this).removeClass("cheaked");
                });
            });
        </script>
    </head>
    <body>
        <div class="main">
            <div class="top">
                <div class="logo"><img src="__PUBLIC__/member/images/login/lg_logo.gif" /></div>
                <div class="topmain"><a href="http://www.360vr.cn" target="_blank">联系我们</a><span>全国免费热线：<b>4000-123-720</b></span></div>
            </div>
            <div class="mid">
                <form name="form1" method="post">
                    <input type="hidden" name="dopost" value="login" />
                    <div class="mid_mian">
                        <div class="logn">
                            <div class="title">全景通登录</div>
                            <div class="box">
                                <table>
                                    <tr height="50">
                                        <td style="text-align: right" width="60">用户名</td>
                                        <td style="padding-left: 10px;"><input type="text" id="userid" name="userid" class="inputbox" /></td>
                                    </tr>
                                    <tr height="50">
                                        <td style="text-align: right" width="60">密&nbsp;&nbsp;&nbsp;码</td>
                                        <td style="padding-left: 10px;"><input type="password" class="inputbox" name="pwd" /></td>
                                    </tr>
                                    <tr height="60">
                                        <td colspan="2" style="text-align: center;"><input class="btn1" value="" type="submit" /><input value="" onclick="LinkTo('/member/reg');" class="btn2" type="button" /></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="down">
                <span>Copyright &copy; 2007-2016 360VR.cn Inc. All Rights Reserved</span>
				<span><a href="http://webscan.360.cn/index/checkwebsite/url/www.dd-sh.com" name="aa2937b250063a75f1970a439cc8c373" >360网站安全检测平台</a></span>
            </div>
        </div>
        <script type="text/javascript">
            var allheight = $(window).height();
            var mtp = (allheight - 537) / 2 - 30;
            if (mtp > 0) {
                $(".main").css("margin-top", mtp + "px");
            }
            $(window).resize(function() {
                var allheight = $(window).height();
                var mtp = (allheight - 537) / 2 - 30;
                if (mtp > 0) {
                    $(".main").css("margin-top", mtp + "px");
                }
            });
        </script>
    </body>
</html>