@extends('layouts.clientapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Client List</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addclientmodal"><i class="feather feather-plus fs-15 my-auto me-2"></i>Add New Client</a>
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
										<h4 class="card-title">Client Summary</h4>
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
													<label class="form-label">Select Status:</label>
													<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Status">
														<option label="Select Status"></option>
														<option value="1">Active</option>
														<option value="2">InActive</option>
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
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="client-list">
												<thead>
													<tr>
														<th class="border-bottom-0">#ID</th>
														<th class="border-bottom-0">Name</th>
														<th class="border-bottom-0">Email</th>
														<th class="border-bottom-0">Projects</th>
														<th class="border-bottom-0">Status</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#SPT-001</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Julia Walker</h6>
																</div>
															</a>
														</td>
														<td>julia@gmail.com</td>
														<td>2</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#SPT-002</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Diane Short</h6>
																</div>
															</a>
														</td>
														<td>daine@gmail.com</td>
														<td>1</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#SPT-003</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Pippa Welch</h6>
																</div>
															</a>
														</td>
														<td>pippa@gmail.com</td>
														<td>0</td>
														<td><span class="badge badge-danger-light">InActive</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#SPT-004</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Gabrielle Fisher</h6>
																</div>
															</a>
														</td>
														<td>gabrielle@gmail.com</td>
														<td>5</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#SPT-005</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Ryan Terry</h6>
																</div>
															</a>
														</td>
														<td>ryan@gmail.com</td>
														<td>3</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#SPT-006</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">James Wilson</h6>
																</div>
															</a>
														</td>
														<td>james@gmail.com</td>
														<td>2</td>
														<td><span class="badge badge-danger-light">InActive</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#SPT-007</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Lisa Vance</h6>
																</div>
															</a>
														</td>
														<td>lisa@gmail.com</td>
														<td>6</td>
														<td><span class="badge badge-success-light">Active</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
																	<i class="feather feather-edit-2  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
																</a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>#SPT-008</td>
														<td>
															<a href="{{url('client-profile')}}" class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Sam Gray</h6>
																</div>
															</a>
														</td>
														<td>samgray@gmail.com</td>
														<td>6</td>
														<td><span class="badge badge-danger-light">InActive</span></td>
														<td>
															<div class="d-flex">
																<a href="{{url('client-view')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View"><i class="feather feather-eye text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editclientmodal">
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

            <!-- ADD NEW CLIENT MODAL -->
            <div class="modal fade"  id="addclientmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Client</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client ID</label>
										<input class="form-control" type="text" placeholder="Enter Number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client Name</label>
										<input class="form-control" type="text" placeholder="Enter Name">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Email Address</label>
										<input class="form-control" type="text" placeholder="Enter Email Address">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" type="password" placeholder="Enter Password">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Phone</label>
										<input class="form-control" type="text" placeholder="Enter PhoneNumber">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">URL</label>
										<input class="form-control" type="text" placeholder="Enter Website eg:https://">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">City</label>
										<input class="form-control" type="text" placeholder="Enter City">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">State</label>
										<input class="form-control" type="text" placeholder="Enter State">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">ZIP Code</label>
										<input class="form-control" type="text" placeholder="Enter ZIP Code">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Country</label>
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Country">
											<option label="Select Country"></option>
											<option value="1">Germany</option>
											<option value="3">Canada</option>
											<option value="4">Usa</option>
											<option value="5">Afghanistan</option>
											<option value="6">Albania</option>
											<option value="7">China</option>
											<option value="8">Denmark</option>
											<option value="9">Finland</option>
											<option value="10">India</option>
											<option value="11">Kiribati</option>
											<option value="12">Kuwait</option>
											<option value="13">Mexico</option>
											<option value="14">Pakistan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Address</label>
								<textarea rows="3" class="form-control" placeholder="Address1"></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Image:</label>
								<div class="form-group">
									<label class="form-label"></label>
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
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success projectnotify">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADD NEW CLIENT MODAL -->

			<!-- EDIT CLIENT MODAL -->
			<div class="modal fade"  id="editclientmodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Client</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client ID</label>
										<input class="form-control" type="text" placeholder="Enter Number" value="#SPT-001">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Client Name</label>
										<input class="form-control" type="text" placeholder="Enter Name" value="Julia Walker">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Email Address</label>
										<input class="form-control" type="text" placeholder="Enter Email Address" value="julia@gmail.com">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Password</label>
										<input class="form-control" type="password" placeholder="Enter Password" value="23589145">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Phone</label>
										<input class="form-control" type="text" placeholder="Enter PhoneNumber" value="9968534271">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">URL</label>
										<input class="form-control" type="text" placeholder="Enter Website eg:https://" value="www.domain.com">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">City</label>
										<input class="form-control" type="text" placeholder="Enter City" value="Carson City">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">State</label>
										<input class="form-control" type="text" placeholder="Enter State" value="Nevada">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">ZIP Code</label>
										<input class="form-control" type="text" placeholder="Enter ZIP Code" value="23568">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="form-label">Country</label>
										<select name="attendance"  class="form-control custom-select select2"  data-placeholder="Select Country">
											<option label="Select Country"></option>
											<option value="1">Germany</option>
											<option value="3">Canada</option>
											<option value="4" selected>Usa</option>
											<option value="5">Afghanistan</option>
											<option value="6">Albania</option>
											<option value="7">China</option>
											<option value="8">Denmark</option>
											<option value="9">Finland</option>
											<option value="10">India</option>
											<option value="11">Kiribati</option>
											<option value="12">Kuwait</option>
											<option value="13">Mexico</option>
											<option value="14">Pakistan</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label class="form-label">Address</label>
								<textarea rows="3" class="form-control" placeholder="Address1">4102 Masonic Hill Road Little Rock Arkansas-727212</textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Upload Image:</label>
								<div class="form-group">
									<label class="form-label"></label>
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
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-success projectnotify">Updated</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END EDIT CLIENT MODAL -->

@endsection

@section('scripts')

        <!-- NOTIFICATIONS JS -->
        <script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>

        <!-- INTERNAL CHART JS -->
        <script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>

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
        <script src="{{asset('assets/js/client/client-list.js')}}"></script>

@endsection
