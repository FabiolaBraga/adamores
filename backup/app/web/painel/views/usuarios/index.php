<?php
$this->title = 'Usuários';

use core\widgets\GridView;
use core\helps\Url;
use backend\models\painel\Nivel; 
?>
<div class="box span12">
    <div data-original-title="" class="box-header">
        <h2><i class="icon-reorder"></i><span class="break"></span></h2>
        <div class="box-icon">
            <a class="btn btn-warning create" href="<?php echo Url::base('create') ?>">cadastrar</a>            
        </div>
    </div>

    <div class="box-content">

        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'nome',
                'login',
            ],
            'actionColumns' => ['update', 'delete'],
        ]);

        echo Kanda::$app->session->getflash('create');
        echo Kanda::$app->session->getflash('delete');
        ?>
    </div>
</div> 