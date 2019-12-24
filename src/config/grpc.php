<?php
declare(strict_types=1);

//调用服务在此定义
return [
    'userfff' => [
        'class' => \App\RpcClient\UserClient::class,
        'host' => 'hyperf:9503',
    ],
    'order' => [
        'class' => \App\RpcClient\UserClient::class,
        'host' => 'hyperf:9503',
    ]
];
