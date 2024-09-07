@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Invoice 03</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class=" btn-list">
									<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
									<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
									<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
								</div>
							</div>
						</div>
						<!-- PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-body">
										<div class="row m-0 no-gutters">
											<div class="col-lg-4">
												<div class="border border-end-0 p-0 invoicelist" id="invoicelist">
													<div class="card-body p-0">
														<div class="tab-menu-heading sub-panel-heading p-0 border-0">
															<div class="tabs-menu">
																<!-- Tabs -->
																<ul class="nav panel-tabs">
																	<li class="active">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab41" aria-expanded="true">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #234</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv54324</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab42" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #543</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv24234</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab41" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #124</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv65432</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab42" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #543</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv87543</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab41" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #456</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv65342</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab42" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #534</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv67543</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab41" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #634</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv73456</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab42" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #623</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv45325</p>
																			</div>
																		</a>
																	</li>
																	<li class="">
																		<a class="d-flex" data-bs-toggle="tab" href="#tab41" aria-expanded="false">
																			<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-7 h-7 me-4">
																			<div class="mt-1">
																				<h5 class="mb-1 font-weight-semibold mt-0">Invoice #243</h5>
																				<p class="mb-0 text-muted">Transcation Id : Inv87654</p>
																			</div>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-8 p-md-0">
												<div class="panel-body tabs-menu-body p-6 invoice-print d-block invoicedetailspage" id="invoicedetailspage">
													<div class="tab-content">
														<div class="tab-pane active text-center" id="tab01">
															<div class="row my-7">
																<div class="my-8 col-md-9 d-block mx-auto">
																	<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="w-30 mb-4">
																	<h4 class="font-weight-semibold">Invoice Details</h4>
																	<p class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</p>
																	<div class="">
																		<button  class="btn btn-light mt-1" onClick="javascript:window.print();"><i class="fe fe-eye"></i> View</button>
																		<button  class="btn btn-light mt-1" onClick="javascript:window.print();"><i class="fe fe-download"></i> Download</button>
																		<button  class="btn btn-light mt-1" onClick="javascript:window.print();"><i class="fe fe-share"></i> Send</button>
																		<button  class="btn btn-primary mt-1" onClick="javascript:window.print();"><i class="fe fe-printer"></i> Print</button>
																	</div>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="tab41">
															<div class="card-body p-0">
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
																		<div class="billed-from text-md-right">
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
																				<th class="tx-center">QNTY</th>
																				<th class="tx-right">Unit Price</th>
																				<th class="tx-right">Amount</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td class="font-weight-semibold">Website design &amp; development</td>
																				<td class="tx-center">6</td>
																				<td class="tx-right">$250.00</td>
																				<td class="tx-right">$1500.00</td>
																			</tr>
																			<tr>
																				<td class="font-weight-semibold">Branding</td>
																				<td class="tx-center">1</td>
																				<td class="tx-right">$900.00</td>
																				<td class="tx-right">$900.00</td>
																			</tr>
																			<tr>
																				<td class="font-weight-semibold">Redesign Service</td>
																				<td class="tx-center">1</td>
																				<td class="tx-right">$500.00</td>
																				<td class="tx-right">$500.00</td>
																			</tr>
																			<tr>
																				<td class="font-weight-semibold">Wordpress Plugins</td>
																				<td class="tx-center">5</td>
																				<td class="tx-right">$360.00</td>
																				<td class="tx-right">$1800.00</td>
																			</tr>
																			<tr>
																				<td class="valign-middle" rowspan="4">
																					<div class="invoice-notes">
																						<label class="main-content-label tx-13 font-weight-semibold">Notes</label>
																						<p> voluptatum deleniti atque corrupti explicabo.</p>
																					</div><!-- invoice-notes -->
																				</td>
																				<td class="tx-right font-weight-semibold">Sub-Total</td>
																				<td class="tx-right font-weight-semibold" colspan="2">$4700.00</td>
																			</tr>
																			<tr>
																				<td class="tx-right font-weight-semibold">Tax (5%)</td>
																				<td class="tx-right font-weight-semibold" colspan="2">$235.50</td>
																			</tr>
																			<tr>
																				<td class="tx-right font-weight-semibold">Discount</td>
																				<td class="tx-right font-weight-semibold" colspan="2">-$50.00</td>
																			</tr>
																			<tr>
																				<td class="text-uppercase font-weight-semibold">Total Due</td>
																				<td class="tx-right" colspan="2">
																					<h4 class="text-primary font-weight-semibold">$4,885.50</h4>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="float-end mb-4">
																	<button  class="btn btn-primary mt-4" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay</button>
																	<button  class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i class="si si-cloud-download"></i> Send</button>
																	<button  class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer"></i> Print</button>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="tab42">
															<div class="card-body p-0">
																<div class="invoice-header text-end d-block mb-5">
																	<h1 class="invoice-title font-weight-semibold text-uppercase mb-1">Invoice1</h1>
																</div><!-- invoice-header -->
																<div class="row mt-4">
																	<div class="col-md">
																		<label class="font-weight-semibold">Billed To</label>
																		<div class="billed-to">
																			<h6>Spruko Technologies Pvt Ltd.</h6>
																			<p>201 Something St., Something Town, YT 242, Country 6546<br>
																			Tel No: 324 445-4544<br>
																			Email: info@spruko.com</p>

																		</div>
																	</div>
																	<div class="col-md">
																		<div class="billed-from text-md-right">
																			<label class="font-weight-semibold">Billed From</label>
																			<h6>Goerge</h6>
																			<p>2406  Raoul Wallenberg Place<br>
																			Tel No: 203-875-4147<br>
																			Email: goerge234@gmail.com</p>
																		</div><!-- billed-from -->
																	</div>
																</div>
																<div class="table-responsive mt-4">
																	<table class="table table-bordered border text-nowrap mb-0">
																		<thead>
																			<tr>
																				<th class="wd-20p">Product</th>
																				<th class="tx-center">QNTY</th>
																				<th class="tx-right">Unit Price</th>
																				<th class="tx-right">Amount</th>
																			</tr>
																		</thead>
																		<tbody>
																			<tr>
																				<td class="font-weight-semibold">Website design &amp; development</td>
																				<td class="tx-center">6</td>
																				<td class="tx-right">$250.00</td>
																				<td class="tx-right">$1500.00</td>
																			</tr>
																			<tr>
																				<td class="font-weight-semibold">Branding</td>
																				<td class="tx-center">1</td>
																				<td class="tx-right">$900.00</td>
																				<td class="tx-right">$900.00</td>
																			</tr>
																			<tr>
																				<td class="font-weight-semibold">Redesign Service</td>
																				<td class="tx-center">1</td>
																				<td class="tx-right">$500.00</td>
																				<td class="tx-right">$500.00</td>
																			</tr>
																			<tr>
																				<td class="font-weight-semibold">Wordpress Plugins</td>
																				<td class="tx-center">5</td>
																				<td class="tx-right">$360.00</td>
																				<td class="tx-right">$1800.00</td>
																			</tr>
																			<tr>
																				<td class="valign-middle" rowspan="4">
																					<div class="invoice-notes">
																						<label class="main-content-label tx-13 font-weight-semibold">Notes</label>
																						<p> voluptatum deleniti atque corrupti explicabo.</p>
																					</div><!-- invoice-notes -->
																				</td>
																				<td class="tx-right font-weight-semibold">Sub-Total</td>
																				<td class="tx-right font-weight-semibold" colspan="2">$4700.00</td>
																			</tr>
																			<tr>
																				<td class="tx-right font-weight-semibold">Tax (5%)</td>
																				<td class="tx-right font-weight-semibold" colspan="2">$235.50</td>
																			</tr>
																			<tr>
																				<td class="tx-right font-weight-semibold">Discount</td>
																				<td class="tx-right font-weight-semibold" colspan="2">-$50.00</td>
																			</tr>
																			<tr>
																				<td class="text-uppercase font-weight-semibold">Total Due</td>
																				<td class="tx-right" colspan="2">
																					<h4 class="text-primary font-weight-semibold">$4,885.50</h4>
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div class="float-end mb-4">
																	<button  class="btn btn-primary mt-4" onClick="javascript:window.print();"><i class="si si-wallet"></i> Pay</button>
																	<button  class="btn btn-secondary mt-4" onClick="javascript:window.print();"><i class="si si-cloud-download"></i> Send</button>
																	<button  class="btn btn-info mt-4" onClick="javascript:window.print();"><i class="si si-printer"></i> Print</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
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
