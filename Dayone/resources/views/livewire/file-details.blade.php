@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">File-Manager</div>
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
						<div class="row row-sm">
							<div class="col-xl-8 col-lg-12 col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="card-body px-4 pt-4">
										<a  href="javascript:void(0);"><img src="{{asset('assets/images/media/blog-details.jpg')}}" alt="img" class="rounded-5 w-100"></a>
									</div>
								</div>
								
								<div class="">
									<div class=" h-100">
										<div id="owl-demo2" class="owl-carousel owl-carousel-icons2 mb-3 mt-3">
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-2.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-1.jpg')}}"  alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-3.jpg')}}"  alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-4.jpg')}}"  alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-5.jpg')}}"  alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-6.jpg')}}" alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-7.jpg')}}"  alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-8.jpg')}}"  alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card custom-card overflow-hidden mb-0 ">
														<a href="{{url('file-details')}}"><img src="{{asset('assets/images/media/img-9.jpg')}}"  alt="img"></a>
														<div class="card-footer bd-t-0 py-3">
															<div class="d-flex">
																<div>
																	<h6 class="mb-0">221.jpg</h6>
																</div>
																<div class="ms-auto">
																	<h6 class="text-muted mb-0">120 KB</h6>
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
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class=" card-body ">
										<h5 class="mb-3">File details :</h5>
										<div class="">
											<div class="row">
												<div class="col-xl-12">
													<div class="table-responsive">
														<table class="table mb-0 border-top table-bordered text-nowrap">
															<tbody>
																<tr>
																	<th scope="row">File-name</th>
																	<td>image.jpg</td>
																</tr>
																<tr>
																	<th scope="row">File-size</th>
																	<td>12.45mb</td>
																</tr>
																<tr>
																	<th scope="row">uploaded-date</th>
																	<td>01-12-2020</td>
																</tr>
																<tr>
																	<th scope="row">image-width</th>
																	<td>1000</td>
																</tr>
																<tr>
																	<th scope="row">image-height</th>
																	<td>600</td>
																</tr>
																<tr>
																	<th scope="row">File-formate</th>
																	<td>jpg</td>
																</tr>
																<tr>
																	<th scope="row">File-location</th>
																	<td>storage/photos/image.jpg</td>
																</tr>

															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<h5 class="mb-3">Recent Files</h5>
										<div class="row row-sm">
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-1.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-2.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-3.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-5.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-6.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-8.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-7.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
												</div>
											</div>
											<div class="col-xl-3 col-lg-6 col-md-6">
												<div class="card custom-card">
													<img src="{{asset('assets/images/media/img-9.jpg')}}" alt="img" style="width: 100%; height: 100%;" class="rounded-5">
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

        <!-- INTERNAL OWL CAROUSEL JS -->
        <script src="{{asset('assets/plugins/owl-carousel/owl-carousel.js')}}"></script>
		<script src="{{asset('assets/js/owl-carousel.js')}}"></script>

@endsection
