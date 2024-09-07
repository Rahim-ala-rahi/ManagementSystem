@extends('layouts.custom-app')

@section('styles')


@endsection

@section('content')

                @section('switcher-icon')

                <div class="page responsive-log error-bg">
                    @endsection
                    
                    <div class="page-content m-0">
                        <div class="container text-center  relative">
                            <div class="display-1 mb-5 font-weight-semibold">401</div>
                            <h1 class="h3  mb-3 font-weight-semibold">Un Authorized Error!</h1>
                            <p class="h5 font-weight-normal mb-7 leading-normal text-muted">You may have mistyped the address or the page may have moved.</p>
                            <a class="btn btn-primary" href="{{url('index')}}"><i class="fe fe-arrow-left-circle me-1"></i>Back to Home</a>
                        </div>
                    </div>
                </div>

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
