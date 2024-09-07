@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Colors</div>
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
								<!--div-->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Gray Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 bg-gray-900 h-9"></div>
											<div class="w-9 bg-gray-800 h-9"></div>
											<div class="w-9 bg-gray-700 h-9"></div>
											<div class="w-9 bg-gray-600 h-9"></div>
											<div class="w-9 bg-gray-500 h-9"></div>
											<div class="w-9 bg-gray-400 h-9"></div>
											<div class="w-9 bg-gray-300 h-9"></div>
											<div class="w-9 bg-gray-200 h-9"></div>
											<div class="w-9 bg-gray-100 h-9"></div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-gray-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Solid Background Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 bg-primary h-9"></div>
											<div class="w-9 bg-success h-9"></div>
											<div class="w-9 bg-warning h-9"></div>
											<div class="w-9 bg-danger h-9"></div>
											<div class="w-9 bg-info h-9"></div>
											<div class="w-9 bg-indigo h-9"></div>
											<div class="w-9 bg-purple h-9"></div>
											<div class="w-9 bg-pink h-9"></div>
											<div class="w-9 bg-teal h-9"></div>
											<div class="w-9 bg-orange h-9"></div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>primary | secondary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Transparent White Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-1"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-2"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-3"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-4"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-5"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-6"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-7"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-8"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-white-9"></div>
											</div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-white-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Transparent Black Set
										</div>
									</div>
									<div class="card-body">
										<div class="d-flex flex-wrap ht-80">
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-1"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-2"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-3"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-4"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-5"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-6"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-7"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-8"></div>
											</div>
											<div class="w-9 relative">
												<img alt="" class="w-9 h-9 cover-image" src="{{asset('assets/images/photos/27.jpg')}}">
												<div class="pos-absolute a-0 bg-black-9"></div>
											</div>
										</div>
										<div class="table-responsive mt-5 mb-0">
											<table class="table table-bordered text-nowrap">
												<tbody>
													<tr>
														<td class="wd-20p"><b>Classes</b></td>
														<td><code>class="bg-black-[value]"</code></td>
													</tr>
													<tr>
														<td class="wd-20p"><b>Values</b></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--/div-->
							</div>
						</div>
                        <!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
