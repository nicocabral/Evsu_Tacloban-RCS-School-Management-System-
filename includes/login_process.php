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
			
				 while ($row = mysql_fetch_assoc($result2))
					 {
						$_SESSION['usertype'] = $row['usertype'];
						$_SESSION['username'] = $row['username'];
						$_SESSION['password'] = $row['password'];
						$_SESSION['name'] = $row['name'];
					 }
					
					if($_SESSION['usertype']=='user' || $_SESSION['usertype']=='User'){
						 $account_name = $_SESSION['name'];
							$account_type = $_SESSION['usertype'];
							$sql = mysql_query("INSERT INTO tbl_userlog VALUES(NULL,'$account_name','$account_type',NULL)") or die(mysql_error());
					
						echo'<script>window.alert("Welcome User!")
						window.location.href="../admin/Home_user.php"</script>';
					}
					else if($_SESSION['usertype']=='new'){
						echo'<script>window.alert("Access Deny Your account has not been approved!");
									window.location = "../admin/logout_process.php"</script>';
						
						}
						else {
 $account_name = $_SESSION['name'];
							$account_type = $_SESSION['usertype'];
							$sql = mysql_query("INSERT INTO tbl_userlog VALUES(NULL,'$account_name','$account_type',NULL)") or die(mysql_error());
					
					echo '<script>
					window.alert("Login Successfully!...");
					window.location.href="../admin/Home.php";</script>';
				}

				}
			
		mysql_close($con);
?>