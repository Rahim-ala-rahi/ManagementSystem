@extends('layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- PAGE HEADER -->
    <div class="page-header d-lg-flex d-block">
        <div class="page-leftheader">
            <div class="page-title">User-List 01</div>
        </div>
        <div class="page-rightheader ms-md-auto">
            <div class=" btn-list">
                <button class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i
                        class="feather feather-mail"></i> </button>
                <button class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i
                        class="feather feather-phone-call"></i> </button>
                <button class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i
                        class="feather feather-info"></i> </button>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER -->

    <!-- ROW -->
    <div class="row flex-lg-nowrap">
        <div class="col-12">
            <div class="row flex-lg-nowrap">
                <div class="col-12 mb-3">
                    <div class="e-panel card">
                        <div class="card-body">
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered border-top text-nowrap" id="example1">
                                        <thead>
                                            <tr>
                                                <th class="align-top border-bottom-0 wd-5"></th>
                                                <th class="border-bottom-0 w-20">User</th>
                                                <th class="border-bottom-0 w-15">Date of joining</th>
                                                <th class="border-bottom-0 w-30">Performance</th>
                                                <th class="border-bottom-0 w-10">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/2.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Nam Guy</h6>
                                                            <small class="">web designer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">30%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 30%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/1.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Tracy Lindahl</h6>
                                                            <small class="">web developer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">82%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 82%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/3.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Breana Millis</h6>
                                                            <small class="">Php developer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">68%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 68%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/4.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Antwan Tramel</h6>
                                                            <small class="">Hr Manager</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">78%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 78%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/5.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Geraldine Arpin</h6>
                                                            <small class="">Recriuter</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">45%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 45%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/6.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Clement Niehaus</h6>
                                                            <small class="">Ceo</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span> 25 Jan 2018</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">60%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 60%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/7.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Melinda Mayers</h6>
                                                            <small class="">Director</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">55%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 55%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/8.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Willodean Monson</h6>
                                                            <small class="">web designer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">45%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 45%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/9.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Brenton Moncada</h6>
                                                            <small class="">web developer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">40%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 40%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/10.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Cyndy Kirschbaum</h6>
                                                            <small class="">web designer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">80%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 80%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/11.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Renna Spino</h6>
                                                            <small class="">Hr Manager</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span> 03 Dec 2017</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">70%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 70%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            name="example-checkbox2" value="option2">
                                                        <span class="custom-control-label"></span>
                                                    </label>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="d-flex">
                                                        <span class="avatar brround avatar-md d-block"
                                                            style="background-image: url({{ asset('assets/images/users/12.jpg') }})"></span>
                                                        <div class="ms-3 mt-1">
                                                            <h6 class="mb-0 font-weight-semibold">Freeman Kozlowski</h6>
                                                            <small class="">web developer</small>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
                                                <td class="text-nowrap align-middle">
                                                    <div class="float-end">
                                                        <h6 class="mb-2 ms-4 font-weight-semibold">65%</h6>
                                                    </div>
                                                    <div class="progress progress-sm mb-0 mt-1">
                                                        <div class="progress-bar bg-primary" style="width: 65%"></div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">
                                                    <div class="btn-group align-top">
                                                        <button class="btn btn-sm btn-white">Edit</button>
                                                        <button class="btn btn-sm btn-white"><span
                                                                class="feather feather-trash-2 text-muted fs-16"></span></button>
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
    <!-- END ROW  -->
@endsection

@section('modals')
@endsection

@section('scripts')
@endsection
