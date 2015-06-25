<?php
$this->title = 'Relatórios';


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

        </div>
    </div>

    <div class="box-content" style=" position: relative;">

        <form method="post" class="form-inline" id="Relatorio">

            <?php
            $form = FormWidget::widget($model,[
                'style'=>'\app\help\Style'
            ]);
            ?>

            <div class="control-group">
                <label for="date01" class="control-label">Data inicial</label>
                <div class="controls">
                    <input type="text" class="datepicker" name="RelatorioCrm[start]" />
                </div>
            </div>
            <div class="control-group">
                <label for="date01" class="control-label">Data final</label>
                <div class="controls">
                    <input type="text" class="datepicker" name="RelatorioCrm[end]" />
                </div>
            </div>
            <?php
            echo $form->dropDownListGroup('servicos','',Arrays::map($servicos,['id','name']));
            echo $form->dropDownListGroup('status','',Arrays::map($status,['id','name']));
            ?>
            <div class="control-group geraRelatorio">
                <div class="controls">
                    <button class="btn btn-primary" id="gerar_relatorio" type="submit">gerar relatório</button>
                </div>
            </div>
        </form>
        <div id="TableRelatorio">



        <table id="datatable" class="table dataTable table-bordered table-striped  no-footer">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefones</th>
                <th>Criação</th>
                <th>Status</th>
                <th>Serviço</th>
            </tr>
            </thead>
            <tbody id="ResultRelatorio" ></tbody>
        </table>

        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $('#gerar_relatorio').click(function(){


            $.ajax({
                url:'<?php echo Url::base('create') ?>',
                dataTaype:'html',
                method:'POST',
                beforeSend:function(){

                    $('#ResultRelatorio').html('');
                },
                data:$('#Relatorio').serialize(),
                success:function(data){

                    $('#ResultRelatorio').append(data);

                    $('.dataTable').dataTable({
                        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
                        "sPaginationType": "bootstrap",
                        "language": {
                            "sEmptyTable": "Nenhum registro encontrado",
                            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                            "sInfoPostFix": "",
                            "sInfoThousands": ".",
                            "sLengthMenu": "_MENU_ resultados por página",
                            "sLoadingRecords": "Carregando...",
                            "sProcessing": "Processando...",
                            "sZeroRecords": "Nenhum registro encontrado",
                            "sSearch": "Pesquisar",
                            "oPaginate": {
                                "sNext": "Próximo",
                                "sPrevious": "Anterior",
                                "sFirst": "Primeiro",
                                "sLast": "Último"
                            }
                        },
                        "ordering": false,
                        "retrieve": true,
                    });

                }
            });

            return false;
        });

    });
</script>

