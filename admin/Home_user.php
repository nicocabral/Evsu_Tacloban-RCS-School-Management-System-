<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username'])&& !isset($_SESSION['password']) && !isset($_SESSION['usertype'])=='User'){
	echo'<script>
	window.alert("Login to access admin!");
	window.location.assign="logout_process.php";</script>';
	} else if ($_SESSION['usertype']=='Admin'){
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
        <li style="text-align:left;"><a href="add_student_user.php" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Student</a></li>
      
        
        <li style="text-align:center;"><a href="alumniuser.php" data-toggle="tooltip" title="Alumni Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
        
        </ul>
        </div>
        </div>
        </div>
<div class="row">

  <div class="content-loader">
 <div class="col-lg-9">
  		<p style="font-size: 16px;"><strong>List of all student(s)&nbsp;| &nbsp;<span class="badge" data-toggle="tooltip" title="Total no.of student" data-placement="right"> <?php include('includes/dbconn.php');$sql = mysql_query("SELECT COUNT(*) as total FROM tbl_student") or die(mysql_error());
  		while($row = mysql_fetch_array($sql)){
  ?><?php echo $row['total'];}?></span></strong></p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
        
        <th style="text-align:center; width:auto;">Student no.</th>
        <th style="text-align:center; width:auto;">Name of Student</th>
        <th style="text-align:center; width:auto;">Year</th>
        <th style="text-align:center; width:auto;">Section</th>
        <th style="text-align:center; width:auto;">Image</th>
       
     
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'includes/dbconn.php';
        
       $query = mysql_query("Select * from tbl_student") or die(mysql_error());
	   while($row=mysql_fetch_array($query)){
			?>
			<tr class="danger">
           
            <td style="text-align:center; width:auto;"><?php echo $row['stno']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['name'].'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['grade']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['section']; ?></td>
			<td style="text-align:center; width:auto;"><img src="get_image_candidate.php?id=<?php echo $row['id'];?>" class="img-rounded" width="50px;" height="40px;" /></td>
			
			</tr>
			<?php
		}}
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