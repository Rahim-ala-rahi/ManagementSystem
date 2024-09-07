@extends('layouts.supportapp')

@section('styles')


@endsection

@section('content')

				<!-- SECTION -->
				<section>
					<div class="bannerimg cover-image" data-bs-image-src="{{asset('assets/images/photos/banner1.jpg')}}">
						<div class="header-text mb-0">
							<div class="container">
								<div class="row text-white">
									<div class="col">
										<h1 class="mb-0">Articles</h1>
									</div>
									<div class="col col-auto">
										<ol class="breadcrumb text-center">
											<li class="breadcrumb-item">
												<a href="javascript:void(0);" class="text-white-50">Home</a>
											</li>
											<li class="breadcrumb-item active">
												<a href="javascript:void(0);" class="text-white">Pages</a>
											</li>
											<li class="breadcrumb-item active">
												<a href="javascript:void(0);" class="text-white">Articles</a>
											</li>
										</ol>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /SECTION -->

				<!-- SECTION -->
				<section>
					<div class="cover-image sptb">
						<div class="container">
							<div class="row">
								<div class="col-xl-3">
									<div id="scroll-stickybar" class="position-lg-relative w-100">
										<div class="card">
											<div class="card-body text-center item-user">
												<div class="profile-pic">
													<div class="profile-pic-img">
														<span class="bg-success dots" data-bs-toggle="tooltip"
															data-bs-placement="top" title=""
															data-original-title="online"></span>
														<img src="{{asset('assets/images/users/16.jpg')}}" class="brround avatar-xxl"
															alt="user">
													</div>
													<a href="javascript:void(0);" class="text-dark">
														<h5 class="mt-3 mb-1 font-weight-semibold2">Abigali kelly</h5>
													</a>
													<small class="text-muted ">Admin</small>
												</div>
											</div>
											<div class="support-sidebar">
												<ul class="side-menu">
													<li>
														<a class="side-menu__item" href="{{url('support-admindash')}}"><i
																class="side-menu__icon las la-home"></i><span
																class="side-menu__label">Dashboard</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-admineditprofile')}}"><i
																class="side-menu__icon las la-edit"></i><span
																class="side-menu__label">Edit Profile</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-adminticketlist')}}"><i
																class="side-menu__icon las la-ticket-alt"></i><span
																class="side-menu__label">Ticket Lists</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-adminticketactive')}}"><i
																class="side-menu__icon las la-compass"></i><span
																class="side-menu__label">Active Tickets</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-adminticketclosed')}}"><i
																class="side-menu__icon las la-edit"></i><span
																class="side-menu__label">Closed Tickets</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-adminticketview')}}"><i
																class="side-menu__icon las la-tags"></i><span
																class="side-menu__label">View Ticket</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-adminticketnew')}}"><i
																class="side-menu__icon las la-file-alt"></i><span
																class="side-menu__label">New Ticket</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-admincustomer')}}"><i
																class="side-menu__icon las la-users"></i><span
																class="side-menu__label">Customers</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-admincategories')}}"><i
																class="side-menu__icon las la-briefcase"></i><span
																class="side-menu__label">Categories</span></a>
													</li>
													<li>
														<a class="side-menu__item" href="{{url('support-adminarticles')}}"><i
																class="side-menu__icon las la-newspaper"></i><span
																class="side-menu__label">Articles</span></a>
													</li>
													<li class="slide">
														<a class="side-menu__item slide-show" href="javascript:void(0);"><i
																class="side-menu__icon lab la-buffer"></i><span
																class="side-menu__label">Level 1</span><i
																class="angle fa fa-angle-right"></i></a>
														<ul class="slide-menu">
															<li><a class="slide-item" href="javascript:void(0);">Level 1.1</a>
															</li>
															<li><a class="slide-item" href="javascript:void(0);">Level 1.2</a>
															</li>
															<li><a class="slide-item" href="javascript:void(0);">Level 1.3</a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-9">
									<div class="row">
										<div class="col-xl-12 col-lg-12 col-md-12">
											<div class="card mb-0">
												<div class="card-header border-0">
													<h4 class="card-title">Articles Summary</h4>
													<div class="card-options">
														<a href="javascript:void(0);" class="btn btn-primary me-2"
															data-bs-toggle="modal" data-bs-target="#addarticle">Add New
															Article</a>
													</div>
												</div>
												<div class="card-body">
													<div class="table-responsive">
														<table
															class="table table-vcenter text-nowrap table-hover border table-striped"
															id="support-articlelist">
															<thead>
																<tr>
																	<th class="border-bottom-0 w-5">#No</th>
																	<th class="border-bottom-0">Title</th>
																	<th class="border-bottom-0">Category</th>
																	<th class="border-bottom-0 w-5">Status</th>
																	<th class="border-bottom-0 w-5">Actions</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>#01</td>
																	<td><span>How to Updgrade plan?</span></td>
																	<td><span>License</span></td>
																	<td><span class="badge badge-success">Published</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#02</td>
																	<td><span>How could I manage active menu class?</span>
																	</td>
																	<td><span>Support</span></td>
																	<td><span class="badge badge-danger">UnPublished</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#03</td>
																	<td><span> How to remove the dollar $ sign?</span></td>
																	<td><span>Support</span></td>
																	<td><span class="badge badge-success">Published</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#04</td>
																	<td><span>How to show sweet alert when i load a
																			page?</span></td>
																	<td><span>Customization</span></td>
																	<td><span class="badge badge-danger">UnPublished</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#05</td>
																	<td><span>Duis aute irure dolor?</span></td>
																	<td><span>Settings</span></td>
																	<td><span class="badge badge-success">Published</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#06</td>
																	<td><span>Ut enim ad minima veniam?</span></td>
																	<td><span>Billing</span></td>
																	<td><span class="badge badge-success">Published</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#07</td>
																	<td><span>Quis autem vel eum?</span></td>
																	<td><span>Services</span></td>
																	<td><span class="badge badge-danger">UnPublished</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#08</td>
																	<td><span> How to pursue pleasure?</span></td>
																	<td><span>Support</span></td>
																	<td><span class="badge badge-success">Published</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#09</td>
																	<td><span>How to pursue pleasure?</span></td>
																	<td><span>Support</span></td>
																	<td><span class="badge badge-success">Published</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td>#10</td>
																	<td><span>Neque porro quisquam?</span></td>
																	<td><span>Settings</span></td>
																	<td><span class="badge badge-success">Published</span>
																	</td>
																	<td>
																		<div class="d-flex">
																			<a href="javascript:void(0);"
																				class="action-btns1" data-bs-toggle="modal"
																				data-bs-target="#viewarticle">
																				<i class="feather feather-eye text-primary"
																					data-bs-toggle="tooltip"
																					data-bs-placement="top"
																					title="Edit"></i>
																			</a>
																			<a href="javascript:void(0);"
																				class="action-btns1"
																				data-bs-toggle="tooltip"
																				data-bs-placement="top" title="Delete"><i
																					class="feather feather-trash-2 text-danger"></i></a>
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
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /SECTION -->

