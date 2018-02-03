<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
include('includes/header_user.php');?>

<body>
	<div class="container">
<div class="row">
<?php $id =intval( $_GET['id']);?>
<div class="col-lg-12">
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li><a href="alumni_user.php">Alumni</a></li>
  <li>Search Result</li>
  <li>Alumni information</li>
</ol>
	 <?php include('includes/dbconn.php');
	 		$query = mysql_query("SELECT * FROM tbl_alumni where id = '$id'") or die(mysql_error());
			while($row=mysql_fetch_array($query)){
				$id=$row['id'];
				?>
            <center>
<img src="getimage_allumni.php?id=<?php echo $row['id'];?>" class="img-rounded" width="300px;" height="250px;" />
</center><hr />

      <table class="table table-responsive">
      <tr>
     <tr class="info">  <td style="text-align:center; width:auto;"><td  style="text-align:left"></td><td><strong >---Alumni Information---</strong></td></td></tr>
      <td style="text-align:center; width:auto;"><td style="text-align:left">Alumni Name:</td><td><strong><?php echo $row['name'];?></strong></td></td>
      <tr><td style="text-align:center; width:auto;"><td  style="text-align:left">Birthday:</td><td><strong><?php echo $row['dob'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Year Graduated:</td><td><strong><?php echo $row['yeargrad'];?></strong></td></td></tr>
    <tr>  <td style="text-align:center; width:auto;"><td  style="text-align:left">Email:</td><td><strong><?php echo $row['achievements'];}?></strong></td></td></tr>
    
      </tr>
      
      
      
      </table>
      </div>
      </div></div> 

 
    

   <?php ?> 
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