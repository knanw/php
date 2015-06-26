<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Signin</title>




        <link href="<?php echo base_url(); ?>public/css/login_registration.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">


    <script src="<?php echo base_url(); ?>public/js/login_registration.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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

        <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="login_registration.html" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" class="active" id="registration-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form"  method="post" role="form" style="display: block;">
                  <div class="form-group">
                    <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First Name" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last Name" value="">
                  </div>
                   <div class="form-group">
                    <input type="text" name="birthdate" id="birthdate" tabindex="1" class="form-control" placeholder="Birth Date" value="">
                  </div>
                   <div class="form-group">
                    <input type="text" name="gender" id="gender" tabindex="1" class="form-control" placeholder="Gender" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="email" id="email" tabindex="1" class="form-control" placeholder="Email" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="address" id="address" tabindex="1" class="form-control" placeholder="Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="city" id="city" tabindex="1" class="form-control" placeholder="City" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="zip" id="zip" tabindex="1" class="form-control" placeholder="Zip" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="state" id="state" tabindex="1" class="form-control" placeholder="State" value="">
                  </div>
                  <div class="form-group">
                    <input type="text" name="country" id="country" tabindex="1" class="form-control" placeholder="Country" value="">
                  </div>
                    <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="2" class="form-control" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
         
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-login" value="Register">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        
                      </div>
                    </div>
                  </div>
                </form>
                <form id="register-form" action="#" method="post" role="form" style="display: none;">
                  <div class="form-group">
                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                  </div>
                  <div class="form-group">
                    <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
        <!-- Footer -->
        <footer>
<div class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
<div class="container">
<div class="navbar-text pull-left">
Copyright &copy; Your Website 2014 &nbsp;&nbsp;&nbsp;&nbsp;
<a href="contact.html">Contact&nbsp;&nbsp;&nbsp;&nbsp;</a>
<a href="legal_details.html">Legal details</a>
</div></div></div></footer>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>public/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
