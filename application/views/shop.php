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
    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>public/css/shop-homepage.css" rel="stylesheet">

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
                        <a href="<?php echo base_url(); ?>index.php/board/index">Create board</a>
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

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Splendr Shop</p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Beach Wear</a>
                    <a href="#" class="list-group-item">Maternity</a>
                    <a href="#" class="list-group-item">Accessoires</a>
                </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url(); ?>public/pictures/99.jpg" alt="">
                                </div>
                                <div class="item">
                                   <img class="slide-image" src="<?php echo base_url(); ?>public/pictures/98.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="<?php echo base_url(); ?>public/pictures/97.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                    
					
					
					
<?php foreach ($prod as $item){?>



<div class="col-sm-4 col-lg-4 col-md-4">

					
                        <div class="thumbnail">
                            <img src="<?php echo $item[4];?>" alt="">
                            <div class="caption">
                                
                                <h4><a href="<?php echo $item[3];?>"><?php echo $item[0];?></a>
                                    <h4 class="pull-right"><?php echo $item[1];?> &euro;</h4>
                                </h4>
                                   <a href="<?php echo $item[3];?>" class="btn btn-primary">Buy Now!</a> 

                            <a href="<?php echo $item[3];?>" class="btn btn-default">Picture</a>

                            </div>
							
							
							
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>
					
					<?php };?>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url(); ?>public/pictures/02.jpg" alt="">
                            <div class="caption">
                                
                                <h4><a href="#">Midi-Slip in modischem Muster-Mix</a>
                                </h4>
                                <a href="http://www.esprit.de/midi-slip-in-modischem-muster-mix-045EF1A034" class="btn btn-primary">Buy Now!</a> 
                                <a href="<?php echo base_url(); ?>public/pictures/02.jpg" class="btn btn-default">Picture</a>
                                <h4 class="pull-right">19,99 &euro;</h4>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">12 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url(); ?>public/pictures/03.jpg" alt="">
                            <div class="caption">
                               
                                <h4><a href="#">Wattiertes Triangel-Top mit Push-up-Effekt</a>
                                </h4>
                                    <a href="http://www.esprit.de/damenmode/swim-beach/wattiertes-triangel-top-mit-push-up-effekt-045EF1A050_619" class="btn btn-primary">Buy Now!</a>
                                     <a href="<?php echo base_url(); ?>public/pictures/03.jpg" class="btn btn-default">Picture</a>
                                     <h4 class="pull-right">34,99&euro;</h4>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url(); ?>public/pictures/04.jpg" alt="">
                            <div class="caption">
                                <h4><a href="#">Bikini in innovativem Streifen-Look</a>
                                </h4>
                                <a href="http://www.esprit.de/damenmode/swim-beach/set-bikini-in-innovtivem-streifen-look-045EF1A047_508" class="btn btn-primary">Buy Now!</a> 
                                <a href="<?php echo base_url(); ?>public/pictures/04.jpg" class="btn btn-default">Picture</a>
                                <h4 class="pull-right">49,99 &euro;</h4>


                            </div>
                            <div class="ratings">
                                <p class="pull-right">6 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo base_url(); ?>public/pictures/05.jpg" alt="">
                            <div class="caption">
                               
                                <h4><a href="#">Mini-Slip in buntem Palmen-Print-Look</a>
                                </h4>
                                   <a href="http://www.esprit.de/damenmode/swim-beach/set-bikini-in-innovativem-streifen-look-045EF1A047_508" class="btn btn-primary">Buy Now!</a>
                                    <a href="<?php echo base_url(); ?>public/pictures/05.jpg" class="btn btn-default">Picture</a>
                                    <h4 class="pull-right">19,99 &euro;</h4>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">18 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

    </div>
    <!-- /.container -->

        <!-- Footer -->
        <footer>
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
<div class="container">
<div class="navbar-text pull-left">
Copyright &copy; Your Website 2014 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="contact.html">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="legal_details.html">Legal details</a>
</div></div></div></footer>
    <!-- jQuery -->

    <script src="<?php echo base_url(); ?>public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>public/js/bootstrap.min.js"></script>

</body>

</html>