<?php
/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */
namespace painel\controllers;


use painel\models\Video;
use helps\Session;
use painel\models\search\VideoSearch;
use help\User;

class VideoController extends \app\Controller {

    public function behaviors() {
        return [
            'getClass' => User::rule(),
        ];
    }

    public function actionIndex() {


        $dataProvider = VideoSearch::dataProvider();

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    /**
     * @pulibc
     * 
     * Atualização do usuário
     * 
     * @return string Json
     * 
     */
    public function actionUpdate($id) {

        $model = $this->findModel($id);
     

        if (\Kanda::$request->post($model) &&  $model->save()) {

         Session::setflash('update', 'Alterado com sucesso');

            return $this->redirect('update', ['id' => $id]);
        } else {
            return $this->render('form', ['model' => $model]);
        }
    }

    public function actionCreate() {

        $model = new Video();

        if (\Kanda::$request->post($model)){

            $model->foto = $this->uploadimagens($model->nome);

            if ($model->save()) { 
                  
                  Session::setflash('update', 'Cadastrado com sucesso');

                 return $this->redirect('update', ['id' => $model->id]);

            } else 
                 return $this->render('form', ['model' => $model]);


        } else {
            return $this->render('form', ['model' => $model]);
        }
    }

    public function actionDelete($id) {

        if (isset($id) && !empty($id)) {
            $model = $this->findModel($id);
            if ($model->delete()) {
                Session::setflash('delete', 'Excluído com sucesso');
                return $this->redirect();
            }
        }
    }

    /**
     * 
     * @param int $id
     * @return object
     */
    public function findModel($id) {

        if (!empty($id)) {
            $model = Video::find($id);
            return $model;
        }
    }

    public function uploadimagens($name){
        
        $uploaddir = WWW_ROOT.'/public/assets/adoremos/images/video/';
        $uploaddir = str_replace("/", DS, $uploaddir);
     
        if (!is_dir($uploaddir)){
                echo("diretorio não encontrado");
                exit;
        }
        $type = end(explode("/", $_FILES['Video']['type']['foto']));
        $uploadfile = $uploaddir . $name.".".$type;

        if (move_uploaded_file($_FILES['Video']['tmp_name']['foto'], $uploadfile))
            return $name.".".$type;
        else
             throw new Exception("erro para mover arquivo", 1);
             


     
     }

    
} 
