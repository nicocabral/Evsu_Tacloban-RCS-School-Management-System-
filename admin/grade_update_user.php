<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo'<script>
	window.alert("Login to access admin!");
	window.location="../index.php";</script>';
	}else{
include('includes/header.php');?>

<body>
	<div class="container">
 <div class="row">
      <div class="col-lg-2">
   
        </div>
<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
  <li><a href="Home.php">Home</a></li>
  <li><a href="add_student.php">Add Student</a></li>
  <li>Search Result</li>
  <li>Grade Result</li>
  <li>Update Grade</li>
</ol>
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>Update Grade Info</strong></p>

<div class="panel panel-info">
<div class="panel-heading"><center>***Fill up***</center></div>
<div class="panel-body">
<table class="table table-responsive table-striped table-hover">
<form method="post" action="grade_update_process_user.php">
<?php include('includes/dbconn.php');
$get_id = intval($_GET['id']);
$query=mysql_query("SELECT * FROM tbl_grade where id = '$get_id'") or die (mysql_error());
while($row=mysql_fetch_array($query)){
?>	

<tr class="info"> 
	  <td style="text-align:center; width:auto;"><td  style="text-align:left"></td><td><strong >---Grade Information---</strong></td></td></tr>
      
      <td style="text-align:center; width:auto;"><td style="text-align:left">Student name:</td><td><input type="text" name="full_name" class="form-control" value="<?php echo $row['name'];?>" readonly="readonly" /></td></td>
      <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">Student no:</td><td><input type="text" name="st_no" class="form-control" value="<?php echo $row['stno'];?>" readonly="readonly"></td></td></tr>
       <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">Grade and Section:</td><td><input type="text" name="gands" class="form-control" value="<?php echo $row['grade'];?>" readonly="readonly"></td></td></tr>
       <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">Grade and Section:</td><td><input type="text" name="sec" class="form-control" value="<?php echo $row['sec'];?>" readonly="readonly"></td></td></tr>
      <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">1st Grade:</td><td><input type="text" name="grade_a" class="form-control" value="<?php echo $row['grade_a'];?>" required /></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">2nd Grade:</td><td><input type="text" name="grade_b" class="form-control" value="<?php echo $row['grade_b'];?>" placeholder="If not yet computed just press space bar" required /></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">3rd Grade:</td><td><input type="text" name="grade_c" class="form-control" value="<?php echo $row['grade_c'];?>"  placeholder="If not yet computed just press space bar" required/></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">4th Grade:</td><td><input type="text" name="grade_d" class="form-control" value="<?php echo $row['grade4_d'];?>" placeholder="If not yet computed just press space bar" required /></td></td></tr>
      <tr> <td style="text-align:center; width:auto;"><td  style="text-align:left">Final Grade:</td><td><input type="text" name="final" class="form-control" value=" <?php echo $row['final_grade'];?> %" readonly="readonly" /></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Remarks:</td><td><input type="text" name="remarks" class="form-control" value="<?php echo $row['remarks'];}?>" readonly="readonly"/></td></td></tr>
      <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Remarks:</td><td><button type="submit" name="submit" class="btn btn-info" data-toggle="tooltip" title="Update?"> Update</button>
      <a href="grade_input_process.php"><button type="reset" name="cancel" class="btn btn-default" data-toggle="tooltip" title="Cancel?">Cancel</button></a></td></td></tr>
  
     </tr></form>
</table>



</div></div>





			<?php
		}
		?>
       
        
        </div>

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