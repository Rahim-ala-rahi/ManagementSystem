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
                                        <h1 class="mb-0">Customers</h1>
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
                                                <a  href="javascript:void(0);" class="text-white">Customers</a>
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
                                        <div class="col-xl-12 col-lg-12 col-md-12">
                                            <div class="card mb-0">
                                                <div class="card-header border-0">
                                                    <h4 class="card-title">Customers Summary</h4>
                                                    <div class="card-options">
                                                        <a  href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addcustomer">Add New Customer</a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter text-nowrap table-bordered border-bottom" id="support-customerlist">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-bottom-0 w-5">#No</th>
                                                                    <th class="border-bottom-0">Name</th>
                                                                    <th class="border-bottom-0">Register Date</th>
                                                                    <th class="border-bottom-0 w-5">Tickets</th>
                                                                    <th class="border-bottom-0 w-5">Status</th>
                                                                    <th class="border-bottom-0">Last Login</th>
                                                                    <th class="border-bottom-0">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>#01</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/1.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Faith Harris</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">faith@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>05-May-2017</td>
                                                                    <td>05</td>
                                                                    <td><span class="badge badge-success">Active</span></td>
                                                                    <td><span class="fs-13 text-muted">5 hours ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#02</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Austin Bell</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">austin@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>12-June-2018</td>
                                                                    <td>08</td>
                                                                    <td><span class="badge badge-danger">InActive</span></td>
                                                                    <td><span class="fs-13 text-muted">1 month ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#03</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Maria Bower</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">maria@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>02-Aug-2019</td>
                                                                    <td>02</td>
                                                                    <td><span class="badge badge-success">Active</span></td>
                                                                    <td><span class="fs-13 text-muted">5 months ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#04</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Peter Hill</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">peter@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>01-Jan-2020</td>
                                                                    <td>01</td>
                                                                    <td><span class="badge badge-warning">Blocked</span></td>
                                                                    <td><span class="fs-13 text-muted">1 month ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#05</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Victoria Lyman</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">victoria@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>05-May-2021</td>
                                                                    <td>10</td>
                                                                    <td><span class="badge badge-success">Active</span></td>
                                                                    <td><span class="fs-13 text-muted">6 months ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#06</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/11.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Adam Quinn</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">adam@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>15-Feb-2020</td>
                                                                    <td>06</td>
                                                                    <td><span class="badge badge-danger">InActive</span></td>
                                                                    <td><span class="fs-13 text-muted">1 year ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#07</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Melanie Coleman</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">melanie@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>15-Sep-2019</td>
                                                                    <td>11</td>
                                                                    <td><span class="badge badge-success">Active</span></td>
                                                                    <td><span class="fs-13 text-muted">2 years ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#08</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Max Wilson</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">max@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>05-Dec-2020</td>
                                                                    <td>09</td>
                                                                    <td><span class="badge badge-warning">Blocked</span></td>
                                                                    <td><span class="fs-13 text-muted">1 year ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#09</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/5.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Amelia Russell</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">amelia@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>01-July-2018</td>
                                                                    <td>22</td>
                                                                    <td><span class="badge badge-success">Active</span></td>
                                                                    <td><span class="fs-13 text-muted">5 years ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#10</td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <span class="avatar avatar-md brround me-3" style="background-image: url({{asset('assets/images/users/13.jpg')}})"></span>
                                                                            <div class="me-3 mt-0 mt-sm-1 d-block">
                                                                                <a href="{{url('support-admincustomerview')}}"><h6 class="mb-1 fs-14">Justin Metcalfe</h6></a>
                                                                                <p class="text-muted mb-0 fs-12">justin@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>28-Apr-2017</td>
                                                                    <td>18</td>
                                                                    <td><span class="badge badge-success">Active</span></td>
                                                                    <td><span class="fs-13 text-muted">5 years ago</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a href="{{url('support-admincustomerview')}}" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="View Customer"><i class="feather feather-eye text-primary"></i></a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete customer"><i class="feather feather-trash-2 text-danger"></i></a>
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

                <!-- ADD CUSTOMER MODAL -->
                <div class="modal fade"  id="addcustomer">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New Customer</h5>
                                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Upload Image</label>
                                    <div class="form-group">
                                        <label class="form-label"></label>
                                        <input class="form-control" type="file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label mb-0 mt-2">Password</label>
                                    <input type="password" class="form-control" placeholder="Password" value="">
                                </div>
                                <div class="form-group">
                                    <label class="form-label mb-0 mt-2">Confirm Password</label>
                                    <input type="password" class="form-control" placeholder="Password" value="">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
                                <a  href="javascript:void(0);" class="btn btn-success">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END  ADD CUSTOMER MODAL -->

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
        <script src="{{asset('assets/js/support/support-customer.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
