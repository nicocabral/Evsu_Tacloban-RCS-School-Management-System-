<?php
session_start();
include('dbconn.php');
	$uname = mysql_real_escape_string($_POST['username']);

	
		$result2 = mysql_query("SELECT * FROM tbl_users WHERE username = '$uname'");
			if (mysql_num_rows($result2)==0){
				echo '<script>
					window.alert("Username not exist in the database!")
					window.location.href="../index.php";
				</script>';
				
			}else {
			
				 while ($row = mysql_fetch_assoc($result2))
					 {	
					 	$_SESSION['userid'] = $row['userid'];
						$_SESSION['usertype'] = $row['usertype'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					 }
				
					if($_SESSION['usertype']=='user' || $_SESSION['usertype']=='User'){
						echo'<script>window.alert("Username Found, Redirecting..!")
						window.location.href="../forgotpassword.php"</script>';}
					else if($_SESSION['usertype']=='new'){
						echo'<script>window.alert("Access Deny Your account has not been approved!");
									window.location = "../includes/logout_process.php"</script>';
						
						}
						else {
					echo '<script>
					window.alert("Username Found!, Redirecting...");
					window.location.href="../forgotpassword.php";</script>';}}
			
		mysql_close($con);
?>
