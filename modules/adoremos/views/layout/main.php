<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $this->title ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/coin-slider-styles.css" type="text/css" />
       <link type="text/css" rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/estilo1.css"/>
       <link type="text/css" rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/stylesloginmodal.css"/>  
    </head>
    <body>
        
        <header>
              <div id="logo">
                <img src="<?php echo $this->assets($theme) ?>images/logo.png" width="380" />
              </div>
              <div class="post">
                <div class="btn-sign">
                  <a href="" class="login-window"><img src="<?php echo $this->assets($theme) ?>images/botaoaluno.png" /></a>
                </div>
              </div>
        </header>
       <nav class="">
            <div class="">
                <div class="">
                </div>
                <div id="navbar" class="">
                    <ul class="">
                     <li class='active'><a href='<?php echo $this->createUrl() ?>'><span>Home</span></a></li>
                     <li><a href='<?php echo $this->createUrl('sobre') ?>'><span>Sobre</span></a></li>
                     <li><a href='#'><span>Aulas</span></a></li>
                     <li class='last'><a href='<?php echo $this->createUrl('professor')?>'><span>Professores</span></a></li>
                     <li><a href='#'><span>Serviços</span></a></li>
                     <li class=''><a href='<?php echo $this->createUrl('contato')?>'><span>Contatos</span></a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="">

            <?php echo $content ?>

        </div><!-- /.container -->
        <footer>
            
        </footer>
<script type="text/javascript" src="<?php echo $this->assets($theme) ?>js/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="<?php echo $this->assets($theme) ?>js/coin-slider.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#coin-slider').coinslider({ width: 1000,height:400, navigation:true,effect:'rain', delay: 5000,hoverPause: true });
  });
</script>
    </body>
</html>