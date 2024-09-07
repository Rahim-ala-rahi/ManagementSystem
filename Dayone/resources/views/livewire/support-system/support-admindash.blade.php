@extends('layouts.supportapp')

@section('styles')


@endsection

@section('content')

                <!-- SECTION -->
                <section>
                    <div class="bannerimg cover-image" data-bs-image-src="{{asset('assets/images/photos/banner1.jpg')}}">
                        <div class="header-text mb-0">
                            <div class="container">
                                <div class="row text-white">
                                    <div class="col">
                                        <h1 class="mb-0">Dashboard</h1>
                                    </div>
                                    <div class="col col-auto">
                                        <ol class="breadcrumb text-center">
                                            <li class="breadcrumb-item">
                                                <a  href="javascript:void(0);" class="text-white-50">Home</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                <a  href="javascript:void(0);" class="text-white">Pages</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                <a  href="javascript:void(0);" class="text-white">Dashboard</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /SECTION -->

                <!-- SECTION -->
                <section>
                    <div class="cover-image sptb">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-3">
                                    <div id="scroll-stickybar" class="position-lg-relative w-100">
                                        <div class="card">
                                            <div class="card-body text-center item-user">
                                                <div class="profile-pic">
                                                    <div class="profile-pic-img">
                                                        <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="online"></span>
                                                        <img src="{{asset('assets/images/users/16.jpg')}}" class="brround avatar-xxl" alt="user">
                                                    </div>
                                                    <a  href="javascript:void(0);" class="text-dark">
                                                        <h5 class="mt-3 mb-1 font-weight-semibold2">Abigali kelly</h5>
                                                    </a>
                                                    <small class="text-muted ">Admin</small>
                                                </div>
                                            </div>
                                            <div class="support-sidebar">
                                                <ul class="side-menu">
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-admindash')}}"><i class="side-menu__icon las la-home"></i><span class="side-menu__label">Dashboard</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-admineditprofile')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Edit Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-adminticketlist')}}"><i class="side-menu__icon las la-ticket-alt"></i><span class="side-menu__label">Ticket Lists</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-adminticketactive')}}"><i class="side-menu__icon las la-compass"></i><span class="side-menu__label">Active Tickets</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-adminticketclosed')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Closed Tickets</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-adminticketview')}}"><i class="side-menu__icon las la-tags"></i><span class="side-menu__label">View Ticket</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-adminticketnew')}}"><i class="side-menu__icon las la-file-alt"></i><span class="side-menu__label">New Ticket</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-admincustomer')}}"><i class="side-menu__icon las la-users"></i><span class="side-menu__label">Customers</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-admincustomerview')}}"><i class="side-menu__icon las la-users"></i><span class="side-menu__label">Customer View</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-admincategories')}}"><i class="side-menu__icon las la-briefcase"></i><span class="side-menu__label">Categories</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-adminarticles')}}"><i class="side-menu__icon las la-newspaper"></i><span class="side-menu__label">Articles</span></a>
                                                    </li>
                                                    <li class="slide">
                                                        <a class="side-menu__item slide-show"  href="javascript:void(0);"><i class="side-menu__icon lab la-buffer"></i><span class="side-menu__label">Level 1</span><i class="angle fa fa-angle-right"></i></a>
                                                        <ul class="slide-menu">
                                                            <li><a class="slide-item"  href="javascript:void(0);">Level 1.1</a></li>
                                                            <li><a class="slide-item"  href="javascript:void(0);">Level 1.2</a></li>
                                                            <li><a class="slide-item"  href="javascript:void(0);">Level 1.3</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-9">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <div class="card">
                                                <a  href="javascript:void(0);">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="mt-0 text-start">
                                                                    <span class="fs-16 font-weight-semibold">Total Tickets</span>
                                                                    <h3 class="mb-0 mt-1 text-primary fs-25">5,678</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="icon1 bg-primary-transparent my-auto float-end"> <i class="las la-ticket-alt"></i> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <div class="card">
                                                <a  href="javascript:void(0);">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="mt-0 text-start">
                                                                    <span class="fs-16 font-weight-semibold">Active Tickets</span>
                                                                    <h3 class="mb-0 mt-1 text-success fs-25">142</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="icon1 bg-success-transparent my-auto float-end"> <i class="ri-ticket-2-line"></i> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-12">
                                            <div class="card">
                                                <a  href="javascript:void(0);">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-8">
                                                                <div class="mt-0 text-start">
                                                                    <span class="fs-16 font-weight-semibold">Closed Tickets</span>
                                                                    <h3 class="mb-0 mt-1 text-danger fs-25">39</h3>
                                                                </div>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="icon1 bg-danger-transparent my-auto  float-end"> <i class="ri-coupon-2-line"></i> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-header border-0">
                                                    <h4 class="card-title">Current Ticket Statistics</h4>
                                                    <div class="card-options">
                                                        <div class="dropdown"> <a  href="javascript:void(0);" class="btn btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"> Monthly <i class="feather feather-chevron-down"></i> </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <li><a  href="javascript:void(0);">Monthly</a></li>
                                                                <li><a  href="javascript:void(0);">Yearly</a></li>
                                                                <li><a  href="javascript:void(0);">Weekly</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div id="overview" class="mx-auto"></div>
                                                    <div class="row pt-5">
                                                        <div class="col-md-9 mx-auto d-block">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="d-flex font-weight-semibold">
                                                                        <span class="dot-label bg-primary me-2 my-auto"></span>New Tickets
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="d-flex font-weight-semibold">
                                                                        <span class="dot-label bg-secondary me-2 my-auto"></span>Closed Tickets
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12">
                                            <div class="card">
                                                <div class="card-header border-0">
                                                    <h4 class="card-title">Latest Overview</h4>
                                                    <div class="card-options">
                                                        <div class="dropdown"> <a  href="javascript:void(0);" class="btn btn-outline-light" data-bs-toggle="dropdown" aria-expanded="false"> Last Month <i class="feather feather-chevron-down"></i> </a>
                                                            <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                <li><a  href="javascript:void(0);">Last Month</a></li>
                                                                <li><a  href="javascript:void(0);">Last Year</a></li>
                                                                <li><a  href="javascript:void(0);">Last Week</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="mb-6">
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <h6 class="">Total Customers</h6>
                                                            <h6 class="">50</h6>
                                                        </div>
                                                        <div class="progress h-2">
                                                            <div class="progress-bar bg-primary w-50"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-6">
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <h6 class="">Total Articles</h6>
                                                            <h6 class="">40</h6>
                                                        </div>
                                                        <div class="progress h-2">
                                                            <div class="progress-bar bg-warning w-40"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-6">
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <h6 class="">Total Assigned Tickets</h6>
                                                            <h6 class="">60</h6>
                                                        </div>
                                                        <div class="progress h-2">
                                                            <div class="progress-bar bg-success w-60"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-6">
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <h6 class="">Total UnAssigned Tickets</h6>
                                                            <h6 class="">45</h6>
                                                        </div>
                                                        <div class="progress h-2">
                                                            <div class="progress-bar bg-danger w-45"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mb-0">
                                                        <div class="d-flex align-items-end justify-content-between">
                                                            <h6 class="">Total Open Tickets</h6>
                                                            <h6 class="">55</h6>
                                                        </div>
                                                        <div class="progress h-2">
                                                            <div class="progress-bar bg-info w-55"></div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="card mb-0">
                                                <div class="card-header border-0">
                                                    <h4 class="card-title">Tickets Summary</h4>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="supportticket-dash">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-bottom-0">#ID</th>
                                                                    <th class="border-bottom-0">Title</th>
                                                                    <th class="border-bottom-0">Priority</th>
                                                                    <th class="border-bottom-0">Category</th>
                                                                    <th class="border-bottom-0">Date</th>
                                                                    <th class="border-bottom-0">Status</th>
                                                                    <th class="border-bottom-0">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>#289</td>
                                                                    <td><a  href="javascript:void(0);">Sed ut perspiciatis</a></td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Support</td>
                                                                    <td>12-01-2021</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#320</td>
                                                                    <td><a  href="javascript:void(0);">Excepteur occaecat</a></td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Services</td>
                                                                    <td>05-02-2021</td>
                                                                    <td><span class="badge badge-danger">Closed</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#837</td>
                                                                    <td><a  href="javascript:void(0);">Sample Test1</a></td>
                                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                                    <td>Customization</td>
                                                                    <td>13-03-2021</td>
                                                                    <td><span class="badge badge-success">open</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#124</td>
                                                                    <td><a  href="javascript:void(0);">Sample Test2</a></td>
                                                                    <td><span class="badge badge-warning-light">Medium</span></td>
                                                                    <td>Support</td>
                                                                    <td>01-01-2021</td>
                                                                    <td><span class="badge badge-danger">Closed</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#309</td>
                                                                    <td><a  href="javascript:void(0);">Ut aut reiciendi</a></td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Services</td>
                                                                    <td>11-04-2021</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#117</td>
                                                                    <td><a  href="javascript:void(0);">Unde omnis iste natus</a></td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Services</td>
                                                                    <td>11-04-2021</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#276</td>
                                                                    <td><a  href="javascript:void(0);">Et harum quidem</a></td>
                                                                    <td><span class="badge badge-warning-light">Medium</span></td>
                                                                    <td>Support</td>
                                                                    <td>11-04-2021</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#738</td>
                                                                    <td><a  href="javascript:void(0);">Maiores alias aut</a></td>
                                                                    <td><span class="badge badge-success-light">High</span></td>
                                                                    <td>Services</td>
                                                                    <td>17-03-2021</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#498</td>
                                                                    <td><a  href="javascript:void(0);">Quis autem vel</a></td>
                                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                                    <td>Support</td>
                                                                    <td>17-02-2021</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#298</td>
                                                                    <td><a  href="javascript:void(0);">Ut aut reiciendi</a></td>
                                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                                    <td>Services</td>
                                                                    <td>11-03-2021</td>
                                                                    <td><span class="badge badge-danger">closed</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply Ticket"><i class="fa fa-reply text-warning fs-16"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Ticket"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Ticket"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /SECTION -->

