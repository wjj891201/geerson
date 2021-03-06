<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'timeZone' => 'Asia/Chongqing',
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'defaultRoute' => "index",
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'rytcms_yzyx',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false, //隐藏index.php 
            'suffix' => '',
            'rules' => [
                'http://admin.geerson.deve' => 'admin',
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
//        'view' => [
//            'theme' => [
//                'pathMap' => [
//                    '@app/views' => '@app/themes/christmas/views',
//                ],
//                'baseUrl' => '@app/themes/christmas/views',
//        ],
//        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.163.com',
                'username' => '15195861092',
                'password' => '891201wjp',
                'port' => '465',
                'encryption' => 'ssl',
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                    [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
//            'itemTable' => 'auth_item',
//            'assignmentTable' => 'auth_assignment',
//            'itemChildTable' => 'auth_item_child',
        ],
        'jwt' => [
            'class' => 'sizeg\jwt\Jwt',
            'key' => 'secret',
        ],
    ],
    'params' => $params,
    //模块
    'modules' => [
        'admin' => ['class' => 'app\modules\admin\admin'],
        'mobile' => ['class' => 'app\modules\mobile\mobile', 'defaultRoute' => "index"],
    ],
];

if (YII_ENV_DEV)
{
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
//        'allowedIPs' => '[192.168.1.101]'
    ];
}

return $config;
