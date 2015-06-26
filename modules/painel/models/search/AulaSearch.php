<?php
/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 */
namespace painel\models\search;

use painel\models\Aula;


class AulaSearch extends Aula{

      
    public static function dataProvider(){
     
    return array_merge(
                       ['data'=>parent::find('all',['select'=>'nome,id'])],
                       parent::attributeLabels(),['primary_key'=>parent::$primary_key, ]
            );
             
    }  
    
}