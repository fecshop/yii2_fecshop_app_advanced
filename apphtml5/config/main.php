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
		
		'session' => [
			//'class' => 'yii\mongodb\Session',
			//'db' => 'mongodb',
			//'sessionCollection' => 'session',
			'class' => 'yii\redis\Session',
			'timeout' => 6000,	
		],
		
		'cache' => [
            'class' => 'yii\redis\Cache',
            'keyPrefix' => 'appadmin',
        ],
		
	],
	# 自定义参数
    'params' => $params,
];
