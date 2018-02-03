<div class="modal fade" id="delete_student<?php echo $id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                           <h4 class="modal-title" id="myModalLabel"><center>Update Status </center></h4>
                                        </div>
                                         <div class="modal-body">
                                            
                                            <div class="control-group">
                                           <label class="control-label" for="inputEmail">Update Status to:</label>
                                          <form method="post" role="form">
                                            <select id="stat" name="stat" class="form-control" required>
    <option>Select Status</option>
         <option>---------------------</option>
     <option value="Transferred">Transferred</option>
     <option value="Stop">Stop</option>
     <option value="Under Graduate">Under Graduate</option>
    
                                           
                                           </select>

                                        </div>
                                        <div class="modal-footer">
                                           <button name = "go" class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-save"></span>&nbsp;Update</button>
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                     
                                          
                                      
                                    </div>
									
									  
									  
									  
 </div>
  
                                       <?php include ('includes/dbconn.php');
                          
if(isset($_POST['go'])){
    include('includes/dbconn.php');
    $stno = mysql_real_escape_string($_POST['stno']);
    $name = mysql_real_escape_string( $_POST["fname"] );                           
        $sql = "UPDATE tbl_student SET
                     status ='$stat'
                   where id = '$id'" or die(mysql_error());
        if(mysql_query($sql)) {
            echo '<script>
                    window.alert("Status has been Updated!");
                    window.location.href="add_student.php";
                </script>';
        } else {
            echo '<script>
                    window.alert("Failed to Update Status!"");
                    window.location.href="addstudent.php";
                </script>';
        }}
                            ?>
                                      
                                                     