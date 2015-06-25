<?php
$this->title = 'Clientes';


use core\widgets\FormWidget;
use core\helps\Url;
use core\helps\Arrays;
?>
<div class="box span12">
    <div data-original-title="" class="box-header">
        <h2><i class="icon-reorder"></i><span class="break"></span></h2>
        <div class="box-icon">
            <a class="btn btn-warning create" href="<?php echo Url::base() ?>">voltar</a>
        </div>
    </div>

    <div class="box-content">

        <form class="form-horizontal" id="Validade" method="POST" action="<?php echo Url::request() ?>">
            <fieldset>
                <?php

                $form =  FormWidget::widget($model,[
                    'style'=>'\app\help\Style'
                ]);
                ?>

                <div data-example-id="togglable-tabs" role="tabpanel" class="bs-example bs-example-tabs">
                    <ul role="tablist" class="nav nav-tabs" id="myTab">
                        <li class="active" role="presentation" class=""><a aria-controls="profile" data-toggle="tab" id="profile-tab" role="tab" href="#profile" aria-expanded="false">Dados pessoais</a></li>
                        <li  role="presentation"><a aria-expanded="true" aria-controls="home" data-toggle="tab" role="tab" id="home-tab" href="#home">Dados para contato</a></li>
                        <li role="" class=""><a aria-controls="profile" data-toggle="tab"  role="tab" href="#servico" aria-expanded="false">Serviços</a></li>

                    </ul>
                    <div class=" tab-content" id="myTabContent">
                        <div aria-labelledby="home-tab" id="home" class="tab-pane fade" role="tabpanel">
                            <i class="loading"></i>
                            <?php
                            echo $form->textFieldGroup('cep');
                            echo $form->textFieldGroup('district');
                            echo $form->textFieldGroup('city');
                            echo $form->textFieldGroup('address');
                            echo $form->textFieldGroup('state');
                            echo $form->textFieldGroup('number');

                            ?>
                        </div>
                        <div aria-labelledby="profile-tab" id="profile" class="tab-pane active in" role="tabpanel">
                            <?php
                            echo $form->textFieldGroup('name');
                            echo $form->textFieldGroup('email');
                            echo $form->textFieldGroup('phone_fixed');
                            echo $form->textFieldGroup('phone_cellula');
                            ?>
                        </div>
                        <div aria-labelledby="dropdown1-tab" id="servico" class="tab-pane fade" role="tabpanel">
                            <?php
                            echo $form->dropDownListGroup('servico_crm_id',$model->servico_crm_id,Arrays::map($servicos,['id','name']));
                            echo $form->dropDownListGroup('status_crm_id',$model->status_crm_id,Arrays::map($status,['id','name']));
                            echo $form->textareaFildGroup('description');
                            ?>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button class="btn btn-primary" type="submit">Salvar</button>
                    <button class="btn">Cancel</button>
                </div>
            </fieldset>
            <?php echo Kanda::$app->session->getflash('update'); ?>
        </form>
    </div>
    <script>

        $(document).ready(function() {


            $('#cep').blur(function () {



                $.ajax({
                    method:'POST',
                    url: '<?php echo $this->createUrl('painel/correios/cep') ?>',
                    beforeSend: function () {

                        $('.loading').addClass('spinner-mini');

                        $('#address').val('');
                        $('#city').val('');
                        $('#state').val('');
                        $('#district').val('');

                    },
                    dataTaype: 'JSON',
                    data: {cep: $(this).val()},
                    success: function (data) {

                        $('#address').val(data[0]);
                        $('#city').val(data[2]);
                        $('#state').val(data[3]);
                        $('#district').val(data[1]);

                        $('.loading').removeClass('spinner-mini');
                    },
                    error: function (data){}

                });
            });
        });
    </script>
</div>
