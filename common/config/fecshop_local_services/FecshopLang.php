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
    'fecshoplang' => [
        //'class' => 'fecshop\services\FecshopLang',
        //  mongoSearchLangName 在各个语言下字段参考资料如下：（不支持中文）
        //  https://docs.mongodb.com/manual/reference/text-search-languages/#text-search-languages
        'allLangCode' => [
            // 'en_US' 是标准语言简码  code对应的值en取 “标准语言简码”的前两位字符，
            // 该值设置后，进行了产品分类数据的添加后，不能修改，否则会出现部分翻译语言丢失。
            'en_US' => [
                'code'                    => 'en',
            ],
            'fr_FR' => [
                'code'                    => 'fr',
            ],
            'de_DE' => [
                'code'                    => 'de',
            ],
            'es_ES' => [
                'code'                    => 'es',
            ],
            'ru_RU' => [
                'code'                    => 'ru',
            ],
            'pt_PT' => [
                'code'                    => 'pt',
            ],
            'zh_CN' => [
                'code'                    => 'zh',
            ],
            'it_IT' => [
                'code'                    => 'it',
            ],
        ],
        // 默认语言。
        'defaultLangCode' => 'en',

    ],
];
