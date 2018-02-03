<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Add Teacher Information</center></strong></div></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">Teacher ID no:</label>
                                           <input type="text" name="tno" class = "form-control" placeholder="Teacher ID number" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Whole Name" required>
                                          
                                 </div>
                                  
                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Address:</label>
                                           <input type="text" name="add" class = "form-control" placeholder="Address" required>
                                          
                                 </div>
                                 
                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Contact #:</label>
                                           <input type="text" name="con" class = "form-control" placeholder="Ex. 090912345678" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Designation:</label>
                                    <select name="des" class="form-control">
                                    <option>Select Designation</option>
                                    <option value="Teacher 1">Teacher 1</option>
                                    <option value="Teacher 2">Teacher 2</option>
                                    <option value="Teacher 3">Teacher 3</option>
                                    <option value="Teacher 4">Teacher 4</option>
                                    
                                    </select>
                                          
                                 </div>
                                <div class="control-group">
                                           <label class="control-label" for="inputEmail">Bacherlor Degree Course:</label>
                                           <input type="text" name="bdc" class = "form-control" placeholder="Bachelor degree coures" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Specialization:</label>
                                           <input type="text" name="bdc_spec" class = "form-control" placeholder="Specialization" required>
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Post Degree Course:</label>
                                           <input type="text" name="pdc" class = "form-control" placeholder="Post Degree Course" required>
                                          
                                 </div>
                                 <div class="control-group">
                                 <label class="control-label" for="inputEmail">Specialization:</label>
                                 <input type="text" name="pdc_spec" class = "form-control" placeholder="Specialization" required>
                                          
                                 </div>
                                  <div class="form-group">
                                  <label class="control-label" for="inputEmail">Date of birth</label>
                                 <input type="date" name="dob" class = "form-control"  required>
                                          
   									
  </div>
   <div class="form-group">
                                  <label class="control-label" for="inputEmail">Age</label>
                                 <input type="text" name="age" class = "form-control" placeholder="Age"  required>
                                          
   									
  </div>
  <div class="form-group">
                                  <label class="control-label" for="inputEmail">Previous School Assigned</label>
                                 <input type="text" name="psa" class = "form-control" placeholder="Ex.Ama Learning Center"  required>
                                          
                    
  </div>
  <div class="form-group">
                                  <label class="control-label" for="inputEmail">Date Assigned in Rizal</label>
                                 <input type="date" name="dar" class = "form-control"  required>
                                          
                    
  </div>
    
   <div class="form-group">
                                  <label class="control-label" for="inputEmail">Work status</label>
                                 <select name="ws" class="form-control">
                                 <option>Select Status</option>
                                 <option value="Employed">Employed</option>
                                 <option value="UnEmployed">UnEmployed</option>
                                 
                                 </select>
                                          
   									
  </div>
   <div class="form-group">
                                  <label class="control-label" for="inputEmail">Status</label>
                                 <select name="stat" class="form-control">
                                 <option>Select Status</option>
                                 <option value="Single">Single</option>
                                 <option value="Married">Married</option>
                                 
                                 </select>
                                          
   									
  </div>
                                

                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image" required> 	
                                    </div>
                                </div><br>
                                <!---------------------------------------------Parent Inforamtion---------------------------------------------->


								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
											<a href="add_teacher.php" type="button" class="btn btn-default" >Close</a>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>
									  
									   <?php include ('includes/dbconn.php');
                          
if(isset($_POST['go'])){
	include('includes/dbconn.php');
	$tno = mysql_real_escape_string($_POST['tno']);
	$name = mysql_real_escape_string( $_POST["name"] );
  $add = mysql_real_escape_string($_POST['add']);
  $contact = mysql_real_escape_string($_POST['con']);
	$des = mysql_real_escape_string( $_POST["des"] );
	$bdc = mysql_real_escape_string( $_POST["bdc"] );
	$bdc_spec = mysql_real_escape_string( $_POST["bdc_spec"]);
	$pdc  =mysql_real_escape_string($_POST['pdc']);
	$pdc_spec =mysql_real_escape_string($_POST['pdc_spec']);
	$dob = mysql_real_escape_string($_POST['dob']);
	$age =mysql_real_escape_string($_POST['age']);
  $psa = mysql_real_escape_string($_POST['psa']);
  $dar = mysql_real_escape_string($_POST['dar']);

	$stat =mysql_real_escape_string($_POST['stat']);
	$ws =mysql_real_escape_string($_POST['ws']);
	$dp = date('y-m-d');
	 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                            
		$sql = "INSERT INTO tbl_teacher  VALUES(NULL,'$tno','$name','$add','$contact','$des','$bdc','$bdc_spec','$pdc','$pdc_spec','$dob','$age','$psa','$dar','$dp','$stat','$ws','$image')" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Teacher has been added!')
					window.location.href='add_teacher.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to add new Teacher!')
					window.location.href='add_teacher.php';
				</script>";
		}}
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>