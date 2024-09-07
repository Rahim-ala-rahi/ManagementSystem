@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Tables</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class=" btn-list">
									<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
									<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
									<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Basic Table</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap mb-0">
											<thead >
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Striped Rows</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-striped card-table table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div><!-- bd -->
									</div><!-- bd -->
								</div><!-- bd -->

								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Bordered Table</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-bordered card-table table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Hoverable Rows Table</h3>
									</div>
									<div class="card-body p-0">
										<div class="table-responsive">
											<table class="table table-hover card-table table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>$162,700</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Full color variations</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-primary mb-0">
											<thead  class="bg-primary text-white">
												<tr >
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Position</th>
													<th class="text-white">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Full color variations2</h3>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-warning mb-0">
											<thead  class="bg-warning text-white">
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
