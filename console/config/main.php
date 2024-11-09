<?php

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'controllerMap' => [
        'fixture' => [
            'class' => \yii\console\controllers\FixtureController::class,
            'namespace' => 'common\fixtures',
        ],
    ],
    'components' => [
        'log' => [
            'targets' => [
                [
                    'class' => \yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'class' => 'yii\console\ErrorHandler', // Correct console error handler
        ],
    ],
    // 'controllerMap' => [
    //     'fixture' => [
    //         'class' => 'yii\faker\FixtureController',
    //     ],
    //     'migrate' => [
    //         'class' => 'yii\console\controllers\MigrateController',
    //         'migrationPath' => [
    //             '@app/migrations',
    //             '@yii/rbac/migrations',
    //             '@yii/caching/migrations',
    //             '@file/migrations',
    //         ],
    //         'migrationNamespaces' => [
    //             'yii\queue\db\migrations',
    //         ],
    //     ],
    // ],
    'params' => $params,
];
