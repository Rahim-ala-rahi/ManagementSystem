@extends('layouts.projectapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Project<span class="font-weight-normal text-muted ms-2">Dashboard</span></div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<button  class="btn btn-primary "><i class="feather feather-plus fs-15 my-auto me-2"></i>Create New Project</button>
										<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-start">
													<span class="fs-16 font-weight-semibold">Projetcs</span>
													<h3 class="mb-0 mt-1 text-primary fs-25">164</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-primary my-auto  float-end"> <i class="feather feather-briefcase"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-start">
													<span class="fs-16 font-weight-semibold">Pending Projects</span>
													<h3 class="mb-0 mt-1 text-danger fs-25">14</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-danger my-auto  float-end"> <i class="feather feather-briefcase"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-start">
													<span class="fs-16 font-weight-semibold">Completed Projects</span>
													<h3 class="mb-0 mt-1 text-success fs-25">35</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-success my-auto  float-end"> <i class="feather feather-check"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-7">
												<div class="mt-0 text-start">
													<span class="fs-16 font-weight-semibold">On going Projects</span>
													<h3 class="mb-0 mt-1 text-secondary fs-25">15</h3>
												</div>
											</div>
											<div class="col-5">
												<div class="icon1 bg-secondary my-auto  float-end"> <i class="feather feather-info"></i> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12">
								<div class="">
									<div class="card-header pt-0 ps-0 ms-0 mb-4 mt-4 border-bottom-0 responsive-header">
										<h4 class="card-title">Recent Project Updates</h4>
										<div class="card-options">
											<div class="btn-list">
												<a  href="javascript:void(0);" class="btn btn-primary">Add Project</a>
												<a  href="javascript:void(0);" class="btn btn-light">View All</a>
												<a  href="javascript:void(0);" class="btn btn-light me-0 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> Latest <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a  href="javascript:void(0);">Monthly</a></li>
													<li><a  href="javascript:void(0);">Yearly</a></li>
													<li><a  href="javascript:void(0);">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-start">
																<a href="{{url('project-view')}}" class="mb-0 mt-1 mb-2 font-weight-semibold h4">Adobe XD</a>
																<p class="tx-16 font-weight-semibold text-muted mb-2">Designing Department</p>
																<span class="fs-14 mt-2 text-muted">Mobile App Ui Designing and Prototyping</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-end">
																<img src="{{asset('assets/images/png/task1.png')}}" alt="img" class="">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">6</span>
															</div>
															<div class="ms-5">
																<div class="chart-circle chart-circle-xs" data-value="0.75" data-thickness="3" data-color="#0dcd94">
																	<div class="chart-circle-value text-success fs-15">75</div>
																</div>
															</div>
														</div>
														<div class="ms-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-danger text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Project Priority">High</div>
																<a class="btn btn-outline-light  text-muted"  href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-end" role="menu">
																	<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-start">
																<a href="{{url('project-view')}}" class="mb-0 mt-1 mb-2 font-weight-semibold h4">HTML</a>
																<p class="tx-16 font-weight-semibold text-muted mb-2">HTML Designing Department</p>
																<span class="fs-14 mt-2 text-muted">Updated Version 4.2.10 and Minor issues fixed</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-end">
																<img src="{{asset('assets/images/png/task2.png')}}" alt="img" class="">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">4</span>
															</div>
															<div class="ms-5">
																<div class="chart-circle chart-circle-xs" data-value="0.38" data-thickness="3" data-color="#3366ff">
																	<div class="chart-circle-value text-primary fs-15">38</div>
																</div>
															</div>
														</div>
														<div class="ms-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-success text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Project Priority">Low</div>
																<a class="btn btn-outline-light  text-muted"  href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-end" role="menu">
																	<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-start">
																<a href="{{url('project-view')}}" class="mb-0 mt-1 mb-2 font-weight-semibold h4">Angular</a>
																<p class="tx-16 font-weight-semibold text-muted mb-2">Angular  Department</p>
																<span class="fs-14 mt-2 text-muted">Old Template Angular Version Updated</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-end">
																<img src="{{asset('assets/images/png/task3.png')}}" alt="img" class="">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">8</span>
															</div>
															<div class="ms-5">
																<div class="chart-circle chart-circle-xs" data-value="0.67" data-thickness="3" data-color="#ffad00">
																	<div class="chart-circle-value text-warning fs-15">67</div>
																</div>
															</div>
														</div>
														<div class="ms-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-warning text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Project Priority">Medium</div>
																<a class="btn btn-outline-light  text-muted"  href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-end" role="menu">
																	<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
											<div class="card">
												<div class="card-body">
													<div class="row">
														<div class="col-9">
															<div class="mt-0 text-start">
																<h4 class="mb-0 mt-1 mb-2 font-weight-semibold">Responsive Team</h4>
																<p class="tx-16 font-weight-semibold text-muted mb-2">Online Services and Live Chart</p>
																<span class="fs-14 mt-2 text-muted">Comapny Online Services & Support</span>
															</div>
														</div>
														<div class="col-3">
															<div class="task-img bg-light my-auto float-end">
																<img src="{{asset('assets/images/png/task4.png')}}" alt="img" class="">
															</div>
														</div>
													</div>
												</div>
												<div class="card-footer">
													<div class="d-md-flex">
														<div class="d-flex mb-3 mb-md-0">
															<div class="avatar-list avatar-list-stacked">
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																<span class="avatar avatar-md brround bg-light text-dark">3</span>
															</div>
															<div class="ms-5">
																<div class="chart-circle chart-circle-xs" data-value="0.49" data-thickness="3" data-color="#0dcd94">
																	<div class="chart-circle-value text-success fs-15">49</div>
																</div>
															</div>
														</div>
														<div class="ms-auto mt-3 mt-sm-0">
															<div class="d-flex">
																<div class="task-btn border-danger text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Project Priority">High</div>
																<a class="btn btn-outline-light  text-muted"  href="javascript:void(0);" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
																<ul class="dropdown-menu dropdown-menu-end" role="menu">
																	<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-download-cloud me-2"></i>Download</a></li>
																	<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
																</ul>
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
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xxl-9 col-xl-8 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0 responsive-header">
										<h4 class="card-title">Statistics</h4>
										<div class="card-options">
											<div class="btn-list">
												<a  href="javascript:void(0);" class="btn btn-outline-light text-dark float-start me-4 d-flex  my-sm-0 my-1"><span class="dot-label bg-primary me-2 my-auto"></span>On going</a>
												<a  href="javascript:void(0);" class="btn btn-outline-light text-dark float-start me-4 d-flex  my-sm-0 my-1"><span class="dot-label bg-secondary me-2 my-auto"></span>Completed</a>
												<a  href="javascript:void(0);" class="btn  btn-outline-light  my-sm-0 my-1" data-bs-toggle="dropdown" aria-expanded="false"> Year <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a  href="javascript:void(0);">Monthly</a></li>
													<li><a  href="javascript:void(0);">Yearly</a></li>
													<li><a  href="javascript:void(0);">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="statistics"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Milestones</h4>
										<div class="card-options">
											<div class="dropdown"> <a  href="javascript:void(0);" class="btn ripple btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a  href="javascript:void(0);">Monthly</a></li>
													<li><a  href="javascript:void(0);">Yearly</a></li>
													<li><a  href="javascript:void(0);">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body pt-2">
										<div class="mb-5">
											<div class="list-group-item d-flex p-0 pb-1 align-items-center border-0">
												<div class="d-flex">
													<div class="icon1 bg-pink-transparent me-4">
														 <i class="feather feather-briefcase"></i>
													</div>
													<div class="mt-2">
														<h6 class="mb-1 font-weight-semibold fs-16">Grocery App Development</h6>
														<span class="clearfix"></span>
														<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> To Day 11:00 Am</span>
													</div>
												</div>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex">
												<div class="icon1 bg-success-transparent me-4">
													 <i class="feather feather-airplay"></i>
												</div>
												<div class="mt-2">
													<h6 class="mb-1 font-weight-semibold fs-16">Ui Update</h6>
													<span class="clearfix"></span>
													<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> To Day 2:30 Pm</span>
												</div>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex">
												<div class="icon1 bg-orange-transparent me-4">
													 <i class="feather feather-file"></i>
												</div>
												<div class="mt-2">
													<h6 class="mb-1 font-weight-semibold fs-16">Psd Template</h6>
													<span class="clearfix"></span>
													<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> Tomorrow 11:00 Am</span>
												</div>
											</div>
										</div>
										<div class="mb-5">
											<div class="d-flex">
												<div class="icon1 bg-info-transparent me-4">
													 <i class="feather feather-trending-up"></i>
												</div>
												<div class="mt-2">
													<h6 class="mb-1 font-weight-semibold fs-16">Version Update</h6>
													<span class="clearfix"></span>
													<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> 1 Week To Left</span>
												</div>
											</div>
										</div>
										<div class="mb-0">
											<div class="d-flex">
												<div class="icon1 bg-primary-transparent me-4">
													 <i class="feather feather-smartphone"></i>
												</div>
												<div class="mt-2">
													<h6 class="mb-1 font-weight-semibold fs-16">Mobile App</h6>
													<span class="clearfix"></span>
													<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> 3 days To Left</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-9 col-md-12 col-lg-12">
								<div class="row">
									<div class="col-xl-6 col-lg-12 col-md-12">
										<div class="card overflow-hidden">
											<div class="card-header border-0">
												<h4 class="card-title">In Progress Projects</h4>
												<div class="card-options pe-3">
													<a href="" class="me-0 option-dots text-default" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
														 <span class="feather feather-more-horizontal"></span>
													</a>
													<ul class="dropdown-menu dropdown-menu-end" role="menu">
														<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
														<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
														<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
														<li><a  href="javascript:void(0);"><i class="feather feather-download-cloud me-2"></i>Download</a></li>
														<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
													</ul>
												</div>
											</div>
											<div class="card-body p-0 pt-3">
												<div class="border-bottom project-progress-content">
													<a  href="javascript:void(0);" class="list-group-item d-sm-flex  align-items-center border-0">
														<div class="d-flex">
															<div class="task-img bg-primary-transparent me-4">
																<img src="{{asset('assets/images/photos/html.png')}}" alt="img" class="">
														   </div>
															<div class="mt-1">
																<h6 class="mb-1 font-weight-semibold fs-16">Mobile App</h6>
																<span class="clearfix"></span>
																<span class="fs-14 text-muted">html  upload New file to server</span>
																<div class="d-flex mt-1">
																	<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> To Day 11:00 Am</span>
																</div>
															</div>
														</div>
														<div class="ms-auto me-3 mt-4 mt-md-0">
															<p class="text-muted  fs-13 ms-auto text-end mb-3">Just Now</p>
															<div class="d-flex">
																<div class="chart-circle chart-circle-xxs" data-value="0.62" data-thickness="3" data-color="#0dcd94" data-bs-toggle="tooltip" data-bs-placement="top" title="Project Status">
																	<div class="chart-circle-value text-success">62</div>
																</div>
																<div class="float-end avatar-list avatar-list-stacked ms-2">
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																</div>
															</div>
														</div>
													</a>
												</div>
												<div class="border-bottom project-progress-content">
													<a  href="javascript:void(0);" class="list-group-item d-sm-flex  align-items-center border-0">
														<div class="d-flex">
															<div class="task-img bg-primary-transparent me-4">
																<img src="{{asset('assets/images/photos/sass.png')}}" alt="img" class="">
														   </div>
															<div class="mt-1">
																<h6 class="mb-1 font-weight-semibold fs-16">Web Department</h6>
																<span class="clearfix"></span>
																<span class="fs-14 text-muted">Theme Design And Styles Updated</span>
																<div class="d-flex mt-1">
																	<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> Tomorrow 11:00 Am</span>
																</div>
															</div>
														</div>
														<div class="ms-auto me-3 mt-4 mt-md-0">
															<p class="text-muted  fs-13 ms-auto text-end mb-3">10 Mins ago</p>
															<div class="d-flex">
																<div class="chart-circle chart-circle-xxs" data-value="0.38" data-thickness="3" data-color="#3366ff" data-bs-toggle="tooltip" data-bs-placement="top" title="Project Status">
																	<div class="chart-circle-value text-primary">38</div>
																</div>
																<div class="float-end avatar-list avatar-list-stacked ms-2">
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/7.jpg')}})"></span>
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																</div>
															</div>
														</div>
													</a>
												</div>
												<div class="project-progress-content">
													<a  href="javascript:void(0);" class="list-group-item d-sm-flex  align-items-center border-0">
														<div class="d-flex">
															<div class="task-img bg-primary-transparent me-4">
																<img src="{{asset('assets/images/photos/laravel.png')}}" alt="img" class="">
														   </div>
															<div class="mt-1">
																<h6 class="mb-1 font-weight-semibold fs-16">Development Department</h6>
																<span class="clearfix"></span>
																<span class="fs-14 text-muted">Updated Version 4.2.10</span>
																<div class="d-flex mt-1">
																	<span class="fs-14 text-muted"><span class="font-weight-semibold">Deadline:</span> 3 days To Left</span>
																</div>
															</div>
														</div>
														<div class="ms-auto me-3 mt-4 mt-md-0">
															<p class="text-muted  fs-13 ms-auto text-end mb-3">12 Mins ago</p>
															<div class="d-flex">
																<div class="chart-circle chart-circle-xxs" data-value="0.46" data-thickness="3" data-color="#f15719" data-bs-toggle="tooltip" data-bs-placement="top" title="Project Status">
																	<div class="chart-circle-value text-orange">46</div>
																</div>
																<div class="float-end avatar-list avatar-list-stacked ms-2">
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></span>
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																	<span class="avatar avatar brround" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></span>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-12 col-md-12">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h4 class="card-title">Activity</h4>
												<div class="card-options pe-3">
													<div class="dropdown"> <a  href="javascript:void(0);" class="btn ripple btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> See All <i class="feather feather-chevron-down"></i> </a>
														<ul class="dropdown-menu dropdown-menu-end" role="menu">
															<li><a  href="javascript:void(0);">Monthly</a></li>
															<li><a  href="javascript:void(0);">Yearly</a></li>
															<li><a  href="javascript:void(0);">Weekly</a></li>
														</ul>
													</div>
												</div>
											</div>
											<div class="card-body">
												<div class="mb-5">
													<div class="list-group-item d-flex p-0  align-items-center border-0">
														<div class="d-flex">
															<span class="avatar avatar-lg bradius me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
															<div class="mt-1">
																<h6 class="mb-1 font-weight-semibold fs-16">Faith Harrits
																	<span class="font-weight-normal text-muted">Completed Project</span> Ui Development
																</h6>
																<span class="clearfix"></span>
																<span class="fs-14 text-muted">Just Now</span>
															</div>
														</div>
													</div>
												</div>
												<div class="mb-5">
													<div class="list-group-item d-flex p-0  align-items-center border-0">
														<div class="d-flex">
															<span class="avatar avatar-lg bradius me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
															<div class="mt-1">
																<h6 class="mb-1 font-weight-semibold fs-16">James Paige
																	<span class="font-weight-normal text-muted">Update</span> new Version <span class="font-weight-normal text-muted">angular 10.4....</span>
																</h6>
																<span class="clearfix"></span>
																<span class="fs-14 text-muted">10 Mins ago</span>
															</div>
														</div>
													</div>
												</div>
												<div class="mb-5">
													<div class="list-group-item d-flex p-0  align-items-center border-0">
														<div class="d-flex">
															<span class="avatar avatar-lg bradius me-3 bg-primary-transparent">L</span>
															<div class="mt-1">
																<h6 class="mb-1 font-weight-semibold fs-16">Liam Miller
																	<span class="font-weight-normal text-muted">Attach design file New Update....</span>
																</h6>
																<span class="clearfix"></span>
																<span class="fs-14 text-muted"> 1 Hour Ago</span>
															</div>
														</div>
													</div>
												</div>
												<div class="mb-0">
													<div class="list-group-item d-flex p-0  align-items-center border-0">
														<div class="d-flex">
															<span class="avatar avatar-lg bradius me-3" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
															<div class="mt-1">
																<h6 class="mb-1 font-weight-semibold fs-16">Kimberly Berry
																	<span class="font-weight-normal text-muted">Submitted new Design approval.....</span>
																</h6>
																<span class="clearfix"></span>
																<span class="fs-14 text-muted">3 Hours Ago</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-12">
								<div class="card chart-donut1">
									<div class="card-header  border-0">
										<h4 class="card-title">Employee Gender</h4>
									</div>
									<div class="card-body">
										<div id="employee1" class="mx-auto"></div>
										<div class="sales-chart pt-5 d-flex mx-auto text-center justify-content-center ">
											<div class="d-flex me-5"><span class="dot-label bg-primary me-2 my-auto"></span>Male</div>
											<div class="d-flex"><span class="dot-label bg-secondary me-2 my-auto"></span>Female</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-9 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-0">
										<h4 class="card-title">Project Summary</h4>
										<div class="card-options pe-3">
											<div class="dropdown"> <a  href="javascript:void(0);" class="btn ripple btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> View All <i class="feather feather-chevron-down"></i> </a>
												<ul class="dropdown-menu dropdown-menu-end" role="menu">
													<li><a  href="javascript:void(0);">Monthly</a></li>
													<li><a  href="javascript:void(0);">Yearly</a></li>
													<li><a  href="javascript:void(0);">Weekly</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body pt-3 p-0">
										<div class="table-responsive">
											<table class="table table-vcenter text-nowrap mb-0" id="projecttable">
												<thead>
													<tr>
														<th class="wd-10p border-bottom-0">Project</th>
														<th class="wd-15p border-bottom-0">Team</th>
														<th class="wd-15p border-bottom-0">Start Date</th>
														<th class="w-15p border-bottom-0">Due Date</th>
														<th class="wd-20p border-bottom-0">Work Status</th>
														<th class="wd-5p border-bottom-0"></th>
														<th class="wd-25p border-bottom-0">Status</th>
														<th class="wd-25p border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<a href="{{url('project-view')}}" class="text-dark font-weight-semibold">Mobile Application</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/12.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/3.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/5.jpg')}}" alt="img">
															</div>
														</td>
														<td>14 Jan 2021</td>
														<td>16 Jan 2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-primary w-55"></div>
															</div>
														</td>
														<td><span class="text-primary fs-15">57%</span></td>
														<td><span class="text-nuted">Active</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="{{url('project-view')}}" class="text-dark font-weight-semibold">Development</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/13.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/5.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/16.jpg')}}" alt="img">
															</div>
														</td>
														<td>14 Jan 2021</td>
														<td>18 Jan 2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-primary w-30"></div>
															</div>
														</td>
														<td><span class="text-primary fs-15">34%</span></td>
														<td><span class="text-nuted">Active</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="{{url('project-view')}}" class="text-dark font-weight-semibold">Version Update</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/1.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/9.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/4.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/11.jpg')}}" alt="img">
															</div>
														</td>
														<td>14 Jan 2021</td>
														<td>16 Jan 2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-success w-100"></div>
															</div>
														</td>
														<td><span class="text-success fs-15">100%</span></td>
														<td><span class="text-nuted">Done</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="{{url('project-view')}}" class="text-dark font-weight-semibold">Psd Template</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/2.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/13.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/6.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/10.jpg')}}" alt="img">
															</div>
														</td>
														<td>13 Jan 2021</td>
														<td>22 Jan 2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-orange w-50"></div>
															</div>
														</td>
														<td><span class="text-orange fs-15">50%</span></td>
														<td><span class="text-nuted">Pending</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<a href="{{url('project-view')}}" class="text-dark font-weight-semibold">Development</a>
														</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/7.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/9.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/8.jpg')}}" alt="img">
																<img class="avatar avatar-md brround" src="{{asset('assets/images/users/11.jpg')}}" alt="img">
															</div>
														</td>
														<td>12 Jan 2021</td>
														<td>18 Jan 2021</td>
														<td>
															<div class="progress progress-sm">
																<div class="progress-bar bg-warning w-80"></div>
															</div>
														</td>
														<td><span class="text-warning fs-15">82%</span></td>
														<td><span class="text-nuted">Hold</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Mail"><i class="feather feather-mail  text-primary"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Calendar</h4>
									</div>
									<div class="card-body pt-0">
										<div class="custom-calendar"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')

        <!-- INTERNAL CHART JS -->
        <script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL APEXCHART JS -->
		<script src="{{asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL PG-CALENDAR-MASTER JS -->
		<script src="{{asset('assets/plugins/pg-calendar-master/pignose.calendar.full.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/index4.js')}}"></script>

@endsection
