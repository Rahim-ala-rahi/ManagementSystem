@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">settings</div>
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

                        <!-- CONTAINER -->
                        <div class="container">
                            <ul class="notification">
                                <li>
                                    <div class="notification-time">
                                        <span class="date">Today</span>
                                        <span class="time">02:31</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">Today</span>
                                        <span class="time ms-2">02:31</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md online">
                                                <img alt="avatar" class="br-7" src="{{asset('assets/images/users/1.jpg')}}">
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Dennis Trexy</p>
                                                    <p class="mb-0 fs-13 text-dark">2 Members Accepted your Request.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">2 Hrs ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">Yesterday</span>
                                        <span class="time">18:47</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">Yesterday</span>
                                        <span class="time ms-2">18:47</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md offline">
                                                <span class="avatar avatar-md bradius bg-pink me-3">ED</span>
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Eileen Dover</p>
                                                    <p class="mb-0 fs-13 text-dark">Created New Template for Designing Department.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">18:47</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">Yesterday</span>
                                        <span class="time">06:43</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">Yesterday</span>
                                        <span class="time ms-2">06:43</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md online">
                                                <img alt="avatar" class="br-7" src="{{asset('assets/images/users/2.jpg')}}">
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Elida Distefa<span class="badge bg-success ms-3 px-2 pb-1 mb-1">New Deal</span></p>
                                                    <p class="mb-0 fs-13 text-dark">Shipment is Out for Delivery.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">06:43</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">23 Oct</span>
                                        <span class="time">03:15</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">23 Oct</span>
                                        <span class="time ms-2">03:15</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md online">
                                                <img alt="avatar" class="br-7" src="{{asset('assets/images/users/12.jpg')}}">
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Harvey Mattos</p>
                                                    <p class="mb-0 fs-13 text-dark">Mentioned you in a post.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">03:15</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">15 Oct</span>
                                        <span class="time">12:14</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">15 Oct</span>
                                        <span class="time ms-2">12:14</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md offline">
                                                <span class="avatar avatar-md bradius me-3 bg-primary">IH</span>
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Catrice Doshier</p>
                                                    <p class="mb-0 fs-13 text-dark">2 Members Accepted your Request.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">12:14</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">30 Sep</span>
                                        <span class="time">14:04</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">30 Sep</span>
                                        <span class="time ms-2">14:04</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md offline">
                                                <img alt="avatar" class="br-7" src="{{asset('assets/images/users/13.jpg')}}">
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Mercy Ritia<span class="badge bg-danger ms-3 px-2 pb-1 mb-1">Last Deal</span></p>
                                                    <p class="mb-0 fs-13 text-dark">Created New Template for Designing Department.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">14:04</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">18 Sep</span>
                                        <span class="time">12:26</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">18 Sep</span>
                                        <span class="time ms-2">12:26</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md online">
                                                <img alt="avatar" class="br-7" src="{{asset('assets/images/users/4.jpg')}}">
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Mark Jhon</p>
                                                    <p class="mb-0 fs-13 text-dark">Shipment is Out for Delivery.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">12:26</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">03 Sep</span>
                                        <span class="time">05:37</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">03 Sep</span>
                                        <span class="time ms-2">05:37</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md offline">
                                                <img alt="avatar" class="br-7" src="{{asset('assets/images/users/14.jpg')}}">
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Benedict Vallone</p>
                                                    <p class="mb-0 fs-13 text-dark">Thanking you for Accepting Request.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">05:37</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="notification-time">
                                        <span class="date">28 Aug</span>
                                        <span class="time">15:24</span>
                                    </div>
                                    <div class="notification-icon">
                                        <a href="javascript:void(0);"></a>
                                    </div>
                                    <div class="notification-time-date mb-2 d-block d-md-none">
                                        <span class="date">28 Aug</span>
                                        <span class="time ms-2">15:24</span>
                                    </div>
                                    <div class="notification-body">
                                        <div class="media mt-0">
                                            <div class="main-avatar avatar-md online">
                                                <span class="avatar avatar-md bradius me-3 bg-secondary">IH</span>
                                            </div>
                                            <div class="media-body ms-3 d-flex">
                                                <div class="">
                                                    <p class="fs-15 text-dark fw-bold mb-0">Paul Johny</p>
                                                    <p class="mb-0 fs-13 text-dark">Invited you to a Group.</p>
                                                </div>
                                                <div class="notify-time">
                                                    <p class="mb-0 text-muted fs-11">15:24</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="text-center mb-4">
                                <button class="btn ripple btn-primary w-md">Load more</button>
                            </div>
                        </div>
                        <!-- END CONTAINER -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
