<?php

use helps\Session;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $this->title ?></title>
        <link  href="<?php echo $this->assets($theme) ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link  href="<?php echo $this->assets($theme) ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link  href="<?php echo $this->assets($theme) ?>css/theme.css" rel="stylesheet">
        <link  href="<?php echo $this->assets($theme) ?>images/icons/css/font-awesome.css" rel="stylesheet">
        <link  href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
        <script src="<?php echo $this->assets($theme) ?>scripts/jquery-1.9.1.min.js" ></script>
        <script>
        
            
           var Alert =  function(Class,msg){
            
            setTimeout(function(){
                
                $('#Alert .alert').fadeOut("slow");
                $('#Alert .alert').removeClass(Class);
                
            },3000);
            window.scrollTo(3000, 0);
            $('#Alert .alert strong').html('');
            $('#Alert .alert').fadeIn();
            $('#Alert .alert').addClass('alert-'+Class);
            $('#Alert .alert strong').html(msg);
        };
          
        </script>
    </head>
    <body>
     <div id="alertShow" class="noty"></div>
        <div id="Alert">
            <div class="alert" style="display: none" >
            <strong></strong>
            </div>
        </div>
        <div class="navbar navbar-fixed-top">
            
            <div class="navbar-inner">
                <div class="container" style="margin-top:50px;">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="<?php echo $this->createUrl() ?>">Site </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <!--
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        
                        <form class="navbar-search pull-left input-append" action="#">
                            <input type="text" class="span3">
                            <button class="btn" type="button">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                       -->
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Suporte
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $this->createUrl('painel/chamado') ?>">Listar Chamados</a></li>
                                    <li><a href="<?php echo $this->createUrl('painel/chamado/create') ?>">Abrir Chamado</a></li>
                                </ul>
                            </li>

                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo $this->assets($theme) ?>images/user.png" class="nav-avatar" />
                                    <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="<?php echo $this->createUrl('/painel/usuarios/update/') ?><?php echo Session::getSession()->id ?>">Editar Perfil</a></li>
                                    <li class="divider"></li>
                                    <li><a href="<?php echo $this->createUrl('painel/painel/logaout') ?>">Sair</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="<?php echo $this->createUrl('painel') ?>"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="<?php echo $this->createUrl('painel/aulas') ?>"><i class="menu-icon icon-picture"></i>Aulas</a></li>                        
                                <li><a href="<?php echo $this->createUrl('painel/banner') ?>"><i class="menu-icon icon-picture"></i>Banner</a></li>                        
                                <li><a href="<?php echo $this->createUrl('painel/contatos') ?>"><i class="menu-icon icon-envelope"></i>Contatos </a></li>
                                <li><a href="<?php echo $this->createUrl('painel/galerias') ?>"><i class="menu-icon icon-camera"></i>Galerias </a></li>
                                 
                            </ul>
                            <ul class="widget widget-menu unstyled">
                                <li><a href="<?php echo $this->createUrl('painel/Servicos') ?>"><i class="menu-icon icon-hand-up"></i>Serviços </a></li>
                                <li><a href="<?php echo $this->createUrl('painel/sobre') ?>"><i class="menu-icon icon-hand-up"></i>Sobre </a></li>
                                <li><a href="<?php echo $this->createUrl('painel/usuarios') ?>"><i class="menu-icon icon-user"></i>Usuários </a></li>
                                <li><a href="<?php echo $this->createUrl('painel/videos') ?>"><i class="menu-icon icon-camera"></i>Vídeos</a></li>
                            </ul>

                            <!--/.widget-nav-->
 
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <?php echo $content ?>
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">

            </div>
        </div>

        <script src="<?php echo $this->assets($theme) ?>scripts/jquery-ui-1.10.1.custom.min.js" ></script>
        <script src="<?php echo $this->assets($theme) ?>bootstrap/js/bootstrap.min.js" ></script>
        <script src="<?php echo $this->assets($theme) ?>scripts/flot/jquery.flot.js" ></script>
        <script src="<?php echo $this->assets($theme) ?>scripts/flot/jquery.flot.resize.js" ></script>
        <script src="<?php echo $this->assets($theme) ?>scripts/datatables/jquery.dataTables.js" ></script>
        <script src="<?php echo $this->assets($theme) ?>scripts/common.js" ></script>
     </body>
</html>