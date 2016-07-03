<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=fecshop',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
		'mongodb' => [
            'class' => 'yii\mongodb\Connection',
			# mongodb user config
            //'dsn' => 'mongodb://account:password@localhost:27017/fecshop',
			# mongodb no user config
			'dsn' => 'mongodb://127.0.0.1:27017/fecshop',
        ],
    ],
];
