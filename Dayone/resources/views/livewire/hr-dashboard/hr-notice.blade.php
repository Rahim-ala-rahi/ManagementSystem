@extends('layouts.hrapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Notice Board</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addnoticemodal">Add New Notice</a>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Notice Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-notice">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">No</th>
														<th class="border-bottom-0">Title</th>
														<th class="border-bottom-0">Description</th>
														<th class="border-bottom-0">To</th>
														<th class="border-bottom-0">Create On</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>01</td>
														<td>Board meeting Completed</td>
														<td>Attend the  company mangers & teamleads.</td>
														<td>Employees</td>
														<td>18-02-2021</td>
														<td><span class="badge badge-success">Active</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</div>
														</td>
													</tr>
													<tr>
														<td>02</td>
														<td>Updated the Company Policy</td>
														<td>some changes & add the terms & conditions.</td>
														<td>Employees</td>
														<td>16-02-2021</td>
														<td><span class="badge badge-success">Active</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</div>
														</td>
													</tr>
													<tr>
														<td>03</td>
														<td>Office Timings Changed</td>
														<td>This effetct after March 01st 9:00 Am To 5:00 Pm</td>
														<td>Employees</td>
														<td>17-02-2021</td>
														<td><span class="badge badge-success">Active</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</div>
														</td>
													</tr>
													<tr>
														<td>04</td>
														<td>Republic Day Celebrated</td>
														<td>Participate the all employess</td>
														<td>Employees</td>
														<td>26-01-2021</td>
														<td><span class="badge badge-success">Active</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</div>
														</td>
													</tr>
													<tr>
														<td>05</td>
														<td>Client meeting Completed</td>
														<td>Participate the all the managers</td>
														<td>Employees</td>
														<td>12-01-2021</td>
														<td><span class="badge badge-danger">InActive</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</div>
														</td>
													</tr>
													<tr>
														<td>06</td>
														<td>Update the Employee Leave Policy</td>
														<td>Participate the all employess</td>
														<td>Employees</td>
														<td>02-01-2021</td>
														<td><span class="badge badge-success">Active</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</div>
														</td>
													</tr>
													<tr>
														<td>07</td>
														<td>Faith Harris, Please sent the email</td>
														<td>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</td>
														<td>Employees</td>
														<td>26-01-2021</td>
														<td><span class="badge badge-success">Active</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
														</div>
														</td>
													</tr>
													<tr>
														<td>08</td>
														<td>Update the Agreement Policy</td>
														<td>There are many variations of passages of  but the majority have suffered alteration </td>
														<td>Employees</td>
														<td>12-02-2021</td>
														<td><span class="badge badge-danger">InActive</span></td>
														<td>
														<div class="d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editnoticemodal"><i class="feather feather-eye primary text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="Edit/View"></i></a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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
						<!-- END ROW -->

@endsection

@section('modals')

            <!-- ADD LEAVE MODAL -->
            <div class="modal fade"  id="addnoticemodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Notice</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Title</label>
								<input class="form-control" placeholder="Text">
							</div>
							<div class="form-group">
								<div class="custom-controls-stacked d-md-flex">
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
										<span class="custom-control-label">To Employees</span>
									</label>
									<label class="custom-control custom-radio success">
										<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
										<span class="custom-control-label">To Clients</span>
									</label>
								</div>
							</div>
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
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="summernote"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Attachment:</label>
								<div class="form-group">
								<label class="form-label"></label>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 me-5">Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios2" value="option3">
									<span class="custom-control-label">To Employees</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios2" value="option4">
									<span class="custom-control-label">To Clients</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success">Save</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADD LEAVE MODAL -->

			<!-- EDIT NOTICE MODAL -->
			<div class="modal fade"  id="editnoticemodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Leaves</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Title</label>
								<input class="form-control" placeholder="Text" value="Board meeting Completed">
							</div>
							<div class="form-group">
								<div class="custom-controls-stacked d-md-flex">
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios3" value="option5" checked>
										<span class="custom-control-label">To Employees</span>
									</label>
									<label class="custom-control custom-radio success">
										<input type="radio" class="custom-control-input" name="example-radios3" value="option6">
										<span class="custom-control-label">To Clients</span>
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Select Date:</label>
								<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<i class="feather feather-calendar"></i>
										</div>
									</div><input class="form-control fc-datepicker" placeholder="18-02-2021" type="text">
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Description:</label>
								<div class="summernote"></div>
							</div>
							<div class="form-group">
								<label class="form-label">Attachment:</label>
									<input class="form-control" type="file">
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label mt-1 me-5">Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios2" value="option7" checked>
									<span class="custom-control-label">Active</span>
								</label>
								<label class="custom-control custom-radio success">
									<input type="radio" class="custom-control-input" name="example-radios2" value="option8">
									<span class="custom-control-label">Inactive</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success">Update</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END EDIT NOTICE MODAL -->

@endsection

@section('scripts')

        <!-- INTERNAL  DATEPICKER JS -->
        <script src="{{asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL SUMMERNOTE JS  -->
		<script src="{{asset('assets/plugins/summer-note/summernote1.js')}}"></script>
        <script src="{{asset('assets/js/summernote.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/hr/hr-notice.js')}}"></script>

@endsection
