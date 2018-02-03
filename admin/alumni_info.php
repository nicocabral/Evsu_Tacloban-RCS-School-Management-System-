<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo'<script>
	window.alert("Login to access admin!");
	window.location="../index.php";</script>';
	}else
if ($_SESSION['usertype']=='User'){
		echo '<script>window.alert("Warning Your Not an Administrator. Failed Accessing This Page.");
		 window.location="logout_process.php";</script>'; 
		
		}else{
include('includes/header.php');?>

<body>
	<div class="container">
 <div class="row">
      <div class="col-lg-2">
      	<div class="panel panel-info">
        <div class="panel-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</div>
        <div class="panel-body">
        <ul class="nav nav-pills nav stacked" style="list-style-type:none; text-align:center;">
        <li style="text-align:center;"><a href="add_student.php" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Student</a></li>
        <li style="text-align:center;"><a href="add_teacher.php" data-toggle="tooltip" title="Parent's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Teacher</a></li>
        <li style="text-align:center;"><a href="add_accounts.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Accounts</a></li>
         <li style="text-align:center;"  class="active"><a href="alumni.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">
<?php $id =intval( $_GET['id']);?>
<div class="col-lg-9">
<ol class="breadcrumb">
  <li><a href="Home.php">Home</a></li>
  <li><a href="alumni.php">Alumni</a></li>
  <li> Search Result</li>
  <li>Alumni information</li>
</ol>
	 <?php include('includes/dbconn.php');
	 		$query = mysql_query("SELECT * FROM tbl_alumni where id = '$id'") or die(mysql_error());
			while($row=mysql_fetch_array($query)){
				$id=$row['id'];
				?>
            <center>
<img src="getimage_allumni.php?id=<?php echo $row['id'];?>" class="img-rounded" width="300px;" height="250px;" />
<p style="font-size:16px; padding-top:3px; padding-bottom:inherit;"></p>
<a href="#myModal<?php echo $id;?>" role="button"  data-toggle="modal" data-target="#myModal<?php echo $id;?>"><button class="btn btn-primary">Update</button></a><?php include('update_alumni_user.php');?> &nbsp;


</center><hr />

      <table class="table table-responsive">
      <tr>
     <tr class="info">  <td style="text-align:center; width:auto;"><td  style="text-align:left"></td><td><strong >---Alumni Information---</strong></td></td></tr>
      <td style="text-align:center; width:auto;"><td style="text-align:left">Alumni Name:</td><td><strong><?php echo $row['name'];?></strong></td></td>
      <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">Birthday:</td><td><strong><?php echo $row['dob'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Year Graduated:</td><td><strong><?php echo $row['yeargrad'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Email:</td><td><strong><?php echo $row['achievements'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Contact:</td><td><strong><?php echo $row['motto'];}?></strong></td></td></tr>   
      </tr>
      
      
      
      </table>
      </div>
      </div> </div> </div>

 
    

   <?php }?> 
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
<?php include('includes/footer.php');?>
</body>
</html>