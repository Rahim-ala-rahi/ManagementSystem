@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Padding</div>
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
										<div class="card-title">Padding Positions</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 bg-light p-1">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-1
												</div>
											</div>
											<div class="w-9 h-9 bg-light ps-1 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.ps-1
												</div>
											</div>
											<div class="w-9 h-9 bg-light pe-1 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.pe-1
												</div>
											</div>
											<div class="w-9 h-9 bg-light pt-1 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.pt-1
												</div>
											</div>
											<div class="w-9 h-9 bg-light pb-1 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.pb-1
												</div>
											</div>
											<div class="w-9 h-9 bg-light px-1 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.px-1
												</div>
											</div>
											<div class="w-9 h-9 bg-light py-1 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.py-1
												</div>
											</div>
										</div>
										<div class="table-responsive mt-5">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="p-1"</code></td>
														<td>Add padding all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ps-1"</code></td>
														<td>Add padding left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="pe-1"</code></td>
														<td>Add padding right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="pt-1"</code></td>
														<td>Add padding top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="pb-1"</code></td>
														<td>Add padding bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="px-1"</code></td>
														<td>Add padding horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="py-1"</code></td>
														<td>Add padding vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Padding values</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 bg-light p-1">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-1
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-2 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-2
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-3 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-3
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-4 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-4
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-5 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-5
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-6 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-6
												</div>
											</div>
										</div>
										<div class="table-responsive mt-5">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="p-1"</code></td>
														<td>Add padding p-1 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="p-2"</code></td>
														<td>Add padding p-2 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="p-3"</code></td>
														<td>Add padding p-3 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="p-4"</code></td>
														<td>Add padding p-4 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="p-5"</code></td>
														<td>Add padding p-5 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="p-6"</code></td>
														<td>Add padding p-6 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="p-7"</code></td>
														<td>Add padding p-7 to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="p-8"</code></td>
														<td>Add padding p-8 to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Remove Padding</div>
									</div>
									<div class="card-body">
										<div class="d-flex">
											<div class="w-9 h-9 bg-light p-0">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.p-0
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-1 ps-0 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.ps-0
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-1 pe-0 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.pe-0
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-1 pt-0 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.pt-0
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-1 pb-0 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.pb-0
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-1 px-0 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.px-0
												</div>
											</div>
											<div class="w-9 h-9 bg-light p-1 py-0 ms-3">
												<div class="d-flex align-items-center justify-content-center h-100 bg-light2">
													.py-0
												</div>
											</div>
										</div>
										<div class="table-responsive mt-5">
											<table class="table table-bordered border-top text-nowrap mg-b-0 mg-t-10">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-light">class="p-0"</code></td>
														<td>Remove padding all sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="ps-0"</code></td>
														<td>Remove padding left side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="pe-0"</code></td>
														<td>Remove padding right side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="pt-0"</code></td>
														<td>Remove padding top side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="pb-0"</code></td>
														<td>Remove padding bottom side to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="px-0"</code></td>
														<td>Remove padding horizonatl sides to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-light">class="py-0"</code></td>
														<td>Remove padding vertical sides to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Media Query Padding</div>
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
														<code class="pd-0 bg-light mb-1">.pt-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.pb-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.pe-[size]-[value]</code>
														<code class="pd-0 bg-light mb-1">.ps-[size]-[value]</code>
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
