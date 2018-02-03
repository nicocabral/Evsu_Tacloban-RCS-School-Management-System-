<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header alert alert-success">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title " id="myModalLabel">Administrator Login</h4>
      </div>
      <div class="modal-body">
    <div class="text-center">
		      			<div role="tabpanel" class="login-tab">
						  	<!-- Nav tabs -->
						  	<ul class="nav nav-tabs" role="tablist">
						    	<li role="presentation" class="active"><a id="signin-taba" href="#home" aria-controls="home" role="tab" data-toggle="tab">Sign In</a></li>
						    	<li role="presentation"><a id="signup-taba" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Sign Up</a></li>
						    	<li role="presentation"><a id="forgetpass-taba" href="#forget_password" aria-controls="forget_password" role="tab" data-toggle="tab">Forget Password</a></li>
						  	</ul>
						
						  	<!-- Tab panes -->
						 	<div class="tab-content">
						    	<div role="tabpanel" class="tab-pane active text-center" id="home">
						    		&nbsp;&nbsp;
						    	<span id="login_fail" class="response_error" style="display: none;">Login failed, please try again.</span>
						    		<div class="clearfix"></div>
						    		<form method="post" action="includes/login_process.php">
										<div class="form-group">

									    	<div class="input-group">

									      		<div class="input-group-addon"><i class="fa fa-user"></i>Usename</div>
									      		<input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
									    	</div>
									    	<span class="help-block has-error" id="email-error"></span>
									  	</div>
									  	<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-lock"></i>Password</div>
									      		<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
									    	</div>
									    	<span class="help-block has-error" id="password-error"></span>
									  	</div>
							  			<button type="submit" id="login_btn" class="btn btn-block btn-primary" data-loading-text="Signing In....">Login</button>
							  			<button type="reset" id="login_btn" class="btn btn-block btn-danger" data-loading-text="Signing In....">Clear</button>
							  			<div class="clearfix"></div>
							  			<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-8 col-sm-8 col-md-8">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>
												
												</div>
												
												<div class="col-xs-4 col-sm-4 col-md-4">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>
												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						    	<div role="tabpanel" class="tab-pane" id="profile">
						    	    &nbsp;&nbsp;
						    	    <span id="registration_fail" class="response_error" style="display: none;">Registration failed, please try again.</span>
						    		<div class="clearfix"></div>
						    		 <form role="form" method="post" action="includes/sign_up_process.php">
                            <div class="form-group">
                                <input type="text"  id="name" name="name" class="form-control input-sm" placeholder="Name" required>
                            </div>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="uname" id="username" class="form-control input-sm" placeholder="Username" required>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input type="password" name="pass" id="password" class="form-control input-sm" placeholder="Password" required>
                                    </div>
                                </div>
                            </div>
							  			<button type="submit" id="register_btn" class="btn btn-success bt-login" data-loading-text="Registering....">Register</button>
							  			<button type="reset" id="register_btn" class="btn btn-danger bt-login" data-loading-text="Registering....">Clear</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-8 col-sm-8 col-md-8">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="forgetpass-tab"> Forgot password? </a>
												
												</div>
												
												<div class="col-xs-4 col-sm-4 col-md-4">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>
												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						    	<div role="tabpanel" class="tab-pane text-center" id="forget_password">
						    		&nbsp;&nbsp;
						    	    <span id="reset_fail" class="response_error" style="display: none;"></span>
						    		<div class="clearfix"></div>
						    		<form role="form" method="post" action="includes/forgotpassword_process.php">
										<div class="form-group">
									    	<div class="input-group">
									      		<div class="input-group-addon"><i class="fa fa-user"></i>Username</div>
									      		<input type="text" class="form-control" id="runame" name="username" placeholder="Username">
									    	</div>
									    	<span class="help-block has-error" data-error='0' id="femail-error"></span>
									  	</div>
									  	
							  			<button type="submit" id="reset_btn" class="btn btn-primary bt-login" data-loading-text="Please wait....">Reset Password</button>
							  			<button type="reset" id="reset_btn" class="btn btn-danger bt-login" data-loading-text="Please wait....">Clear</button>
										<div class="clearfix"></div>
										<div class="login-modal-footer">
							  				<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-lock"></i>
													<a href="javascript:;" class="signin-tab"> Sign In </a>
												
												</div>
												
												<div class="col-xs-6 col-sm-6 col-md-6">
													<i class="fa fa-check"></i>
													<a href="javascript:;" class="signup-tab"> Sign Up </a>
												</div>
											</div>
							  			</div>
									</form>
						    	</div>
						  	</div>
				</div></div></div></div></div></div>
				 <script>
	    $(document).ready(function(){
	    	$(document).on('click','.signup-tab',function(e){
	    		 e.preventDefault();
	    		 $('#signup-taba').tab('show');
	    	});	
	
	    	$(document).on('click','.signin-tab',function(e){
	    		 e.preventDefault();
	    		 $('#signin-taba').tab('show');
	    	});
	    	
	    	$(document).on('click','.forgetpass-tab',function(e){
	    		 e.preventDefault();
	    		 $('#forgetpass-taba').tab('show');
	    	});
	    });	
    </script>
  </body>
</html>
	      			