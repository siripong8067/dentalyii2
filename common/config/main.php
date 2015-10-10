<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'name' =>'ระบบจองคิว',
    'language'=>'th_TH',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
