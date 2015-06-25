<?php
$this->title = 'Usuários';

use core\widgets\FormWidget;
use core\helps\Url;
use core\helps\Arrays;
 
 

?>
<div class="box span12">
    <div data-original-title="" class="box-header">
        <h2><i class="icon-reorder"></i><span class="break"></span></h2>
        <div class="box-icon">
            <a class="btn btn-info create" href="<?php echo Url::base() ?>">voltar</a>            
        </div>
    </div>
    <div class="box-content">
        
        <form method="POST" id="Validade" name="Parceiro " action="<?php echo Url::request() ?>" class="form-horizontal" enctype="multipart/form-data" >
            <fieldset>
        <?php
            $form =  FormWidget::widget($model,[
                
            ]);
            echo $form->textFieldGroup('nome');
            echo $form->textFieldGroup('login');            
            echo $form->textFieldGroup('email');            
            echo $form->textFieldGroup('senha',['value'=>123],'password');     
            echo $form->textFieldGroup('confirm_senha',['value'=>123],'password');     
            echo $form->dropDownListGroup('nivel_id',$model->nivel_id,Arrays::map($nivel->find('all'),['id','nome']));
        ?>
            <div class="form-actions">
                <button class="btn btn-success" type="submit">Enviar</button>
            </div>
                
        </fieldset>
        </form> 
        <?php 
            echo Kanda::$app->session->getflash('update');
         ?>       
    </div>
</div>