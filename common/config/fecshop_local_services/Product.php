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
    'product' => [
        /**
         * 分类页面的最大的产品总数
         * aggregate 的分页，是把全部产品查出来，然后php进去切分，类似于Es。
         * 因此对总数进行了限制。
         */
        //'categoryAggregateMaxCount' => 6000,
        /**
          * 分类页面的产品，如果一个spu下面由多个sku同时在这个分类，
          * 那么，是否只显示一个sku（score最高），而不是全部sku
          * true： 代表只显示一个sku
          * false: 代表产品全部显示
          */
        //'productSpuShowOnlyOneSku' => true,
        // 'storagePath' => 'common\\local\\local_services\\product',
        
    ],
];
