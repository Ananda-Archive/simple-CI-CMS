		<div class="container-fluid vh-100">
			<div class="row vh-100">
				<div class="col-12 d-flex justify-content-center align-items-center">
					<div class="row login-box d-flex justify-content-center p-5">
						<div class="login-title col-12 d-flex justify-content-center">
							<h1>LOGIN</h1>
						</div>
						<div class="login-form col-11">
							<form action="<?php echo base_url('login/userlogin'); ?>" method="POST">
								<div class="form-group row">
									<label>Email address</label>
									<input type="email" class="form-control" name="emailLogin" placeholder="Enter email">
								</div>
								<div class="form-group row">
									<label>Password</label>
									<input type="password" class="form-control" name="passLogin" placeholder="Enter Password">
								</div>
								<div class="row">
									<div class="col-12 d-flex justify-content-center">
										<?php if ($this->session->flashdata('login_error')) { ?>
											<div class="alert alert-danger"> <?= $this->session->flashdata('login_error') ?> </div>
										<?php } ?>
									</div>
								</div>
								<div class="row d-flex justify-content-center">
									<button type="submit" class="btn btn-success btnLogin">Login</button>
								</div>
							</form>
							<a href="<?="register"?>">
								<div class="row d-flex justify-content-center mt-3">
									<button class="btn btn-danger btnReg">Register</button>
								</div>
							</a>
							<row>
								<div class="col-12 d-flex justify-content-center mt-1">
									<a href="<?=base_url()?>">Back to Home</a>
								</div>
							</row>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
