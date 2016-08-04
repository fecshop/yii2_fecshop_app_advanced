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
			
			'widget' => [
				'widgetConfig' => [
					'head' => [
						'class' => 'fecshop\app\appfront\modules\Cms\block\widgets\Head',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/head.php',
						'cache' => [
							'enable'	=> false,
							'timeout' 	=> 4500,
						],
					],
					'header' => [
						'class' => 'fecshop\app\appfront\modules\Cms\block\widgets\Headers',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/header.php',
						'cache' => [
							'enable'	=> false,
							'timeout' 	=> 4500,
						],
					],
					'menu' => [
						'class' => 'fecshop\app\appfront\modules\Cms\block\widgets\Menu',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/menu.php',
						'cache' => [
							'enable'	=> false,
							//'timeout' 	=> 4500,
						],
					],
					'footer' => [
						'class' => 'fecshop\app\appfront\modules\Cms\block\widgets\Footer',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/footer.php',
						'cache' => [
							'enable'	=> false,
							//'timeout' 	=> 4500,
						],
					],
					'scroll' => [
						#'class' => 'fecshop\app\appfront\modules\Cms\block\widgets\Scroll',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/scroll.php',
					],
				]
				
			],
			
			
			'currency' => [
				'baseCurrecy' => 'USD',  # 产品的价格都使用基础货币填写价格值。
				'defaultCurrency' => 'USD',  # 如果store不设置货币，就使用这个store默认货币
				'currencys' => [
					'USD' => [
						'rate' 		=> 1,
						'symbol' 	=> '$',
					],
					'RMB' => [
						'rate' 		=> 6.3,
						'symbol' 	=> '￥',
					],
				],
			],
			
			'menu' => [
				'displayHome' => [
					'enable' => true,
					'display'=> 'Home',
				],
				/**
				 *	custom menu  in the front menu section.
				 */
				'frontCustomMenu' => [
					[
						'name' 		=> 'my custom menu',
						'urlPath'	=> '/my-custom-menu.html',
						'childMenu' => [
							[
								'name' 		=> 'my custom menu 2',
								'urlPath'	=> '/my-custom-menu-2.html',
							],
							[
								'name' 		=> 'my custom menu 2',
								'urlPath'	=> '/my-custom-menu-2.html',
								'childMenu' => [
									[
										'name' 		=> 'my custom menu 2',
										'urlPath'	=> '/my-custom-menu-2.html',
									],
									[
										'name' 		=> 'my custom menu 2',
										'urlPath'	=> '/my-custom-menu-2.html',
									],
								],	
							],
						],	
					],
					[
						'name' 		=> 'my custom menu 2',
						'urlPath'	=> '/my-custom-menu-2.html',
					],
				],
				/**
				 *	custom menu  behind the menu section.
				 */
				'behindCustomMenu' => [
					[
						'name' 		=> 'my behind custom menu',
						'urlPath'	=> '/my-behind-custom-menu.html',
					],
					[
						'name' 		=> 'my behindcustom menu 2',
						'urlPath'	=> '/my-behind-custom-menu-2.html',
					],
				],
			],
			
		],
	],
];