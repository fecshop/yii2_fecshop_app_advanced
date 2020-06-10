<?php
/**
 * The manifest of files that are local to specific environment.
 * This file returns a list of environments that the application
 * may be installed under. The returned data must be in the following
 * format:.
 *
 * ```php
 * return [
 *     'environment name' => [
 *         'path' => 'directory storing the local files',
 *         'skipFiles'  => [
 *             // list of files that should only copied once and skipped if they already exist
 *         ],
 *         'setWritable' => [
 *             // list of directories that should be set writable
 *         ],
 *         'setExecutable' => [
 *             // list of files that should be set executable
 *         ],
 *         'setCookieValidationKey' => [
 *             // list of config files that need to be inserted with automatically generated cookie validation keys
 *         ],
 *         'createSymlink' => [
 *             // list of symlinks to be created. Keys are symlinks, and values are the targets.
 *         ],
 *     ],
 * ];
 * ```
 */
return [
    'Development' => [
        'path'        => 'dev',
        'setWritable' => [
            'appadmin/runtime',
            'appadmin/runtime/cache',
            'appadmin/runtime/upload',
            'appadmin/web/assets',
            
            'appbdmin/runtime',
            'appbdmin/runtime/cache',
            'appbdmin/web/assets',
            
            'appapi/runtime',
            'appapi/runtime/cache',
            'appapi/web/assets',

            'appfront/runtime',
            'appfront/runtime/cache',
            'appfront/web/assets',
            'appfront/web/install/assets',
            'appfront/web/cn/assets',
            'appfront/web/fr/assets',
            
            'appfront/web/sitemap.xml',
            'appfront/web/sitemap_es.xml',
            'appfront/web/fr/sitemap.xml',
            'appfront/web/cn/sitemap.xml',

            'apphtml5/runtime',
            'apphtml5/runtime/cache',
            'apphtml5/web/assets',
            
            'apphtml5/web/sitemap.xml',
            'apphtml5/web/sitemap_es.xml',
            'apphtml5/web/fr/sitemap.xml',
            'apphtml5/web/cn/sitemap.xml',
            
            'appserver/runtime',
            'appserver/runtime/cache',
            'appserver/web/assets',
            'appimage/common/media/catalog/product',
            'appimage/common/media/catalog/category',
            'appimage/common/addons',
            'appimage/common/media/upload',
            'appimage/common/media/wxmicroqrcode',
            //'appimage/common/appfront/media',
            //'appimage/common/apphtml5/media',
            //'appimage/common/appadmin/media',
            //'appimage/common/media',
            'addons',
            // 设置可写，再界面安装完成后，会被重新设置成644
            'common/config/main-local.php'

            //'appapi/merge_config.php',
            //'appfront/merge_config.php',
            //'apphtml5/merge_config.php',
            //'appserver/merge_config.php',
        ],
        'setExecutable' => [
            'yii',
            'tests/codeception/bin/yii',
            //'appimage/common/media/catalog/product',
            //'appimage/common/appfront/media',
            //'appimage/common/apphtml5/media',
           // 'appimage/common/appadmin/media',
            //'appimage/common/media',
            //'addons',
        ],
        'setCookieValidationKey' => [
            'appadmin/config/main-local.php',
            'appbdmin/config/main-local.php',
            'appapi/config/main-local.php',
            'appfront/config/main-local.php',
            'apphtml5/config/main-local.php',
            'appserver/config/main-local.php',
        ],
    ],
    'Production' => [
        'path'        => 'prod',
        'setWritable' => [
            'appadmin/runtime',
            'appadmin/runtime/cache',
            'appadmin/runtime/upload',
            'appadmin/web/assets',
            'appbdmin/runtime',
            'appbdmin/runtime/cache',
            'appbdmin/web/assets',
            'appapi/runtime',
            'appapi/runtime/cache',
            'appapi/web/assets',
            'appfront/runtime',
            'appfront/runtime/cache',
            'appfront/web/assets',
            'appfront/web/install/assets',
            'appfront/web/cn/assets',
            'appfront/web/fr/assets',
            
            'appfront/web/sitemap.xml',
            'appfront/web/sitemap_es.xml',
            'appfront/web/fr/sitemap.xml',
            'appfront/web/cn/sitemap.xml',
            
            'apphtml5/runtime',
            'apphtml5/runtime/cache',
            'apphtml5/web/assets',
            'apphtml5/web/cn/assets',
            'apphtml5/web/fr/assets',
            
            'apphtml5/web/sitemap.xml',
            'apphtml5/web/sitemap_es.xml',
            'apphtml5/web/fr/sitemap.xml',
            'apphtml5/web/cn/sitemap.xml',
            
            'appserver/runtime',
            'appserver/runtime/cache',
            'appserver/web/assets',
            
            'appimage/common/media/catalog/product',
            'appimage/common/media/catalog/category',
            'appimage/common/addons',
            'appimage/common/media/upload',
            'appimage/common/media/wxmicroqrcode',
            //'appimage/common/appfront/media',
            //'appimage/common/apphtml5/media',
            //'appimage/common/appadmin/media',
            //'appimage/common/media',
            'addons',
            // 设置可写，再界面安装完成后，会被重新设置成644
            'common/config/main-local.php'
            //'appapi/merge_config.php',
            //'appfront/merge_config.php',
            //'apphtml5/merge_config.php',
            //'appserver/merge_config.php',
        ],
        'setExecutable' => [
            'yii',
            // 'appimage/common/media/catalog/product',
            // 'appimage/common/appfront/media',
            // 'appimage/common/apphtml5/media',
            // 'appimage/common/appadmin/media',
            // 'appimage/common/media',
            // 'addons',
        ],
        'setCookieValidationKey' => [
            'appadmin/config/main-local.php',
            'appbdmin/config/main-local.php',
            'appapi/config/main-local.php',
            'appfront/config/main-local.php',
            'apphtml5/config/main-local.php',
            'appserver/config/main-local.php',
        ],
    ],
];
