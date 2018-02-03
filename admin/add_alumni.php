<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Add Alumni</center></strong></div></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Name of Alumni Ex. Coco Martin" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Year Graduated:</label>
                                           <input type="text" name="date" class = "form-control" required>
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Birthday:</label>
                                           <input type="date" name="bdate" class = "form-control" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Contact:</label>
                                           <input type="text" name="moto" class = "form-control" placeholder="0909123456789" required>
                                          
                                 </div>
                                <div class="control-group">
                                           <label class="control-label" for="inputEmail">Email:</label>
                                           <input type="email" name="achvmnts" class = "form-control" placeholder="Ex.Email @yahoo.com" required>
                                          
                                 </div>
                                <div class="control-group">
                                    <label class="control-label" for="input01">Select Photo:</label>
                                    <div class="controls">
                                        <input type="file" name="image" required> 	
                                    </div>
                                </div>
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
											<a href="alumni.php" type="button" class="btn btn-default" >Close</a>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>
									  
									   <?php include ('includes/dbconn.php');
                          
if(isset($_POST['go'])){
	include('includes/dbconn.php');
	
	$name = mysql_real_escape_string( $_POST["name"] );
	$yeargrad = mysql_real_escape_string( $_POST["date"] );
	$dob = mysql_real_escape_string( $_POST["bdate"] );
	$moto= mysql_real_escape_string( $_POST["moto"] );
	$achvmnts = mysql_real_escape_string( $_POST["achvmnts"]);
	
	 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                        
                                
		$sql = "INSERT INTO tbl_alumni  VALUES(NULL,'$name','$dob','$yeargrad','$achvmnts','$moto','$image')" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Alumni has been added!')
					window.location.href='alumni.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to add new Alumni!')
					window.location.href='alumni.php';
				</script>";
		}}
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>