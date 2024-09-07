@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Modal</div>
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
							<div class="col-lg-12">
								<!--div-->
								<div class="card" id="modal">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Basic Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Message Preview</h6>
															<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<h6>Why We Use Electoral College, Not Popular Vote</h6>
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" >Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- pd-y-50 -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo1" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal1">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Small Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog modal-sm" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Notice</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
														</div>
														<div class="modal-footer justify-content-center">
															<button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" >Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo2" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal2">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Large Modal
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog modal-lg" role="document">
													<div class="modal-content modal-content-demo">
														<div class="modal-header">
															<h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
														</div>
														<div class="modal-body">
															<h6>Why We Use Electoral College, Not Popular Vote</h6>
															<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
														</div>
														<div class="modal-footer">
															<button class="btn btn-primary" >Save changes</button>
															<button class="btn btn-light" >Close</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo3" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- pd-y-30 -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal3">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Success Alert Messages
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-body text-center p-4">
															<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
															<i class="fe fe-check-circle fs-80 text-success lh-1 mb-4 d-inline-block"></i>
															<h4 class="text-success mb-4">Congratulations!</h4>
															<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button class="btn btn-success pd-x-25" >Continue</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo4" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- modal-footer-demo -->
									</div>
								</div>
								<!--/div-->
								<!--div-->
								<div class="card" id="modal4">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Warning Alert Messages
										</div>
									</div>
									<div class="card-body">
										<div class="p-4 bg-light border border-bottom-0 mg-t-20">
											<div class="modal d-block pos-static">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-body text-center p-4">
															<button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
															<i class="fe fe-x-circle fs-80 text-danger lh-1 mb-4 d-inline-block"></i>
															<h4 class="text-danger mb-20">Error: Cannot process your entry!</h4>
															<p class="mb-4 mx-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" >Continue</button>
														</div>
													</div>
												</div>
											</div>
										</div><!-- modal-wrapper-demo -->
										<div class="text-center py-4 bg-light border">
											<a class="btn btn-primary" data-bs-target="#modaldemo5" data-bs-toggle="modal" href="">View Live Demo</a>
										</div><!-- modal-footer-demo -->
									</div>
								</div>
								<!--/div-->
							<div class="row ">
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="card custom-card">
											<div class="card-body">
												<div>
													<h6 class="main-content-label mb-3">Scrolling Modal</h6>
												</div>
												<a class="btn ripple btn-primary" data-bs-target="#scrollingmodal" data-bs-toggle="modal" href="javascript:;">View Demo</a>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="card custom-card">
											<div class="card-body">
												<div>
													<h6 class="main-content-label mb-3">Scrolling with Content</h6>
												</div>
												<a class="btn ripple btn-secondary" data-bs-target="#scrollmodal" data-bs-toggle="modal" href="javascript:;">View Demo</a>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="card custom-card">
											<div class="card-body">
												<div>
													<h6 class="main-content-label mb-3">Select2 Inside Modals</h6>
												</div>
												<a class="btn ripple btn-info" data-bs-target="#select2modal" data-bs-toggle="modal" href="javascript:;">View Demo</a>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-lg-6">
										<div class="card custom-card">
											<div class="card-body">
												<div>
													<h6 class="main-content-label mb-3">Modal-datepicker</h6>
												</div>
												<a class="btn ripple btn-primary" data-bs-target="#modal-datepicker" data-bs-toggle="modal" href="javascript:;">View Demo</a>
											</div>
										</div>
									</div>
							</div>

								<!--div-->
								<div class="card" id="modal5">
									<div class="card-header border-bottom-0">
										<div class="card-title">
											Modal Animation Effects
										</div>
									</div>
									<div class="card-body">
										<div class="row ">
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-scale" data-bs-toggle="modal" href="#modaldemo8">Scale</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-slide-in-right" data-bs-toggle="modal" href="#modaldemo8">Slide In Right</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-slide-in-bottom" data-bs-toggle="modal" href="#modaldemo8">Slide In Bottom</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-newspaper" data-bs-toggle="modal" href="#modaldemo8">Newspaper</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-fall" data-bs-toggle="modal" href="#modaldemo8">Fall</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemo8">Flip Horizontal</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-flip-vertical" data-bs-toggle="modal" href="#modaldemo8">Flip Vertical</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-super-scaled" data-bs-toggle="modal" href="#modaldemo8">Super Scaled</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-sign" data-bs-toggle="modal" href="#modaldemo8">Sign</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-rotate-bottom" data-bs-toggle="modal" href="#modaldemo8">Rotate Bottom</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-rotate-left" data-bs-toggle="modal" href="#modaldemo8">Rotate Left</a>
											</div>
											<div class="col-sm-6 col-md-4 col-xl-3">
												<a class="modal-effect btn btn-primary btn-block mb-3" data-effect="effect-just-me" data-bs-toggle="modal" href="#modaldemo8">Just Me</a>
											</div>
										</div>
									</div>
								</div>
								<!--/div-->
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Modal Sizes</h3>
									</div>
									<div class="card-body text-center">
										<p>Add <code class="highlighter-rouge">.modal-sm </code> or <code class="highlighter-rouge">.modal-lg </code> to modal-dialog to increase and decrease the modal box sizes.</p>
										<button  class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#smallmodal">Small Modal</button>
										<button  class="btn btn-secondary mt-3" data-bs-toggle="modal" data-bs-target="#normalmodal">Default Modal</button>
										<button  class="btn btn-info mt-3" data-bs-toggle="modal" data-bs-target="#largemodal">large Modal</button>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')

            <!-- MODAL -->
            <div class="modal fade"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
            <!-- END MODAL -->

			<!-- MODAL -->
			<div class="modal  fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodal" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodal1">Modal title</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
            <!-- END MODAL -->

			<!-- MODAL -->
			<div class="modal fade"  id="normalmodal" tabindex="-1" role="dialog" aria-labelledby="normalmodal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="normalmodal1">Modal title</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END MODAL -->

			<!-- MODAL -->
			<div class="modal fade"  id="largemodal" tabindex="-1" role="dialog" aria-labelledby="largemodal" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="largemodal1">Modal title</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<p>Modal body text goes here.</p>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END MODAL -->

			<!-- SCROLLING MODAL -->
			<div class="modal fade"  id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
						<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<p> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
						<p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. </p>
						<p> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
						<p> No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
					  </div>
					  <div class="modal-footer">
						<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button  class="btn btn-primary">Save changes</button>
					  </div>
					</div>
				</div>
			</div>
            <!-- END SCROLLING MODAL -->

			<!-- GRID MODAL -->
			<div class="modal fade"  id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal2">Modal title</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-6">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
								</div>
								<div class="col-md-6">
									<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the who loves toil and pain can procureor sit aspernatur  system.</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<p>expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure desires to obtain pain.</p>
								</div>
								<div class="col-md-6">
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat aut odit voluptatem.</p>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
            <!-- END GRID MODAL -->

			<!-- MESSAGE MODAL -->
			<div class="modal fade"  id="exampleModal3" tabindex="-1" role="dialog"  aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="example-Modal3">New message</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label for="recipient-name" class="form-control-label">Recipient:</label>
									<input type="text" class="form-control" id="recipient-name">
								</div>
								<div class="form-group">
									<label for="message-text" class="form-control-label">Message:</label>
									<textarea class="form-control" id="message-text"></textarea>
								</div>
							</form>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Send message</button>
						</div>
					</div>
				</div>
			</div>
            <!-- END MESSAGE MODAL -->

			<!-- SIDEBAR-RIGHT -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="card-header border-bottom pb-5">
					<h4 class="card-title">Notifications </h4>
					<div class="card-options">
						<a  href="javascript:void(0);" class="btn btn-sm btn-icon btn-light  text-primary"  data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right"><i class="feather feather-x"></i> </a>
					</div>
				</div>
				<div class="">
					<div class="list-group-item  align-items-center border-0">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/4.jpg')}})"></span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Liam <span class="text-muted font-weight-normal">Sent Message</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>30 mins ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/10.jpg')}})"></span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Paul<span class="text-muted font-weight-normal"> commented on you post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 hour ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-pink-transparent"><span class="feather feather-shopping-cart"></span></span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">James<span class="text-muted font-weight-normal"> Order Placed</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 day ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/9.jpg')}})">
								<span class="avatar-status bg-green"></span>
							</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Diane<span class="text-muted font-weight-normal"> New Message Received</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 day ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/5.jpg')}})">
								<span class="avatar-status bg-muted"></span>
							</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Vinny<span class="text-muted font-weight-normal"> shared your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>2 days ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-primary-transparent">M</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Mack<span class="text-muted font-weight-normal"> your admin lanuched</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>1 week ago</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})">
								<span class="avatar-status bg-green"></span>
							</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Vinny<span class="text-muted font-weight-normal"> shared your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>04 Jan 2021 1:56 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/8.jpg')}})">	</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Anna<span class="text-muted font-weight-normal"> likes your post</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>25 Dec 2020 11:25 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/14.jpg')}})">	</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Kimberly<span class="text-muted font-weight-normal"> Completed one task</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>24 Dec 2020 9:30 Pm</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})">	</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Rina<span class="text-muted font-weight-normal"> your account has Updated</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>28 Nov 2020 7:16 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="list-group-item  align-items-center  border-bottom">
						<div class="d-flex">
							<span class="avatar avatar-lg brround me-3 bg-success-transparent">J</span>
							<div class="mt-1">
								<a  href="javascript:void(0);" class="font-weight-semibold fs-16">Julia<span class="text-muted font-weight-normal"> Prepare for Presentation</span></a>
								<span class="clearfix"></span>
								<span class="text-muted fs-13 ms-auto"><i class="mdi mdi-clock text-muted me-1"></i>18 Nov 2020 11:55 Am</span>
							</div>
							<div class="ms-auto">
								<a href="" class="me-0 option-dots" data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
									<span class="feather feather-more-horizontal"></span>
								</a>
								<ul class="dropdown-menu dropdown-menu-end" role="menu">
									<li><a  href="javascript:void(0);"><i class="feather feather-eye me-2"></i>View</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-plus-circle me-2"></i>Add</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-trash-2 me-2"></i>Remove</a></li>
									<li><a  href="javascript:void(0);"><i class="feather feather-settings me-2"></i>More</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END SIDEBAR-RIGHT -->

            <!-- BASIC MODAL -->
            <div class="modal fade"  id="modaldemo1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END BASIC MODAL -->

            <!-- SMALL MODAL -->
            <div class="modal fade"  id="modaldemo2">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h6 class="modal-title">Notice</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>
             <!-- END SMALL MODAL -->

            <!-- LARGE MODAL -->
            <div class="modal fade"  id="modaldemo3">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END LARGE MODAL -->

            <!-- MODAL ALERT MESSAGE -->
            <div class="modal fade"  id="modaldemo4">
                <div class="modal-dialog modal-dialog-centered text-center " role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body text-center p-4">
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <i class="fe fe-check-circle fs-80 text-success lh-1 mb-5 d-inline-block"></i>
                            <h4 class="text-success tx-semibold">Congratulations!</h4>
                            <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-success pd-x-25" data-bs-dismiss="modal" >Continue</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL ALERT MESSAGE -->

            <!-- MODAL -->
            <div class="modal fade"  id="modaldemo5">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content tx-size-sm">
                        <div class="modal-body text-center p-4">
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                            <i class="fe fe-x-circle fs-80 text-danger lh-1 mb-5 d-inline-block"></i>
                            <h4 class="text-danger">Error: Cannot process your entry!</h4>
                            <p class="mg-b-20 mg-x-20">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p><button aria-label="Close" class="btn btn-danger pd-x-25" data-bs-dismiss="modal" >Continue</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL -->

            <!-- SCROLL MODAL -->
            <div class="modal fade" id="scrollingmodal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Scrolling Modal</h6>
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="button">Save changes</button>
                            <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SCROLL MODAL -->

            <!-- SCROLL WITH CONTENT MODAL -->
            <div class="modal fade" id="scrollmodal">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Scrolling With Content Modal</h6>
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                        </div>
                        <div class="modal-body">
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                            <p>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. </p>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="button">Save changes</button>
                            <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SCROLL WITH CONTENT MODAL -->

            <!-- SELECT2 MODAL -->
            <div class="modal fade" id="select2modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Select2 Modal</h6>
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Modal Body</h6>
                            <!-- Select2 -->
                            <select class="form-control select2 select2-dropdown">
                                <option label="Choose one">
                                </option>
                                <option value="Firefox">
                                Firefox
                                </option>
                                <option value="Chrome">
                                Chrome
                                </option>
                                <option value="Safari">
                                Safari
                                </option>
                                <option value="Opera">
                                Opera
                                </option>
                                <option value="Internet Explorer">
                                Internet Explorer
                                </option>
                            </select>
                            <!-- Select2 -->
                            <p class="mt-3">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="button">Save changes</button>
                            <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SELECT2 MODAL -->

            <!-- DATEPICKER MODAL -->
            <div class="modal fade" id="modal-datepicker">
                <div class="modal-dialog" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Date Picker Modal</h6>
                            <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"></button>
                        </div>
                        <div class="modal-body">
                            <h6>Modal Body</h6>
                            <!-- Select2 -->
                            <input  class="edit-item-date form-control" data-bs-toggle="datepicker" placeholder="MM/DD/YYYY" name="editdueDate" id="edit_due_date">
                            <!-- Select2 -->
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="button">Save changes</button>
                            <button class="btn ripple btn-danger" data-bs-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DATEPICKER MODAL -->

            <!-- MODAL EFFECTS -->
            <div class="modal fade"  id="modaldemo8" data-bs-backdrop="static">
                <div class="modal-dialog modal-dialog-centered text-center" role="document">
                    <div class="modal-content modal-content-demo">
                        <div class="modal-header">
                            <h6 class="modal-title">Message Preview</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <h6>Why We Use Electoral College, Not Popular Vote</h6>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" >Save changes</button> <button class="btn btn-light" data-bs-dismiss="modal" >Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MODAL EFFECTS -->

@endsection

@section('scripts')

        <!-- INTERNAL DATEPICKER JS -->
        <script src="{{asset('assets/plugins/model-datepicker/js/datepicker.js')}}"></script>
		<script src="{{asset('assets/plugins/model-datepicker/js/main.js')}}"></script>

@endsection
