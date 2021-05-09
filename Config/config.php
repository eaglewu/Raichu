<?php
/**
 * 全局配置
 * User: gukai@bilibili.com
 * Date: 17/2/9
 * Time: 下午4:19
 */
return [
    // 开启模块名=>路由前缀
    'modules' => [
        'hello' => "/api/hello",
        'world' => "/api/world"
    ],

    // 开启全局公共控制器
    'controllers'   => [],

    // 开启全局公共模型
    'models'        => [],

    // 开启全局公共库
    'libraries'     => [],

    // 开启全局公共中间件
    'middlewares'   => [],

    // 开启全局公共命令
    'consoles'      => [],

    // 库前缀
    'dbprefix'      => 'bilibili_',

    // lifetime
    'lifetime'      => 1800,

    // response
    'is_enable_response' => false,

    // seaslog config
    'seaslog' => [
        'basePath' => '/tmp',
        'logger' => 'manager',
        'datetimeFormat' => 'Y:m:d H:i:s',
    ],

    // redis config
    'redis' => [
        'host' => '127.0.0.1',
        'port' => '6379',
        'auth' => '',
    ]
];