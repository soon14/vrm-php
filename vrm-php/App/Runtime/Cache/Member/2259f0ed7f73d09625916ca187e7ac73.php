<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link rel="stylesheet" href="__PUBLIC__/member/style/common.css" media="screen"/>
        <script type="text/javascript" src="__PUBLIC__/common/js/colorpicker2/jquery.js"></script>		
        <script type="text/javascript" src="__PUBLIC__/common/js/colorpicker2/jquery.colorpicker.js"></script>
        <script type="text/javascript" src="__PUBLIC__/common/js/common.js"></script> 
    </head>
    <body>
        <?php echo W("Bg");?>
        <div id="upmain">
            <div class="main">
                <div class="main_head">
                    <div class="main_head_left"></div>
                    <div class="main_head_right"></div>
                    <div class="main_head_main">
                        <div class="title">全景项目 - <?php echo ($panorow['title']); ?></div>
                        <div title="关闭" data-info="确认返回功能首页？" data-url="<?php echo U('main/index');?>" class="delaction close"></div>
                        <div title="返回上级" onclick="LinkTo('<?php echo ($backurl); ?>');" class="goback"></div>
                    </div>
                </div>
                <div class="main_mid">
                    <div class="main_mid_left"></div>
                    <div class="main_mid_right"></div>
                    <div class="main_mid_main">
                        <div class="pano_menu">
                            <?php echo W("Panomenu",array("pano_id"=>$pano_id,"num"=>4));?>
                        </div>
                        <div class="none_main">
                            <div class="action_main">
                                <div class="action_title"><a href="<?php echo U('toolbox/index',array('pano_id'=>$pano_id));?>">模块管理</a> - <a href="<?php echo U('index',array('pano_id'=>$pano_id));?>">导航菜单管理</a>
								<span class="vrback"><a href="<?php echo U('toolbox/index',array('pano_id'=>$pano_id));?>">返回上级</a></span></div>
                                
								
								<div class="pano_top">
                                    <span class="pano_topbtnb">设置</span>
                                    <a class="pano_topbtn" href="<?php echo U('navlist',array('pano_id'=>$pano_id));?>">导航管理</a>
									<a class="pano_topbtn" href="<?php echo U('msglist',array('pano_id'=>$pano_id));?>">留言管理</a>
                                </div>


								<div class="pano_table">
								<div class="action_web">
                                    <form name="form1" action="" enctype="multipart/form-data" method="post">
                                        <input name="dopost" value="save" type="hidden" />
                                        <input name="pano_id" value="<?php echo ($pano_id); ?>" type="hidden" />
                                        <table width="100%" border="0" cellpadding="4" cellspacing="1" align="center">
                                            <tr class="tr_white" height="40">
                                                <td align="right"><b>开启菜单导航：</b></td>
                                                <td>
                                                    <span class="onoff" target="opennav" value="<?php echo ($panorow['opennav']); ?>"></span>
                                                    <input type="hidden" id="opennav" name="opennav" value="<?php echo ($panorow['opennav']); ?>" />
													（仅支持PC端使用）
                                                </td>
                                            </tr>
											
											<tr class="tr_white" height="40">
                                            <td align="right" width="80"><b>导航样式图：</b></td>
                                            <td align="left">												
												<span id="navbgsrc">
												<?php if(!empty($navbginfo['file'])): ?><img src="<?php echo ($navbginfo['file']); ?>" style="max-width:300px;max-height:300px;"/><br><?php endif; ?>
												</span>
												<input type="hidden" id="navbgid" name="navbgid" value="<?php echo ($navbginfo['id']); ?>">
                                                <input class="btn3" onclick="selNavbg();" value="点击选择" type="button">
                                            </td>
											</tr>

											<tr class="tr_white" height="40">
                                            <td align="right" width="80"><b>默认文本颜色：</b></td>
                                            <td align="left">
                                                <input type="text" class="shortinputcube" value="<?php echo ($panonav['color']); ?>" id="cp3text" style="color:<?php echo ($panonav['color']); ?>;" name="color" />
												<img src="/Public/common/js/colorpicker2/colorpicker.png" id="cp3" style="cursor:pointer"/>
                                            </td>
											</tr>

											<tr class="tr_white" height="40">
                                            <td align="right" width="80"><b>鼠标滑过文本颜色：</b></td>
                                            <td align="left">
                                                <input type="text" class="shortinputcube" value="<?php echo ($panonav['overcolor']); ?>" id="cp4text" style="color:<?php echo ($panonav['overcolor']); ?>;" name="overcolor" />
												<img src="/Public/common/js/colorpicker2/colorpicker.png" id="cp4" style="cursor:pointer"/>
                                            </td>
											</tr>

											<tr class="tr_white" height="40">
                                            <td align="right" width="80"><b>文本位置调节：</b></td>
                                            <td align="left">
                                                左右浮动：<input type="text" id="ox" class="shortinputcube" value="<?php echo ($panonav['ox']); ?>" name="ox" /><br>
                                                上下浮动：<input type="text" id="oy" class="shortinputcube" value="<?php echo ($panonav['oy']); ?>" name="oy" style="margin-top:2px;" />
												<br><span style="margin-top:9px;float:left;">可以填写负值</span>
                                            </td>
											</tr>

                                            <tr class="tr_white" height="40">
                                                <td align="right" width="120"></td>
                                                <td align="left">
                                                    <input type="submit" class="blackbutton" value="提交" />
                                                </td>
                                            </tr>

                                        </table>
                                    </form>
                                </div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main_foot">
                    <div class="main_foot_left"></div>
                    <div class="main_foot_right"></div>
                    <div class="main_foot_main"></div>
                </div>
            </div>
        </div>
    </body>
<script type="text/javascript">
$(function(){	
	$("#cp3").colorpicker({
		fillcolor:true,
		target:'#cp3text',
		success:function(o,color){
			$("#cp3text").css("color",color);
		}
	});
	$("#cp4").colorpicker({
		fillcolor:true,
		target:'#cp4text',
		success:function(o,color){
			$("#cp4text").css("color",color);
		}
    });
	onoroff();
});
function selNavbg(){
	openwin("获取导航样式","/member/Daohang/selNavbg",800,600);
}

function getNavbg(spot_id,spot_file){
	$("#navbgid").val(spot_id);
	$("#navbgsrc").html('<img src="'+spot_file+'" style="max-width:300px;max-height:300px;"/><br>');
	closewin();
}
</script>
</html>