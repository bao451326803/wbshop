<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($sitename); ?></title>
</head>
<frameset rows="88,*" cols="*" frameborder="no" border="0" framespacing="0">
  <frame src="<?php echo U('Main/top');?>" name="topFrame" scrolling="No" noresize="noresize" id="topFrame" title="topFrame" />
  <frameset cols="187,*" frameborder="no" border="0" framespacing="0">
    <frame src="<?php echo U('Left/defaultleft');?>" name="leftFrame" scrolling="No" noresize="noresize" id="leftFrame" title="leftFrame" />
    <frame src="<?php echo U('Main/index');?>" name="rightFrame" id="rightFrame" title="rightFrame" />
  </frameset>
</frameset>
<noframes><body>
</body></noframes>
</html>