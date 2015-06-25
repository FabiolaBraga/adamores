<?php
/**
 * Created by PhpStorm.
 * User: thiago
 * Date: 18/05/15
 * Time: 16:58
 */

namespace app\controllers\site;

class SiteController extends  \core\app\Controller {

     public function actionInex(){

         return $this->render('index');
     }

}