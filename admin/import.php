<?PHP
include('includes/dbconn.php');
$g = mysql_real_escape_string($_POST['grade']);
$sec =mysql_real_escape_string($_POST['section']);

$query ="SELECT * from tbl_student where grade='$g' and section='$sec'" or die (mysql_error());
$sql = mysql_query($query);
if($sql){
	echo'<script>window.alert("Importing...");
				 </script>';
	
 
?>	 
<table>
<tr>
<th style="text-align:center; width:auto;">Student no</th>
<th style="text-align:center; width:auto;">Student name</th>
<th style="text-align:center; width:auto;">Grade</th>
<th style="text-align:center; width:auto;">Section</th>
 <?php while($data = mysql_fetch_array($sql)){?>
<tr>
<td style="text-align:center; width:auto;"><?php echo $data['stno'];?></td>
<td style="text-align:center; width:auto;"><?php echo $data['name'].'&nbsp;'.$data['mname'].'&nbsp;'.$data['lname'];?></td>
<td style="text-align:center; width:auto;"><?php echo $data['grade'];?></td>
<td style="text-align:center; width:auto;"><?php echo $data['section'];}?></td>

</tr>
</tr>

</table>	  
	  
 <?php 

  function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  $filename = "RCS"." ".$g." Section "." ".$sec." " .date('Y-m-d')." ".".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");

  $flag = false;
  
  exit;} else{
		echo'<script>window.alert("Error Importing Data!");
					 window.location="add_student.php"
						</script>'; }
?>