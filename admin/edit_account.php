<?php include('includes/dbconn.php');
$id = mysql_real_escape_string($_POST['id']);
$name =mysql_real_escape_string($_POST['name']);
$uname = mysql_real_escape_string($_POST['uname']);
$pass =mysql_real_escape_string($_POST['pword']);
$utype =mysql_real_escape_string($_POST['utype']);
$query = mysql_query("UPDATE tbl_users SET usertype = '$utype',
											username = '$uname',
											password = '$pass',
											name = '$name'
											WHERE userid = '$id'") or die (mysql_error());
if($query){
	echo'<script>window.alert("Account Updated!");
				 window.location = "add_accounts.php"</script>';
	
	}else {
		echo'<script>window.alert("Failed Upadating Account!");
					 window.location= "add_accounts.php"</script>';
		}

?>