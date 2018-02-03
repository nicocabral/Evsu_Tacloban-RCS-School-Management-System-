<?php include('includes/dbconn.php');

$mission= mysql_real_escape_string($_POST['heading']);
$vission = mysql_real_escape_string($_POST['desc']);
$stat ='new';
$sql = mysql_query("INSERT INTO tbl_aboutus VALUES(NULL,'$mission','$vission','$stat')") or die(mysql_error());
if($sql){
	echo'<script>window.alert("About us added Succesfully!")
				 window.location="aboutuser.php"</script>';
	
	}
	else{
		echo'<script>window.alert("Failed Adding About us!");
					 window.location="aboutuser.php";</script>';
		}


?>
                