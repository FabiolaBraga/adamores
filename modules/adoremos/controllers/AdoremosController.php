<?php

/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */

namespace adoremos\controllers;

use painel\models\Servico;

class AdoremosController extends \app\Controller {

    public function actionIndex() {

                $servico = Servico::all();

                return $this->render('index',['servico'=>$servico]);
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