<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'wx' => [
        'params'=> [
            // 开始Start页面配置
            'startConfig' => [
                'picUrl' => 'wx/start.jpg',
                'title' => 'Fecshop',
                'remark' => 'Wx Micro Program',
            ],
            
            // 下面的picUrl对应的文件路径为： @appimage/common
            // 首页的走马灯大图
            'homeBigImg' => [
                [
                    'picUrl' => 'wx/6a202e5f215489f5082b5293476f301c.jpg',
                    'linkUrl' => '',  // 需要填写微信小程序的url，譬如：'/pages/goods-detail/goods-detail?id=115781',
                ],
                [
                    'picUrl' => 'wx/2829495b358a87480dcf0abf4b77c9b7.jpg',
                    'linkUrl' => '',  // 需要填写微信小程序的url，譬如：'/pages/goods-detail/goods-detail?id=115781',
                ],
            ],
            // 4个小图：首页的走马灯大图下面的四个小图
            'home4BannerImg' => [
                [
                    'picUrl' => 'wx/f9d34e8258cdef1dbcb5e1de65bdb404.jpg',
                    'linkUrl' => '/pages/goods-detail/goods-detail?id=115781',  // 需要填写微信小程序的url，譬如：'/pages/goods-detail/goods-detail?id=115781',
                ],
                [
                    'picUrl' => 'wx/a7658f2456e708e6be03d393cef0d368.jpg',
                    'linkUrl' => '/pages/goods-detail/goods-detail?id=115781',  // 需要填写微信小程序的url，譬如：'/pages/goods-detail/goods-detail?id=115781',
                ],
                [
                    'picUrl' => 'wx/868b8a0e1065f7123c949fb404049ce0.jpg',
                    'linkUrl' => '/pages/goods-detail/goods-detail?id=115781',  // 需要填写微信小程序的url，譬如：'/pages/goods-detail/goods-detail?id=115781',
                ],
                [
                    'picUrl' => 'wx/6480b6574ab76caf1d86a9fc327a62e8.jpg',
                    'linkUrl' => '/pages/goods-detail/goods-detail?id=115781',  // 需要填写微信小程序的url，譬如：'/pages/goods-detail/goods-detail?id=115781',
                ],
            ],
            // 首页的产品sku配置
            'homeFeaturedSku'        => [
                'p10001-kahaki-xl','32332', '432432',
                'sk2001-blue-zo', 'sk0008',

                'sk0004', 'sk0003',
                'sk0002', 'sk1000-black',
            ],
        ],
    ]
];