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
            'appfront' => [
                'basePaths' => [
                    '@appfront/languages',
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
$yiiClassMap = [
    // 'fecshop\app\apphtml5\helper\test\My' => '@apphtml5/helper/My.php'
];
$fecRewriteMap = [
    // '\fecshop\app\appfront\modules\Cms\block\home\Index'  => '\fectfurnilife\appfront\modules\Cms\block\home\Index',
];
return [
    'modules'  => $modules,
    'services' => $services,
    'components' => $components,
    'yiiClassMap' => $yiiClassMap,
    'fecRewriteMap' => $fecRewriteMap,
];
