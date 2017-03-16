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
			
			
			
			#添加自定义menu
			'menu' => [
				'displayHome' => [
					'enable' => true,
					'display'=> 'Home',
				],
				/**
				 *	custom menu  in the front menu section.
				 */
				 
				'frontCustomMenu' => [
					
				],
				/**
				 *	custom menu  behind the menu section.
				 */
				'behindCustomMenu' => [
					[
						'name' 		=> 'custom menu',
						'urlPath'	=> '/my-custom-menu.html',
						'childMenu' => [
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