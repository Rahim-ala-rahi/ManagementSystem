@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Panels</div>
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
										<h3 class="card-title">Simple Panels</h3>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default mt-4">
											<div class="expanel-body">
												Basic panel example
											</div>
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
										<h3 class="card-title">Panel with heading</h3>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">Panel heading without title</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-default">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
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
										<h3 class="card-title">Panel with footer</h3>
									</div>
									<div class="card-body">
										<div class="expanel expanel-default mt-4">
											<div class="expanel-body">
												Panel content
											</div>
											<div class="expanel-footer">Panel footer</div>
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
										<h3 class="card-title">Panel with color header</h3>
									</div>
									<div class="card-body">
										<div class="row mt-4">
											<div class="col-lg-6">
												<div class="expanel expanel-primary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-secondary">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-6">
												<div class="expanel expanel-success">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="expanel expanel-danger">
													<div class="expanel-heading">
														<h3 class="expanel-title">Panel title</h3>
													</div>
													<div class="expanel-body">
														Panel content
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
