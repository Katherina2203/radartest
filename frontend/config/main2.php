<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'language' => 'en-Us',
    'sourceLanguage' => 'en-Us',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'enableCookieValidation' => true,
            'enableCsrfValidation' => false,
            'csrfCookie' => [
                'httpOnly' => true,
                'path' => '/',
            ],
          //  'baseUrl' => '',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
          //  'cache' => 'cache' 
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'enableSession' => true,
            'loginUrl' => ['site/login'],
            'authTimeout' => 1800,
            'identityCookie' => [
                   'name' => '_frontendIdentity',
                  // 'path' => '/admin',
                   'httpOnly' => true,
               ],
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
            // this is the name of the session cookie used for login on the frontend
         //   'name' => 'advanced-frontend',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',  
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
         'assetManager' => [
             'basePath' => '@webroot/assets',
             'baseUrl' => '@web/assets'
        ], 
        'urlManager' => [
          
         //   'class' => 'codemix\localeurls\UrlManager',
            'baseUrl' => '',
         //   'languages' => ['en-US', 'en', 'ru-Ru', 'ru'],
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        //    'enableDefaultLanguageUrlCode' => true,
         //   'enableLanguagePersistence' => false,
            'rules' => [
                '/' => 'index',
                '<action:contact|about|login|logout>' => 'site/<action>',
                '<controller:\w+>/<id:\d+>'=>'<controller>/view',
              //  '<controller:content>/<action:products>' => 'products',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
            ],
        ],
         'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                   'sourceLanguage' => 'en',
                //    'basePath' => '@common/messages',
                    'fileMap' => [
                        'app' => 'app.php',
                        'app/error' => 'error.php',
                    ]
                ],
                'publ*' => [
                    
                ],
            ],
        ],
        'mail' => [
            'class'            => 'zyx\phpmailer\Mailer',
            'viewPath'         => '@common/mail',
            'useFileTransport' => false,
            'config'           => [
                'mailer'     => 'smtp',
                'host'       => 'smtp.yandex.ru',
                'port'       => '465',
                'smtpsecure' => 'ssl',
                'smtpauth'   => true,
                'username'   => 'mysmtplogin@example.ru',
                'password'   => 'mYsmTpPassword',
            ],
        ],
    ],
    'params' => $params,
];
