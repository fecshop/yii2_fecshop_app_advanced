<?php
/**
 * FecShop file.
 * @link http://www.fecshop.com/
 * @copyright Copyright (c) 2016 FecShop Software LLC
 * @license http://www.fecshop.com/license/
 */
return [
	'email' => [
		'mailerConfig' => [
			# Ä¬ÈÏÍ¨ÓÃÅäÖÃ
			'default' => [
				'class' => 'yii\swiftmailer\Mailer',
				'transport' => [
					'class' => 'Swift_SmtpTransport',
					'host' => 'smtp.qq.com',			#SMTP Host
					'username' => '372716335@qq.com',   #SMTP ÕËºÅ
					'password' => 'wffmbummgnhhcbbj',	#SMTP ÃÜÂë
					'port' => '587',					#SMTP ¶Ë¿Ú
					'encryption' => 'tls',
				],
				'messageConfig'=>[  
				   'charset'=>'UTF-8',  
				], 
			],
        ],
	],
];