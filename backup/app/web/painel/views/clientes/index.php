<?php
$this->title = 'Clientes';


use core\widgets\GridView;
use core\widgets\FormWidget;
use core\helps\Url;
use core\helps\Arrays;
use core\helps\Html;
?>
<div class="box span12">
    <div data-original-title="" class="box-header">
        <h2><i class="icon-reorder"></i><span class="break"></span></h2>
        <div class="box-icon">
            <a class="btn btn-warning create" href="<?php echo Url::base('create') ?>">cadastrar</a>
            <a class="btn btn-primary create" onclick="GerarCsv();return false;" href="">exportar</a>
        </div>
    </div>

    <div class="box-content">

        <?php
        echo GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                'name',
                'email',
                'phone',
                'arquivos'=>[
                    'header'=>'Anexar arquivos',
                    'container'=>function($model,$id){
                    return Html::a('<i  class="halflings-icon download-alt"></i>',$this->createUrl("painel/arquivos/index/{$id}"));
                    }
                ],
                'status',
                'servico',
                'date',
            ],
            'actionColumns' => ['update', 'delete'],
        ]);

        echo Kanda::$app->session->getflash('create');
        echo Kanda::$app->session->getflash('delete');
        ?>
    </div>
</div>
<script>
    var GerarCsv = function(){

        $.get('<?php echo Url::base('gerarcsv') ?>',{},function(data){

            var  a=document.createElement('a');
            a.textContent='download';
            a.download="Contatos(<?php echo date('d-m-Y H-i') ?>).csv";
            a.href='data:text/csv;charset=utf-8,'+escape(data);
            document.body.appendChild(a);
            a.click();

        });
    }
</script>

