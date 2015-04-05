<?php
/*
|--------------------------------------------------------------------------
| Prettus Request Logger Config
|--------------------------------------------------------------------------
|
|
*/
return [

    /*
    |--------------------------------------------------------------------------
    | Logger
    |--------------------------------------------------------------------------
    |
    | - handlers: Array of the Monolog\Handler\HandlerInterface
    | - level: [notice, info, debug, emergency, alert, critical, error, warning]
    |
    */
    'logger' => [
        'enabled'   => true,
        'handlers'  => [],
        'level'     => 'info',
        'format'    => '{ip} {remote_user} {date} {method} {url} {referrer} {user_agent}'
    ]
];