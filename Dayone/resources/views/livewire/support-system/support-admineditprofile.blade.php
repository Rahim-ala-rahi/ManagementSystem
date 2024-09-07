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
                                        <h1 class="mb-0">Edit Profile</h1>
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
                                                <a  href="javascript:void(0);" class="text-white">Editprofile</a>
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
                                    <div class="tab-menu-heading hremp-tabs p-0 ">
                                        <div class="tabs-menu1">
                                            <!-- Tabs -->
                                            <ul class="nav panel-tabs">
                                                <li class="ms-4"><a href="#tab1" class="active"  data-bs-toggle="tab">Edit Profile</a></li>
                                                <li><a href="#tab2"  data-bs-toggle="tab">Change Password</a></li>
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
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Phone Number</label>
                                                                <input type="number" class="form-control" placeholder="Number">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Address</label>
                                                                <input type="text" class="form-control" placeholder="Address">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-4">
                                                            <div class="form-group">
                                                                <label class="form-label">City</label>
                                                                <input type="text" class="form-control" placeholder="City">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-label">Postal Code</label>
                                                                <input type="number" class="form-control" placeholder="ZIP Code">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
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
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Facebook</label>
                                                                <input type="text" class="form-control" placeholder="https://www.facebook.com/">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Google</label>
                                                                <input type="text" class="form-control" placeholder="https://www.google.com/">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Twitter</label>
                                                                <input type="text" class="form-control" placeholder="https://twitter.com/">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Pinterest</label>
                                                                <input type="text" class="form-control" placeholder="https://in.pinterest.com/">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">About Me</label>
                                                                <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-0">
                                                                <label class="form-label">Upload Image</label>
                                                                <div class="form-group">
                                                                    <label class="form-label"></label>
                                                                    <input class="form-control" type="file">
                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <a  href="javascript:void(0);" class="btn btn-success">Save Changes</a>
                                                    <a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="tab2">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label class="form-label mb-0 mt-2">Old Password</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <div class="input-group mb-4">
                                                                    <div class="input-group" id="Password-toggle">
                                                                        <a href="" class="input-group-text">
                                                                            <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                                        </a>
                                                                        <input class="form-control" type="password" placeholder="Password">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label class="form-label mb-0 mt-2">New Password</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group" id="Password-toggle1">
                                                                <a href="" class="input-group-text">
                                                                    <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                                </a>
                                                                <input class="form-control" type="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <label class="form-label mb-0 mt-2">Confirm Password</label>
                                                            </div>
                                                            <div class="col-md-9">
                                                        <div class="input-group mb-4">
                                                            <div class="input-group" id="Password-toggle2">
                                                                <a href="" class="input-group-text">
                                                                    <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                                </a>
                                                                <input class="form-control" type="password" placeholder="Password">
                                                            </div>
                                                        </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-end">
                                                    <a  href="javascript:void(0);" class="btn btn-success">Save Changes</a>
                                                    <a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
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

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/support/support-sidemenu.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
