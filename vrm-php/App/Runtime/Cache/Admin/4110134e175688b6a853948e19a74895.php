<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <link href="__PUBLIC__/admin/style/common.css" rel="stylesheet" type="text/css" />
        <script src="__PUBLIC__/common/js/jquery.js" language="javascript" type="text/javascript"></script>
        <script src="__PUBLIC__/common/js/common.js" language="javascript" type="text/javascript"></script>     
    </head>
    <body>
        <div class="main">
            <form name='form1' id="form1" method='post' onsubmit="return checksb();">
                <input type='hidden' name='dopost' value='save'/>
                <input type='hidden' name='id' value='<?php echo ($id); ?>'/>
                <table width="100%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D6D6D6" align="center">
                    <tr>
                        <td class="td_title" height="26" style="padding-left:10px;">
                            <table width="100%" border="0" cellspacing="1" cellpadding="1">
                                <tr> 
                                    <td width="24%" class="td_p8"><b>制作账号修改</b> </td>
                                    <td width="76%" class="td_pr8" align="right">
                                        <input type="button" onclick="window.location.href='<?php echo U('user/index');?>'" value="返回管理" class="btn2"/>
                                    </td>
                                </tr>
                            </table>
                        </td>                            
                    </tr>
                    <tr class="tr_white">
                        <td align="center" style="padding-top: 20px;">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr> 
                                    <td width="180" height="40" align="right"><b><font color="red">*</font>登录帐号：</b></td>
                                    <td align="left" class="td_p8">
                                        <input type="text" class="cs" id="userid" name="userid" tname="制作帐号" value="<?php echo ($info["account"]); ?>" />                                        
                                    </td>
                                </tr>
                                <tr height="40">
                                    <td align="right" width="180"><b>设置密码：</b></td>
                                    <td align="left" class="td_p8">
                                        <input type="text" class="cs" id="pwd" tname="密码" name="pwd"/> 为空则不做更改
                                    </td>
                                </tr>
                                <tr height="40">
                                    <td align="right" width="180"><b><font color="red">*</font>昵称：</b></td>
                                    <td align="left" class="td_p8">
                                        <input type="text" class="cs" id="user_name" tname="昵称" name="user_name" value="<?php echo ($info["nickname"]); ?>"/>
                                    </td>
                                </tr>
								<tr height="40">
                                    <td align="right" width="180"><b>手机号码：</b></td>
                                    <td align="left" class="td_p8">
                                        <input type="text" id="phone" name="phone" value="<?php echo ($info["phone"]); ?>" />
                                    </td>
                                </tr>
								<tr height="40">
                                    <td align="right" width="180"><b>电子邮箱：</b></td>
                                    <td align="left" class="td_p8">
                                        <input type="text" id="email" name="email" value="<?php echo ($info["email"]); ?>" />
                                    </td>
                                </tr>
								<tr height="40">
                                    <td align="right" width="180"><b>允许创建全景项目数量：</b></td>
                                    <td align="left" class="td_p8">
                                        <input type="text" id="pano_limit" name="pano_limit" value="<?php echo ($info["pano_limit"]); ?>" /> 个
                                    </td>
                                </tr>

                                <!-- <tr height="40">
                                    <td align="right" width="180"><b>管理员权限：</b></td>
                                    <td align="left" class="td_p8">
                                        <select name="group_id">
                                            <?php echo CteatSelect(10,$garr);;?>
                                        </select>
                                    </td>
                                </tr> -->
                                <tr> 
                                    <td colspan="2" height="10"></td>
                                </tr>

                                <tr> 
                                    <td height="50" align="center">&nbsp;</td>
                                    <td height="50"  style="text-align:left;">
                                        <input  class="btn1" type="submit" value="修改"/>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>                    
                </table>                
            </form>
        </div>


<script type="text/javascript">
$(document).ready(function(){
	$("#form1").submit(function(){
		if($("#userid").val() == "")
		{
			alert("请填写制作账号");
			return false;
		}
		else if ($("#user_name").val()=="")
		{
			alert("请填写昵称");
			return false;
		}
	});
});
</script>



    </body>
</html>