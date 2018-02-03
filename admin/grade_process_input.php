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
</ol>
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>List of all student(s)</strong></p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
        <th style="text-align:center; width:auto;">No.</th>
        <th style="text-align:center; width:auto;">Student No.</th>
        <th style="text-align:center; width:auto;">Name of Student</th>
        <th style="text-align:center; width:auto;">Grade and Section</th>
        <th style="text-align:center; width:auto;">1st Grading</th>
        <th style="text-align:center; width:auto;">2nd Grading</th>
        <th style="text-align:center; width:auto;">3rd Grading</th>
        <th style="text-align:center; width:auto;">4th Grading</th>
        <th style="text-align:center; width:auto;">Final Grade</th>
        <th style="text-align:center; width:auto;">Remarks</th>
        <th style="text-align:center; width:auto;">Action</th>
       
     
        </tr>
        </thead>
        <tbody>
        <?php
	
		//$section = mysql_real_escape_string($_POST['section']);
        require_once 'includes/dbconn.php';
       $query = mysql_query("Select * from tbl_grade") or die(mysql_error());
	   
	   while($row=mysql_fetch_array($query)){
		   $id = $row['id'];
			?>
			<tr class="danger">
            <td style="text-align:center; width:auto;"><?php echo $row['id']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['stno']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['name']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['grade'].'&nbsp;'.$row['sec'];; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['grade_a']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['grade_b']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['grade_c']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['grade4_d']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['final_grade']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['remarks']; ?></td>
			<td style="text-align:center; width:auto;"><a href="grade_update.php?id=<?php echo $id;?>" role="button"  data-toggle="tooltip" title="Update Grade info?"><span class="glyphicon glyphicon-eye-open"></span></a>&nbsp; | &nbsp;
            <a href="print.php?id=<?php echo $id;?>" data-toggle="tooltip" title="Print?"><span class="glyphicon glyphicon-print"></span></a>
            </td>
			</tr>
			<?php
		}}
		?>
        </tbody>
        </table>
        <p style="text-align:left; font-size:14px;">Issued by: <?php $_SESSION['name']?></p>
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