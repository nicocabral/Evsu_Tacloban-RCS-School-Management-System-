<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<?php 
include('includes/header_user.php')

;?>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>
<body>
	<div class="container">
<div class="row">
<ol class="breadcrumb">
  <li><a href="../index.php">Home</a></li>
  <li>Activities</a></li>
</ol>

        <hr />
  <div class="content-loader">
  		<p style="font-size: 16px;"><strong>List of Activities &nbsp;</strong>|&nbsp;<button onclick="printContent('div1')"><img src="images/ico/printer.ico" width="35px;" data-toggle="tooltip" title="Print?" /></button></p>
     <div id="div1">
       <div class="panel panel-primary">
       <div class="panel-heading">Rizal Central School - Tacloban City | School Activities<span class="pull-right">As of &nbsp;<?php echo date('m-d-Y');?></span></div>
      	<div class="panel-body">
    	<div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                           ATTENTION!
                                        </div>
                                        <div class="panel-body">
                                            <?php 
                                                include('includes/dbconn.php');
                                                $result = mysql_query("SELECT * FROM tbl_activities WHERE status='new'") or die(mysql_error());
                                                while($row = mysql_fetch_array($result)){
                                            ?>
                                            <form role="form" action="act_update_process.php" method="POST">
                                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <center> <label>Heading</label></center>
                                                   <center>  <label style="text-align:center; font-size:16px; font-weight:lighter;" class="alert alert-info"><?php echo $row['heading'];?></label></center>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                       <center> <label>Description/Contents</label></center>
                                               <center> <label style="text-align:center; font-size:16px; font-weight:lighter;" class="alert alert-info"> <?php echo $row['description'];?> </label></center>
                                                        <hr><br/>
                                                     <span style="text-align:left; font-size:14px;"><strong>By the School Administration</strong></span>
                                                       
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
                                      
        
        
      </div>
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