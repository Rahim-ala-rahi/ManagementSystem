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
                                        <h1 class="mb-0">Assigned Categories</h1>
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
                                                <a  href="javascript:void(0);" class="text-white">Assigned Categories</a>
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
                                                        <a class="side-menu__item" href="{{url('support-agentdash')}}"><i class="side-menu__icon las la-home"></i><span class="side-menu__label">Dashboard</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-agenteditprofile')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Edit Profile</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-agentticketlist')}}"><i class="side-menu__icon las la-ticket-alt"></i><span class="side-menu__label">Ticket Lists</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-agentticketactive')}}"><i class="side-menu__icon las la-compass"></i><span class="side-menu__label">Active Tickets</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-agentticketclosed')}}"><i class="side-menu__icon las la-edit"></i><span class="side-menu__label">Closed Tickets</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-agentticketview')}}"><i class="side-menu__icon las la-file-alt"></i><span class="side-menu__label">View Ticket</span></a>
                                                    </li>
                                                    <li>
                                                        <a class="side-menu__item" href="{{url('support-agentassign')}}"><i class="side-menu__icon las la-briefcase"></i><span class="side-menu__label">Assigned Categories</span></a>
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
                                        <div class="card-header border-0">
                                            <h4 class="card-title">Assigned Categories List</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-vcenter text-nowrap table-hover border table-striped" id="support-assignticketlist">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-bottom-0 w-5">#No</th>
                                                            <th class="border-bottom-0">Name</th>
                                                            <th class="border-bottom-0 text-center">Ticket Inprogress</th>
                                                            <th class="border-bottom-0 text-center">Ticket Resolved</th>
                                                            <th class="border-bottom-0 w-5 text-center">Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>#01</td>
                                                            <td><span>Services</span></td>
                                                            <td class="text-center"><span>02</span></td>
                                                            <td class="text-center"><span>01</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-eye text-primary"></i></a>
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#02</td>
                                                            <td><span>Support</span></td>
                                                            <td class="text-center"><span>08</span></td>
                                                            <td class="text-center"><span>05</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-eye text-primary"></i></a>
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#03</td>
                                                            <td><span>License</span></td>
                                                            <td class="text-center"><span>03</span></td>
                                                            <td class="text-center"><span>01</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-eye text-primary"></i></a>
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#04</td>
                                                            <td><span>Billing</span></td>
                                                            <td class="text-center"><span>03</span></td>
                                                            <td class="text-center"><span>01</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-eye text-primary"></i></a>
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#05</td>
                                                            <td><span>Settings</span></td>
                                                            <td class="text-center"><span>06</span></td>
                                                            <td class="text-center"><span>02</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-eye text-primary"></i></a>
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>#06</td>
                                                            <td><span>Customization</span></td>
                                                            <td class="text-center"><span>02</span></td>
                                                            <td class="text-center"><span>02</span></td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-eye text-primary"></i></a>
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

        <!-- INTERNAL DATA TABLES JS -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/support/support-sidemenu.js')}}"></script>
        <script src="{{asset('assets/js/support/support-assignticket.js')}}"></script>

        <!-- JQUERY STICKY JS -->
        <script src="{{asset('assets/plugins/jquery-sticky/jquery-sticky.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery-sticky/jquerysticky.js')}}"></script>

@endsection
