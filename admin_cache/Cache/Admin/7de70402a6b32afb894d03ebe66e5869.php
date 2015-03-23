<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/wbshop/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<link href="/wbshop/admin/Public/css/select.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/wbshop/admin/Public/kind/themes/default/default.css" />
<script type="text/javascript" src="/wbshop/admin/Public/js/jquery.js"></script>
<script type="text/javascript" src="/wbshop/admin/Public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="/wbshop/admin/Public/js/select-ui.min.js"></script>  
<script src="/wbshop/admin/Public/kind/kindeditor.js"></script>
<script src="/wbshop/admin/Public/kind/lang/zh_CN.js"></script>
<script type="text/javascript">
$(document).ready(function(e) {
    $(".select1").uedSelect({
		width : 345			  
	});
	$(".select2").uedSelect({
		width : 167  
	});
	$(".select3").uedSelect({
		width : 100
	});
});
</script>
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
		  K('#image2').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#url2').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url2').val(url);
								editor.hideDialog();
							}
						});
					});
				});
		  K('#image1').click(function() {
					editor.loadPlugin('image', function() {
						editor.plugin.imageDialog({
							showRemote : false,
							imageUrl : K('#url1').val(),
							clickFn : function(url, title, width, height, border, align) {
								K('#url1').val(url);
								editor.hideDialog();
							}
						});
					});
				});
		})
</script>
<style type="text/css">
#image3,#image2,#image1{padding: 1px 6px;}
</style>
</head>

<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
    <li>控制台</li>
    <li>站点设置</li>
    </ul>
    </div>
    
<div class="formbody">
    <div id="usual1" class="usual"> 
    <div class="itab">
            <ul> 
                <li><a href="#tab1" class="selected">站点设置</a></li> 
                <li><a href="#tab2">其他设置</a></li> 
            </ul>
    </div> 
  	<div id="tab1" class="tabson">
        <div class="formtext">请完善站点信息！</div>
                <ul class="forminfo">
                    <form action="<?php echo U('Menusite/set_website');?>" method="post">
                    <input type="hidden" name="id" value="1" />
                    <li><label>网站名称</label><input name="webName" type="text" class="dfinput" value="<?php echo ($config["webName"]); ?>" /><i>网站名称</i></li>
                    <li><label>网站logo</label><input type="text" name="webLogo" class="dfinput" id="url3" value="<?php echo ($config["webLogo"]); ?>" /> <input type="button" id="image3" value="选择图片" />（本地上传）<i>网站LOGO</i></li>
                    
                    <li><label>会员中心logo</label><input name="memberLogo" type="text" id="url2" class="dfinput" value="<?php echo ($config["memberLogo"]); ?>" /> <input type="button" id="image2" value="选择图片" />（本地上传）<i>会员中心LOGO</i></li>
                    <li><label>商家中心logo</label><input name="businessManlogo" type="text" id="url1" class="dfinput" value="<?php echo ($config["businessManlogo"]); ?>" /> <input type="button" id="image1" value="选择图片" />（本地上传）<i>商家中心LOGO</i></li>
                    <li><label>ICP证书号</label><input name="icp" type="text" class="dfinput" value="<?php echo ($config["icp"]); ?>" /><i>ICP备案号</i></li>
                    <li><label>流量统计代码</label><textarea name="statistics" cols="" rows="" class="textinput" style="width:325px"><?php echo ($config["statistics"]); ?></textarea><i>流量统计代码</i></li>
                    <li><label>评论是否审核</label>
                        <cite>
                             <?php if($config['comment'] == 1 ): ?><input name="comment" type="radio" value="0" />是&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input name="comment" type="radio" value="1" checked="checked"  />否
                             <?php else: ?>
                                 <input name="comment" type="radio" value="0" checked="checked" />是&nbsp;&nbsp;&nbsp;&nbsp;
                                 <input name="comment" type="radio" value="1" />否<?php endif; ?>
                              
                        </cite>
                    </li>
                    <li><label>&nbsp;</label><input type="submit" class="btn" value="保存信息"/></li>
                    </form>
                </ul>
        </div> 
        <div id="tab2" class="tabson"></div>
	</div> 
    
	<script type="text/javascript"> 
      $("#usual1 ul").idTabs(); 
    </script>

    </div>

</body>
</html>