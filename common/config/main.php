<?php
$params = require(__DIR__ . '/params.php');

return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'redis' => require(__DIR__ . '/redis.php'),
        'weixin' => [
            'class' => 'caoxiang\weixin\Weixin',
            'appId' => $params['weixinId'],
            'appSecret' => $params['weixinSecret'],
//            'mchId' => $params['weixinMchId'],
//            'mchSecret' => $params['weixinMchSecret'],
//            'mchKey' => $params['weixinMchKey'],
        ],
    ],
    'params' => $params,
];
