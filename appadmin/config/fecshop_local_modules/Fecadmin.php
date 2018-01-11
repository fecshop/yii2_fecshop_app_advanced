<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'fecadmin' => [
        'params' => [
            /**
             * Fecshop缓存是基于redis，下面是各个入口redis配置所在的文件路径
             * 1.`commonConfig`是公用部分
             * 2.app开头的key，指的是各个入口的redis所在的配置文件
             * 这个配置的作用，是为了在后台清空各个入口的全部缓存，因此需要加载相应的redis的配置
             */
            'cacheRedisConfigFile' => [
                'commonConfig'       => '@common/config/main-local.php',
                'appAdmin'           => '@appadmin/config/main.php',
                'appApi'             => '@appapi/config/main.php',
                'appFront'           => '@appfront/config/main.php',
                'appHtml5'           => '@apphtml5/config/main.php',
                'appServer'          => '@appserver/config/main.php',
                
            ],
        ],
    ],
];

