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
			//'widget' => [
			//],
			
			'menu' => [
				'displayHome' => [
					'enable' => true,  		# 是否在菜单中显示home
					'display'=> 'Home',		# 显示对应的字符。
				],
				/**
				 *	在菜单前面部分（产品分类菜单的前面部分）的自定义菜单。参考behindCustomMenu里面的格式
				 */
				 
				'frontCustomMenu' => [
					
				],
				
				/**
				 *	在菜单后面部分（产品分类菜单的前面部分）的自定义菜单
				 */
				'behindCustomMenu' => [
					[
						'name' 		=> 'custom menu',			# 菜单名字
						'urlPath'	=> '/my-custom-menu.html',	# 菜单对应的url
						'childMenu' => [						# 子菜单
							[
								'name' 		=> 'my custom menu 2',
								'urlPath'	=> '/my-custom-menu-2.html',
							],
							[
								'name' 		=> 'my custom menu 3',
								'urlPath'	=> '/my-custom-menu-2.html',
								'childMenu' => [
									[
										'name' 		=> 'my custom menu 3',
										'urlPath'	=> '/my-custom-menu-2.html',
									],
									[
										'name' 		=> 'my custom menu 3',
										'urlPath'	=> '/my-custom-menu-2.html',
									],
								],	
							],
						],	
					],
				],
				
			],
			
		],
	],
];