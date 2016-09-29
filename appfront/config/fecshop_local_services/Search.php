<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'search' => [
		'filterAttr' => [
			'color','size', # ÔÚËÑË÷Ò³Ãæ²àÀ¸µÄËÑË÷¹ýÂËÊôÐÔ×Ö¶Î
		],
		'childService' => [
			'mongoSearch' => [
				'searchIndexConfig'  => [
					'name' => 10,  
					'description' => 5,  
				], 
				# more: https://docs.mongodb.com/manual/reference/text-search-languages/#text-search-languages
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
				'fuzzy' => true,  # ÊÇ·ñ¿ªÆôÄ£ºý²éÑ¯
				'synonyms' => true, #ÊÇ·ñ¿ªÆôÍ¬Òå´Ê·­Òë
				'searchLang'    => ['zh'],
			],
		],
	]
];