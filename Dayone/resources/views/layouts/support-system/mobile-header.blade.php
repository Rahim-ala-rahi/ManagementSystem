
				<!-- MOBILE HEADER -->
				<div class="support-mobile-header clearfix">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow horizontal-navtoggle"><span></span></a>
							<span class="smallogo">
								<a class="header-brand" href="{{url('index')}}">
									<img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Dayonelogo">
									<img src="{{asset('assets/images/brand/logo-white.png')}}" class="header-brand-img light-logo" alt="Dayonelogo">
									<img src="{{asset('assets/images/brand/favicon.png')}}" class="header-brand-img mobile-logo" alt="Dayonelogo">
									<img src="{{asset('assets/images/brand/favicon1.png')}}" class="header-brand-img darkmobile-logo" alt="Dayonelogo">
								</a>
							</span>
							<div class="dropdown profile-dropdown ms-auto">
								<a  href="javascript:void(0);" class="nav-link pe-1 ps-0 leading-none" data-bs-toggle="dropdown">
									<span>
										<img src="{{asset('assets/images/users/16.jpg')}}" alt="img" class="avatar avatar-md bradius">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
									<div class="p-3 text-center border-bottom">
										<a href="{{url('profile1')}}" class="text-center user pb-0 font-weight-bold">John Thomson</a>
										<p class="text-center user-semi-title">App Developer</p>
									</div>
									<a class="dropdown-item d-flex" href="{{url('profile1')}}">
										<i class="feather feather-user me-3 fs-16 my-auto"></i>
										<div class="mt-1">Profile</div>
									</a>
									<a class="dropdown-item d-flex" href="{{url('support-adminticketlist')}}">
										<i class="ri-ticket-2-line me-3 fs-16 my-auto"></i>
										<div class="mt-1">Tickets</div>
									</a>
									<a class="dropdown-item d-flex" href="{{url('chat')}}">
										<i class="feather feather-mail me-3 fs-16 my-auto"></i>
										<div class="mt-1">Messages</div>
									</a>
									<a class="dropdown-item d-flex" href="{{url('support-admineditprofile')}}">
										<i class="feather feather-settings me-3 fs-16 my-auto"></i>
										<div class="mt-1">Settings</div>
									</a>
									<a class="dropdown-item d-flex"  href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#changepasswordnmodal">
										<i class="feather feather-edit-2 me-3 fs-16 my-auto"></i>
										<div class="mt-1">Change Password</div>
									</a>
									<a class="dropdown-item d-flex" href="{{url('login1')}}">
										<i class="feather feather-power me-3 fs-16 my-auto"></i>
										<div class="mt-1">Log Out</div>
									</a>
								</div>
							</div>
							<div class="switch-icon">
								<span class="menu-btn-switch ms-2">
									<a class="btn btn-primary demo-icon"  href="javascript:void(0);"><i class="feather feather-settings  fe-spin  fs-18"></i></a>
								</span>
							</div>
						</div>
					</div>
				</div>
				<!-- END MOBILE HEADER -->
