<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-admin',
    'basePath' => dirname(__DIR__),
    //'bootstrap' => ['log'],
    'controllerNamespace' => 'appadmin\controllers',
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
            'keyPrefix' => 'appadmin',
        ],
	],
	# 自定义参数
    'params' => $params,
];
