<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php session_start(); 
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo'<script>
	window.alert("Login to access admin!");
	window.location="../index.php";</script>';
	}else
if ($_SESSION['usertype']=='User'){
		echo '<script>window.alert("Warning Your Not an Administrator. Failed Accessing This Page.");
		 window.location="logout_process.php";</script>'; 
		
		}else{
include('includes/header.php');?>
<body>
	<div class="container">
 <div class="row">
      <div class="col-lg-2">
      	<div class="panel panel-info">
        <div class="panel-heading"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</div>
        <div class="panel-body">
        <ul class="nav nav-pills nav stacked" style="list-style-type:none; text-align:center;">
        <li style="text-align:center;" class="active"><a href="#" data-toggle="tooltip" title="Student's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Student</a></li>
        <li style="text-align:center;"><a href="add_teacher.php" data-toggle="tooltip" title="Parent's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Teacher</a></li>
        <li style="text-align:center;"><a href="add_accounts.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-user"></span>&nbsp;Accounts</a></li>
        <li style="text-align:center;"><a href="alumni.php" data-toggle="tooltip" title="Teacher's Record" data-placement="right"><span class="glyphicon glyphicon-star"></span>&nbsp;Alumni</a></li>
        </ul>
        </div>
        </div>
        </div>
<div class="row">

<div class="col-lg-9">
<ol class="breadcrumb">
  <li><a href="Home.php">Home</a></li>
  <li>Student</a></li>
</ol>
	 <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp; Add Student</button> <?php include('add_student_process.php');
			  ?>
     <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModalsearch"> <span class="glyphicon glyphicon-search"></span> &nbsp; Search </button><?php include('search_process.php');?>
      <?php /*?><a href="grade_process_input.php" role="button" class="btn btn-info"><span class="glyphicon glyphicon-eye-open"></span>&nbsp;View Grades</a><?php */?>
      <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalPrint"><span class="glyphicon glyphicon-print"></span> &nbsp;Print Student</button><?php include('grade_print.php');?>
      
       <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalParent"><span class="glyphicon glyphicon-search" data-toggle="tooltip" title="Search Mother/Guardian Occupation" ></span> &nbsp;Mother</button><?php include('parent.php');?>
       <a href="fatherinfo.php" class="btn btn-info" type="button" data-toggle="tooltip" title="Click to View All Father/Guardian Information"><span class="glyphicon glyphicon-search"></span> &nbsp;Father</a>
       <button class="btn btn-info" type="button" data-toggle="modal" data-target="#modalExcel"><span class="glyphicon glyphicon-search" data-toggle="tooltip" title="Search Mother/Guardian Occupation" ></span> &nbsp;Export to excel</button><?php include('importexcel.php');?>
        <hr /> 
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>List of all student(s)</strong></p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
         <th style="text-align:center; width:auto;">Student no</th>
        <th style="text-align:center; width:auto;">Name of Student</th>
        <th style="text-align:center; width:auto;">Grade</th>
        <th style="text-align:center; width:auto;">Section</th>
        <th style="text-align:center; width:auto;">Image</th>
        <th style="text-align:center; width:auto;">Update</th>
     
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'includes/dbconn.php';
		$q = mysql_query("SELECT * from tbl_student") or die(mysql_error());
		if($q){
			while($row=mysql_fetch_array($q))
        
      
		{
			?>
			<tr class="warning">
            <td style="text-align:center; width:auto;"><?php echo $row['stno']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['name'].'&nbsp;'.$row['mname'].'&nbsp;'.$row['lname']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['grade']; ?></td>
			<td style="text-align:center; width:auto;"><?php echo $row['section']; ?></td>
			<td style="text-align:center; width:auto;"><img src="get_image_candidate.php?id=<?php echo $row['id'];?>" class="img-rounded" width="50px;" height="40px;" /></td>
			<td style="text-align:center; width:auto;">
			<a href="student_info.php?id=<?php echo $row['id']; ?>" title="View info?" data-toggle="tooltip"><span class="glyphicon glyphicon-eye-open"></span></a>
        	
             </td>
			</tr>
			<?php
		}}}
		?>
        </tbody>
        </table>
        
        </div>

    </div>
      
      </div>
      </div>

    </div>
    

    
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/datatables.min.js"></script>
<script type="text/javascript" src="crud.js"></script>

<script type="text/javascript" charset="utf-8">
$(document).ready(function() {
	$('#example').DataTable();

	$('#example')
	.removeClass( 'display' )
	.addClass('table table-bordered');
});
</script>
<?php include('includes/footer.php');?>
</body>
</html>