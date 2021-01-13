<?php

/*
 * This file is part of the leonis/easysms-notification-channel.
 * (c) yangliulnn <yangliulnn@163.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

use Leonis\Notifications\EasySms\Gateways\ErrorLogGateway;
use Leonis\Notifications\EasySms\Gateways\WinicGateway;
use Overtrue\EasySms\Strategies\OrderStrategy;

return [
    // HTTP 请求的超时时间（秒）
    'timeout' => 5.0,

    // 默认发送配置
    'default' => [
        // 网关调用策略，默认：顺序调用
        'strategy' => OrderStrategy::class,

        // 默认可用的发送网关
        'gateways' => [
            'yunpian',
            'errorlog',
        ],
    ],

    // 可用的网关配置
    'gateways' => [
        // 失败日志
        'errorlog' => [
            'channel' => 'errorlog',
        ],

        // 阿里云
        'aliyun' => [
            'access_key_id' => env('DYSMS_ACCESS_KEY_ID'),
            'access_key_secret' => env('DYSMS_ACCESS_KEY_SECRET'),
            'sign_name' => env('DYSMS_SIGN_NAME')
        ],

        // ...
    ],

    'custom_gateways' => [
        'errorlog' => ErrorLogGateway::class,
        'winic' => WinicGateway::class,
    ],
];
