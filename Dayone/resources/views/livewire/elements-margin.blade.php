@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Margin</div>
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
										<div class="card-title">Margin Positions</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 bg-light">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">

												</div>
											</div>
											<div class="w-9 h-9 bg-light ms-4">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ms-4
												</div>
											</div>
											<div class="w-9 h-9 bg-light ms-7">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light">
													.ms-7
												</div>
											</div>
										</div>
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mt-4">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add Margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ms-1"</code></td>
														<td>Add Margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="me-1"</code></td>
														<td>Add Margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-1"</code></td>
														<td>Add Margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-1"</code></td>
														<td>Add Margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-1"</code></td>
														<td>Add Margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-1"</code></td>
														<td>Add Margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Margin values</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-1"</code></td>
														<td>Add margin m-1 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-2"</code></td>
														<td>Add margin m-2 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-3"</code></td>
														<td>Add margin m-3 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-4"</code></td>
														<td>Add margin m-4 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-5"</code></td>
														<td>Add margin m-5 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-6"</code></td>
														<td>Add margin m-6 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-7"</code></td>
														<td>Add margin m-7 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="m-8"</code></td>
														<td>Add margin m-8 to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Remove Margin</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="m-0"</code></td>
														<td>Remove margin all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ms-0"</code></td>
														<td>Remove margin left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="me-0"</code></td>
														<td>Remove margin right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mt-0"</code></td>
														<td>Remove margin top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mb-0"</code></td>
														<td>Remove margin bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="mx-0"</code></td>
														<td>Remove margin horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="my-0"</code></td>
														<td>Remove margin vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Media Query margins</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered border-top text-nowrap mg-t-0 mg-b-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
														<code class="pd-0 bg-light mb-1">.mt-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.mb-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.me-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.ms-[size]-[value]</code>
														<td>
															<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the padding value (refer to code above)</p>
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


@endsection

@section('scripts')


@endsection
