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
						<div class="row sidemenu-height">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with rounded</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<a href="javascript:void(0)" class="btn btn-primary btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-secondary btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-danger btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video0014...-mp4 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-success btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> <span class="">Document.exl </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-danger btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span> <span class="">AMN0012.pdf </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-primary btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> <span class="">design00123.zip </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-info btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-powerpoint tx-24"></i></span> <span class="">Document.doc  </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-warning btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span> <span class="">prsentation.ppt </span><i class="fe fe-x mt-2 ms-4"></i></a>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with rounded</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;bnt&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<button class="btn btn-primary btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-secondary btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-danger btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video0014...-mp4 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-success btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> <span class="">Document.exl </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-danger btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span> <span class="">AMN0012.pdf </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-primary btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> <span class="">design00123.zip </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-info btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-powerpoint tx-24"></i></span> <span class="">Document.doc  </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-warning btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdimdi-volume-high tx-24"></i></span> <span class="">prsentation.ppt </span><i class="fe fe-x mt-2 ms-4"></i></button>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with rounded</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<a href="javascript:void(0)" class="btn btn-outline-primary btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-secondary btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-danger btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video0014...-mp4 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-success btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> <span class="">Document.exl </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-danger btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span> <span class="">AMN0012.pdf </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-primary btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> <span class="">design00123.zip </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-info btn-pill tags-attachment"><span class="me-2"><i class="mdi mdi-file-powerpoint tx-24"></i></span> <span class="">Document.doc  </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-warning btn-pill tags-attachment"><span class="me-2"><i class="mdimdi-volume-high tx-24"></i></span> <span class="">prsentation.ppt </span><i class="fe fe-x mt-2 ms-4"></i></a>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with  outline</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;bnt&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<button class="btn btn-outline-primary btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-outline-secondary btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-outline-danger btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video0014...-mp4 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-outline-success btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> <span class="">Document.exl </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-outline-danger btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span> <span class="">AMN0012.pdf </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-outline-primary btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> <span class="">design00123.zip </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-outline-info btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-powerpoint tx-24"></i></span> <span class="">Document.doc  </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-outline-warning btn-pill tags-attachment" type="button" ><span class="me-2"><i class="mdimdi-volume-high tx-24"></i></span> <span class="">prsentation.ppt </span><i class="fe fe-x mt-2 ms-4"></i></button>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with radius</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;bnt&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<button class="btn btn-primary  tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-secondary  tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-danger  tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video0014...-mp4 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-success  tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> <span class="">Document.exl </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-danger  tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span> <span class="">AMN0012.pdf </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-primary  tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> <span class="">design00123.zip </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-info  tags-attachment" type="button" ><span class="me-2"><i class="mdi mdi-file-powerpoint tx-24"></i></span> <span class="">Document.doc  </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn btn-warning  tags-attachment" type="button" ><span class="me-2"><i class="mdimdi-volume-high tx-24"></i></span> <span class="">prsentation.ppt </span><i class="fe fe-x mt-2 ms-4"></i></button>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with outline radius</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<a href="javascript:void(0)" class="btn btn-outline-primary tags-attachment"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-secondary tags-attachment"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-danger tags-attachment"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video0014...-mp4 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-success tags-attachment"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span> <span class="">Document.exl </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-danger tags-attachment"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span> <span class="">AMN0012.pdf </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-primary tags-attachment"><span class="me-2"><i class="mdi mdi-zip-box tx-24"></i></span> <span class="">design00123.zip </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-info tags-attachment"><span class="me-2"><i class="mdi mdi-file-powerpoint tx-24"></i></span> <span class="">Document.doc  </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-warning tags-attachment"><span class="me-2"><i class="mdimdi-volume-high tx-24"></i></span> <span class="">prsentation.ppt </span><i class="fe fe-x mt-2 ms-4"></i></a>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with btn-group</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;btn&gt;</code>tag</p>
                                            <div class="example file-attachments-btns">
												<div class="btn-list">
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-primary " type="button"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span><span class="">Image01..._jpg </span></button>
														<button class="btn ripple btn-primary " type="button"><i class="fe fe-x "></i></button>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-secondary " type="button"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span><span class="">music-mp3  </span></button>
														<button class="btn ripple btn-secondary " type="button"><i class="fe fe-x "></i></button>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-warning " type="button"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span><span class="">video0014...-mp4 </span></button>
														<button class="btn ripple btn-warning " type="button"><i class="fe fe-x "></i></button>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-secondary " type="button"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span><span class="">Document.exl </span></button>
														<button class="btn ripple btn-secondary " type="button"><i class="fe fe-x "></i></button>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-success " type="button"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span><span class="">AMN0012.pdf </span></button>
														<button class="btn ripple btn-success " type="button"><i class="fe fe-x "></i></button>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-info " type="button"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span><span class="">audio.mp3</span></button>
														<button class="btn ripple btn-info " type="button"><i class="fe fe-x "></i></button>
													</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                             </div>
							 <div class="col-lg-6">
								 <div class="card">
									 <div class="card-header border-bottom-0">
										 <h3 class="card-title">File-Attachements with btn-group</h3>
									 </div>
									 <div class="card-body">
										 <div class="text-wrap">
											 <p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
											 <div class="example file-attachments-btns">
												 <div class="btn-list">
													 <div aria-label="Basic example" class="btn btn-group" role="group">
														 <a class="btn ripple btn-primary btn-pill"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span><span class="">Image01..._jpg </span></a>
														 <a class="btn ripple btn-primary btn-pill"><i class="fe fe-x "></i></a>
													 </div>
													 <div aria-label="Basic example" class="btn btn-group" role="group">
														 <a class="btn ripple btn-secondary btn-pill"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span><span class="">music-mp3  </span></a>
														 <a class="btn ripple btn-secondary btn-pill"><i class="fe fe-x "></i></a>
													 </div>
													 <div aria-label="Basic example" class="btn btn-group" role="group">
														 <a class="btn ripple btn-warning btn-pill"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span><span class="">video0014...-mp4 </span></a>
														 <a class="btn ripple btn-warning btn-pill"><i class="fe fe-x "></i></a>
													 </div>
													 <div aria-label="Basic example" class="btn btn-group" role="group">
														 <a class="btn ripple btn-secondary btn-pill"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span><span class="">Document.exl </span></a>
														 <a class="btn ripple btn-secondary btn-pill"><i class="fe fe-x "></i></a>
													 </div>
													 <div aria-label="Basic example" class="btn btn-group" role="group">
														 <a class="btn ripple btn-success btn-pill"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span><span class="">AMN0012.pdf </span></a>
														 <a class="btn ripple btn-success btn-pill"><i class="fe fe-x "></i></a>
													 </div>
													 <div aria-label="Basic example" class="btn btn-group" role="group">
														 <a class="btn ripple btn-info btn-pill"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span><span class="">audio.mp3</span></a>
														 <a class="btn ripple btn-info btn-pill"><i class="fe fe-x "></i></a>
													 </div>
													 </div>
												 </div>
											 </div>
										 </div>
									 </div>
								 </div>
							<div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements with btn-group</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
                                            <div class="example file-attachments-btns">
												<div class="btn-list outline group-btn">
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<a class="btn ripple btn-outline-info"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span><span class="">Image01..._jpg </span></a>
														<a class="btn ripple btn-outline-info"><i class="fe fe-x "></i></a>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<a class="btn ripple btn-outline-secondary"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span><span class="">music-mp3  </span></a>
														<a class="btn ripple btn-outline-secondary"><i class="fe fe-x "></i></a>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<a class="btn ripple btn-outline-warning"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span><span class="">video0014...-mp4 </span></a>
														<a class="btn ripple btn-outline-warning"><i class="fe fe-x "></i></a>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<a class="btn ripple btn-outline-secondary"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span><span class="">Document.exl </span></a>
														<a class="btn ripple btn-outline-secondary"><i class="fe fe-x "></i></a>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<a class="btn ripple btn-outline-success"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span><span class="">AMN0012.pdf </span></a>
														<a class="btn ripple btn-outline-success"><i class="fe fe-x "></i></a>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<a class="btn ripple btn-outline-info"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span><span class="">audio.mp3</span></a>
														<a class="btn ripple btn-outline-info"><i class="fe fe-x "></i></a>
													</div>
													</div>
												</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								<div class="col-lg-6 ">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">File-Attachements with btn-group</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>File-Attachements with   <code class="highlighter-rouge">&lt;btn&gt;</code>tag</p>
												<div class="example file-attachments-btns">
													<div class="btn-list outline group-btn">
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<button class="btn ripple btn-outline-primary btn-pill" type="button"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span><span class="">Image01..._jpg </span></button>
															<button class="btn ripple btn-outline-primary btn-pill" type="button"><i class="fe fe-x "></i></button>
														</div>
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<button class="btn ripple btn-outline-secondary btn-pill" type="button"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span><span class="">music-mp3  </span></button>
															<button class="btn ripple btn-outline-secondary btn-pill" type="button"><i class="fe fe-x "></i></button>
														</div>
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<button class="btn ripple btn-outline-warning btn-pill" type="button"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span><span class="">video0014...-mp4 </span></button>
															<button class="btn ripple btn-outline-warning btn-pill" type="button"><i class="fe fe-x "></i></button>
														</div>
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<button class="btn ripple btn-outline-secondary btn-pill" type="button"><span class="me-2"><i class="mdi mdi-file-excel tx-24"></i></span><span class="">Document.exl </span></button>
															<button class="btn ripple btn-outline-secondary btn-pill" type="button"><i class="fe fe-x "></i></button>
														</div>
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<button class="btn ripple btn-outline-success btn-pill" type="button"><span class="me-2"><i class="mdi mdi-file-pdf tx-24"></i></span><span class="">AMN0012.pdf </span></button>
															<button class="btn ripple btn-outline-success btn-pill" type="button"><i class="fe fe-x "></i></button>
														</div>
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<button class="btn ripple btn-outline-info btn-pill" type="button"><span class="me-2"><i class="mdi mdi-volume-high tx-24"></i></span><span class="">audio.mp3</span></button>
															<button class="btn ripple btn-outline-info btn-pill" type="button"><i class="fe fe-x "></i></button>
														</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<div class="col-lg-12 col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">File-Attachements with btn-group sizes</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
												<div class="example file-attachments-btns">
													<div class="btn-list outline group-btn">
														<div aria-label="Basic example" class="btn btn-group btn-group-sm" role="group">
															<a class="btn ripple btn-outline-info"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span><span class="">Image01..._jpg </span></a>
															<a class="btn ripple btn-outline-info"><i class="fe fe-x "></i></a>
														</div>
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<a class="btn ripple btn-outline-secondary"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span><span class="">music-mp3  </span></a>
															<a class="btn ripple btn-outline-secondary"><i class="fe fe-x "></i></a>
														</div>
														<div aria-label="Basic example" class="btn btn-group btn-group-lg" role="group">
															<a class="btn ripple btn-outline-warning"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span><span class="">video..-mp4 </span></a>
															<a class="btn ripple btn-outline-warning"><i class="fe fe-x "></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-xl-6">
									<div class="card">
										<div class="card-header border-bottom-0">
											<h3 class="card-title">File-Attachements with btn-group sizes</h3>
										</div>
										<div class="card-body">
											<div class="text-wrap">
												<p>File-Attachements with   <code class="highlighter-rouge">&lt;btn&gt;</code>tag</p>
												<div class="example">
													<div class="btn-list">
														<div aria-label="Basic example" class="btn btn-group btn-group-sm" role="group">
															<button class="btn ripple btn-primary " type="button"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span><span class="">Image01..._jpg </span></button>
															<button class="btn ripple btn-primary " type="button"><i class="fe fe-x "></i></button>
														</div>
														<div aria-label="Basic example" class="btn btn-group" role="group">
															<button class="btn ripple btn-secondary " type="button"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span><span class="">music-mp3  </span></button>
															<button class="btn ripple btn-secondary " type="button"><i class="fe fe-x "></i></button>
														</div>
														<div aria-label="Basic example" class="btn btn-group btn-group-lg" role="group">
															<button class="btn ripple btn-warning " type="button"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span><span class="">video..-mp4 </span></button>
															<button class="btn ripple btn-warning " type="button"><i class="fe fe-x "></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
                                            <div class="example outline group-btn">
												<div class="tags">
													<a href="javascript:void(0)" class="btn  btn-outline-primary tags-attachment-sm my-2"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-1 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-secondary tags-attachment my-2"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn  btn-outline-danger tags-attachment-lg my-2"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video04...-mp4 </span><i class="fe fe-x mt-1 ms-4"></i></a>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;btn&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<button class="btn  btn-primary tags-attachment-sm my-2" type="button" ><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-1 ms-4"></i></button>
													<button class="btn btn-secondary tags-attachment my-2" type="button" ><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn  btn-danger tags-attachment-lg my-2" type="button" ><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video14...-mp4 </span><i class="fe fe-x mt-3 ms-4"></i></button>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;a&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags outline group-btn">
													<a href="javascript:void(0)" class="btn  btn-outline-warning btn-pill tags-attachment-sm my-2"><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-1 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn btn-outline-secondary btn-pill tags-attachment my-2"><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></a>
													<a href="javascript:void(0)" class="btn  btn-outline-success btn-pill tags-attachment-lg my-2"><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video04...-mp4 </span><i class="fe fe-x mt-1 ms-4"></i></a>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">File-Attachements sizes</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <p>File-Attachements with   <code class="highlighter-rouge">&lt;btn&gt;</code>tag</p>
                                            <div class="example">
												<div class="tags">
													<button class="btn  btn-warning btn-pill tags-attachment-sm my-2" type="button" ><span class="me-2"><i class="mdi mdi-file-image tx-24"></i></span> <span class="">Image01..._jpg </span><i class="fe fe-x mt-1 ms-4"></i></button>
													<button class="btn btn-secondary btn-pill tags-attachment my-2" type="button" ><span class="me-2"><i class="mdi mdi-music tx-24"></i></span> <span class="">music-mp3 </span><i class="fe fe-x mt-2 ms-4"></i></button>
													<button class="btn  btn-success  btn-pill tags-attachment-lg my-2" type="button" ><span class="me-2"><i class="mdi mdi-file-video tx-24"></i></span> <span class="">video04...-mp4 </span><i class="fe fe-x mt-3 ms-4"></i></button>
											   </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card ">
										<div class="card-header border-bottom-0  pb-0">
											<h3 class="card-title">Image-attachment</h3>
										 </div>
										<div class="card-body">
											<div class="h-100  attached-file-grid6">
												<div class="pro-img-box attached-file-image">
													<a  href="javascript:void(0);">
														<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/images/media/img-3.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="image-icons">
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-download"></i></a></li>
														<li><a href="{{url('file-details')}}" class="btn btn-light"><i class="fe fe-eye"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card">
										<div class="card-header border-bottom-0 pb-0">
											<h3 class="card-title">Image-attachment</h3>
										 </div>
										<div class="card-body">
											<div class="h-100  attached-file-grid6">
												<div class="pro-img-box attached-file-image">
													<a  href="javascript:void(0);">
														<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/images/media/img-5.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="image-icons">
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-download"></i></a></li>
														<li><a href="{{url('file-details')}}" class="btn btn-light"><i class="fe fe-eye"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card">
										<div class="card-header border-bottom-0  pb-0">
											<h3 class="card-title">Image-attachment</h3>
										 </div>
										<div class="card-body">
											<div class="h-100  attached-file-grid6">
												<div class="pro-img-box attached-file-image">
													<a  href="javascript:void(0);">
														<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/images/media/img-7.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="image-icons">
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-download"></i></a></li>
														<li><a href="{{url('file-details')}}" class="btn btn-light"><i class="fe fe-eye"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-sm-12">
									<div class="card custom-card">
										<div class="card-header border-bottom-0  pb-0">
											<h3 class="card-title">Image-attachment</h3>
										 </div>
										<div class="card-body">
											<div class="h-100  attached-file-grid6">
												<div class="pro-img-box attached-file-image">
													<a  href="javascript:void(0);">
														<img class=" pic-1 pos-relative rounded-5" src="{{asset('assets/images/media/img-2.jpg')}}" alt="attached-file-image"><span class="image-pic">123image.jpg</span>
													</a>
													<ul class="image-icons">
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-trash"></i></a></li>
														<li><a href="javascript:void(0)" class="btn btn-light"><i class="fe fe-download"></i></a></li>
														<li><a href="{{url('file-details')}}" class="btn btn-light"><i class="fe fe-eye"></i></a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">Image File_Attachment Small Size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="file-image-btn">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('assets/images/media/file.jpg')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image01.jpg</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/doc.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Word.doc</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/file2.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Excel.xls</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/ppt.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Document.pdf</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('assets/images/files/zip.png')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image02.jpg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

                        <!-- ROW -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">Image File_Attachment Medium Size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="file-image-btn file-image-md">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('assets/images/media/file.jpg')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image01.jpg</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-md">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/doc.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Word.doc</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-md">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/file2.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Excel.xls</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-md">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/ppt.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Document.pdf</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-md">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('assets/images/files/zip.png')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image02.jpg</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW -->

                        <!-- ROW -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                        <h3 class="card-title">Image File_Attachment Large Size</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-wrap">
                                            <div class="file-image-btn file-image-lg">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('assets/images/media/file.jpg')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image01.jpg</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-lg">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/doc.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Word.doc</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-lg">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/file2.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Excel.xls</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-lg">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}"><img src="{{asset('assets/images/files/ppt.png')}}" alt=""></a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Document.pdf</span>
                                                </div>
                                            </div>
                                            <div class="file-image-btn file-image-lg">
                                                <div class="product-image">
                                                    <a href="{{url('file-details')}}">
                                                        <img src="{{asset('assets/images/files/zip.png')}}" class="br-5" alt="">
                                                    </a>
                                                    <ul class="image-icons">
                                                        <li><a href="javascript:void(0)" class="btn btn-primary"><i class="fe fe-trash"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-secondary"><i class="fe fe-download"></i></a></li>
                                                        <li><a href="{{url('file-details')}}" class="btn btn-success"><i class="fe fe-eye"></i></a></li>
                                                    </ul>
                                                    <span class="file-name-1">Image02.jpg</span>
                                                </div>
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
