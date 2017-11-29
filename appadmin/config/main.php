<?php

$params = array_merge(
    require(__DIR__.'/../../common/config/params.php'),
    require(__DIR__.'/../../common/config/params-local.php'),
    require(__DIR__.'/params.php'),
    require(__DIR__.'/params-local.php')
);

return [
    'id'       => 'app-admin',
    'basePath' => dirname(__DIR__),
    //'bootstrap' => ['log'],
    'controllerNamespace' => 'appadmin\controllers',
    // compress css and js to one file,
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
            /*
             * use mongodb for session.
             */
            /*
            'class' => 'yii\mongodb\Session',
            'db' => 'mongodb',
            'sessionCollection' => 'session',
            */
            'class'   => 'yii\redis\Session',
            'timeout' => 6000,
        ],

        'cache' => [
            /*
             * use mongodb for cache.
             */
            //'class' => 'yii\mongodb\Cache',
            'class'     => 'yii\redis\Cache',
            'keyPrefix' => 'appadmin',
        ],

        'assetManager' => [
            'forceCopy' => false,
        ],
        'i18n' => [
            'translations' => [
                'appadmin' => [
                    'basePaths' => [
                        '@appadmin/languages',
                    ],
                    'sourceLanguage' => 'en_US', // 如果 en_US 也想翻译，那么可以改成en_XX。
                ],
            ],
        ],
    ],
    // 自定义参数
    'params' => $params,
];
