@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Dropdown</div>
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
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Single button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-default btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-success btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-info btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-danger btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default color">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-default">Action</button>
													<button  class="btn btn-default dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-primary">Action</button>
													<button  class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-success">Action</button>
													<button  class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-info">Action</button>
													<button  class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-warning">Action</button>
													<button  class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-danger">Action</button>
													<button  class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default color">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-default">Action</button>
													<button  class="btn btn-pill btn-default dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-primary">Action</button>
													<button  class="btn btn-pill btn-primary dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-success">Action</button>
													<button  class="btn btn-pill btn-success dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-info">Action</button>
													<button  class="btn btn-pill btn-info dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-warning">Action</button>
													<button  class="btn btn-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-danger">Action</button>
													<button  class="btn btn-pill btn-danger dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Single Square outline button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Rounded button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-primary btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-success btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-info btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														Action <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">

												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-primary">Action</button>
													<button  class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-success">Action</button>
													<button  class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-info">Action</button>
													<button  class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-warning">Action</button>
													<button  class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-outline-danger">Action</button>
													<button  class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Rounded Split button dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-outline-primary">Action</button>
													<button  class="btn btn-pill btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class=" fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-outline-success">Action</button>
													<button  class="btn btn-pill btn-outline-success dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-outline-info">Action</button>
													<button  class="btn btn-pill btn-outline-info dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-outline-warning">Action</button>
													<button  class="btn btn-outline-warning btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-pill btn-outline-danger">Action</button>
													<button  class="btn btn-pill btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown">
														<span class="caret"></span>
														<span class="sr-only">Toggle Dropdown</span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Dropup variation</h3>
									</div>
									<div class="card-body">
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-primary dropdown-toggle"  data-bs-toggle="dropdown">Dropup1
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a  href="javascript:void(0);">HTML</a></li>
												<li><a  href="javascript:void(0);">CSS</a></li>
												<li><a  href="javascript:void(0);">JavaScript</a></li>
												<li class="divider"></li>
												<li><a  href="javascript:void(0);">About Us</a></li>
											</ul>
										</div>
										<!-- Split dropup button -->
										<div class="dropup btn-group mt-2 mb-2">
											<button class="btn btn-info dropdown-toggle"  data-bs-toggle="dropdown">Dropup2
												<span class="caret"></span></button>
											<ul class="dropdown-menu">
												<li><a  href="javascript:void(0);">HTML</a></li>
												<li><a  href="javascript:void(0);">CSS</a></li>
												<li><a  href="javascript:void(0);">JavaScript</a></li>
												<li class="divider"></li>
												<li><a  href="javascript:void(0);">About Us</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Icon Drop Downs dropdowns</h3>
									</div>
									<div class="card-body">
										<div class="panel panel-default">
											<div class="panel-body p-0">
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-facebook btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-facebook"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-twitter btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-twitter"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-google btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-google"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-youtube btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-youtube "></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-vimeo btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-vimeo"></i><span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
												</div>
												<div class="btn-group mt-2 mb-2">
													<button  class="btn btn-github btn-pill dropdown-toggle" data-bs-toggle="dropdown">
														<i class="fa fa-github"></i> <span class="caret"></span>
													</button>
													<ul class="dropdown-menu" role="menu">
														<li class="dropdown-plus-title">
															Dropdown
															<b class="fa fa-angle-up" aria-hidden="true"></b>
														</li>
														<li><a  href="javascript:void(0);">Action</a></li>
														<li><a  href="javascript:void(0);">Another action</a></li>
														<li><a  href="javascript:void(0);">Something else here</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Separated link</a></li>
													</ul>
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
