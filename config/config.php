<?php

return [

    'server'           => env('APOLLO_CONFIG_SERVER', 'http://127.0.0.1:8080'),
    'cluster'          => env('APOLLO_CLUSTER', 'default'),
    'client_ip'        => env('APOLLO_CLIENT_IP', '127.0.0.1'),
    'pull_timeout'     => env('APOLLO_PULL_TIMEOUT', 10),
    'interval_timeout' => env('APOLLO_INTERVAL_TIMEOUT', 70),
    'appid'            => env('APOLLO_APP_ID', 'demo'),
    'app_secret'       => env('APOLLO_APP_SECRET'),
    'namespaces'       => explode(',', env('APOLLO_NAMESPACES', 'application')),
    'redis_use'        => 'default',

];
