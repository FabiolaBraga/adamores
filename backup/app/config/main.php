<?php

return $main = [

    'db' => [
        'dsn' => 'mysql://aguaazulpiscinas:linux321@localhost/aguaazulpiscinas',
    ],
    'app' => [
        'model'    => '/app/models/',
        'controller'=> '/app/controllers/',
        'view'     => [
            '/app/web/',
            ['site'],
        ],
        'timezone'  => 'America/Sao_Paulo',
        'diralias'=>'',
    ],
    'urlManager' => [
        'class'
    ],
];