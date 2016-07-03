<?php
return [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '',
        ],
		'redis' => [
            'class' => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port' => 6379,
            'database' => '1',
			# connect redis with unix Stock 
			//'unixSocket' => '/var/run/redis/redis.sock',
			# redis password
			#'password'  => 'xxxx',
			
        ],
    ],
];
