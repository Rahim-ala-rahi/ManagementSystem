@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Email-Read</div>
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
							<div class="col-md-12 col-lg-4 col-xl-3">
								<div class="card">
									<div class="list-group list-group-transparent mb-0 mail-inbox pb-3">
										<div class="m-4 text-center">
											<a href="{{url('email-compose')}}" class="btn btn-primary btn-lg btn-block">Compose</a>
										</div>
										<a  href="javascript:void(0);" class="list-group-item d-flex align-items-center active">
											<span class="icons"><i class="ri-mail-line"></i></span> Inbox <span class="ms-auto badge badge-success">14</span>
										</a>
										<a  href="javascript:void(0);" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-mail-send-line"></i></span> Sent Mail
										</a>
										<a  href="javascript:void(0);" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-star-line"></i></span> Starred <span class="ms-auto badge badge-danger">03</span>
										</a>
										<a  href="javascript:void(0);" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-mail-open-line"></i></span> Drafts
										</a>
										<a  href="javascript:void(0);" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-price-tag-3-line"></i></span> Tags
										</a>
										<a  href="javascript:void(0);" class="list-group-item d-flex align-items-center">
											<span class="icons"><i class="ri-delete-bin-line"></i></span> Trash
										</a>
									</div>
									<div class="card-body border-top">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary me-2"></span> Friends
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary me-2"></span> Family
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success me-2"></span> Social
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info me-2"></span> Office
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning me-2"></span> Work
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
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Mail Read</h4>
									</div>
									<div class="card-body">
										<div class="email-media">
											<div class="mt-0 d-sm-flex">
												<img class="me-2 rounded-circle avatar avatar-lg" src="{{asset('assets/images/users/16.jpg')}}" alt="avatar">
												<div class="media-body pt-0">
													<div class="float-end d-none d-md-flex fs-15">
														<small class="me-3 mt-1 text-muted">Sep 13 , 2021 12:45 pm</small>
														<a class="me-3" data-bs-toggle="tooltip" title="" data-original-title="Rated"><i class="ri-star-s-line"></i></a>
														<a class="me-3" data-bs-toggle="tooltip" title="" data-original-title="Reply"><i class="fa fa-reply"></i></a>
														<div class="me-3">
															<a  href="javascript:void(0);" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="ri-more-fill"></i></a>
															<div class="dropdown-menu dropdown-menu-end">
																<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Reply</a>
																<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-alert-circle me-2"></i>Report Spam</a>
																<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i>Delete</a>
																<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-printer me-2"></i>Print</a>
																<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-filter me-2"></i>Filter</a>
															</div>
														</div>
													</div>
													<div class="media-title text-dark font-weight-semibold mt-1">Abigali kelly <span class="text-muted font-weight-semibold">( abigali@gmail.com )</span></div>
													<small class="mb-0">to Adam Cotter ( adamcotter@gmail.com ) </small>
													<small class="me-2 d-md-none">Dec 13 , 2021 12:45 pm</small>
												</div>
											</div>
										</div>
										<div class="eamil-body mt-5">
											<h6>Hi Sir/Madam</h6><br><br>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
											<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
											<br><br>
											<p class="mb-0">Thanking you Sir/Madam</p>
											<hr>
											<div class="email-attch">
												<p class="font-weight-semibold">3 Attachments <a  href="javascript:void(0);">View</a></p>
											</div>
											<div class="row attachments-doc">
												<div class="col-xxl-4 col-xl-12 col-md-12 my-2">
													<div class="list-group-item  align-items-center">
														<div class="d-xl-flex">
															<img src="{{asset('assets/images/files/attachments/2.png')}}" alt="img" class="avatar bg-transparent avatar-xl me-2">
															<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">document.pdf<span class="text-muted ms-2">(23 KB)</span></a>
															<div class="ms-auto d-flex mt-4 text-end">
																<a  href="javascript:void(0);" class="action-btns1"><i class="feather feather-download-cloud text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1  me-0"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-xl-12 col-md-12 my-2">
													<div class="list-group-item  align-items-center">
														<div class="d-xl-flex">
															<img src="{{asset('assets/images/files/attachments/4.png')}}" alt="img" class="avatar bg-transparent avatar-xl me-2">
															<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">Project<span class="text-muted ms-2">(58.6MB)</span></a>
															<div class="ms-auto d-flex mt-4 text-end">
																<a  href="javascript:void(0);" class="action-btns1"><i class="feather feather-download-cloud text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1 me-0"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-xxl-4 col-xl-12 col-md-12 my-2">
													<div class="list-group-item  align-items-center">
														<div class="d-xl-flex">
															<img src="{{asset('assets/images/files/attachments/3.png')}}" alt="img" class="avatar bg-transparent avatar-xl me-2">
															<a  href="javascript:void(0);" class="font-weight-semibold fs-14 mt-5">files.doc<span class="text-muted ms-2">(2.67 KB)</span></a>
															<div class="ms-auto d-flex mt-4 text-end">
																<a  href="javascript:void(0);" class="action-btns1"><i class="feather feather-download-cloud text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1 me-0"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary mt-1 mb-1"  href="javascript:void(0);"><i class="fa fa-reply"></i> Reply</a>
										<a class="btn btn-secondary mt-1 mb-1"  href="javascript:void(0);"><i class="fa fa-share"></i> Forward</a>
									</div>
								</div>
							</div>
						</div>
                        <!-- END ROW -->

@endsection

@section('modals')


@endsection

@section('scripts')


@endsection
