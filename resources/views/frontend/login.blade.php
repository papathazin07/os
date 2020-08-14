@extends('frontendtemplate')
@section('content')
<div class="col-lg-9 py-5">
	<h2 class="text-center pt-5">Login Here!</h2>

	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-9">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-6 d-none d-lg-block">
							<img src="backend/itemimg/login.jpg" class="img-fluid w-100">
						</div>
						<div class="col-lg-6">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
								</div>
								<form class="user" method="POST" action="backend/signin.php">
									<div class="form-group">
										<input type="email" class="form-control form-control-user" placeholder="Enter Email Address..." name="login_email">
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" placeholder="Password" name="login_password">
									</div>

									<button type="submit" href="index.html" class="btn btn-primary btn-user btn-block">
										Login
									</button>

								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="forgot-password.html">Forgot Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="register.html">Create an Account!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div>
@endsection