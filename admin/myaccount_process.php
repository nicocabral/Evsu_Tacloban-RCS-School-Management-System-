 <?php include ('includes/dbconn.php');

	include('includes/dbconn.php');
	//$tno = mysql_real_escape_string($_POST['tno']);
	$name = mysql_real_escape_string( $_POST["name"] );
	$uname = mysql_real_escape_string( $_POST["uname"] );
	$pword = mysql_real_escape_string( $_POST["pword"] );
	$utype = mysql_real_escape_string( $_POST["utype"]);
	$u_id = mysql_real_escape_string($_POST['id']);	
	$sql = "UPDATE tbl_users SET usertype ='$utype',
								 username = '$uname',
								 password = '$pword',
								 name = '$name'
								 where userid = '$u_id'" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Account has been updated!')
					window.location.href='add_accounts.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to add update Account!')
					window.location.href='add_accounts.php';
				</script>";
		}
                            ?>