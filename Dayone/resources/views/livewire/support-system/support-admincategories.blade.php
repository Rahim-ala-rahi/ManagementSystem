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
                                        <h1 class="mb-0">Categories</h1>
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
                                                <a  href="javascript:void(0);" class="text-white">Categories</a>
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
                                                    <h4 class="card-title">Categories Summary</h4>
                                                    <div class="card-options">
                                                        <a  href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addcategory">Add New Category</a>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-vcenter text-nowrap table-hover border table-striped" id="support-categorylist">
                                                            <thead>
                                                                <tr>
                                                                    <th class="border-bottom-0 w-5">#No</th>
                                                                    <th class="border-bottom-0">Name</th>
                                                                    <th class="border-bottom-0 w-5 text-center">Tickets</th>
                                                                    <th class="border-bottom-0 w-5 text-center">Agents</th>
                                                                    <th class="border-bottom-0 w-5 text-center">Articles</th>
                                                                    <th class="border-bottom-0 w-5 text-center">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>#01</td>
                                                                    <td><span>Services</span></td>
                                                                    <td class="text-center"><span>02</span></td>
                                                                    <td class="text-center"><span>01</span></td>
                                                                    <td class="text-center"><span>03</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="modal" data-bs-target="#viewcategory">
                                                                                <i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"></i>
                                                                            </a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#02</td>
                                                                    <td><span>Support</span></td>
                                                                    <td class="text-center"><span>18</span></td>
                                                                    <td class="text-center"><span>05</span></td>
                                                                    <td class="text-center"><span>35</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#viewcategory">
                                                                                <i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Eidt"></i>
                                                                            </a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#03</td>
                                                                    <td><span>License</span></td>
                                                                    <td class="text-center"><span>03</span></td>
                                                                    <td class="text-center"><span>01</span></td>
                                                                    <td class="text-center"><span>04</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#viewcategory">
                                                                                <i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Eidt"></i>
                                                                            </a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#04</td>
                                                                    <td><span>Billing</span></td>
                                                                    <td class="text-center"><span>03</span></td>
                                                                    <td class="text-center"><span>01</span></td>
                                                                    <td class="text-center"><span>04</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#viewcategory">
                                                                                <i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Eidt"></i>
                                                                            </a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#05</td>
                                                                    <td><span>Settings</span></td>
                                                                    <td class="text-center"><span>06</span></td>
                                                                    <td class="text-center"><span>02</span></td>
                                                                    <td class="text-center"><span>11</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#viewcategory">
                                                                                <i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Eidt"></i>
                                                                            </a>
                                                                            <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>#06</td>
                                                                    <td><span>Customization</span></td>
                                                                    <td class="text-center"><span>02</span></td>
                                                                    <td class="text-center"><span>02</span></td>
                                                                    <td class="text-center"><span>11</span></td>
                                                                    <td>
                                                                        <div class="d-flex">
                                                                            <a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#viewcategory">
                                                                                <i class="feather feather-eye text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Eidt"></i>
                                                                            </a>
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

                <!-- ADD CATEGORY MODAL -->
                <div class="modal fade"  id="addcategory">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add New Category</h5>
                                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
                                <a  href="javascript:void(0);" class="btn btn-success">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ADD CATEGORY MODAL  -->

                <!-- VIEW CATEGORY MODAL -->
                <div class="modal fade"  id="viewcategory">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">View Category</h5>
                                <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Name" value="Services">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tickets</label>
                                    <select class="form-control custom-select select2" data-placeholder="Select Tickets">
                                        <option label="Select Tickets"></option>
                                        <option value="1" selected>01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Agents</label>
                                    <select class="form-control custom-select select2" data-placeholder="Select Agents" multiple="multiple">
                                        <option label="Select Agents"></option>
                                        <option value="1" selected>Faith Harris</option>
                                        <option value="2">Austin Bell</option>
                                        <option value="3">Maria Bower</option>
                                        <option value="4">Peter Hill</option>
                                        <option value="5">Victoria Lyman</option>
                                        <option value="6">Adam Quinn</option>
                                        <option value="7">Melanie Coleman</option>
                                        <option value="8">Max Wilson</option>
                                        <option value="9">Amelia Russell</option>
                                        <option value="10">Justin Metcalfe</option>
                                        <option value="11">Ryan Young</option>
                                        <option value="12">Jennifer Hardacre</option>
                                        <option value="13">Justin Parr</option>
                                        <option value="14">Julia Hodges</option>
                                        <option value="15">Michael Sutherland</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Articles</label>
                                    <input type="text" class="form-control" placeholder="Articles" value="03">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <a  href="javascript:void(0);" class="btn btn-outline-danger" data-bs-dismiss="modal">Close</a>
                                <a  href="javascript:void(0);" class="btn btn-success">Save</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END VIEW CATEGORY MODAL -->

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
        <script src="{{asset('assets/js/support/support-category.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
