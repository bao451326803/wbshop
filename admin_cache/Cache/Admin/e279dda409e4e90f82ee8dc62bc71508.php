<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/admin/Public/css/select.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="/admin/Public/js/jquery.js"></script>
    <script type="text/javascript" src="/admin/Public/js/select-ui.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(e) {
    $(".cid").uedSelect({
		width : 345			  
	});
});
</script>
</head>
<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li>商品</li>
        <li>分类管理</li>
        <li>新增分类</li>

    </ul>
</div>

<div class="formbody">

    <div class="formtitle"><span>新增分类</span></div>
    <form action="<?php echo U('Menushop/cladd_data');?>" method="post">
        <ul class="forminfo">
            <li><label>所属分类</label>
                <div class="vocation">
                    <select class="cid" name="cid">
                            <option  value="0"><b style=" margin-left:20px;">---顶级分类---</b></option>
                            <?php showTree($select_classify,1); ?>
                            
                    </select>
                </div>
            </li>
            <li><label>分类名称</label><input name="clname" type="text" class="dfinput" /><i>清填写分类名称</i></li>
            
        </ul>
        <input name="" type="submit" class="btn" value="确认保存"/>
    </form>




</div>

<?php function showTree($data,$i) { $h=str_repeat("&nbsp&nbsp;", $i); foreach ($data as $key => $val) { echo '<option  value="'.$val[id].'"><b style=" margin-left:20px;">'.$h.'|---'.$val[clname].'</b></option>'; if (!empty($val['childs'])) { showTree($val['childs'],$i+2); } } } ?>

</body>
</html>