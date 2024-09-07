@extends('layouts.custom-app')

@section('styles')


@endsection

@section('content')

				@section('switcher-icon')

				<div class="page responsive-log construction-bg">
				@endsection
				
					<div class="page-content m-0">
						<div class="container">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-8 col-sm-12 center-block align-items-center construction">
										<div class="construction-body text-center">
											<div class="card-body ">
												<h2 class="display-5 mb-2 font-weight-bold text-white text-uppercase"><strong>Under Construction</strong></h2>
												<h4 class="text-white-50 font-weight-normal">Our website is in Under construction</h4>
												<br>
												<div id="launch_date"></div>
											</div>
											<div class="row">
												<div class="col-8 d-block mx-auto">
													<div class="construction-search">
														<input type="search" class="form-control" placeholder="Search…" aria-label="Search" tabindex="1">
														<button class="btn">
															<i class="feather feather-search"></i>
														</button>
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

@endsection

@section('modals')


@endsection

@section('scripts')

        <!-- INTERNAL JQUERY-COUNTDOWN JS-->
        <script src="{{asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>

@endsection
