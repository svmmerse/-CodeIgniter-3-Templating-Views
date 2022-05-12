<!-- Header Layout -->


<!-- Custom Assets CSS Disini-->
<!-- <style>
	.bg-login-image {
		background: url('https://distyindonesia.com/elearning/pluginfile.php/95/course/overviewfiles/pemrograman%20web%20mvc.png') !important;
		background-position: center !important;
		background-size: cover !important;
	}
</style> -->


<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-md-6">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">LOGIN</h1>
								</div>
								<form class="user">
									<div class="form-group">
										<label for="idregister">ID Registrasi</label>
										<input type="text" class="form-control form-control-user" placeholder="ID Anda">
									</div>
									<div class="form-group">
										<label for="pass">Password</label>
										<input type="password" class="form-control form-control-user" placeholder="Password">
									</div>

									<a href="index.html" class="btn btn-primary btn-user btn-block">
										Login
									</a>
								</form>
								<hr>
								<div class="text-center">
									Belum Punya Akun? <a class="small" href="<?php echo base_url(); ?>register">Register</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>