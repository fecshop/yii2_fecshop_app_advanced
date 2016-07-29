<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);


return [
    'id' => 'app-front',
    'basePath' => dirname(__DIR__),
    //'bootstrap' => ['log'],
    'controllerNamespace' => 'appadmin\controllers',
	'modules'=>$modules,
	//'bootstrap'    => ['assetsAutoCompress'],
	# 自定义组件
    'components' => [
       /*
	   'assetsAutoCompress' =>
        [
            'class'             => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
            'enabled'           => true,
            'jsCompress'        => true,
            'cssFileCompile'    => true,
            'jsFileCompile'     => true,
        ],
		*/
		'assetManager' => [
			'forceCopy' => true,
		],
		
		
		
		'session' => [
				//'class' => 'yii\mongodb\Session',
				'class' => 'yii\redis\Session',
				//'db' => 'mongodb',
				//'sessionCollection' => 'session',
				'timeout' => 6000,
				
		],
		
		'cache' => [
            'class' => 'yii\redis\Cache',
            'keyPrefix' => 'appadmin',
        ],


		'user' => [
			'identityClass' => 'fecadmin\models\AdminUser',
			'enableAutoLogin' => true,
		],
    
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'rules' => [
				'' => 'cms/home/index',
			],
			//'baseUrl' => '/fr/',
		],
		
		'request' => [
			'class' => 'fecshop\yii\web\Request',
			/*
			'enableCookieValidation' => true,
			'enableCsrfValidation' => true,
			'cookieValidationKey' => 'O1d232trde1x-M97_7QvwPo-5QGdkLMp#@#@',
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
