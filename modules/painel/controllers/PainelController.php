<?php
/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */

namespace painel\controllers;

use painel\models\Usuario;
use helps\Session;

 
class PainelController extends \app\Controller {

    public function actionPainel() {
             
 
        $model = new Usuario;
 
        if (empty(Session::getSession()->nome)) {

            $this->layout = 'login';
            return $this->render('login', ['model' => $model]);

        } else {

            $total_usuario = $model->count();
          

            return $this->render('index', [
                        'usuario' => $total_usuario,
            ]);
        }
    }

    public function actionLogaout() {

        session_destroy();
        $this->actionPainel();
    }

}
