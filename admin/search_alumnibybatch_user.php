<div class="modal fade" id="myModalsearch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Search Batch Year</center></strong></div></div>
									<center><p>***Filter***</p></center>
                                        <div class="modal-body">
                              <form  method="post" action="alumni_searchresultuser.php" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label" for="input01">Year Graduated from:</label>
                                    <div class="controls">
                                        <input type="text" name="date_from" class="form-control" placeholder="Year Only Ex. 2005" required> 	
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label" for="input01">Year Graduated to:</label>
                                    <div class="controls">
                                        <input type="text" name="date_to" class="form-control" placeholder="Year Only Ex.2006" required> 	
                                    </div>
                                </div>
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</button>
											<a href="alumniuser.php" type="button" class="btn btn-default">Close</a>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>  
                                </div>
                            </div>