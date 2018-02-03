<div class="modal fade" id="my_account<?php echo $u_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Update User Account </center></strong></div
                                        ></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                            <form  method="post" action="myaccount_process.php" enctype="multipart/form-data">
                            <div class="control-group">
                                           
                                           <input type="hidden" name="id" class = "form-control" value="<?php echo $u_id;?>" required>
                                          
                                 </div>
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="name" class = "form-control" value="<?php echo $_SESSION['name'];?>" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Username:</label>
                                           <input type="text" name="uname" class = "form-control" value="<?php echo $_SESSION['username'];?>"required>
                                          
                                 </div>
                                  
                                <div class="control-group">
                                           <label class="control-label" for="inputEmail">Password:</label>
                                           <input type="text" name="pword" class = "form-control" value="<?php echo $_SESSION['password'];?>" required>
                                          
                                 </div>
  
    <div class="form-group">
                                  
                                  <label class="control-label" for="inputEmail">Password:</label>
                                  <input type="text" name="utype" class = "form-control" value="<?php echo $_SESSION['usertype'];?>" readonly="readonly">
                                          
                                          
   									
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