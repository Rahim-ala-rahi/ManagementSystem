@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Todo-List</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class=" btn-list">
									<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
									<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
									<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-xl-3 col-lg-4">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="m-4 text-center">
											<a  href="javascript:void(0);" class="btn btn-primary btn-block">Add New Task</a>
										</div>
										<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center active">
											<span class="icons"><i class="ri-server-line"></i></span>  All Tasks <span class="ms-auto badge badge-success">12</span>
										</a>
										<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-file-warning-line"></i></span> Important <span class="ms-auto badge badge-danger">3</span>
										</a>
										<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-star-line"></i></span> Starred
										</a>
										<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-spam-line"></i></span>  Spam
										</a>
										<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-archive-line"></i></span>  Archive
										</a>
										<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center">
											<span class="icons"><i class="ri-delete-bin-line"></i></span>  Trash
										</a>
									</div>
									<div class="card-body border-top">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary me-2"></span> Pending Tasks
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary me-2"></span> Unassigned Tasks
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success me-2"></span> Completed Tasks
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info me-2"></span> Hold Tasks
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning me-2"></span> Task Issue
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger me-2"></span> Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-8 col-xl-9">
								<div class="card">
									<div class="card-body p-6">
										<div class="inbox-body">
											<div class="row">
												<div class="col mb-4">
													<div class="form-group w-200">
														<div class="input-icon">
															<span class="input-icon-addon">
																<i class="fe fe-search"></i>
															</span>
															<input type="text" class="form-control" placeholder="Search Tasks">
														</div>
													</div>
												</div>
												<div class="col col-auto mb-4">
													<div class="btn-group hidden-phone">
													<a data-bs-toggle="dropdown"  href="javascript:void(0);" class="btn btn-white" aria-expanded="false">
														Sort By
														<i class="fa fa-angle-down "></i>
													</a>
													<ul class="dropdown-menu dropdown-menu-end">
														<li><a  href="javascript:void(0);">Assending Order</a></li>
														<li><a  href="javascript:void(0);">Disending Order</a></li>
														<li class="divider"></li>
														<li><a  href="javascript:void(0);">Settings</a></li>
													</ul>
												</div>
												</div>
											</div>
											<div class="table-responsive">
												<table class="table table-inbox table-hover text-nowrap mb-0">
													<tbody>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/1.jpg')}}" alt="img">Shamika Griffith</td>
															<td class="view-message">Work Assigned By Clients</td>
															<td class="view-message"><span class="badge badge-primary badge-pill"> New</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/2.jpg')}}" alt="img">Archie Kesler</td>
															<td class="view-message">Try To Get New Work</td>
															<td class="view-message"><span class="badge badge-success badge-pill"> Completed</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/3.jpg')}}" alt="img">Carolyne Wirtz</td>
															<td class="view-message">Rationally Encounter Quences</td>
															<td class="view-message"><span class="badge badge-primary badge-pill"> New</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/4.jpg')}}" alt="img">Consuelo Valenzuela</td>
															<td class="view-message">Which Of Us Ever Undertakes</td>
															<td class="view-message"><span class="badge badge-success badge-pill"> Completed</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/5.jpg')}}" alt="img">Myrta Powe</td>
															<td class="view-message">Quis Autem Vel Eum Iure</td>
															<td class="view-message"><span class="badge badge-primary badge-pill"> New</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/6.jpg')}}" alt="img">Margarette Wycoff</td>
															<td class="view-message">Ut Enim Ad Minima Veniam</td>
															<td class="view-message"><span class="badge badge-warning badge-pill"> pending</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/7.jpg')}}" alt="img">Veronica Kimery</td>
															<td class="view-message">Inventore Veritatis Et Quasi</td>
															<td class="view-message"><span class="badge badge-success badge-pill"> Completed</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/8.jpg')}}" alt="img">Raisa Ladwig</td>
															<td class="view-message">Vero Eos Et Accusamus Et Iusto</td>
															<td class="view-message"><span class="badge badge-primary badge-pill"> New</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star text-warning"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/9.jpg')}}" alt="img">Kathaleen Roysden</td>
															<td class="view-message">Which Of Us Ever Undertakes</td>
															<td class="view-message"><span class="badge badge-warning badge-pill"> pending</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
														<tr class="">
															<td class="inbox-small-cells w-7">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells w-4"><i class="fa fa-star"></i></td>
															<td class="view-message dont-show font-weight-semibold"><img  class="avatat avatar-sm brround me-2" src="{{asset('assets/images/users/10.jpg')}}" alt="img">Elizabeth Loux</td>
															<td class="view-message">Account Of The System</td>
															<td class="view-message"><span class="badge badge-primary badge-pill"> New</span></td>
															<td class="view-message text-end font-weight-semibold">
																<span class="feather feather-trash-2 text-muted"></span>
															</td>
														</tr>
													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
								<ul class="pagination ">
									<li class="page-item page-prev disabled">
										<a class="page-link"  href="javascript:void(0);" tabindex="-1">Prev</a>
									</li>
									<li class="page-item active"><a class="page-link"  href="javascript:void(0);">1</a></li>
									<li class="page-item"><a class="page-link"  href="javascript:void(0);">2</a></li>
									<li class="page-item"><a class="page-link"  href="javascript:void(0);">3</a></li>
									<li class="page-item"><a class="page-link"  href="javascript:void(0);">4</a></li>
									<li class="page-item"><a class="page-link"  href="javascript:void(0);">5</a></li>
									<li class="page-item page-next">
										<a class="page-link"  href="javascript:void(0);">Next</a>
									</li>
								</ul>
							</div>
						</div>
                        <!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
