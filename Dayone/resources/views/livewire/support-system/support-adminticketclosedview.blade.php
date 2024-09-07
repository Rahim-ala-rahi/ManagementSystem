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
                                        <h1 class="mb-0">Ticket ClosedView</h1>
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
                                                <a  href="javascript:void(0);" class="text-white">Ticket ClosedView</a>
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
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-header  border-0">
                                            <div class="card-title">Customer Details</div>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="profile-pic">
                                                <div class="profile-pic-img mb-2">
                                                    <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="online"></span>
                                                    <img src="{{asset('assets/images/users/1.jpg')}}" class="brround avatar-xxl" alt="user">
                                                </div>
                                                <a  href="javascript:void(0);" class="text-dark">
                                                    <h5 class="mb-1 font-weight-semibold2">Faith Harris</h5>
                                                    <small class="text-muted ">faith@gmail.com</small>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a  href="javascript:void(0);" class="btn btn-light btn-block">View Profile</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header  border-0">
                                            <div class="card-title">Ticket Details</div>
                                        </div>
                                        <div class="card-body text-center item-user">
                                            <div class="profile-pic mb-6">
                                                <div class="profile-pic-img mb-2">
                                                    <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="online"></span>
                                                    <img src="{{asset('assets/images/users/16.jpg')}}" class="brround avatar-xxl" alt="user">
                                                </div>
                                                <small class="text-muted ">User</small>
                                                <a  href="javascript:void(0);" class="text-dark">
                                                    <h5 class="mb-1 font-weight-semibold2">Abigali kelly</h5>
                                                </a>
                                            </div>
                                            <div class="profile-pic">
                                                <div class="profile-pic-img mb-2">
                                                    <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-original-title="online"></span>
                                                    <img src="{{asset('assets/images/users/11.jpg')}}" class="brround avatar-xxl" alt="user">
                                                </div>
                                                <small class="text-muted ">Agent</small>
                                                <a  href="javascript:void(0);" class="text-dark">
                                                    <h5 class="mb-1 font-weight-semibold2">Adam Quinn</h5>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <div class="btn-list">
                                                <a  href="javascript:void(0);" class="btn btn-light btn-block">Closed Ticket</a>
                                                <a  href="javascript:void(0);" class="btn btn-outline-light btn-block">Delete Ticket</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header  border-0">
                                            <div class="card-title">Ticket Information</div>
                                        </div>
                                        <div class="card-body pt-2 ps-3 pr-3">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Ticket ID</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="font-weight-semibold">#289</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Ticket User</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="font-weight-semibold">User</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Ticket Category</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="font-weight-semibold">Support</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Ticket Priority</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="badge badge-success-light">Low</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Assigned To</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="font-weight-semibold">Admin</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Open Date</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="font-weight-semibold">12-01-2021 11:30AM</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Replied Date</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="font-weight-semibold">15-01-2021 04:12PM</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <span class="w-50">Status</span>
                                                            </td>
                                                            <td>:</td>
                                                            <td>
                                                                <span class="badge badge-danger">Closed</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header border-0">
                                            <div>
                                                <h4 class="card-title mb-1 fs-22">Techincal Issue </h4>
                                                <small class="fs-13"><i class="feather feather-clock text-muted me-1"></i>Last Updated on <span class="text-muted">5 days ago</span></small>
                                            </div>
                                            <div class="card-options">
                                                <span class="badge badge-danger fs-10">Closed</span>
                                            </div>
                                        </div>
                                        <div class="card-body pt-2">
                                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atcorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                        </div>
                                    </div>
                                    <div class="card reply-card">
                                        <div class="card-body text-center">
                                            <p class="mb-2">Your Ticket is now Closed You cannot add any reply?</p>
                                            <label class="mb-0">Do you Want to Re-open?</label><a  href="javascript:void(0);" class="btn btn-primary btn-sm ms-2 reopen-button">Re-Open</a>
                                        </div>
                                    </div>
                                    <div class="card reopen-card">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">Reply Ticket</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="summernote"></div>
                                            <div class="form-group">
                                                <label class="form-label">Upload Image</label>
                                                <div class="form-group">
                                                <label for="form-label" class="form-label"></label>
                                                <input class="form-control" type="file">
                                            </div>
                                            </div>
                                            <div class="custom-controls-stacked d-md-flex">
                                                <label class="form-label me-5">Status :</label>
                                                <label class="custom-control custom-radio success me-4">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option1">
                                                    <span class="custom-control-label">Open</span>
                                                </label>
                                                <label class="custom-control custom-radio success">
                                                    <input type="radio" class="custom-control-input" name="example-radios1" value="option2">
                                                    <span class="custom-control-label">Close</span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <a  href="javascript:void(0);" class="btn btn-success">Submit Reply</a>
                                            <a  href="javascript:void(0);" class="btn btn-danger">Cancel</a>
                                        </div>
                                    </div>
                                    <div class="card support-converbody">
                                        <div class="card-header border-0">
                                            <h4 class="card-title">Conversions</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-sm-flex">
                                                <div class="d-flex me-3">
                                                    <a  href="javascript:void(0);"><img class="media-object brround avatar-lg" alt="64x64" src="{{asset('assets/images/users/11.jpg')}}"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-1 font-weight-semibold">Adam Quinn <span class="badge badge-primary-light badge-md ms-2">Admin</span></h5>
                                                    <small class="text-muted"><i class="feather feather-clock"></i> 3 mins ago</small>
                                                    <p class="fs-13 mb-0 mt-1 supportnote-body">
                                                    Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
                                                    </p>
                                                    <div class="editsupportnote-icon animated">
                                                        <div class="editsummernote"></div>
                                                        <div class="btn-list mt-1">
                                                            <span class="btn btn-primary dismiss-btn">Update</span>
                                                            <span class="btn btn-danger dismiss-btn">Cancel</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ms-auto">
                                                    <span class="action-btns supportnote-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="feather feather-edit text-primary fs-16"></i></span>
                                                </div>
                                            </div>
                                            <hr class="closed-divider">
                                        </div>
                                        <div class="card-body">
                                            <div class="d-sm-flex">
                                                <div class="d-flex me-3">
                                                    <a  href="javascript:void(0);"><img class="media-object brround avatar-lg" alt="64x64" src="{{asset('assets/images/users/16.jpg')}}"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-1 font-weight-semibold">Abigali kelly <span class="badge badge-danger-light badge-md ms-2">User</span></h5>
                                                    <small class="text-muted"><i class="feather feather-clock"></i> 3 weeks ago</small>
                                                    <p class="fs-13 mt-1">
                                                    Lorem ipsum dolor sit amet commodo consequat.
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-lg-2 col-md-3">
                                                            <a  href="javascript:void(0);" class="attach-supportfiles">
                                                                <span class="img-options-remove" data-bs-toggle="remove"><i class="fe fe-x"></i></span>
                                                                <img src="{{asset('assets/images/files/attachments/2.png')}}" alt="img" class="img-fluid">
                                                                <div class="attach-title">doc.pdf</div>
                                                            </a>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 mt-4 mt-md-0">
                                                            <a  href="javascript:void(0);" class="attach-supportfiles">
                                                                <span class="img-options-remove" data-bs-toggle="remove"><i class="fe fe-x"></i></span>
                                                                <img src="{{asset('assets/images/files/attachments/5.png')}}" alt="img" class="img-fluid">
                                                                <div class="attach-title">index.html</div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-sm-flex">
                                                <div class="d-flex me-3">
                                                    <a  href="javascript:void(0);"><img class="media-object brround avatar-lg" alt="64x64" src="{{asset('assets/images/users/11.jpg')}}"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-1 font-weight-semibold">Adam Quinn <span class="badge badge-primary-light badge-md ms-2">Admin</span></h5>
                                                    <small class="text-muted"><i class="feather feather-clock"></i> 1 month ago</small>
                                                    <p class="fs-13 mb-0 mt-1">
                                                    Lorem ipsum dolor sit amet laboris   commodo consequat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="d-sm-flex">
                                                <div class="d-flex me-3">
                                                    <a  href="javascript:void(0);"><img class="media-object brround avatar-lg" alt="64x64" src="{{asset('assets/images/users/16.jpg')}}"> </a>
                                                </div>
                                                <div class="media-body">
                                                    <h5 class="mt-1 mb-1 font-weight-semibold">Abigali kelly <span class="badge badge-danger-light badge-md ms-2">User</span></h5>
                                                    <small class="text-muted"><i class="feather feather-clock"></i> 2 months ago</small>
                                                    <p class="fs-13 mt-1 mb-0">
                                                    Some techinical issue in our theme
                                                    </p>
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
        <script src="{{asset('assets/js/support/support-ticketview.js')}}"></script>

@endsection
