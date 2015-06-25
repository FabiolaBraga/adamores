<?php

function Autoload($class) {
 
    
    
    $class = WWW_ROOT.DS. str_replace("\\", DS, $class) . '.php';
 
    /**
     * Carregando as Class da pasta vendor
     */ 
    $load = explode('\\',$class);// $load[3] = 'vendor';
    
    $load[3]= $load[3].'\\vendor';
    
    $classKanda = implode('\\',$load);
    
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
        $load = explode('\\',$class);
      
        $load[3]= $load[3].'\\modules';
        
        $class = implode('\\',$load);
         
        if(file_exists($class))
            require_once $class;
        else
          throw new Exception("File path $class not found.");  
        
    }
      // throw new Exception("File path $class not found.");
    
}
spl_autoload_register('Autoload');
