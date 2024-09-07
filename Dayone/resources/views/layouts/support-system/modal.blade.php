
        <!-- LOGIN MODAL -->
				<div class="modal fade"  id="loginmodal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Login</h5>
								<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body p-0">
								<div class="single-page customerpage">
									<div class="wrapper wrapper2 box-shadow-0 border-0">
										<div class="card-body pb-4">
											<div class="btn-list d-flex">
												<a class="btn btn-google btn-block" href="https://www.google.com/gmail/"><i class="fa fa-google fa-1x me-2"></i> Google</a>
												<a class="btn btn-twitter" href="https://twitter.com/"><i class="fa fa-twitter fa-1x"></i></a>
												<a class="btn btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook fa-1x"></i></a>
											</div>
										</div>
										<hr class="divider">
										<form class="card-body pt-3" id="login" name="login">
											<div class="form-group">
												<label class="form-label">Mail or Username</label>
												<input class="form-control" placeholder="Email" type="email">
											</div>
											<div class="form-group">
												<label class="form-label">Password</label>
												<input class="form-control" placeholder="password" type="password">
											</div>
											<div class="submit">
												<a class="btn btn-primary btn-block" href="{{url('index')}}">Login</a>
											</div>
											<div class="text-center mt-3">
												<p class="mb-2"><a  href="javascript:void(0);">Forgot Password</a></p>
												<p class="text-dark mb-0">Don't have account?<a class="text-primary ms-1"  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#registermodal" data-bs-dismiss="modal">Register</a></p>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END LOGIN MODAL -->

				<!-- REGISTER MODAL -->
				<div class="modal fade"  id="registermodal">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Register</h5>
								<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body p-0">
								<div class="single-page customerpage">
									<div class="wrapper wrapper2 box-shadow-0 border-0">
										<div class="card-body pb-4">
											<div class="btn-list d-flex">
												<a class="btn btn-google btn-block" href="https://www.google.com/gmail/"><i class="fa fa-google fa-1x me-2"></i> Google</a>
												<a class="btn btn-twitter" href="https://twitter.com/"><i class="fa fa-twitter fa-1x"></i></a>
												<a class="btn btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook fa-1x"></i></a>
											</div>
										</div>
										<hr class="divider">
										<form class="card-body pt-3" id="register" name="register">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">First Name</label>
														<input class="form-control" placeholder="First Name" type="text">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="form-label">Last Name</label>
														<input class="form-control" placeholder="Last Name" type="text">
													</div>
												</div>
											</div>
											<div class="form-group">
												<label class="form-label">Mail or Username</label>
												<input class="form-control" placeholder="Email" type="email">
											</div>
											<div class="form-group">
												<label class="form-label">Password</label>
												<input class="form-control" placeholder="password" type="password">
											</div>
											<div class="form-group">
												<label class="form-label">Captcha</label>
												<input class="form-control" placeholder="captch" type="text">
												<div class="captch-body">
													<img src="{{asset('assets/images/png/captcha.png')}}" alt="img">
												</div>
											</div>
											<div class="submit">
												<a class="btn btn-primary btn-block" href="{{url('index')}}">Submit</a>
											</div>
											<div class="text-center mt-3">
												<p class="text-dark mb-0">Already have an account?<a class="text-primary ms-1"  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#loginmodal" data-bs-dismiss="modal">Login</a></p>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END RIGISTER MODAL -->
