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
    'email' => [
        'mailerConfig' => [
            // 默认通用配置
            'default' => [
                'class'     => 'yii\swiftmailer\Mailer',
                'transport' => [
                    'class'       => 'Swift_SmtpTransport',
                    'host'        => 'smtp.qq.com',            //SMTP Host
                    'username'    => '2420577683@qq.com',   //SMTP 账号
                    'password'    => 'fqeaizkpwbbvebeg',    //SMTP 密码
                    'port'        => '587',                    //SMTP 端口
                    'encryption'  => 'tls',
                ],
                'messageConfig'=> [
                   'charset'=> 'UTF-8',
                ],
            ],
        ],
    ],
];
