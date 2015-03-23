<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wbshop/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/wbshop/admin/Public/js/jquery.js"></script>
</head>
<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li>设置</li>
    <li>搜索设置</li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>搜索设置</span></div>
    <form action="<?php echo U('Menusite/seradd');?>" method="post">
    <ul class="forminfo">
    <li><label>热门搜索词</label><input name="hotwords" type="text" class="dfinput" /><i>每个关键词用&nbsp;&nbsp;<b>|</b>&nbsp;&nbsp;分隔开</i></li>
    </ul>
    <input name="" type="submit" class="btn" value="确认保存"/>
    </form>
    </div>



</body>
</html>