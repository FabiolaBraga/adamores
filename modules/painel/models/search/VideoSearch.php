<?php
/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 */
namespace painel\models\search;

use painel\models\Video;


class VideoSearch extends Video{

      
    public static function dataProvider(){
     
    return array_merge(
                       ['data'=>parent::find('all',['select'=>'nome,id'])],
                       parent::attributeLabels(),['primary_key'=>parent::$primary_key, ]
            );
             
    }  
    
}