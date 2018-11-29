<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 *
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'helper' => [
        'childService' => [
            'appserver' => [
                // 跨域访问cors配置
                'appserver_cors' => [
                    // 对于vue端应用，如果vue端的域名和appserver的域名不一致，就需要做跨站处理，譬如
                    // 'Origin' => ['http://demo.fancyecommerce.com', 'http://demo.fecshop.com'], 也就是里面填写你的vue端的域名，如果多个vue应用可以在下面填写多个域名
                    // 关于原理参看：http://www.fecshop.com/topic/1545 ，
                    // 注意，下面`一定不要`在线上环境中使用 ['*'], 这会造成严重的csrf漏洞, 您将 http://demo.fancyecommerce.com 改成您自己的跨站域名即可。
                    'Origin' => ['http://demo.fancyecommerce.com'],
                    // for appserver controller
                    'Access-Control-Request-Method' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'HEAD', 'OPTIONS'],
                    'Access-Control-Request-Headers' => [],
                    'Access-Control-Max-Age' => 86400,
                    'Access-Control-Expose-Headers' => [],
                    // for auth customer token
                    'Access-Control-Allow-Headers' => [],
                    'Access-Control-Allow-Methods' => ['GET', 'POST', 'PUT', 'DELETE'],
                ],
            ],
        ],
    ],
];
