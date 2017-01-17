<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="__PUBLIC__/admin/style/common.css" rel="stylesheet" type="text/css" />
        <script src="__PUBLIC__/common/js/jquery.js" language="javascript" type="text/javascript"></script>
        <script src="__PUBLIC__/common/js/jqueryTime.js" language="javascript" type="text/javascript"></script>
        <script src="__PUBLIC__/common/js/common.js" language="javascript" type="text/javascript"></script>
        <script type="text/javascript">
            $(function(){
                $("body").oneTime("2s","doit",function(){
                    show("<?php echo ($res['result']); ?>");
                });
            });
            function show(n){
                if(n==0){
                    $(".sheng1").hide();
                    $(".sheng2").show();
                }else{
                    $(".sheng1").hide();
                    $(".sheng3").show();
                }
            }
        </script>
        <style>
            .banshow{
                width: 500px; height: auto; overflow: hidden; border:1px solid #ace; padding: 10px; border-radius : 5px;
            }
            .chanpin{
                width: 120px; height: 121px; overflow: hidden; float: left;
                background: url(__PUBLIC__/admin/images/updata/chan1.png) no-repeat;
            }
            .sheng1{
                width: 370px; height: auto; overflow: hidden; float: right;
            }
            .sheng2,.sheng3{
                width: 370px; height: auto; overflow: hidden; float: right; display: none;
            }
            .shengtitle{
                width: auto; height: 24px; overflow: hidden;
            }
            .shengtitle .title{
                width: auto; height: 22px; overflow: hidden; border:1px solid #ace; border-radius: 4px; float: left;
                font: 12px/22px "微软雅黑"; color: #0099CC; padding: 0 6px; cursor: default;
            }
            .quangoing{
                width: 80px; height: 80px; overflow: hidden; background: url(__PUBLIC__/admin/images/updata/quan1.gif) no-repeat; margin-top: 15px; margin-left: 12px;
            }
            .info{
                width: 350px; height: auto; overflow: hidden; border:1px solid #ace; padding: 5px 8px; margin-top: 10px;
                font: 12px/22px "微软雅黑"; color: #0099CC; cursor: default;
            }
            .info p{
                font: 12px/22px "微软雅黑"; color: #0099CC;
            }
            .red{
                color: #F60;
            }
            .red:hover{
                color: #be0000;
            }
        </style>
    </head>
    <body>
        <div id="indexmian">
            <div id="indextitle">版本升级 </div>
            <div id="indexmain">
                <div class="banshow">
                    <div class="chanpin"></div>
                    <div class="sheng1">
                        <div class="shengtitle"><div class="title">获取版本信息</div></div>
                        <div class="quangoing"></div>
                    </div>
                    <div class="sheng2">
                        <div class="shengtitle"><div class="title">版本信息</div></div>
                        <div class="info">
                            <b>当前版本：</b><?php echo ($res['nowban']); ?><br/>
                            <b>升级信息：</b>目前已经是最新版本，无需升级！
                        </div>
                    </div>
                    <div class="sheng3">
                        <div class="shengtitle"><div class="title">版本信息</div></div>
                        <div class="info">
                            <b>当前版本：</b><?php echo ($res['nowban']); ?><br/>
                            <b>升级版本：</b><?php echo ($res['ban']); ?> <a class="red" href="<?php echo U('done');?>">（我要升级）</a><br/>
                            <b>补丁大小：</b><?php echo ($res['size']); ?> MB<br/>
                            <b>发布日期：</b><?php echo ($res['date']); ?><br/><br/>
                            <?php echo ($res['info']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>