<?php

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module',
        ],
    ],
    'components' => [
        'cache' => [
            'class' => \yii\caching\FileCache::class,
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
    ],
    // Apply AccessControl behavior only in web environment
    // 'as access' => (YII_ENV === 'web' && Yii::$app instanceof yii\web\Application) ? [
    //     'class' => 'mdm\admin\components\AccessControl',
    //     'allowActions' => [
    //         'site/login',
    //         'site/logout',
    //         'admin/*',
    //     ],
    // ] : [],
];
