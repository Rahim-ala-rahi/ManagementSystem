@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Headers</div>
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

						<!-- ROW-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="">
										<div class="header header-style1 border-bottom-0">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{url('index')}}">
														<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
														<img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
													</a>
													<div class="d-flex order-lg-2 ms-auto">
														<div class="dropdown d-none d-md-flex mt-1" >
															<a  class="nav-link icon requestfullscreen">
																<i class="fe fe-maximize floating"></i>
															</a>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon">
																<i class="fe fe-mail floating"></i>
																<span class=" nav-unread badge badge-warning  badge-pill">2</span>
															</a>
														</div>
														<div class="dropdown">
															<a  href="javascript:void(0);" class="nav-link pe-0 leading-none mt-1">
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
															</a>
														</div>
													</div>
													<a  href="javascript:void(0);" class="header-toggler d-lg-none ms-3 ms-lg-0" data-bs-toggle="collapse" data-bs-target="#headerMenuCollapse1">
													<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW-->

						<!-- ROW-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="">
										<div class="header py-4 bg-primary header-style2 color-header border-bottom-0">
											<div class="container">
												<div class="d-flex">
													<a class="header-brand" href="{{url('index')}}">
														<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
														<img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
													</a>
													<div class="d-flex order-lg-2 ms-auto">
														<div class="dropdown d-none d-md-flex mt-1" >
															<a  class="nav-link icon requestfullscreen">
																<i class="fe fe-maximize floating"></i>
															</a>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
														</div>
														<div class="dropdown d-none d-md-flex mt-1">
															<a class="nav-link icon">
																<i class="fe fe-mail floating"></i>
																<span class=" nav-unread badge badge-warning  badge-pill">2</span>
															</a>
														</div>
														<div class="dropdown">
															<a  href="javascript:void(0);" class="nav-link pe-0 leading-none mt-1">
																<span class="avatar avatar-md brround" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></span>
															</a>
														</div>
													</div>
													<a  href="javascript:void(0);" class="header-toggler d-lg-none ms-3 ms-lg-0 text-white" data-bs-toggle="collapse" data-bs-target="#headerMenuCollapse2">
														<span class="header-toggler-icon"></span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW-->

						<!-- ROW-->
						<div class="row">
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="">
										<!--app header-->
										<div class="header header-style3 border-bottom-0">
											<div class="container-fluid">
												<div class="d-flex">
													<a class="header-brand" href="{{url('index')}}">
														<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
														<img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img dark-logo" alt="Dayonelogo">
													</a>
													<div class="d-flex order-lg-2 ms-auto">
														<a  href="javascript:void(0);" data-bs-toggle="search" class="nav-link nav-link-lg d-md-none navsearch">
															<i class="fe fe-search"></i>
														</a>
														<div class="mt-1">
															<form class="form-inline">
																<div class="search-element d-none d-lg-flex">
																	<input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" tabindex="1">
																	<button class="btn btn-primary-color" >
																		<i class="fe fe-search"></i>
																	</button>
																</div>
															</form>
														</div><!-- SEARCH -->
														<div class="dropdown   header-fullscreen ps-5 mt-1" >
															<a  class="nav-link icon full-screen-link p-0"  id="fullscreen-button">
																<i class="fe fe-maximize"></i>
															</a>
														</div>
														<div class="dropdown ps-4 d-md-block d-none mt-1">
															<a class="nav-link icon">
																<i class="fe fe-bell floating"></i>
																<span class="nav-unread bg-danger"></span>
															</a>
														</div>
														<div class="dropdown mt-1">
															<a  href="javascript:void(0);" class="nav-link pe-0 leading-none">
																<span>
																	<img src="{{asset('assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md brround">
																</span>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/app header-->
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW-->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
