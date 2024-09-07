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
                                        <h1 class="mb-0">Knowledge</h1>
                                    </div>
                                    <div class="col col-auto">
                                        <ol class="breadcrumb text-center">
                                            <li class="breadcrumb-item">
                                                <a  href="javascript:void(0);" class="text-white-50">Home</a>
                                            </li>
                                            <li class="breadcrumb-item active">
                                                <a  href="javascript:void(0);" class="text-white">Knowledge</a>
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
                                    <div class="card mb-xl-0">
                                        <div class="card-header border-bottom-0">
                                            <h4 class="card-title">Recent Articles</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled list-article mb-0">
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How to Updgrade plan?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How could I manage active menu class?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text"> How to remove the dollar $ sign?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How to show sweet alert when i load a page?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">Is there available in webpack?</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card mb-xl-0">
                                        <div class="card-header border-bottom-0">
                                            <h4 class="card-title">Popular Articles</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled list-article mb-0">
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How to Updgrade plan?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text"> How to remove the dollar $ sign?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How to show sweet alert when i load a page?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How could I manage active menu class?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">Is there available in webpack?</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="card mb-0">
                                        <div class="card-header border-bottom-0">
                                            <h4 class="card-title">Most Helpful Articles</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled list-article mb-0">
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text"> How to remove the dollar $ sign?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How to show sweet alert when i load a page?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How to Updgrade plan?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">How could I manage active menu class?</span></a>
                                                </li>
                                                <li>
                                                    <a class="" href="{{url('support-knowledgeview')}}"><i class="typcn typcn-document-text"></i><span class="categ-text">Is there available in webpack?</span></a>
                                                </li>
                                            </ul>
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
