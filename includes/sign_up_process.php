<?php
session_start();
include('dbconn.php');
	$name = mysql_real_escape_string($_POST['name']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$pass = mysql_real_escape_string($_POST['pass']);
	$utype ='new';
	$sql = mysql_query("SELECT * FROM tbl_users") or die(mysql_error());
		while($row=mysql_fetch_array($sql)){
			$availuname = $row['username'];
			$availpass = $row['password'];
			}
			if ($availuname==$uname && $availpass==$pass){
				echo'<script>window.alert("Username or Password Not available!")
							 window.location="../index.php"</script>';
				}else{

		$result2 = mysql_query("INSERT INTO tbl_users VALUES(NULL,'$utype','$uname','$pass','$name')") or die (mysql_error());
			if($result2){
				echo'<script>window.alert("Sign up succesfully! Your Account Needs Approval by the administrator to login");
							 window.location="../index.php"</script>';
			}		else{
				echo'<script>window.alert("Failed Request Account!")
							 window.location="../index.php"</script>';
				}}
		mysql_close($con);
?>