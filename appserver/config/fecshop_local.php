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
$components = [];

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
