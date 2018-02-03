<?php
include('includes/dbconn.php');

$get_id=$_GET['id'];

$del = mysql_query("delete from tbl_teacher where id='$get_id'")or die(mysql_error());
if($del){
	echo'<script>window.alert("Deleted Successfully!");
				 window.location="add_teacher.php";</script>';
					
	} else {
		echo'<script>window.alert("Failed unable to deleted record!");
					 widow.location="add_teacher.php";</script>';
		}
?>
