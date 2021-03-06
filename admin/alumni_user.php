<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 

include('includes/header_user.php')
;?>

<body>
	<div class="container">
<div class="row">
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li>Alumni</a></li>
</ol>
	 <button class="btn btn-info" type="button" data-toggle="modal" data-target="#myModalsearch"> <span class="glyphicon glyphicon-search"></span> &nbsp; Search by Batch</button> <?php include('search_alumnibybatch_user.php');?>
        <hr />
       
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>List of All Alumni &nbsp;</strong>| &nbsp; <?php  include('includes/dbconn.php');$query = mysql_query("SELECT COUNT(*) as total from tbl_alumni") or die (mysql_error());
	while($row=mysql_fetch_array($query)){?> <span class="badge" data-toggle="tooltip" title="Total no of Alumni" data-placement="right"><?php echo $row['total'];}?></span> </p>
        <table cellspacing="0" width="100%" id="example" class="table table-striped table-hover table-responsive">
        <thead>
        <tr class="info">
         
        <th style="text-align:center; width:auto;">Name</th>
        <th style="text-align:center; width:auto;">Year Graduated</th>
        <th style="text-align:center; width:auto;">Birthday</th>
        <th style="text-align:center; width:auto;">Email</th>
        <th style="text-align:center; width:auto;">Image</th>
        <th style="text-align:center; width:auto;">Action</th>
     
        </tr>
        </thead>
        <tbody>
        <?php
        require_once 'includes/dbconn.php';
        $sql = mysql_query("SELECT * FROM tbl_alumni") or die (mysql_error());
		while($row=mysql_fetch_array($sql))
		{ $a_id = $row['id'];
		  //$name =$row['name'];
			?>
			<tr class="danger">
            
            <td style="text-align:center; width:auto;"><?php echo $row['name']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['yeargrad']; ?></td>
             <td style="text-align:center; width:auto;"><?php echo $row['dob']; ?></td>
            <td style="text-align:center; width:auto;"><?php echo $row['achievements']; ?></td>
			<td style="text-align:center; width:auto;"><img src="getimage_allumni.php?id=<?php echo $row['id']; ?>" class="img-rounded" width="50px;" height="40px;"/></td>
			
			<td style="text-align:center; width:auto;">
			<a href="alumni_infouser.php?id=<?php echo $a_id?>" role="button"  data-toggle="tooltip" title="View info?"><span class="glyphicon glyphicon-eye-open"></span></a> 
             </td>
          
             
			</tr>
			<?php
		}
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
</body>
</html>