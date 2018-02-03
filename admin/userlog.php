<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username'])&& !isset($_SESSION['password']) && !isset($_SESSION['usertype'])=='Admin'){
	echo'<script>
	window.alert("Login to access admin!");
	window.location.assign="logout_process.php";</script>';
	}else if($_SESSION['usertype']=='User'){
		echo'<script>window.alert("Warning Your Not an Administrator. Failed Accessing This Page");
					 window.location="logout_process.php"</script>';
		
		}
	else{
include('includes/header.php');?>

<body>
	<div class="container">
 <div class="row">
      <div class="col-lg-2">
      	<div class="panel panel-info">
        <div class="panel-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</div>
        <div class="panel-body">
        <ul class="nav nav-pills nav stacked" style="list-style-type:none; text-align:center;">
        <li style="text-align:left;"><a href="add_student.php" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Student</a></li>
        <li style="text-align:left;"><a href="add_teacher.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Teacher</a></li>
        <li style="text-align:center;">
        <?php include('includes/dbconn.php');
		$new = 'new';
			$q = mysql_query("SELECT COUNT(usertype) as new from tbl_users where usertype='$new'") or die(mysql_error());
			while($row=mysql_fetch_array($q)){
		?>
        <a href="add_accounts.php" data-toggle="tooltip" title="Check new Account Request" data-placement="right">Accounts <span class="badge"> <?php echo $row['new'];}?></span></a></li>
        <li style="text-align:center;"><a href="alumni.php" data-toggle="tooltip" title="Alumni Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
         <li style="text-align:left;"><a href="userlog.php" data-toggle="tooltip" title="Back up Database" data-placement="right"><span class="glyphicon glyphicon-hourglass"></span>&nbsp;User Logs</a></li>
         <li style="text-align:left;"><a href="backup.php" data-toggle="tooltip" title="Back up Database" data-placement="right"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;Back-up Database</a></li>
         <li style="text-align:center;"><a href="restore.php" data-toggle="tooltip" title="Restore Database" data-placement="right"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Restore</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">

  <div class="content-loader">
 <div class="col-lg-9">
  		<p style="font-size: 16px;"><strong>List of Users log(s)&nbsp;| &nbsp;<span class="badge" data-toggle="tooltip" title="Total no.of Users logs" data-placement="right"> <?php include('includes/dbconn.php');$sql = mysql_query("SELECT COUNT(*) as total FROM tbl_userlog") or die(mysql_error());
  		while($row = mysql_fetch_array($sql)){
  ?><?php echo $row['total'];}?>
  </span><center><button class="btn btn-danger" data-toggle="modal" data-target="#modalUserlog"><span class="glyphicon glyphicon-remove"></span>Delete Userlog</button></center><p></p>
  <?php include('delete_userlog.php');?>
  </strong></p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
        
        <th style="text-align:center; width:auto;">Account Name</th>
        <th style="text-align:center; width:auto;">Account type</th>
        <th style="text-align:center; width:auto;">Date and Time Log-in</th>
       
     
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'includes/dbconn.php';
        
       $query = mysql_query("Select * from tbl_userlog") or die(mysql_error());
       $ctr =0;
	   while($row=mysql_fetch_array($query)){
      $ctr++;
			?>
			<tr class="danger">
        
            <td style="text-align:center; width:auto;"><?php echo $row['account_name']; ?></td>

			<td style="text-align:center; width:auto;"><?php echo $row['usertype']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['timestamp']; $ctr-1;?></td>
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