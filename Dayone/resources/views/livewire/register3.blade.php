@extends('layouts.custom-app')

@section('styles')


@endsection

@section('content')

					<!-- PAGE -->
				@section('switcher-icon')

				<div class="page responsive-log relative error-page3">
				@endsection
				
					<div class="row no-gutters">
						<div class="col-md-6 d-md-block d-none  log-image1">
							<div class="cover-image h-100vh" data-bs-image-src="{{asset('assets/images/photos/login3.jpg')}}">
								<div class="container">
									<div class="customlogin-imgcontent">
										<h2 class="mb-3 fs-35 text-white">Welcome To Dayone</h2>
										<p class="text-white-50">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 bg-white log-image1">
							<div class="container">
								<div class="customlogin-content pt-5 pt-md-9">
									<div class="pt-4 pb-2 ps-2">
										<a class="header-brand" href="{{url('index')}}">
											<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img custom-logo" alt="Dayonelogo">
											<img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img custom-logo-dark" alt="Dayonelogo">
										</a>
									</div>
									<div class="p-4 pt-6">
										<h1 class="mb-2">Register</h1>
										<p class="text-muted">Create new account</p>
									</div>
									<form class="card-body pt-3" id="register" name="register">
										<div class="form-group">
										<label class="">Username</label>
											<div class="input-group mb-4">
												<div class="input-group">
													<a class="input-group-text">
														<i class="fe fe-user"></i>
													</a>
													<input class="form-control" placeholder="Email">
												</div>
											</div>
										</div>
										<div class="form-group">
										<label class="">Mail or Username</label>
											<div class="input-group mb-4">
												<div class="input-group">
													<a class="input-group-text">
														<i class="fe fe-mail"></i>
													</a>
													<input class="form-control" placeholder="Email">
												</div>
											</div>
										</div>
										<div class="form-group">
										<label class="form-label">Password</label>
											<div class="input-group mb-4">
												<div class="input-group" id="Password-toggle">
													<a href="" class="input-group-text">
														<i class="fe fe-eye-off" aria-hidden="true"></i>
													</a>
													<input class="form-control" type="password" placeholder="Password">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="custom-control custom-checkbox">
												<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
												<span class="custom-control-label">I agree to the <a  href="javascript:void(0);" class="text-primary">Terms of services</a> and <a  href="javascript:void(0);" class="text-primary">Privacy policy</a></span>
											</label>
										</div>
										<div class="submit">
											<a class="btn btn-primary btn-block" href="{{url('index')}}">Create Account</a>
										</div>
										<div class="text-center mt-4">
											<p class="text-dark mb-0">Already have an account?<a class="text-primary ms-1"  href="javascript:void(0);">LogIn</a></p>
										</div>
									</form>
									<div class="card-body border-top-0 pb-6 pt-2">
										<div class="text-center">
											<span class="avatar brround me-3 bg-primary-transparent text-primary"><i class="ri-facebook-line"></i></span>
											<span class="avatar brround me-3 bg-primary-transparent text-primary"><i class="ri-instagram-line"></i></span>
											<span class="avatar brround me-3 bg-primary-transparent text-primary"><i class="ri-twitter-line"></i></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END PAGE -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection