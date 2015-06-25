<?php
/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 */
 

define('Kanda_CORE', dirname(__DIR__ . '/vendor'));
define('WWW_ROOT',dirname(__DIR__));
define('DS',DIRECTORY_SEPARATOR);


set_include_path(get_include_path() . PATH_SEPARATOR . WWW_ROOT);


function setApplication($main){
        
        if($main['app']['render']){ 
        
        define('DSN', $main['app']['db']['dsn']);
        define('THEME', $main['app']['view'][1][0]);
                 
        define('MODEL', WWW_ROOT . $main['app']['model']);
        define('VIEW',$main['app']['view'][0]);
        define('CONTROLLER',$main['app']['controller']);

        if(!empty($main['app']['dirAlias']))
            define('ALIAS',$main['app']['dirAlias']);
        else
            define('ALIAS','');
        }else
            if($main['modules']['render']){
        
        define('MODULES',true);        
        define('THEME', $main['modules']['view'][0][0]);         
        define('MODEL', WWW_ROOT . $main['modules']['model']);        
        define('DSN', $main['modules']['db']['dsn']);
        define('CONTROLLER',$main['modules']['controller']);
        define('VIEW','/modules/');
        
        /**
         * Carregamento do primeiro 
         */
        //define('THEME', $main['modules']['view'][1][0]);
        
        if(!empty($main['app']['dirAlias']))
            define('ALIAS',$main['app']['dirAlias']);
        else
            define('ALIAS','');
        }else
            new Exception('Parametros inválidos da config.');
    }

    setApplication($main);

require_once Kanda_CORE.'/autoload.php';
  
require_once Kanda_CORE . '/activerecord/ActiveRecord.php';
 
use app\Controller;
  
 
class Kanda{

    public static $app;

    public static $request;
    
    public static $get;
    

    public function __construct() {
   
        Kanda::$request = helps\Http::run();
         
        Kanda::$app = (object) [
                    'arrays'     => helps\Arrays::run(),
                    'cache'      => helps\Cache::run(),
                    'crop'       => helps\Crop::run(),
                    'html'       => helps\Html::run(),
                    'url'        => helps\Url::run(),
                    'uploadFile' => helps\UploadFile::run(),
                    'session'    => helps\Session::run(),
        ];
         
    }

    /**
     * @access public
     *      * 
     * @importante metodo @Core contem include as principais class dos sistema
     * 
     * @param array() $main
     * 
     * 
     */
    public static function run($main) {
  

        ActiveRecord\Config::initialize(function($cfg) {
              $cfg->set_connections(array(
                'development' => DSN));
        });

        $controller = new Controller();
        
        if($main['app']['render']){
        date_default_timezone_set($main['app']['timezone']);
        $controller->setController($main['app']['view'][1]);
        }else
            if($main['modules']['render']){
              date_default_timezone_set($main['modules']['timezone']);
              $controller->setController($main['modules']['view'][0]);  
            }
    }
     

}

$kanda = new Kanda();
$kanda->run($main);