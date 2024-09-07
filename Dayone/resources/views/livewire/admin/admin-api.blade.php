@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">API Settings</div>
							</div>
							<div class="page-rightheader ms-xl-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-3">
								<div class="card">
									<div class="nav flex-column admisetting-tabs" id="settings-tab" role="tablist" aria-orientation="vertical">
										<a class="nav-link active" data-bs-toggle="pill" href="#tab-1" role="tab">
											<i class="nav-icon las la-share-alt"></i> Social Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-2" role="tab">
											<i class="nav-icon lar la-credit-card"></i> Payment Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-3" role="tab">
											<i class="nav-icon las la-compass"></i> Other Settings
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-9">
								<div class="tab-content adminsetting-content" id="setting-tabContent">
									<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Social Settings</h4>
											</div>
											<div class="card-body">
												<div class="row">
													<div class="col-xl-6">
														<div class="card border">
															<div class="card-header border-0">
																<h4 class="card-title">Google Login</h4>
																<div class="card-options">
																	<label class="custom-switch">
																		<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
															<div class="card-body">
																<div class="form-group">
																	<label class="form-label">Callback URL <span class="clipboard-icon" data-clipboard-target="#social1"><i class="las la-clipboard"></i></span></label>
																	<div class="bg-white border br-7" id="social1">
																		<div class="p-3">
																			<span>https://www.domain.com</span>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label class="form-label">Client ID</label>
																	<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
																</div>
																<div class="form-group">
																	<label class="form-label">Secret</label>
																	<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-6">
														<div class="card border">
															<div class="card-header border-0">
																<h4 class="card-title">Facebook Login</h4>
																<div class="card-options">
																	<label class="custom-switch">
																		<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																		<span class="custom-switch-indicator"></span>
																	</label>
																</div>
															</div>
															<div class="card-body">
																<div class="form-group">
																	<label class="form-label">Callback URL <span class="clipboard-icon" data-clipboard-target="#social2"><i class="las la-clipboard"></i></span></label>
																	<div class="bg-white border br-7" id="social2">
																		<div class="p-3">
																			<span>https://www.domain.com</span>
																		</div>
																	</div>
																</div>
																<div class="form-group">
																	<label class="form-label">Client ID</label>
																	<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
																</div>
																<div class="form-group">
																	<label class="form-label">Secret</label>
																	<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer">
												<a  href="javascript:void(0);" class="btn btn-success">Save Changes</a>
												<a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab-2" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Paypal Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Paypal</label>
														</div>
														<div class="col-xl-3 pe-0">
															<label class="custom-switch">
																<input type="checkbox" name="custom-switch-checkbox" id="paypal" class="custom-switch-input">
																<span class="custom-switch-indicator"></span>
																<span class="custom-switch-description">Enable/Disable</span>
															</label>
														</div>
														<div class="col-xl-6 ps-xl-0">
															<span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
														</div>
													</div>
												</div>
												<div class="enable-paypal">
													<div class="form-group">
														<div class="row">
															<div class="col-xl-3">
																<label class="form-label">Test Mode</label>
															</div>
															<div class="col-xl-3 pe-0">
																<label class="custom-switch">
																	<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																	<span class="custom-switch-indicator"></span>
																	<span class="custom-switch-description">Enable/Disable</span>
																</label>
															</div>
															<div class="col-xl-6 ps-xl-0">
																<span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="row">
															<div class="col-xl-3">
																<label class="form-label mb-0 mt-2">Client ID</label>
															</div>
															<div class="col-xl-9">
																<input type="text" class="form-control" placeholder="Client ID" value="">
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="row">
															<div class="col-xl-3">
																<label class="form-label mb-0 mt-2">Secret</label>
															</div>
															<div class="col-xl-9">
																<input type="text" class="form-control" placeholder="Secret" value="">
															</div>
														</div>
													</div>
													<div class="form-group">
														<div class="row">
															<div class="col-xl-3">
																<label class="form-label mb-0 mt-2">Currency</label>
															</div>
															<div class="col-xl-9">
																<select data-placeholder="Choose Currency" class="form-control select2 custom-select">
																	<option label="Choose Currency"></option>
																	<option value="1">US DOllar(USD)</option>
																	<option value="2">European Euro (EUR)</option>
																	<option value="3">Japanese Yen (JPY)</option>
																	<option value="4">British Pound (GBP)</option>
																	<option value="5">Swiss Franc (CHF)</option>
																	<option value="6">Canadian Dollar (CAD)</option>
																	<option value="7">Australian/New Zealand Dollar (AUD/NZD)</option>
																	<option value="8">South African Rand (ZAR)</option>
																</select>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer">
												<a  href="javascript:void(0);" class="btn btn-success">Save Changes</a>
												<a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
											</div>
										</div>
									</div>
									<div class="tab-pane fade" id="tab-3" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Other Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">API Type</label>
														</div>
														<div class="col-xl-9">
															<div class="custom-controls-stacked d-sm-flex">
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" id="per-token" name="example-radios3" value="option1">
																	<span class="custom-control-label">Personal</span>
																</label>
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" id="old-token" name="example-radios3" value="option2">
																	<span class="custom-control-label">Old Token</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="enable-oldtoken">
													<div class="form-group">
														<div class="row">
															<div class="col-xl-3">
																<label class="form-label mb-0 mt-2">User Name</label>
															</div>
															<div class="col-xl-9">
																<input type="text" class="form-control" placeholder="Name" value="">
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">API Token</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Token" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Support Expiry</label>
														</div>
														<div class="col-xl-3 pe-0">
															<label class="custom-switch">
																<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
																<span class="custom-switch-indicator"></span>
																<span class="custom-switch-description">Enable/Disable</span>
															</label>
														</div>
														<div class="col-xl-6 ps-xl-0">
															<span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
														</div>
													</div>
												</div>
											</div>
											<div class="card-footer">
												<a  href="javascript:void(0);" class="btn btn-success">Save Changes</a>
												<a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
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

        <!-- INTERNAL CLIPBOARD JS -->
        <script src="{{asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
		<script src="{{asset('assets/plugins/clipboard/clipboard.js')}}"></script>

		<!-- INTERNAL PEITYCHART JS -->
		<script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

		<!-- INTERNAL  DATEPICKER JS -->
		<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

		<!-- INTERNAL CHART JS -->
		<script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- INTERNAL TIMEPICKER JS -->
		<script src="{{asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
		<script src="{{asset('assets/plugins/time-picker/toggles.min.js')}}"></script>

		<!-- INTERNAL COLORPICKER JS -->
		<script src="{{asset('assets/plugins/spectrum-colorpicker/spectrum-colorpicker.js')}}"></script>

		<!-- INTERNAL INDEX JS -->
		<script src="{{asset('assets/js/admin/admin-general.js')}}"></script>

@endsection
