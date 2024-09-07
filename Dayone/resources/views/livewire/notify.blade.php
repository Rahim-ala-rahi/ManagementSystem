@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Notifications</div>
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
							<div class="col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Alerts Styles Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button onclick="not1()" class="btn btn-primary">Default</button>
											<button onclick="not2()" class="btn btn-secondary">Center</button>
											<button onclick="not3()" class="btn btn-warning">Left</button>
											<button onclick="not4()" class="btn btn-info">Center Info</button>
											<button onclick="not5()" class="btn btn-danger">Center Error</button>
											<button onclick="not6()" class="btn btn-success">Center Warning</button>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Side Alerts Notifications</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<a  href="javascript:void(0);" class="btn btn-primary notice">Primary</a>
											<a  href="javascript:void(0);" class="btn btn-secondary warning">Warning</a>
											<a  href="javascript:void(0);" class="btn btn-info error">Danger</a>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Alerts Popovers</h3>
									</div>
									<div class="card-body">
										<div class="btn-list">
											<button  class="btn btn-success me-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popsuccess" data-bs-placement="bottom" title="alert sucess" data-bs-content="Well done! You successfully read this important alert message..">
												Show success
											</button>
											<button  class="btn btn-info me-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popinfo" data-bs-placement="top" title="alert info" data-bs-content="Heads up! This alert needs your attention, but it's not super important...">
												Show info
											</button>
											<button  class="btn btn-warning me-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popwarning" data-bs-placement="bottom" title="alert warning" data-bs-content="Warning! Best check yo self, you're not looking too good..">
												Show warning
											</button>
											<button  class="btn btn-secondary me-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popsecondary" data-bs-placement="top" title="alert secondary" data-bs-content="Error! Please Check u r emial id..">
												Show secondary
											</button>
											<button  class="btn btn-danger me-2" data-bs-container="body" data-bs-toggle="popover" data-bs-popover-color="popdanger" data-bs-placement="bottom" title="alert danger" data-bs-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
											</button>
											<button  class="btn btn-primary me-2" data-bs-container="body"  data-bs-toggle="popover" data-bs-popover-color="pop-primary" data-bs-placement="top" title="alert primary" data-bs-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
												Show primary
											</button>
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

        <!-- INTERNAL NOTIFICATIONS JS -->
        <script src="{{asset('assets/plugins/notify/js/rainbow.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
		<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>
		<script src="{{asset('assets/js/popover.js')}}"></script>


@endsection
