<?php include('includes/dbconn.php');
$id = mysql_real_escape_string($_POST['id']);
$mission = mysql_real_escape_string($_POST['heading']);
$vission= mysql_real_escape_string($_POST['desc']);
$stat = 'new';

$sql =mysql_query("UPDATE tbl_aboutus SET mission = '$mission',
											   vission= '$vission',
											   status = '$stat'
											   WHERE id = '$id'
											   ") or die (mysql_error());
if($sql){
	echo'<script>window.alert("About us Updated!");
				window.location="about.php"</script>';
	}else {
		echo'<script>window.alert("Failed Updating About us!")
					window.location="about.php"</script>';
		}
?>