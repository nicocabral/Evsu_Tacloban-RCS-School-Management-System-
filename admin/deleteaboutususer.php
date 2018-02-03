<?php
include('includes/dbconn.php');

$get_id=intval($_GET['id']);

$del = mysql_query("delete from tbl_aboutus where id='$get_id'")or die(mysql_error());
if($del){
	echo'<script>window.alert("Deleted Successfully!");
				 window.location="aboutuser.php";</script>';
					
	} else {
		echo'<script>window.alert("Failed unable to deleted record!");
					 widow.location="aboutsuser.php";</script>';
		}
?>
