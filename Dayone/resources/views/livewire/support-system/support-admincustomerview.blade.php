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
                                        <h1 class="mb-0">Customer Profile</h1>
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
                                                <a  href="javascript:void(0);" class="text-white">Customer Profile</a>
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
                                            <div class="card-body text-center">
                                                <div class="profile-pic">
                                                    <div class="profile-pic-img mb-2">
                                                        <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="online"></span>
                                                        <img src="{{asset('assets/images/users/1.jpg')}}" class="brround avatar-xxl" alt="user">
                                                    </div>
                                                    <a  href="javascript:void(0);" class="text-dark">
                                                        <h5 class="mb-1 font-weight-semibold2">Faith Harris
                                                            <span data-bs-toggle="tooltip" data-bs-placement="bottom" title="Verified"><i class="ion-checkmark-circled  text-success fs-14 ms-1"></i></span>
                                                        </h5>
                                                        <small class="text-muted ">faith@gmail.com</small>
                                                    </a>
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
                                    <div class="tab-menu-heading hremp-tabs p-0 ">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li class="ms-4"><a href="#tab1" class="active"  data-bs-toggle="tab">Edit Profile</a></li>
                                                <li><a href="#tab2"  data-bs-toggle="tab">My Tickets</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="panel-body tabs-menu-body hremp-tabs1 p-0">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab1">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" class="form-control" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Last Name</label>
                                                                <input type="text" class="form-control" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Email address</label>
                                                                <input type="email" class="form-control" placeholder="Email">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Country</label>
                                                                <select class="form-control  select2" data-placeholder="Select Country">
                                                                    <option label="Select Country"></option>
                                                                    <option value="1">Germany</option>
                                                                    <option value="3">Canada</option>
                                                                    <option value="4">USA</option>
                                                                    <option value="5">Afghanistan</option>
                                                                    <option value="6">Albania</option>
                                                                    <option value="7">China</option>
                                                                    <option value="8">Denmark</option>
                                                                    <option value="9">Finland</option>
                                                                    <option value="10">India</option>
                                                                    <option value="11">Kiribati</option>
                                                                    <option value="12">Kuwait</option>
                                                                    <option value="13">Mexico</option>
                                                                    <option value="14">Pakistan</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Upload Image</label>
                                                                <div class="form-group">
                                                                <label for="form-label" class="form-label"></label>
                                                                <input class="form-control" type="file">
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Status</label>
                                                                <select class="form-control  select2" data-placeholder="Select Country">
                                                                    <option label="Select Country"></option>
                                                                    <option value="1">Active</option>
                                                                    <option value="2">Inactive</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label mb-0 mt-2">Password</label>
                                                                <input type="password" class="form-control" placeholder="Password" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <a  href="javascript:void(0);" class="btn btn-success">Update Profile</a>
                                                    <a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="support-customerlist">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-bottom-0 w-1">#No</th>
                                                                    <th class="border-bottom-0">Subject</th>
                                                                    <th class="border-bottom-0 w-1">Priority</th>
                                                                    <th class="border-bottom-0">Category</th>
                                                                    <th class="border-bottom-0 w-5">Status</th>
                                                                    <th class="border-bottom-0">Last Replied</th>
                                                                    <th class="border-bottom-0">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>#01</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Sed ut perspiciatis</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">12-01-2021 12:10AM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Support</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Julia Walker</h6>
                                                                        <span class="fs-11 text-muted">5 hours ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#02</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Excepteur occaecat</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:00AM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Services</td>
                                                                    <td><span class="badge badge-primary">New</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Amelia Russell</h6>
                                                                        <span class="fs-11 text-muted">12 hours ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#03</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Sample Test1</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 05:30PM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                                    <td>Customization</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Max Wilson</h6>
                                                                        <span class="fs-11 text-muted">1 week ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#04</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Sample Test2</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">05-02-2021 10:45AM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Support</td>
                                                                    <td><span class="badge badge-orange">Re-Open</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Melanie Coleman</h6>
                                                                        <span class="fs-11 text-muted">3 weeks ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#05</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Ut aut reiciendiLow</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">21-04-2021 11:50AM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-warning-light">Medium</span></td>
                                                                    <td>Services</td>
                                                                    <td><span class="badge badge-danger">Closed</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Adam Quinn</h6>
                                                                        <span class="fs-11 text-muted">4 weeks ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#06</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Unde omnis iste natus</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-03-2021 12:50PM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-success-light">Low</span></td>
                                                                    <td>Support</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Victoria Lyman</h6>
                                                                        <span class="fs-11 text-muted">4 weeks ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#07</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Et harum quidem</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-04-2021 03:50PM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-warning-light">Medium</span></td>
                                                                    <td>Support</td>
                                                                    <td><span class="badge badge-danger">Closed</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Maria Bower</h6>
                                                                        <span class="fs-11 text-muted">6 months ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#08</td>
                                                                    <td>
                                                                        <div><a href="{{url('support-adminticketview')}}" class="h5">Quis autem vel</a></div>
                                                                        <small class="fs-12 text-muted"><i class="fa fa-clock-o me-1 text-muted"></i>Opened: <span class="font-weight-normal1">11-04-2021 03:50PM</span></small>
                                                                    </td>
                                                                    <td><span class="badge badge-danger-light">High</span></td>
                                                                    <td>Services</td>
                                                                    <td><span class="badge badge-success">Open</span></td>
                                                                    <td>
                                                                        <h6 class="mb-0 fs-13">Peter Hill</h6>
                                                                        <span class="fs-11 text-muted">1 year ago</span>
                                                                    </td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-adminticketview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit-2  text-success"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
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

        <!-- INTERNAL DATA TABLES JS -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/support/support-sidemenu.js')}}"></script>
        <script src="{{asset('assets/js/support/support-customerview.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
