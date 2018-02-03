<div class="modal fade" id="modalPrint" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Search Grade and Section</center></strong></div></div>
									<center><p>***Filter***</p></center>
                                        <div class="modal-body">
                              <form  method="post" action="grade_printresult.php" enctype="multipart/form-data">
                                <div class="control-group">
                                    <label class="control-label" for="input01">Select Grade:</label>
                                    <div class="controls">
                                   <select name="grade" class="form-control">
                                   <option value="Grade 1">Grade 1</option>
                                   <option value="Grade 2">Grade 2</option>
                                   <option value="Grade 3">Grade 3</option> 
                                   <option value="Grade 4">Grade 4</option>
                                   <option value="Grade 5">Grade 5</option>
                                   <option value="Grade 6">Grade 6</option>
                                   
                                   </select>	
                                    </div>
                                </div>
                                 <div class="control-group">
                                      <label for="grade">Section</label>
    <select id="grade" name="sec" class="form-control">
    <option>Select Section</option>
    <option>-------------------</option>
         <option><stong>Grade 1</stong></option>
     <option>-------------------</option>    
     <option value="Cherry">Cherry</option>
     <option value="Melon">Melon</option>
     <option value="Apple">Apple</option>
     <option value="Mango">Mango</option>
     <option value="Grapes">Grapes</option>
     <option value="Atis">Atis</option>
     <option value="Guava">Guava</option>
     <option value="Orange">Orange <br></option>
    <option>-------------------</option>
   <option><strong>Grade 2</strong></option>
   <option>-------------------</option>
     <option value="Garnet">Garnet</option>
     <option value="Pearl">Pearl</option>
     <option value="Ruby">Rubby</option>
     <option value="Jade">Jade</option>
     <option value="Diamond">Diamond</option>
     <option value="Amethyst">Amyethyst</option>
     <option value="Sapphire">Sapphire</option>
     <option value="Emerald">Emerald <br></option>
     <option>-------------------</option>
   <option><strong>Grade 3</strong></option>
   <option>-------------------</option>
     <option value="Agoho">Agoho</option>
     <option value="Apitong">Apitong</option>
     <option value="Mahogany">Mahogany</option>
     <option value="Ipil-Ipil">Ipil-Ipil</option>
     <option value="Kamagong">Kamagong</option>
     <option value="Molave">Molave</option>
     <option value="Narra">Narra</option>
     <option value="Acacia">Acacia <br></option>
     <option>-------------------</option>
   <option><strong>Grade 4</strong></option>
   <option>-------------------</option>
     <option value="Gumamela">Gumamela</option>
     <option value="Ilang-Ilang">Ilang Ilang</option>
     <option value="Sampguita">Sampaguita</option>
     <option value="Rosal">Rosal</option>
     <option value="Dahlia">Dahlia</option>
     <option value="Yellowbell">Yellowbell</option>
     <option value="Camia">Camia</option>
     <option value="Orchid">Orchid<br></option>
     <option>-------------------</option>
   <option><strong>Grade 5</strong></option>
   <option>-------------------</option>
     <option value="Eagle">Eagle</option>
     <option value="Robin">Robin</option>
     <option value="Swan">Swan</option>
     <option value="Parrot">Parrot</option>
     <option value="Heron">Heron</option>
     <option value="Dove">Dove</option>
     <option value="Hornbill">Hornbill</option>
     <option value="Seagull">Seagull<br></option>
     <option>-------------------</option>
   <option><strong>Grade 6</strong></option>
   <option>-------------------</option>
     <option value="Venus">Venus</option>
     <option value="Mercury">Mercury</option>
     <option value="Neptune">Neptune</option>
     <option value="Uranus">Uranus</option>
     <option value="Jupiter">Jupiter</option>
     <option value="Saturn">Saturn</option>
     <option value="Earth">Earth</option>
     <option value="Mars">Mars</option>
   
    </select>
  </div>

								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-print"></span>&nbsp;Print</button>
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>  
                                </div>
                            </div>