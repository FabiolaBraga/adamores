<?php

/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */

namespace app\controllers\painel;

use app\models\painel\Usuario;
use core\helps\Session;

class PainelController extends \core\app\Controller {

    public function actionIndex() {

        $model = new Usuario();

        if (empty($_SESSION['nome'])) {
            $this->layout= 'login';
            return $this->render('login',['model'=>$model]);

        } else {
            return $this->render('index');
        }
    }

    public function actionLogaout() {

        session_destroy();
        return header('Location:' . $this->createUrl('painel'));
    }

}
