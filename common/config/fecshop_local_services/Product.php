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
				
				'size'	  => [
					'dbtype'=> 'String',
					'label'	=>'尺码',
					'name'	=>'size',
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
					//'require' => 0,
					//'default' => 2,
				],
				
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
			
			
			'computer_group' => [
				'memory_capacity' 	=> [
					'dbtype' 	=> 'String',
					'label'=>'Memory Capacity',
					'name'=>'memory_capacity',
					'display'=>[
						'type' => 'inputString',
						'lang' => true,
					],
					'require' => 1,
				],
				'cpu'		=> [
					'dbtype' 	=> 'Int',
					'label'=>'CPU型号',
					'name'=>'cpu',
					'display'=>[
						'type' => 'select',
						'data' => [
							1 	=> 'i3',
							2 	=> 'i5',
							3 	=> 'i7',
						]
					],
					'require' => 1,
					'default' => 1,
				],
			],
			
		],
		
	],
];