@extends('layouts.custom-app')

@section('styles')
@endsection

@section('content')

    <!-- PAGE -->
@section('switcher-icon')
    <div class="page  responsive-log login-bg">
    @endsection

    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4 col-xxl-4">
                            <div class="card my-5">
                                <div class="p-4 pt-6 text-center">
                                    <h1 class="mb-2">Login</h1>
                                    <p class="text-muted">Sign In to your account</p>
                                </div>
                                <form class="card-body pt-3" id="login" name="login">
                                    <div class="form-group">
                                        <label class="form-label">Mail or Username</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group">
                                                <a href="" class="input-group-text">
                                                    <i class="fe fe-mail" aria-hidden="true"></i>
                                                </a>
                                                <input class="form-control" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group" id="Password-toggle">
                                                <a href="" class="input-group-text">
                                                    <i class="fe fe-eye-off" aria-hidden="true"></i>
                                                </a>
                                                <input class="form-control" type="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1"
                                                value="option1">
                                            <span class="custom-control-label">Remeber me</span>
                                        </label>
                                    </div>
                                    <div class="submit">
                                        <a class="btn btn-primary btn-block" href="{{ url('index') }}">Login</a>
                                    </div>
                                    <div class="text-center mt-3">
                                        <p class="mb-2"><a href="javascript:void(0);">Forgot Password</a></p>
                                        <p class="text-dark mb-0">Don't have account?<a class="text-primary ms-1"
                                                href="javascript:void(0);">Register</a></p>
                                        {{-- <p class="text-dark mb-0">Don't have an account?<a class="text-primary ms-1"
                                                href="{{ route('register') }}">Register</a></p> --}}
                                    </div>
                                </form>
                                <div class="card-body border-top-0 pb-6 pt-2">
                                    <div class="text-center">
                                        <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                class="ri-facebook-line"></i></span>
                                        <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                class="ri-instagram-line"></i></span>
                                        <span class="avatar brround me-3 bg-primary-transparent text-primary"><i
                                                class="ri-twitter-line"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE -->

@endsection

@section('modals')
@endsection

@section('scripts')
@endsection
