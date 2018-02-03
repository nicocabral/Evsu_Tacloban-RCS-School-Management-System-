					  
<?php include('includes/dbconn.php');

	$stno = mysql_real_escape_string($_POST['st_no']);
	$name =mysql_real_escape_string($_POST['full_name']);
	$gands = mysql_real_escape_string($_POST['gands']);
	$sec =mysql_real_escape_string($_POST['sec']);
	$grade_a = mysql_real_escape_string($_POST['ig_a']);
	$grade_b = mysql_real_escape_string($_POST['ig_b']);
	$grade_c = mysql_real_escape_string($_POST['ig_c']);
	$grade_d = mysql_real_escape_string($_POST['ig_d']);
	$final = ($grade_a + $grade_b + $grade_c + $grade_d)/4;
	if($final<74)
	$remarks = 'Failed';
	else if($final>=75)
	$remarks = 'Passed';
	$query = mysql_query("SELECT * FROM tbl_grade") or die (mysql_error());
	while($row=mysql_fetch_array($query)){
		if($stno == $row['stno']){
			echo'<script>window.alert("Warning Data already Exist in database try the Grade button in student page, Redirecting.....")
						 window.location="add_student.php"</script>';
			exit();
		}
	} 
		
		
	$q = mysql_query("INSERT INTO tbl_grade VALUES(NULL,'$stno','$name','$gands','$sec','$grade_a','$grade_b','$grade_c','$grade_d','$final','$remarks')") or die (mysql_error());
	if ($q){
		echo'<script>window.alert("Data Inserted Successfully!");
					window.location = "grade_process_input.php";</script>';
		
		}else{
			echo '<script>window.alert("Failed Inserting Data try again!");
						  window.location="search_result.php"</script>';
			}
			exit();
?>