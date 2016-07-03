<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);


return [
    'id' => 'app-html5',
    'basePath' => dirname(__DIR__),
    //'bootstrap' => ['log'],
    'controllerNamespace' => 'apphtml5\controllers',
	# compress css and js to one file,
	//'bootstrap'    => ['assetsAutoCompress'],
    'components' => [
       /*
	   #  compress css and js to one file,
	   'assetsAutoCompress' =>
        [
            'class'             => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
            'enabled'           => true,
            'jsCompress'        => true,
            'cssFileCompile'    => true,
            'jsFileCompile'     => true,
        ],
		*/
		
		
		
		'session' => [
			# use mongodb storage session data
			//'class' => 'yii\mongodb\Session',
			//'db' => 'mongodb',
			//'sessionCollection' => 'session',
			# use redis storage session data
			'class' => 'yii\redis\Session',
			# session time out time.
			'timeout' => 6000,
				
		],
		
		'cache' => [
            'class' => 'yii\redis\Cache',
            'keyPrefix' => 'apphtml5',
        ],

    
		
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
		],
		
		'request' => [
			'class' => 'fecshop\services\Request',
			/*
			'enableCookieValidation' => true,
			'enableCsrfValidation' => true,
			'noCsrfRoutes' => [
				'catalog/product/addreview',
				'favorite/product/remark',
				'paypal/ipn/index',
				'paypal/ipn',
			],
			*/
		],
	
		/*
		'view' => [
			'theme' => [
				'pathMap' => ['@app/views' => '@app/themes/adminlte'],
				'baseUrl' => '@web/themes/adminlte',
			],
		], 
		//添加js,css;
		'assetManager' => [
			//'converter' => [
			//    'forceConversion' => true,
			//],
			'bundles' => [
				'yii\bootstrap\BootstrapAsset' => [
													'basePath' => '@webroot',
													'baseUrl' => '@web',
													'css' => ['assets/176d11b6/css/bootstrap.css'],
													'js' => ['js/web.js','js/My97DatePicker/WdatePicker.js'],
													
												],
			],
		],
		*/
	],
	# 自定义参数
    'params' => $params,
];
