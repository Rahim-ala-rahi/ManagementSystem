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
                                        <h1 class="mb-0">Open Ticket</h1>
                                    </div>
                                    <div class="col col-auto">
                                        <ol class="breadcrumb text-center">
                                            <li class="breadcrumb-item">
                                                <a  href="javascript:void(0);" class="text-white-50">Home</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                <a  href="javascript:void(0);" class="text-white">Open Ticket</a>
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
                                <div class="col-xl-8">
                                    <div class="card">
                                        <div class="card-header  border-0">
                                            <h4 class="card-title">New Ticket</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label mb-0 mt-2">Ticket Subject</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Name" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label mb-0 mt-2">Email Address</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="Email" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label mb-0 mt-2">Priority</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select  class="form-control custom-select select2"  data-placeholder="Select Priority">
                                                            <option label="Select Priority"></option>
                                                            <option value="1">High</option>
                                                            <option value="2">Medium</option>
                                                            <option value="3">Low</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label mb-0 mt-2">Ticket Category</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <select  class="form-control custom-select select2"  data-placeholder="Select Category">
                                                            <option label="Select Category"></option>
                                                            <option value="1">Support</option>
                                                            <option value="2">Services</option>
                                                            <option value="3">Customization</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label mb-0 mt-2">Ticket Description</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control mb-4" placeholder="Textarea" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label mb-0 mt-2">Upload Image</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label for="form-label" class="form-label">Bootstrap's Custom File Input</label>
                                                        <input class="form-control" type="file">
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label class="form-label mb-0 mt-2">Captcha</label>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" placeholder="" value="">
                                                        <div class="captch-body">
                                                            <img src="{{asset('assets/images/png/captcha.png')}}" alt="img">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-9">
                                                    <a  href="javascript:void(0);" class="btn btn-primary btn-lg">Submit Ticket</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card">
                                        <div class="card-header  border-0">
                                            <h4 class="card-title">Categories</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-catergory">
                                                <div class="item-list">
                                                    <ul class="list-group mb-0">
                                                        <li class="list-group-item">
                                                            <a class="text-dark"  href="javascript:void(0);">Support <span class="badgetext badge badge-light mb-0 mt-1">14</span></a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a class="text-dark"  href="javascript:void(0);">Services <span class="badgetext badge badge-light mb-0 mt-1">03</span></a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a class="text-dark"  href="javascript:void(0);">Customization<span class="badgetext badge badge-light mb-0 mt-1">25</span></a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <a class="text-dark"  href="javascript:void(0);">Other <span class="badgetext badge badge-light mb-0 mt-1">12</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-0">
                                        <div class="card-header  border-0">
                                            <h4 class="card-title">Popular Articles</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="list-catergory">
                                                <ul class="item-list item-list-scroll mb-0">
                                                    <li class="item">
                                                        <div class="list-card">
                                                            <a  href="javascript:void(0);"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">How to Updgrade plan?</span></a>
                                                            <div class="mt-1">
                                                                <span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 14</span>
                                                                <span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 53</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="list-card">
                                                            <a  href="javascript:void(0);"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">How could I manage active menu class?</span></a>
                                                            <div class="mt-1">
                                                                <span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 19</span>
                                                                <span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 03</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="list-card">
                                                            <a  href="javascript:void(0);"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6"> How to remove the dollar $ sign?</span></a>
                                                            <div class="mt-1">
                                                                <span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 22</span>
                                                                <span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 02</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item">
                                                        <div class="list-card">
                                                            <a  href="javascript:void(0);"><i class="typcn typcn-document-text item-list-icon"></i><span class="h6">Is there available in webpack?</span></a>
                                                            <div class="mt-1">
                                                                <span class="badge badge-primary badge-md fs-10"><i class="fa fa-eye"></i> 34</span>
                                                                <span class="badge badge-success badge-md fs-10"><i class="fa fa-thumbs-up"></i> 06</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
        <script src="{{asset('assets/js/support/support-ticket.js')}}"></script>

@endsection
