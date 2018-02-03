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
  <li>About us</a></li>
</ol>

        <hr />
  <div class="content-loader">
  		
     
       <div class="panel panel-primary">
       <div class="panel-heading">About us</div>
      	<div class="panel-body">
    	<div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                         School Mission and Vission
                                        </div>
                                        <div class="panel-body">
                                            <?php 
                                                include('includes/dbconn.php');
                                                $result = mysql_query("SELECT * FROM tbl_aboutus WHERE status='new'") or die(mysql_error());
                                                while($row = mysql_fetch_array($result)){
                                            ?>
                                            <form role="form" action="aboutus_process.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <center> <label>Mission</label></center>
                                                        <center><label style="text-align:center; font-size:18px; font-weight:lighter;" class="alert alert-warning"><?php echo $row['mission'];?></label></center>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <center> <label>Vision</label></center>
                                                      <center><label style="text-align:center; font-size:18px; font-weight:lighter;" class="alert alert-success"><?php echo $row['vission'];?></label></center> 
                                                        <hr><br/>
                                                       
                                                    </div>
                                                </div>
                                            </form>
                                            <?php } ?>
                                        </div>
                                        <div class="panel-footer">
                                            <em><center>Nothing Follows...</center></em>
                                        </div>
                                     </div>
                                </div>

                                            </form>
                                      
        
        
      
	</div></div>

      
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