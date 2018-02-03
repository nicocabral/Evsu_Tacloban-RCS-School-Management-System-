<!DOCTYPE html>
<html lang="en">
<?php session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])){
	echo'<script>window.location="admin/Home.php";</script>';
	}else{
?>
<head>
<link rel="shortcut icon" href="images/icon.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RCS - Tacloban City</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 
<link href="assets/datatables.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="assets/jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
	
	$("#btn-view").hide();
	
	$("#btn-add").click(function(){
		$(".content-loader").fadeOut('slow', function()
		{
			$(".content-loader").fadeIn('slow');
			$(".content-loader").load('add_form.php');
			$("#btn-add").hide();
			$("#btn-view").show();
		});
	});
	
	$("#btn-view").click(function(){
		
		$("body").fadeOut('slow', function()
		{
			$("body").load('index.php');
			$("body").fadeIn('slow');
			window.location.href="index.php";
		});
	});
	
});
</script>
<script>
    $(function () {
         $('[data-toggle="tooltip"]').tooltip()
    })
</script>

</head>

<span class="img-responsive"><img src="images/bannerrcs.png" class="img-responsive" width="100%" /></span>

<nav class="navbar navbar-inverse" role="navigation">
  <a class="navbar-brand" style="font-weight:bolder;"><marquee><strong style="color:#FFF;"><?php echo '<script> document.write(Date());</script>'?></strong></marquee></a>
  <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> <strong style="color:#FFF;">Home</strong></a></li>
                    <li><a href="admin/about_user.php"><span class="glyphicon glyphicon-bookmark"></span><strong style="color:#FFF;"> About Us</strong></a></li>
                    <li><a href="admin/activities_user.php"><span class="glyphicon glyphicon-user"></span><strong style="color:#FFF;"> Activities</strong></a></li>
                    <li><a href="admin/announcement_user.php"><span class="glyphicon glyphicon-list-alt"></span><strong style="color:#FFF;"> Announcement</strong></a></li>
                    <li><a href="admin/gallery.php"><span class="glyphicon glyphicon-picture"></span><strong style="color:#FFF;"> Galery</strong></a></li>
                    <li><a href="admin/alumni_user.php"><span class="
glyphicon glyphicon-gift"></span><strong style="color:#FFF;"> Alumni</strong></a></li>
                 
                </ul>
</nav>
<body>

   <!-- Page Content -->
    <div class="container" >

         <div class="col-md-7">
            
               <img src="images/display.png" width="100%">
         
        </div>
        
        <div class="col-sm-5" style="border:2px solid #CDCDC1; border-radius:15px; padding:20px; padding-top:30px;">
            <center><h3 class="label label-success" style="font-size:17px"><img src="images/ico/admin.png" width="35px;">Sign up</h3></center>
            <br>
            <form class="form-horizontal" method="POST" action="includes/sign_up_process.php" enctype="multipart/form-data">
            	  <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="name" name="name" autofocus required placeholder="Name Ex. Juan Delacruz">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-3 control-label">Username:</label>
                    <div class="col-sm-8">
                    <input type="text" class="form-control" id="uname" name="uname" autofocus required placeholder="Username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="npassword" class="col-sm-3 control-label">Password:</label>
                    <div class="col-sm-8">
                    <input type="password" class="form-control" id="pass" name="pass" required placeholder="Password">
                    </div>
                </div> 
                <a href="index.php" data-toggle="tooltip" title="Login?"><span style="text-align:left;">Login</span></a>     
              
                <div class="form-group">
                    <input type="submit" id="submit" class="btn btn-primary pull-right" value="Sign up" style="margin-right: 60px;">
                    <input type="reset" id="submit" class="btn btn-default pull-right" value="Clear" style="margin-right: 8px;">
                </div>   
            </form>
         
        </div>
</div>
 
    <!-- /.container -->
<?php //}?>

<?php include('includes/footer.php');}?>
  
</body>
</html>
