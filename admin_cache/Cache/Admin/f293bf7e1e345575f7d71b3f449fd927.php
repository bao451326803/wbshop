<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/wbshop/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/wbshop/admin/Public/js/jquery.js"></script>
    <link rel="stylesheet" href="/wbshop/admin/Public/kind/themes/default/default.css" />
    <script src="/wbshop/admin/Public/kind/kindeditor.js"></script>
<script src="/wbshop/admin/Public/kind/lang/zh_CN.js"></script>
</head>
<body>

<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li>商品</li>
        <li>品牌管理</li>
        <li>品牌添加</li>

    </ul>
</div>
<style type="text/css">
#image3,#image2,#image1{padding: 1px 6px;}
</style>
<script>
		KindEditor.ready(function(K) {
				var editor = K.editor({
					allowFileManager : true
				})
        K('#image3').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#url3').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url3').val(url);
								editor.hideDialog();
							}
						});
					});
				});
		 
		})
</script>
<div class="formbody">

    <div class="formtitle"><span>品牌添加</span></div>
    <form action="<?php echo U('Menushop/bradd_data');?>" method="post">
        <ul class="forminfo">
            <li><label>品牌名称</label><input name="brname" type="text" class="dfinput" /><i>清填写品牌名称</i></li>
            <li><label>品牌logo</label><input type="text" readonly="readonly"  name="brimg" class="dfinput" id="url3" value="" /> <input type="button" id="image3" value="选择图片" />（本地上传）<i>品牌LOGO</i></li>
        </ul>
        <input name="" type="submit" class="btn" value="确认保存"/>
    </form>
</div>



</body>
</html>