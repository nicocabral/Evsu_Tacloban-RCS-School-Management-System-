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
include('includes/header.php')

;?>

<body>
	<div class="container">
<div class="row">
<ol class="breadcrumb">
  <li><a href="Home.php">Home</a></li>
  <li>Add Accounts</a></li>
</ol>
	 <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp; Add Account</button>  <?php include('add_account_proces.php');?>
     <?php $u_id = @$_SESSION['userid'];?>
    
        <hr />
       
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>Accouts Information</strong></p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">

        <th style="text-align:center; width:auto;">Name</th>
        <th style="text-align:center; width:auto;">Username</th>
        <th style="text-align:center; width:auto;">Password</th>
        <th style="text-align:center; width:auto;">User type</th>
        <th style="text-align:center; width:auto;">Action</th>
     
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'includes/dbconn.php';
        $ctr = 0;
        $sql = mysql_query("SELECT * FROM tbl_users") or die (mysql_error());
		while($row=mysql_fetch_array($sql))
		{ $account_id = $row['userid'];
		  $name =$row['name'];
			$ctr++;
      ?>
			<tr class="warning">

            <td style="text-align:center; width:auto;"><?php echo $row['name']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['username']; ?></td>
            <td style="text-align:center; width:auto;">****************************</td>
			<td style="text-align:center; width:auto;"><?php echo $row['usertype']; ?></td>
			
			<td style="text-align:center; width:auto;">
			<a href="#edit_account<?php echo $account_id;?>" role="button"  data-toggle="modal" data-target="#edit_account<?php echo $account_id;?>"><button class="btn btn-primary glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit Account?" ></button></a> 
            
            &nbsp;| &nbsp; <a href="#delete_account<?php echo $account_id;?>" role="button"  data-toggle="modal" data-target="#delete_account<?php echo $account_id;?>"><button class="btn btn-danger glyphicon glyphicon-remove" data-toggle="tooltip" title="Deactivate Account?"></button></a> <?php  include('delete_account.php');?>
        	
             </td>
             <?php  include('edit_account_process.php');?>
             
			</tr>
			<?php
		$ctr-1;}}
		?>
        </tbody>
        </table>
        
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