@endsection

@section('modals')

				<!-- ADD CATEGORY MODAL -->
				<div class="modal fade" id="addarticle">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">Add New Category</h5>
								<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="form-label">Title</label>
									<input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="form-group">
									<label class="form-label">Category</label>
									<select class="form-control custom-select select2" data-placeholder="Select Category">
										<option label="Select Category"></option>
										<option value="1">Services</option>
										<option value="2">Support</option>
										<option value="3">License</option>
										<option value="4">Billing</option>
										<option value="5">Settings</option>
										<option value="6">Customization</option>
									</select>
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
								<div class="custom-controls-stacked d-md-flex">
									<label class="form-label mt-1 me-5">Status :</label>
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios1"
											value="option1">
										<span class="custom-control-label">Published</span>
									</label>
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios1"
											value="option2">
										<span class="custom-control-label">UnPublished</span>
									</label>
								</div>
							</div>
							<div class="modal-footer">
								<a href="javascript:void(0);" class="btn btn-outline-danger"
									data-bs-dismiss="modal">Close</a>
								<a href="javascript:void(0);" class="btn btn-success">Save</a>
							</div>
						</div>
					</div>
				</div>
				<!-- END ADD CATEGORY MODAL  -->

				<!-- VIEW CATEGORY MODAL -->
				<div class="modal fade" id="viewarticle">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title">View Category</h5>
								<button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label class="form-label">Title</label>
									<input type="text" class="form-control" placeholder="Name" value="How to Updgrade plan">
								</div>
								<div class="form-group">
									<label class="form-label">Category</label>
									<select class="form-control custom-select select2" data-placeholder="Select Category">
										<option label="Select Category"></option>
										<option value="1">Services</option>
										<option value="2">Support</option>
										<option value="3" selected>License</option>
										<option value="4">Billing</option>
										<option value="5">Settings</option>
										<option value="6">Customization</option>
									</select>
								</div>
								<div class="form-group">
									<label class="form-label">Description:</label>
									<div class="summernote">At vero eos et accusamus et iusto odio dignissimos ducimus qui
										blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias
										excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui
										officia deserunt mollitia animi, id est laborum et dolorum fuga.</div>
								</div>
								<div class="form-group">
									<label class="form-label">Upload Files:</label>
									<div class="form-group">
										<label class="form-label"></label>
										<input class="form-control" type="file">
									</div>
								</div>
								<div class="custom-controls-stacked d-md-flex">
									<label class="form-label mt-1 me-5">Status :</label>
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios1"
											value="option3" checked>
										<span class="custom-control-label">Published</span>
									</label>
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios1"
											value="option4">
										<span class="custom-control-label">UnPublished</span>
									</label>
								</div>
							</div>
							<div class="modal-footer">
								<a href="javascript:void(0);" class="btn btn-outline-danger"
									data-bs-dismiss="modal">Close</a>
								<a href="javascript:void(0);" class="btn btn-success">Update</a>
							</div>
						</div>
					</div>
				</div>
				<!-- END VIEW CATEGORY MODAL  -->

@endsection

@section('scripts')

		<!-- INTERNAL HORIZONTALMENU JS -->
		<script src="{{asset('assets/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

		<!-- INTERNAL WOWMASTER JS -->
		<script src="{{asset('assets/plugins/wowmaster/wow.js')}}"></script>

		<!-- INTERNAL JQUERY AUTOCOMPLETE JS -->
		<script src="{{asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.js')}}"></script>
		<script src="{{asset('assets/plugins/jquery.autocomplete/custom-autocomplete.js')}}"></script>

		<!-- INTERNAL VERTICAL-SCROLL JS -->
		<script src="{{asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>

		<!-- INTERNAL OWL-CAROUSEL JS -->
		<script src="{{asset('assets/plugins/owl-carousel/owl-carousel.js')}}"></script>

		<!-- INTERNAL CHART JS -->
		<script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL CHARTJS ROUNDED-BARCHART JS  -->
		<script src="{{asset('assets/plugins/chart.min/chart.min.js')}}"></script>
		<script src="{{asset('assets/plugins/chart.min/rounded-barchart.js')}}"></script>

		<!-- INTERNAL DATA TABLES JS -->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- INTERNAL APEXCHART JS -->
		<script src="{{asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

		<!-- INTERNAL INDEX JS -->
		<script src="{{asset('assets/js/support/support-sidemenu.js')}}"></script>
		<script src="{{asset('assets/js/support/support-articles.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
