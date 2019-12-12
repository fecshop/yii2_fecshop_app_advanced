<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
    'page' => [
        'childService' => [
            'asset' => [
                // js 版本号，当更改了js，将这里的版本号+1，生成的js链接就会更改为  xxx.js?v=2 ,
                // 这样做的好处是，js的链接url改变了，可以防止浏览器继续使用缓存，而不是重新加载js文件的问题。
                'jsVersion'        => 1,
                // css 版本号，原理同js
                // 关于版本号更多的信息，请参看：http://www.fancyecommerce.com/2017/04/17/css-js-%E5%90%8E%E9%9D%A2%E5%8A%A0%E7%89%88%E6%9C%AC%E5%8F%B7%E7%9A%84%E5%8E%9F%E5%9B%A0%E5%92%8C%E6%96%B9%E5%BC%8F/
                'cssVersion'    => 1,
                // 是否每次刷新，强制发布js css到线上？ 开发环境设置为true，正式环境设置为false（你也可以设置为true，但是每次刷新都会复制js和css文件到@app/web/assets/下面，耗费资源）
                // 线上设置成false，每次访问不会强制复制js和css到发布环境，可以节省资源，但是，当css和js更新后，
                // 需要去@app/web/assets/ 路径下，手动清空所有的文件夹和文件，当assets路径下找不到文件，就会重新复制库包里的js和css到web环境，
                // 这是属于Yii2的知识范畴。
                'forceCopy' => true,
                
                // js and css config example:
                'jsOptions'	=> [
                    # js config 1
                    [
                        'options' => [
                            'position' =>  'POS_END',
                        //	'condition'=> 'lt IE 9',
                        ],
                        'js'	=>[
                            'js/my.js',
                        ],
                    ],
                    # js config 2
                    //[
                    //    'options' => [
                    //        'condition'=> 'lt IE 9',
                    //    ],
                    //    'js'	=>[
                    //        'js/ie9js.js'
                    //    ],
                    //],
                ],
                # css config
                'cssOptions'	=> [
                    # css config 1.
                    [
                        'css'	=>[
                            'css/my.css',
                        ],
                        // 加上这个，可以放到css的最后面
                        'options' => [
                            'depends'=>['fecadmin\myassets\CustomAsset'],
                        ]
                    ],

                    # css config 2.
                    //[
                    //    'options' => [
                    //        'condition'=> 'lt IE 9',
                    //    ],
                    //    'css'	=>[
                    //        'css/ltie9.css',
                    //    ],
                    //],
                ],
                
            ],


        ],
    ],
];
