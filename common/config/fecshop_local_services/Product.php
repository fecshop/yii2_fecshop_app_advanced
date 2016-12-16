<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'product' => [
		'customAttrGroup' => [
			'clothes_group' => [
				'spu_attr' => [  # spu用来区分sku的属性，譬如下面的属性的不同，对应不同的sku，进而是不同的库存
					'color'	  => [
						'dbtype'=> 'String',
						'label'	=>'颜色',
						'name'	=>'color',
						'sort_order' => 1,
						'relateImage' => true,  # 该属性用图片展示。
						'display'=>[
							'type' => 'select',
							'data' => [
								'one-color' 	=> 'one-color',
								'red' 			=> 'red',
								'white' 		=> 'white',
								'black' 		=> 'black',
								'blue' 			=> 'blue',
								'green' 		=> 'green',
								'yellow' 		=> 'yellow',
								'gray'			=> 'gray',
								'khaki'			=> 'khaki',
								
								'ivory'			=> 'ivory',
								'beige'			=> 'beige',
								'orange'			=> 'orange',
								'cyan'			=> 'cyan',
								'leopard'		=> 'leopard',
								'camouflage'	=> 'camouflage',
								
								'silver'		=> 'silver',
								'pink'			=> 'pink',
								'purple'		=> 'purple',
								'brown'			=> 'brown',
								'golden'		=> 'golden',
								'leopard'		=> 'leopard',
								'multicolor'	=> 'multicolor',
								'white & blue' 	=> 'White & Blue',
								'white & black' 	=> 'White & Black',
							]
						],
						//'require' => 0,
						//'default' => 2,
					],
					
					'size'	  => [
						'dbtype'=> 'String',
						'label'	=>'尺码',
						'name'	=>'size',
						'sort_order' => 2,
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'one-size' 	=> 'one-size',
								'S' 	=> 'S',
								'M' 	=> 'M',
								'L' 	=> 'L',
								'XL' 	=> 'XL',
								'XXL' 	=> 'XXL',
								'XXXL' 	=> 'XXXL',
							]
						],
						//'require' => 0,
						//'default' => 2,
					],
					
				],
				'general_attr' => [   #增加的普通属性，只是字段标示，不会用于属性过滤等用途
					# 这是input type='text' 的类型
					'my_remark' => [
						'dbtype'=> 'String',
						'label'=>'我的备注',
						'name'=>'my_remark',
						'display'=>[
							'type' => 'inputString',
						],
						'require' => 0,
					],
					# 这是input type='email' 的类型
					'my_email' =>[
						'dbtype'=> 'String',
						'label'=>'我的邮箱',
						'name'=>'my_email',
						'require' => 0,
						'display'=>[
							'type' => 'inputEmail',
						],
					],
					# 这是input type='date' 的类型
					'my_date'  => [
						'label'=>'我的日期',
						'name'=>'my_date',
						'display'=>[
							'type' => 'inputDate',
						],
					],
					# 这是<select> 的类型
					'style'   => [
						'dbtype'=> 'String',
						'label'	=>'类型',
						'name'	=>'style',
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'Casual' 	=> 'Casual',
								'Cute' 		=> 'Cute',
								'Sexy & Club'=> 'Sexy & Club',
								'Bohemian' 	=> 'Bohemian',
								'Vintage ' 	=> 'Vintage ',
								'Brief' 	=> 'Brief',
								'Work' 		=> 'Work',
								'Novelty' 	=> 'Novelty',
							]
						],
					],
					
					'dresses-length' 	=> [
						'dbtype'=> 'String',
						'label'	=>'裙长',
						'name'	=>'dresses-length',
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'Mini' 	=> 'Mini',
								'Knee-Length' 		=> 'Knee-Length',
								'Mid-Calf'=> 'Mid-Calf',
								'Ankle-Length' 	=> 'Ankle-Length',
								'Floor-Length ' 	=> 'Floor-Length ',
								
							]
						],
					],
					
					
					'pattern-type' 	=> [
						'dbtype'=> 'String',
						'label'	=>'款式',
						'name'	=>'pattern-type',
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'Animal' 	=> 'Animal',
								'Character' 		=> 'Character',
								'Floral'=> 'Floral',
								'Geometric ' 	=> 'Geometric ',
								'Leopard '=> 'Leopard ',
								'Letter'=> 'Letter',
								'Paisley'=> 'Paisley',
								'Patchwork'=> 'Patchwork',
								'Polka Dot'=> 'Polka Dot',
								'Print'=> 'Print',
								'Striped'=> 'Striped',
								
							]
						],
					],
					
					'sleeve-length' 	=> [
						'dbtype'=> 'String',
						'label'	=>'袖长',
						'name'	=>'sleeve-length',
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'Sleeveless' 	=> 'Sleeveless',
								'Short-Sleeves' 		=> 'Short Sleeves',
								'Half-Sleeves'=> 'Half Sleeves',
								'3-4-Length-Sleeves ' 	=> '3/4 Length Sleeves ',
								'Long-Sleeves '=> 'Long Sleeves ',
								
							]
						],
					],
					
					'collar' => [
						'dbtype'=> 'String',
						'label'	=>'领口',
						'name'	=>'collar',
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'Round Neck' 	=> 'Round Neck',
								'V-Neck' 	=> 'V-Neck',
								'Hooded' 	=> 'Hooded',
								'Turn-down-Collar' 	=> 'Turn-down Collar',
								
							]
						],
						//'require' => 0,
						//'default' => 2,
					],
				],
				
				
				'custom_options' => [
					
					'my_color'	  => [
						'dbtype'=> 'String',
						'label'	=>'My Color',
						'name'	=>'color',
						'showAsImg' => true, # 通过图片的方式展示属性。
						'require' => 1,  # 1代表是必填选项，0代表选填
						'display'=>[
							'type' => 'select',
							'data' => [
								'red' 			=> 'red',
								'white' 		=> 'white',
								'black' 		=> 'black',
								'blue' 			=> 'blue',
								'green' 		=> 'green',
								'yellow' 		=> 'yellow',
								'gray'			=> 'gray',
								'khaki'			=> 'khaki',
								
								'ivory'			=> 'ivory',
								'beige'			=> 'beige',
								'orange'			=> 'orange',
								'cyan'			=> 'cyan',
								'leopard'		=> 'leopard',
								'camouflage'	=> 'camouflage',
								
								'silver'		=> 'silver',
								'pink'			=> 'pink',
								'purple'		=> 'purple',
								'brown'			=> 'brown',
								'golden'		=> 'golden',
								'leopard'		=> 'leopard',
								'multicolor'	=> 'multicolor',
								'white & blue' 	=> 'White & Blue',
								'white & black' 	=> 'White & Black',
							]
						],
						
					],
					
					'my_size'	  => [
						'dbtype'=> 'String',
						'label'	=>'My Size',
						'name'	=>'size',
						'require' => 1,
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'S' 	=> 'S',
								'M' 	=> 'M',
								'L' 	=> 'L',
								'XL' 	=> 'XL',
								'XXL' 	=> 'XXL',
								'XXXL' 	=> 'XXXL',
							]
						],
						
					],
					
				
				],
			],
			
			
			'computer_group' => [
				'spu_attr' => [  # spu用来区分sku的属性，譬如下面的属性的不同，对应不同的sku，进而是不同的库存
					'xinghao'	  => [
						'dbtype'=> 'String',
						'label'	=>'型号',
						'name'	=>'xinghao',
						'sort_order' => 1,
						'relateImage' => true,  # 该属性用图片展示。
						'display'=>[
							'type' => 'select',
							'data' => [
								'xinghao1' 	=> 'xinghao1',
								'xinghao2' 	=> 'xinghao2',
								'xinghao3' 	=> 'xinghao3',
								]
						],
						//'require' => 0,
						//'default' => 2,
					],
					
					'cpu'	  => [
						'dbtype'=> 'String',
						'label'	=>'cpu',
						'name'	=>'cpu',
						'sort_order' => 2,
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'cpu1' 	=> 'cpu1',
								'cpu2' 	=> 'cpu2',
								'cpu3' 	=> 'cpu3',
							]
						],
						//'require' => 0,
						//'default' => 2,
					],
					
				],
				'general_attr' => [   #增加的普通属性，只是字段标示，不会用于属性过滤等用途
					'memory_capacity' 	=> [
						'dbtype' 	=> 'String',
						'label'=>'Memory Capacity',
						'name'=>'memory_capacity',
						'display'=>[
							'type' => 'inputString',
							'lang' => true,
						],
						'require' => 0,
					],
					
				],
				'custom_option_attr' => [
					'color'	  => [
						'dbtype'=> 'String',
						'label'	=>'颜色',
						'name'	=>'color',
						'display'=>[
							'type' => 'select',
							'data' => [
								'red' 			=> 'red',
								'white' 		=> 'white',
								'black' 		=> 'black',
								'blue' 			=> 'blue',
								'green' 		=> 'green',
								'yellow' 		=> 'yellow',
								'gray'			=> 'gray',
								'khaki'			=> 'khaki',
								
								'ivory'			=> 'ivory',
								'beige'			=> 'beige',
								'orange'			=> 'orange',
								'cyan'			=> 'cyan',
								'leopard'		=> 'leopard',
								'camouflage'	=> 'camouflage',
								
								'silver'		=> 'silver',
								'pink'			=> 'pink',
								'purple'		=> 'purple',
								'brown'			=> 'brown',
								'golden'		=> 'golden',
								'leopard'		=> 'leopard',
								'multicolor'	=> 'multicolor',
								'white & blue' 	=> 'White & Blue',
								'white & black' 	=> 'White & Black',
							]
						],
						//'require' => 0,
						//'default' => 2,
					],
				],
			],
			
			'test_group' => [
				'custom_options' => [
					
					'my_color'	  => [
						'dbtype'=> 'String',
						'label'	=>'My Color',
						'name'	=>'color',
						'showAsImg' => true, # 通过图片的方式展示属性。
						'require' => 1,  # 1代表是必填选项，0代表选填
						'display'=>[
							'type' => 'select',
							'data' => [
								'red' 			=> 'red',
								'white' 		=> 'white',
								'black' 		=> 'black',
								'blue' 			=> 'blue',
								'green' 		=> 'green',
								'yellow' 		=> 'yellow',
								'gray'			=> 'gray',
								'khaki'			=> 'khaki',
								
								'ivory'			=> 'ivory',
								'beige'			=> 'beige',
								'orange'			=> 'orange',
								'cyan'			=> 'cyan',
								'leopard'		=> 'leopard',
								'camouflage'	=> 'camouflage',
								
								'silver'		=> 'silver',
								'pink'			=> 'pink',
								'purple'		=> 'purple',
								'brown'			=> 'brown',
								'golden'		=> 'golden',
								'leopard'		=> 'leopard',
								'multicolor'	=> 'multicolor',
								'white & blue' 	=> 'White & Blue',
								'white & black' 	=> 'White & Black',
							]
						],
						
					],
					
					'my_size'	  => [
						'dbtype'=> 'String',
						'label'	=>'My Size',
						'name'	=>'size',
						'require' => 1,
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'S' 	=> 'S',
								'M' 	=> 'M',
								'L' 	=> 'L',
								'XL' 	=> 'XL',
								'XXL' 	=> 'XXL',
								'XXXL' 	=> 'XXXL',
							]
						],
						
					],
					
					'my_size2'	  => [
						'dbtype'=> 'String',
						'label'	=>'My Size',
						'name'	=>'size',
						'require' => 1,
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'S2' 	=> 'S2',
								'M2' 	=> 'M2',
								'L2' 	=> 'L2',
								'XL2' 	=> 'XL2',
								'XXL2' 	=> 'XXL2',
								'XXXL2' 	=> 'XXXL2',
							]
						],
						
					],
					
					'my_size3'	  => [
						'dbtype'=> 'String',
						'label'	=>'My Size',
						'name'	=>'size',
						'require' => 1,
						'display'	=>[
							'type' 	=>'select',
							'data' 	=>[
								'S3' 	=> 'S3',
								'M3' 	=> 'M3',
								'L3' 	=> 'L3',
								
							]
						],
						
					],
					
				
				],
			]
		],
		
	],
];