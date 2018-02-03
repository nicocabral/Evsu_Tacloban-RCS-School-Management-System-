<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
include('includes/header_user.php')

;?>

<body>
	<div class="container">
<div class="row">
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li>Gallery</a></li>
</ol>

        <hr />
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>Gallery &nbsp;</strong>| &nbsp; <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-plus-sign"></span> &nbsp;Add Photo</button></p> <?php include('add_photo.php');?>
    
        <form>
       <div class="panel panel-primary">
       <div class="panel-heading">Rizal Central School - Tacloban City | Photo Gallery<span class="pull-right">As of &nbsp;<?php echo date('m-d-Y');?></span></div>
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
				<p class="page-header" style="text-align:center;"><strong data-toggle="tooltip" title="Photo Information"><?php echo $name."&nbsp;|&nbsp;".$des."&nbsp;|&nbsp;".$row['date']; ?></strong></p>
				&nbsp;<span style="text-align:center;"> <img src="getimage_gallery.php?id=<?php echo $row['id']; ?>" class="img-rounded" width="550px" height="400px" /></span>
		</p>
				<span style="text-align:right;">
                
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
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	}
	
?>
</div>	



		</div>
      </form>
      
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