<div class="modal fade" id="myModal<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Update Teacher </center></strong></div
                                        ></div>
									<p>*Fill up*</p>
                                        <div class="modal-body">
                            <form  method="post" enctype="multipart/form-data">
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">Teacher ID no:</label>
                                           <input type="text" name="tno" class = "form-control" value="<?php echo $row['teacher_id'];?>" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" value="<?php echo $row['name'];?>"required>
                                          
                                 </div>
                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Address:</label>
                                           <input type="text" name="add" class = "form-control" value="<?php echo $row['address'];?>"required>
                                          
                                 </div> 
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Contact:</label>
                                           <input type="text" name="con" class = "form-control" value="<?php echo $row['contact'];?>"required>
                                          
                                 </div>               
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Designation:</label>
                                    <select name="des" class="form-control">
                                    <option><?php echo $row['designation'];?></option>
                                    <option value="Teacher 1">Teacher 1</option>
                                    <option value="Teacher 2">Teacher 2</option>
                                    <option value="Teacher 3">Teacher 3</option>
                                    <option value="Teacher 4">Teacher 4</option>
                                    
                                    </select>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Previous School Assigned:</label>
                                           <input type="text" name="pra" class = "form-control" value="<?php echo $row['pra'];?>"required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Date Assigned in Rizal:</label>
                                           <input type="date" name="dar" class = "form-control" value="<?php echo $row['dar'];?>"required>
                                          
                                 </div>
                                <div class="control-group">
                                           <label class="control-label" for="inputEmail">Bacherlor Degree Course:</label>
                                           <input type="text" name="bdc" class = "form-control" value="<?php echo $row['bdc'];?>" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Specialization:</label>
                                           <input type="text" name="bdc_spec" class = "form-control" value="<?php echo $row['specialization'];?>" required>
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Post Degree Course:</label>
                                           <input type="text" name="pdc" class = "form-control" value="<?php echo $row['pdc'];?>" required>
                                          
                                 </div>
                                 <div class="control-group">
                                 <label class="control-label" for="inputEmail">Specialization:</label>
                                 <input type="text" name="pdc_spec" class = "form-control" value="<?php echo $row['pdc_spec'];?>" required>
                                          
                                 </div>
                                  <div class="form-group">
                                  <label class="control-label" for="inputEmail">Date of birth</label>
                                 <input type="date" name="dob" class = "form-control"  value="<?php echo $row['dob'];?>" readonly="readonly">
                                          
   									
  </div>
   <div class="form-group">
                                  <label class="control-label" for="inputEmail">Age</label>
                                 <input type="text" name="age" class = "form-control" value="<?php echo $row['age'];?>"  required>
                                          
   									
  </div>
    
   <div class="form-group">
                                  <label class="control-label" for="inputEmail">Work status</label>
                                  <select name="ws" class="form-control">
                                 <option><?php echo $row['work_status'];?></option>
                                 <option value="Employed">Employed</option>
                                 <option value="UnEmployed">UnEmployed</option>
                                 
                                 </select>
                                          
   									
  </div>
   <div class="form-group">
                                  <label class="control-label" for="inputEmail">Status</label>
                                 <select name="stat" class="form-control">
                                 <option><?php echo $row['status'];?></option>
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
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

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
  $pas = mysql_real_escape_string($_POST['pra']);
  $dar = mysql_real_escape_string($_POST['dar']);
	$des = mysql_real_escape_string( $_POST["des"] );
	$bdc = mysql_real_escape_string( $_POST["bdc"] );
	$bdc_spec = mysql_real_escape_string( $_POST["bdc_spec"]);
	$pdc  =mysql_real_escape_string($_POST['pdc']);
	$pdc_spec =mysql_real_escape_string($_POST['pdc_spec']);
	$dob = mysql_real_escape_string($_POST['dob']);
	$age =mysql_real_escape_string($_POST['age']);
	
	$stat =mysql_real_escape_string($_POST['stat']);
	$ws =mysql_real_escape_string($_POST['ws']);
	$dp = date('Y-m-d');
	
	 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));                      
		$sql = "UPDATE tbl_teacher  SET teacher_id ='$tno',
									    name = '$name',
                      address = '$add',
                      contact = '$contact',
										designation = '$des',
										bdc = '$bdc',
										specialization = '$bdc_spec',
										pdc = '$pdc',
										pdc_spec = '$pdc_spec',
										dob = '$dob',
										age = '$age',
                    pra = '$pas',
                    dar = '$dar',
					dp ='$dp',
							
										status = '$stat',
										work_status = '$ws',
										image = '$image' where id = '$id'" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Teacher record has been Updated!')
					window.location.href='add_teacher.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to add Update Teacher record!')
					window.location.href='add_teacher.php';
				</script>";
		}}
                            ?>
									    
									  
									  
									  
                                </div>
                            </div>