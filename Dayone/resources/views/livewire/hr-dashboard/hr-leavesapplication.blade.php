@extends('layouts.hrapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Leave Applications</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Recent Earned Leave Applications</h4>
										<div class="card-options">
											<a href="{{url('hr-recentleaves')}}" class="btn btn-primary">View All</a>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<div class="card border p-0 shadow-none">
													<div class="card-header border-0">
														<h3 class="card-title">Earned Leave Request</h3>
														<div class="ms-auto">
															<span class="badge badge-md badge-warning-light">3 days left</span>
														</div>
													</div>
													<div class="d-flex p-4">
														<div>
															<div class="avatar avatar-lg brround d-block cover-image" data-bs-image-src="{{asset('assets/images/users/1.jpg')}}"></div>
														</div>
														<div class="ps-3">
															<h5 class="mb-0 mt-2 text-dark fs-18">Faith Harris</h5>
															<p class="text-muted fs-12 mt-1 mb-0">Designing <span class="my-auto fs-9 font-weight-normal  ms-1 me-1 text-black-20">/</span> Web Designer</p>
														</div>
													</div>
													<div class="card-body pt-2 bg-light">
														<div class="mt-3 mb-3">
															<div class="h5 mb-1">
																<span class="feather feather-calendar"></span> : 16-01-2021
																<span class="badge badge-md badge-primary-light ms-1">1 day</span>
															</div>
															<small class="text-muted fs-11">Applied On: 05-01-2021 On<span class="font-weight-semibold"> 5 weeks ago</span></small>
														</div>
														<div class="progress progress-sm mb-2">
															<div class="progress-bar bg-success w-70"></div>
														</div>
														<div class="d-flex align-items-end justify-content-between mb-0">
															<h6 class="fs-12 mb-0">Remaining Leaves</h6>
															<h6 class="font-weight-bold fs-12 mb-0">15</h6>
														</div>
													</div>
													<div class="p-4">
														<label class="form-label">Reason:</label>
														<p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
													</div>
													<div class="card-footer p-0 border-top-0">
														<div class="btn-group w-100 leaves-btns">
															<a  href="javascript:void(0);" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
															<a  href="javascript:void(0);" class="btn btn-lg btn-outline-light w-55 text-danger">Reject</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<div class="card border p-0 shadow-none">
													<div class="card-header border-0">
														<h3 class="card-title">Earned Leave Request</h3>
														<div class="ms-auto">
															<span class="badge badge-md badge-warning-light">5 days left</span>
														</div>
													</div>
													<div class="d-flex p-4">
														<div>
															<div class="avatar avatar-lg brround d-block cover-image" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}"></div>
														</div>
														<div class="ps-3">
															<h5 class="mb-0 mt-2 text-dark fs-18">Austin Bell</h5>
															<p class="text-muted fs-12 mt-1 mb-0">Development <span class="my-auto fs-9 font-weight-normal  ms-1 me-1 text-black-20">/</span> Angular Developer</p>
														</div>
													</div>
													<div class="card-body pt-2 bg-light">
														<div class="mt-3 mb-3">
															<div class="h5 mb-1">
																<span class="feather feather-calendar"></span> : 14-01-2021<span class="text-muted leave-to">To</span>15-01-2021
																<span class="badge badge-md badge-primary-light ms-1">2 days</span>
															</div>
															<small class="text-muted fs-11">Applied On: 13-01-2021 On<span class="font-weight-semibold"> 3 weeks ago</span></small>
														</div>
														<div class="progress progress-sm mb-2">
															<div class="progress-bar bg-success w-60"></div>
														</div>
														<div class="d-flex align-items-end justify-content-between mb-0">
															<h6 class="fs-12 mb-0">Remaining Leaves</h6>
															<h6 class="font-weight-bold fs-12 mb-0">18</h6>
														</div>
													</div>
													<div class="p-4">
														<label class="form-label">Reason:</label>
														<p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
													</div>
													<div class="card-footer p-0 border-top-0">
														<div class="btn-group w-100 leaves-btns">
															<a  href="javascript:void(0);" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
															<a  href="javascript:void(0);" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<div class="card border p-0 shadow-none">
													<div class="card-header border-0">
														<h3 class="card-title">Earned Leave Request</h3>
														<div class="ms-auto">
															<span class="badge badge-md badge-warning-light">5 days left</span>
														</div>
													</div>
													<div class="d-flex p-4">
														<div>
															<div class="avatar avatar-lg brround d-block cover-image" data-bs-image-src="{{asset('assets/images/users/2.jpg')}}"></div>
														</div>
														<div class="ps-3">
															<h5 class="mb-0 mt-2 text-dark fs-18">Maria Bower</h5>
															<p class="text-muted fs-12 mt-1 mb-0">Marketing  <span class="my-auto fs-9 font-weight-normal  ms-1 me-1 text-black-20">/</span> Marketing analyst</p>
														</div>
													</div>
													<div class="card-body pt-2 bg-light">
														<div class="mt-3 mb-3">
															<div class="h5 mb-1">
																<span class="feather feather-calendar"></span> : 21-01-2021<span class="text-muted leave-to">To</span>27-01-2021
																<span class="badge badge-md badge-primary-light ms-1">7 days</span>
															</div>
															<small class="text-muted fs-11">Applied On: 11-01-2021 On<span class="font-weight-semibold"> 3 weeks ago</span></small>
														</div>
														<div class="progress progress-sm mb-2">
															<div class="progress-bar bg-success w-80"></div>
														</div>
														<div class="d-flex align-items-end justify-content-between mb-0">
															<h6 class="fs-12 mb-0">Remaining Leaves</h6>
															<h6 class="font-weight-bold fs-12 mb-0">10</h6>
														</div>
													</div>
													<div class="p-4">
														<label class="form-label">Reason:</label>
														<p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
													</div>
													<div class="card-footer p-0 border-top-0">
														<div class="btn-group w-100 leaves-btns">
															<a  href="javascript:void(0);" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
															<a  href="javascript:void(0);" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
												<div class="card border p-0 shadow-none">
													<div class="card-header border-0">
														<h3 class="card-title">Earned Leave Request</h3>
														<div class="ms-auto">
															<span class="badge badge-md badge-warning-light">1 day left</span>
														</div>
													</div>
													<div class="d-flex p-4">
														<div>
															<div class="avatar avatar-lg brround d-block cover-image" data-bs-image-src="{{asset('assets/images/users/10.jpg')}}"></div>
														</div>
														<div class="ps-3">
															<h5 class="mb-0 mt-2 text-dark fs-18">Peter Hill</h5>
															<p class="text-muted fs-12 mt-1 mb-0">IT  <span class="my-auto fs-9 font-weight-normal  ms-1 me-1 text-black-20">/</span> Testor</p>
														</div>
													</div>
													<div class="card-body pt-2 bg-light">
														<div class="mt-3 mb-3">
															<div class="h5 mb-1">
																<span class="feather feather-calendar"></span> : 05-01-2021
																<span class="badge badge-md badge-primary-light ms-1">1 day</span>
															</div>
															<small class="text-muted fs-11">Applied On: 12-12-2020 On<span class="font-weight-semibold"> 3 weeks ago</span></small>
														</div>
														<div class="progress progress-sm mb-2">
															<div class="progress-bar bg-success w-75"></div>
														</div>
														<div class="d-flex align-items-end justify-content-between mb-0">
															<h6 class="fs-12 mb-0">Remaining Leaves</h6>
															<h6 class="font-weight-bold fs-12 mb-0">12</h6>
														</div>
													</div>
													<div class="p-4">
														<label class="form-label">Reason:</label>
														<p class="text-muted leave-text">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
													</div>
													<div class="card-footer p-0 border-top-0">
														<div class="btn-group w-100 leaves-btns">
															<a  href="javascript:void(0);" class="btn btn-lg btn-outline-light w-50 text-success">Accept</a>
															<a  href="javascript:void(0);" class="btn  btn-lg btn-outline-light w-55 text-danger">Reject</a>
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

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Leaves Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-leaves">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">#Emp ID</th>
														<th class="border-bottom-0 w-5">Emp Name</th>
														<th class="border-bottom-0">Leave Type</th>
														<th class="border-bottom-0">From</th>
														<th class="border-bottom-0">To</th>
														<th class="border-bottom-0">Days</th>
														<th class="border-bottom-0">Reason</th>
														<th class="border-bottom-0">Applied on</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#2987</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/1.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Faith Harris</h6>
																</div>
															</div>
														</td>
														<td>Casual Leave</td>
														<td>16-01-2021</td>
														<td>16-01-2021</td>
														<td class="font-weight-semibold">1 Day</td>
														<td>Personal</td>
														<td>05-01-2021</td>
														<td>
															<span class="badge badge-primary">New</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#4987</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Austin Bell</h6>
																</div>
															</div>
														</td>
														<td>Sick Leave</td>
														<td>14-01-2021</td>
														<td>15-01-2021</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to Hospital</td>
														<td>13-01-2021</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#6729</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/2.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Maria Bower</h6>
																</div>
															</div>
														</td>
														<td>Casual Leave</td>
														<td>21-01-2021</td>
														<td>27-01-2021</td>
														<td class="font-weight-semibold">7 Days</td>
														<td>Going to Family Trip</td>
														<td>11-01-2021</td>
														<td>
															<span class="badge badge-warning">Pending</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#2098</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Peter Hill</h6>
																</div>
															</div>
														</td>
														<td>Casual Leave</td>
														<td>05-01-2021</td>
														<td>05-01-2021</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>12-12-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#1025</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Victoria Lyman</h6>
																</div>
															</div>
														</td>
														<td>Medical Leave</td>
														<td>22-01-2021</td>
														<td>22-01-2021</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Take Rest</td>
														<td>21-01-2021</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#3262</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Adam Quinn</h6>
																</div>
															</div>
														</td>
														<td>Casual Leave</td>
														<td>18-01-2021</td>
														<td>19-01-2021</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to my Hometown</td>
														<td>10-01-2021</td>
														<td>
															<span class="badge badge-warning">Pending</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#3489</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																</div>
															</div>
														</td>
														<td>Casual Leave</td>
														<td>11-01-2021</td>
														<td>11-01-2021</td>
														<td class="font-weight-semibold">1st Half Day</td>
														<td>Going to Hosiptal</td>
														<td>11-01-2021</td>
														<td>
															<span class="badge badge-danger">Rejected</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#3698</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Max Wilson</h6>
																</div>
															</div>
														</td>
														<td>Medical Leave</td>
														<td>09-01-2021</td>
														<td>09-01-20211</td>
														<td class="font-weight-semibold">1 Day</td>
														<td>Going to Hosiptal</td>
														<td>08-01-2021</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#5612</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/5.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Amelia Russell</h6>
																</div>
															</div>
														</td>
														<td>Casual Leave</td>
														<td>08-01-2021</td>
														<td>07-01-2021</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Personal</td>
														<td>25-12-2020</td>
														<td>
															<span class="badge badge-success">Approved</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#0245</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/13.jpg)')}}"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Justin Metcalfe</h6>
																</div>
															</div>
														</td>
														<td>Casual Leave</td>
														<td>21-12-2020</td>
														<td>21-12-2020</td>
														<td class="font-weight-semibold">1 Day</td>
														<td>Personal</td>
														<td>19-12-2020</td>
														<td>
															<span class="badge badge-danger">Rejected</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

