@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Counters</div>
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
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Numbers counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="avatar avatar-xl brround bg-success text-center">
											<i class="feather feather-users"></i>
										</div>
										<h5 class="mt-4">Employess</h5>
										<h2 class="counter fs-40">2569</h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">FloatNumbers counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="avatar avatar-xl brround bg-primary text-center">
											<i class="feather feather-dollar-sign"></i>
										</div>
										<h5 class="mt-4">Profit</h5>
										<h2 class="fs-40">$<span class="counter">2,5632</span></h2>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">DecimalNumbers counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="avatar avatar-xl brround bg-orange text-center">
											<i class="feather feather-alert-circle"></i>
										</div>
										<h5 class="mt-4">Errors</h5>
										<h2 class="counter fs-40">0.8998</h2>
									</div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Day Counter</h3>
									</div>
									<div class="card-body text-center">
										<div class="under-countdown row">
											<div class="col-xl-3 col-md-6 mt-3">
												<div class="countdown">
													<span class="days">35</span>
													<span class="">Days</span>
												</div>
											</div>
											<div class="col-xl-3 col-md-6 mt-3">
												<div class="countdown">
													<span class="hours">17</span>
													<span class="">Hours</span>
												</div>
											</div>
											<div class="col-xl-3 col-md-6 mt-3">
												<div class="countdown">
													<span class="minutes">50</span>
													<span class="">Minutes</span>
												</div>
											</div>
											<div class="col-xl-3 col-md-6 mt-3">
												<div class="countdown">
													<span class="seconds">39</span>
													<span class="">Seconds</span>
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

        <!-- INTERNAL TIME COUNTER -->
        <script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
		<script src="{{asset('assets/plugins/counters/counter.js')}}"></script>

		<!-- INTERNAL COUNTERS -->
		<script src="{{asset('assets/plugins/countdown/countdowntime.js')}}"></script>
		<script src="{{asset('assets/js/countdown.js')}}"></script>


@endsection
