<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'rXsnB5nGmhHNroM1pJ7-tpLow1v5I0pQ',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
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
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                ['class' => 'yii\rest\UrlRule', 'controller' => 'utilizadores', 'pluralize' => 'false',
                    'extraPatterns' => ['GET total' => 'total', 'GET email/{id}' => 'email']],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'edificios', 'pluralize' => 'false',
                    'extraPatterns' => ['GET total' => 'total', 'GET designacao/{id}' => 'designacao']],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'membrosorganizacao', 'pluralize' => 'false'],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'organizacoes', 'pluralize' => 'false',
                    'extraPatterns' => ['GET total' => 'total', 'GET nome/{id}' => 'nome']],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'requisicoes', 'pluralize' => 'false',
                    'extraPatterns' => ['GET total' => 'total', 'GET sala/{id}' => 'sala']],
                ['class' => 'yii\rest\UrlRule', 'controller' => 'salas', 'pluralize' => 'false',
                    'extraPatterns' => ['GET total' => 'total', 'GET lugares/{id}' => 'lugares']],
            ],
        ],

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
