@extends('layouts.hrapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Mark Attendance</div>
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
						<!--END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12 col-lg-3">
												<div class="form-group">
													<label class="form-label">Select Date:</label>
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
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="hr-checkall">
													<label class="custom-control custom-checkbox mb-0">
														<input type="checkbox" class="custom-control-input" id="checkAll">
														<span class="custom-control-label">Check All</span>
													</label>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-table">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">#Emp ID</th>
														<th class="border-bottom-0">Emp Name</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Clock In</th>
														<th class="border-bottom-0">Clock Out</th>
														<th class="border-bottom-0">IP Address</th>
														<th class="border-bottom-0">Working From</th>
														<th class="border-bottom-0">Attendance</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#2987</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Faith Harris</h6>
																	<p class="text-muted mb-0 fs-12">Web Designer</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success-light">Present</span></td>
														<td>09:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-success">Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#4987</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Austin Bell</h6>
																	<p class="text-muted mb-0 fs-12">Angular Developer</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-danger-light">Absent</span></td>
														<td>09:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.2</td>
														<td>Office</td>
														<td><span class="badge badge-danger">Not Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1">
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#6729</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Maria Bower</h6>
																	<p class="text-muted mb-0 fs-12">Marketing analyst</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success-light">Present</span></td>
														<td>09:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-success">Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#2098</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Peter Hill</h6>
																	<p class="text-muted mb-0 fs-12">Testor</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-warning-light">Half Day</span></td>
														<td>09:30 AM</td>
														<td>01:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-danger">Not Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1">
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#halfpresentmodal">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#1025</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Victoria Lyman</h6>
																	<p class="text-muted mb-0 fs-12">General Manager</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success-light">Present</span></td>
														<td>09:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-success">Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#3262</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Adam Quinn</h6>
																	<p class="text-muted mb-0 fs-12">Accountant</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success-light">Present</span></td>
														<td>09:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-success">Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#3489</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																	<p class="text-muted mb-0 fs-12">App Designer</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success-light">Present</span></td>
														<td>09:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-success">Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#3698</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Max Wilson</h6>
																	<p class="text-muted mb-0 fs-12">PHP Developer</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-orange-light">Late</span></td>
														<td>10:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-danger">Not Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1">
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#5612</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Amelia Russell</h6>
																	<p class="text-muted mb-0 fs-12">UX Designer</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success-light">Present</span></td>
														<td>10:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-success">Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#0245</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Justin Metcalfe</h6>
																	<p class="text-muted mb-0 fs-12">Web Designer</p>
																</div>
															</div>
														</td>
														<td><span class="badge badge-success-light">Present</span></td>
														<td>10:30 AM</td>
														<td>06:30 PM</td>
														<td>225.192.45.1</td>
														<td>Office</td>
														<td><span class="badge badge-success">Marked</span></td>
														<td>
															<div class="d-flex">
																<label class="custom-control custom-checkbox-md">
																	<input type="checkbox" class="custom-control-input-success" name="example-checkbox1" value="option1" checked>
																	<span class="custom-control-label-md success"></span>
																</label>
																<a  href="javascript:void(0);" class="action-btns1 bg-light" data-bs-toggle="modal" data-bs-target="#presentmodal1">
																	<i class="feather feather-eye primary text-primary" data-bs-toggle="tooltip" data-original-title="View"></i>
																</a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer">
										<a  href="javascript:void(0);" class="btn btn-primary float-end">Save All</a>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')

            <!-- PRESENT MODAL -->
            <div class="modal fade"  id="presentmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attendance Details</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row mb-5 mt-4">
								<div class="col-md-4">
									<div class="pt-5 text-center">
										<h6 class="mb-1 fs-16 font-weight-semibold">09:30 AM</h6>
										<small class="text-muted fs-14">Clock In</small>
									</div>
								</div>
								<div class="col-md-4">
									<div class="chart-circle chart-circle-md" data-value="100" data-thickness="6" data-color="#0dcd94">
										<div class="chart-circle-value text-muted">09:00 hrs</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="pt-5 text-center">
										<h6 class="mb-1 fs-16 font-weight-semibold"> 06:30 PM</h6>
										<small class="text-muted fs-14">Clock Out</small>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">IP Address</label>
								<input type="text" class="form-control" placeholder="225.192.145.1" disabled>
							</div>
							<div class="form-group">
								<label class="form-label">Working Form</label>
								<select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
									<option label="Select"></option>
									<option value="1" selected>Office</option>
									<option value="2">Home</option>
									<option value="3">Others</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">close</a>
							<a  href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal" data-bs-dismiss="modal">Edit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END PRESENT MODAL  -->

			<!-- EDIT MODAL -->
			<div class="modal fade"  id="editmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attendance Details</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-label">Clock In</label>
										<div class="input-group">
											<input type="text" class="form-control timepicker" value="9:30 AM">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input orange">
										<span class="custom-switch-indicator "></span>
										<span class="custom-switch-description text-dark">Late</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-label">Clock Out</label>
										<div class="input-group">
											<input type="text" class="form-control timepicker" value="06: 30 PM">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange">
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description text-dark">half Day</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">IP Address</label>
								<input type="text" class="form-control" placeholder="225.192.145.1" disabled>
							</div>
							<div class="form-group">
								<label class="form-label">Working Form</label>
								<select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
									<option label="Select"></option>
									<option value="1" selected>Office</option>
									<option value="2">Home</option>
									<option value="3">Others</option>
								</select>
							</div>
						</div>
						<div class="modal-footer d-flex">
							<div>
								<a  href="javascript:void(0);" class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#presentmodal" data-bs-dismiss="modal"><i class="feather feather-arrow-left me-1"></i>Back</a>
							</div>
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">close</a>
								<a  href="javascript:void(0);" class="btn btn-primary">Save</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END EDIT MODAL -->

			<!-- PRESENT MODAL1 -->
			<div class="modal fade"  id="presentmodal1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attendance Details</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row mb-5 mt-4">
								<div class="col-md-4">
									<div class="pt-5 text-center">
										<h6 class="mb-1 fs-16 font-weight-semibold">09:30 AM</h6>
										<small class="text-muted fs-14">Clock In</small>
									</div>
								</div>
								<div class="col-md-4">
									<div class="chart-circle chart-circle-md" data-value="100" data-thickness="6" data-color="#0dcd94">
										<div class="chart-circle-value text-muted">09:00 hrs</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="pt-5 text-center">
										<h6 class="mb-1 fs-16 font-weight-semibold"> 06:30 PM</h6>
										<small class="text-muted fs-14">Clock Out</small>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">IP Address</label>
								<input type="text" class="form-control" placeholder="225.192.145.1">
							</div>
							<div class="form-group">
								<label class="form-label">Working Form</label>
								<select name="projects"  class="form-control custom-select select2" data-placeholder="Select">
									<option label="Select"></option>
									<option value="1" selected>Office</option>
									<option value="2">Home</option>
									<option value="3">Others</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">close</a>
							<a  href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal1" data-bs-dismiss="modal">Edit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- End PRESENT MODAL1 -->

			<!-- EDIT1 MODAL -->
			<div class="modal fade"  id="editmodal1">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attendance Details</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-label">Clock In</label>
										<div class="input-group">
											<input type="text" class="form-control timepicker" value="9:30 AM">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input orange">
										<span class="custom-switch-indicator "></span>
										<span class="custom-switch-description text-dark">Late</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-label">Clock Out</label>
										<div class="input-group">
											<input type="text" class="form-control timepicker" value="06: 30 PM">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange">
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description text-dark">half Day</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">IP Address</label>
								<input type="text" class="form-control" placeholder="225.192.145.1">
							</div>
							<div class="form-group">
								<label class="form-label">Working Form</label>
								<select name="projects"  class="form-control custom-select select2" data-placeholder="Select">
									<option label="0"></option>
									<option value="1" selected>Office</option>
									<option value="2">Home</option>
									<option value="3">Others</option>
								</select>
							</div>
						</div>
						<div class="modal-footer d-flex">
							<div>
								<a  href="javascript:void(0);" class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#presentmodal1" data-bs-dismiss="modal"><i class="feather feather-arrow-left me-1"></i>Back</a>
							</div>
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">close</a>
								<a  href="javascript:void(0);" class="btn btn-primary">Save</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END EDIT1 MODAL  -->

			<!--HALFPRESENT MODAL -->
			<div class="modal fade"  id="halfpresentmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attendance Details <span class="badge badge-orange">Half Day</span></h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row mb-5 mt-4">
								<div class="col-md-4">
									<div class="pt-5 text-center">
										<h6 class="mb-1 fs-16 font-weight-semibold">09:30 AM</h6>
										<small class="text-muted fs-14">Clock In</small>
									</div>
								</div>
								<div class="col-md-4">
									<div class="chart-circle chart-circle-md" data-value=".50" data-thickness="6" data-color="#0dcd94">
										<div class="chart-circle-value text-muted">04:30 hrs</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="pt-5 text-center">
										<h6 class="mb-1 fs-16 font-weight-semibold"> 01:30 PM</h6>
										<small class="text-muted fs-14">Clock Out</small>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">IP Address</label>
								<input type="text" class="form-control" placeholder="225.192.145.1" disabled>
							</div>
							<div class="form-group">
								<label class="form-label">Working Form</label>
								<select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
									<option label="Select"></option>
									<option value="1" selected>Office</option>
									<option value="2">Home</option>
									<option value="3">Others</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">close</a>
							<a  href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#halfdayeditmodal" data-bs-dismiss="modal">Edit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END HALFPRESENT MODAL  -->

			<!-- HALFDAY EDIT MODAL -->
			<div class="modal fade"  id="halfdayeditmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Attendance Details <span class="badge badge-orange">Half Day</span></h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-label">Clock In</label>
										<div class="input-group">
											<input type="text" class="form-control timepicker" value="9:30 AM">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange">
										<span class="custom-switch-indicator "></span>
										<span class="custom-switch-description text-dark">Late</span>
									</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label class="form-label">Clock Out</label>
										<div class="input-group">
											<input type="text" class="form-control timepicker" value="01: 30 PM">
											<div class="input-group-text">
												<i class="fa fa-clock-o"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<label class="custom-switch mt-md-6">
										<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input  orange" checked>
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description text-dark">half Day</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">IP Address</label>
								<input type="text" class="form-control" placeholder="225.192.145.1" disabled>
							</div>
							<div class="form-group">
								<label class="form-label">Working Form</label>
								<select name="projects"  class="form-control custom-select select2" disabled data-placeholder="Select">
									<option label="Select"></option>
									<option value="1" selected>Office</option>
									<option value="2">Home</option>
									<option value="3">Others</option>
								</select>
							</div>
						</div>
						<div class="modal-footer d-flex">
							<div>
								<a  href="javascript:void(0);" class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#halfpresentmodal" data-bs-dismiss="modal"><i class="feather feather-arrow-left me-1"></i>Back</a>
							</div>
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">close</a>
								<a  href="javascript:void(0);" class="btn btn-primary">Save</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END HALFDAY EDIT MODAL  -->

@endsection

@section('scripts')

        <!-- INTERNAL  DATEPICKER JS -->
        <script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/hr/hr-attmark.js')}}"></script>

@endsection
