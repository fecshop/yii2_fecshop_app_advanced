<?php
return [
    'components' => [
        // Mysql部分的配置
        'db' => [ 
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host={mysql_host};port={mysql_port};dbname={mysql_database}',
            'username' => '{mysql_user}',
            'password' => '{mysql_password}',
            'charset' => 'utf8',
        ],
        // Mongodb部分的配置
		'mongodb' => [
            'class' => 'yii\mongodb\Connection',
			# 有账户的配置
            //'dsn' => 'mongodb://username:password@localhost:27017/datebase',
			# 无账户的配置
			'dsn' => 'mongodb://127.0.0.1:27017/fecshop',
			# 复制集
			//'dsn' => 'mongodb://10.10.10.252:10001/erp,mongodb://10.10.10.252:10002/erp,mongodb://10.10.10.252:10004/erp?replicaSet=terry&readPreference=primaryPreferred',
        ],
		
        /**
         * 默认的cache和session配置。
         */
        'cache' => [
            'class' => 'yii\caching\FileCache',  // 默认为文件存储cache
            // 缓存配置独立的redis，您可以和上面的redis配置一致
        ],
        
        'session' => [
            'class'   => 'yii\web\Session',
            // session过期时间，1天过期
            'timeout' => 86400 * 1, 
        ],
        
        'redis' => [
            'class' => 'yii\redis\Connection',
        ],
        /** 
         * 如果你想使用redis sesson 和 redis cache，那么使用下面的配置
         * 1.设置redis组件的配置
         * 2.将上面cache和session组件配置部分注释掉，使用下面的cache 和 session组件
         * 3.
		'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => '127.0.0.1',    // redis的host
            'port' => 6379,               // redis的端口     
			'password'  => '', // redis的密码
            'database' => 0,    // redis的库，此处不要改动
        ],
        
        'cache' => [
            'class'     => 'yii\redis\Cache',  // 'class' => 'yii\caching\FileCache',
            // 缓存配置独立的redis，如何和redis 组件一致，则不需要单独配置。
            //'redis' => [
            //    'hostname' => '127.0.0.1',   // redis的host
            //    'port' => 6379,              // redis的端口   
            //    'password'  => '', // redis的密码
            //],
        ],
        
        
        'session' => [
            'class'   => 'yii\redis\Session',
            // session过期时间，1天过期
            'timeout' => 86400 * 1, 
            // 缓存配置独立的redis，如何和redis 组件一致，则不需要单独配置。
            //'redis' => [
            //    'hostname' => '127.0.0.1', // redis的host
            //    'port' => 6379,            // redis的端口   
            //    'password'  => '', // redis的密码
            //],
        ],
        */

    ],
];
