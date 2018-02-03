<div class="modal fade" id="myModalgrade<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Update Student Grade</center></strong></div
                                        ></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                                   
                              <form  method="post" action="result_process.php" enctype="multipart/form-data">
                              <div class="form-group">
                                           <label class="control-label" for="inputEmail">Mother name:</label> 
                                           <input type="text" name="st_no" class = "form-control" value = "<?php echo $row['parent_name'];?>" readonly="readonly">
                                 </div> 
								
								 <div class="form-group ">
                                           <label class="control-label" for="inputEmail">Mother Age:</label>
                                           <input type="text" name="full_name" class = "form-control" value = "<?php echo $row['age_parent'];?>" readonly="readonly">
                                          
                                 </div>
                                  <div class="form-group">
                                           <label class="control-label" for="inputEmail">Address:</label>
                                         <input type="text" class="form-control" name="gands" value="<?php echo $row['address']; ?>" readonly="readonly"/>
                                          
</div>
  <div class="form-group">
                                           <label class="control-label" for="inputEmail">Contact:</label>
                                         <input type="text" class="form-control" name="sec" value="<?php echo $row['contact']; ?>" readonly="readonly"/>
                                          
</div>
                                
                                  <div class="form-group">
                                           <label class="control-label" for="inputEmail">Occupation:</label>
                                         <input type="text" class="form-control" name="ig_a" value="<?php echo $row['occupation']; ?>" readonly="readonly"/>
                                          
</div>
   <div class="form-group">
    <label class="control-label" for="inputEmail">Father Name:</label>
    <input type="text" class="form-control" name="ig_b" value="<?php echo $row['father_name']; ?>" readonly="readonly"/>
   
 </div>
 <div class="form-group">
                                         <label class="control-label" for="inputEmail">Father Age:</label>
                                         <input type="text" class="form-control" name="ig_c" value="<?php echo $row['f_age']; ?>" readonly="readonly"/></div>
   <div class="form-group">
    <label class="control-label" for="inputEmail">Address:</label>
    <input type="text" class="form-control" name="ig_d" value="<?php echo $row['f_add']; ?>" readonly="readonly"/>
  </div>
    <div class="form-group">
                                           <label class="control-label" for="inputEmail">Contact:</label>
                                         <input type="text" class="form-control" name="sec" value="<?php echo $row['f_con']; ?>" readonly="readonly"/>
                                          
</div>
                                
                                  <div class="form-group">
                                           <label class="control-label" for="inputEmail">Occupation:</label>
                                         <input type="text" class="form-control" name="ig_a" value="<?php echo $row['f_occupation']; ?>" readonly="readonly"/>
                                          
</div>
                                

								<div class = "modal-footer">
											<a href="add_student.php" role="button" class="btn btn-default" >Close</a>
                                           

								</div>
							
									
									
									  </form>  
 		                                     </div></div>

              </div></div>