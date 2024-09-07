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
                                        <h1 class="mb-0">Active Tickets</h1>
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
                                                <a  href="javascript:void(0);" class="text-white">ActiveTickets</a>
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
                                                    <small class="text-muted ">App Developer</small>
                                                </div>
                                            </div>
                                            <div class="support-sidebar">
                                                <ul class="side-menu">
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-userdash')}}"><i class="side-menu__icon las la-home"></i><span class="side-menu__label">Dashboard</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-editprofile')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Edit Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-ticketlist')}}"><i class="side-menu__icon las la-ticket-alt"></i><span class="side-menu__label">Ticket Lists</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-ticketactive')}}"><i class="side-menu__icon las la-compass"></i><span class="side-menu__label">Active Tickets</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-ticketclosed')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Closed Tickets</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-ticketview')}}"><i class="side-menu__icon las la-tags"></i><span class="side-menu__label">View Ticket</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-ticketcreate')}}"><i class="side-menu__icon las la-briefcase"></i><span class="side-menu__label">Create Ticket</span></a>
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
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Select Priority:</label>
                                                        <select class="form-control custom-select select2" data-placeholder="Select Priority">
                                                            <option label="Select Priority"></option>
                                                            <option value="1">High</option>
                                                            <option value="2">Medium</option>
                                                            <option value="3">Low</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">From:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="feather feather-calendar"></i>
                                                                        </div>
                                                                    </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">To:</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <div class="input-group-text">
                                                                            <i class="feather feather-calendar"></i>
                                                                        </div>
                                                                    </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group mt-5">
                                                        <a  href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body ps-0 pe-0 pt-0">
                                            <div class="table-responsive">
                                                <table class="table table-vcenter text-nowrap table-hover border-bottom supportticket-active">
                                                    <thead>
                                                        <tr class="bg-light">
                                                            <th class="border-bottom-0">#ID</th>
                                                            <th class="border-bottom-0">Subject</th>
                                                            <th class="border-bottom-0">Priority</th>
                                                            <th class="border-bottom-0  w-5">Category</th>
                                                            <th class="border-bottom-0">Status</th>
                                                            <th class="border-bottom-0">Last Replied</th>
                                                            <th class="border-bottom-0 w-5">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>#289</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Sed ut perspiciatis</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">12-01-2021 12:10AM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-success-light">Low</span></td>
                                                            <td>Support</td>
                                                            <td><span class="badge badge-success">Open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>5 hours ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#320</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Excepteur occaecat</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:00AM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-success-light">Low</span></td>
                                                            <td>Services</td>
                                                            <td><span class="badge badge-primary">New</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>12 hours ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#837</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Sample Test1</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 05:30PM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-danger-light">High</span></td>
                                                            <td>Customization</td>
                                                            <td><span class="badge badge-success">open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>1 week ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#124</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Sample Test2</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:45AM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-warning-light">Medium</span></td>
                                                            <td>Support</td>
                                                            <td><span class="badge badge-orange">Re-open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>3 weeks ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#309</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Ut aut reiciendi</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">21-04-2021 11:50AM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-success-light">Low</span></td>
                                                            <td>Services</td>
                                                            <td><span class="badge badge-success">Open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>4 weeks ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#117</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Unde omnis iste natus</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-03-2021 12:50PM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-success-light">Low</span></td>
                                                            <td>Services</td>
                                                            <td><span class="badge badge-success">Open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>1 month ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#276</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Et harum quidem</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-04-2021 03:50PM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-warning-light">Medium</span></td>
                                                            <td>Support</td>
                                                            <td><span class="badge badge-success">Open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>3 months ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#738</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Maiores alias aut</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">17-03-2021 12:05AM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-success-light">Low</span></td>
                                                            <td>Services</td>
                                                            <td><span class="badge badge-success">Open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>4 months ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#498</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Quis autem vel</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">17-02-2021 10:00AM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-danger-light">High</span></td>
                                                            <td>Support</td>
                                                            <td><span class="badge badge-primary">New</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>6 months ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#298</td>
                                                            <td>
                                                                <div><a href="{{url('support-ticketview')}}" class="h5">Ut aut reiciendi</a></div>
                                                                <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-03-2021 02:10PM</span></small>
                                                            </td>
                                                            <td><span class="badge badge-danger-light">High</span></td>
                                                            <td>Services</td>
                                                            <td><span class="badge badge-orange">Re-open</span></td>
                                                            <td><span class="fs-13 text-muted"><i class="feather feather-clock me-2"></i>1 year ago</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather feather-more-vertical text-primary"></i></a>
                                                                    <ul class="dropdown-menu dropdown-menu-end" role="menu">
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-send me-2"></i>Reply Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Delete Ticket</a></li>
                                                                        <li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <nav aria-label="navigation">
                                                <ul class="pagination justify-content-center mb-0">
                                                    <li class="page-item disabled">
                                                        <a class="page-link"  href="javascript:void(0);" tabindex="-1">
                                                            <i class="fa fa-angle-left"></i>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item active"><a class="page-link"  href="javascript:void(0);">1</a></li>
                                                    <li class="page-item"><a class="page-link"  href="javascript:void(0);">2</a></li>
                                                    <li class="page-item"><a class="page-link"  href="javascript:void(0);">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link"  href="javascript:void(0);">
                                                            <i class="fa fa-angle-right"></i>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
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

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('assets/plugins/modal-datepicker/datepicker.js')}}"></script>

        <!-- INTERNAL DATA TABLES JS -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/support/support-sidemenu.js')}}"></script>
        <script src="{{asset('assets/js/support/support-ticketactive.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
