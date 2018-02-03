<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Add User Account</center></strong></div></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                              <form  method="post" action="addaccount_process.php" enctype="multipart/form-data">
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">User name:</label>
                                           <input type="text" name="name" class = "form-control" placeholder="Name Ex. Anne Curtis" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Username:</label>
                                           <input type="text" name="uname" class = "form-control" placeholder="Unique Ex. Qwerty" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Password:</label>
                                           <input type="password" name="pword" class = "form-control"required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">User Type:</label>
                                    <select name="utype" class="form-control">
                                    <option>Select user type</option>
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>                                    
                                    </select>
                                          
                                 </div>
                               

								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>
									  
									  
									  
									  
									  
									  
                                </div>
                            </div>