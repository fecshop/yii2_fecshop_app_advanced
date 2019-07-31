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
        'redis' => [
            'database' => 0,
        ],
        'session' => [
            //'keyPrefix' => 'appadmin_session',  如果您使用redis session，您需要去掉注释
        ],
        'cache' => [
            'keyPrefix' => 'appadmin_cache',
        ],
        'assetManager' => [
            'forceCopy' => true,
        ],
    ],
    // 自定义参数
    'params' => $params,
];
