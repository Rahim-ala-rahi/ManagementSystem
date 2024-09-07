@extends('layouts.custom-app')

@section('styles')


@endsection

@section('content')

				@section('switcher-icon')

				<div class="page responsive-log coming-bg">
				@endsection
				
					<div class="page-content p-7 m-0">
						<div class="container text-center">
							<div class="display-2 mb-5 font-weight-semibold">Coming soon</div>
							<h1 class="h3  mb-3">Site Nearly Already Ready</h1>
							<p class="h5 font-weight-normal mb-4 leading-normal">You may have mistyped the address or the page may have moved.</p>
							<div class="row">
								<div class="col-md-6 d-block mx-auto mb-2">
									<div class="row">
										<div class="col text-start">
											<span class="badge badge-primary-light badge-pill">Working</span>
										</div>
										<div class="col col-auto">
											<div class="fs-18 font-weight-semibold">60%</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="progress-wrapper mb-5 col-md-6 d-block mx-auto">
									<div class="progress progress-md">
										<div class="progress-bar-striped progress-bar-animated bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
									</div>
								</div>
							</div>
							<div class="coming-footer">
								<div class="input-group">
									<input type="text" class="form-control input-lg" placeholder="Your Email">
									<span class="input-group-append">
										<button class="btn ripple btn-primary btn-lg">Notify Me</button>
									</span>
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
