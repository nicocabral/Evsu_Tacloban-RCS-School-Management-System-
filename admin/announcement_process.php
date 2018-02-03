<?php include('includes/dbconn.php');

$h = mysql_real_escape_string($_POST['heading']);
$des = mysql_real_escape_string($_POST['desc']);
$stat ='new';
$sql = mysql_query("INSERT INTO tbl_announcement VALUES(NULL,'$h','$des','$stat')") or die(mysql_error());
if($sql){
	echo'<script>window.alert("Announcment added Succesfully!")
				 window.location="announcement.php"</script>';
	
	}
	else{
		echo'<script>window.alert("Failed Adding Announcement!");
					 window.location="announcement.php";</script>';
		}


?>
                