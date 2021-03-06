<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $this->title ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $this->assets($theme) ?>css/style.css">
    </head>
    <body>
    <header>
            
    </header>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo $this->createUrl() ?>">Kanda Framework</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#form">Formulário</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div class="container">

            <?php echo $content ?>

        </div><!-- /.container -->
        <footer>
            
        </footer>
    </body>
</html>