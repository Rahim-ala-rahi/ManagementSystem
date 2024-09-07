@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Invoice 02</div>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="invoice-header text-end d-block mb-5">
											<h1 class="invoice-title font-weight-semibold text-uppercase mb-1">Invoice</h1>
										</div><!-- invoice-header -->
										<div class="row mt-4">
											<div class="col-md">
												<label class="font-weight-semibold">Billed To</label>
												<div class="billed-to">
													<h6>Goerge</h6>
													<p>2406  Raoul Wallenberg Place<br>
													Tel No: 203-875-4147<br>
													Email: goerge234@gmail.com</p>
												</div>
											</div>
											<div class="col-md">
												<div class="billed-from text-md-end">
													<label class="font-weight-semibold">Billed From</label>
													<h6>Spruko Technologies Pvt Ltd.</h6>
													<p>201 Something St., Something Town, YT 242, Country 6546<br>
													Tel No: 324 445-4544<br>
													Email: info@spruko.com</p>
												</div><!-- billed-from -->
											</div>
										</div>
										<div class="table-responsive mt-4">
											<table class="table table-bordered border text-nowrap mb-0">
												<thead>
													<tr>
														<th class="wd-20p">Product</th>
														<th class="text-center">QNTY</th>
														<th class="text-end">Unit Price</th>
														<th class="text-end">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td class="font-weight-semibold">Website design & development</td>
														<td class="text-center">6</td>
														<td class="text-end">$250.00</td>
														<td class="text-end">$1500.00</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Branding</td>
														<td class="text-center">1</td>
														<td class="text-end">$900.00</td>
														<td class="text-end">$900.00</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Redesign Service</td>
														<td class="text-center">1</td>
														<td class="text-end">$500.00</td>
														<td class="text-end">$500.00</td>
													</tr>
													<tr>
														<td class="font-weight-semibold">Wordpress Plugins</td>
														<td class="text-center">5</td>
														<td class="text-end">$360.00</td>
														<td class="text-end">$1800.00</td>
													</tr>
													<tr>
														<td class="valign-middle" colspan="2" rowspan="4">
															<div class="invoice-notes">
																<label class="main-content-label tx-13 font-weight-semibold">Notes</label>
																<p> voluptatum deleniti atque corrupti explicabo.</p>
															</div><!-- invoice-notes -->
														</td>
														<td class="text-end font-weight-semibold">Sub-Total</td>
														<td class="text-end font-weight-semibold">$4700.00</td>
													</tr>
													<tr>
														<td class="text-end font-weight-semibold">Tax (5%)</td>
														<td class="text-end font-weight-semibold">$235.50</td>
													</tr>
													<tr>
														<td class="text-end font-weight-semibold">Discount</td>
														<td class="text-end font-weight-semibold">-$50.00</td>
													</tr>
													<tr>
														<td class="text-uppercase font-weight-semibold text-end">Total Due</td>
														<td>
															<h4 class="text-primary font-weight-semibold text-end">$4,885.50</h4>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="float-end">
											<button  class="btn btn-primary mt-4" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
											<button  class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
											<button  class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
