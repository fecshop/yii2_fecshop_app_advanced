<?php
/**
 * 本文件在app/web/index.php 处引入。
 * 本配置文件为各个入口部分的公用模块和服务。
 */
$modules = [];
foreach (glob(__DIR__.'/fecshop_local_modules/*.php') as $filename) {
    $modules = array_merge($modules, require($filename));
}
// 服务器组件
$services = [];
foreach (glob(__DIR__.'/fecshop_local_services/*.php') as $filename) {
    $services = array_merge($services, require($filename));
}

return [
    'modules'  => $modules,
    'services' => $services,
];
