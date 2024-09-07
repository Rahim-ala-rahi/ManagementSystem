@extends('layouts.jobapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Apply Jobs</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addjobmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Job</a>
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
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">Senior PHP Developer</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  Abcd Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 25,000 - 35,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> 2+ Yer Exp</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													 <small class="d-block text-dark">12-01-2021, 12:15 AM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">Fresher Web Designer</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  croport Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> India</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 15,000 - 10,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> Freshers</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													 <small class="d-block text-dark">15-02-2021, 09:00 AM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">Senior Web Developer</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  Cropmaster Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> UK</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 22,000 - 30,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> 1+ Yer Exp</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													 <small class="d-block text-dark">16-02-2021, 15:50 PM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">Fresher UI Designer</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  frecho Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> India</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 12,000 - 18,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> Fresher</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													 <small class="d-block text-dark">16-01-2021, 09:35 AM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">SEO Specialist</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  kolit Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> UK</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 20,000 - 25,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> 1+ Yer Exp</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													<small class="d-block text-dark">16-03-2021, 18:20 PM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">Senior Worpress Developer</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  lokalc Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> UK</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 35,000 - 40,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> 3+ Yer Exp</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													 <small class="d-block text-dark">16-01-2021, 22:45 PM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">Senior Accountant</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  kloki Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> USA</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 15,000 - 25,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> 1+ Yer Exp</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													 <small class="d-block text-dark">18-02-2021, 12:15 AM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<a class="text-dark" href="{{url('job-view')}}">
											<h4 class="font-weight-semibold mt-1">Fresher Angular Developer</h4>
										</a>
										<ul class="d-lg-flex mt-2 mb-2">
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-building-o text-muted me-1"></i>  Movck Pvt Ltd</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-map-marker text-muted me-1"></i> UK</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa fa-usd text-muted me-1"></i> 15,000 - 18,000</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-clock-o text-muted me-1"></i> Full Time</span></a></li>
											<li><a class="me-4"  href="javascript:void(0);"><span><i class="fa fa-briefcase text-muted me-1"></i> 2+ Yer Exp</span></a></li>
										</ul>
										<p class="mb-0">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment</p>
									</div>
									<div class="card-footer">
										<div class="d-md-flex">
											<div class="d-flex align-items-center">
												<div>
													<a class="text-muted fs-12 mb-1"  href="javascript:void(0);"><i class="fa fa-edit text-muted me-1"></i>Posted by</a>
													 <small class="d-block text-dark">21-01-2021, 10:00 AM</small>
												</div>
											</div>
											<div class="ms-auto mt-3 mt-lg-0">
												<a class="me-3 mt-1 mt-sm-0"  href="javascript:void(0);"><i class="fa fa-user text-muted me-2"></i>HR/Admin</a>
												<a class="btn btn-primary"  href="javascript:void(0);" data-bs-target="#apply" data-bs-toggle="modal"><i class="si si-check me-1"></i> Apply Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')

            <!-- ADD NEW JOB MODAL -->
            <div class="modal fade"  id="addjobmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Job</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Position</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="Name" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Job Type</label>
									</div>
									<div class="col-md-9">
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Job Type">
											<option label="Select Job Type"></option>
											<option value="1">Full-Time</option>
											<option value="2">Part-Time</option>
											<option value="3">Freelancer</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Description</label>
									</div>
									<div class="col-md-9">
										<div class="summernote"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Posted Date</label>
									</div>
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
											<div class="input-group-append">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Last Date To Apply</label>
									</div>
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
											<div class="input-group-append">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Close Date</label>
									</div>
									<div class="col-md-9">
										<div class="input-group">
											<input class="form-control fc-datepicker" placeholder="DD-MM-YYY" type="text">
											<div class="input-group-append">
												<div class="input-group-text">
													<i class="feather feather-calendar"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<label class="form-label mb-0 mt-1">Status</label>
								</div>
								<div class="col-md-9">
									<div class="custom-controls-stacked d-md-flex">
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
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success projectnotify">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADD NEW JOB MODAL -->

			<!-- APPLY JOB MODAL -->
			<div class="modal fade"  id="apply">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Apply Job</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Name</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="Name" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Email</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="Email" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Contact Number</label>
									</div>
									<div class="col-md-9">
										<input type="text" class="form-control" placeholder="Phone Number" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Description</label>
									</div>
									<div class="col-md-9">
										<div class="summernote"></div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-3">
										<label class="form-label mb-0 mt-2">Upload Resume</label>
									</div>
									<div class="col-md-9">
										<div class="form-group">
										<label class="form-label"></label>
											<input class="form-control" type="file">
				                        	</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success projectnotify">Apply</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END APPLY JOB MODAL -->

@endsection

@section('scripts')

		<!-- NOTIFICATIONS JS -->
		<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

        <!-- INTERNAL DATEPICKER JS -->
		<script src="{{asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/job/job-apply.js')}}"></script>

@endsection
