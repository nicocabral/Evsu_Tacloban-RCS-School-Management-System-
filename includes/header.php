<?php  ?>
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
                    <li><a href="about.php"><span class="glyphicon glyphicon-bookmark"></span><strong style="color:#FFF;"> About Us</strong></a></li>
                    <li><a href="activities.php"><span class="glyphicon glyphicon-user"></span><strong style="color:#FFF;"> Activities</strong></a></li>
                    <li><a href="activities.php"><span class="glyphicon glyphicon-list-alt"></span><strong style="color:#FFF;"> Announcement</strong></a></li>
                    <li><a href="activities.php"><span class="glyphicon glyphicon-credit-card"></span><strong style="color:#FFF;"> Galery</strong></a></li>
                    <li><a href="admin/alumni_user.php"><span class="
glyphicon glyphicon-gift"></span><strong style="color:#FFF;"> Alumni</strong></a></li>
                 
                </ul>
</nav>
<!-----------------------------------nav-------------------------->
