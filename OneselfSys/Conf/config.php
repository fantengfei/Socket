<?php
return array(
	//'配置项'=>'配置值'
'DB_TYPE'   		=> 	'mysql', 	// 数据库类型
'DB_HOST'   		=> 	'210.43.32.50',// 服务器地址
'DB_NAME'   		=> 	'onselfsys' ,	// 数据库名
'DB_USER'   		=> 	'root', 	// 用户名
'DB_PWD'    		=> 	'sanyue%', 	// 密码
'DB_PORT'   		=> 	3306, 		// 端口
'DB_PREFIX' 		=> 	'', 		// 数据库表前缀
'DB_PREFIX'         =>  '',
//'DB_PREFIX'         =>  'jw_',
'DB_DEPLOY_TYPE'	=>	0,			// 数据库部署方式 0 集中式 1 分布式	0
'DB_RW_SEPARATE'	=>	FALSE,		// 数据库是否需要读写分离 分布式部署下有效	
'DB_MASTER_NUM'		=>	1,			// 设置读写分离后 主服务器数量	1
//'DB_SLAVE_NO'	=>	,				// 设置读写分离后 指定从服务器序号（3.1新增）	
'DB_SQL_BUILD_CACHE'=>	FALSE,		// 数据库查询的SQL创建缓存	FALSE
'DB_SQL_BUILD_QUEUE'=>	'file',		// SQL缓存队列的缓存方式	file
'DB_SQL_BUILD_LENGTH'=>	20,			// SQL缓存的队列长度	20
'DB_SQL_LOG'		=>	FALSE,		// 是否开启SQL日志记录（3.1新增）	FALSE
'APP_GROUP_LIST' 	=> 	'Index,Admin,Personal',	// 项目分组设定
'DEFAULT_GROUP'  	=> 	'Index',	// 默认分组
//LAYOUT
'LAYOUT_ON' 		=> 	true,		// 
//大小写验证
'APP_FILE_CASE'		=>	true,		// 是否检查文件的大小写 对Windows平台有效
//Debug
'SHOW_PAGE_TRACE'	=>	false,		// 显示页面Trace信息	FALSE

'URL_MODEL'         =>  1,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
     // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式，提供最好的用户体验和SEO支持*/
'URL_CASE_INSENSITIVE' =>true,


'PAGE_ITEM_COUNT'=>1,		//每页数据量
);
?>
