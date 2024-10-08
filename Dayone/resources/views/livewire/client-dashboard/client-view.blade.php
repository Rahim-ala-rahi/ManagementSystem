@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Client View</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addclientmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Client</a>
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
										<div class="text-center">
											<div class="widget-user-image mx-auto text-center">
												<img class="avatar avatar-xxl brround" alt="img" src="{{asset('assets/images/users/3.jpg')}}">
											</div>
											<div class="pro-user mt-3">
												<h5 class="pro-user-username text-dark mb-1 fs-16">Julia Walker</h5>
												<h6 class="pro-user-desc text-muted fs-12">CEO</h6>
											</div>
										</div>
										<h5 class="mb-2 mt-4 font-weight-semibold">Basic Details</h5>
										<div class="table-responsive">
											<table class="table text-nowrap">
												<tbody>
													<tr>
														<td>
															<span class="w-50">Client ID</span>
														</td>
														<td>:</td>
														<td>
															<span>#SPT-001</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Email ID</span>
														</td>
														<td>:</td>
														<td>
															<span>julia@gmail.com</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Contact No</span>
														</td>
														<td>:</td>
														<td>
															<span>+9022291721</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Gender</span>
														</td>
														<td>:</td>
														<td>
															<span>Female</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Country</span>
														</td>
														<td>:</td>
														<td>
															<span>USA</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Address</span>
														</td>
														<td>:</td>
														<td>
															<span>Masonic Hill Road</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Status</span>
														</td>
														<td>:</td>
														<td>
															<span class="badge badge-success-light">Active</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<h5 class="mb-2 mt-4 font-weight-semibold">Company  Details</h5>
										<div class="table-responsive">
											<table class="table text-nowrap  mb-0">
												<tbody>
													<tr>
														<td>
															<span class="w-50">Company Name</span>
														</td>
														<td>:</td>
														<td>
															<span>Abcd pvt Limited</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Country</span>
														</td>
														<td>:</td>
														<td>
															<span>USA</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Address</span>
														</td>
														<td>:</td>
														<td>
															<span>Masonic Hill Road</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Contact No</span>
														</td>
														<td>:</td>
														<td>
															<span>+9022291721</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="w-50">Website</span>
														</td>
														<td>:</td>
														<td>
															<span>www.abcd.com</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-md-12 col-lg-12">
								<div class="tab-menu-heading hremp-tabs p-0 ">
									<div class="tabs-menu1">
										<!-- Tabs -->
										<ul class="nav panel-tabs">
											<li class="ms-4"><a href="#tab5" class="active"  data-bs-toggle="tab">Overview</a></li>
											<li><a href="#tab6" data-bs-toggle="tab">Projects</a></li>
											<li><a href="#tab7" data-bs-toggle="tab">Task</a></li>
											<li><a href="#tab8" data-bs-toggle="tab">Invoices</a></li>
											<li><a href="#tab9" data-bs-toggle="tab">Payments</a></li>
											<li><a href="#tab10"  data-bs-toggle="tab">Files</a></li>
											<li><a href="#tab11"  data-bs-toggle="tab">Tickets</a></li>
											<li><a href="#tab12" data-bs-toggle="tab">Note</a></li>
										</ul>
									</div>
								</div>
								<div class="panel-body tabs-menu-body hremp-tabs1 p-0">
									<div class="tab-content">
										<div class="tab-pane active" id="tab5">
											<div class="card-body">
												<h5 class="mb-4 font-weight-semibold">About</h5>
												<p>At vero eos the moment, so blinded by and equal blame belongs to those who fail in their duty through weakness et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
												<p>On the other hand, we denounce with Lorem ipsum dolor sit amet, consectetur adipiscing elit righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
												<p>On the other hand, we denounce with Lorem ipsum dolor sit amet, consectetur adipiscing elit righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
												<p>On the other hand, we denounce with Lorem ipsum dolor sit amet, consectetur adipiscing elit righteous indignation and dislike men who are so beguiled and demoraliz the charms of pleasure of the moment, so blinded by and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
												<div class="row">
													<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
														<div class="card mb-xl-0 box-shadow-0 bg-primary-transparent">
															<div class="card-body text-center">
																<p class="mb-1">Total Projects</p>
																<h3 class="mb-0">68</h3>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
														<div class="card mb-xl-0 box-shadow-0 text-center  bg-secondary-transparent">
															<div class="card-body text-center">
																<p class=" mb-1">Total Budget</p>
																<h3 class="mb-1">$29,858</h3>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
														<div class="card mb-xl-0 box-shadow-0 text-center  bg-success-transparent">
															<div class="card-body text-center">
																<p class=" mb-1">Total Unpaid Invoices</p>
																<h3 class="mb-1">36</h3>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
														<div class="card mb-xl-0 box-shadow-0 text-center  bg-danger-transparent">
															<div class="card-body text-center">
																<p class=" mb-1">Total Earnings</p>
																<h3 class="mb-1">$11,987</h3>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane" id="tab6">
											<div class="card-body">
												<div class="row">
													<div class="col-xl-4 col-md-12">
														<div class="card border overflow-hidden">
															<div class="card-header  border-0">
																<div>
																	<h4 class="card-title">Website Development</h4>
																	<div class="mt-2">
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-format-list-bulleted-type me-1"></i>2 Tasks</a>
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-comment-multiple-outline me-1"></i>2 Message</a>
																	</div>
																</div>
																<div class="card-options">
																	<a  href="javascript:void(0);" class="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="feather feather-more-vertical fs-18"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" role="menu">
																		<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																	</ul>
																</div>
															</div>
															<div class="card-body pt-3">
																<div class="teams">
																	<div class="teams-board-details">
																		<h6>Description : </h6>
																		<p class="text-muted fs-13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</p>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Deadline:</h6>
																		<div class="ms-2">22-04-2021</div>
																	</div>
																	<div class="d-flex mt-2 align-items-center">
																		<h6 class="mb-0 mt-1">Team :</h6>
																		<div class=" avatar-list avatar-list-stacked ms-3">
																			<span><img class="avatar brround" src="{{asset('assets/images/users/4.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/11.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/5.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/6.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/7.jpg')}}" alt="image"></span>
																		</div>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Status :</h6>
																		<div class="badge badge-warning ms-2">On going</div>
																	</div>
																	<div class="mt-4">
																		<div class="d-flex align-items-end justify-content-between">
																			<p class="mb-1">Project Status</p>
																			<p class="mb-1">80%</p>
																		</div>
																		<div class="progress h-2">
																			<div class="progress-bar bg-success w-80"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="border-top">
																<a  href="javascript:void(0);" class="btn btn-lg btn-light btn-block border-0 br-0">Learn More</a>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-md-12">
														<div class="card border overflow-hidden">
															<div class="card-header  border-0">
																<div>
																	<h4 class="card-title">Logo Design</h4>
																	<div class="mt-2">
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-format-list-bulleted-type me-1"></i>3 Tasks</a>
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-comment-multiple-outline me-1"></i>4 Message</a>
																	</div>
																</div>
																<div class="card-options">
																	<a  href="javascript:void(0);" class="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="feather feather-more-vertical fs-18"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" role="menu">
																		<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																	</ul>
																</div>
															</div>
															<div class="card-body pt-3">
																<div class="teams">
																	<div class="teams-board-details">
																		<h6>Description : </h6>
																		<p class="text-muted fs-13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</p>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Deadline:</h6>
																		<div class="ms-2">16-06-2021</div>
																	</div>
																	<div class="d-flex mt-2 align-items-center">
																		<h6 class="mb-0 mt-1">Team :</h6>
																		<div class=" avatar-list avatar-list-stacked ms-3">
																			<span><img class="avatar brround" src="{{asset('assets/images/users/2.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/10.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/3.jpg')}}" alt="image"></span>
																		</div>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Status :</h6>
																		<div class="badge badge-success ms-2">Completed</div>
																	</div>
																	<div class="mt-4">
																		<div class="d-flex align-items-end justify-content-between">
																			<p class="mb-1">Project Status</p>
																			<p class="mb-1">100%</p>
																		</div>
																		<div class="progress h-2">
																			<div class="progress-bar bg-success w-100"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="border-top">
																<a  href="javascript:void(0);" class="btn btn-lg btn-light btn-block border-0 br-0">Learn More</a>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-md-12">
														<div class="card border overflow-hidden">
															<div class="card-header  border-0">
																<div>
																	<h4 class="card-title">Mobile App</h4>
																	<div class="mt-2">
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-format-list-bulleted-type me-1"></i>2 Tasks</a>
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-comment-multiple-outline me-1"></i>3 Message</a>
																	</div>
																</div>
																<div class="card-options">
																	<a  href="javascript:void(0);" class="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="feather feather-more-vertical fs-18"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" role="menu">
																		<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																	</ul>
																</div>
															</div>
															<div class="card-body pt-3">
																<div class="teams">
																	<div class="teams-board-details">
																		<h6>Description : </h6>
																		<p class="text-muted fs-13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</p>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Deadline:</h6>
																		<div class="ms-2">16-06-2021</div>
																	</div>
																	<div class="d-flex mt-2 align-items-center">
																		<h6 class="mb-0 mt-1">Team :</h6>
																		<div class=" avatar-list avatar-list-stacked ms-3">
																			<span><img class="avatar brround" src="{{asset('assets/images/users/4.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/15.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/5.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/14.jpg')}}" alt="image"></span>
																		</div>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Status :</h6>
																		<div class="badge badge-primary ms-2">Active</div>
																	</div>
																	<div class="mt-4">
																		<div class="d-flex align-items-end justify-content-between">
																			<p class="mb-1">Project Status</p>
																			<p class="mb-1">50%</p>
																		</div>
																		<div class="progress h-2">
																			<div class="progress-bar bg-success w-50"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="border-top">
																<a  href="javascript:void(0);" class="btn btn-lg btn-light btn-block border-0 br-0">Learn More</a>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-md-12">
														<div class="card border overflow-hidden mb-0">
															<div class="card-header  border-0">
																<div>
																	<h4 class="card-title">Laravel Development</h4>
																	<div class="mt-2">
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-format-list-bulleted-type me-1"></i>6 Tasks</a>
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-comment-multiple-outline me-1"></i>5 Message</a>
																	</div>
																</div>
																<div class="card-options">
																	<a  href="javascript:void(0);" class="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="feather feather-more-vertical fs-18"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" role="menu">
																		<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																	</ul>
																</div>
															</div>
															<div class="card-body pt-3">
																<div class="teams">
																	<div class="teams-board-details">
																		<h6>Description : </h6>
																		<p class="text-muted fs-13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</p>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Deadline:</h6>
																		<div class="ms-2">16-06-2021</div>
																	</div>
																	<div class="d-flex mt-2 align-items-center">
																		<h6 class="mb-0 mt-1">Team :</h6>
																		<div class=" avatar-list avatar-list-stacked ms-3">
																			<span><img class="avatar brround" src="{{asset('assets/images/users/1.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/13.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/2.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/4.jpg')}}" alt="image"></span>
																		</div>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Status :</h6>
																		<div class="badge badge-orange ms-2">Pending</div>
																	</div>
																	<div class="mt-4">
																		<div class="d-flex align-items-end justify-content-between">
																			<p class="mb-1">Project Status</p>
																			<p class="mb-1">30%</p>
																		</div>
																		<div class="progress h-2">
																			<div class="progress-bar bg-success w-30"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="border-top">
																<a  href="javascript:void(0);" class="btn btn-lg btn-light btn-block border-0 br-0">Learn More</a>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-md-12">
														<div class="card border overflow-hidden mb-xl-0">
															<div class="card-header  border-0">
																<div>
																	<h4 class="card-title">Wordpress Theme Design</h4>
																	<div class="mt-2">
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-format-list-bulleted-type me-1"></i>1 Tasks</a>
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-comment-multiple-outline me-1"></i>3 Message</a>
																	</div>
																</div>
																<div class="card-options">
																	<a  href="javascript:void(0);" class="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="feather feather-more-vertical fs-18"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" role="menu">
																		<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																	</ul>
																</div>
															</div>
															<div class="card-body pt-3">
																<div class="teams">
																	<div class="teams-board-details">
																		<h6>Description : </h6>
																		<p class="text-muted fs-13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</p>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Deadline:</h6>
																		<div class="ms-2">21-04-2021</div>
																	</div>
																	<div class="d-flex mt-2 align-items-center">
																		<h6 class="mb-0 mt-1">Team :</h6>
																		<div class=" avatar-list avatar-list-stacked ms-3">
																			<span><img class="avatar brround" src="{{asset('assets/images/users/3.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/14.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/5.jpg')}}" alt="image"></span>
																		</div>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Status :</h6>
																		<div class="badge badge-info ms-2">Not Started</div>
																	</div>
																	<div class="mt-4">
																		<div class="d-flex align-items-end justify-content-between">
																			<p class="mb-1">Project Status</p>
																			<p class="mb-1">0%</p>
																		</div>
																		<div class="progress h-2">
																			<div class="progress-bar bg-success"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="border-top">
																<a  href="javascript:void(0);" class="btn btn-lg btn-light btn-block border-0 br-0">Learn More</a>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-md-12">
														<div class="card border overflow-hidden mb-xl-0">
															<div class="card-header  border-0">
																<div>
																	<h4 class="card-title">Laravel Development</h4>
																	<div class="mt-2">
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-format-list-bulleted-type me-1"></i>2 Tasks</a>
																		<a  href="javascript:void(0);" class="pe-2 text-muted h6"><i class="mdi mdi-comment-multiple-outline me-1"></i>4 Message</a>
																	</div>
																</div>
																<div class="card-options">
																	<a  href="javascript:void(0);" class="" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="feather feather-more-vertical fs-18"></i>
																	</a>
																	<ul class="dropdown-menu dropdown-menu-end" role="menu">
																		<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Send</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-edit-2 me-2"></i>Edit</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																		<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																	</ul>
																</div>
															</div>
															<div class="card-body pt-3">
																<div class="teams">
																	<div class="teams-board-details">
																		<h6>Description : </h6>
																		<p class="text-muted fs-13">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</p>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Deadline:</h6>
																		<div class="ms-2">15-03-2021</div>
																	</div>
																	<div class="d-flex mt-2 align-items-center">
																		<h6 class="mb-0 mt-1">Team :</h6>
																		<div class=" avatar-list avatar-list-stacked ms-3">
																			<span><img class="avatar brround" src="{{asset('assets/images/users/4.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/11.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/7.jpg')}}" alt="image"></span>
																			<span><img class="avatar brround" src="{{asset('assets/images/users/13.jpg')}}" alt="image"></span>
																		</div>
																	</div>
																	<div class="d-flex align-items-center mt-2">
																		<h6 class="mt-2">Status :</h6>
																		<div class="badge badge-success ms-2">Completed</div>
																	</div>
																	<div class="mt-4">
																		<div class="d-flex align-items-end justify-content-between">
																			<p class="mb-1">Project Status</p>
																			<p class="mb-1">100%</p>
																		</div>
																		<div class="progress h-2">
																			<div class="progress-bar bg-success w-100"></div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="border-top">
																<a  href="javascript:void(0);" class="btn btn-lg btn-light btn-block border-0 br-0">Learn More</a>
															</div>
														</div>
													</div>
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
																<th class="border-bottom-0">Client</th>
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
																	<a  href="javascript:void(0);" class="font-weight-semibold">Julia Walker</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Code Updated</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Diane Short</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Issues fixed </span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Pippa Welch</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Testing</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Lisa Vance</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Angular Issues fixed </span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Sam Gray</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Marketing  materials Issues</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Diane Short</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Application Bugs fix</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Joanne Grant</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Theme update</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Pippa Welch</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Jquery Issues Fix</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Ryan Terry</a>
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
																	<a  href="javascript:void(0);" class="d-flex sidebarmodal-collpase">
																		<span>Testing</span>
																	</a>
																</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold">Lisa Vance</a>
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
													<a  href="javascript:void(0);" class="btn btn-primary btn-tableview">Upload Files</a>
													<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="files-tables">
														<thead>
															<tr>
																<th class="border-bottom-0 text-center w-5">No</th>
																<th class="border-bottom-0">File Name</th>
																<th class="border-bottom-0">Upload By</th>
																<th class="border-bottom-0">Actions</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td class="text-center">1</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">document.pdf<span class="text-muted ms-2">(23 KB)</span></a>
																	<div class="clearfix"></div>
																	<small class="text-muted">2 hours ago</small>
																</td>
																<td>Client</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">2</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">image.jpg<span class="text-muted ms-2">(2.67 KB)</span></a>
																	<div class="clearfix"></div>
																	<small class="text-muted">1 day ago</small>
																</td>
																<td>Admin</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">4</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">file.zip<span class="text-muted ms-2">(798.16MB)</span></a>
																	<div class="clearfix"></div>
																	<small class="text-muted">2 days ago</small>
																</td>
																<td>Admin</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">5</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">Project<span class="text-muted ms-2">(578.6MB)</span></a>
																	<div class="clearfix"></div>
																	<small class="text-muted">1 day ago</small>
																</td>
																<td>Team Lead</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">6</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">text.doc<span class="text-muted ms-2">(5.6MB)</span></a>
																	<div class="clearfix"></div>
																	<small class="text-muted">3 days ago</small>
																</td>
																<td>Team</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
																	</div>
																</td>
															</tr>
															<tr>
																<td class="text-center">7</td>
																<td>
																	<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">custom.js<span class="text-muted ms-2">(15 KB)</span></a>
																	<div class="clearfix"></div>
																	<small class="text-muted">1 week ago</small>
																</td>
																<td>Team Lead</td>
																<td>
																	<div class="d-flex">
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye  text-primary"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Download"><i class="feather feather-download   text-success"></i></a>
																		<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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
										<div class="tab-pane" id="tab12">
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
								<div class="summernote"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Files:</label>
								<div class="form-group">
									   <label for="form-label" class="form-label"></label>
										<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 me-5">Work Status :</label>
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
							<button  class="btn btn-success" id="projectnotify">Submit</button>
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
			<!-- END VIEW SUB-TASK MODAL -->

			<!-- ADD NEW CLIENT MODAL -->
			<div class="modal fade"  id="addclientmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Client</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client ID</label>
										<input class="form-control" type="text" placeholder="Enter Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client Name</label>
										<input class="form-control" type="text" placeholder="Enter Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Email Address</label>
										<input class="form-control" type="text" placeholder="Enter Email Address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" type="password" placeholder="Enter Password">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Phone</label>
										<input class="form-control" type="text" placeholder="Enter PhoneNumber">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">URL</label>
										<input class="form-control" type="text" placeholder="Enter Website eg:https://">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">City</label>
										<input class="form-control" type="text" placeholder="Enter City">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">State</label>
										<input class="form-control" type="text" placeholder="Enter State">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">ZIP Code</label>
										<input class="form-control" type="text" placeholder="Enter ZIP Code">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Country</label>
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Country">
											<option label="Select Country"></option>
											<option value="1">Germany</option>
											<option value="3">Canada</option>
											<option value="4">Usa</option>
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
							</div>
							<div class="form-group">
								<label class="form-label">Address</label>
								<textarea rows="3" class="form-control" placeholder="Address1"></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Image:</label>
								<div class="form-group">
								   <label for="form-label" class="form-label"></label>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 me-5">Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Active</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">InActive</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success" id="projectnotify">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADD NEW CLIENT MODAL -->

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
        <script src="{{asset('assets/js/client/client-view.js')}}"></script>

@endsection
