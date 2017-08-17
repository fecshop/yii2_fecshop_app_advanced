<?php
   return [
   'store' => [
        'class'  => 'fecshop\services\Store',
        'stores' => [
            // store key：域名去掉http部分，作为key，这个必须这样定义。
            'fecshop.appserver.fancyecommerce.com' => [
                'language'         => 'en_US',        // 语言简码需要在@common/config/fecshop_local_services/FecshopLang.php 中定义。
                'languageName'     => 'English',    // 语言简码对应的文字名称，将会出现在语言切换列表中显示。
                'currency'         => 'USD', // 当前store的默认货币,这个货币简码，必须在货币配置中配置
                
                // 用于sitemap生成中域名。
                'https'            => false,
                
                'serverLangs'   => [
                    
                    [
                        'code'             => 'fr',
                        'language'         => 'fr_FR',        // 语言简码需要在@common/config/fecshop_local_services/FecshopLang.php 中定义。
                        'languageName'     => 'Français',
                    ],
                    [
                        'code'             => 'en',
                        'language'         => 'en_US',        // 语言简码需要在@common/config/fecshop_local_services/FecshopLang.php 中定义。
                        'languageName'     => 'English',
                    ],
                    [
                        'code'             => 'es',
                        'language'         => 'es_ES',        // 语言简码需要在@common/config/fecshop_local_services/FecshopLang.php 中定义。
                        'languageName'     => 'Español',
                    ],
                    [
                        'code'             => 'zh',
                        'language'         => 'zh_CN',        // 语言简码需要在@common/config/fecshop_local_services/FecshopLang.php 中定义。
                        'languageName'     => '中文',
                    ],
                ],
                
            ],
            
        ],

    ],

];
