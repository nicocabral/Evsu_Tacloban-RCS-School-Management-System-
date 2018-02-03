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
		
		}else{
include('includes/header1.php');?>

<body>
	<div class="container">
 <div class="row">
      <div class="col-lg-2">
      	<div class="panel panel-info">
        <div class="panel-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</div>
        <div class="panel-body">
        <ul class="nav nav-pills nav stacked" style="list-style-type:none; text-align:center;">
        <li style="text-align:center;" class="active"><a href="#" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Student</a></li>
         <li style="text-align:center;"><a href="alumniuser.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">
<?php $id =intval( $_GET['id']);?>
<div class="col-lg-9">
<ol class="breadcrumb">
  <li><a href="Home_user.php">Home</a></li>
  <li><a href="add_student_user.php">Add Student</a></li>
  <li>Student Info</li>
</ol>
	 <?php include('includes/dbconn.php');
	 		$query = mysql_query("SELECT * FROM tbl_student where id = '$id'") or die(mysql_error());
			while($row=mysql_fetch_array($query)){
				$id=$row['id'];
				?>
            <center>
<img src="get_image_candidate.php?id=<?php echo $row['id'];?>" width="300px;" height="250px;" />
<p style="font-size:16px; padding-top:3px; padding-bottom:inherit;">Student no : &nbsp;<?php echo $row['stno'];?></p>
<a href="#myModal<?php echo $id;?>" role="button"  data-toggle="modal" data-target="#myModal<?php echo $id;?>"><button class="btn btn-primary">Update Status</button></a><?php include('update_studentuser.php');?> &nbsp;


</center><hr />

      <table class="table table-responsive table-hover">
      <tr>
     <tr class="info">  <td style="text-align:center; width:auto;"><td  style="text-align:left"></td><td><strong >---Student Information---</strong></td></td></tr>
      <td style="text-align:center; width:auto;"><td style="text-align:left">Student name:</td><td><strong><?php echo $row['name'].'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname'];?></strong></td></td>
      <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">Date Of Birth:</td><td><strong><?php echo $row['dob'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Age:</td><td><strong><?php echo $row['age'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Grade:</td><td><strong><?php echo $row['grade'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Section:</td><td><strong><?php echo $row['section'];?></strong></td></td></tr>
     <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Status:</td><td><strong><?php echo $row['status'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Address:</td><td><strong><?php echo $row['address'];?></strong></td></td></tr>
    <!------------------------------------Parent--------------------------------------->
    <tr class="info">  <td style="text-align:center; width:auto;"><td  style="text-align:left"></td><td><strong >---Parent Information---</strong></td></td></tr>
     <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left"><strong >Mother Information</strong></td><td><strong>Details</strong></td></td></tr>
      <tr> <td style="text-align:center; width:auto;"><td  style="text-align:left">Mother Name:</td><td><strong> <?php echo $row['parent_name'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Age:</td><td><strong> <?php echo $row['age_parent'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Address:</td><td><strong> <?php echo $row['address'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Contact #:</td><td><strong> <?php echo $row['contact'];?></strong></td></td></tr>
       <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Occupation:</td><td><strong> <?php echo $row['occupation'];?></strong></td></td></tr>
      </tr>
     <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left"><strong >Father Information</strong></td><td><strong>Details</strong></td></td></tr>
      <tr> <td style="text-align:center; width:auto;"><td  style="text-align:left">father Name:</td><td><strong> <?php echo $row['father_name'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Age:</td><td><strong> <?php echo $row['f_age'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Address:</td><td><strong> <?php echo $row['f_add'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Contact #:</td><td><strong> <?php echo $row['f_con'];?></strong></td></td></tr>
       <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Occupation:</td><td><strong> <?php echo $row['f_occupation'];}?></strong></td></td></tr>
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