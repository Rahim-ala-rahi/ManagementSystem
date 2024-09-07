@extends('layouts.hrapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Expenses</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addnoticemodal">Add New Expense Item</a>
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
										<h4 class="card-title">Expense Summary</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-expense">
												<thead>
													<tr>
														<th class="border-bottom-0">#ID</th>
														<th class="border-bottom-0">Employee</th>
														<th class="border-bottom-0">Title</th>
														<th class="border-bottom-0">Purchase From</th>
														<th class="border-bottom-0">Date</th>
														<th class="border-bottom-0">Amount ($)</th>
														<th class="border-bottom-0">Paid By</th>
														<th class="border-bottom-0">Aprroval Status</th>
														<th class="border-bottom-0">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#01</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Faith Harris</h6>
																</div>
															</div>
														</td>
														<td>Bike Services</td>
														<td>ABC Service Center</td>
														<td>01-10-2021</td>
														<td class="font-weight-semibold">$678</td>
														<td>Card</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#02</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Austin Bell</h6>
																</div>
															</div>
														</td>
														<td>Bike Services</td>
														<td>ABC Service Center</td>
														<td>01-10-2021</td>
														<td class="font-weight-semibold">$678</td>
														<td>Card</td>
														<td><span class="badge badge-danger">Rejected </span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#03</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Maria Bower</h6>
																</div>
															</div>
														</td>
														<td>Pens</td>
														<td>Books stationery</td>
														<td>11-12-2020</td>
														<td class="font-weight-semibold">$12</td>
														<td>Cash</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#04</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Maria Bower</h6>
																</div>
															</div>
														</td>
														<td>Mouse Pad</td>
														<td>Aamzon</td>
														<td>21-11-2020</td>
														<td class="font-weight-semibold">$45</td>
														<td>Online Payment</td>
														<td><span class="badge badge-warning">Pending</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#05</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Victoria Lyman</h6>
																</div>
															</div>
														</td>
														<td>Data Connection</td>
														<td>PhonePe</td>
														<td>16-10-2020</td>
														<td class="font-weight-semibold">$599</td>
														<td>Online Payment</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#06</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Adam Quinn</h6>
																</div>
															</div>
														</td>
														<td>Mobile Recharge</td>
														<td>PhonePe</td>
														<td>15-10-2020</td>
														<td class="font-weight-semibold">$100</td>
														<td>Online Payment</td>
														<td><span class="badge badge-success">Approved</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#07</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																</div>
															</div>
														</td>
														<td>Bike Fuel</td>
														<td>Petrol Bunk</td>
														<td>12-09-2020</td>
														<td class="font-weight-semibold">$220</td>
														<td>Card</td>
														<td><span class="badge badge-warning">Pending</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Rejected">
																<i class="feather feather-x text-danger"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
																<i class="feather feather-eye  text-primary"  data-bs-toggle="tooltip" data-bs-placement="top" title="view"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-trash-2 text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#08</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-2 d-block">
																	<h6 class="mb-1 fs-14">Max Wilson</h6>
																</div>
															</div>
														</td>
														<td>Bike Fuel</td>
														<td>Petrol Bunk</td>
														<td>12-09-2020</td>
														<td class="font-weight-semibold">$220</td>
														<td>Card</td>
														<td><span class="badge badge-danger">Rejected</span></td>
														<td class="text-start d-flex">
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Accept">
																<i class="feather feather-check text-success" ></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#editexpensemodal">
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
						<!-- END ROW -->

@endsection

@section('modals')

            <!-- ADD EXPENSE MODAL -->
            <div class="modal fade"  id="addnoticemodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Expense</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="leave-types">
								<div class="form-group">
									<label class="form-label">Title:</label>
									<input type="text" class="form-control" placeholder="text">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Purchase Place:</label>
											<input type="text" class="form-control" placeholder="text">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Price ($):</label>
											<input type="text" class="form-control" placeholder="Number">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Date:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-calendar"></i>
													</div>
												</div><input class="form-control fc-datepicker"  type="text">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Employee Name :</label>
											<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
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
									</div>
								</div>
								<div class="form-group">
									<div class="form-label">Upload Invoice</div>
									<div class="form-group">
									<label class="form-label"></label>
										<input class="form-control" type="file">
								   </div>
								</div>
								<div class="form-group">
									<label class="form-label">Note:</label>
									<textarea class="form-control" rows="3">Some text here...</textarea>
								</div>
								<div class="custom-controls-stacked d-md-flex">
									<label class="form-label mt-1 me-5">Status :</label>
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios2" value="option1">
										<span class="custom-control-label">Approved</span>
									</label>
									<label class="custom-control custom-radio success">
										<input type="radio" class="custom-control-input" name="example-radios2" value="option2">
										<span class="custom-control-label">Rejected</span>
									</label>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
								<a  href="javascript:void(0);" class="btn btn-primary">Save</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADD EXPENSE MODAL -->

			<!--EDIT EXPENSE MODAL -->
			<div class="modal fade"  id="editexpensemodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Expense</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="leave-types">
								<div class="form-group">
									<label class="form-label">Title:</label>
									<input type="text" class="form-control" placeholder="text" value="Bike Services">
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Purchase Place:</label>
											<input type="text" class="form-control" placeholder="text" value="ABC Service Center">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Price ($):</label>
											<input type="text" class="form-control" placeholder="Number" value="$678">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Date:</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<i class="feather feather-calendar"></i>
													</div>
												</div><input class="form-control fc-datepicker" placeholder="01-10-2021" type="text">
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label class="form-label">Employee Name :</label>
											<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Employee">
												<option label="Select Employee"></option>
												<option value="1" selected>Faith Harris</option>
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
									</div>
								</div>
								<div class="form-group">
									<div class="form-label">Upload Invoice</div>
									<div class="form-group">
									<label class="form-label"></label>
										<input class="form-control" type="file">
								</div>
								</div>
								<div class="form-group">
									<label class="form-label">Note:</label>
									<textarea class="form-control" rows="3">Some text here...</textarea>
								</div>
								<div class="custom-controls-stacked d-md-flex">
									<label class="form-label mt-1 me-5">Status :</label>
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios2" value="option3" checked>
										<span class="custom-control-label">Approved</span>
									</label>
									<label class="custom-control custom-radio success me-4">
										<input type="radio" class="custom-control-input" name="example-radios2" value="option4">
										<span class="custom-control-label">Pending</span>
									</label>
									<label class="custom-control custom-radio success">
										<input type="radio" class="custom-control-input" name="example-radios2" value="option5">
										<span class="custom-control-label">Rejected</span>
									</label>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
								<a  href="javascript:void(0);" class="btn btn-primary">Update</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END EDITEXPENSE MODAL  -->

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

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/hr/hr-expenses.js')}}"></script>

@endsection
