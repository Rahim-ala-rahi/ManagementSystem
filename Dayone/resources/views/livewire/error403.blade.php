@extends('layouts.custom-app')

@section('styles')


@endsection

@section('content')

				@section('switcher-icon')

				<div class="page responsive-log error-bg">
				@endsection
				
					<div class="page-content m-0">
						<div class="container">
							<div class="row">
								<div class="col-md-5">
									<img src="{{asset('assets/images/png/error.png')}}" alt="img" class="mt-7">
								</div>
								<div class="col-md-7 mt-6">
									<div class="display-1 text-primary  mb-2 font-weight-semibold"> 403</div>
									<h1 class="h3  mb-3 font-weight-semibold">Sorry, Forbidden Error, Requested Page not found!</h1>
									<p class="h5 font-weight-normal mb-7 leading-normal">You may have mistyped the address or the page may have moved.</p>
									<a class="btn btn-primary" href="{{url('index')}}"><i class="fe fe-arrow-left-circle me-1"></i>Back to Home</a>
								</div>
							</div>
						</div>
					</div>
				</div>

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
