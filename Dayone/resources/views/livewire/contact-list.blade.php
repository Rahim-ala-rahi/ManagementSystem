@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Contact-List</div>
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
						<div class="row flex-lg-nowrap">
							<div class="col-12">
								<div class="row flex-lg-nowrap">
									<div class="col-12 mb-3">
										<div class="">
											<div class="">
												<div class="row">
													<div class="col mb-4">
														<a  href="javascript:void(0);" class="btn btn-primary"><i class="fe fe-plus"></i> Add New Conatct</a>
													</div>
													<div class="col col-auto mb-4">
														<div class="form-group w-100">
															<div class="input-icon">
																<span class="input-icon-addon">
																	<i class="fe fe-search"></i>
																</span>
																<input type="text" class="form-control" placeholder="Search Contact">
															</div>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/7.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Denis Rosenblum</p>
																	<small class="text-muted">Project Manager</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/1.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Catherina Bamber</p>
																	<small class="text-muted">Company Manager</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/2.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Dana Lott</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/3.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Benedict Vallone</p>
																	<small class="text-muted">Hr Recriuter</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/4.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Robbie Ruder</p>
																	<small class="text-muted">Ceo</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/5.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Micaela Aultman</p>
																	<small class="text-muted">Php developer</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/6.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Jacquelynn Sapienza</p>
																	<small class="text-muted">Web developer</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/8.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Elida Distefano</p>
																	<small class="text-muted">Hr Manager</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-4 col-lg-6">
														<div class="card text-center user-contact-list">
															<div class="p-5">
																<div class="avatar avatar-xxl brround d-block cover-image mx-auto" data-bs-image-src="{{asset('assets/images/users/9.jpg')}}"></div>
																<div class="wrapper mt-3">
																	<p class="mb-0 mt-1 text-dark font-weight-semibold">Collin Bridgman</p>
																	<small class="text-muted">web designer</small>
																</div>
																<div class="mt-5">
																	<a class="btn btn-white"  href="javascript:void(0);"><span class="feather feather-message-square fs-15 me-1 my-auto"></span> Message</a>
																	<a class="btn btn-light"  href="javascript:void(0);"><span class="feather feather-user fs-15 me-1 my-auto"></span>Profile</a>
																</div>
															</div>
														</div>
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
