<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="alert alert-info"><strong style="font-size:16px;"><center>Add Student</center></strong></div></div>
									<center><p>***Fill up***</p></center>
                                        <div class="modal-body">
                              <form  method="post" enctype="multipart/form-data">
                        		<div class="control-group">
                                           <label class="control-label" for="inputEmail">Student no:</label>
                                           <input type="text" name="stno" class = "form-control" placeholder="Student number" required>
                                          
                                 </div>
								 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="fname" class = "form-control" placeholder="First Name" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Middle Name:</label>
                                           <input type="text" name="mname" class = "form-control" placeholder="Middle Name" required>
                                          
                                 </div>
                                <div class="control-group">
                                           <label class="control-label" for="inputEmail">Last Name:</label>
                                           <input type="text" name="lname" class = "form-control" placeholder="Last Name" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Date of birth:</label>
                                           <input type="date" name="dob" class = "form-control" required>
                                          
                                 </div>
                                 <div class="control-group">
                                           <label class="control-label" for="inputEmail">Age:</label>
                                           <input type="text" name="age" class = "form-control" required>
                                          
                                 </div>
                                  <div class="control-group">
                                           <label class="control-label" for="inputEmail">Grade:</label>
                                          
                                            <select id="grade" name="grade" class="form-control">
    <option>Select Grade</option>
         <option></option>
     <option value="Grade 1">Grade 1</option>
     <option value="Grade 2">Grade 2</option>
     <option value="Grade 3">Grade 3</option>
     <option value="Grade 4">Grade 4</option>
     <option value="Grade 5">Grade 5</option>
     <option value="Grade 6">Grade 6</option>
    
                                           
                                           </select>
                                          
                                 </div>
                                  <div class="form-group">
    <label for="grade">Section</label>
    <select id="grade" name="section" class="form-control">
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
  <div class="form-group">
    <label for="grade">Status</label>
    <select id="grade" name="stat" class="form-control">
    <option>Select Status</option>
        <option>---------------------</option>
     <option value="Transferred">Transferred</option>
     <option value="Stop">Stop</option>
     <option value="Continuing">Continuing</option>
     <option value="Under Graduate">Under Graduate</option>
    </select>
  </div>
           

                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image" required> 	
                                    </div>
                                </div><br>
                                <!---------------------------------------------Parent Inforamtion---------------------------------------------->
<div class="panel fresh-color panel-success">
<div class="panel-heading"><p style="font-size:16px;"><center>Parent Information</center></p></div>
  <div class="panel-body">
  <div class="form-group">
    <label for="name">Mother Full Name</label>
    <input type="text" class="form-control" id="pname" name="pname" placeholder="Mother's Full Name" required>
  </div>
  
  <div class="form-group">
    <label for="dob">Father Full Name</label>
    <input type="text" class="form-control" id="f_name" name="f_name" placeholder ="Father's Full Name"required>
  </div>
  <div class="form-group">
    <label for="age">Mother's Age</label>
    <input type="text" class="form-control" id="page" name="page" placeholder="Age" required>
  </div>
  <div class="form-group">
    <label for="age">Father's Age</label>
    <input type="text" class="form-control" id="page" name="fage" placeholder="Age" required>
  </div>
  <div class="form-group">
    <label for="age">Mother's Address</label>
    <input type="text" class="form-control" id="page" name="padd" placeholder="Address" required>
  </div>
  <div class="form-group">
    <label for="age">Father's Address</label>
    <input type="text" class="form-control" id="page" name="fadd" placeholder="Address" required>
  </div>
  <div class="form-group">
    <label for="age">Mother's Contact #</label>
    <input type="text" class="form-control" id="page" name="pcon" placeholder="Contact # Ex. 09091234567" required>
  </div>
  <div class="form-group">
    <label for="age">Father's Contact #</label>
    <input type="text" class="form-control" id="page" name="fcon" placeholder="Contact # Ex. 09091234567" required>
  </div>
  <div class="form-group">
    <label for="age">Mother's Occupation</label>
    <select id="occupation" name="occupation" class="form-control" required>
    <option>Select</option>
         <option>---------------------</option>
     <option value="Government Employee">Government Employee</option>
     <option value="Private Sector">Private Sector</option>
     <option value="Self Employed">Self Employed</option>
    </select>
  </div>
  <div class="form-group">
    <label for="age">father's Occupation</label>
    <select id="occupation" name="foccupation" class="form-control" required>
    <option>Select</option>
         <option>---------------------</option>
     <option value="Government Employee">Government Employee</option>
     <option value="Private Sector">Private Sector</option>
     <option value="Slef Employed">Self Employed</option>
         </select>
  </div>
</div></div>
								<div class = "modal-footer">
											 <button name = "go" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Save</button>
											<a href="add_student_user.php" role="button" class="btn btn-default">Close</a>
                                           

								</div>
							
									
									
									  </form>  
                                      </div></div>
									  
									   <?php include ('includes/dbconn.php');
                          
if(isset($_POST['go'])){
	include('includes/dbconn.php');
	$stno = mysql_real_escape_string($_POST['stno']);
	$name = mysql_real_escape_string( $_POST["fname"] );
	$mname = mysql_real_escape_string( $_POST["mname"] );
	$lname = mysql_real_escape_string( $_POST["lname"] );
	$dob = mysql_real_escape_string( $_POST["dob"]);
	$age  =mysql_real_escape_string($_POST['age']);
	$grade  =mysql_real_escape_string($_POST['grade']);
	$section = mysql_real_escape_string($_POST['section']);
  $stat = mysql_real_escape_string($_POST['stat']);
	$pname =mysql_real_escape_string($_POST['pname']);
  $fname = mysql_real_escape_string($_POST['f_name']);
	$fage =mysql_real_escape_string($_POST['fage']);
	$page =mysql_real_escape_string($_POST['page']);
  $add =mysql_real_escape_string($_POST['padd']);
  $fadd = mysql_real_escape_string($_POST['fadd']);
  $pcon =mysql_real_escape_string($_POST['pcon']);
  $fcon =mysql_real_escape_string($_POST['fcon']);
	$occupation =mysql_real_escape_string($_POST['occupation']);
  $foccupation =mysql_real_escape_string($_POST['foccupation']);
	 $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                
		$sql = "INSERT INTO tbl_student  VALUES(NULL,'$stno','$name','$mname','$lname','$dob','$age','$grade','$section','$stat','$pname','$fname','$page','$fage','$add','$fadd','$pcon','$fcon','$occupation','$foccupation','$image')" or die(mysql_error());
		if(mysql_query($sql)) {
			echo "<script>
					window.alert('Student has been added!')
					window.location.href='add_student_user.php';
				</script>";
		} else {
			echo "<script>
					window.alert('Failed to add new Student!')
					window.location.href='add_student_user.php';
				</script>";
		}}
                            ?>
									  
									  
									  
									  
                                </div>
                            </div>