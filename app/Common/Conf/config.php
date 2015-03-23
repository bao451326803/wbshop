<?php
return array(
	//'配置项'=>'配置值'
	'LOAD_EXT_CONFIG'=>'db',  //动态载入配置文件
//	'RUNTIME_PATH'=> './app_cache/',
	'DEFAULT_MODULE'        => 'Home', //默认模块    
	'URL_MODEL'             => '0', //URL模式    
	'SESSION_AUTO_START'    => true, //是否开启session
	
	'URL_HTML_SUFFIX'       =>  'shtml',  // URL伪静态后缀设置
	'URL_DENY_SUFFIX'       =>  'ico|png|gif|jpg', // URL禁止访问的后缀设置
	'VAR_MODULE'            =>  'm',     // 默认模块获取变量
	'VAR_CONTROLLER'        =>  'c',    // 默认控制器获取变量
	'VAR_ACTION'            =>  'a',    // 默认操作获取变量
	'TMPL_L_DELIM'          =>  '<{',            // 模板引擎普通标签开始标记
	'TMPL_R_DELIM'          =>  '}>',            // 模板引擎普通标签结束标记
	'COOKIE_EXPIRE'         =>  3600,    // Cookie有效期
	//'COOKIE_DOMAIN'         =>  '',      // Cookie有效域名
	'COOKIE_PATH'           =>  '/',     // Cookie路径
	'COOKIE_PREFIX'         =>  'wbshop_',      // Cookie前缀 避免冲突
);

?>