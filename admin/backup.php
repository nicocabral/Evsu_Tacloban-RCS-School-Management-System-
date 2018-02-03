<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username']) || !isset($_SESSION['password']) || !isset($_SESSION['usertype'])=='User'){
	echo'<script>
	window.alert("Login to access admin!");
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
        <li style="text-align:center;"><a href="add_student.php" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Student</a></li>
        <li style="text-align:center;"><a href="add_teacher.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Teacher</a></li>
        <li style="text-align:center;">
        <?php include('includes/dbconn.php');
		$new = 'new';
			$q = mysql_query("SELECT COUNT(usertype) as new from tbl_users where usertype='$new'") or die(mysql_error());
			while($row=mysql_fetch_array($q)){
		?>
        <a href="add_accounts.php" data-toggle="tooltip" title="Check new Account Request" data-placement="right">Accounts <span class="badge"> <?php echo $row['new'];}?></span></a></li>
         <li style="text-align:center;"><a href="alumni.php" data-toggle="tooltip" title="Alumni Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
         <li style="text-align:center;"class="active"><a href="backup.php" data-toggle="tooltip" title="Back up Database" data-placement="right"><span class="glyphicon glyphicon-download-alt"></span>&nbsp;Back-up Database</a></li>
         <li style="text-align:center;" ><a href="restore.php" data-toggle="tooltip" title="Restore Database" data-placement="right"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Restore</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">
<div class="col-lg-9">
  <div class="content-loader">
 
  		<p style="font-size: 16px;" data-toggle="tooltip" title="Back up Database"><img src="../images/ico/backup.png" width="40px;" />&nbsp;<strong>Back up Database&nbsp;| &nbsp;</strong></p>
 		 <div id="logMsg"></div>
                             <form name="import" id="frmBackup" enctype="multipart/form-data">
                                <label>Click back-up to Backup Database: 
                                <br><br />
                                <p>
                                    <input type="submit" class="btn btn-primary" name="backup" value="Backup" data-toggle="tooltip" title="Back up Database?">
                                </p>
                            </form>
                        </div>
        <?php
		}
		?>
        </div>

    </div>
      
      </div>
      </div>

    </div>
    
<?php include('includes/footer.php');?>
    
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