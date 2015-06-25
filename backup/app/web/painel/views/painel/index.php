<?php
$this->title = "Dashboard";

use backend\controllers\painel\DashboardController;

use core\helps\Url;
?>
<div class="box-content">

    <a href="<?php echo Url::home('clientes')?>" class="quick-button metro yellow span2">
        <i class="icon-shopping-cart"></i>
        <p>Clientes</p>
        <span class="badge"><?php echo $clientes ?></span>
    </a>

    <a href="<?php echo Url::home('servicos')?>" class="quick-button metro red span2">
        <i class="icon-retweet"></i>
        <p>Serviços</p>
        <span class="badge"><?php echo $servicos ?></span>
    </a>

    <a href="<?php echo Url::home('status')?>" class="quick-button metro blue span2">
        <i class="icon-tags"></i>
        <p>Status</p>
        <span class="badge"><?php echo $status ?></span>
    </a>

    <a href="<?php echo Url::home('relatorios')?>" class="quick-button metro green span2">
        <i class="icon-flag"></i>
        <p>Relatório</p>
    </a>

    <div class="clearfix"></div>
</div>