<?php
return array(
	//'配置项'=>'配置值'
		//静态文件访问路径配置
		'CSS_URL'=>'Home/Public/style/',
		'JS_URL'=>'Home/Public/js/',
		'IMG_URL'=>'Home/Public/images/',
		
		
		//给项目做静态文件访问路由路径的配置
		//前台
		'CSS_URL' => 'Home/Public/style/',
		'JS_URL' => 'Home/Public/js/',
		'IMG_URL' => 'Home/Public/images/',
		//后台
		'BACK_CSS_URL' => 'Back/Public/css/',
		'BACK_JS_URL' => 'Back/Public/js/',
		'BACK_IMG_URL' => 'Back/Public/img/',
		
		//配置路径，方便第三方功能包文件的访问
		'PLUGIN_URL'    => '/plugin/',

		//打开页面的跟踪信息
//		'SHOW_PAGE_TRACE' => true,
		
		//给shop/Common定义访问路径
		'COMMON_URL' => '/Common/',
		//定义网站的域名地址(可以方便图片的显示)
		'SITE_URL'  => 'http://localhost/',
		
		//数据库配置
		
		
		
		'DB_TYPE'               =>  'mysql',     // 数据库类型
		'DB_HOST'               =>  'localhost', // 服务器地址
		'DB_NAME'               =>  'tpshop',          // 数据库名
		'DB_USER'               =>  'root',      // 用户名
		'DB_PWD'                =>  'root',          // 密码
		'DB_PORT'               =>  '3306',        // 端口
		'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
		'DB_PARAMS'          	=>  array(), // 数据库连接参数
		'DB_DEBUG'  			=>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
		'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
		'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
);