<?php
$params = require(__DIR__ . '/params-local.php');

return [
    'id' => 'app-region',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'region\controllers',
    'bootstrap' => ['log'],
    'language' => 'id',
    'modules' => [
        'v1' => [
            'class' => 'region\modules\v1\Module'
        ]
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-region',
        ],
        'response' => [
            'format' => \yii\web\Response::FORMAT_JSON
        ],
        'user' => [
            'identityClass' => 'region\components\UserIdentity',
            'enableAutoLogin' => false,
            'identityCookie' => ['name' => '_identity-region', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the region
            'name' => 'advanced-region',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'i18n' => [
            'translations' => [
                'region' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@region/messages',
                    'sourceLanguage' => 'id',
                ],
            ],
        ],
    ],
    'params' => $params,
];
