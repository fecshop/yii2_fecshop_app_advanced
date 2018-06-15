<?php

$params = array_merge(
    require(__DIR__.'/../../common/config/params.php'),
    require(__DIR__.'/../../common/config/params-local.php'),
    require(__DIR__.'/params.php'),
    require(__DIR__.'/params-local.php')
);

return [
    'id'                  => 'app-api',
    // 设置时区，查看php 支持的所支持的时区列表  ：http://www.php.net/manual/zh/timezones.php
    'timeZone' => 'Asia/Shanghai',
    'basePath'            => dirname(__DIR__),
    'controllerNamespace' => 'appapi\controllers',
    'modules'             => $modules,
    //'bootstrap' => ['log'],
    //'bootstrap'    => ['assetsAutoCompress'],
    // 自定义组件
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
            /*
             * // use mongodb for session.
             * 'class' => 'yii\mongodb\Session',
             * 'db' => 'mongodb',
             * 'sessionCollection' => 'session',
             */
            'class'   => 'yii\redis\Session',
            'timeout' => 86400 * 7,
            'keyPrefix' => 'appapi_session',
            'redis' => [
                'database' => 3,
            ],
        ],
        'cache' => [
            /*
             * // use mongodb for cache.
             * 'class' => 'yii\mongodb\Cache',
             */
            'class'     => 'yii\redis\Cache',
            'keyPrefix' => 'appapi_cache',
            'redis' => [
                'database' => 4,
            ],
        ],
        'user' => [
            // 【默认】不开启速度限制的 User Model
            'identityClass' => 'fecshop\models\mysqldb\AdminUser',
            // 开启速度限制的 User Model
            //'identityClass' => 'fecshop\models\mysqldb\adminUser\AdminUserAccessToken',
            
            //'enableAutoLogin' => true,
        ],
    ],
    // 自定义参数
    'params' => $params,
];
