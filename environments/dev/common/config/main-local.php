<?php

return [
    'components' => [
        'db' => [
            'class'    => 'yii\db\Connection',
            'dsn'      => 'mysql:host=localhost;dbname=fecshop',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
        ],
        'mongodb' => [
            'class' => 'yii\mongodb\Connection',
            // 有账户的配置
            //'dsn' => 'mongodb://username:password@localhost:27017/datebase',
            // 无账户的配置
            'dsn' => 'mongodb://127.0.0.1:27017/fecshop',
            // 复制集
            //'dsn' => 'mongodb://10.10.10.252:10001/erp,mongodb://10.10.10.252:10002/erp,mongodb://10.10.10.252:10004/erp?replicaSet=terry&readPreference=primaryPreferred',
        ],
        'mailer' => [
            'class'    => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],

        'redis' => [
            'class'    => 'yii\redis\Connection',
            'hostname' => 'localhost',
            'port'     => 6379,
            //'password'  => 'xxxxx',

        ],
    ],
];
