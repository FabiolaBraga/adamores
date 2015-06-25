<?php
$this->title = 'Status';


use core\widgets\FormWidget;
use core\helps\Url;
?>
<div class="box span12">
    <div data-original-title="" class="box-header">
        <h2><i class="icon-reorder"></i><span class="break"></span></h2>
        <div class="box-icon">
            <a class="btn btn-warning create" href="<?php echo Url::base() ?>">voltar</a>
        </div>
    </div>

    <div class="box-content">

        <form method="POST" id="Validade" name="Parceiro " action="<?php echo Url::request() ?>" class="form-horizontal" enctype="multipart/form-data" >
            <fieldset>
                <?php
                $form =  FormWidget::widget($model,[
                    'style'=>'\app\help\Style'
                ]);
                echo $form->textFieldGroup('name');

                echo Kanda::$app->session->getflash('update');

                ?>
                <div class="form-actions">
                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>

            </fieldset>
        </form>
    </div>
</div>
