<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <!-- start: Meta -->
        <meta charset="utf-8">
        <title>Acesse sua conta</title>
        <meta name="description" content="Bootstrap Metro Dashboard">
        <meta name="author" content="Dennis Ji">
        <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <!-- end: Meta -->

        <!-- start: Mobile Specific -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- end: Mobile Specific -->

        <!-- start: CSS -->
        <link id="bootstrap-style" href="<?php echo $this->assets($theme) ?>css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $this->assets($theme) ?>css/bootstrap-responsive.min.css" rel="stylesheet">
        <link id="base-style" href="<?php echo $this->assets($theme) ?>css/style.css" rel="stylesheet">
        <link id="base-style-responsive" href="<?php echo $this->assets($theme) ?>css/style-responsive.css" rel="stylesheet">
        <!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>-->
        <!-- end: CSS -->


        <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <link id="ie-style" href="<?php echo $this->assets($theme) ?>css/ie.css" rel="stylesheet">
        <![endif]-->

        <!--[if IE 9]>
                <link id="ie9style" href="<?php echo $this->assets($theme) ?>css/ie9.css" rel="stylesheet">
        <![endif]-->

        <!-- start: Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- end: Favicon -->

        <style type="text/css">
            body { background: url(<?php echo $this->assets($theme) ?>img/bg-login.jpg) !important; }
            .error{
                margin-left: 17px;
                text-align: left;
                width: 300px;
                color:#FF7D71;
            }
        </style>

    </head>

    <body>
        <div class="container-fluid-full">
            <div class="row-fluid">

                <div class="row-fluid">


                    <div class="login-box">

                        <div class="icons">
                            <a href="<?php echo $this->createUrl() ?>"><i class="halflings-icon home"></i></a>
<!--						<a href="#"><i class="halflings-icon cog"></i></a>-->
                        </div>
                        <h2><font><font>Acesse sua conta</font></font></h2>
                        <?php echo $content ?>
                    </div>

                </div><!--/row-->

            </div><!--/.fluid-container-->

        </div><!--/fluid-row-->

        <!-- start: JavaScript-->


        <!-- end: JavaScript-->
    </body>
</html>
