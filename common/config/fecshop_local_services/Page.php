<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'page' => [
		'childService' => [
			'currency' => [
				'baseCurrecy' => 'USD',  # 产品的价格都使用基础货币填写价格值。
				'defaultCurrency' => 'USD',  # 如果store不设置货币，就使用这个store默认货币
				'currencys' => [
					'USD' => [
						'rate' 		=> 1, # 汇率
						'symbol' 	=> '$',
					],
					'EUR' => [
						'rate' 		=> 0.93, # 汇率
						'symbol' 	=> '€',
					],
					//'AUD' => [
					//	'rate' 		=> 1.33,
					//	'symbol' 	=> 'AU$',
					//],
					'GBP' => [
						'rate' 		=> 0.8,
						'symbol' 	=> '£',
					],
					'RMB' => [
						'rate' 		=> 6.87,
						'symbol' 	=> '￥',
					],
				],
			],
		],
	],
];