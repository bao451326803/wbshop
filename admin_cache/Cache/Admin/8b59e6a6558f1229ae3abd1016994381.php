<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wbshop/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li>设置</li>
        <li>seo设置</li>
    </ul>
    </div>
    
    <div class="formbody">
    
    <div class="formtitle"><span>SEO设置</span></div>
    <form action="<?php echo U('Menusite/set_seo');?>" method="post">
    <ul class="forminfo">
    <div class="formtitle"><span>首页</span></div>
                              <input type="hidden" name="seo_0[]" value="<?php echo ($seo_mes[0]['id']); ?>">
    <li><label>文章标题</label><input name="seo_0[]" value="<?php echo ($seo_mes[0]['title']); ?>" type="text" class="dfinput" /><i>标题不能超过30个字符</i></li>
    <li><label>关键字</label><input name="seo_0[]" value="<?php echo ($seo_mes[0]['keywords']); ?>" type="text" class="dfinput" /><i>多个关键字用,隔开</i></li>
    <li><label>描述</label><input name="seo_0[]" value="<?php echo ($seo_mes[0]['description']); ?>" type="text" class="dfinput" /><i>多个描述用,隔开</i></li>
    </ul>
    <ul class="forminfo">
    <div class="formtitle"><span>文章</span></div>
                              <input type="hidden" name="seo_1[]" value="<?php echo ($seo_mes[1]['id']); ?>">
    <li><label>文章标题</label><input name="seo_1[]" value="<?php echo ($seo_mes[1]['title']); ?>" type="text" class="dfinput" /><i>标题不能超过30个字符</i></li>
    <li><label>关键字</label><input name="seo_1[]" value="<?php echo ($seo_mes[1]['keywords']); ?>" type="text" class="dfinput" /><i>多个关键字用,隔开</i></li>
    <li><label>描述</label><input name="seo_1[]" value="<?php echo ($seo_mes[1]['description']); ?>" type="text" class="dfinput" /><i>多个描述用,隔开</i></li>
    </ul>
    <ul class="forminfo">
    <div class="formtitle"><span>店铺</span></div>
                              <input type="hidden" name="seo_2[]" value="<?php echo ($seo_mes[2]['id']); ?>">
    <li><label>文章标题</label><input name="seo_2[]" value="<?php echo ($seo_mes[2]['title']); ?>" type="text" class="dfinput" /><i>标题不能超过30个字符</i></li>
    <li><label>关键字</label><input name="seo_2[]" value="<?php echo ($seo_mes[2]['keywords']); ?>" type="text" class="dfinput" /><i>多个关键字用,隔开</i></li>
    <li><label>描述</label><input name="seo_2[]" value="<?php echo ($seo_mes[2]['description']); ?>" type="text" class="dfinput" /><i>多个描述用,隔开</i></li>
    </ul>
    <ul class="forminfo">
    <div class="formtitle"><span>商品</span></div>
                              <input type="hidden" name="seo_3[]" value="<?php echo ($seo_mes[3]['id']); ?>">
    <li><label>文章标题</label><input name="seo_3[]" value="<?php echo ($seo_mes[3]['title']); ?>" type="text" class="dfinput" /><i>标题不能超过30个字符</i></li>
    <li><label>关键字</label><input name="seo_3[]" value="<?php echo ($seo_mes[3]['keywords']); ?>" type="text" class="dfinput" /><i>多个关键字用,隔开</i></li>
    <li><label>描述</label><input name="seo_3[]" value="<?php echo ($seo_mes[3]['description']); ?>" type="text" class="dfinput" /><i>多个描述用,隔开</i></li>
    </ul>
        <input name="" type="submit" class="btn" value="确认保存"/>
    </form>

    </div>
</body>
</html>