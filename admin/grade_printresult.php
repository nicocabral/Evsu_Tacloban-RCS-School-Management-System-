<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo'<script>
	window.alert("Login to access admin!");
	window.location="../index.php";</script>';
	}else{
include('includes/header.php')

;?>
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
<?php $grades =@$_POST['grade']; $section = @$_POST['sec']; ?>
  <div class="content-loader">
  
  &emsp;  &emsp;  &emsp;<button data-toggle="tooltip" title="Print?" onclick="printContent('div1')" ><img src="images/ico/printer.ico" width="30px;" /></button>&emsp; &emsp;<a href="add_student.php" data-toggle="tooltip" title="Back?"class="btn btn-danger">Back</a>
  <br /><br />
  <div id="div1">
       <div class="panel panel-primary">
       <div class="panel-heading">Rizal Central School - Student Grades record in &nbsp;<strong><?php echo $grades.'&nbsp;-&nbsp;'.$section?>  </strong><p class="pull-right">As of &nbsp;<?php echo date('m-d-Y');?></p></div>
      	<div class="panel-body">

<div class="row">
<div class="col-lg-12">
<table class="table table-responsive table-striped table-bordered">
<tr class="primary">

<td style="text-align:center; width:auto;">Student no</td>
<td style="text-align:center; width:auto;">Name</td>
<td style="text-align:center; width:auto;">Grade and Section</td>
<td style="text-align:center; width:auto;">Status</td>

</tr>
<?php include('includes/dbconn.php');
	$g = mysql_real_escape_string($_POST['grade']);
	$sec = mysql_real_escape_string($_POST['sec']);
	$g_s =$g.'&nbsp;'.$sec;

	$q = mysql_query("SELECT * FROM tbl_student where grade = '$g' AND section ='$sec'") or die (mysql_error());
	if(mysql_num_rows($q) > 0)
	{
		
		while($row=mysql_fetch_array($q))
		{	
		
		?>
        <tr class="danger">

<td style="text-align:center; width:auto;"><?php echo $row['stno'];?></td>
<td style="text-align:center; width:auto;"><?php echo $row['name'];?></td>
<td style="text-align:center; width:auto;"><?php echo $row['grade'].'&nbsp;'.$row['section'];?></td>
<td style="text-align:center; width:auto;"><?php echo $row['status']; };?></td>
        
        </tr>
<?php
	}else
	{
		?>
        <div class="col-xs-12">
        	<div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; No Data Found ...
            </div>
        </div>
        <?php
	} 
	
?>

</table>
</div>
</div>	
       	<?php
		}
		?> 
    <p style="text-align:left;"> Isseud by: &nbsp;<strong><?php echo $_SESSION['name']?></strong></p>
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