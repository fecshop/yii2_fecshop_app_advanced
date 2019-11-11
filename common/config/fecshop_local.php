<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */

/**
 * 本文件在app/web/index.php 处引入。
 * 本配置文件为各个入口部分的公用模块和服务。
 */
$modules = [];
foreach (glob(__DIR__.'/fecshop_local_modules/*.php') as $filename) {
    $modules = array_merge($modules, require($filename));
}
// 服务
$services = [];
foreach (glob(__DIR__.'/fecshop_local_services/*.php') as $filename) {
    $services = array_merge($services, require($filename));
}
// 组件
$components = [];
// param
$params = [];
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
