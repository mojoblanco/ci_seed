
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="Codeigniter app seed template">
        <meta name="author" content="John Olawale">
        <link rel="icon" href="../../favicon.ico">

        <title>Starter Template for Codeigniter Application</title>

        <!-- Bootstrap core CSS -->
        <?= link_tag('assets/css/bootstrap.min.css'); ?>

        <!-- Font Aweome CSS -->
        <?= link_tag('assets/css/font-awesome.min.css'); ?>

        <!-- Custom styles for this template -->
        <?= link_tag('assets/css/styles.css'); ?>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Codeigniter Application</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <?php if ($this->ion_auth->logged_in()) : ?>
                        <li><?= anchor('auth/logout', 'Logout'); ?></li>
                    <?php else: ?>
                        <li><?= anchor('auth/login', 'Login'); ?></li>
                        <li><?= anchor('auth/create_user', 'Register'); ?></li>
                    <?php endif; ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
        </nav>

        <div class="container">

        <?= $yield; ?>

        </div><!-- /.container -->



        <script src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
	    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>assets/js/main.js"></script>
    </body>
</html>
