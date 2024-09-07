@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Pagination</div>
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
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Basic pagination</h3>
									</div>
									<div class="card-body">
										<div class="pagination-wrapper">
											<nav aria-label="Page navigation">
												<ul class="pagination mb-0">
													<li class="page-item active">
														<a class="page-link"  href="javascript:void(0);">1</a>
													</li>
													<li class="page-item">
														<a class="page-link"  href="javascript:void(0);">2</a>
													</li>
													<li class="page-item">
														<a class="page-link"  href="javascript:void(0);">3</a>
													</li>
													<li class="page-item">
														<a class="page-link"  href="javascript:void(0);">4</a>
													</li>
													<li class="page-item">
														<a class="page-link"  href="javascript:void(0);">5</a>
													</li>
													<li class="page-item">
														<a aria-label="Next" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
													</li>
												</ul>
											</nav>
										</div>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Basic pagination</h3>
									</div>
									<div class="card-body">
										<ul class="pagination ">
											<li class="page-item page-prev disabled">
												<a class="page-link"  href="javascript:void(0);" tabindex="-1">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link"  href="javascript:void(0);">1</a></li>
											<li class="page-item"><a class="page-link"  href="javascript:void(0);">2</a></li>
											<li class="page-item"><a class="page-link"  href="javascript:void(0);">3</a></li>
											<li class="page-item"><a class="page-link"  href="javascript:void(0);">4</a></li>
											<li class="page-item page-next">
												<a class="page-link"  href="javascript:void(0);">Next</a>
											</li>
										</ul>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Model Pagination</h3>
									</div>
									<div class="card-body ">
										<ul class="pagination mg-b-0 page-0 ">
											<li class="page-item">
												<a aria-label="Last" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a>
											</li>
											<li class="page-item">
												<a aria-label="Next" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
											</li>

											<li class="page-item">
												<a class="page-link"  href="javascript:void(0);">2</a>
											</li>
											<li class="page-item active">
												<a class="page-link"  href="javascript:void(0);">3</a>
											</li>
											<li class="page-item">
												<a class="page-link hidden-xs-down"  href="javascript:void(0);">4</a>
											</li>

											<li class="page-item">
												<a aria-label="Next" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
											</li>
											<li class="page-item">
												<a aria-label="Last" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a>
											</li>
										</ul>
									</div>
									<!-- pagination-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Model Pagination2</h3>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation">
											<ul class="pagination pagination-success mb-0">
												<li class="page-item page-0">
													<a aria-label="Next" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-left"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a>
												</li>
												<li class="page-item active">
													<a class="page-link"  href="javascript:void(0);">4</a>
												</li>
												<li class="page-item disabled"><span class="page-link">...</span></li>
												<li class="page-item">
													<a class="page-link"  href="javascript:void(0);">10</a>
												</li>
												<li class="page-item page-0">
													<a aria-label="Next" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-right"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link"  href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</nav>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Model Pagination2</h3>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation example">
											<ul class="pagination">
												<li class="page-item">
													<a class="page-link"  href="javascript:void(0);" aria-label="Previous">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">1</a></li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">3</a></li>
												<li class="page-item">
													<a class="page-link"  href="javascript:void(0);" aria-label="Next">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Pagination left alignment</h3>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation example">
											<ul class="pagination ">
												<li class="page-item disabled">
													<a class="page-link"  href="javascript:void(0);" tabindex="-1">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">1</a></li>
												<li class="page-item active"><a class="page-link"  href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">3</a></li>
												<li class="page-item">
													<a class="page-link"  href="javascript:void(0);">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Pagination center alignment</h3>
									</div>
									<div class="card-body">
										<nav aria-label="Page navigation example">
											<ul class="pagination justify-content-center">
												<li class="page-item disabled">
													<a class="page-link"  href="javascript:void(0);" tabindex="-1">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">1</a></li>
												<li class="page-item active"><a class="page-link"  href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">3</a></li>
												<li class="page-item">
													<a class="page-link"  href="javascript:void(0);">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Pagination Right Alignment</h3>
									</div>
									<div class="card-body ">
										<nav aria-label="Page navigation example">
											<ul class="pagination justify-content-end">
												<li class="page-item disabled">
													<a class="page-link"  href="javascript:void(0);" tabindex="-1">
														<i class="fa fa-angle-left"></i>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">1</a></li>
												<li class="page-item active"><a class="page-link"  href="javascript:void(0);">2</a></li>
												<li class="page-item"><a class="page-link"  href="javascript:void(0);">3</a></li>
												<li class="page-item">
													<a class="page-link"  href="javascript:void(0);">
														<i class="fa fa-angle-right"></i>
														<span class="sr-only">Next</span>
													</a>
												</li>
											</ul>
										</nav>
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
