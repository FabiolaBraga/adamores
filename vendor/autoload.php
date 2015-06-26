<?php

function Autoload($class) {

    switch(PHP_OS){

      case 'WINNT':
      $key = 3; 
      break;
      default:
      //Para Linux ou Mac
      $key = 2; 

  }

  $class = WWW_ROOT.DS. str_replace('\\', DS, $class) . '.php';
  
    /**
     * Carregando as Class da pasta vendor
     */ 
    $load = explode(DS,$class);// $load[3] = 'vendor';
    
    $load[$key]= $load[$key].DS.'vendor';
    
    $classKanda = implode(DS,$load);
    
    if(file_exists($classKanda)){

     require_once $classKanda;

 }elseif(file_exists($class)){
        /**
         * Para app
         */
        require_once( $class );

    }else{
        /**
         * Para Modules
         */
        $load = explode(DS,$class);

        $load[$key]= $load[$key].DS.'modules';
        
        $class = implode(DS,$load);

        if(file_exists($class))
            require_once $class;
        else
          throw new Exception("File path $class not found.");  

  }
      // throw new Exception("File path $class not found.");

}
spl_autoload_register('Autoload');
