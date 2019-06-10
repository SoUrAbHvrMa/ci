<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/asset/style.css">
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
      padding: 25px;
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
        <li><a href="<?php echo base_url() ?>lists">List All</a></li>
        <li><a href="<?php echo base_url() ?>add">Add Restaurants</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-12" style="overflow:auto">
    <div class="container" >
      <?php  
      if($fetch_data->num_rows() > 0)  
      {  
        foreach($fetch_data->result() as $row)  
        {  
          ?>  
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="my-list">
                  <h3>Name:<?php echo $row->name; ?></h3>
                
                
                
                  <span class="pull-right">contact:<?php echo $row->contact; ?></span>
				  <span>location:<?php echo $row->location; ?></span>
				  <div class="offer">Manager Name:<?php echo $row->manager_nm; ?></div>
                   </div>
                </div>
           <?php       
                }  
           }  
           else  
           {  
           ?>  
                <div ><h2 class="col-xs-offset-5" style="padding-bottom:170px;">No Data Found</h2></div>  
           <?php  
           }  
           ?>  

</div>

      </div>
    </div>
</div><br>

<br><br>

<footer class="container-fluid text-center">
<p>Get in touch with us</p>
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>