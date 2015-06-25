<?php
$this->title = 'Serviços';


use core\widgets\GridView;
use core\widgets\FormWidget;
use core\helps\Url;
use core\helps\Arrays;
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
                'id',
                'name',
            ],
            'actionColumns' => ['update', 'delete'],
        ]);

        echo Kanda::$app->session->getflash('create');
        echo Kanda::$app->session->getflash('delete');
        ?>
    </div>
</div>
