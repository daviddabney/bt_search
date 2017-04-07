<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="/template/admin/css/admin.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/template/admin/js/jquery.js"></script>
<script type="text/javascript" src="/template/admin/js/system.js"></script>
<script type="text/javascript" charset="utf-8" src="/template/admin/js/keditor/kindeditor-min.js"></script>
<script type="text/javascript" charset="utf-8" src="/template/admin/js/keditor/lang/zh_CN.js"></script>
<script type="text/javascript" src="/template/admin/js/artdialog/jquery.artDialog.js?skin=default"></script>
<script type="text/javascript" src="/template/admin/js/artdialog/plugins/iframeTools.js"></script>
</head>
<body class="body-main">


<ul id="admin_sub_title">
	<li class="sub"><a href="javascript:void(0)" onClick="selectTab('config0',this)">系统设置</a></li>
</ul>
<div id="admin_right_b">
<script>
$(function() {
	$("#web_close_true").click(function(){
		$("#web_close_reason").show();
	});
	$("#web_close_false").click(function(){
		$("#web_close_reason").hide();
	});
	$("#dosave").click(function(){
		showDialog();
		$.ajax({
			type:"post",
			url:"<?php echo U('config');?>",
			data:$("form").serialize(),
			dataType:'json',
			timeout:28000,
			global:false,
			success:function(data){
				if(data.status==1){
					showAlert('success','恭喜你，修改成功');
				}else{
					showAlert('error',data.info);
				}
			}
		});
	 return false;
	});
});
</script>
<form method="post">
  <table width="98%" border="0" align="center" cellpadding="3" cellspacing="1" id="config0">
   	

	<tr class="tdbg">
      <td align="right">广告位1：</td>
      <td><textarea name="con[myad_1]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_1']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位2：</td>
      <td><textarea name="con[myad_2]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_2']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位3：</td>
      <td><textarea name="con[myad_3]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_3']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位4：</td>
      <td><textarea name="con[myad_4]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_4']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位5：</td>
      <td><textarea name="con[myad_5]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_5']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位6：</td>
      <td><textarea name="con[myad_6]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_6']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位7：</td>
      <td><textarea name="con[myad_7]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_7']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位8：</td>
      <td><textarea name="con[myad_8]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_8']); ?></textarea></td>
    </tr>
	<tr class="tdbg">
      <td align="right">广告位9：</td>
      <td><textarea name="con[myad_9]"  rows="3"  class="inputs" style="width:450px;padding:1px;"><?php echo ($config['myad_9']); ?></textarea></td>
    </tr>

	


	</table>

	<table width="98%" border="0" align="center" cellpadding="3" cellspacing="1">
    <tr class="tdbg">
	  <td width="130" align="center" class="tdbg">&nbsp;</td>
      <td><div class="aui_buttons"  style="text-align:left;"><button type="submit" id="dosave" class="aui_state_highlight">保存设置</button> <button type="reset" class="aui_state_highlight">重置</button></div></td>
    </tr>
	</table>
	</form>
<div class="runtime"></div>  
</div>
</body>
</html>