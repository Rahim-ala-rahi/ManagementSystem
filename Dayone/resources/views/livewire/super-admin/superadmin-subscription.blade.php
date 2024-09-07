@extends('layouts.supadminapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER-->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Subscriptions</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#newpackagemodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Package</a>
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
										<div class="table-responsive subscription-table">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="company-list">
												<thead>
													<tr>
														<th  rowspan="2" class="border-bottom-0 w-5">#NO</th>
														<th  rowspan="2" class="border-bottom-0">Package</th>
														<th  colspan="2" class="text-center">Package Type</th>
														<th  colspan="2" class="text-center">User Count</th>
														<th  rowspan="2" class="border-bottom-0">Storage</th>
														<th  rowspan="2" class="border-bottom-0">Status</th>
														<th  rowspan="2" class="border-bottom-0">Actions</th>
													</tr>
													<tr>
														<th  class="border-bottom-0 text-center">Monthly</th>
														<th  class="border-bottom-0 text-center">Yearly</th>
														<th  class="border-bottom-0 text-center">Min</th>
														<th  class="border-bottom-0 text-center">Max</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#01</td>
														<td>Free</td>
														<td class="text-center">$0.00</td>
														<td class="text-center">$0.00</td>
														<td class="text-center">All</td>
														<td class="text-center">All</td>
														<td>Limited</td>
														<td><span class="badge badge-danger">Disable</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#02</td>
														<td>Basic</td>
														<td class="text-center">$0.00</td>
														<td class="text-center">$19.00</td>
														<td class="text-center">00</td>
														<td class="text-center">05</td>
														<td>Limited</td>
														<td><span class="badge badge-success">Enable</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#03</td>
														<td>Premium</td>
														<td class="text-center">$0.00</td>
														<td class="text-center">$39.00</td>
														<td class="text-center">00</td>
														<td class="text-center">20</td>
														<td>Unlimited</td>
														<td><span class="badge badge-success">Enable</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#04</td>
														<td>Advanced</td>
														<td class="text-center">$0.00</td>
														<td class="text-center">$69.00</td>
														<td class="text-center">00</td>
														<td class="text-center">40</td>
														<td>Unlimited</td>
														<td><span class="badge badge-success">Enable</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#05</td>
														<td>Enterprise</td>
														<td class="text-center">$0.00</td>
														<td class="text-center">$139.00</td>
														<td class="text-center">80</td>
														<td class="text-center">Unlimited</td>
														<td>Unlimited</td>
														<td><span class="badge badge-success">Enable</span></td>
														<td class="text-center">
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
																	<i class="feather feather-eye text-primary"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editmodal">
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

            <!-- ADD NEW PACKAGE MODAL -->
            <div class="modal fade"  id="newpackagemodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Package</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Package Name</label>
								<select  class="form-control custom-select select2" data-placeholder="Select Package">
									<option label="Select Package"></option>
									<option value="1">Free</option>
									<option value="2">Basic</option>
									<option value="3">Premium</option>
									<option value="4">Advanced</option>
									<option value="5">Enterprise</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Package Type</label>
								<select  class="form-control custom-select select2" data-placeholder="Select Package">
									<option label="Select Package"></option>
									<option value="1">Monthly</option>
									<option value="2">Yearly</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Min Users</label>
										<input class="form-control" placeholder="min" value="">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Max Users</label>
										<input class="form-control" placeholder="max" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Storage</label>
								<select  class="form-control custom-select select2" data-placeholder="Select Storage">
									<option label="Select storage"></option>
									<option value="1">Limited</option>
									<option value="2">Unlimited</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Description</label>
								<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label me-5">Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option1">
									<span class="custom-control-label">Enable</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
									<span class="custom-control-label">Disable</span>
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
			<!-- END ADD NEW PACKAGE MODAL -->

			<!-- EDIT COMPANY MODAL -->
			<div class="modal fade"  id="editmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Company</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Package Name</label>
								<select  class="form-control custom-select select2" data-placeholder="Select Package">
									<option label="Select Package"></option>
									<option value="1">Free</option>
									<option value="2" selected>Basic</option>
									<option value="3">Premium</option>
									<option value="4">Advanced</option>
									<option value="5">Enterprise</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Package Type</label>
								<select  class="form-control custom-select select2" data-placeholder="Select Package">
									<option label="Select Package"></option>
									<option value="1" selected>Monthly</option>
									<option value="2">Yearly</option>
								</select>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Min Users</label>
										<input class="form-control" placeholder="min" value="00">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Max Users</label>
										<input class="form-control" placeholder="max" value="05">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Storage</label>
								<select  class="form-control custom-select select2" data-placeholder="Select Storage">
									<option label="Select storage"></option>
									<option value="1" selected>Limited</option>
									<option value="2">Unlimited</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Description</label>
								<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
							</div>
							<div class="custom-controls-stacked d-md-flex">
								<label class="form-label me-5">Status :</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option3" checked>
									<span class="custom-control-label">Enable</span>
								</label>
								<label class="custom-control custom-radio success me-4">
									<input type="radio" class="custom-control-input" name="example-radios1" value="option4">
									<span class="custom-control-label">Disable</span>
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
							<a  href="javascript:void(0);" class="btn btn-success projectnotify">Updated</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END EDIT COMPANY MODAL -->

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
        <script src="{{asset('assets/js/superadmin/superadmin-subscription.js')}}"></script>

@endsection
