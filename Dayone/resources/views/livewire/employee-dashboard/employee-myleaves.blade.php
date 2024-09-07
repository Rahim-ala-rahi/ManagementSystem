@extends('layouts.empapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">My Leaves</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#applyleaves">Apply Leaves</a>
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
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-9">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Leaves Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="emp-attendance">
												<thead>
													<tr>
														<th class="border-bottom-0 text-center">#ID</th>
														<th class="border-bottom-0">Leave Type</th>
														<th class="border-bottom-0">From</th>
														<th class="border-bottom-0">TO</th>
														<th class="border-bottom-0">Days</th>
														<th class="border-bottom-0">Reason</th>
														<th class="border-bottom-0">Applied On</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="text-center">1</td>
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
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">2</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">3</td>
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
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">4</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">5</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">6</td>
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
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">7</td>
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
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">8</td>
														<td>Medical Leave</td>
														<td>09-01-2021</td>
														<td>09-01-2021</td>
														<td class="font-weight-semibold">1 Days</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">9</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">10</td>
														<td>Casual Leave</td>
														<td>21-12-2020</td>
														<td>21-12-2020</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>19-12-2020</td>
														<td>
															<span class="badge badge-danger">Rejected</span>
														</td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#leaveapplictionmodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">11</td>
														<td>Casual Leave</td>
														<td>18-11-2020</td>
														<td>19-11-2020</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to HomeTown</td>
														<td>11-12-2020</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">12</td>
														<td>Medical Leave</td>
														<td>11-10-2020</td>
														<td>11-10-2020</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>11-10-2020</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">13</td>
														<td>Casual Leave</td>
														<td>13-08-2020</td>
														<td>14-08-2020</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to Family Trip</td>
														<td>09-08-2020</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">14</td>
														<td>Casual Leave</td>
														<td>21-05-2020</td>
														<td>21-05-2020</td>
														<td class="font-weight-semibold">1 Days</td>
														<td>Personal</td>
														<td>21-05-2020</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td class="text-center">15</td>
														<td>Casual Leave</td>
														<td>21-01-2020</td>
														<td>22-01-2020</td>
														<td class="font-weight-semibold">2 Days</td>
														<td>Going to Hosiptal</td>
														<td>16-01-2020</td>
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
															<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#reportmodal">
																<i class="feather feather-info text-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Report"></i>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-3">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Leaves Overview</h4>
									</div>
									<div class="card-body">
										<div id="leavesoverview" class="mx-auto pt-2"></div>
										<div class="row pt-7 pb-5  mx-auto text-center">
											<div class="col-md-7 mx-auto d-block">
												<div class="row">
													<div class="col-md-12">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-primary me-2 my-auto"></span>Casual Leaves
														</div>
													</div>
													<div class="col-md-12 mt-3">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label badge-danger me-2 my-auto"></span>Sick Leaves
														</div>
													</div>
													<div class="col-md-12 mt-3">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-secondary me-2 my-auto"></span>Gifted Leaves
														</div>
													</div>
													<div class="col-md-12 mt-3">
														<div class="d-flex font-weight-semibold">
															<span class="dot-label bg-success me-2 my-auto"></span>Remaining Leaves
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

@endsection

@section('modals')

            <!-- LEAVE APPLICATION MODAL -->
            <div class="modal fade"  id="leaveapplictionmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">My Leave Application</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="table-responsive">
								<table class="table mb-0">
									<tbody>
										<tr>
											<td class="font-weight-semibold">Leave Type </td>
											<td>:</td>
											<td>Casual Leave</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Date</td>
											<td>:</td>
											<td>16-01-2021</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Days</td>
											<td>:</td>
											<td>1 day</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Reason</td>
											<td>:</td>
											<td>Personal</td>
										</tr>
										<tr>
											<td class="font-weight-semibold">Applied On</td>
											<td>:</td>
											<td>05-01-2021</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-primary" data-bs-dismiss="modal">Close</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END LEAVE APPLICATION MODAL -->

			<!-- REPORT MODAL -->
			<div class="modal fade"  id="reportmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Report</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Email Address</label>
								<input type="text" class="form-control" placeholder="hr@gmail.com" value="" readonly>
							</div>
							<div class="form-group">
								<label class="form-label">Subject</label>
								<textarea class="form-control" rows="3">Some text here...</textarea>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
							<a  href="javascript:void(0);" class="btn btn-primary">Submit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END REPORT MODAL -->

			<!-- APPLY LEAVES MODAL -->
			<div class="modal fade"  id="applyleaves">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Apply Leaves</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="leave-types">
								<div class="form-group">
									<label class="form-label">Leaves Dates</label>
									<select name="projects"  class="form-control custom-select select2" id="daterange-categories">
										<option value="single">Single Leaves</option>
										<option value="multiple">Multiple Leaves</option>
									</select>
								</div>
								<div class="leave-content active" id="single">
									<div class="form-group">
										<label class="form-label">Date Range:</label>
										<div class="input-group">
											<input type="text" name="singledaterange"  class="form-control" placeholder="select dates"/>
											<div class="input-group-append">
												<div class="input-group-text">
													<i class="bx bx-calendar"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="leave-content" id="multiple">
									<div class="form-group">
										<label class="form-label">Date Range:</label>
										<div class="input-group">
											<input type="text" name="daterange"  class="form-control" placeholder="select dates"/>
											<div class="input-group-append">
												<div class="input-group-text">
													<i class="bx bx-calendar"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="form-label">Leaves Types</label>
									<select name="projects"  class="form-control custom-select select2" data-placeholder="Select">
										<option label="select"></option>
										<option value="1">Half Day Leave</option>
										<option value="2">Casual Leaves</option>
										<option value="3">Sick Leaves</option>
										<option value="4">Maternity Leaves</option>
										<option value="5">Paternity Leaves</option>
										<option value="6">Annual Leaves</option>
										<option value="6">Unpaid Leaves</option>
										<option value="8">Other Leaves</option>
									</select>
								</div>
								<div class="form-group">
									<label class="form-label">Reason:</label>
									<textarea class="form-control" rows="5">Some text here...</textarea>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="">
								<label class="mb-0 font-weight-semibold">Selected Days:</label>
								<span class="badge badge-danger badge-pill ms-2">2</span>
							</div>
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-outline-primary" data-bs-dismiss="modal">Close</a>
								<a  href="javascript:void(0);" class="btn btn-primary">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END APPLY LEAVES MODAL -->

@endsection

@section('scripts')

        <!-- INTERNAL CHART JS -->
        <script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL Data tables -->
		<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL DATERANGEPICKER JS -->
		<script src="{{asset('assets/plugins/daterangepicker/moment.min.js')}}"></script>
		<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>

        <!-- INTERNAL APEXCHART JS -->
		<script src="{{asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/employee/emp-myleaves.js')}}"></script>

@endsection
