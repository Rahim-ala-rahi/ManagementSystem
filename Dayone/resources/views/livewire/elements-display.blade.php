@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Display</div>
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
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Basic Display</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-inline</code></td>
														<td>Set an inline display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-inline-block</code></td>
														<td>Set an inline-block display property of an element.</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Set a block display property of an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Hiding Elements</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mb-0 mg-t-5">
												<thead>
													<tr>
														<th class="wd-40p">Class</th>
														<th class="wd-60p">Screen Size</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.d-none</code></td>
														<td>Hidden on all</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block</code></td>
														<td>Hidden only on xs</td>
													</tr>
													<tr>
														<td><code>.d-sm-none .d-md-block</code></td>
														<td>Hidden only on sm</td>
													</tr>
													<tr>
														<td><code>.d-md-none .d-lg-block</code></td>
														<td>Hidden only on md</td>
													</tr>
													<tr>
														<td><code>.d-lg-none .d-xl-block</code></td>
														<td>Hidden only on lg</td>
													</tr>
													<tr>
														<td><code>.d-xl-none</code></td>
														<td>Hidden only on xl</td>
													</tr>
													<tr>
														<td><code>.d-block</code></td>
														<td>Visible on all</td>
													</tr>
													<tr>
														<td><code>.d-block .d-sm-none</code></td>
														<td>Visible only on xs</td>
													</tr>
													<tr>
														<td><code>.d-none .d-sm-block .d-md-none</code></td>
														<td>Visible only on sm</td>
													</tr>
													<tr>
														<td><code>.d-none .d-md-block .d-lg-none</code></td>
														<td>Visible only on md</td>
													</tr>
													<tr>
														<td><code>.d-none .d-lg-block .d-xl-none</code></td>
														<td>Visible only on lg</td>
													</tr>
													<tr>
														<td><code>.d-none .d-xl-block</code></td>
														<td>Visible only on xl</td>
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


@endsection

@section('scripts')


@endsection
