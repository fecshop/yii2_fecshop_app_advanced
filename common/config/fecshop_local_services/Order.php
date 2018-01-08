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
    'order' => [
        'increment_id'        => '1100000000', // 订单的格式。
        'requiredAddressAttr' => [ // 必填的订单字段。
            'first_name',
            'last_name',
            'email',
            'telephone',
            'street1',
            'country',
            'city',
            'state',
            'zip',
        ],
        //处理多少分钟后，支付状态为pending的订单，归还库存。
        'minuteBeforeThatReturnPendingStock'    => 600,
        // 脚本一次性处理多少个pending订单。
        'orderCountThatReturnPendingStock'        => 30,
        // 订单状态配置
        
        // 下面是订单支付状态
        // 等待付款状态
        'payment_status_pending'            => 'payment_pending',
        // 付款处理中，(支付处理中，因为信用卡有预售，因此需要等IPN消息来确认是否支付成功)
        'payment_status_processing'         => 'payment_processing',
        // 收款成功（支付状态已确认，代表已经收到钱了）
        'payment_status_confirmed'          => 'payment_confirmed',
        // 欺诈【当paypal的返回金额和网站金额不一致【以及货币类型】的情况，就会判定该状态】
        'payment_status_suspected_fraud'    => 'payment_suspected_fraud',
        // 订单支付已取消【用户进入paypal点击取消订单返回网站，或者payment_pending订单超过xx时间未支付被脚本取消，或者客服后台取消】
       'payment_status_canceled'            => 'payment_canceled',
        // 订单审核中（订单收款成功后，进入erp，需要客服审核，才能开始发货流程，或者可能存在某些问题，被客服暂时挂起）
        'status_holded'                     => 'holded',
        // 订单备货处理中，从成功收款进入erp并客服审核成功后，进入备货流程 到 发货前的状态
        'status_processing'                 => 'processing',
        // 订单已发货【订单包裹被物流公司收取后】
        'status_dispatched'                 => 'dispatched',
        // 订单已退款【已收款订单因为某些原因进行退款，譬如：仓库无货，用户收到货后发现破损退款等】
        'status_refunded'                   => 'refunded',
        // 订单已完成，【用户收到货物xx时间后，未发起纠纷争端，订单状态标记为已完成】
        'status_completed'                  => 'completed',
    ],    
];
