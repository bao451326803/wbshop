<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wbshop/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/wbshop/admin/Public/js/jquery.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson li").click(function(){
		$(".menuson li.active").removeClass("active")
		$(this).addClass("active");
	});
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('ul').slideUp();
		if($ul.is(':visible')){
			$(this).next('ul').slideUp();
		}else{
			$(this).next('ul').slideDown();
		}
	});
})	
</script>


</head>

<body style="background:#f0f9fd;">
	<div class="lefttop"><span></span>设置管理</div>
    
    <dl class="leftmenu">
        
    <dd>
    <div class="title">
    <span><img src="/wbshop/admin/Public/images/leftico01.png" /></span>快捷导航
    </div>
    	<ul class="menuson">
        <li class="active"><cite></cite><a href="<?php echo U('Menusite/website');?>" target="rightFrame">站点设置</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Menusite/seo');?>" target="rightFrame">SEO设置</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Menusite/payment');?>" target="rightFrame">支付方式</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Menusite/rbac');?>" target="rightFrame">权限设置</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Menusite/expressage');?>" target="rightFrame">快递公司</a><i></i></li>
        <li><cite></cite><a href="<?php echo U('Menusite/search');?>" target="rightFrame">搜索设置</a><i></i></li>
        </ul>    
    </dd>
    <!--
    <dd><div class="title"><span><img src="/wbshop/admin/Public/images/leftico04.png" /></span>日期管理</div>
    <ul class="menuson">
        <li><cite></cite><a href="#">自定义</a><i></i></li>
        <li><cite></cite><a href="#">常用资料</a><i></i></li>
        <li><cite></cite><a href="#">信息列表</a><i></i></li>
        <li><cite></cite><a href="#">其他</a><i></i></li>
    </ul>
    
    </dd>-->   
    
    </dl>

</body>
</html>