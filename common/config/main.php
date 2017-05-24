<?php

return [
    'vendorPath' => dirname(dirname(__DIR__)).'/vendor',
    'components' => [
        'urlManager' => [
            'class'           => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => [],
        ],
        'assetManager' => [
            'forceCopy' => false,
        ],

    ],
];
