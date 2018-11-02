<?php

$params = array_merge(
    require(__DIR__.'/../../common/config/params.php'),
    require(__DIR__.'/../../common/config/params-local.php'),
    require(__DIR__.'/params.php'),
    require(__DIR__.'/params-local.php')
);

return [
    'id'       => 'app-admin',
    // 设置时区，查看php 支持的所支持的时区列表  ：http://www.php.net/manual/zh/timezones.php
    'timeZone' => 'Asia/Shanghai',
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
             * // use mongodb for session.
             * 'class' => 'yii\mongodb\Session',
             * 'db' => 'mongodb',
             * 'sessionCollection' => 'session',
             */
            'class'   => 'yii\redis\Session',
            'timeout' => 86400 * 7,
            'keyPrefix' => 'appadmin_session',
            'redis' => [
                'database' => 1,
            ],
        ],
        'cache' => [
            /*
             * // use mongodb for cache.
             * 'class' => 'yii\mongodb\Cache',
             */
            'class'     => 'yii\redis\Cache',
            'keyPrefix' => 'appadmin_cache',
            'redis' => [
                'database' => 2,
            ],
        ],
        'assetManager' => [
            'forceCopy' => true,
        ],
        'i18n' => [
            'translations' => [
                'appadmin' => [
                    'basePaths' => [
                        '@appadmin/languages',
                    ],
                    // base language code
                    'sourceLanguage' => 'en_US',
                    /**
                     * @var bool whether to force message translation when the source and target languages are the same.
                     * Defaults to false, meaning translation is only performed when source and target languages are different.
                     * see: @yii/i18n/MessageSource.php  @property $forceTranslation
                     */
                    'forceTranslation' => true,
                ],
            ],
        ],
    ],
    // 自定义参数
    'params' => $params,
];
