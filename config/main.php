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
  'dsn' => 'mysql://root:@localhost/adoremos',
  ],
  'model' => '/models/',
  'controller' => '/controllers/',
  'view' => [
  ['adoremos','painel'],
  ],
  'timezone' => 'America/Sao_Paulo',
  'dirAlias' => '',
  'render' => true,
  ],
  'urlManager' => [
  'class'
  ],
];
