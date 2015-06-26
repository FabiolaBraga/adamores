<?php 
 
  /**
   * Para produção colocar como 0 inet_set
   */

  ini_set('display_errors', 1);
  /**
   * Configuração do Framework
   */
  $config= '../config/main.php';
  
  require_once ($config);
  /**
   * Carregando o Framework
   */
  require_once ('../vendor/KandaFramework.php');