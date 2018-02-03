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
	<div class="container">
 <div class="row">
      <div class="col-lg-2">
      	<div class="panel panel-info">
        <div class="panel-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</div>
        <div class="panel-body">
        <ul class="nav nav-pills nav stacked" style="list-style-type:none; text-align:center;">
        <li style="text-align:center;"><a href="#" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Student</a></li>
        <li style="text-align:center;"  class="active"><a href="#" data-toggle="tooltip" title="Parent's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Teacher</a></li>
        <li style="text-align:center;"><a href="add_accounts.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Accounts</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">
<?php $id =intval( $_GET['id']);?>
<div class="col-lg-9">
<ol class="breadcrumb">
  <li><a href="Home.php">Home</a></li>
  <li><a href="add_teacher.php">Teacher</a></li>
  <li>Student Info</li>


</ol>
<button data-toggle="tooltip" title="Print?" onclick="printContent('div1')" ><img src="images/ico/printer.ico" width="30px;" /></button>
<a href="#myModal<?php echo $id;?>" role="button"  data-toggle="modal" data-target="#myModal<?php echo $id;?>"><button class="btn btn-primary">Update</button></a>&nbsp;

	 <div id="div1">
   <?php include('includes/dbconn.php');
	 		$query = mysql_query("SELECT id,teacher_id,name,age,designation,address,contact,pra,dar,pdc_spec,pdc,bdc,specialization,dob,status,work_status ,dp,year(curDate()) - year(dar) as new FROM tbl_teacher where id = '$id'") or die(mysql_error());
			while($row=mysql_fetch_array($query)){
				$id=$row['id'];
				?>
 
            <center>
<img src="getimage_teacher.php?id=<?php echo $row['id'];?>" class="img-rounded" width="300px;" height="250px;" />
<p style="font-size:16px; padding-top:3px; padding-bottom:inherit;">Teacher ID no : &nbsp;<?php echo $row['teacher_id'];?></p>
<?php include('update_teacher.php');?> 

</center><hr />

      <table class="table table-responsive table-hover">
      <tr>
     <tr class="info">  <td style="text-align:center; width:auto;"><td  style="text-align:left"><strong >Rizal Central School Tacloban City</strong><td><strong >Teacher Information</strong></td></td></tr>
      <td style="text-align:center; width:auto;"><td style="text-align:left">Teacher name:</td><td><strong><?php echo $row['name'];?></strong></td></td>
      <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">Designation:</td><td><strong><?php echo $row['designation'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Address:</td><td><strong><?php echo $row['address'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Contact:</td><td><strong><?php echo $row['contact'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Previous School Assigned:</td><td><strong><?php echo $row['pra'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Date Assigned in Rizal:</td><td><strong><?php echo $row['dar'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Years of Teaching:</td><td><strong><?php echo $row['new'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Date Promoted:</td><td><strong><?php echo $row['dp'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Bachelor Degree Course:</td><td><strong><?php echo $row['bdc'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Specialization:</td><td><strong><?php echo $row['specialization'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Post Degree Course:</td><td><strong><?php echo $row['pdc'];?></strong></td></td></tr>
      <tr> <td style="text-align:center; width:auto;"><td  style="text-align:left">Specialization:</td><td><strong> <?php echo $row['pdc_spec'];?></strong></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Birthday:</td><td><strong ><?php echo $row['dob'];?></strong></td></td></tr>

       <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Status:</td><td><strong> <?php echo $row['status'];?></strong></td></td></tr>
       <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Work Status:</td><td><strong> <?php echo $row['work_status'];}?></strong></td></td></tr>
      </tr>
      
      
      
      </table>
      </div>
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
</body>
</html>