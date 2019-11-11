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
// param
$params = [
    'rateLimit'             => [
        'enable'=> false,   // 是否开启？默认不开启速度控制。
        'limit' => [120, 60], // 速度控制[120,60] 代表  60秒内最大访问120次，
    ],
    /** 
     * 该配置用来设置：允许那些账户在appapi入口进行登录获取token
     * 1.apiUserAllow数组的值为空：代表默认是所有的后台用户
     * 2.apiUserAllow数组中设置了用户名（数组可以设置多个），那么，只有包含在这个数组中的用户，才可以用于appapi用户登录获取access-token。其他的账户获取token就会失败
     * 3.默认该数组为空，允许所有的appadmin的后台用户进行登录获取access-token
     */
    'apiUserAllow' => [
       // 'admin','terry'
    ],
];

/**
 * Yii框架的class rewrite重写，这个一般不用，您可以通过这个重写基本上任何的class，但是这种方式是替换，重写的class无法继承原来的class，因此是替换的方式重写
 * Yii framework class rewrite: 文档：http://www.fecmall.com/doc/fecshop-guide/develop/cn-2.0/guide-fecmall-rewrite-func.html#7yii2classclassmapfecmall
 */
$yiiClassMap = [
    // 下面是一个重写的格式例子
    // 'fecshop\app\apphtml5\helper\test\My' => '@apphtml5/helper/My.php'
];
/**
 * Fecmall model 和 block 重写，可以在RewriteMap中配置
 * 文档地址：http://www.fecmall.com/doc/fecshop-guide/develop/cn-2.0/guide-fecmall-rewrite-func.html#8rewritemapblock-model
 */
$fecRewriteMap = [
    // 下面是一个重写的格式例子
    // '\fecshop\app\appfront\modules\Cms\block\home\Index'  => '\fectfurnilife\appfront\modules\Cms\block\home\Index',
];
return [
    'modules'  => $modules,
    'services' => $services,
    'components' => $components,
    'params' => $params,
    'yiiClassMap' => $yiiClassMap,
    'fecRewriteMap' => $fecRewriteMap,
];