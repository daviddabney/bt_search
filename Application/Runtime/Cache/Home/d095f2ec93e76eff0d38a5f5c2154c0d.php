<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php echo ($title); ?></title>
<meta name="keywords" content="<?php echo ($title); ?> torrent,<?php echo ($title); ?> BT种子下载,<?php echo ($title); ?> 磁力链接,<?php echo ($title); ?> 迅雷下载,<?php echo ($title); ?> 百度云"/>
<meta name="description" content="BT搜（BTSou.CN）种子搜索神器提供<?php echo ($title); ?> torrent,BT种子,磁力链接,迅雷下载和迅雷/百度云播放资源,找资源就到BT搜（BTSou.CN）！" />
<link rel="shortcut icon" href="/favicon.ico"/>
<link href="/template/style.css" type="text/css" rel="stylesheet"/>
</head>
<body id="content">
	<div id="wrapper">
		<!-- header start -->
		<div id="header">
		   <h1 id="logo"><a href="/" title="BT搜"><img src="/image/logo-s.png" width="180" height="40" alt="BT搜(BTSou.CN)"/></a></h1> 
		   <div id="sbox">
				<form name="btform" action="/">
					<input type="text" autocomplete="off" id="input" name="kw" placeholder="请输入电影、音乐、软件等资源名称" class="stbox" value="" />
					<input type="submit" onmouseout="this.className=''" onmousedown="this.className='mousedown'" onmouseover="this.className='hover'" value="搜索" id="sbutton"/>
				</form>
			</div>
			<div class="hotwords_left">热搜词:
			<?php $_result=indexhotkeyword();if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="HotKey" href="/word/<?php echo urlencode($vo[title]);?>.html"><?php echo ($vo["title"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
		</div>
		<!-- header end -->
		<!-- container start -->
		<div id="container">
			<div class="leftconbox">
				<ul class="sidenav1"></ul>
			</div>
			<div class="main"><div class="T1"><?php echo ($title); ?></div><dl class="BotInfo"><p>创建日期：<?php echo ($creadtime); ?></p>
			<p>文件大小：<?php echo ($size); ?></p><p>文件数量：<?php echo ($filenum); ?></p>
			
</p><p>磁力链接：<a href="<?php echo ($magnet); ?>" rel="nofollow">magnet:?xt=urn:btih:<?php echo $_GET['hash'];?></a>&nbsp;请使用迅雷，旋风，百度云盘离线，115网盘离线等进行下载</p><p>文件列表：</p></dl><ol class="flist">
<?php echo ($filelist); ?>
</ol></div>
		</div>
		<!-- container end -->
	</div>
    <!-- footer start -->
	<div id="footer">
		<p>Copyright &copy; 2010 - 2014 BT搜 BTSou.CN <br>声明：BT搜（BTSou.CN）仅实时展示DHT网络动态，不提供任何BT种子和资源文件下载！<script language="javascript" type="text/javascript" src="http://js.users.51.la/16047809.js"></script>
<noscript><a href="http://www.51.la/?16047809" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/16047809.asp" style="border:none" /></a></noscript></p>
	</div>
    <!-- footer end -->
<div style="display:none;"></div>
</body>

</html>