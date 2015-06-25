<?php
$this->title = 'Dashboard';
?>
<div class="btn-controls">
    <div class="btn-box-row row-fluid">
        <a class="btn-box big span4" href="<?php echo $this->createUrl('painel/usuarios') ?>"><i class="icon-user"></i><b><?php echo $usuario ?></b>
            <p class="text-muted">
                Usuário</p>
        </a>
    </div>     
</div>