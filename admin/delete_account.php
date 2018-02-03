<div class="modal fade" id="delete_account<?php echo $account_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <h4 class="modal-title" id="myModalLabel"><center>Deactivate Account </center></h4>
                                        </div>
                                         <div class="modal-body">
                                         <form method="post">
                                            <div class="alert alert-danger">Are you Sure you Want to <strong>Deactivate  &nbsp;</strong> <?php echo $row['name']; ?>?</div>	<input type="hidden" value="<?php echo $row['name'];?>" name="name" />
                <input type="hidden" value="<?php echo $row['username'];?>" name="uname" />
                <input type="hidden" value="<?php echo $row['password'];?>" name="pword" />
                <input type="hidden" value="<?php echo $row['usertype'];?>" name="utype" />
                <input type="hidden" value="<?php echo $account_id;?>" name="id" />
                              
                                       
                                        <div class="modal-footer">
                                            <button type="submit" name="deactive" class="btn btn-danger"><i class="icon-check"></i>&nbsp;Yes</button>
                                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</button>

</div></form>
                                        </div>
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  
									  
									  
 </div>
             <?php
include('includes/dbconn.php');

if(isset($_POST['deactive'])){
	$id = intval($_POST['id']);
	$name = mysql_real_escape_string($_POST['name']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$pass = '********';
	$utype = 'Deactivate';
	$query = mysql_query("UPDATE tbl_users SET 
											name ='$name',
											username ='$uname',
											password = '$pass',
											usertype = '$utype'
											WHERE userid = '$id'") or die (mysql_error());
	if($query){
		echo'<script>window.alert("Account Deactivated!");
					 window.location="add_accounts.php"</script>';
		
		}else {
			echo'<script>window.alert("Failed!");
					 window.location="add_accounts.php"</script>';
		
			
			}
	
	}
?>
   