<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
		
		'session' => [
			/**
			 * use mongodb for session.
			 */
			/*
			'class' => 'yii\mongodb\Session',
			'db' => 'mongodb',
			'sessionCollection' => 'session',
			*/
			'class' => 'yii\redis\Session',
			'timeout' => 6000,
		],
		
		'cache' => [
			/**
			 * use mongodb for cache.
			 */
			//'class' => 'yii\mongodb\Cache',
            'class' => 'yii\redis\Cache',
            'keyPrefix' => 'console',
        ],
    ],
	'controllerMap' => [
        'mongodb-migrate' => 'yii\mongodb\console\controllers\MigrateController'
    ],
    'params' => $params,
];
