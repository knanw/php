<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
   <link rel="icon" href="favicon.ico">
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
                <a class="navbar-brand" href="<?php echo site_url(); ?>index.php/welcome/index/">Start </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                      <li>
                        <a href="<?php echo site_url(); ?>index.php/shop/index">Boards</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>index.php/board/index">Create board</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>index.php/add/index">Add product</a>
                    </li>
                         <li>
                        <a href="<?php echo site_url(); ?>index.php/profil/index">Profile</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>index.php/login/index">Login/ registration</a>
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

<br><br><br><br><br>

<div class="container">
 <br>
<div class="container">
  <div class="row">
    <div class="col-md-9">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="row">
            <div class="col-md-12 lead">User profile<hr></div>
          </div>
          <div class="row">
      <div class="col-md-4 text-center">
              <img class="img-circle avatar avatar-original" style="-webkit-user-select:none; 
              display:block; margin:auto;" src="http://robohash.org/sitsequiquia.png?size=120x120">
            </div>
            <div class="col-md-8">
              <div class="row">
                <div class="col-md-12">
                  <h1 class="only-bottom-margin">John Dawkin</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <span class="text-muted">Email:</span> dawkin@spendlr.com<br>
                  <span class="text-muted">Birth date:</span> 01.01.1074<br>
                  <span class="text-muted">Gender:</span> male<br>
<span class="text-muted">Address:</span> Fourth Carringotn Street 43<br>
<span class="text-muted">City:</span> Burlington<br>
<span class="text-muted">Zip:</span> 193833<br>
<span class="text-muted">State:</span> BC<br>
<span class="text-muted">Country:</span> Canada<br><br>
                                    <small class="text-muted">Created: 01.01.2014</small>
                </div>
                <div class="col-md-6">
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-comment text-muted"></i> 500
                  </div>
                  <div class="activity-mini">
                    <i class="glyphicon glyphicon-thumbs-up text-muted"></i> 1500
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <hr><button class="btn btn-default pull-right"><i class="glyphicon glyphicon-pencil"></i> Edit</button>
            </div>
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

</body> 
</html>
