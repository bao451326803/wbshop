<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="/admin/Public/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/admin/Public/js/jquery.js"></script>

 <script language="javascript">
    function delcfm() {
        return confirm("所删除分类必须没有子分类！");
    }
</script>


</head>


<body>

	<div class="place">
    <span>位置：</span>
    <ul class="placeul">
        <li>商品</li>
        <li>分类管理</li>
    </ul>
    </div>
    
    <div class="formbody">
        <div class="tools">
            <ul class="toolbar">
            <li><a href="<?php echo U('Menushop/cladd');?>"><span><img src="/admin/Public/images/t01.png" /></span>新增分类</a></li>
            <li><span><img src="/admin/Public/images/t01.png" /></span>分类TAG管理</li>
            </ul>
        </div>
    <div class="formtitle"><span>分类列表</span></div>
         
    <table class="tablelist" style="">
    	<thead>
    	<tr>
        <th width="90%">分类名称</th>
        <th>操作</th>
        </tr>
        </thead>
        <tbody>  
        <?php showTree($select_classify,1); ?>       
        </tbody>
    </table>
  
    </div>

  
<?php function showTree($data,$i) { $url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; $change = array('classify'=>'cldel'); $url = strtr($url,$change); $h=str_repeat("&nbsp&nbsp;", $i); foreach ($data as $key => $val) { echo '<tr style="border-bottom:dashed 1px #CCC;"><td style="border:0">'.$h.'|---'.$val[clname].'</td><td> <a href='.$url."&id=".$val[id]."".' class="tablelink"  onclick="return delcfm();" > 删除</a></td></tr>'; if (!empty($val['childs'])) { showTree($val['childs'],$i+2); } } } ?>   
</body>
</html>