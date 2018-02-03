<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo'<script>
	window.alert("Login to access admin!");
	window.location="../index.php";</script>';
	}else{
include('includes/header1.php')

;?>

<body>
	<div class="container">
<div class="row">
<ol class="breadcrumb">
  <li><a href="Home_user.php">Home</a></li>
  <li>Gallery</a></li>
</ol>

        <hr />
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>Gallery &nbsp;</strong>| &nbsp; <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Add Photo</button></p> <?php include('add_photo.php');?>
    <table id="example">
        <form>
       <div class="panel panel-primary">
       <div class="panel-heading">Photo Gallery</div>
      	<div class="panel-body">
        
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
    
      <img src="images/slider/bg1.png" alt="...">
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
      <img src="images/slider/bg3.png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="images/slider/display.png" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <br />
   <center><p><strong>Rizal Central School Photos</strong></p></center>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div></div>
<div class="row">
<?php
	
	$q = mysql_query('SELECT * FROM tbl_gallery') or die (mysql_error());
	if(mysql_num_rows($q) > 0)
	{
		while($row=mysql_fetch_array($q))
		{	$id = $row['id'];
			$name = $row['name'];
			$des = $row['description'];
			?>
			<div class="col-xs-6">
				<p class="page-header" style="text-align:center;"><strong><?php echo $name."&nbsp;|&nbsp;".$des."&nbsp;|&nbsp;".$row['date']; ?></strong></p>
				&nbsp;<span style="text-align:center;"> <img src="getimage_gallery.php?id=<?php echo $row['id']; ?>" class="img-rounded" width="550px" height="400px" /></span>
			<p></p>
				<span style="text-align:center;">
           
				&nbsp;<a class="btn btn-danger" href="#delete_photo<?php echo $id; ?>" title="click for delete" data-toggle="modal" data-target="#delete_photo<?php echo $id;?>"><span class="glyphicon glyphicon-remove-circle"></span> Delete</a></span><?php include('delete_photo.php');?>
				
                </span>
			
			</div>       
			<?php
		}
	}
	else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp;No New Available Photos ...
            </div>
        </div>
        <?php
	}
	
?>
</div>	



		</div>
      </form></table>
       	<?php
		}
		?> 
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