@include("admin.adminCommon.head")

<body class="bg-login">
	<!--wrapper-->
	<div class="wrapper">
		<div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
			<div class="container-fluid">
				<div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
					<div class="col mx-auto">
						<div class="mb-4 text-center">
							<img src="{{ asset('eazpay-admin/assets/images/logo-img.png')}}" width="180" alt="" />
						</div>
						<div class="card">
							<div class="card-body">
								<div class="border p-4 rounded">
									<div class="text-center">
										<h3 class="">Sign in</h3>
										<p>Don't have an account yet? <a href="{{ url('/') }}">Sign up here</a>
										</p>
									</div> 
									<div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH Email</span>
										<hr/>
									</div>
									@if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
          @endif
		  
									<div class="form-body">
											{{ Form::open(["url"=>"admin/login","class"=>"row g-3", "autocomplete"=>"off","id"=>"registerFrm","method"=>"POST"]) }}
											<div class="col-12">
												<label for="inputEmailAddress" class="form-label">Wallet Address</label>
												<input type="text" class="form-control" id="inputEmailAddress" required="required" name="wallet_address" placeholder="Enter Wallet Address">
											</div> 
											<div class="col-md-6">
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
													<label class="form-check-label" for="flexSwitchCheckChecked">Remember Me</label>
												</div>
											</div>
											<div class="col-md-6 text-end">	
											</div>
											<div class="col-12">
												<div class="d-grid">
													<button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Sign in</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end row-->
			</div>
		</div>
	</div>
	<!--end wrapper-->
	@include("admin.adminCommon.footer")