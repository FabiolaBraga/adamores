<?php

/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */

namespace adoremos\controllers;

class AdoremosController extends \app\Controller {

    public function actionIndex() {

                return $this->render('index');
    }


public function actionContato() {

                return $this->render('contato');
    }



      
}