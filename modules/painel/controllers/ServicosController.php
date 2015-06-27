<?php
/**
 * @copyright (c) KandaFramework
 * @access public
 * 
 * 
 */
namespace painel\controllers;


use painel\models\Servico;
use helps\Session;
use painel\models\search\ServicoSearch;
use help\User;

class ServicosController extends \app\Controller {

    public function behaviors() {
        return [
            'getClass' => User::rule(),
        ];
    }

    public function actionIndex() {


        $dataProvider = ServicoSearch::dataProvider();

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

        $model = new Servico();

        if (\Kanda::$request->post($model)){


               //Session::setflash('update', 'Cadastrado com sucesso');
            $this->uploadimagens();
            exit;


            return $this->redirect('update', ['id' => $model->id]);
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
            $model = Servico::find($id);
            return $model;
        }
    }

    public function uploadimagens(){
        
        $uploaddir = '../wamp/www/adoremosOO/public/assets/adoremos/images/';
        print_r($_FILES);
        $uploadfile = $uploaddir . $_FILES['Servico[imagem]']['name'];

        if (move_uploaded_file($_FILES['Servico[imagem]']['tmp_name'], $uploadfile)){
        echo "Arquivo Enviado";}
        else {echo "Arquivo não enviado";}
    }

}
