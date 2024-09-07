@extends('layouts.custom-app')

@section('styles')


@endsection

@section('content')

				@section('switcher-icon')

				<div class="page responsive-log relative error-bg1">
				@endsection

					<div class="page-content m-0">
						<div class="container">
							<div class="row">
								<div class="col-md-7 mx-auto d-block">
									<div class="card p-7 mb-0">
										<div class="text-center">
											<div class="fs-100  mb-5 text-primary h1">oops!</div>
											<h1 class="h3  mb-3 font-weight-semibold">Error 500: Internal Server Error</h1>
											<p class="h5 font-weight-normal mb-7 leading-normal">You may have mistyped the address or the page may have moved.</p>
											<a class="btn btn-primary" href="{{url('index')}}"><i class="fe fe-arrow-left-circle me-1"></i>Back to Home</a>
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


@endsection
