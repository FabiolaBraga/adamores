<?php

/**
 * @copyright (c) KandaFramework 2014
 * @access public
 *
 *
 * @GridView Criação de tables dinâmicas
 *
 */

namespace widgets;

use app\Controller;
use base\AbstractWidget;
use helps\Session;

class GridView extends AbstractWidget {

    /**
     * @access public
     *
     * @static
     *
     * @description Gerar table dinâmicamente.
     * Conforme os parametros do SQL
     *
     *
     * @param arary $dataProvider Serar carregado os dados recupedados conforme
     * os parametros montado no sql
     *
     * @param array $columns Colunas a ser exibidas na table
     *
     * @param arary $actionColumns Ações para update, delete, view.
     * A url base é carregada conforme a view
     *
     *
     * @example
     * <code>
     *  columns =>[
     *      @string nome,
     *      @array  nivel =>[
     *              @string 'header'=>'Kanda',
     *              @object 'container' => function( @object $model, @int $key){
     *               @model Valores do dataProvaider
     *               @key   Valor do id da dataProvaider_@primary_key
     *              }
     *      ]
     *  ];
     * </code>
     *

     *
     * @description Os valores da $dataProvider deve ser no padrão do ActiveRecord
     *
     * @example
     *
     * <code>
     * array_merge(
      ['data'=> Kanda::find_by_sql("SELECT nome FROM kanda ")],
      Kanda::attributeLabels(),['primary_key'=>Kanda::$primary_key, ]
      );
     *
     * </code>
     *
     * @example
     *
     * <code>
     *   echo GridView::widget([
     *      'dataProvider' => $dataProvider,
      'columns' => [
      'nivel' => [
      'header'=>'KandaFramework',
      'container'=> function($model,$key){
      return $key;
      }
      ],
      'nome',
      ],
      'actionColumns'=>['update','delete'],
     *  ]);
     * </code>
     */
    public static function widget($param) {

        $tr = '';
        $theader = '';
        $table = '';


        foreach ($param['columns'] as $columns) {

            if (is_array($columns)) {
                $theader .= "<th>{$columns['header']}</th>";
            } else {
                if (isset($param['dataProvider'][$columns]))
                    $theader .= "<th>{$param['dataProvider'][$columns]}</th>";
                else {
                    $theader .= "<th>" . ucfirst($columns) . "</th>";
                }
            }
        }

        $theader .= '<th>Açao</th>';

        $i = 0;


        $page = 0;

        if (isset($_GET['pg']) && !empty($_GET['pg']))
            $page = $_GET['pg'] - 1;

        $dataProvider = $param['dataProvider']['data'];

        if (!$param['dataTable'] && isset($param['dataTable'])) {
            $dataProvider = array_chunk($param['dataProvider']['data'], $param['result']);
            $count = count($dataProvider);
            $dataProvider = $dataProvider[$page];
        }


        foreach ($dataProvider as $column) {

            $primary_key = $column->$param['dataProvider']['primary_key'];

            $tr .= "<tr id='dataProvider_{$primary_key}' >";

            foreach ($param['columns'] as $columns) {

                if (is_array($columns)) {
                    $tr .= "<td>" . $columns['container']($param['dataProvider']['data'][$i], $primary_key) . "</td>";
                } else {
                    if (isset($column->$columns))
                        $tr .= "<td>" . $column->$columns . "</td>";
                    else
                        $tr .= "<td>-</td>";
                }
            }
            $tr .= "<td>" . self::createActionColumns($param['actionColumns'], $param['dataProvider']['primary_key'], $primary_key) . "</td>";
            $tr .= "</tr>";

            ++$i;
        }
        $tfoot = '';

        if (!$param['dataTable'] && isset($param['dataTable'])) {
            $li = '';
            for ($j = 1; $j < $count + 1;  ++$j) {
                $li .= '<li id="pg_' . $j . '" ><a href="?pg=' . $j . '">' . $j . '</a></li>';
            }
            
            $classPaginate =  (isset($param['classPaginate'])) ? $param['classPaginate'] : '' ;
            
            $tfoot = '<nav class="' . $classPaginate . '">
                <ul class="pagination">
               <li>
                 <a href="#" aria-label="Previous">
                   <span aria-hidden="true">&laquo;</span>
                 </a>
               </li>
                ' . $li . '        
               <li>
                 <a href="#" aria-label="Next">
                   <span aria-hidden="true">&raquo;</span>
                 </a>
               </li>
             </ul>
           </nav>';
            $table .= "<script>$('#pg_" . ($page + 1) . "').addClass('active');</script>";
        }
        $table = "<div><table class='table {$param['classTable']}' ><thead><tr>$theader</tr></thead><tbody>$tr</tbody></table>$tfoot</div>";

        $table .= "<script>var ConfirmDelete = function(){ };</script>";



        self::$table = $table;

        return $table;
    }

    /**
     *
     * @param  type $action
     * @return type
     */
    protected static function createActionColumns($action, $param, $id) {
 

        $i = 0;
        $count = count($action);
        $Action = [];

        $actionColumn = [
            'update' => "<a class='btn btn-info' href='" . Controller::$baseUrl . '/' . Controller::$base . "/update/$id'>
                                editar
                            </a>",
            'delete' => "<a class='btn btn-danger' href='" . Controller::$baseUrl . '/' . Controller::$base . "/delete/$id' onclick=\" if(confirm('Deseja excluir esse item?')){return true;}else{return false;};\">
                                deletar
                            </a>",
            'view' => "<a href='" . Controller::$baseUrl . '/' . Controller::$base . "/view/$id' class='btn btn-success'>
                                <i class='fa fa-fw fa-zoom-in'></i>
                            </a>",
        ];
        foreach ($action as $columns) {

            if (is_array($columns)) {

                $Action[] = $columns['container']($id);
            } else {
                while ($i < $count) {
                    $Action[] = $actionColumn[$action[$i]];
                    ++$i;
                }
            }
        }
        return implode(' ', $Action);
    }

}
