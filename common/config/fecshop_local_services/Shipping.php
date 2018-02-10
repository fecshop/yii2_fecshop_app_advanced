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
    'shipping' => [
        // Shipping的运费，是表格的形式录入，shippingCsvDir是存放运费表格的文件路径。
        'shippingCsvDir' => '@common/config/shipping',
        'volumeWeightCoefficient' => 5000,
        'shippingConfig' => [
            'free_shipping'=> [  // 免运费
                'label'=> 'Free shipping( 7-20 work days)',
                'name' => 'HKBRAM',
                'formula' => '0',  // 这里填写公式，该值代表免邮。
                // 国家限制，当国家限制不满足，则该物流不可用 （如果没有国家限制可以去掉）
                'country' => [  // 这里填写(允许|不允许)使用的国家简码，如果您没有这方面的约束，请去掉，去掉后代表没有任何约束
                    'type' => 'allow',  // allow代表只允许下面的国家使用该shipping，not_allow代表不允许下面国家使用该shipping
                    'code' => [
                        'CN',
                        'US',
                    ]
                ],
                // 重量限制，当重量超出这个范围，该物流将不可用 （如果没有重量限制可以去掉）
                'weight' => [
                    'min' => 0,
                    'max' => 100,
                ],
            ],
            'middle_shipping'=> [  // xxx shipping
                'label'=> 'middle shipping( 6-15 work days)',
                'name' => 'HKBRAM',
                'formula' => '[weight] * 0.5',  // 这里填写公式
                // 对于国家和重量限制，如果没有，则不用填写，如果有，参考上面的样式填写
            ],
            'fast_shipping'=> [
                'label'=> 'Fast Shipping( 5-10 work days)',
                'name' => 'HKDHL',
                'formula' => 'csv', // 请将文件名字的命名写入，譬如： fast_shipping.csv
                'csv_content' => '', // 这个由shipping动态从文件中获取内容
                // 对于国家和重量限制，如果没有，则不用填写，如果有，参考上面的样式填写
            ],
        ],
        /** 该配置废弃，因为默认的shipping method，可能是不满足条件的。
         * 目前的default shipping method，从 可用物流数组 中取第一个作为 默认物流。
         * 该值必须在上面的配置 $shippingConfig中存在，如果不存在，则返回为空。
         */
        //'defaultShippingMethod' => [
        //    'enable'    => true, // 如果值为true，那么用户在cart生成的时候，就会填写上默认的货运方式。
        //    'shipping'  => 'fast_shipping',
        //],
    ],
];
