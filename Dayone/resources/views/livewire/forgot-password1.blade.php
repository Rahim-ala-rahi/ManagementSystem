@extends('layouts.custom-app')

@section('styles')


@endsection

@section('content')

				@section('switcher-icon')

				<div class="page responsive-log login-bg">
				@endsection
				
					<div class="page-single">
						<div class="container">
							<div class="row">
								<div class="col mx-auto">
									<div class="row justify-content-center">
										<div class="col-md-8 col-lg-6 col-xl-4 col-xxl-4">
											<div class="card my-5">
												<div class="p-4 pt-6 text-center">
													<h1 class="mb-2">Forgot Password</h1>
													<p class="text-muted">Enter the email address registered on your account</p>
												</div>
												<form class="card-body pt-3" id="forgot" name="forgot">
													<div class="form-group">
														<label class="form-label">E-Mail</label>
														<div class="input-group mb-4">
															<div class="input-group">
																<a class="input-group-text">
																	<i class="fe fe-mail"></i>
																</a>
																<input class="form-control" placeholder="Email">
															</div>
														</div>
													</div>
													<div class="submit">
														<a class="btn btn-primary btn-block"  href="{{url('index')}}">Submit</a>
													</div>
													<div class="text-center mt-4">
														<p class="text-dark mb-0">Forgot It?<a class="text-primary ms-1"  href="javascript:void(0);">Send me Back</a></p>
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
						</div>
					</div>
				</div>

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
