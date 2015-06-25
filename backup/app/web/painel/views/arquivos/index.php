<?php
$this->title = 'Arquivos';


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
            <a class="btn btn-warning create" href="<?php echo Url::home('clientes') ?>">voltar</a>
        </div>
    </div>

    <div class="box-content">
        <form method="POST"  action="<?php echo Url::request() ?>" class="form-horizontal" enctype="multipart/form-data" >
            <fieldset>
                <?php
                $form =  FormWidget::widget($model,[
                ]);

                echo $form->fileFieldGroup('file');
                ?>
                <div style="margin-bottom: 9px;" class="progress progress-striped active fileUpload">
                    <div style="" class="bar"></div>
                </div>
            </fieldset>
        </form>
        <ul id="ListFiles">
        <?php
        foreach($dataProvider['data'] as $res):
        ?>
        <li><a href="<?php echo Url::base('delete/'.$res->id.'/'.$id)?>"><i class="halflings-icon trash"></i></a> <a href="<?php echo $this->createUrl('app/assets/arquivos/').$res->name ?>"><?php echo $res->name_alias ?></a></li>
        <?php
        endforeach;

        echo Kanda::$app->session->getflash('delete');
        ?>

        </ul>
    </div>
</div>
<script src="<?php echo $this->createUrl() ?>/app/vendors/fileupload/js/vendor/jquery.ui.widget.js"></script>
<script src="<?php echo $this->createUrl() ?>/app/vendors/fileupload/js/jquery.iframe-transport.js"></script>
<script src="<?php echo $this->createUrl() ?>/app/vendors/fileupload/js/jquery.fileupload.js"></script>
<script>
    $(function () {
        $('#file').fileupload({
            dataType: 'json',
            progressall: function (e, data) {
                $('.progress .bar').css('width','0%');

                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('.progress .bar').css(
                    'width',
                    progress + '%'
                );
            },
            done:function(e,data){

                $('.progress .bar').css('width','0%');

                 var li = '<li><a href="'+data.result.delete+'"><i class="halflings-icon trash"></i><a href="'+data.result.url+'"> ' +data.result.name+ '</a></li>';
                $('#ListFiles').append(li);

            }
        });
    });
</script>

