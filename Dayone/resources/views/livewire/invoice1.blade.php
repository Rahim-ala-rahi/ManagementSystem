@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Invoice</div>
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
								<div class="card overflow-hidden">
									<div class="card-body">
										<h2 class="text-muted font-weight-bold">INVOICE</h2>
										<div class="">
											<h5 class="mb-1">Hi <strong>Jessica Allen</strong>,</h5>
											This is the receipt for a payment of <strong>$450.00</strong> (USD) for your works
										</div>

										<div class="card-body ps-0 pe-0">
											<div class="row">
												<div class="col-sm-6">
													<span>Payment No.</span><br>
													<strong>INV23456-234</strong>
												</div>
												<div class="col-sm-6 text-end">
													<span>Payment Date</span><br>
													<strong>Apr 10, 2021 - 12:20 pm</strong>
												</div>
											</div>
										</div>
										<div class="dropdown-divider"></div>
										<div class="row pt-4">
											<div class="col-lg-6 ">
												<p class="h5 font-weight-bold">Bill From</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ltd@example.com
												</address>
											</div>
											<div class="col-lg-6 text-end">
												<p class="h5 font-weight-bold">Bill To</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ctr@example.com
												</address>
											</div>
										</div>
										<div class="table-responsive push">
											<table class="table table-bordered table-hover text-nowrap">
												<tr class=" ">
													<th class="text-center " style="width: 1%"></th>
													<th>Product</th>
													<th class="text-center" style="width: 1%">Qnty</th>
													<th class="text-end" style="width: 1%">Unit Price</th>
													<th class="text-end" style="width: 1%">Amount</th>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td>
														<p class="font-weight-semibold mb-1">Logo Creation</p>
														<div class="text-muted">Logo and business cards design</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-end">$60.00</td>
													<td class="text-end">$120.00</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>
														<p class="font-weight-semibold mb-1">Online Store Design &amp; Development</p>
														<div class="text-muted">Design/Development for all popular modern browsers</div>
													</td>
													<td class="text-center">3</td>
													<td class="text-end">$80.00</td>
													<td class="text-end">$240.00</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>
														<p class="font-weight-semibold mb-1">App Design</p>
														<div class="text-muted">Promotional mobile application</div>
													</td>
													<td class="text-center">1</td>
													<td class="text-end">$40.00</td>
													<td class="text-end">$40.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-end">Subtotal</td>
													<td class="text-end">$400.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-end">Vat Rate</td>
													<td class="text-end">20%</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-semibold text-end">Vat Due</td>
													<td class="text-end">$50.00</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-bold text-uppercase text-end h4 mb-0">Total Due</td>
													<td class="font-weight-bold text-end h4 mb-0">$450.00</td>
												</tr>
												<tr>
													<td colspan="5" class="text-end">
														<button  class="btn btn-primary" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay Invoice</button>
														<button  class="btn btn-secondary" onClick="javascript:window.print();"><i class="si si-paper-plane"></i> Send Invoice</button>
														<button  class="btn btn-info" onClick="javascript:window.print();"><i class="si si-printer"></i> Print Invoice</button>
													</td>
												</tr>
											</table>
										</div>
										<p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
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
