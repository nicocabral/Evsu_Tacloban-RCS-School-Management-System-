
<?php
session_start();
include('dbconn.php');
	$uname = mysql_real_escape_string($_POST['uname']);
	$pass = mysql_real_escape_string($_POST['pass']);
	
		$result2 = mysql_query("SELECT * FROM tbl_users WHERE username = '$uname' AND password ='$pass'");
			if (mysql_num_rows($result2)==0){
				echo '<script>
					window.alert("Your not registered user!")
					window.location.href="../index.php";
				</script>';
				
			}else {
			
				 while ($row = mysql_fetch_array($result2))
					 {
						$_SESSION['usertype'] = $row['usertype'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					 }
				
					if($_SESSION['usertype']=='user' || $_SESSION['usertype']=='User'){
						echo'<script>window.alert("Welcome User!")
						window.location.href="../Home_user.php"</script>';}
					else if($_SESSION['usertype']=='new'){
						echo'<script>window.alert("Access Deny Your account has not bee approved!");
									window.location = "../../index.php"</script>';
						
						}
						else {
					echo '<script>window.location.href="../Home.php";</script>';}}
			
		mysql_close($con);
?>