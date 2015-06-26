<?php

return $main = [


    'app' => [
        'db' => [
            'dsn' => 'mysql://anexojob:linux321@localhost/anexojob',
        ],
        'model' => '/models/',
        'controller' => '/controllers/',
        'view' => [
            '/web/',
            ['anexojob', 'painel', 'chamado'],
        ],
        'timezone' => 'America/Sao_Paulo',
        'dirAlias' => '',
        'render' => false,
    ],
    'modules' => [
        'db' => [
            'dsn' => 'mysql://kanda:linux321@localhost/kanda',
        ],
        'model' => '/models/',
        'controller' => '/controllers/',
        'view' => [
               ['adoremos'],
        ],
        'timezone' => 'America/Sao_Paulo',
        'dirAlias' => '',
        'render' => true,
    ],
    'urlManager' => [
        'class'
    ],
];