<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wbshop/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/wbshop/admin/Public/js/jquery.js"></script>
<link href="/wbshop/admin/Public/css/select.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/wbshop/admin/Public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/wbshop/admin/Public/js/select-ui.min.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
<script  type="text/javascript">
$(function(){
	$(".add").click(function(){
		alert("fasa");
		})
	})
</script>

</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li>设置</li>
    <li>快递公司</li>
    </ul>
    </div>
    
    <div class="rightinfo">
        <ul class="seachform" style="margin: 20px;">
            <form  action="<?php echo U('Menusite/exadd');?>" method="post">
            <li><label>快递名称：</label><input name="exname" type="text" class="scinput" /></li>
            <li><label>是否货到付款</label>
                <div class="vocation">
                <select class="select3" name="ispay">
                <option value="1">是</option>
                <option value="0">否</option>
                </select>
                </div>
            </li>
            <li><label>&nbsp;</label><input name="" type="submit" class="scbtn" value="添加"/></li>
            </form>
        </ul>  

    <table class="tablelist">
    	<thead>
    	<tr>
        <th><input name="" type="checkbox" value="" checked="checked"/></th>
        <th>编号<i class="sort"><img src="/wbshop/admin/Public/images/px.gif" /></i></th>
        <th>快递名</th>
        <th>是否支持货到付款</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($select_expressage)): foreach($select_expressage as $key=>$vo): ?><tr>
                <td><input name="" type="checkbox" value="" /></td>
                <td><?php echo ($vo["id"]); ?></td>
                <td><?php echo ($vo["exname"]); ?></td>
                <td>
                <?php if($vo['ispay'] == 1): ?>支持
                     <?php else: ?>
                     <b style="color:#850000">不支持</b><?php endif; ?>
                </td>
                <td><a href="<?php echo U('Menusite/exdel',array('id'=>$vo['id']));?>" class="tablelink"> 删除</a></td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
    
   
    
    
    
    
    
    </div>
    <script type="text/javascript">
	$('.tablelist tbody tr:odd').addClass('odd');
	</script>
</body>
</html>