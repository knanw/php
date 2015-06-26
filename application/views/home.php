<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <link rel="icon" href="favicon.ico">
    <title>Splendr</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>public/css/heroic-features.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/welcome/index/">Start </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                      <li>
                        <a href="<?php echo base_url(); ?>index.php/shop/index">Boards</a>
                    </li>
                    <li>
                        <a href="">Create board</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/add/index">Add product</a>
                    </li>
                         <li>
                        <a href="<?php echo base_url(); ?>index.php/profil/index">Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>index.php/login/index">Login/ registration</a>
                    </li>

                    <li>
      <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
          </div>
        </div>
      </form>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <h1>Splendr Shopping</h1>
            <p>Since over 10 years in the E-Commeerce we offer products over the internet</p>
            <p>
            </p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Latest Features</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>public/pictures/01.jpg" alt="">
                    <div class="caption">
                        <h3>Hipster-Slip mit gerafften Seitenstegen</h3>
                        <p>19,99 &euro;</p>
                        <p>
                            <a href="http://www.esprit.de/hipster-slip-mit-gerafften-seitenstegen-045EF1A115" class="btn btn-primary">Buy Now!</a> 

                            <a href="<?php echo base_url(); ?>public/pictures/01.jpg" class="btn btn-default">Picture</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>public/pictures/02.jpg" alt="">
                    <div class="caption">
                        <h3>Midi-Slip in modischem Muster-Mix</h3>
                        <p>19,99 &euro;</p>
                        <p>
                            <a href="http://www.esprit.de/midi-slip-in-modischem-muster-mix-045EF1A034" class="btn btn-primary">Buy Now!</a> 
                            <a href="<?php echo base_url(); ?>public/pictures/02.jpg" class="btn btn-default">Picture</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>public/pictures/03.jpg" alt="">
                    <div class="caption">
                        <h3>Wattiertes Triangel-Top mit Push-up-Effekt</h3>
                        <p>34,99 &euro;</p>
                        <p>
                            <a href="http://www.esprit.de/damenmode/swim-beach/wattiertes-triangel-top-mit-push-up-effekt-045EF1A050_619" class="btn btn-primary">Buy Now!</a> 
                            <a href="<?php echo base_url(); ?>public/pictures/03.jpg" class="btn btn-default">Picture</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?php echo base_url(); ?>public/pictures/04.jpg" alt="">
                    <div class="caption">
                        <h3>Strip: Bikini in innovativem Streifen-Look</h3>
                        <p>49,99 &euro;</p>
                        
                        <p>
                            <a href="http://www.esprit.de/damenmode/swim-beach/set-bikini-in-innovativem-streifen-look-045EF1A047_508" class="btn btn-primary">Buy Now!</a> 
                            <a href="<?php echo base_url(); ?>public/pictures/04.jpg" class="btn btn-default">Picture</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
<div class="container">
<div class="navbar-text pull-left">
Copyright &copy; Your Website 2014 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="contact.html">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="legal_details.html">Legal details</a>
</div></div></div></footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

</body>

</html>