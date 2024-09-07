@extends('layouts.projectapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Project List</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newprojectmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Create New Project</a>
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
							<div class="col-xl-2 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body text-center">
											<span class="avatar avatar-lg bradius fs-20 bg-primary-transparent">125</span>
											<h5 class="mb-0 mt-3">Total Projects</h5>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body text-center">
											<span class="avatar avatar-lg bradius fs-20 bg-orange-transparent">33</span>
											<h5 class="mb-0 mt-3">Pending Projects</h5>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body text-center">
											<span class="avatar avatar-lg bradius fs-20 bg-secondary-transparent">56</span>
											<h5 class="mb-0 mt-3">Ongoing Projects</h5>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body text-center">
											<span class="avatar avatar-lg bradius fs-20 bg-info-transparent">08</span>
											<h5 class="mb-0 mt-3">Not Started Projects</h5>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body text-center">
											<span class="avatar avatar-lg bradius fs-20 bg-success-transparent">35</span>
											<h5 class="mb-0 mt-3">Completed Projects</h5>
										</div>
									</a>
								</div>
							</div>
							<div class="col-xl-2 col-lg-6 col-md-12">
								<div class="card">
									<a  href="javascript:void(0);">
										<div class="card-body text-center">
											<span class="avatar avatar-lg bradius fs-20 bg-danger-transparent">02</span>
											<h5 class="mb-0 mt-3">Canceled Projects</h5>
										</div>
									</a>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Recent Project Summary</h4>
										<div class="ms-auto">
											<div class="input-group">
												<input class="form-control" placeholder="Search....." type="text">
												<span class="input-group-btn">
													<button class="btn btn-light br-ts-0 br-bs-0" >
														<i class="fa fa-search"></i>
													</button>
												</span>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-xl-7">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="form-label">From:</label>
															<div class="input-group">
																<div class="input-group-prepend">
																	<div class="input-group-text">
																		<i class="feather feather-calendar"></i>
																	</div>
																</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
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
																</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-12 col-xl-3">
												<div class="form-group">
													<label class="form-label">Select Priority:</label>
													<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Priority">
														<option label="Select Priority"></option>
														<option value="1">High</option>
														<option value="2">Medium</option>
														<option value="3">Low</option>
													</select>
												</div>
											</div>
											<div class="col-md-12 col-xl-2">
												<div class="form-group mt-5">
													<a  href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="project-list">
												<thead>
													<tr>
														<th class="border-bottom-0">#ID</th>
														<th class="border-bottom-0">Project Title</th>
														<th class="border-bottom-0">Client</th>
														<th class="border-bottom-0">Team</th>
														<th class="border-bottom-0">Priority</th>
														<th class="border-bottom-0">Start Date</th>
														<th class="border-bottom-0">Deadline</th>
														<th class="border-bottom-0">Work Progress</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#67</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-primary dot-label1 me-2 mt-1"></span>
																<span>Mobile App</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Julia Walker</a>
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
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">30%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-primary w-80"></div>
															</div>
														</td>
														<td><span class="badge badge-primary">Active</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#45</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-warning dot-label1 me-2 mt-1"></span>
																<span>Website Development</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Diane Short</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-danger-light">High</span></td>
														<td>01-01-2021</td>
														<td>22-04-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">50%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-warning w-50"></div>
															</div>
														</td>
														<td><span class="badge badge-warning">On going</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#78</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-success dot-label1 me-2 mt-1"></span>
																<span>Wordpress theme Design</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Pippa Welch</a>
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
														<td><span class="badge badge-danger-light">High</span></td>
														<td>11-04-2021</td>
														<td>16-06-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">100%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="badge badge-success">Completed</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#96</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-success dot-label1 me-2 mt-1"></span>
																<span>Logo Design</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Gabrielle Fisher</a>
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
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">100%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="badge badge-success">Completed</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#87</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-orange dot-label1 me-2 mt-1"></span>
																<span>Laravel Development</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Gabrielle Fisher</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-warning-light">Medium</span></td>
														<td>11-03-2021</td>
														<td>16-06-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">30%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-orange w-30"></div>
															</div>
														</td>
														<td><span class="badge badge-orange">Pending</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#36</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-info dot-label1 me-2 mt-1"></span>
																<span>Website Development</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">James Wilson</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-success-light">Low</span></td>
														<td>05-02-2021</td>
														<td>21-04-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">0%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar"></div>
															</div>
														</td>
														<td><span class="badge badge-info">Not Started</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#86</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-danger dot-label1 me-2 mt-1"></span>
																<span>Wordpress Theme Design</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Ryan Terry</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/8.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-danger-light">High</span></td>
														<td>21-01-2021</td>
														<td>15-03-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">0%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar"></div>
															</div>
														</td>
														<td><span class="badge badge-danger">Canceled</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#82</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-success dot-label1 me-2 mt-1"></span>
																<span>Laravel Development</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Sam Gray</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-danger-light">High</span></td>
														<td>21-01-2021</td>
														<td>15-03-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">100%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="badge badge-success">Completed</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#39</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-success dot-label1 me-2 mt-1"></span>
																<span>Mobile App</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Lisa Vance</a>
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
														<td><span class="badge badge-warning-light">Medium</span></td>
														<td>13-03-2021</td>
														<td>05-05-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">100%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="badge badge-success">Completed</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#95</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-success dot-label1 me-2 mt-1"></span>
																<span>Website Development</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Joanne	Grant</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-success-light">Low</span></td>
														<td>01-01-2021</td>
														<td>22-04-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">100%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="badge badge-success">Completed</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#67</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-warning dot-label1 me-2 mt-1"></span>
																<span>Wordpress Theme Design</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Jason Allan</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-danger-light">High</span></td>
														<td>05-02-2021</td>
														<td>21-04-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">50%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-warning w-50"></div>
															</div>
														</td>
														<td><span class="badge badge-warning">On going</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#29</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-orange dot-label1 me-2 mt-1"></span>
																<span>Laravel Development</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">Felicity Welch</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-warning-light">Medium</span></td>
														<td>05-02-2021</td>
														<td>21-04-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">60%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-orange w-60"></div>
															</div>
														</td>
														<td><span class="badge badge-orange">Pending</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#72</td>
														<td>
															<a href="{{url('project-view')}}" class="d-flex sidebarmodal-collpase">
																<span class="bg-primary dot-label1 me-2 mt-1"></span>
																<span>Logo Design</span>
															</a>
														</td>
														<td>
															<a  href="javascript:void(0);" class="font-weight-semibold">David Vance</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
															</div>
														</td>
														<td><span class="badge badge-success-light">Low</span></td>
														<td>15-02-2021</td>
														<td>13-03-2021</td>
														<td>
															<div class="d-flex align-items-end justify-content-between">
																<h6 class="fs-12">Project Status</h6>
																<h6 class="fs-12">75%</h6>
															</div>
															<div class="progress h-1">
																<div class="progress-bar bg-primary w-75"></div>
															</div>
														</td>
														<td><span class="badge badge-primary">Active</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('project-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Task"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editprojectmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit task"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Task"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END  ROW -->

@endsection

@section('modals')

            <!-- EDIT PROJECT MODAL -->
            <div class="modal fade"  id="editprojectmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Project</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project ID</label>
										<input class="form-control" placeholder="Number" value="#67">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Project Title</label>
										<input class="form-control" placeholder="Text" value="Mobile App">
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
											<option value="6" selected>Application Department</option>
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
											<option value="1" selected>High</option>
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
											<option value="1" selected>Julia Walker</option>
											<option value="2">Client 02</option>
											<option value="3">Client 03</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">($)Price:</label>
										<input class="form-control" placeholder="Enter Price eg:$69.00" value="$170.00">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Assigned Team:</label>
								<select name="attendance"  class="form-control custom-select select2" multiple="multiple" data-placeholder="Select Employee">
									<option label="Select Employee"></option>
									<option value="1" selected>Faith Harris</option>
									<option value="2" selected>Austin Bell</option>
									<option value="3" selected>Maria Bower</option>
									<option value="4" selected>Peter Hill</option>
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
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text" value="12-02-2021">
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
											</div><input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text" value="16-06-2021">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="summernote">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Files:</label>
								<div class="form-group">
								<label class="form-label"></label>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label me-5">Work Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option5" checked>
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
							<button  class="btn btn-success projectnotify">Update</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END EDIT PROJECT MODAL -->

			<!-- New PROJECT MODAL -->
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
								<div class="summernote"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Files:</label>
								<div class="form-group">
									<label class="form-label"></label>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-lg-flex">
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

@endsection

@section('scripts')

        <!-- NOTIFICATIONS JS -->
        <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

        <!--INTERNAL CHART JS -->
		<script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL  DATEPICKER JS -->
        <script src="{{asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/project/project-list.js')}}"></script>

@endsection
