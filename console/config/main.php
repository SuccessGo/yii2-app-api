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
    'aliases' => [
    ],
    'controllerNamespace' => 'console\controller',
    'controllerMap' => [
        'migrate' => [
            'class' => 'yii\console\controllers\MigrateController',
            // cmd help: php yii migrate/create migration_name
            'migrationPath' => [
                // default: ['@app/migrations']
                '@app/migration',
            ],
            // cmd help: php yii migrate/create your\namespace\MigrationName
            'migrationNamespaces' => [
//                'console\migration',
            ],
        ],
    ],
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                'file' => [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    'logFile' => '@runtime/logs/' . date('Y-m/d') . '.log',
                    'logVars' => [],
                ],
            ],
        ],
    ],
    'params' => $params,
];
