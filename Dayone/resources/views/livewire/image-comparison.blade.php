@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Image-Comparision</div>
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
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Image Comparison</div>
									</div>
									<div class="card-body">
										<div class="twentytwenty-container">
											<img src="{{asset('assets/images/photos/about.jpg')}}" alt="img" />
											<img src="{{asset('assets/images/photos/about2.jpg')}}" alt="img" />
										</div>
									</div>
								</div>
							</div>
							<!-- div -->
						</div>
                        <!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')

        <!-- INTERNAL IMAGES-COMPARSION JS -->
        <script src="{{asset('assets/plugins/images-comparsion/jquery.twentytwenty.js')}}"></script>
		<script src="{{asset('assets/plugins/images-comparsion/jquery.event.move.js')}}"></script>
		<script src="{{asset('assets/js/image-comparision.js')}}"></script>

@endsection
