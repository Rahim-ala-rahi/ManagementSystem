@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Tooltip</div>
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
								<!-- div -->
								<div class="card" id="Tooltip">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Default Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip bs-tooltip-top" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip bs-tooltip-bottom" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-start" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-end" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Tooltip on top" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-success" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Tooltip on Bottom" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-danger" data-bs-placement="left" data-bs-toggle="tooltip" title="Tooltip on left" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-warning" data-bs-placement="right" data-bs-toggle="tooltip" title="Tooltip on right" >Hover me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card" id="Tooltip1">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Color Tooltip
										</div>
									</div>
									<div class="card-body">
										<div class="form-label  mb-2">
											Static Example
										</div>
										<div class="tooltip-static-demo mb-4 border br-3">
											<div class="row ">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-bottom" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-start" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-primary bs-tooltip-end" role="tooltip">
														<div class="tooltip-arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div><!-- tooltip-static-demo -->
										<div class="form-label mb-2">
											Example
										</div>
										<div class="bg-light px-4 pt-4 pb-2 border br-3">
											<div class="row  text-center">
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip-primary" title="Tooltip on top" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-success" data-bs-placement="bottom" data-bs-toggle="tooltip-secondary" title="Tooltip on bottom" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-danger" data-bs-placement="left" data-bs-toggle="tooltip-primary1" title="Tooltip on left" >Hover me</button>
												</div>
												<div class="col-sm-6 col-lg-3 mb-3">
													<button class="btn btn-warning" data-bs-placement="right" data-bs-toggle="tooltip-secondary1" title="Tooltip on right" >Hover me</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- /div -->
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')

        <!-- INTERNAL TOOLTIP JS -->
        <script src="{{asset('assets/js/tooltip.js')}}"></script>

@endsection
