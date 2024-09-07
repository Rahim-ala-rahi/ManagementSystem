@extends('layouts.hrapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Employee Salary</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list mt-3 mt-lg-0">
										<a href="{{url('hr-addpayroll')}}" class="btn btn-primary me-3">Add New Payroll</a>
										<button  class="btn btn-secondary me-3" data-bs-toggle="modal" data-bs-target="#excelmodal">
											<i class="las la-file-excel"></i>  Download Monthly Excel Report
										</button>
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
										<div class="row">
											<div class="col-md-12 col-lg-3">
												<div class="form-group">
													<label class="form-label">Employee Name:</label>
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
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-payroll">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">#Emp ID</th>
														<th class="border-bottom-0">Emp Name</th>
														<th class="border-bottom-0">Month-Year</th>
														<th class="border-bottom-0">Designation</th>
														<th class="border-bottom-0">($) Salary</th>
														<th class="border-bottom-0">Generated Date</th>
														<th class="border-bottom-0">Status</th>
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
																	<p class="text-muted mb-0 fs-12">faith@gmail.com</p>
																</div>
															</div>
														</td>
														<td>January-2021</td>
														<td>Web Designer</td>
														<td class="font-weight-semibold">$32,000</td>
														<td>01-02-2021</td>
														<td><span class="badge badge-success">Paid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#4987</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Austin Bell</h6>
																	<p class="text-muted mb-0 fs-12">austin@gmail.com</p>
																</div>
															</div>
														</td>
														<td>December-2020</td>
														<td>Angular Developer</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-01-2021</td>
														<td><span class="badge badge-success">Paid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#6729</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Maria Bower</h6>
																	<p class="text-muted mb-0 fs-12">maria@gmail.com</p>
																</div>
															</div>
														</td>
														<td>November-2020</td>
														<td>Marketing analyst</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-12-2020</td>
														<td><span class="badge badge-danger">UnPaid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#2098</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Peter Hill</h6>
																	<p class="text-muted mb-0 fs-12">peter@gmail.com</p>
																</div>
															</div>
														</td>
														<td>October-2020</td>
														<td>Testor</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-11-2020</td>
														<td><span class="badge badge-success">Paid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#1025</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Victoria Lyman</h6>
																	<p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
																</div>
															</div>
														</td>
														<td>September-2020</td>
														<td>General Manager</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-10-2020</td>
														<td><span class="badge badge-success">Paid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#3262</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Adam Quinn</h6>
																	<p class="text-muted mb-0 fs-12">adam@gmail.com</p>
																</div>
															</div>
														</td>
														<td>August-2020</td>
														<td>Accountant</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>01-09-2020</td>
														<td><span class="badge badge-success">Paid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#1025</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Melanie Coleman</h6>
																	<p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
																</div>
															</div>
														</td>
														<td>July-2020</td>
														<td>App Designer</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>02-08-2020</td>
														<td><span class="badge badge-success">Paid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>#3698</td>
														<td>
															<div class="d-flex">
																<span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
																<div class="me-3 mt-0 mt-sm-1 d-block">
																	<h6 class="mb-1 fs-14">Max Wilson</h6>
																	<p class="text-muted mb-0 fs-12">max@gmail.com</p>
																</div>
															</div>
														</td>
														<td>June-2020</td>
														<td>PHP Developer</td>
														<td class="font-weight-semibold">$28,000</td>
														<td>02-08-2020</td>
														<td><span class="badge badge-danger">UnPaid</span></td>
														<td class="text-start">
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="modal" data-bs-target="#viewsalarymodal">
																<i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View"></i>
															</a>
															<a href="{{url('hr-editpayroll')}}" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
																<i class="feather feather-edit text-info"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Download">
																<i class="feather feather-download  text-secondary"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Print" onclick="javascript:window.print();">
																<i class="feather feather-printer text-success"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Share">
																<i class="feather feather-share-2 text-warning"></i>
															</a>
															<a  href="javascript:void(0);" class="action-btns" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
																<i class="feather feather-x text-danger"></i>
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

            <!-- EXCEL MODAL -->
            <div class="modal fade"  id="excelmodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Select Month & Year</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Month:</label>
								<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Month">
									<option label="Select Month"></option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>
							<div class="form-group">
								<label class="form-label">Year:</label>
								<select name="attendance"  class="form-control custom-select select2" data-placeholder="Select Year">
									<option label="Select Year"></option>
									<option value="1">2024</option>
									<option value="2">2023</option>
									<option value="3">2022</option>
									<option value="4">2021</option>
									<option value="5">2020</option>
									<option value="6">2019</option>
									<option value="7">2018</option>
									<option value="8">2017</option>
									<option value="9">2016</option>
									<option value="10">2015</option>
									<option value="11">2014</option>
									<option value="12">2013</option>
									<option value="13">2012</option>
									<option value="14">2011</option>
									<option value="15">2019</option>
									<option value="16">2010</option>
								</select>
							</div>
						</div>
						<div class="modal-footer">
							<a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
							<a  href="javascript:void(0);" class="btn btn-primary">Download</a>
						</div>
					</div>
				</div>
			</div>
			<!-- END EXCEL MODAL -->

			<!--ADD EXPENSE MODAL -->
			<div class="modal fade"  id="viewsalarymodal">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">PaySlip</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-header">
							<div>
								<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img" alt="Dayonelogo">
							</div>
							<div class="ms-auto">
								<div class="font-weight-bold text-md-right mt-3">Date: 01-02-2021</div>
							</div>
						</div>
						<div class="modal-body pt-1">
							<div class="table-responsive mt-3 mb-3">
								<table class="table mb-0 modal-paytable">
									<tbody>
										<tr>
											<td>
												<strong>Emp ID:</strong>
												<span>2987</span>
											</td>
											<td class="text-end">
												<strong>Emp Name:</strong>
												<span>Faith Harris</span>
											</td>
										</tr>
										<tr>
											<td>
												<strong>Location:</strong>
												<span>USA</span>
											</td>
											<td class="text-end">
												<strong>Pay Period:</strong>
												<span>January-2021</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="table-responsive mt-4">
								<table class="table text-nowrap mb-0 border">
									<tbody>
										<tr>
											<td class="p-0">
												<table class="table text-nowrap mb-0">
													<thead>
														<tr>
															<th class="fs-18" rowspan="1" colspan="2">Earnings</th>
														</tr>
														<tr>
															<th>Pay Type</th>
															<th class="border-start">Amount</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Basic</td>
															<td class="border-start">$32,000</td>
														</tr>
														<tr>
															<td>HRA</td>
															<td class="border-start">0.00</td>
														</tr>
														<tr>
															<td>Medical Allowance</td>
															<td class="border-start">0.00</td>
														</tr>
														<tr>
															<td>Bonus Allowance</td>
															<td class="border-start">0.00</td>
														</tr>
														<tr class="border-top">
															<td class="font-weight-semibold">Total Earnings</td>
															<td class="font-weight-semibold border-start">$32,000</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td class="p-0">
												<table class="table text-nowrap mb-0 border-start">
													<thead>
														<tr>
															<th class="fs-18" rowspan="1" colspan="2">Deduction</th>
														</tr>
														<tr>
															<th>Pay Type</th>
															<th class="border-start">Amount</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>PF</td>
															<td class="border-start">0.00</td>
														</tr>
														<tr>
															<td>Professional Tax</td>
															<td class="border-start">0.00</td>
														</tr>
														<tr>
															<td>TDS</td>
															<td class="border-start">0.00</td>
														</tr>
														<tr>
															<td>Loans & Others</td>
															<td class="border-start">0.00</td>
														</tr>
														<tr class="border-top">
															<td class="font-weight-semibold">Total Deduction</td>
															<td class="font-weight-semibold border-start">0.00</td>
														</tr>
													</tbody>
												</table>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="mt-4 mb-3">
								<table class="table mb-0">
									<tbody>
										<tr>
											<td class="font-weight-semibold w-20 fs-18 pb-0 pt-0">Net Salary</td>
											<td class="pb-0 pt-0">
												<h4 class="font-weight-semibold mb-0 fs-24">$32,000</h4>
											</td>
										</tr>
										<tr>
											<td class="font-weight-semibold w-20 pb-0 pt-1 text-muted">InWords</td>
											<td class="pb-0 pt-1">
												<h5 class="mb-0  text-muted">Thirty-Two Thousand only</h5>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="p-5 border-top text-center">
							<div class="text-center">
								<h6 class="mb-2">Spruko Technologies Pvt Ltd.</h6>
								<p class="mb-1 fs-12">Near Tulasi Hospital ECIL, ushaiguda, Hyderabad, Telangana 500062</p>
								<div>
									<small>Tel No: 99488 67536,</small>
									<small>Email: info@spruko.com</small>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<div class="ms-auto">
								<a  href="javascript:void(0);" class="btn btn-info" onclick="javascript:window.print();"><i class="si si-printer"></i> Print</a>
								<a  href="javascript:void(0);" class="btn btn-success"><i class="feather feather-download"></i> Download</a>
								<a  href="javascript:void(0);" class="btn btn-primary"><i class="si si-paper-plane"></i> Send</a>
								<a  href="javascript:void(0);" class="btn btn-danger" data-bs-dismiss="modal"><i class="feather feather-x"></i> Close</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADDEXPENSE MODAL -->

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
        <script src="{{asset('assets/js/hr/hr-payroll.js')}}"></script>

@endsection
