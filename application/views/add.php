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
                        <a href="">Add product</a>
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
<br><br><br><br><br>

<div class="container">
  <h2>Add product:</h2>
  <form method="post">

<br><br>



<div class="dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
    Select Board

    <span class="caret"></span>
  </button>

  <br>
  <br>
  
</div>

    <div class="form-group">
      <label for="email">Name:</label>
	  
      <input type="text" class="form-control" name="pname" id="name" placeholder="Enter product name">
    </div>
	<div class="form-group">
      <label for="email">Category:</label>
	  
      <select name="category">
	  	<option value='Beachwear'>Beachwear</option>
		</select>
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control" name="price" id="pwd" placeholder="Enter product price">
    </div>
    <div class="form-group">
      <label for="pwd">Product URL:</label>
      <input type="text" class="form-control" name="product_url" id="pwd" placeholder="Enter product price">
    </div>
        <div class="form-group">
      <label for="pwd">Picture URL:</label>
      <input type="product" class="form-control" name="picture_url" id="pwd" placeholder="Enter product price">
    </div>


    <input type="submit" name="sub" id="sub" >
  </form>
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
