<html ng-app="ci">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron" style="margin-bottom:0;">
  <div class="container text-center">
    <h1>The Online Food Counter</h1>      
  </div>
</div>
<style>
    footer{
      background-color: #f2f2f2;
      padding    : 25px;
    }
    .form-group1{
        padding    : 15px;
    }
</style>
<nav class="navbar navbar-inverse" style="margin-bottom: 50px;border-radius: 0;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo base_url() ?>main">Home</a></li>
        <li><a href="<?php echo base_url() ?>lists">List All</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <form method="post" action="<?php echo base_url() ?>main/form_val">
    <div class="form-group form-group1">
      <label class="control-label col-sm-2 col-xs-offset-3" >Name:</label>
      <div class="col-sm-4">
        <input  class="form-control" id="name" placeholder="Enter Name" name="name">
        <span class="text-danger"><?php echo form_error("name"); ?></span>
      </div>
    </div>
    <div class="form-group form-group1">
        <label class="control-label col-sm-2 col-xs-offset-3" >Address:</label>
        <div class="col-sm-4">
            <textarea class="form-control" id="add" placeholder="Enter Address" name="add"></textarea>
            <span class="text-danger"><?php echo form_error("add"); ?></span>
        </div>
    </div>
    <div class="form-group" style="padding-top:35px;padding-bottom:15px;">
        <label class="control-label col-sm-2 col-xs-offset-3" >Location:</label>
        <div class="col-sm-4">          
            <input  class="form-control" id="loca" placeholder="Locaton" name="loca">
            <span class="text-danger"><?php echo form_error("loca"); ?></span>
        </div>
    </div>
    <div class="form-group form-group1">
      <label class="control-label col-sm-2 col-xs-offset-3" >Manager Name:</label>
      <div class="col-sm-4">          
        <input class="form-control" id="man" placeholder="Enter Manager Name" name="man">
        <span class="text-danger"><?php echo form_error("man"); ?></span>
      </div>
    </div>
    <div class="form-group form-group1">
      <label class="control-label col-sm-2 col-xs-offset-3" >contact:</label>
      <div class="col-sm-4">
        <input class="form-control" id="contact" placeholder="Contact" name="contact">
        <span class="text-danger"><?php echo form_error("contact"); ?></span>
      </div>
    </div>
    <div class="form-group" style="padding-top:20px;">        
      <div class="">
        <button name="sub" type="submit" class="col-md-offset-6 btn btn-default">Submit</button>
      </div>
    </div>
    </form>
</div>

<footer class="container-fluid text-center">
  <p>Get in touch with us</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
</body>
</html>