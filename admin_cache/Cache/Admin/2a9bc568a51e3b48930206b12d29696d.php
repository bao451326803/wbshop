<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admin/Public/js/jquery.js"></script>

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li>商品</li>
    <li>品牌管理</li>
    </ul>
    </div>
    
    <div class="formbody"> 
        <div class="tools">
            <ul class="toolbar">
                <a href="<?php echo U('Menushop/bradd');?>"><li class="click"><span><img src="/admin/Public/images/t01.png" /></span>添加</li></a>
                
            </ul>
        </div>

    <ul class="imglist">
        <?php if(is_array($select_brands)): foreach($select_brands as $key=>$vo): ?><li class="selected">
        <span><img src="<?php echo ($vo["brimg"]); ?>" width="168" height="126" /></span>
        <h2><?php echo ($vo["brname"]); ?></h2>
        <p><a href="#">编辑</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Menushop/brdel',array("id"=>$vo['id']));?>">删除</a></p>
        </li><?php endforeach; endif; ?>
    </ul>
    <?php echo ($page); ?>
    
  </div>
</body>
</html>