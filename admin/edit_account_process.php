<div class="modal fade" id="edit_account<?php echo $account_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Update User Account </center></strong></div
                                        ></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                            <form  method="post" action="edit_account.php" enctype="multipart/form-data">
                            <div class="control-group">
                                           
                                           <input type="hidden" name="id" class = "form-control" value="<?php echo $account_id;?>" required>
                                          
                                 </div>
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" value="<?php echo $row['name'];?>" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Username:</label>
                                           <input type="text" name="uname" class = "form-control" value="<?php echo $row['username'];?>"required>
                                          
                                 </div>
                                  
                                <div class="control-group">
                                           <label class="control-label" for="inputEmail">Password:</label>
                                           <input type="password" name="pword" class = "form-control" placeholder="********************" required>
                                          
                                 </div>
  
    <div class="form-group">
                                  <label class="control-label" for="inputEmail">User type:</label>
                                  <select name="utype" class="form-control">
                                    <option>Select user type</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>                                    
                                    </select>
                                          
   									
  </div>
   
 <br>
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

								</div>
									  </form>  
                                      </div></div>
									  
								  
									  
									  
                                </div>
                            </div>