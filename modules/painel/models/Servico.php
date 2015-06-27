<?php

/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */

namespace painel\models;

class Servico extends \ActiveRecord\Model {

    static $table_name = 'servico';
    static $primary_key = 'id';
    
    public static function rules() {

        return [
            [['nome','descricao','imagem'],'required'],              
        ];
    }

    public static function attributeLabels() {

        return [
           'id' => 'Código',
           'nome' => 'Nome',
           'descricao'=> 'Descricao', 
           'imagem'=> 'Imagem'         
             
        ];
    }

}