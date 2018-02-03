<?php 
include('includes/dbconn.php');
	$stno = mysql_real_escape_string($_POST['st_no']);
	$name =mysql_real_escape_string($_POST['full_name']);
	$gands = mysql_real_escape_string($_POST['gands']);
	$sec =mysql_real_escape_string($_POST['sec']);
	$grade_a = mysql_real_escape_string($_POST['grade_a']);
	$grade_b = mysql_real_escape_string($_POST['grade_b']);
	$grade_c = mysql_real_escape_string($_POST['grade_c']);
	$grade_d = mysql_real_escape_string($_POST['grade_d']);
	$final = ($grade_a + $grade_b + $grade_c + $grade_d)/4;
	if($final<=74)
	$remarks = 'Failed';
	else if($final>=75)
	$remarks = 'Passed';
	$q = mysql_query("UPDATE tbl_grade SET 
										   name = '$name',
										   grade = '$gands',
										   sec = '$sec',
										   grade_a = '$grade_a',
										   grade_b = '$grade_b',
										   grade_c = '$grade_c',
										   grade4_d = '$grade_d',
										   final_grade = '$final',
										   remarks ='$remarks' WHERE stno ='$stno' ") or die (mysql_error());
	if ($q){
		echo'<script>window.alert("Data Updated Successfully!");
					window.location = "grade_process_input.php";</script>';
		
		}else{
			echo '<script>window.alert("Failed Updating Data try again!");
						  window.location="grade_process_input.php"</script>';
			}



?>