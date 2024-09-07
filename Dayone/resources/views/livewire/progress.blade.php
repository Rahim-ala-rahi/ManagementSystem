@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Progress</div>
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
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Basic Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-default" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 60%"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-primary" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Contextual Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Basic Progress with label</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 7%">7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 20%"> 20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 40%"> 40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-primary" style="width: 60%"> 60%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar bg-primary" style="width: 80%"> 80%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Contextual Progress with label</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 7%"> 7%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-green" style="width: 20%">20%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-yellow" style="width: 40%">40%</div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 60%">60%</div>
										</div>
										<div class="progress progress-md ">
											<div class="progress-bar bg-orange" style="width: 80%"> 80%</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Progress Sizes</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-blue" style="width: 30%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-blue" style="width: 60%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-blue" style="width: 70%">70%</div>
										</div>
										<div class="progress progress-lg">
											<div class="progress-bar bg-blue" style="width: 80%">80%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Mixed color Progress with Sizes</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-xs mb-3">
											<div class="progress-bar bg-orange" style="width: 5%"></div>
											<div class="progress-bar bg-warning" style="width: 5%"></div>
											<div class="progress-bar bg-info" style="width: 5%"></div>
										</div>
										<div class="progress progress-sm mb-3">
											<div class="progress-bar bg-pink" style="width: 10%"></div>
											<div class="progress-bar bg-yellow" style="width: 15%"></div>
											<div class="progress-bar bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar bg-pink" style="width: 18%"></div>
											<div class="progress-bar bg-blue" style="width: 20%"></div>
											<div class="progress-bar bg-cyan" style="width: 30%"></div>
										</div>
										<div class="progress progress-lg">
											<div class="progress-bar bg-green" style="width: 30%"></div>
											<div class="progress-bar bg-pink" style="width: 20%"></div>
											<div class="progress-bar bg-orange" style="width: 40%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Striped Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal" style="width: 15%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 25%"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow" style="width: 50%">50%</div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-green" style="width: 70%">40%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Animated Progress</h3>
									</div>
									<div class="card-body">
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-cyan"></div>
										</div>
										<div class="progress progress-md mb-3">
											<div class="progress-bar progress-bar-indeterminate bg-teal"></div>
										</div>
										<div class="progress progress-md">
											<div class="progress-bar progress-bar-indeterminate bg-purple"></div>
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
