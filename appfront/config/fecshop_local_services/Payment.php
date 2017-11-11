<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'payment' => [
        'childService' => [
            'alipay' => [
                'devide'        => 'pc' ,  // 填写pc或者wap，pc代表pc机浏览器支付类型，wap代表手机浏览器支付类型 
            ],
        ],
        'paymentConfig' => [        // 支付方式配置
            'standard' => [            // 标准支付类型：在购物车页面进入下单页面，填写支付信息，然后跳转到第三方支付网站的支付类型。
                
                'wxpay_standard' => [
                    'label'=> '微信支付',
                    // 跳转开始URL
                    'start_url'             => '@homeUrl/payment/wxpay/standard/start',
                    // 支付完成后，跳转的地址。
                    'return_url'            => '@homeUrl/payment/wxpay/standard/review',
                    // 微信发送消息，接收的地址。
                    'ipn_url'               => '@homeUrl/payment/wxpay/standard/ipn',
                    'success_redirect_url'  => '@homeUrl/payment/success',
                ], 
            ],
            
        ],
    ],
];
