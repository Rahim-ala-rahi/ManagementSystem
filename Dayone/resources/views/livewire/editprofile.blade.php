@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Editprofile</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class=" btn-list">
									<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
									<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
									<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-4 col-lg-5">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Edit Password</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Current Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">New Password</label>
											<input type="password" class="form-control" value="password">
										</div>
										<div class="form-group">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control" value="password">
										</div>
									</div>
									<div class="card-footer text-end">
										<a  href="javascript:void(0);" class="btn btn-primary">Updated</a>
										<a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
									</div>
								</div>
							</div>
							<div class="col-xl-8 col-lg-7">
								<div class="card">
									<div class="card-body">
										<div class="card-title">Basci info:</div>
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="First Name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Email address</label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Phone Number</label>
													<input type="number" class="form-control" placeholder="Number">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address</label>
													<input type="text" class="form-control" placeholder="Home Address">
												</div>
											</div>
											<div class="col-sm-6 col-md-4">
												<div class="form-group">
													<label class="form-label">City</label>
													<input type="text" class="form-control" placeholder="City">
												</div>
											</div>
											<div class="col-sm-6 col-md-3">
												<div class="form-group">
													<label class="form-label">Postal Code</label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label class="form-label">Country</label>
													<select class="form-control  select2" data-placeholder="Select Country">
														<option label="Select Country"></option>
														<option value="1">Germany</option>
														<option value="2">Canada</option>
														<option value="3">Usa</option>
														<option value="4">Afghanistan</option>
														<option value="5">Albania</option>
														<option value="6">China</option>
														<option value="7">Denmark</option>
														<option value="8">Finland</option>
														<option value="9">India</option>
														<option value="10">Kiribati</option>
														<option value="11">Kuwait</option>
														<option value="12">Mexico</option>
														<option value="13">Pakistan</option>
													</select>
												</div>
											</div>
										</div>
										<div class="card-title mt-5">External Links:</div>
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Facebook</label>
													<input type="text" class="form-control" placeholder="https://www.facebook.com/">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Google</label>
													<input type="text" class="form-control" placeholder="https://www.google.com/">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Twitter</label>
													<input type="text" class="form-control" placeholder="https://twitter.com/">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Pinterest</label>
													<input type="text" class="form-control" placeholder="https://in.pinterest.com/">
												</div>
											</div>
										</div>
										<div class="card-title font-weight-bold mt-5">About:</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">About Me</label>
													<textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-end">
										<a  href="javascript:void(0);" class="btn btn-lg btn-primary">Updated</a>
										<a  href="javascript:void(0);" class="btn btn-lg btn-danger">Cancel</a>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
