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
    'search' => [
        'filterAttr' => [
            'color', 'size', // 在搜索页面侧栏的搜索过滤属性字段
        ],
        'childService' => [
            'mongoSearch' => [
                'searchIndexConfig'  => [ //设置用于全文搜索的产品属性以及权重，权重高的属性，排名靠前。
                    'name'        => 10,    // 产品name作为full search text的属性，权重为10
                    'description' => 5,   // 产品description作为full search text的属性，权重为5
                ],
                // more: https://docs.mongodb.com/manual/reference/text-search-languages/#text-search-languages
                /*
                 * 下面的对应关系为：语言二位简码 - mongodb中的语言配置
                 * 相应的对应列表参看：more: https://docs.mongodb.com/manual/reference/text-search-languages/#text-search-languages
                 * 上面的对应关系是不能修改的，是强制的，必须按照mongodb fullSearch的对语言的命名，譬如下面
                 * 下面的语言二位简码，需要在语言中进行配置，mongodb根据语言的不同，进行相应的分词工作。
                 * 这种方式您会感觉很繁琐，但是必须要这样做，这是mongodb在搜索方面的对语言设置方式。
                 * 
                 */
                
                'searchLang'  => [
                    'en' => 'english',
                    'fr' => 'french',
                    'de' => 'german',
                    'es' => 'spanish',
                    'ru' => 'russian',
                    'pt' => 'portuguese',
                ],
                
            ], 
            'xunSearch'  => [
                'enableService' => true, // xunSearch 开启前，先安装xunsearch。
                'fuzzy'         => true,  // 是否开启模糊查询
                'synonyms'      => true, //是否开启同义词翻译
                
                'searchLang'    => [
                    'zh' => 'chinese',
                ],
                
            ],
        ],
    ],
];
