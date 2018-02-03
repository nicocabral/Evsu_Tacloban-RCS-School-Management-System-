<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Add Photo gallery</center></strong></div></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Name of Alumni Ex. Coco Martin" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Description:</label>
                                           <input type="text" name="des" class = "form-control" required>
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Date:</label>
                                           <input type="date" name="date" class = "form-control" required>
                                          
                                 </div>
                                <div class="control-group">
                                    <label class="control-label" for="input01">Select Photo:</label>
                                    <div class="controls">
                                        <input type="file" name="image" required> 	
                                    </div>
                                </div>
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>
									  
									   <?php include ('includes/dbconn.php');
                          
if(isset($_POST['go'])){
	include('includes/dbconn.php');
	
	$name = mysql_real_escape_string( $_POST["name"] );
	$des = mysql_real_escape_string( $_POST["des"] );
	$date = mysql_real_escape_string( $_POST["date"] );
	 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                               
                                
		$sql = "INSERT INTO tbl_gallery  VALUES(NULL,'$name','$des','$date','$image')" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Photo has been added!')
					window.location.href='gallery.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to add new Photo in gallery!')
					window.location.href='galleryuser.php';
				</script>";
		}}
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>