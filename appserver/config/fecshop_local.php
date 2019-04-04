<?php

// 本文件在app/web/index.php 处引入。

// fecshop的核心模块
$modules = [];
foreach (glob(__DIR__.'/fecshop_local_modules/*.php') as $filename) {
    $modules = array_merge($modules, require($filename));
}
// services
$services = [];
foreach (glob(__DIR__.'/fecshop_local_services/*.php') as $filename) {
    $services = array_merge($services, require($filename));
}
// 组件
$components = [
    'i18n' => [
        'translations' => [
            'appserver' => [
                'basePaths' => [
                    '@appserver/languages',
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
];

return [
    'modules'  => $modules,
    'services' => $services,
    'components' => $components,
    'params' => [
        'rateLimit'             => [
            'enable'=> false,   // 是否开启？默认不开启速度控制。
            'limit' => [120, 60], // 速度控制[120,60] 代表  60秒内最大访问120次，
        ]
    ],
];
