@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Add Invoice</div>
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
									<div class="card-header border-bottom-0">
										<div class="card-title">Add Invoice</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Invoice Title</label>
														<input class="form-control" placeholder="Invoice title" value="">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Subject</label>
														<textarea class="form-control" rows="4" placeholder="Subject of Invoice"></textarea>
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Number</label>
														<input class="form-control" placeholder="Payment Number" value="">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Payment Date</label>
														<input class="form-control" placeholder="Payment Date">
													</div>
												</div>
												<div class="form-group row">
													<div class="col-md-12">
														<label class="form-label">Bill To</label>
														<textarea class="form-control" rows="4" placeholder="Bill To">
														</textarea>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table nowrap text-nowrap border mt-5">
												<thead>
													<tr>
														<th>PRODUCT</th>
														<th class="w-40">DESCRIPTION</th>
														<th>QNTY</th>
														<th>UNIT PRICE</th>
														<th>AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><textarea rows="1" class="form-control"></textarea></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
														<td><input class="form-control" placeholder="" type="text" value=""></td>
													</tr>
												</tbody>
												<tfoot class="border-top-0">
													<tr>
														<td><a class="btn btn-light"  href="javascript:void(0);"><i class="fe fe-plus"></i> Add Product</a></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
													</tr>
												</tfoot>
											</table>
										</div>
										<div class="form-group row">
											<div class="col-md-12">
												<label class="form-label">Vat Rate</label>
												<input class="form-control" placeholder="Vat Rate" type="text" value="">
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="row">
											<div class="col">
												<a class="btn btn-success"  href="javascript:void(0);"><i class="fe fe-plus"></i> Add New Invoice</a>
												<a class="btn btn-light"  href="javascript:void(0);">Cancel</a>
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
