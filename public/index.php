<?php 
 
  /**
   * Para produção colocar como 0 inet_set
   */

  ini_set('error_reporting', E_ALL);
  /**
   * Configuração do Framework
   */
  $config= '../config/main.php';
  
  require_once ($config);
  /**
   * Carregando o Framework
   */
  require_once ('../vendor/KandaFramework.php');