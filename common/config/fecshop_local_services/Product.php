<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 *
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'product' => [
        // 属性组的配置
        'customAttrGroup' => [
            //属性组的名字（每一个子项是一个属性组，譬如下面的clothes_group对应的就是一个属性组）
            'clothes_group' => [
                /*
                 * 属性组里面的属性有类别，目前有三个类
                 * 1. spu_attr 
                 * 1.1 spu和sku的概念：sku是产品的唯一标示，最小库存单位，譬如一款鞋子为一个spu，这款鞋子的不同的颜色和不同的尺码为一个sku，
                 * 1.2 什么是spu属性（spu_attr），当一款鞋子的不同的sku是颜色和尺码的不同，那么颜色和尺码就是这款鞋子的spu属性（spu_attr）。
                 * 1.2 spu_attr是用来在产品详细页面，将这个spu下面的所有sku串联起来，譬如页面：http://fecshop.appfront.fancyecommerce.com/index.php/raglan-sleeves-letter-printed-crew-neck-sweatshirt-53386451-77774122
                 * 		访问这款衣服的每一个SKU，都会把其他的sku列出来，点击后，就进去其他sku的页面，您会发现url是变化的，这个是类似于京东的方式。
                 *		注意：	1.2.1 因为组合的复杂性，spu attr最多设置2个属性，不能超过2个，超过两个请使用customer_option的方式。也就是类似于淘宝的方式。
                 * 				1.2.2 这里的属性需要严格按照下面的格式进行配置，如果您想配置自己的spu属性，那么
                 * 2. general_attr（普通属性），可以是各种格式的值，譬如时间格式，email格式，下拉条选择值等。这些属性可以用于分类侧栏属性过滤。
                 * 3. custom_options 这里是用户自定义属性，显示方式方面有点和spu属性类似，spu属性显示的方式是京东的方式，点击每一个选项是url跳转的
                 *    用户自定义类似于淘宝的方式，选择各个颜色尺码，页面是不跳转的，各个颜色尺码有相应的图片，库存，价格，sku等。
                 *	  您可以查看演示地址：http://fecshop.appfront.fancyecommerce.com/index.php/reindeer-pattern-glitter-christmas-dress-86519596
                 * 您可以给产品属性组添加的属性类型就上面几种，在后台编辑产品的时候，选择不同的属性组，就会加载相应的属性出来。
                 */
                'spu_attr' => [  // spu用来区分sku的属性，譬如下面的属性的不同，对应不同的sku，进而是不同的库存
                    // 第一个属性会被用户当做图片来显示。
                    'color'      => [
                        'dbtype'     => 'String',
                        'label'      => '颜色',
                        'name'       => 'color',
                        'showAsImg'  => true,
                        'sort_order' => 1,
                        'display'    => [
                            'type' => 'select',
                            'data' => [
                                # 产品的spu属性的顺序，会按照下面的顺序进行排序。
                                'one-color'        => 'one-color',
                                'red'              => 'red',
                                'white'            => 'white',
                                'black'            => 'black',
                                'blue'             => 'blue',
                                'green'            => 'green',
                                'yellow'           => 'yellow',
                                'gray'             => 'gray',
                                'khaki'            => 'khaki',

                                'ivory'             => 'ivory',
                                'beige'             => 'beige',
                                'orange'            => 'orange',
                                'cyan'              => 'cyan',
                                'leopard'           => 'leopard',
                                'camouflage'        => 'camouflage',

                                'silver'           => 'silver',
                                'pink'             => 'pink',
                                'purple'           => 'purple',
                                'brown'            => 'brown',
                                'golden'           => 'golden',
                                'multicolor'       => 'multicolor',
                                'white & blue'     => 'White & Blue',
                                'white & black'    => 'White & Black',
                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                    // 第二个属性不会当做图片来显示
                    'size'      => [
                        'dbtype'     => 'String',
                        'label'      => '尺码',
                        'name'       => 'size',
                        'sort_order' => 2,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                # 产品的spu属性的顺序，会按照下面的顺序进行排序。
                                'one-size'    => 'one-size',
                                'S'           => 'S',
                                'M'           => 'M',
                                'L'           => 'L',
                                'XL'          => 'XL',
                                'XXL'         => 'XXL',
                                'XXXL'        => 'XXXL',
                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                    
                ],
                'general_attr' => [
                    // 这是input type='text' 的类型
                    'my_remark' => [
                        'dbtype' => 'String',
                        'label'  => '我的备注',
                        'name'   => 'my_remark',
                        'display'=> [
                            'type' => 'inputString',   // 字符串格式的属性
                        ],
                        'require' => 0,
                    ],
                    // 这是input type='email' 的类型
                    'my_email' => [
                        'dbtype'  => 'String',
                        'label'   => '我的邮箱',
                        'name'    => 'my_email',
                        'require' => 0,
                        'display' => [
                            'type' => 'inputEmail',        // 字符串格式的属性（email格式验证）
                        ],
                    ],
                    // 这是input type='date' 的类型
                    'my_date'  => [
                        'label'  => '我的日期',
                        'name'   => 'my_date',
                        'display'=> [
                            'type' => 'inputDate',        // 字符串格式的属性（Date格式验证）
                        ],
                    ],
                    // 这是<select> 的类型
                    'style'   => [
                        'dbtype'     => 'String',
                        'label'      => '类型',
                        'name'       => 'style',
                        'display'    => [
                            'type'    => 'select',        // 下拉条选择格式的属性
                            'data'    => [
                                'Casual'      => 'Casual',
                                'Cute'        => 'Cute',
                                'Sexy & Club' => 'Sexy & Club',
                                'Bohemian'    => 'Bohemian',
                                'Vintage '    => 'Vintage ',
                                'Brief'       => 'Brief',
                                'Work'        => 'Work',
                                'Novelty'     => 'Novelty',
                            ],
                        ],
                    ],

                    'dresses-length'    => [
                        'dbtype'     => 'String',
                        'label'      => '裙长',
                        'name'       => 'dresses-length',
                        'display'    => [
                            'type'    => 'select',    // 下拉条选择格式的属性
                            'data'    => [
                                'Mini'               => 'Mini',
                                'Knee-Length'        => 'Knee-Length',
                                'Mid-Calf'           => 'Mid-Calf',
                                'Ankle-Length'       => 'Ankle-Length',
                                'Floor-Length '      => 'Floor-Length ',

                            ],
                        ],
                    ],

                    'pattern-type'    => [
                        'dbtype'     => 'String',
                        'label'      => '款式',
                        'name'       => 'pattern-type',    // 属性名字
                        'display'    => [
                            'type'    => 'select',    // 下拉条选择格式的属性
                            'data'    => [
                                'Animal'           => 'Animal',
                                'Character'        => 'Character',
                                'Floral'           => 'Floral',
                                'Geometric '       => 'Geometric ',
                                'Leopard '         => 'Leopard ',
                                'Letter'           => 'Letter',
                                'Paisley'          => 'Paisley',
                                'Patchwork'        => 'Patchwork',
                                'Polka Dot'        => 'Polka Dot',
                                'Print'            => 'Print',
                                'Striped'          => 'Striped',

                            ],
                        ],
                    ],

                    'sleeve-length'    => [
                        'dbtype'     => 'String',
                        'label'      => '袖长',
                        'name'       => 'sleeve-length',
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'Sleeveless'             => 'Sleeveless',
                                'Short-Sleeves'          => 'Short Sleeves',
                                'Half-Sleeves'           => 'Half Sleeves',
                                '3-4-Length-Sleeves '    => '3/4 Length Sleeves ',
                                'Long-Sleeves '          => 'Long Sleeves ',

                            ],
                        ],
                    ],

                    'collar' => [
                        'dbtype'     => 'String',
                        'label'      => '领口',        // 后台显示的中文名（目前后台只有中文）
                        'name'       => 'collar',
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'Round Neck'          => 'Round Neck',    // 下拉条里面对应的各个可以选择的值。
                                'V-Neck'              => 'V-Neck',
                                'Hooded'              => 'Hooded',
                                'Turn-down-Collar'    => 'Turn-down Collar',

                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                ],

                'custom_options' => [

                    'my_color'      => [
                        'dbtype'    => 'String',  //类型
                        'label'     => 'My Color', // 显示的名字
                        'name'      => 'color',      // 在数据库中存在的列名
                        'showAsImg' => true,  // （在前端展示部分）通过图片的方式展示属性。譬如；http://fecshop.appfront.fancyecommerce.com/index.php/reindeer-pattern-glitter-christmas-dress-86519596，
                                              //		你会发现，该属性对应的显示方式不是值，而是产品的图片。
                        'require' => 1,  // 1代表是必填选项，0代表选填
                        'display' => [
                            'type' => 'select',
                            'data' => [
                                'red'              => 'red',
                                'white'            => 'white',
                                'black'            => 'black',
                                'blue'             => 'blue',
                                'green'            => 'green',
                                'yellow'           => 'yellow',
                                'gray'             => 'gray',
                                'khaki'            => 'khaki',

                                'ivory'             => 'ivory',
                                'beige'             => 'beige',
                                'orange'            => 'orange',
                                'cyan'              => 'cyan',
                                'leopard'           => 'leopard',
                                'camouflage'        => 'camouflage',

                                'silver'           => 'silver',
                                'pink'             => 'pink',
                                'purple'           => 'purple',
                                'brown'            => 'brown',
                                'golden'           => 'golden',
                                'leopard'          => 'leopard',
                                'multicolor'       => 'multicolor',
                                'white & blue'     => 'White & Blue',
                                'white & black'    => 'White & Black',
                            ],
                        ],

                    ],

                    'my_size'      => [
                        'dbtype'     => 'String',
                        'label'      => 'My Size',
                        'name'       => 'size',
                        'require'    => 1,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'S'       => 'S',
                                'M'       => 'M',
                                '0.6'     => '0.6',
                                'L'       => 'L',
                                'XL'      => 'XL',
                                'XXL'     => 'XXL',
                                'XXXL'    => 'XXXL',
                            ],
                        ],

                    ],

                ],
            ],
            
            
            
            'men_group' => [
                /*
                 * 属性组里面的属性有类别，目前有三个类
                 * 1. spu_attr 
                 * 1.1 spu和sku的概念：sku是产品的唯一标示，最小库存单位，譬如一款鞋子为一个spu，这款鞋子的不同的颜色和不同的尺码为一个sku，
                 * 1.2 什么是spu属性（spu_attr），当一款鞋子的不同的sku是颜色和尺码的不同，那么颜色和尺码就是这款鞋子的spu属性（spu_attr）。
                 * 1.2 spu_attr是用来在产品详细页面，将这个spu下面的所有sku串联起来，譬如页面：http://fecshop.appfront.fancyecommerce.com/index.php/raglan-sleeves-letter-printed-crew-neck-sweatshirt-53386451-77774122
                 * 		访问这款衣服的每一个SKU，都会把其他的sku列出来，点击后，就进去其他sku的页面，您会发现url是变化的，这个是类似于京东的方式。
                 *		注意：	1.2.1 因为组合的复杂性，spu attr最多设置2个属性，不能超过2个，超过两个请使用customer_option的方式。也就是类似于淘宝的方式。
                 * 				1.2.2 这里的属性需要严格按照下面的格式进行配置，如果您想配置自己的spu属性，那么
                 * 2. general_attr（普通属性），可以是各种格式的值，譬如时间格式，email格式，下拉条选择值等。这些属性可以用于分类侧栏属性过滤。
                 * 3. custom_options 这里是用户自定义属性，显示方式方面有点和spu属性类似，spu属性显示的方式是京东的方式，点击每一个选项是url跳转的
                 *    用户自定义类似于淘宝的方式，选择各个颜色尺码，页面是不跳转的，各个颜色尺码有相应的图片，库存，价格，sku等。
                 *	  您可以查看演示地址：http://fecshop.appfront.fancyecommerce.com/index.php/reindeer-pattern-glitter-christmas-dress-86519596
                 * 您可以给产品属性组添加的属性类型就上面几种，在后台编辑产品的时候，选择不同的属性组，就会加载相应的属性出来。
                 */
                'spu_attr' => [  // spu用来区分sku的属性，譬如下面的属性的不同，对应不同的sku，进而是不同的库存
                    // 第一个属性会被用户当做图片来显示。
                    'color'      => [
                        'dbtype'     => 'String',
                        'label'      => '颜色',
                        'name'       => 'color',
                        'showAsImg'  => true,
                        'sort_order' => 1,
                        'display'    => [
                            'type' => 'select',
                            'data' => [
                                # 产品的spu属性的顺序，会按照下面的顺序进行排序。
                                'one-color'        => 'one-color',
                                'red'              => 'red',
                                'white'            => 'white',
                                'black'            => 'black',
                                'blue'             => 'blue',
                                'green'            => 'green',
                                'yellow'           => 'yellow',
                                'gray'             => 'gray',
                                'khaki'            => 'khaki',

                                'ivory'             => 'ivory',
                                'beige'             => 'beige',
                                'orange'            => 'orange',
                                'cyan'              => 'cyan',
                                'leopard'           => 'leopard',
                                'camouflage'        => 'camouflage',

                                'silver'           => 'silver',
                                'pink'             => 'pink',
                                'purple'           => 'purple',
                                'brown'            => 'brown',
                                'golden'           => 'golden',
                                'multicolor'       => 'multicolor',
                                'white & blue'     => 'White & Blue',
                                'white & black'    => 'White & Black',
                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                    // 第二个属性不会当做图片来显示
                    'size'      => [
                        'dbtype'     => 'String',
                        'label'      => '尺码',
                        'name'       => 'size',
                        'sort_order' => 2,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                # 产品的spu属性的顺序，会按照下面的顺序进行排序。
                                'one-size'    => 'one-size',
                                'S'           => 'S',
                                'M'           => 'M',
                                'L'           => 'L',
                                'XL'          => 'XL',
                                'XXL'         => 'XXL',
                                'XXXL'        => 'XXXL',
                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                    
                    'test3'      => [
                        'dbtype'     => 'String',
                        'label'      => '测试3',
                        'name'       => 'test3',
                        'sort_order' => 3,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                # 产品的spu属性的顺序，会按照下面的顺序进行排序。
                                't_1'    => 't_1',
                                't_2'    => 't_2',
                                't_3'    => 't_3',
                                't_4'    => 't_4',
                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],

                ],
                'general_attr' => [
                    // 这是input type='text' 的类型
                    'my_remark' => [
                        'dbtype' => 'String',
                        'label'  => '我的备注',
                        'name'   => 'my_remark',
                        'display'=> [
                            'type' => 'inputString',   // 字符串格式的属性
                        ],
                        'require' => 0,
                    ],
                    // 这是input type='email' 的类型
                    'my_email' => [
                        'dbtype'  => 'String',
                        'label'   => '我的邮箱',
                        'name'    => 'my_email',
                        'require' => 0,
                        'display' => [
                            'type' => 'inputEmail',        // 字符串格式的属性（email格式验证）
                        ],
                    ],
                    // 这是input type='date' 的类型
                    'my_date'  => [
                        'label'  => '我的日期',
                        'name'   => 'my_date',
                        'display'=> [
                            'type' => 'inputDate',        // 字符串格式的属性（Date格式验证）
                        ],
                    ],
                    // 这是<select> 的类型
                    'style'   => [
                        'dbtype'     => 'String',
                        'label'      => '类型',
                        'name'       => 'style',
                        'display'    => [
                            'type'    => 'select',        // 下拉条选择格式的属性
                            'data'    => [
                                'Casual'      => 'Casual',
                                'Cute'        => 'Cute',
                                'Sexy & Club' => 'Sexy & Club',
                                'Bohemian'    => 'Bohemian',
                                'Vintage '    => 'Vintage ',
                                'Brief'       => 'Brief',
                                'Work'        => 'Work',
                                'Novelty'     => 'Novelty',
                            ],
                        ],
                    ],

                    'dresses-length'    => [
                        'dbtype'     => 'String',
                        'label'      => '裙长',
                        'name'       => 'dresses-length',
                        'display'    => [
                            'type'    => 'select',    // 下拉条选择格式的属性
                            'data'    => [
                                'Mini'               => 'Mini',
                                'Knee-Length'        => 'Knee-Length',
                                'Mid-Calf'           => 'Mid-Calf',
                                'Ankle-Length'       => 'Ankle-Length',
                                'Floor-Length '      => 'Floor-Length ',

                            ],
                        ],
                    ],

                    'pattern-type'    => [
                        'dbtype'     => 'String',
                        'label'      => '款式',
                        'name'       => 'pattern-type',    // 属性名字
                        'display'    => [
                            'type'    => 'select',    // 下拉条选择格式的属性
                            'data'    => [
                                'Animal'           => 'Animal',
                                'Character'        => 'Character',
                                'Floral'           => 'Floral',
                                'Geometric '       => 'Geometric ',
                                'Leopard '         => 'Leopard ',
                                'Letter'           => 'Letter',
                                'Paisley'          => 'Paisley',
                                'Patchwork'        => 'Patchwork',
                                'Polka Dot'        => 'Polka Dot',
                                'Print'            => 'Print',
                                'Striped'          => 'Striped',

                            ],
                        ],
                    ],

                    'sleeve-length'    => [
                        'dbtype'     => 'String',
                        'label'      => '袖长',
                        'name'       => 'sleeve-length',
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'Sleeveless'             => 'Sleeveless',
                                'Short-Sleeves'          => 'Short Sleeves',
                                'Half-Sleeves'           => 'Half Sleeves',
                                '3-4-Length-Sleeves '    => '3/4 Length Sleeves ',
                                'Long-Sleeves '          => 'Long Sleeves ',

                            ],
                        ],
                    ],

                    'collar' => [
                        'dbtype'     => 'String',
                        'label'      => '领口',        // 后台显示的中文名（目前后台只有中文）
                        'name'       => 'collar',
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'Round Neck'          => 'Round Neck',    // 下拉条里面对应的各个可以选择的值。
                                'V-Neck'              => 'V-Neck',
                                'Hooded'              => 'Hooded',
                                'Turn-down-Collar'    => 'Turn-down Collar',

                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                ],

                'custom_options' => [

                    'my_color'      => [
                        'dbtype'    => 'String',  //类型
                        'label'     => 'My Color', // 显示的名字
                        'name'      => 'color',      // 在数据库中存在的列名
                        'showAsImg' => true,  // （在前端展示部分）通过图片的方式展示属性。譬如；http://fecshop.appfront.fancyecommerce.com/index.php/reindeer-pattern-glitter-christmas-dress-86519596，
                                              //		你会发现，该属性对应的显示方式不是值，而是产品的图片。
                        'require' => 1,  // 1代表是必填选项，0代表选填
                        'display' => [
                            'type' => 'select',
                            'data' => [
                                'red'              => 'red',
                                'white'            => 'white',
                                'black'            => 'black',
                                'blue'             => 'blue',
                                'green'            => 'green',
                                'yellow'           => 'yellow',
                                'gray'             => 'gray',
                                'khaki'            => 'khaki',

                                'ivory'             => 'ivory',
                                'beige'             => 'beige',
                                'orange'            => 'orange',
                                'cyan'              => 'cyan',
                                'leopard'           => 'leopard',
                                'camouflage'        => 'camouflage',

                                'silver'           => 'silver',
                                'pink'             => 'pink',
                                'purple'           => 'purple',
                                'brown'            => 'brown',
                                'golden'           => 'golden',
                                'leopard'          => 'leopard',
                                'multicolor'       => 'multicolor',
                                'white & blue'     => 'White & Blue',
                                'white & black'    => 'White & Black',
                            ],
                        ],

                    ],

                    'my_size'      => [
                        'dbtype'     => 'String',
                        'label'      => 'My Size',
                        'name'       => 'size',
                        'require'    => 1,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'S'       => 'S',
                                'M'       => 'M',
                                'L'       => 'L',
                                'XL'      => 'XL',
                                'XXL'     => 'XXL',
                                'XXXL'    => 'XXXL',
                            ],
                        ],

                    ],

                ],
            ],
            
            'computer_group' => [
                'spu_attr' => [  // spu用来区分sku的属性，譬如下面的属性的不同，对应不同的sku，进而是不同的库存
                    'xinghao'      => [
                        'dbtype'      => 'String',
                        'label'       => '型号',
                        'name'        => 'xinghao',
                        'showAsImg' => true,
                        'sort_order'  => 1,
                        'relateImage' => true,  // 该属性用图片展示。
                        'display'     => [
                            'type' => 'select',
                            'data' => [
                                'xinghao1'    => 'xinghao1',
                                'xinghao2'    => 'xinghao2',
                                'xinghao3'    => 'xinghao3',
                                ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],

                    'cpu'      => [
                        'dbtype'     => 'String',
                        'label'      => 'cpu',
                        'name'       => 'cpu',
                        'sort_order' => 2,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'cpu1'    => 'cpu1',
                                'cpu2'    => 'cpu2',
                                'cpu3'    => 'cpu3',
                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],

                ],
                'general_attr' => [   //增加的普通属性，只是字段标示，不会用于属性过滤等用途
                    'memory_capacity'    => [
                        'dbtype'    => 'String',
                        'label'     => 'Memory Capacity',
                        'name'      => 'memory_capacity',
                        'display'   => [
                            'type' => 'inputString',
                            'lang' => true,
                        ],
                        'require' => 0,
                    ],

                ],
                'custom_option_attr' => [
                    'color'      => [
                        'dbtype'   => 'String',
                        'label'    => '颜色',
                        'name'     => 'color',
                        'display'  => [
                            'type' => 'select',
                            'data' => [
                                'red'              => 'red',
                                'white'            => 'white',
                                'black'            => 'black',
                                'blue'             => 'blue',
                                'green'            => 'green',
                                'yellow'           => 'yellow',
                                'gray'             => 'gray',
                                'khaki'            => 'khaki',

                                'ivory'             => 'ivory',
                                'beige'             => 'beige',
                                'orange'            => 'orange',
                                'cyan'              => 'cyan',
                                'leopard'           => 'leopard',
                                'camouflage'        => 'camouflage',

                                'silver'           => 'silver',
                                'pink'             => 'pink',
                                'purple'           => 'purple',
                                'brown'            => 'brown',
                                'golden'           => 'golden',
                                'leopard'          => 'leopard',
                                'multicolor'       => 'multicolor',
                                'white & blue'     => 'White & Blue',
                                'white & black'    => 'White & Black',
                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                ],
            ],

            'test_group' => [
                'custom_options' => [

                    'my_color'      => [
                        'dbtype'    => 'String',
                        'label'     => 'My Color',
                        'name'      => 'color',
                        'showAsImg' => true, // 通过图片的方式展示属性。
                        'require'   => 1,  // 1代表是必填选项，0代表选填
                        'display'   => [
                            'type' => 'select',
                            'data' => [
                                'red'              => 'red',
                                'white'            => 'white',
                                'black'            => 'black',
                                'blue'             => 'blue',
                                'green'            => 'green',
                                'yellow'           => 'yellow',
                                'gray'             => 'gray',
                                'khaki'            => 'khaki',

                                'ivory'             => 'ivory',
                                'beige'             => 'beige',
                                'orange'            => 'orange',
                                'cyan'              => 'cyan',
                                'leopard'           => 'leopard',
                                'camouflage'        => 'camouflage',

                                'silver'           => 'silver',
                                'pink'             => 'pink',
                                'purple'           => 'purple',
                                'brown'            => 'brown',
                                'golden'           => 'golden',
                                'leopard'          => 'leopard',
                                'multicolor'       => 'multicolor',
                                'white & blue'     => 'White & Blue',
                                'white & black'    => 'White & Black',
                            ],
                        ],

                    ],

                    'my_size'      => [
                        'dbtype'     => 'String',
                        'label'      => 'My Size',
                        'name'       => 'size',
                        'require'    => 1,
                        'showAsImg'  => false,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'S'       => 'S',
                                'M'       => 'M',
                                'L'       => 'L',
                                'XL'      => 'XL',
                                'XXL'     => 'XXL',
                                'XXXL'    => 'XXXL',
                            ],
                        ],

                    ],

                    'my_size2'      => [
                        'dbtype'     => 'String',
                        'label'      => 'My Size',
                        'name'       => 'size',
                        'require'    => 1,
                        'showAsImg'  => false,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'S2'       => 'S2',
                                'M2'       => 'M2',
                                'L2'       => 'L2',
                                'XL2'      => 'XL2',
                                'XXL2'     => 'XXL2',
                                'XXXL2'    => 'XXXL2',
                            ],
                        ],

                    ],

                    'my_size3'      => [
                        'dbtype'     => 'String',
                        'label'      => 'My Size',
                        'name'       => 'size',
                        'require'    => 1,
                        'showAsImg'  => false,
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'S3'    => 'S3',
                                'M3'    => 'M3',
                                'L3'    => 'L3',

                            ],
                        ],

                    ],

                ],
                'general_attr' => [
                    // 这是input type='text' 的类型
                    'my_remark' => [
                        'dbtype' => 'String',
                        'label'  => '我的备注',
                        'name'   => 'my_remark',
                        'display'=> [
                            'type' => 'inputString',   // 字符串格式的属性
                        ],
                        'require' => 0,
                    ],
                    // 这是input type='email' 的类型
                    'my_email' => [
                        'dbtype'  => 'String',
                        'label'   => '我的邮箱',
                        'name'    => 'my_email',
                        'require' => 0,
                        'display' => [
                            'type' => 'inputEmail',        // 字符串格式的属性（email格式验证）
                        ],
                    ],
                    // 这是input type='date' 的类型
                    'my_date'  => [
                        'label'  => '我的日期',
                        'name'   => 'my_date',
                        'display'=> [
                            'type' => 'inputDate',        // 字符串格式的属性（Date格式验证）
                        ],
                    ],
                    // 这是<select> 的类型
                    'style'   => [
                        'dbtype'     => 'String',
                        'label'      => '类型',
                        'name'       => 'style',
                        'display'    => [
                            'type'    => 'select',        // 下拉条选择格式的属性
                            'data'    => [
                                'Casual'      => 'Casual',
                                'Cute'        => 'Cute',
                                'Sexy & Club' => 'Sexy & Club',
                                'Bohemian'    => 'Bohemian',
                                'Vintage '    => 'Vintage ',
                                'Brief'       => 'Brief',
                                'Work'        => 'Work',
                                'Novelty'     => 'Novelty',
                            ],
                        ],
                    ],

                    'dresses-length'    => [
                        'dbtype'     => 'String',
                        'label'      => '裙长',
                        'name'       => 'dresses-length',
                        'display'    => [
                            'type'    => 'select',    // 下拉条选择格式的属性
                            'data'    => [
                                'Mini'               => 'Mini',
                                'Knee-Length'        => 'Knee-Length',
                                'Mid-Calf'           => 'Mid-Calf',
                                'Ankle-Length'       => 'Ankle-Length',
                                'Floor-Length '      => 'Floor-Length ',

                            ],
                        ],
                    ],

                    'pattern-type'    => [
                        'dbtype'     => 'String',
                        'label'      => '款式',
                        'name'       => 'pattern-type',    // 属性名字
                        'display'    => [
                            'type'    => 'select',    // 下拉条选择格式的属性
                            'data'    => [
                                'Animal'           => 'Animal',
                                'Character'        => 'Character',
                                'Floral'           => 'Floral',
                                'Geometric '       => 'Geometric ',
                                'Leopard '         => 'Leopard ',
                                'Letter'           => 'Letter',
                                'Paisley'          => 'Paisley',
                                'Patchwork'        => 'Patchwork',
                                'Polka Dot'        => 'Polka Dot',
                                'Print'            => 'Print',
                                'Striped'          => 'Striped',

                            ],
                        ],
                    ],

                    'sleeve-length'    => [
                        'dbtype'     => 'String',
                        'label'      => '袖长',
                        'name'       => 'sleeve-length',
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'Sleeveless'             => 'Sleeveless',
                                'Short-Sleeves'          => 'Short Sleeves',
                                'Half-Sleeves'           => 'Half Sleeves',
                                '3-4-Length-Sleeves '    => '3/4 Length Sleeves ',
                                'Long-Sleeves '          => 'Long Sleeves ',

                            ],
                        ],
                    ],

                    'collar' => [
                        'dbtype'     => 'String',
                        'label'      => '领口',        // 后台显示的中文名（目前后台只有中文）
                        'name'       => 'collar',
                        'display'    => [
                            'type'    => 'select',
                            'data'    => [
                                'Round Neck'          => 'Round Neck',    // 下拉条里面对应的各个可以选择的值。
                                'V-Neck'              => 'V-Neck',
                                'Hooded'              => 'Hooded',
                                'Turn-down-Collar'    => 'Turn-down Collar',

                            ],
                        ],
                        //'require' => 0,
                        //'default' => 2,
                    ],
                ],
            ],
        ],

    ],
];