@endsection

@section('modals')

@endsection

@section('scripts')

        <!-- INTERNAL HORIZONTALMENU JS -->
        <script src="{{asset('assets/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

        <!-- INTERNAL WOWMASTER JS -->
        <script src="{{asset('assets/plugins/wowmaster/wow.js')}}"></script>

        <!-- INTERNAL JQUERY AUTOCOMPLETE JS -->
        <script src="{{asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery.autocomplete/custom-autocomplete.js')}}"></script>

        <!-- INTERNAL VERTICAL-SCROLL JS -->
        <script src="{{asset('assets/plugins/vertical-scroll/jquery.bootstrap.newsbox.js')}}"></script>

        <!-- INTERNAL OWL-CAROUSEL JS -->
        <script src="{{asset('assets/plugins/owl-carousel/owl-carousel.js')}}"></script>

        <!-- INTERNAL CHART JS -->
        <script src="{{asset('assets/plugins/chart/chart.bundle.js')}}"></script>
        <script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

        <!-- INTERNAL CHARTJS ROUNDED-BARCHART JS  -->
        <script src="{{asset('assets/plugins/chart.min/chart.min.js')}}"></script>
        <script src="{{asset('assets/plugins/chart.min/rounded-barchart.js')}}"></script>

        <!-- INTERNAL DATA TABLES JS -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL APEXCHART JS -->
        <script src="{{asset('assets/plugins/apexchart/apexcharts.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/support/support-sidemenu.js')}}"></script>
        <script src="{{asset('assets/js/support/support-admindash.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
