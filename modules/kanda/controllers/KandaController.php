<?php

/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */

namespace kanda\controllers;

use kanda\models\KandaFramework;

class KandaController extends \app\Controller {

    public function actionIndex() {

        $model = new KandaFramework();
 
        
        if (\Kanda::$request->post($model)) {
            echo $model->email;
        } else
            return $this->render('index', [
                        'dataProvider' => KandaFramework::dataProvider(),
                        'model' => $model,
            ]);
    }

    public function actionCreate() {
        
    }

    public function actionUpdate($id) {

        $model = new KandaFramework();
        /**
         * Validação do method passado pelo formulário.
         */
        if (\Kanda::$request->post($model)) {
            echo $model->email;
        } else {
            $this->render('index', ['model' => $model->findOne($id), 'dataProvider' => KandaFramework::dataProvider(),]);
        }
    }

    public function actionDelete($id) {
        
        echo $id;
        
    }

}
