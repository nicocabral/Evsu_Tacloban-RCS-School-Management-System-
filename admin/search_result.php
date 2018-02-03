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
        <li style="text-align:center;"><a href="add_student.php" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Student</a></li>
        <li style="text-align:center;"><a href="add_teacher.php" data-toggle="tooltip" title="Parent's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Teacher</a></li>
        <li style="text-align:center;"><a href="add_accounts.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Accounts</a></li>
         <li style="text-align:center;"><a href="alumni.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">
<div class="col-lg-9">
<ol class="breadcrumb">
  <li><a href="Home.php">Home</a></li>
  <li><a href="add_student.php">Add Student</a></li>
  <li>Search Result</li>  
</ol>

  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>List of all student(s)</strong></p>
			
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
        <th style="text-align:center; width:auto;">Student No.</th>
        <th style="text-align:center; width:auto;">Name of Student</th>
    
        <th style="text-align:center; width:auto;">Grade</th>
        <th style="text-align:center; width:auto;">Section</th>
        <th style="text-align:center; width:auto;">Image</th>
        <th style="text-align:center; width:auto;">Status</th>
       
     
        </tr>
        </thead>
        <tbody>
        <?php
		$grade = mysql_real_escape_string($_POST['grade']);
		$section = mysql_real_escape_string($_POST['section']);
        require_once 'includes/dbconn.php';
       $query = mysql_query("Select * from tbl_student where grade = '$grade' and section = '$section'") or die(mysql_error());
	   if(!$query){
		   echo'<script>window.alert("No Data found!");</script>';
		   }else {
	   while($row=mysql_fetch_array($query)){
		   $id = $row['id'];
			?>
			<tr class="danger">
            
            <td style="text-align:center; width:auto;"><?php echo $row['stno']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['name'].'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname']; ?></td>
		
            <td style="text-align:center; width:auto;"><?php echo $row['grade']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['section']; ?></td>
			<td style="text-align:center; width:auto;"><img src="get_image_candidate.php?id=<?php echo $row['id'];?>" class="img-rounded" width="50px;" height="40px;" /></td>
			<td style="text-align:center; width:auto;"><?php echo  $row['status'];?> &nbsp;|&nbsp;<a href="#myModalgrade<?php echo $id;?>" role="button"  data-toggle="modal" data-target="#myModalgrade<?php echo $id;?>"><span class="glyphicon glyphicon-eye-open" data-toggle="tooltip" title="View Parent Info?"></span></a></td>
			</tr>
          
             <?php include('grade_process.php');
			 	   ?>
			<?php
		}}}
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