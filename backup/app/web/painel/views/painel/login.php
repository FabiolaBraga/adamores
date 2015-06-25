<?php

use core\widgets\FormWidget;

function Script() {

    return " var Class = data.class; setTimeout(function(){ $('.checkbox').html(''); if(Class == 'success'){ location.href=data.page;  }; },3000); if(Class ==='success'){ $('.checkbox').html(data.msg); }; if(Class ==='warning' ){ $('.checkbox').html(data.msg); }  ";
}
?>
<form id="Validade" class="form-horizontal" action="" method="post">
    <?php
    $form = FormWidget::widget($model, [
                'id' => 'Validade',
                'ajax' => [
                    'url' => $this->createUrl('painel/login'),
                    'type' => 'POST',
                    'dataType' => 'json',
                    'success' => function($data) {
                        return Script();
                    },
                    'error' => function($data) {
                        
                    },
                ],
    ]);
    ?>
    <fieldset>
        <div class="alert" style="display:none;">
            <button data-dismiss="alert" class="close" type="button"><font><font>×</font></font></button>
            <strong></strong>
        </div>
        <div class="input-prepend" title="Usuário">
            <span class="add-on"><i class="halflings-icon user"></i></span>
            <input class="input-large span10" name="Usuario[login]" id="username" type="text" placeholder="informe seu login">
        </div>
        <div class="clearfix"></div>

        <div class="input-prepend" title="Senha">
            <span class="add-on"><i class="halflings-icon lock"></i></span>
            <input class="input-large span10" name="Usuario[senha]" id="password" type="password" placeholder="informe sua senha">
        </div>
        <div class="clearfix"></div>
        <label class="checkbox"></label>
<!--<label class="remember" for="remember"><input type="checkbox" id="remember"><font><font>Lembre de mim</font></font></label>-->

        <div class="button-login">	
            <button type="submit"  class="btn btn-primary"><font><font>Entrar</font></font></button>
        </div>
        <div class="clearfix"></div>

        <hr>
        
    </fieldset>
</form>