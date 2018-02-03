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
<ol class="breadcrumb">
  <li><a href="Home.php">Home</a></li>
  <li>Add Teacher</a></li>
  <li></li>
</ol>
	 <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModal"> <span class="glyphicon glyphicon-plus-sign"></span> &nbsp; Add Teacher</button><br />
     <?php include('includes/dbconn.php');
$new =mysql_query("SELECT teacher_id,name,contact, year(curDate())-year(dp) as p from tbl_teacher") or die(mysql_error());
while($row=mysql_fetch_array($new)){
	$namep='Ready for Promotion'.'&nbsp;'.$row['name'].'&nbsp;Contact: '.$row['contact'].'&nbsp; Years of Teachig: '.$row['p'];
	if($row['p']<3){
		echo $namep='';
		}else{
	
	echo '<table><tr><strong>'.$namep.'</strong></tr> </table>';
	}}
	?>
   

        
        <hr />
        <?php include('add_teacher_process.php');
			  ?>
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>Teacher Information(s)</strong></p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
         <th style="text-align:center; width:auto;">Teacher ID no</th>
        <th style="text-align:center; width:auto;">Name of Teacher</th>
        <th style="text-align:center; width:auto;">Address</th>
        <th style="text-align:center; width:auto;">Contact</th>
        <th style="text-align:center; width:auto;">Designation</th>
        <th style="text-align:center; width:auto;">Date Assigned in Rizal</th>
        <th style="text-align:center; width:auto;">Years of Teaching</th>
        <th style="text-align:center; width:auto;">Image</th>
        <th style="text-align:center; width:auto;">Action</th>
     
        </tr>
        </thead>
        <tbody>
        <?php
        include( 'includes/dbconn.php');
        $query = mysql_query("SELECT id,teacher_id,name,address,contact,designation,dar,year(curDate()) - year(	dar) as promo from tbl_teacher") or die(mysql_error());
       
		while($row=mysql_fetch_array($query))
		{
			
			?>
			<tr class="danger">
            <td style="text-align:center; width:auto;"><?php echo $row['teacher_id']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['name']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['address']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['contact']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['designation']; ?></td>
            <td style="text-align:center; width:auto;">
			<?php echo $row['dar'];?>
			</td>
			<td style="text-align:center; width:auto;"><?php echo $row['promo'];?></td>
			<td style="text-align:center; width:auto;"><img src="getimage_teacher.php?id=<?php echo $row['id'];?>" class="img-rounded" width="50px;" height="40px;" /></td>
			<td style="text-align:center; width:auto;">
			<a href="teacher_info.php?id=<?php echo $row['id']; ?>" title="View info?" data-toggle="tooltip"><span class="glyphicon glyphicon-eye-open"></span></a>
        	
             </td>
			</tr>
			<?php
		}}
		?>
        </tbody>
        </table>
        
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