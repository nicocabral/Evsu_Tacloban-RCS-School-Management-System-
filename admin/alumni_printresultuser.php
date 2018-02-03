<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo'<script>
	window.alert("Login to access admin!");
	window.location="../index.php";</script>';
	}else if ($_SESSION['usertype']=='Admin'){
		echo '<script>window.alert("Warning Unable to Reach this Page.");
					  window.location="logout_process.php";	</script>'; 
		
		}

	else{
include('includes/header1.php')

;?>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
<body>
<?php $datefrom =@$_POST['date_from']; $dateto = @$_POST['date_to']; ?>
  <div class="content-loader">
  &emsp;  &emsp;  &emsp;<button data-toggle="tooltip" title="Print?" onclick="printContent('div1')" ><img src="images/ico/printer.ico" width="30px;" /></button>&emsp; &emsp;<a href="alumniuser.php" data-toggle="tooltip" title="Back?"class="btn btn-danger">Back</a>
  <br /><br />
  <div id="div1">
       <div class="panel panel-primary">
       <div class="panel-heading">Rizal Central School - Tacloban City Alumni's/Alumnu's from Year &nbsp;<strong><?php echo $datefrom.'&nbsp;-&nbsp;'.$dateto?>  </strong></div>
      	<div class="panel-body">

<div class="row">
<?php include('includes/dbconn.php');
	$from = mysql_real_escape_string($_POST['date_from']);
	$to = mysql_real_escape_string($_POST['date_to']);
	$q = mysql_query("SELECT * FROM tbl_alumni where yeargrad BETWEEN '$from' AND '$to'") or die (mysql_error());
	if(mysql_num_rows($q) > 0)
	{
		while($row=mysql_fetch_array($q))
		{	$id = $row['id'];
			$name = $row['name'];
			$des = $row['yeargrad'];
			$a = $row['achievements'];
			$m =$row['motto'];
			$img = $row['image'];
			?>
			<div class="col-xs-4">
				<p class="page-header" style="text-align:center;"><strong><?php echo $name."&nbsp;|&nbsp;".$des."&nbsp;|&nbsp;"; ?></strong></p>
				&nbsp;<span style="text-align:center;"> <img src="getimage_allumni.php?id=<?php echo $id; ?>" class="img-rounded" width="330px" height="200px" /></span>
			
            	<p></p>
				<span style="text-align:right;">
               	&emsp;Contact:<strong><?php echo $m ?></strong>&nbsp;|Email :&nbsp;<strong><?php echo $a?></strong>
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
	
?></div>
</div>	
       	<?php
		}
		?> 
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