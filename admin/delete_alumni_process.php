<?php
include('includes/dbconn.php');

$get_id=intval($_GET['id']);

$del = mysql_query("delete from tbl_alumni where id='$get_id'")or die(mysql_error());
if($del){
	echo'<script>window.alert("Deleted Successfully!");
				 window.location="alumni.php";</script>';
					
	} else {
		echo'<script>window.alert("Failed unable to deleted record!");
					 widow.location="alumni.php";</script>';
		}
?>
