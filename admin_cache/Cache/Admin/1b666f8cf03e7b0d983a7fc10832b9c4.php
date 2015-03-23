<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admin/Public/js/jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
  $(".click").click(function(){
  $(".tip").fadeIn(200);
  });
  
  $(".tiptop a").click(function(){
  $(".tip").fadeOut(200);
});

  $(".sure").click(function(){
  $(".tip").fadeOut(100);
});

  $(".cancel").click(function(){
  $(".tip").fadeOut(100);
});

});
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li>商品</li>
        <li>规格管理</li>
    </ul>
    </div>
    
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
            <li><span><img src="/admin/Public/images/t01.png" /></span>新增规格</li>
            <li><span><img src="/admin/Public/images/t04.png" /></span>规格列表</li>
            </ul>
        </div>
    <div class="formtitle"><span>规格列表</span></div>
    
    </div>
    
   
</body>
</html>