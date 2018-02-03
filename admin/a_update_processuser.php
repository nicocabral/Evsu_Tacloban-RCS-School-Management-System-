<?php include('includes/dbconn.php');
$id = mysql_real_escape_string($_POST['id']);
$h = mysql_real_escape_string($_POST['heading']);
$des= mysql_real_escape_string($_POST['desc']);
$stat = 'new';

$sql =mysql_query("UPDATE tbl_announcement SET name = '$h',
											   description = '$des',
											   status = '$stat'
											   WHERE id = '$id'
											   ") or die (mysql_error());
if($sql){
	echo'<script>window.alert("Announcement Updated!");
				window.location="announcementuser.php"</script>';
	}else {
		echo'<script>window.alert("Failed Updating Announcement!")
					window.location="announcementuser.php"</script>';
		}
?>