@extends('layouts.projectapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Project Overview Calendar</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newprojectmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Create New Project</a>
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
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Task Overview This Month</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-7 col-md-12">
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
											<div class="col-xl-3 col-md-12">
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
											<div class="col-xl-2 col-md-12">
												<div class="form-group mt-5">
													<a  href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
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
							<div class="col-xl-12 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="project-calender">
											<div id="calendar1"></div>
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

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

        <!-- INTERNAL CHART JS -->
        <script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL FULLCALENDAR JS -->
        <script src="{{asset('assets/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/project/project-overclndr.js')}}"></script>

@endsection
