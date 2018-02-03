<div class="modal fade" id="myModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Update Student</center></strong></div
                                        ></div>
									<p>*Fill up*</p>
                                        <div class="modal-body">
                                        
                              <form  method="post" enctype="multipart/form-data">
                              
								
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Alumni Name:</label>
                                           <input type="text" name="name" class = "form-control" value = "<?php echo $row['name'];?>" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Birthday:</label>
                                           <input type="text" name="dob" class = "form-control" value = "<?php echo $row['dob'];?>" readonly="readonly">
                                          
                                 </div>
                                <div class="control-group">
                                           <label class="control-label" for="inputEmail">Year Graduated:</label>
                                           <input type="text" name="yeargrad" class = "form-control" value = "<?php echo $row['yeargrad'];?>"readonly="readonly">
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Email:</label>
                                           <input type="email" name="achvmnts" class = "form-control" value = "<?php echo $row['achievements'];?>" required />
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Contact:</label>
                                           <input type="text" name="motto" class = "form-control" value = "<?php echo $row['motto'];?>" required />
                                          
                                 </div>
                                 

                                <div class="control-group">
                                    <label class="control-label" for="input01">Select Photo:</label>
                                    <div class="controls">
                                        <input type="file" name="image" required> 	
                                    </div>
                                </div><br>
             
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Update</button>
											<a href="alumniuser.php" type="button" class="btn btn-default" >Cancel</a>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>
									  
									   <?php include ('includes/dbconn.php');
                          
if(isset($_POST['go'])){
	include('includes/dbconn.php');
	$id = mysql_real_escape_string($_POST['id']);
	$name = mysql_real_escape_string( $_POST["name"] );
	$dob = mysql_real_escape_string( $_POST["dob"] );
	$yeargrad = mysql_real_escape_string( $_POST["yeargrad"] );
	$a = mysql_real_escape_string( $_POST["achvmnts"]);
	$moto  =mysql_real_escape_string($_POST['moto']);
	 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                            
                                
		$sql = "UPDATE tbl_alumni SET  name ='$name',
									   dob ='$dob',
									   yeargrad = '$yeargrad',
									   achievements = '$a',
									   motto = '$moto',
									   image = '$image' where id = '$id'" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Alumni information has been Updated!')
					window.location.href='alumniuser.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to Update information!')
					window.location.href='alumniuser.php';
				</script>";
		}}
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>