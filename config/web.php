<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [ 
        'modUsuarios' => [ 
            'class' => 'app\modules\ModUsuarios\ModUsuarios' 
        ] 
    ],
    'components' => [
        'session' => [ 
            'timeout'=> 31536000 // Segundos que durara la sesion
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'XQj9Zo_rh6cNU7oIkg87sUKvzNM2jc3K',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [ 
            'identityClass' => 'app\modules\ModUsuarios\models\EntUsuarios',
            'enableAutoLogin' => true,
            'authTimeout' => 31536000, // Segundos que durara la sesion
            'loginUrl' => [ 
                'modUsuarios/manager/login' 
            ] 
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [ 
            'class' => 'yii\swiftmailer\Mailer',
            'transport' => [ 
                'class' => 'Swift_SmtpTransport',
                'host' => '', // e.g. smtp.mandrillapp.com or smtp.gmail.com
                'username' => '',
                'password' => '',
                'port' => '', // Port 25 is a very common port too
                'encryption' => '' 
            ] 
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
        'db' => $db,
        'urlManager' => [ 
            'class' => 'yii\web\UrlManager',
            // Disable index.php
            'showScriptName' => false,
            // Disable r= routes
            'enablePrettyUrl' => true,
            
            'rules' => [
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                    
                // Estas direcciones son necesarias para el modulo			
                'cambiar-pass/<t:\w+>' => 'modUsuarios/manager/cambiar-pass',
                'peticion-pass' => 'modUsuarios/manager/peticion-pass',
                'test' => 'modUsuarios/manager/test',
                'activar-cuenta/<t:\w+>' => 'modUsuarios/manager/activar-cuenta',
                'sign-up' => 'modUsuarios/manager/sign-up',
                'login' => 'modUsuarios/manager/login',
                'callback-facebook' => 'modUsuarios/manager/callback-facebook',
                '/' => 'site/index' 
            ]
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;