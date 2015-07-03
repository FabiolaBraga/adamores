<?php

/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */

namespace adoremos\controllers;


use painel\models\Servico;

use painel\models\Video;

class AdoremosController extends \app\Controller {

    public function actionIndex() {

                $servico = Servico::all();
                 $video = Video::all();
                //o return ele retorna! No paga o que tem abaixo dele
                return $this->render('index',['video'=>$video,'servico'=>$servico]);

                
            }


public function actionContato() {

                return $this->render('contato');
    }

    public function actionSobre() {

                return $this->render('sobre');
    }
    public function actionAulas() {

                return $this->render('aulas');
    }
 	
     public function actionProfessorres() {

                return $this->render('professores');
    }

      
}