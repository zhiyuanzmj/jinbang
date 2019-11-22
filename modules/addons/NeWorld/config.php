<?php
// NeWorld 模块配置文件
$NeWorld = [
    'version' => '1.9',          // 本地版本
    'log' => [
        'record' => false,       // 是否开启 true、false
        'directory' => 'log',    // 日志目录
        'file' => 'NeWorld.log', // 日志文件名
    ],
    'templates' => 'default',    // 模板选择
    'nameSpace' => [             // 允许加载类的命名空间
        'NeWorld',
        'ModulesOcean',
    ],
];