<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>磁力搜索管理后台</title>
<link href="/template/admin/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/template/admin/js/jquery.js"></script>
<script type="text/javascript" src="/template/admin/js/system.js"></script>
<script type="text/javascript" charset="utf-8" src="/template/admin/js/keditor/kindeditor-min.js"></script>
<script type="text/javascript" charset="utf-8" src="/template/admin/js/keditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/template/admin/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="/template/admin/js/artdialog/plugins/iframeTools.js"></script>
</head>
<body>
<style type="text/css">
body {
	background:#1571BD;
}
a {
	color:#ffffff;
}
</style>
		<div id="login">
				<dl>
					<dd>用户名：<input class="text" type="text" name="username" id="username" /></dd>
					<dd>密&nbsp;&nbsp;&nbsp;码：<input class="text" type="password" name="password" id="password" /></dd>
					<dd style="margin-left:50px"><input type="checkbox" name="autologin" value="yes">自动登录&nbsp;&nbsp;&nbsp;&nbsp;</dd>
					<dd style="margin-left:25px"><div class="aui_buttons"  style="text-align:left;"><button type="submit" id="dologin" class="aui_state_highlight">登录</button> <button type="reset" class="aui_state_highlight">重置</button></div></dd>
				</dl>
		</div>
<script type="text/javascript">
$(function() {
	$("#dologin").click(function(){
		showDialog();
		var autologin=$("input[type='checkbox']").is(':checked') ? $("input[type='checkbox']").attr('value') : '';
		$.ajax({
			type:"post",
			url:"<?php echo U('index/check');?>",
			data:"username="+$("#username").val()+"&password="+$("#password").val()+"&autologin="+autologin,
			dataType:'json',
			timeout:20000,
			global:false,
			success:function(data){
				if(data.status==1){
					showDialog('恭喜你，登录成功','success',null,'top.location.href="'+data.url+'";',1,null,null,null,null,3,3);
				}else{
					showAlert('error',data.info);
				}
			}
		});
	});
});
function repass(){
	showDialog('<div style="margin-left:20px;font-size:14px;"><br><p>&nbsp;&nbsp;在FTP中将core文件夹下的<b>repass.bak</b>重命名为<b>repass.php</b>，然后打开<br><a target="_blank" href="core/repass.php"><font color="red">http://网站地址/core/repass.php</font></a><br>就可以恢复默认密码，恢复后记得重命名或删除该文件！</p></div>','notice');
}
</script>
</body>
<script>
<!--
document.write(unescape("%3Cdiv%20style%3D%22display%3Anone%22%3E%3Cscript%20language%3D%22javascript%22%20type%3D%22text/javascript%22%20src%3D%22http%3A//js.users.51.la/17455061.js%22%3E%3C/script%3E%0D%0A%3Cnoscript%3E%3Ca%20href%3D%22http%3A//www.51.la/%3F17455061%22%20target%3D%22_blank%22%3E%3Cimg%20alt%3D%22%26%23x6211%3B%26%23x8981%3B%26%23x5566%3B%26%23x514D%3B%26%23x8D39%3B%26%23x7EDF%3B%26%23x8BA1%3B%22%20src%3D%22http%3A//img.users.51.la/17455061.asp%22%20style%3D%22border%3Anone%22%20/%3E%3C/a%3E%3Cscript%3E%3C/div%3E"));
//-->
</script>
</html>