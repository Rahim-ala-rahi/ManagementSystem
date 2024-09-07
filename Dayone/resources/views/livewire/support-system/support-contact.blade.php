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
                                        <h1>Contact</h1>
                                    </div>
                                    <div class="col col-auto">
                                        <ol class="breadcrumb text-center">
                                            <li class="breadcrumb-item">
                                                <a  href="javascript:void(0);" class="text-white-50">Home</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                <a  href="javascript:void(0);" class="text-white">Contact</a>
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
                                <div class="col-lg-6 col-xl-6 col-md-12 mx-auto d-block">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <h3 class="font-weight-semibold2 mb-5">Let's get in Touch</h3>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Your Name" type="text">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control"  placeholder="Email Address" type="email">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Subject" type="text">
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" name="example-textarea-input" placeholder="Message" rows="6"></textarea>
                                            </div>
                                            <div class="text-start">
                                                <a class="btn btn-primary waves-effect waves-light"  href="javascript:void(0);">Send Message</a>
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
