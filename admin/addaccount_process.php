 <?php include ('includes/dbconn.php');

	include('includes/dbconn.php');
	//$tno = mysql_real_escape_string($_POST['tno']);
	$name = mysql_real_escape_string( $_POST["name"] );
	$uname = mysql_real_escape_string( $_POST["uname"] );
	$pword = mysql_real_escape_string( $_POST["pword"] );
	$utype = mysql_real_escape_string( $_POST["utype"]);
		
	$sql = "INSERT INTO tbl_users VALUES(NULL,'$utype','$uname','$pword','$name')" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Account has been added!')
					window.location.href='add_accounts.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to add new Account!')
					window.location.href='add_accounts.php';
				</script>";
		}
                            ?>