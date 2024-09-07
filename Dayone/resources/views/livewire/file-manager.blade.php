@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">File-Manager</div>
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
							<div class="col-xl-3">
								<div class="card">
									<div class="card-body d-flex">
										<div class="chart-circle chart-circle-sm chart-circle-primary ms-0 me-4" data-value="0.85" data-thickness="5" data-color="#3366ff">
											<div class="mx-auto chart-circle-value text-center fs-14">85%</div>
										</div>
										<div class="mt-3">
											<h5 class="mb-1 font-weight-bold">Storage</h5>
											<p class="mb-0"><span class="text-muted">13.65GB</span> / <span class="text-muted">16GB</span></p>
										</div>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0 file-manger">
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-image-line"></i></span> Images
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-live-line"></i></span>	Videos
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-folders-line"></i></span> Docs
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-file-music-line"></i></span> Music
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-shield-keyhole-line"></i></span> APKs
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-download-2-line"></i></span> Downloads
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-indent-decrease"></i></span> More
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0">
												<span class="icons"><i class="ri-lock-2-line"></i></span> Hiddent Files
											</a>
										</div>
									</div>
									<div class="card-body">
										<div class="list-group list-group-transparent mb-0 mail-inbox">
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary me-2"></span>Remote Control
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-secondary me-2"></span>Google Drive
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-success me-2"></span>FTP Files
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-info me-2"></span>Transfer files
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-warning me-2"></span>Deep Clean
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-danger me-2"></span>Favourities
											</a>
											<a  href="javascript:void(0);" class="list-group-item list-group-item-action d-flex align-items-center px-0 py-2">
												<span class="w-3 h-3 brround bg-primary me-2"></span>Settings
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9">
								<div class="row">
									<div class="col mb-4">
										<a  href="javascript:void(0);" class="btn btn-primary mb-1"><i class="fe fe-plus"></i> Upload New Files</a>
										<a  href="javascript:void(0);" class="btn btn-light mb-1"><i class="fe fe-folder"></i> New folder</a>
									</div>
									<div class="col col-auto mb-4">
										<div class="form-group w-100">
											<div class="input-icon">
												<span class="input-icon-addon">
													<i class="fe fe-search"></i>
												</span>
												<input type="text" class="form-control" placeholder="Search Files">
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Images</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Music</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Downloads</h6>
												<span class="text-muted">453kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Vidoes</h6>
												<span class="text-muted">1.5gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Documents</h6>
												<span class="text-muted">234mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<i class="fa fa-music text-secondary"></i>
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">topmp4song.mp4</h6>
												<span class="text-muted">4kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/photos/1.jpg')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">image.jpg</h6>
												<span class="text-muted">65kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">File documents</h6>
												<span class="text-muted">1.23gb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/folder.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4"> New Folder</h6>
												<span class="text-muted">897mb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/word.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">Word document</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-md-4 col-sm-6">
										<div class="card border p-0 shadow-none">
											<div class="d-flex align-items-center px-4 pt-4">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label"></span>
												</label>
												<div class="float-end ms-auto">
													<div class="btn-group ms-3 mb-0">
														<a  href="javascript:void(0);" class="option-dots" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
														<div class="dropdown-menu dropdown-menu-start">
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-edit me-2"></i> Edit</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-share me-2"></i> Share</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-download me-2"></i> Download</a>
															<a class="dropdown-item"  href="javascript:void(0);"><i class="fe fe-trash me-2"></i> Delete</a>
														</div>
													</div>
												</div>
											</div>
											<div class="card-body pt-0 text-center">
												<div class="file-manger-icon">
													<img src="{{asset('assets/images/files/file.png')}}" alt="img" class="br-7">
												</div>
												<h6 class="mb-1 font-weight-semibold mt-4">document.pdf</h6>
												<span class="text-muted">23kb</span>
											</div>
										</div>
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
