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
			'asset' => [
				'class' =>  'fecshop\services\page\Asset',
				# 在js后面加一个v参数，修改js后，更改v参数，否则，浏览器会使用缓存。
				# /assets/dbdba3fa/js/js.js?v=2
				'jsVersion'		=> 1,
				'cssVersion'	=> 1,
				# js和css的域名，譬如：http://www.fecshop.com/ 如果不设置，则使用网站的域名。
				# 'jsCssDomain'   => '',
			],
			
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
			
			'widget' => [
				'widgetConfig' => [
					'head' => [
						# 动态数据提供部分
						'class' => 'fecshop\app\appfront\widgets\Head',
						# 根据多模板的优先级，依次去模板找查找该文件，直到找到这个文件。
						'view'  => 'widgets/head.php',
						# 缓存
						'cache' => [
							'enable'	=> false, # 是否开启
							'timeout' 	=> 4500,  # 缓存过期时间
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
			
		],
	],
];