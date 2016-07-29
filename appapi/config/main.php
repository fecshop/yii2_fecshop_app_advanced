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
		
		
	],
	# 自定义参数
    'params' => $params,
];
