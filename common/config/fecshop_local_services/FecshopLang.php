<?php
/**
 * FecShop file.
 *
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'fecshoplang' => [
		//'class' => 'fecshop\services\FecshopLang',
		//  mongoSearchLangName 在各个语言下字段参考资料如下：（不支持中文）
		//  https://docs.mongodb.com/manual/reference/text-search-languages/#text-search-languages
		'allLangCode' => [
			'en_US' => [
				'code' 					=> 'en',
			],
			'fr_FR' => [
				'code' 					=> 'fr',
			],
			'de_DE' => [
				'code' 					=> 'de',
			],
			'es_ES' => [
				'code' 					=> 'es',
			],
			'ru_RU' => [
				'code' 					=> 'ru',
			],
			'pt_PT' => [
				'code' 					=> 'pt',
			],
			'zh_CN' => [
				'code' 					=> 'zh',
			],
		],
		'defaultLangCode' => 'en',
		
	],
];