@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Cookies</div>
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
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Cookies Position
										</div>
									</div>
									<div class="card-body">
										<div class="btn-list  position-buttons">
											<a  href="javascript:void(0);" class="btn btn-primary position-button mg-t-5" data-position="topleft">Top Left Cookie</a>
											<a  href="javascript:void(0);" class="btn btn-primary position-button mg-t-5" data-position="top">Top Cookie</a>
											<a  href="javascript:void(0);" class="btn btn-primary position-button mg-t-5" data-position="topright">Top Right Cookie</a>
											<a  href="javascript:void(0);" class="btn btn-primary position-button mg-t-5" data-position="bottomleft">Bottom Left Cookie</a>
											<a  href="javascript:void(0);" class="btn btn-primary position-button mg-t-5" data-position="bottom">Bottom Cookie</a>
											<a  href="javascript:void(0);" class="btn btn-primary position-button mg-t-5" data-position="bottomright">Bottom Right Cookie</a>
											<a  href="javascript:void(0);" class="btn btn-primary option-button mg-t-5" data-option="default">Default Cookie</a>
										</div>
									</div>
								</div>
								<!-- /div -->
								<!-- div -->
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Cookies Background
										</div>
									</div>
									<div class="card-body">
										<div id="theme-buttons" class="btn-list theme-buttons">
											<a  href="javascript:void(0);" class="btn btn-light theme-button mg-t-5" data-theme1="theme-light">Light</a>
											<a  href="javascript:void(0);" class="btn btn-dark theme-button mg-t-5" data-theme1="theme-dark">Dark</a>
											<a  href="javascript:void(0);" class="btn btn-primary theme-button mg-t-5" data-theme1="theme-primary">primary</a>
											<a  href="javascript:void(0);" class="btn btn-info theme-button mg-t-5" data-theme1="theme-info">Info</a>
											<a  href="javascript:void(0);" class="btn btn-danger theme-button mg-t-5" data-theme1="theme-danger">Danger</a>
											<a  href="javascript:void(0);" class="btn btn-success theme-button mg-t-5" data-theme1="theme-success">Success</a>
											<a  href="javascript:void(0);" class="btn btn-warning theme-button mg-t-5" data-theme1="theme-warning">Warning</a>
										</div>
									</div>
								</div>
								<!-- /div -->
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')

        <!-- INTERNAL COOKIES JS -->
        <script src="{{asset('assets/plugins/cookies/cookiepopup.js')}}"></script>
		<script src="{{asset('assets/js/cookie.js')}}"></script>

@endsection
