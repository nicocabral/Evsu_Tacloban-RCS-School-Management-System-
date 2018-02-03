<?php
session_start();
include('dbconn.php');
	$uname = mysql_real_escape_string($_POST['uname']);
	$pass = mysql_real_escape_string($_POST['pass']);

		$result2 = mysql_query("SELECT * FROM tbl_users WHERE username = '$uname' AND password ='$pass'");
			if (mysql_num_rows($result2)>0){
			
				 while ($row = mysql_fetch_assoc($result2))
					 {
						$_SESSION['usertype'] = $row['usertype'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					 }
					 echo '<script>
					 	window.alert("Sucessfully Login!")
						window.location.href="../admin/Home.php";
					</script>'; 
			}else{
				
			echo '<script>
					window.alert("Your not registered user!")
					window.location.href="../index.php";
				</script>';
			}
		mysql_close($con);
?>