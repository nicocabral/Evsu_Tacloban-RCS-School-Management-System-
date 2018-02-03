<?php include('includes/dbconn.php');
$id = mysql_real_escape_string($_POST['id']);
$h = mysql_real_escape_string($_POST['heading']);
$des= mysql_real_escape_string($_POST['desc']);
$stat = 'new';

$sql =mysql_query("UPDATE tbl_activities SET heading = '$h',
											   description = '$des',
											   status = '$stat'
											   WHERE id = '$id'
											   ") or die (mysql_error());
if($sql){
	echo'<script>window.alert("Activity Updated!");
				window.location="activitiesuser.php"</script>';
	}else {
		echo'<script>window.alert("Failed Updating Activity!")
					window.location="activitiesuser.php"</script>';
		}
?>