@endsection

@section('modals')

            <!-- LEAVE APPLICATION MODAL -->
            <div class="modal fade"  id="leaveapplictionmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Leave Application</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Leave Letter:</label>
								<textarea class="form-control" rows="13">Hi Sir/Madam.

	I am Faith Harris. I request you to grant me leave for 1day (16-01-2021) because some personal reason. I would back at work on 17-0-2021.


Thanking you.

Your's faithfully,
Faith Harris

								</textarea>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-success" data-bs-dismiss="modal">Accept</a>
							<a  href="javascript:void(0);" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#replymodal" data-bs-dismiss="modal">Rejected</a>
						</div>
					</div>
				</div>
			</div>
			<!--  END LEAVE APPLICATION MODAL  -->

			<!-- REASON APPLICATION MODAL -->
			<div class="modal fade"  id="replymodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Reply</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Reason:</label>
								<textarea class="form-control" rows="5" placeholder="Some text here..."></textarea>
							</div>
						</div>
						<div class="modal-footer d-flex">
							<div>
								<a  href="javascript:void(0);" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal" data-bs-dismiss="modal"><i class="feather feather-arrow-left me-1"></i>Back</a>
							</div>
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">close</a>
								<a  href="javascript:void(0);" class="btn btn-primary" data-bs-dismiss="modal">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--  REASON APPLICATION MODAL -->

@endsection

@section('scripts')

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
        <script src="{{asset('assets/js/hr/hr-leaves.js')}}"></script>

@endsection
