@extends('layouts.app')

@section('styles')


@endsection

@section('content')

					<!-- PAGE OPEN-->
				@section('switcher-icon')

				<div class="page responsive-log message-bg">
				@endsection
				
					<div class="container">
						<div class="row">
							<div class="col-md-6 justify-content-center mx-auto text-center  py-3">
								<div class="card mb-0">
									<div class="card-body p-8 text-center">
										<img src="{{asset('assets/images/svgs/check.svg')}}" alt="img" class="w-15">
										<h3 class="mt-5">Message Success</h3>
										<p class="mt-3 mb-5"> Well Done!! You access this  page which is available.. </p>
										<a class="btn ripple btn-primary" href="{{url('index')}}">Back To Home</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- PAGE CLOSED -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
