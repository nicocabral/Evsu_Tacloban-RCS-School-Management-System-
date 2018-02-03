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
include('includes/header1.php');?>

<body>
	<div class="container">
 <div class="row">
      <div class="col-lg-2">
      	<div class="panel panel-info">
        <div class="panel-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</div>
        <div class="panel-body">
        <ul class="nav nav-pills nav stacked" style="list-style-type:none; text-align:center;">
        <li style="text-align:center;"><a href="add_student_user.php" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Student</a></li>
        
         <li style="text-align:center;"><a href="alumniuser.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">
<div class="col-lg-9">
<ol class="breadcrumb">
  <li><a href="Home_user.php">Home</a></li>
  <li><a href="add_student_user.php">Student</a></li>
  <li>Search Result</li>
</ol>
<?php include('includes/dbconn.php');
$occu = mysql_real_escape_string($_POST['occupation']);
$sql=mysql_query("SELECT COUNT(parent_name) as total from tbl_student where occupation='$occu'") or die(mysql_error());
while($row=mysql_fetch_array($sql)){
?>
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>List of All Mother Guardian(s)</strong><span class="badge" data-toggle="tooltip" title="Total"><?php echo $row['total'];}?></span></p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
       
        <th style="text-align:center; width:auto;">Parent Name</th>
        <th style="text-align:center; width:auto;">Address</th>
        <th style="text-align:center; width:auto;">Contact#</th>
        <th style="text-align:center; width:auto;">Age</th>
        <th style="text-align:center; width:auto;">Occupation</th>
        <th style="text-align:center; width:auto;">Mother/Guardian Of</th>
        
       
     
        </tr>
        </thead>
        <tbody>
        <?php
		$occu = mysql_real_escape_string($_POST['occupation']);
        require_once 'includes/dbconn.php';
       $query = mysql_query("Select * from tbl_student where occupation = '$occu'  GROUP BY parent_name ") or die(mysql_error());
	   if(!$query){
		   echo'<script>window.alert("No Data found!");</script>';
		   }
      
       else {
         $ctr =0;
	   while($row=mysql_fetch_array($query)){
		   $id = $row['id'];
			$ctr++;
      ?>
			<tr class="danger">
           
            <td style="text-align:center; width:auto;"><?php echo $row['parent_name']; ?></td>
			      <td style="text-align:center; width:auto;"><?php echo $row['address']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['contact']; ?></td>   
			<td style="text-align:center; width:auto;"><?php echo $row['age_parent']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['occupation'];?></td>
      <td style="text-align:center; width:auto;"><?php echo $row['name'].'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname'];?></td>
			
			</tr>
			<?php
		$ctr-1;}}}
		?>
        </tbody>
       
        </table>
        
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
<?php include('includes/footer.php');?>
</body>
</html>