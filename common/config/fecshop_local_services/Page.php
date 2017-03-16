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
				'baseCurrecy' => 'USD',  	# 基础货币，后台产品的价格都使用基础货币填写价格值。
				'defaultCurrency' => 'USD', # 默认货币，如果store不设置货币，就使用这个store默认货币
				'currencys' => [
					'USD' => [  			# 货币简码，USD代表美元，这个是国际标准
						'rate' 		=> 1, 	# 汇率  当前货币/基础货币的比值，譬如，人民币/美元 = 7
						'symbol' 	=> '$', #货币符号
					],
					'EUR' => [  			# 欧元
						'rate' 		=> 0.93,# 汇率
						'symbol' 	=> '€',
					],
					//'AUD' => [
					//	'rate' 		=> 1.33,
					//	'symbol' 	=> 'AU$',
					//],
					'GBP' => [  			# 英镑
						'rate' 		=> 0.8,
						'symbol' 	=> '£',
					],
					'CNY' => [  			# 人民币
						'rate' 		=> 6.87,
						'symbol' 	=> '￥',
					],
				],
			],
		],
	],
];