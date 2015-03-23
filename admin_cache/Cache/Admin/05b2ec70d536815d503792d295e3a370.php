<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wbshop/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/wbshop/admin/Public/js/jquery.js"></script>
<script type="text/javascript">
$(function(){	
	//顶部导航切换
	$(".nav li a").click(function(){
		$(".nav li a.selected").removeClass("selected")
		$(this).addClass("selected");
	})	
})	
</script>


</head>

<body style="background:url(/wbshop/admin/Public/images/topbg.gif) repeat-x;">

    <div class="topleft">
    <a href="main.html" target="_parent"><img src="/wbshop/admin/Public/images/logo.png" title="系统首页" /></a>
    </div>
        
    <ul class="nav">
    <li><a href="<?php echo U('Left/defaultleft');?>" target="leftFrame" class="selected"><img src="/wbshop/admin/Public/images/icon01.png" title="控制台" /><h2>控制台</h2></a></li>
    <li><a href="<?php echo U('Left/site');?>" target="leftFrame"><img src="/wbshop/admin/Public/images/icon06.png" title="设置" /><h2>设置</h2></a></li>
    <li><a href="<?php echo U('Left/shop');?>"  target="leftFrame"><img src="/wbshop/admin/Public/images/icon07.png" title="商品" /><h2>商品</h2></a></li>
    <li><a href="<?php echo U('Left/store');?>"  target="leftFrame"><img src="/wbshop/admin/Public/images/icon04.png" title="店铺" /><h2>店铺</h2></a></li>
    <li><a href="<?php echo U('Left/member');?>" target="leftFrame"><img src="/wbshop/admin/Public/images/icon05.png" title="会员" /><h2>会员</h2></a></li>
    <li><a href="<?php echo U('Left/business');?>"  target="leftFrame"><img src="/wbshop/admin/Public/images/icon02.png" title="交易" /><h2>交易</h2></a></li>
    <li><a href="<?php echo U('Left/manage');?>"  target="leftFrame"><img src="/wbshop/admin/Public/images/icon06.png" title="管理" /><h2>管理</h2></a></li>
    <li><a href="<?php echo U('Left/operate');?>"  target="leftFrame"><img src="/wbshop/admin/Public/images/icon06.png" title="运营" /><h2>运营</h2></a></li>

    
    </ul>
            
    <div class="topright">    
    <ul>
    <li><span><img src="/wbshop/admin/Public/images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    <li><a href="login.html" target="_parent">退出</a></li>
    </ul>
     
    <div class="user">
    <span>admin</span>
    <i>消息</i>
    <b>5</b>
    </div>    
    
    </div>

</body>
</html>