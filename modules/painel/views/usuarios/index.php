<?php
$this->title = 'Usuários';

use helps\Url;
use helps\Session;
use widgets\GridView;
use painel\models\Nivel;
?>
<div class="module">
    <div class="module-head">
        <h3><?php echo $this->title ?></h3>
        <a href="<?php echo Url::base('create') ?>" class="btn btn-small btn-success param">Cadastrar</a>
        
    </div>
    <div class="module-body">
            
        <br>         <?php
                            echo GridView::widget([
                                'dataProvider' => $dataProvider,
                                'dataTable'=>'dataTable',
                                'classTable'=>'table',
                                'columns' => [
                                            'nome',
                                            'login',
                                            'email'
                                        ],
                                        'actionColumns' => ['update', 'delete'],
                                    ]);

                                    echo Session::getflash('create');
                                    echo Session::getflash('delete');
                                    ?>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
       