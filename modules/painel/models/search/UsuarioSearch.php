<?php
/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 */
namespace painel\models\search;

use painel\models\Usuario;


class UsuarioSearch extends Usuario{

      
    public static function dataProvider(){
     
    return array_merge(
                       ['data'=>parent::find('all',['select'=>'login,nome,id,email'])],
                       parent::attributeLabels(),['primary_key'=>parent::$primary_key, ]
            );
             
    }  
    
}