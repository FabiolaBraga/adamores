<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $this->title ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/bootstrap.css.map">
        <link rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/coin-slider-styles.css" type="text/css" />
     </head>
    <body>
        
        <header id="logo" ></header>

         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Kanda Framework</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                     <li><a href='<?php echo $this->createUrl() ?>'><span>Home</span></a></li>
                     <li><a href='<?php echo $this->createUrl('sobre') ?>'><span>Sobre</span></a></li>
                     <li><a href='<?php echo $this->createUrl('aulas') ?>'><span>Aulas</span></a></li>
                     <li><a href='<?php echo $this->createUrl('professores')?>'><span>Professores</span></a></li>
                     <li><a href='#'><span>Serviços</span></a></li>
                     <li class=''><a href='<?php echo $this->createUrl('contato')?>'><span>Contatos</span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        

        <div class="container" style="margin-top: 50px; margin-bottom: 20px;">
 
        <?php echo $content ?>

        </div><!-- /.container -->

        <footer>
            
            <div class="container">
             <a href="<?php echo $this->createUrl('painel')?>">painel</a>
            </div> 
 
        </footer>
        <script type="text/javascript" src="<?php echo $this->assets($theme) ?>js/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="<?php echo $this->assets($theme) ?>js/bootstrap.min.js"></script>

   </body>
</html>