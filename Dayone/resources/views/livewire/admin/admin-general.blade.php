@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">General Settings</div>
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
						<!--END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-3">
								<div class="card">
									<div class="nav flex-column admisetting-tabs" id="settings-tab" role="tablist" aria-orientation="vertical">
										<a class="nav-link active" data-bs-toggle="pill" href="#tab-1" role="tab">
											<i class="nav-icon las la-cog"></i> General Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-2" role="tab">
											<i class="nav-icon las la-recycle"></i> Captch Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-3" role="tab">
											<i class="nav-icon las la-palette"></i> Theme Settings
										</a>
										<a class="nav-link" data-bs-toggle="pill" href="#tab-4" role="tab">
											<i class="nav-icon las la-file-upload"></i> File Upload Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-5" role="tab">
											<i class="nav-icon las la-ticket-alt"></i> Ticket Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-6" role="tab">
											<i class="nav-icon las la-bell"></i> Notification Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-7" role="tab">
											<i class="nav-icon las la-envelope"></i> Email Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-8" role="tab">
											<i class="nav-icon las la-comment"></i> Chat Settings
										</a>
										<a class="nav-link"  data-bs-toggle="pill" href="#tab-9" role="tab">
											<i class="nav-icon las la-file-code"></i> Custom (CSS/Javascript)
										</a>
									</div>
								</div>
							</div>
							<div class="col-xl-9">
								<div class="tab-content adminsetting-content" id="setting-tabContent">
									<div class="tab-pane fade show active" id="tab-1" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Basic Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">App Title</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">App Email</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">Admin Panel Language</label>
														</div>
														<div class="col-xl-9">
															<select data-placeholder="Choose a Language..." class="form-control select2-show-search custom-select languages">
																<option label="Choose Language"></option>
																<option value="AF">Afrikanns</option>
																<option value="SQ">Albanian</option>
																<option value="AR">Arabic</option>
																<option value="HY">Armenian</option>
																<option value="EU">Basque</option>
																<option value="BN">Bengali</option>
																<option value="BG">Bulgarian</option>
																<option value="CA">Catalan</option>
																<option value="KM">Cambodian</option>
																<option value="ZH">Chinese (Mandarin)</option>
																<option value="HR">Croation</option>
																<option value="CS">Czech</option>
																<option value="DA">Danish</option>
																<option value="NL">Dutch</option>
																<option value="EN">English</option>
																<option value="ET">Estonian</option>
																<option value="FJ">Fiji</option>
																<option value="FI">Finnish</option>
																<option value="FR">French</option>
																<option value="KA">Georgian</option>
																<option value="DE">German</option>
																<option value="EL">Greek</option>
																<option value="GU">Gujarati</option>
																<option value="HE">Hebrew</option>
																<option value="HI">Hindi</option>
																<option value="HU">Hungarian</option>
																<option value="IS">Icelandic</option>
																<option value="ID">Indonesian</option>
																<option value="GA">Irish</option>
																<option value="IT">Italian</option>
																<option value="JA">Japanese</option>
																<option value="JW">Javanese</option>
																<option value="KO">Korean</option>
																<option value="LA">Latin</option>
																<option value="LV">Latvian</option>
																<option value="LT">Lithuanian</option>
																<option value="MK">Macedonian</option>
																<option value="MS">Malay</option>
																<option value="ML">Malayalam</option>
																<option value="MT">Maltese</option>
																<option value="MI">Maori</option>
																<option value="MR">Marathi</option>
																<option value="MN">Mongolian</option>
																<option value="NE">Nepali</option>
																<option value="NO">Norwegian</option>
																<option value="FA">Persian</option>
																<option value="PL">Polish</option>
																<option value="PT">Portuguese</option>
																<option value="PA">Punjabi</option>
																<option value="QU">Quechua</option>
																<option value="RO">Romanian</option>
																<option value="RU">Russian</option>
																<option value="SM">Samoan</option>
																<option value="SR">Serbian</option>
																<option value="SK">Slovak</option>
																<option value="SL">Slovenian</option>
																<option value="ES">Spanish</option>
																<option value="SW">Swahili</option>
																<option value="SV">Swedish </option>
																<option value="TA">Tamil</option>
																<option value="TT">Tatar</option>
																<option value="TE">Telugu</option>
																<option value="TH">Thai</option>
																<option value="BO">Tibetan</option>
																<option value="TO">Tonga</option>
																<option value="TR">Turkish</option>
																<option value="UK">Ukranian</option>
																<option value="UR">Urdu</option>
																<option value="UZ">Uzbek</option>
																<option value="VI">Vietnamese</option>
																<option value="CY">Welsh</option>
																<option value="XH">Xhosa</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">Site Panel Language</label>
														</div>
														<div class="col-xl-9">
															<select data-placeholder="Choose a Language..." class="form-control select2-show-search custom-select languages">
																<option label="Choose Language"></option>
																<option value="AF">Afrikanns</option>
																<option value="SQ">Albanian</option>
																<option value="AR">Arabic</option>
																<option value="HY">Armenian</option>
																<option value="EU">Basque</option>
																<option value="BN">Bengali</option>
																<option value="BG">Bulgarian</option>
																<option value="CA">Catalan</option>
																<option value="KM">Cambodian</option>
																<option value="ZH">Chinese (Mandarin)</option>
																<option value="HR">Croation</option>
																<option value="CS">Czech</option>
																<option value="DA">Danish</option>
																<option value="NL">Dutch</option>
																<option value="EN">English</option>
																<option value="ET">Estonian</option>
																<option value="FJ">Fiji</option>
																<option value="FI">Finnish</option>
																<option value="FR">French</option>
																<option value="KA">Georgian</option>
																<option value="DE">German</option>
																<option value="EL">Greek</option>
																<option value="GU">Gujarati</option>
																<option value="HE">Hebrew</option>
																<option value="HI">Hindi</option>
																<option value="HU">Hungarian</option>
																<option value="IS">Icelandic</option>
																<option value="ID">Indonesian</option>
																<option value="GA">Irish</option>
																<option value="IT">Italian</option>
																<option value="JA">Japanese</option>
																<option value="JW">Javanese</option>
																<option value="KO">Korean</option>
																<option value="LA">Latin</option>
																<option value="LV">Latvian</option>
																<option value="LT">Lithuanian</option>
																<option value="MK">Macedonian</option>
																<option value="MS">Malay</option>
																<option value="ML">Malayalam</option>
																<option value="MT">Maltese</option>
																<option value="MI">Maori</option>
																<option value="MR">Marathi</option>
																<option value="MN">Mongolian</option>
																<option value="NE">Nepali</option>
																<option value="NO">Norwegian</option>
																<option value="FA">Persian</option>
																<option value="PL">Polish</option>
																<option value="PT">Portuguese</option>
																<option value="PA">Punjabi</option>
																<option value="QU">Quechua</option>
																<option value="RO">Romanian</option>
																<option value="RU">Russian</option>
																<option value="SM">Samoan</option>
																<option value="SR">Serbian</option>
																<option value="SK">Slovak</option>
																<option value="SL">Slovenian</option>
																<option value="ES">Spanish</option>
																<option value="SW">Swahili</option>
																<option value="SV">Swedish </option>
																<option value="TA">Tamil</option>
																<option value="TT">Tatar</option>
																<option value="TE">Telugu</option>
																<option value="TH">Thai</option>
																<option value="BO">Tibetan</option>
																<option value="TO">Tonga</option>
																<option value="TR">Turkish</option>
																<option value="UK">Ukranian</option>
																<option value="UR">Urdu</option>
																<option value="UZ">Uzbek</option>
																<option value="VI">Vietnamese</option>
																<option value="CY">Welsh</option>
																<option value="XH">Xhosa</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">Select Date-Format</label>
														</div>
														<div class="col-xl-9">
															<select data-placeholder="Choose Date-Format" class="form-control select2 custom-select">
																<option label="Choose Date-Format"></option>
																<option value="1">MM/DD/YY (02/25/2021)</option>
																<option value="2">DD/MM/YY (25/02/2021)</option>
																<option value="3">YY/MM/DD (2021/02/25)</option>
																<option value="4">Month D, Yr (February 25, 2021)</option>
																<option value="5">MM-DD-YY (02-25-2021)</option>
																<option value="6">DD-MM-YY (25-02-2021)</option>
																<option value="7">YY-MM-DD (2021-02-25)</option>
																<option value="8">MM.DD.YY (02.25.2021)</option>
																<option value="9">DD.MM.YY (25.02.2021)</option>
																<option value="10">YY.MM.DD (2021.02.25)</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">Select Time-Format</label>
														</div>
														<div class="col-xl-9">
															<select data-placeholder="Choose Time-Format" class="form-control select2 custom-select">
																<option label="Choose Time-Format"></option>
																<option value="1">24H (HH:MM:SS) 22:45:10</option>
																<option value="2">24H (HH:MM) 22:34</option>
																<option value="3">24H (HH:MM:SS XM) 22:56:30 PM</option>
																<option value="4">24H (HH:MM XM) 11:43 AM</option>
																<option value="5">12H (HH:MM:SS) 12:55:38</option>
																<option value="6">12H (HH:MM) 12:55</option>
																<option value="7">12H (HH:MM:SS XM) 12:55:45 PM</option>
																<option value="8">12H (HH:MM XM) 04:57 PM</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Default Login</label>
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
															<label class="form-label">Default Registration</label>
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
															<label class="form-label">Google Font</label>
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
															<label class="form-label">RTL Direction</label>
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
									<div class="tab-pane fade" id="tab-2" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Captcha Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Captch Type</label>
														</div>
														<div class="col-xl-9">
															<div class="custom-controls-stacked d-sm-flex">
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option1">
																	<span class="custom-control-label">Default</span>
																</label>
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option2">
																	<span class="custom-control-label">Google Re-Captch</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Captch String</label>
														</div>
														<div class="col-xl-9">
															<div class="custom-controls-stacked d-sm-flex">
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option3">
																	<span class="custom-control-label">Alpha Numeric</span>
																</label>
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option4">
																	<span class="custom-control-label">Numeric</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Captch Length</label>
														</div>
														<div class="col-xl-9">
															<select data-placeholder="Select Length" class="form-control select2 custom-select">
																<option label="Select Length"></option>
																<option value="1">2</option>
																<option value="2">3</option>
																<option value="3">4</option>
																<option value="4">5</option>
																<option value="5">6</option>
																<option value="6">7</option>
																<option value="7">8</option>
																<option value="8">9</option>
																<option value="9">10</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Client Login</label>
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
															<label class="form-label">Guest Ticket</label>
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
															<label class="form-label">Client Registration</label>
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
															<label class="form-label">Admin Login</label>
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
															<label class="form-label">Admin Registration</label>
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
									<div class="tab-pane fade" id="tab-3" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Layout & Color Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Application Layout</label>
														</div>
														<div class="col-xl-9">
															<div class="custom-controls-stacked d-sm-flex">
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option5">
																	<span class="custom-control-label">Full Width</span>
																</label>
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option6">
																	<span class="custom-control-label">Boxed</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Theme Color</label>
														</div>
														<div class="col-xl-9">
															<input id="showAlpha" class="form-control" type="text">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Text Color</label>
														</div>
														<div class="col-xl-9">
															<input id="colorpicker" class="form-control" type="text">
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
									<div class="tab-pane fade" id="tab-4" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">File Upload Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">Max Upload Size</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="5 GB">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label mb-0 mt-2">Allowed File Type</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="jpg/png/zip/doc/">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Client Photo Upload</label>
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
															<label class="form-label">Ticket File Upload</label>
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
									<div class="tab-pane fade" id="tab-5" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Ticket Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Guest Ticket</label>
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
															<label class="form-label">Show all Priority Guest Ticket</label>
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
															<label class="form-label">Any User Can Reply?</label>
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
															<label class="form-label">Auto Close</label>
														</div>
														<div class="col-xl-3 pe-0">
															<label class="custom-switch">
																<input type="checkbox" name="custom-switch-checkbox" id="autoclose" class="custom-switch-input">
																<span class="custom-switch-indicator"></span>
																<span class="custom-switch-description">Enable/Disable</span>
															</label>
														</div>
														<div class="col-xl-6 ps-xl-0">
															<span class="d-block fs-12 text-muted">Ut enim ad minim veniam, quis nostrud exercitation</span>
														</div>
													</div>
												</div>
												<div class="enable-autoclose">
													<div class="form-group">
														<div class="row">
															<div class="col-xl-3">
																<label class="form-label">Closing Rule</label>
															</div>
															<div class="col-xl-9">
																<div class="input-group">
																	<input type="text" class="form-control" placeholder="text" name="text">
																	<input type="text" class="form-control" placeholder="text" name="text">
																	<span class="input-group-addon">hours</span>
																</div>
															</div>
														</div>
													</div>
													<div class="form-group mb-0">
														<div class="row">
															<div class="col-xl-3">
																<label class="form-label">Closing Message</label>
															</div>
															<div class="col-xl-9">
																<textarea rows="3" class="form-control" placeholder="something text here..."></textarea>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Max Open Ticket</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="text" name="text">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Re-Open Ticket</label>
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
															<label class="form-label">Re-Open Time</label>
														</div>
														<div class="col-xl-9">
															<div class="input-group w-250">
																<input type="text" class="form-control" placeholder="text" name="text">
																<span class="input-group-addon">hours</span>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Ticket Feedback</label>
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
															<label class="form-label">Positive Message</label>
														</div>
														<div class="col-xl-9">
															<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Nagative Message</label>
														</div>
														<div class="col-xl-9">
															<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
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
									<div class="tab-pane fade" id="tab-6" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Email Notification Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Ticket Open</label>
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
															<label class="form-label">Ticket Assign</label>
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
															<label class="form-label">Ticket User Reply</label>
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
															<label class="form-label">Ticket Admin Reply</label>
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
											<div class="card-header  border-0">
												<h4 class="card-title">Window Screen Notification Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Ticket Open</label>
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
															<label class="form-label">Ticket Assign</label>
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
															<label class="form-label">Ticket User Reply</label>
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
															<label class="form-label">Ticket Admin Reply</label>
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
									<div class="tab-pane fade" id="tab-7" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Email Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Name</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Email</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Reply to Email</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Email to Ticket Reply</label>
														</div>
														<div class="col-xl-9">
															<div class="custom-controls-stacked d-sm-flex">
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option7">
																	<span class="custom-control-label">Send Mail</span>
																</label>
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option8">
																	<span class="custom-control-label">SMTP</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Sendmail Path</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
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
									<div class="tab-pane fade" id="tab-8" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Chat Settings</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Chat </label>
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
															<label class="form-label">Chat Type</label>
														</div>
														<div class="col-xl-9">
															<div class="custom-controls-stacked d-sm-flex">
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option9">
																	<span class="custom-control-label">Default Chat</span>
																</label>
																<label class="custom-control custom-radio me-4">
																	<input type="radio" class="custom-control-input" name="example-radios3" value="option10">
																	<span class="custom-control-label">Live Chat</span>
																</label>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Title</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">TagLine</label>
														</div>
														<div class="col-xl-9">
															<input type="text" class="form-control" placeholder="Name" value="">
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Offline Text</label>
														</div>
														<div class="col-xl-9">
															<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-xl-3">
															<label class="form-label">Agent Welcome Text</label>
														</div>
														<div class="col-xl-9">
															<textarea rows="2" class="form-control" placeholder="something text here..."></textarea>
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
									<div class="tab-pane fade" id="tab-9" role="tabpanel">
										<div class="card">
											<div class="card-header  border-0">
												<h4 class="card-title">Custom (CSS/Javascript)</h4>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label">CSS Styles</label>
													<textarea rows="7" class="form-control" placeholder="something text here to css styles..."></textarea>
												</div>
												<div class="form-group">
													<label class="form-label">JavaScript Styles</label>
													<textarea rows="7" class="form-control" placeholder="something text here to script sections..."></textarea>
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

        <!-- INTERNAL jQUERY-COUNTDOWNTIMER JS -->
		<script src="{{asset('assets/plugins/jQuery-countdowntimer/jQuery.countdownTimer.js')}}"></script>

		<!-- INTERNAL INDEX JS -->
		<script src="{{asset('assets/js/admin/admin-general.js')}}"></script>

@endsection
