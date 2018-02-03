<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="shortcut icon" href="images/icon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RCS - Tacloban City</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="all">
<link href="bootstrap/js/bootstrap.min.js" rel="stylesheet media="all" type="text/javascript">
<link href="templatemo_style.css" type="text/css" rel="stylesheet" /> 
  <script type="text/javascript" src="js/jquery.min.js"></script> 
  <script type="text/javascript" src="js/jquery.scrollTo-min.js"></script> 
  <script type="text/javascript" src="js/jquery.localscroll-min.js"></script> 
  <script type="text/javascript" src="js/init.js"></script> 
    
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
    <script type="text/JavaScript" src="js/slimbox2.js"></script> 

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />


<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

</head>

<span class="img-responsive"><img src="images/bannerrcs.png" class="img-responsive" width="100%" /></span>

<nav class="navbar navbar-inverse" role="navigation">

  <a class="navbar-brand" style="font-weight:bolder;"><marquee><strong style="color:#FFF;"><?php echo '<script> document.write(Date());</script>'?></strong></marquee></a>
  <ul class="nav navbar-nav">

                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> <strong style="color:#FFF;">Home</strong></a></li>
                    <li><a href="admin/about_user.php"><span class="glyphicon glyphicon-bookmark"></span><strong style="color:#FFF;"> About Us</strong></a></li>
                    <li><a href="admin/activities_user.php"><span class="glyphicon glyphicon-list-alt"></span><strong style="color:#FFF;"> Announcement</strong></a></li>
                    <li><a href="admin/gallery_user.php"><span class="glyphicon glyphicon-picture"></span><strong style="color:#FFF;"> Galery</strong></a></li>
                   <li><a href="admin/alumni_user.php"><span class="
glyphicon glyphicon-education"></span><strong style="color:#FFF;"> Alumni</strong></a></li>
           <li><a href="javascript:;" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span><strong style="color:#FFF;">&nbsp;Login</strong></a>
                </li>
                    </ul>
</nav>

</head>

<body>

	<div class="container">
<?php include('login.php');?>
<div class="row">


        <hr />
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>RCS &nbsp;</strong>|
    <table id="example">
        <form>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
 
    <div class="item active">
    
      <img src="images/slider/bg1.png"  alt="...">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="images/slider/bg2.png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
     <div class="item">
      <img src="images/slider/bg3.png"  alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/slider/display.png"  alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <br />
   
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>

    
     
        </div>
<div class="container">
<div class="row">
<br>
<?php include('activities.php');?>
        </div>
</div>

      
      </div>
      </div>

   
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
</body>
</html>