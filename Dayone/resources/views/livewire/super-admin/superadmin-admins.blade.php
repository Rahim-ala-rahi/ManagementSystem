@extends('layouts.supadminapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Super Admins</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newadminmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Admin</a>
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
									<div class="card-body">
										<div class="table-responsive superadmins-table">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="superadmin-list">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">#NO</th>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Email</th>
														<th class="border-bottom-0">Register Date</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#01</td>
														<td>
															<a  href="javascript:void(0);" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Super Admin</h6>
																</div>
															</a>
														</td>
														<td>superadmin@gmail.com</td>
														<td>12-01-2019</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#02</td>
														<td>
															<a  href="javascript:void(0);" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Admin</h6>
																</div>
															</a>
														</td>
														<td>admin@gmail.com</td>
														<td>15-06-2020</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#03</td>
														<td>
															<a  href="javascript:void(0);" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Admin2</h6>
																</div>
															</a>
														</td>
														<td>admin123@gmail.com</td>
														<td>25-08-2020</td>
														<td><span class="badge badge-danger-light">InActive</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#04</td>
														<td>
															<a  href="javascript:void(0);" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Admin3</h6>
																</div>
															</a>
														</td>
														<td>admin456@gmail.com</td>
														<td>16-10-2020</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#05</td>
														<td>
															<a  href="javascript:void(0);" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Admin4</h6>
																</div>
															</a>
														</td>
														<td>admin156@gmail.com</td>
														<td>21-12-2020</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#06</td>
														<td>
															<a  href="javascript:void(0);" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Admin5</h6>
																</div>
															</a>
														</td>
														<td>admin957@gmail.com</td>
														<td>11-01-2021</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#07</td>
														<td>
															<a  href="javascript:void(0);" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Admin6</h6>
																</div>
															</a>
														</td>
														<td>admin209@gmail.com</td>
														<td>18-02-2021</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editadminmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
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

            <!-- NEW ADMIN MODAL -->
            <div class="modal fade"  id="newadminmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Admin</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" placeholder="Name" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Email</label>
								<input type="text" class="form-control" placeholder="email" value="">
							</div>
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm New Password</label>
								<input type="password" class="form-control" placeholder="password" value="">
							</div>
							<div class="form-group">
								<label class="form-label">Upload Image</label>
								<div class="form-group">
									<label for="form-label" class="form-label"></label>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label me-5">Status :</label>
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
							<a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
							<a  href="javascript:void(0);" class="btn btn-success projectnotify">Submit</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END NEW ADMIN MODAL -->

			<!-- NEW ADMIN MODAL -->
			<div class="modal fade"  id="editadminmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Admin</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Name</label>
								<input type="text" class="form-control" placeholder="Name" value="Super Admin">
							</div>
							<div class="form-group">
								<label class="form-label">Email</label>
								<input type="text" class="form-control" placeholder="email" value="superadmin@gmail.com">
							</div>
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" placeholder="password" value="12345">
							</div>
							<div class="form-group">
								<label class="form-label">Confirm New Password</label>
								<input type="password" class="form-control" placeholder="password" value="12345">
							</div>
							<div class="form-group">
								<label class="form-label">Upload Image</label>
								<div class="form-group">
									<label for="form-label"class="form-label" ></label>
									<input class="form-control" type="file">
								</div>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label me-5">Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked>
									<span class="custom-control-label">Active</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">InActive</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
							<a  href="javascript:void(0);" class="btn btn-success projectnotify">Update</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END NEW ADMIN MODAL -->

@endsection

@section('scripts')

        <!-- NOTIFICATIONS JS -->
        <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/superadmin/superadmin-admins.js')}}"></script>

@endsection
