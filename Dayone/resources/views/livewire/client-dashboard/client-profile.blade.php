@extends('layouts.clientapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">User Profile</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </a>
										<a  href="javascript:void(0);" class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </a>
										<a  href="javascript:void(0);" class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </a>
									</div>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-3 col-md-12 col-lg-12">
								<div class="card user-pro-list overflow-hidden">
									<div class="card-body">
										<div class="user-pic text-center">
											<span class="avatar avatar-xxl brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})">
												<span class="avatar-status bg-green"></span>
											</span>
											<div class="pro-user mt-3">
												<h5 class="pro-user-username text-dark mb-1 fs-16">Julia Walker</h5>
												<h6 class="pro-user-desc text-muted fs-12">CEO</h6>
												<div class="btn-list mt-5">
													<a  href="javascript:void(0);" class="btn btn-primary">Send Message</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class="mt-0 text-start">
														<span class="fs-16 font-weight-semibold">Completed Projects</span>
														<h3 class="mb-0 mt-1 text-success fs-25">1254</h3>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-success-transparent my-auto  float-end"> <i class="las la-project-diagram"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class="mt-0 text-start">
														<span class="fs-16 font-weight-semibold">Paid Invoice</span>
														<h3 class="mb-0 mt-1 text-primary  fs-25">42</h3>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-primary-transparent my-auto  float-end"> <i class="las la-file-invoice"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class="mt-0 text-start">
														<span class="fs-16 font-weight-semibold">Inprogress Projects</span>
														<h3 class="mb-0 mt-1 text-secondary fs-25">11</h3>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-secondary-transparent my-auto  float-end"> <i class="las la-folder-plus"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body">
											<div class="row">
												<div class="col-8">
													<div class="mt-0 text-start">
														<span class="fs-16 font-weight-semibold">Paid Amount</span>
														<h3 class="mb-0 mt-1 text-danger fs-25">$27,138</h3>
													</div>
												</div>
												<div class="col-4">
													<div class="icon1 bg-danger-transparent my-auto  float-end"> <i class="las la-file-invoice-dollar"></i> </div>
												</div>
											</div>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-9 col-md-12 col-lg-12">
								<div class="tab-menu-heading hremp-tabs p-0 ">
									<div class="tabs-menu1">
										<!-- Tabs -->
										<ul class="nav panel-tabs">
											<li class="ms-4"><a href="#tab5" class="active"  data-bs-toggle="tab">My Profile</a></li>
											<li><a href="#tab6" data-bs-toggle="tab">Projects</a></li>
											<li><a href="#tab7" data-bs-toggle="tab">Tasks</a></li>
											<li><a href="#tab8" data-bs-toggle="tab">Invoices</a></li>
											<li><a href="#tab9" data-bs-toggle="tab">Payments</a></li>
											<li><a href="#tab10"  data-bs-toggle="tab">Tickets</a></li>
											<li><a href="#tab11" data-bs-toggle="tab">Note</a></li>
										</ul>
									</div>
								</div>
								<div class="panel-body tabs-menu-body hremp-tabs1 p-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab5">
											<div class="card-body">
												<h4 class="mb-4 font-weight-bold">Basic</h4>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Client ID</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"  placeholder="Name" value="#SPT-001">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Client Name</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-6">
																	<input type="text" class="form-control"  placeholder="First Name" value="Julia">
																	<span class="text-muted"></span>
																</div>
																<div class="col-md-6">
																	<input type="text" class="form-control"  placeholder="Last Name" value="Walker">
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Contact Number</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"  placeholder="Phone Number" value="+9022291721">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Emergency Contact Number 01</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"  placeholder="Contact Number01" value="8695324712">
														</div>
													</div>
												</div>
												<div class="form-group ">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label">Gender</label>
														</div>
														<div class="col-md-9">
															<div class="custom-controls-stacked d-md-flex">
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios4" value="option1">
																	<span class="custom-control-label">Male</span>
																</label>
																<label class="custom-control custom-radio">
																	<input type="radio" class="custom-control-input" name="example-radios4" value="option2" checked>
																	<span class="custom-control-label">Female</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Company Name</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"  placeholder="email" value="Abcd pvt Limited">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Email</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"  placeholder="email" value="julia@gmail.com">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Website</label>
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control"  placeholder="email" value="www.abcd.com">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Address 01</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-4 mb-4">
																	<input type="text" class="form-control" placeholder="Enter City" value="Chicago">
																</div>
																<div class="col-md-4 mb-4">
																	<input type="text" class="form-control" placeholder="Enter Postal Code" value="235861">
																</div>
																<div class="col-md-4 mb-4">
																	<select class="form-control select2" data-placeholder="Select Country">
																		<option label="Select Country"></option>
																		<option value="1">Germany</option>
																		<option value="2">Real Estate</option>
																		<option value="3">Canada</option>
																		<option value="4" selected>USA</option>
																		<option value="5">Afghanistan</option>
																		<option value="6">Albania</option>
																		<option value="7">China</option>
																		<option value="8">Denmark</option>
																		<option value="9">Finland</option>
																		<option value="10">India</option>
																		<option value="11">Kiribati</option>
																		<option value="12">Kuwait</option>
																		<option value="13">Mexico</option>
																		<option value="14">Pakistan</option>
																	</select>
																</div>
															</div>
															<textarea rows="3" class="form-control" placeholder="Address1">4102 Masonic Hill Road Little Rock Arkansas-727212</textarea>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Address 02</label>
														</div>
														<div class="col-md-9">
															<div class="row">
																<div class="col-md-4 mb-4">
																	<input type="text" class="form-control" placeholder="Enter City" value="">
																</div>
																<div class="col-md-4 mb-4">
																	<input type="text" class="form-control" placeholder="Enter Postal Code" value="">
																</div>
																<div class="col-md-4 mb-4">
																	<select class="form-control select2" data-placeholder="Select Country">
																		<option label="Select Country"></option>
																		<option value="1">Germany</option>
																		<option value="2">Real Estate</option>
																		<option value="3">Canada</option>
																		<option value="4">USA</option>
																		<option value="5">Afghanistan</option>
																		<option value="6">Albania</option>
																		<option value="7">China</option>
																		<option value="8">Denmark</option>
																		<option value="9">Finland</option>
																		<option value="10">India</option>
																		<option value="11">Kiribati</option>
																		<option value="12">Kuwait</option>
																		<option value="13">Mexico</option>
																		<option value="14">Pakistan</option>
																	</select>
																</div>
															</div>
															<textarea rows="3" class="form-control" placeholder="Address2"></textarea>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<div class="form-label mb-0 mt-2">Upload Photo</div>
														</div>
														<div class="col-md-9">
														<div class="form-group">
															<label class="form-label"></label>
																<input class="form-control" type="file">
								                          </div>
														</div>
													</div>
												</div>
												<h4 class="mb-5 mt-7 font-weight-bold">Change Password</h4>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">New Password</label>
														</div>
														<div class="col-md-9">
															<input type="password" class="form-control"  placeholder="Enter Min 5 Character" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3">
															<label class="form-label mb-0 mt-2">Confirm Password</label>
														</div>
														<div class="col-md-9">
															<input type="password" class="form-control"  placeholder="Re-Type Password" value="">
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer text-end">
												<a  href="javascript:void(0);" class="btn btn-primary btn-lg my-1">Updated</a>
												<a  href="javascript:void(0);" class="btn btn-danger btn-lg my-1">Cancel</a>
											</div>
										</div>
										<div class="tab-pane" id="tab6">
											<div class="card-body">
												<div class="table-responsive">
													<a  href="javascript:void(0);" class="btn btn-primary btn-tableview" data-bs-toggle="modal" data-bs-target="#newprojectmodal">Add Project</a>
													<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="project-list">
														<thead>
															<tr>
																<th class="border-bottom-0 text-center">No</th>
																<th class="border-bottom-0">Task</th>
																<th class="border-bottom-0">Team</th>
																<th class="border-bottom-0">Priority</th>
																<th class="border-bottom-0">Start Date</th>
																<th class="border-bottom-0">Deadline</th>
																<th class="border-bottom-0">Project Status</th>
																<th class="border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-center">1</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Website Development</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>12-02-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">62%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-60"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">2</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Mobile App</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>01-01-2021</td>
																<td>22-04-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">45%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-45"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">3</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Wordpress theme Design</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-warning-light">Medium</span></td>
																<td>11-04-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">53%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-50"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">4</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Logo Design</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>11-04-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">67%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-65"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">5</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Laravel Development</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>11-03-2021</td>
																<td>19-05-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">57%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-55"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">6</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Website Development</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>21-01-2021</td>
																<td>15-03-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">80%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-80"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">7</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Wordpress Theme Design</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-warning-light">Medium</span></td>
																<td>21-01-2021</td>
																<td>15-03-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">75%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-75"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">8</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Laravel Development</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>23-01-2021</td>
																<td>25-02-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">65%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-65"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">9</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Mobile App</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>13-03-2021</td>
																<td>05-05-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">100%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-100"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">10</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span>Website Development</span>
																	</a>
																</td>
																<td>
																	<div class="avatar-list avatar-list-stacked">
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																		<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																	</div>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>11-04-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="d-flex align-items-end justify-content-between">
																		<h6 class="fs-12">Status</h6>
																		<h6 class="fs-12">67%</h6>
																	</div>
																	<div class="progress h-1">
																		<div class="progress-bar bg-success w-65"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab7">
											<div class="card-body">
												<div class="table-responsive">
													<a  href="javascript:void(0);" class="btn btn-primary btn-tableview">Add Task</a>
													<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="task-list">
														<thead>
															<tr>
																<th class="border-bottom-0 text-center">No</th>
																<th class="border-bottom-0">Task</th>
																<th class="border-bottom-0">Assign To</th>
																<th class="border-bottom-0">Priority</th>
																<th class="border-bottom-0">Start Date</th>
																<th class="border-bottom-0">Deadline</th>
																<th class="border-bottom-0">Project Status</th>
																<th class="border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-center">1</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Design Updated</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>12-02-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-60"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">2</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Code Updated</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Justin Parr</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>01-01-2021</td>
																<td>22-04-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-45"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">3</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Issues fixed </span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Amelia Russell</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-warning-light">Medium</span></td>
																<td>11-04-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-50"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">4</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Testing</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Ryan Young</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>11-04-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-65"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">5</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Angular Issues fixed </span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Sophie Anderson</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>11-03-2021</td>
																<td>19-05-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-55"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">6</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Marketing  materials Issues</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Justin Parr</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>21-01-2021</td>
																<td>15-03-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-80"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">7</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Application Bugs fix</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Jennifer Hardacre</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-warning-light">Medium</span></td>
																<td>21-01-2021</td>
																<td>15-03-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-75"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">8</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Theme update</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Michael Sutherland</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>23-01-2021</td>
																<td>25-02-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-65"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">9</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Jquery Issues Fix</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Faith Harris</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-danger-light">High</span></td>
																<td>13-03-2021</td>
																<td>05-05-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-100"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">10</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Testing</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Austin Bell</h6>
																		</div>
																	</a>
																</td>
																<td><span class="badge badge-success-light">Low</span></td>
																<td>11-04-2021</td>
																<td>16-06-2021</td>
																<td>
																	<div class="progress h-2">
																		<div class="progress-bar bg-success w-65"></div>
																	</div>
																</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab8">
											<div class="card-body">
												<div class="table-responsive">
													<a  href="javascript:void(0);" class="btn btn-primary btn-tableview">Add Invoice</a>
													<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="invoice-tables">
														<thead>
															<tr>
																<th class="border-bottom-0">InvoiceID</th>
																<th class="border-bottom-0">Amount</th>
																<th class="border-bottom-0">Invoice Date</th>
																<th class="border-bottom-0">Due Date</th>
																<th class="border-bottom-0">Payment</th>
																<th class="border-bottom-0">Status</th>
																<th class="border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-0478</a>
																</td>
																<td>$345.00</td>
																<td>12-01-2021</td>
																<td>14-02-2021</td>
																<td>
																	<span class="text-primary">$345.000</span>
																</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-1245</a>
																</td>
																<td>$834.00</td>
																<td>12-01-2021</td>
																<td>14-02-2021</td>
																<td>
																	<span class="text-primary">$834.000</span>
																</td>
																<td><span class="badge badge-danger-light">UnPaid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-5280</a>
																</td>
																<td>$16,753.00</td>
																<td>21-01-2021</td>
																<td>15-01-2021</td>
																<td>
																	<span class="text-primary">$16,753.000</span>
																</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-2876</a>
																</td>
																<td>$297.00</td>
																<td>05-02-2021</td>
																<td>21-02-2021</td>
																<td>
																	<span class="text-primary">$297.000</span>
																</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-1986</a>
																</td>
																<td>$12,897.00</td>
																<td>01-01-2021</td>
																<td>24-02-2021</td>
																<td>
																	<span class="text-primary">$12,897.00</span>
																</td>
																<td><span class="badge badge-danger-light">UnPaid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-2689</a>
																</td>
																<td>$29,652.00</td>
																<td>01-01-2021</td>
																<td>04-02-2021</td>
																<td>
																	<span class="text-primary">$29,652.00</span>
																</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-0298</a>
																</td>
																<td>$67,298.00</td>
																<td>02-02-2021</td>
																<td>24-02-2021</td>
																<td>
																	<span class="text-primary">$67,298.00</span>
																</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-0298</a>
																</td>
																<td>$87,287.00</td>
																<td>12-01-2021</td>
																<td>21-02-2021</td>
																<td>
																	<span class="text-primary">$87,287.00</span>
																</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-7618</a>
																</td>
																<td>$29,674.00</td>
																<td>04-02-2021</td>
																<td>14-03-2021</td>
																<td>
																	<span class="text-primary">$29,674.00</span>
																</td>
																<td><span class="badge badge-danger-light">UnPaid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#INV-0287</a>
																</td>
																<td>$25,186.00</td>
																<td>02-01-2021</td>
																<td>12-02-2021</td>
																<td>
																	<span class="text-primary">$25,186.00</span>
																</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab9">
											<div class="card-body">
												<div class="table-responsive">
													<a  href="javascript:void(0);" class="btn btn-primary btn-tableview">Add Payment</a>
													<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="payment-tables">
														<thead>
															<tr>
																<th class="border-bottom-0">PaymentID</th>
																<th class="border-bottom-0">($)Amount</th>
																<th class="border-bottom-0">Payment Type</th>
																<th class="border-bottom-0">Due Date</th>
																<th class="border-bottom-0">Status</th>
																<th class="border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-0478</a>
																</td>
																<td><span class="font-weight-semibold">$345.00</span></td>
																<td>Cash</td>
																<td>12-01-2021</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-0329</a>
																</td>
																<td><span class="font-weight-semibold">$897.00</span></td>
																<td>Card</td>
																<td>16-02-2021</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-0298</a>
																</td>
																<td><span class="font-weight-semibold">$298.00</span></td>
																<td>Cash</td>
																<td>05-03-2021</td>
																<td><span class="badge badge-danger-light">UnPaid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-0560</a>
																</td>
																<td><span class="font-weight-semibold">$839.00</span></td>
																<td>Online Payment</td>
																<td>12-04-2021</td>
																<td><span class="badge badge-danger-light">UnPaid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-0927</a>
																</td>
																<td><span class="font-weight-semibold">$9,238.00</span></td>
																<td>Cash</td>
																<td>05-02-2021</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-2091</a>
																</td>
																<td><span class="font-weight-semibold">$11,342.00</span></td>
																<td>Online Payment</td>
																<td>12-03-2021</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-1342</a>
																</td>
																<td><span class="font-weight-semibold">$82,341.00</span></td>
																<td>Cash</td>
																<td>13-02-2021</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-1387</a>
																</td>
																<td><span class="font-weight-semibold">$9,238.00</span></td>
																<td>Card</td>
																<td>12-02-2021</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-3298</a>
																</td>
																<td><span class="font-weight-semibold">$12,765.00</span></td>
																<td>Cash</td>
																<td>25-03-2021</td>
																<td><span class="badge badge-danger-light">UnPaid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<a  href="javascript:void(0);">#PAY-2125</a>
																</td>
																<td><span class="font-weight-semibold">$35,250.00</span></td>
																<td>Online Payment</td>
																<td>16-03-2021</td>
																<td><span class="badge badge-success-light">Paid</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab10">
											<div class="card-body">
												<div class="table-responsive">
													<a  href="javascript:void(0);" class="btn btn-primary btn-tableview">Add Ticket</a>
													<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="ticket-tables">
														<thead>
															<tr>
																<th class="border-bottom-0">TicketID</th>
																<th class="border-bottom-0">Title</th>
																<th class="border-bottom-0">Category</th>
																<th class="border-bottom-0">Assigned To</th>
																<th class="border-bottom-0">Status</th>
																<th class="border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>#Ticket-01</td>
																<td>
																	<a  href="javascript:void(0);">Sed ut perspiciatis unde omnis iste natus</a>
																</td>
																<td>Support</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Faith Harris</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-primary">New</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-02</td>
																<td>
																	<a  href="javascript:void(0);">Sed ut perspiciatis unde omnis iste natus</a>
																</td>
																<td>Services</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Austin Bell</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-success">Closed</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-03</td>
																<td>
																	<a  href="javascript:void(0);">Sed ut perspiciatis unde omnis iste natus</a>
																</td>
																<td>Customization</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Maria Bower</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-orange">Open</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-04</td>
																<td>
																	<a  href="javascript:void(0);">Excepteur sint occaecat cupidatat</a>
																</td>
																<td>Support</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Peter Hill</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-success">Closed</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-05</td>
																<td>
																	<a  href="javascript:void(0);">Et harum quidem rerum facilis</a>
																</td>
																<td>Services</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Victoria Lyman</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-success">Closed</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-06</td>
																<td>
																	<a  href="javascript:void(0);">Ut aut reiciendis voluptatibus</a>
																</td>
																<td>Customization</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Adam Quinn</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-success">Closed</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-07</td>
																<td>
																	<a  href="javascript:void(0);">Maiores alias consequatur aut</a>
																</td>
																<td>Support</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-primary">New</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-08</td>
																<td>
																	<a  href="javascript:void(0);">Quis autem vel eum iure</a>
																</td>
																<td>Support</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-orange">Open</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td>#Ticket-09</td>
																<td>
																	<a  href="javascript:void(0);">Quis autem vel eum iure</a>
																</td>
																<td>Support</td>
																<td>
																	<div class="d-flex">
																		<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																		<div class="me-3 mt-0 mt-sm-2 d-block">
																			<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																		</div>
																	</div>
																</td>
																<td><span class="badge badge-orange">Open</span></td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab11">
											<div class="card-body">
												<div class="note-content">
													<div class="form-group">
														<label class="form-label">Title</label>
														<input class="form-control" placeholder="text">
													</div>
													<div class="form-group">
														<label class="form-label">Note:</label>
														<div class="summernote"></div>
													</div>
													<div>
														<a  href="javascript:void(0);" class="btn btn-primary">Submit</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')

            <!-- NEW PROJECT MODAL -->
            <div class="modal fade"  id="newprojectmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Project</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project ID</label>
										<input class="form-control" placeholder="Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project Title</label>
										<input class="form-control" placeholder="Text">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Department:</label>
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Department">
											<option label="Select Department"></option>
											<option value="1">Designing Department</option>
											<option value="2">Development Department</option>
											<option value="3">Marketing Department</option>
											<option value="4">Human Resource Department</option>
											<option value="5">Managers Department</option>
											<option value="6">Application Department</option>
											<option value="7">Support Department</option>
											<option value="8">IT Department</option>
											<option value="9">Technical Department</option>
											<option value="10">Accounts Department</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project Priority:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
											<option label="Select Priority"></option>
											<option value="1">High</option>
											<option value="2">Medium</option>
											<option value="3">Low</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client:</label>
										<select name="attendance"  class="form-control custom-select select2" data-placeholder="Enter Client">
											<option label="Enter Client"></option>
											<option value="1">Client 01</option>
											<option value="2">Client 02</option>
											<option value="3">Client 03</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">($)Price:</label>
										<input class="form-control" placeholder="Enter Price eg:$69.00">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Assigned Team:</label>
								<select name="attendance"  class="form-control custom-select select2" multiple="multiple" data-placeholder="Select Employee">
									<option label="Select Employee"></option>
									<option value="1">Faith Harris</option>
									<option value="2">Austin Bell</option>
									<option value="3">Maria Bower</option>
									<option value="4">Peter Hill</option>
									<option value="5">Victoria Lyman</option>
									<option value="6">Adam Quinn</option>
									<option value="7">Melanie Coleman</option>
									<option value="8">Max Wilson</option>
									<option value="9">Amelia Russell</option>
									<option value="10">Justin Metcalfe</option>
									<option value="11">Ryan Young</option>
									<option value="12">Jennifer Hardacre</option>
									<option value="13">Justin Parr</option>
									<option value="14">Julia Hodges</option>
									<option value="15">Michael Sutherland</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Form:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">To:</label>
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="editor"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Files:</label>
								<input class="form-control" type="file">
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label me-5">Work Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option5">
									<span class="custom-control-label">Active</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Completed</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">On going</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
									<span class="custom-control-label">Pending</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option4">
									<span class="custom-control-label">Not Started</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option6">
									<span class="custom-control-label">Canceled</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success projectnotify">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END NEW PROJECT MODAL -->

			<!-- VIEW SUB-TASK MODAL -->
			<div class="task-fade sidebar-modal">
				<div class="sidebar-dialog task-modal">
					<div class="sidebar-content">
						<div class="sidebar-header">
							<div>
								<h4 class=""><span class="font-weight-normal text-muted me-2">Task 01</span> Design Updated </h4>
								<label class="me-2">Priority:</label><span class="badge badge-danger-light">High</span>
							</div>
							<div class="ms-auto mt-3">
								<a  href="javascript:void(0);" class="btn btn-success me-2">Mark as Complete</a>
								<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="feather feather-more-horizontal"></i>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
								<a  href="javascript:void(0);" class="action-btns dismiss">
									<i class="feather feather-x"></i>
								</a>
							</div>
						</div>
						<div class="row no-gutters">
							<div class="col-md-8 border-end">
								<div class="card-body">
									<h5 class="mb-4  font-weight-semibold">Description</h5>
									<div class="main-profile-bio mb-0">
										<span class="fs-14 mt-2 text-muted">Mobile App Ui Designing and Prototyping
											It is a long established fact that a reader will be distracted by the readable content of a page when looking
										</span>
										<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy  when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries nchanged.</p>
										<h5 class="mb-4 mt-5 font-weight-semibold">Attachments</h5>
										<div class="row">
											<div class="col-md-4">
												<div class="p-3 br-7 border text-center">
													<a  href="javascript:void(0);" class="text-center">
														<img src="{{asset('assets/images/files/attachments/2.png')}}" alt="img" class="avatar bg-transparent avatar-lg mb-2">
														<div>
															<span class="font-weight-semibold fs-12">doc.pdf<span class="text-muted ms-2">(23.8 KB)</span></span>
														</div>
													</a>
												</div>
											</div>
											<div class="col-md-4">
												<div class="p-3 br-7 border text-center mt-4 mt-lg-0">
													<a  href="javascript:void(0);" class="text-center">
														<img src="{{asset('assets/images/files/attachments/4.png')}}" alt="img" class="avatar bg-transparent avatar-lg mb-2">
														<div>
															<span class="font-weight-semibold fs-12">Project<span class="text-muted ms-2">(578.6MB)</span></span>
														</div>
													</a>
												</div>
											</div>
											<div class="col-md-4">
												<div class="p-5 br-7 border text-center mt-4 mt-lg-0">
													<a  href="javascript:void(0);" class="text-center fs-35 text-success">
														<i class="fe feather-plus-circle"></i>
													</a>
												</div>
											</div>
										</div>
										<h5 class="mb-4 mt-5 font-weight-semibold">Add Comment</h5>
										<div class="form-group">
											<label class="form-label">Title</label>
											<input class="form-control" placeholder="text">
										</div>
										<div class="form-group">
											<label class="form-label">Description</label>
											<div class="summernote1"></div>
										</div>
										<a  href="javascript:void(0);" class="btn btn-primary">Submit</a>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="card-body">
									<div class="form-group mb-5">
										<label>Assigned To:</label>
										<div class="d-flex">
											<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
											<div class="me-3 mt-0 mt-sm-1 d-block">
												<h6 class="mb-1 fs-14">Faith Harris</h6>
												<p class="text-muted mb-0 fs-12">Web Designer</p>
											</div>
										</div>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Department:</label>
										<p class="form-label">Designing</p>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Start Date:</label>
										<p class="form-label">12-02-2021</p>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Deadline Date:</label>
										<p class="form-label">16-06-2021</p>
									</div>
									<div class="form-group mb-5">
										<label class="mb-1">Work Status:</label>
										<div><span class="badge badge-warning">On hold</span></div>
									</div>
									<div class="d-flex align-items-end justify-content-between mt-5">
										<h6 class="">Project Status</h6>
										<h6 class="font-weight-bold mb-1">30%</h6>
									</div>
									<div class="progress progress-sm">
										<div class="progress-bar bg-success w-30"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END VIEW SUB-TASK MODAL  -->

@endsection

@section('scripts')

        <!-- NOTIFICATIONS JS -->
        <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

        <!-- INTERNAL CHART JS -->
        <script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL SUMMERNOTE JS -->
		<script src="{{asset('assets/plugins/summer-note/summernote1.js')}}"></script>
        <script src="{{asset('assets/js/summernote.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/client/client-profile.js')}}"></script>

@endsection
