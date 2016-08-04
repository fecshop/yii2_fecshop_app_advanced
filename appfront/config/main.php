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
    'controllerNamespace' => 'appfront\controllers',
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
            'keyPrefix' => 'appfront',
        ],
		
		'i18n' => [
			'translations' => [
				'appfront' => [
					'basePaths' => [
						'@appfront/languages',
					],
					'sourceLanguage' => 'en_US', # 如果 en_US 也想翻译，那么可以改成en_XX。
				],
			],
		],
	],
	# 自定义参数
    'params' => $params,
];
