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
        'payment_status_pending'                 => 'pending',        // 未付款
        'payment_status_processing'              => 'processing',    // 已付款
        'payment_status_canceled'                => 'canceled',        // 已取消
        'payment_status_complete'                => 'complete',        // 已完成
        'payment_status_holded'                  => 'holded',        // hold
        'payment_status_suspected_fraud'         => 'suspected_fraud', //欺诈

    ],
];
