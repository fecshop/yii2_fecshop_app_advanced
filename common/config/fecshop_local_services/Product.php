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
			'dress_group' => [
				'color'	  => [
					'dbtype'=> 'String',
					'label'	=>'颜色',
					'name'	=>'color',
					'display'=>[
						'type' => 'select',
						'data' => [
							'red' 		=> 'red',
							'white' 	=> 'white',
							'black' 	=> 'black',
							'blue' 		=> 'blue',
							'green' 	=> 'green',
							'yellow' 	=> 'yellow',
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
				
				
				'dresses-length' 	=> [
					'dbtype' 	=> 'Int',
					'label'=>'裙长',
					'name'=>'dresses-length',
					'display'=>[
						'type' => 'inputString',
						'lang' => false,
					],
					'require' => 1,
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