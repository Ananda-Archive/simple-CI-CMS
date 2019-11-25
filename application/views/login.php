		<div class="container-fluid">
			<div class="row vh-100 d-flex justify-content-center align-items-center">
				<div class="col-5 login-box" align="center">
					<div class="login-title mt-5 mb-4">
						<h1>LOGIN</h1>
					</div>
					<div class="login-form">
						<form action="login/" method="POST">
							<div class="form-group">
								<label>Email address</label>
								<input type="email" class="form-control" name="emailLogin" placeholder="Enter email">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control" name="passLogin" placeholder="Enter Password">
							</div>
							<div class="d-flex justify-content-center">
								<button type="submit" class="btn btn-success btnLogin">Login</button>
							</div>
						</form>
						<a href="<?="register"?>">
							<div class="d-flex justify-content-center mt-3">
								<button class="btn btn-danger btnReg">Register</button>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
