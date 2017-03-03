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
						'class' => 'fecshop\app\appfront\widgets\Head',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/head.php',
						'cache' => [
							'enable'	=> false,
							'timeout' 	=> 4500,
						],
					],
					'header' => [
						'class' => 'fecshop\app\appfront\widgets\Headers',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/header.php',
						'cache' => [
							'enable'	=> false,
							'timeout' 	=> 4500,
						],
					],
					'topsearch' => [
					    'view'  => 'widgets/topsearch.php',
					],
					'menu' => [
						'class' => 'fecshop\app\appfront\widgets\Menu',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/menu.php',
						'cache' => [
							'enable'	=> false,
							//'timeout' 	=> 4500,
						],
					],
					'footer' => [
						'class' => 'fecshop\app\appfront\widgets\Footer',
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
					'breadcrumbs' => [
						'view'  => 'widgets/breadcrumbs.php',
					],
					'flashmessage' => [
						'view'  => 'widgets/flashmessage.php',
					],
				]
				
			],
			
			
			
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