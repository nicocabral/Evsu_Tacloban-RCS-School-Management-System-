<div class="modal fade" id="modalUserlog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                          
                                            <h4 class="modal-title" id="myModalLabel"><center>Delete Userlog</center></h4>
                                        </div>
                                         <div class="modal-body">
                                         <?php include('includes/dbconn.php');
										 $sql = "SELECT * from tbl_userlog order by timestamp asc" or die (mysql_error());
										 $res = mysql_query($sql);
										 ?>
                                         <form method="post" >
                                            <div class="control-group">
                                       			<label class="control-label">Delete From:</label>
                                               	
                                                <select name="datefrom" class = "form-control">
                                                <?php while($row=mysql_fetch_array($res)){?>
                                           
                                                <option value="<?php echo $row['timestamp'];?>"><?php echo $row['timestamp'];}?></option>    	
                                                    
                                                    </select>
                                               
                                       </div><br />
                                        <div class="control-group">
                                        <?php include('includes/dbconn.php');
										$query = mysql_query("SELECT * from tbl_userlog order by timestamp desc") or die(mysql_error());
										?>
                                       			<label class="control-label">Delete to:</label>
                                               	
                                                <select name="dateto" class = "form-control">
                                                <?php while($row=mysql_fetch_array($query)){?>
                                                <option value="<?php echo $row['timestamp'];?>"><?php echo $row['timestamp'];}?></option>    	
                                                    
                                                    </select>
                                               
                                       </div>
                                        <div class="modal-footer">
                                            <button type="submit" name="del" class="btn btn-danger"><i class="icon-check"></i>&nbsp;Delete</button>
                                            <a href="userlog.php" role="button" class="btn btn-default" aria-hidden="true"><i class="icon-remove"></i>&nbsp;No</a>

</div></form>
                                        </div>
									   </div>
                                     
                                          
                                      
                                    </div>
									
									  
									  
									  
 </div>
             <?php
include('includes/dbconn.php');
if(isset($_POST['del'])){
	$from = mysql_real_escape_string($_POST['datefrom']);
	$to = mysql_real_escape_string($_POST['dateto']);
	$sql ="DELETE from tbl_userlog where timestamp BETWEEN '$from' and '$to'" or die (mysql_error());
	$res=mysql_query($sql);
	if($res){
		echo'<script>window.alert("Log Deleted!");
				     window.location="userlog.php";</script>';
		
		}	else{
			echo'<script>window.alert("Error Deleting try again!");
				     window.location="userlog.php";</script>';
			
			}
	
	}

?>
   