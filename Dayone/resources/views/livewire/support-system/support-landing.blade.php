@extends('layouts.supportlanding-app')

@section('styles')


@endsection

@section('content')

				<!-- SECTION -->
				<section>
					<div class="banner-1 cover-image sptb-tab bg-background-support" data-bs-image-src="{{asset('assets/images/photos/banner2.jpg')}}">
						<div class="header-text content-text mb-0">
							<div class="container">
								<div class="text-center text-white mb-7 mt-9">
								<h1 class="mb-2">Looking For Help?</h1>
									<p>Type your query or submit your ticket</p>
								</div>
								<div class="row">
									<div class="col-xl-7 col-lg-12 col-md-12 d-block mx-auto">
										<div class="search-background p-0">
											<input type="text" class="form-control input-lg keywords-input" placeholder="Ask your Questions.....">
											<button class="btn"><i class="fe fe-search"></i></button>
										</div>
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
							<div class="section-title center-block text-center">
								<h2 class="wow fadeInDown" data-wow-delay="0.1s">Why Choose US ?</h2>
								<p class="wow fadeInDown" data-wow-delay="0.15s">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<div class="support-card card mb-lg-0 text-center wow fadeInUp" data-wow-delay="0.2s">
										<div class="suuport-body">
											<div class="choose-icon">
												<img src="{{asset('assets/images/svgs/support/secure.svg')}}" alt="img" class="">
											</div>
											<div class="servic-data mt-3">
												<h4 class="font-weight-semibold mb-2">Secure Payment</h4>
												<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="support-card card mb-lg-0 text-center wow fadeInUp" data-wow-delay="0.2s">
										<div class="suuport-body">
											<div class="choose-icon">
												<img src="{{asset('assets/images/svgs/support/template.svg')}}" alt="img" class="">
											</div>
											<div class="servic-data mt-3">
												<h4 class="font-weight-semibold mb-2">Quality Templates</h4>
												<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="support-card card mb-0 text-center wow fadeInUp" data-wow-delay="0.2s">
										<div class="suuport-body">
											<div class="choose-icon">
												<img src="{{asset('assets/images/svgs/support/support2.svg')}}" alt="img" class="">
											</div>
											<div class="servic-data mt-3">
												<h4 class="font-weight-semibold mb-2">24/7 Support</h4>
												<p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque facere possimus</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /SECTION -->

				<!-- SECTION -->
				<section>
					<div class="banner-2 cover-image sptb" data-bs-image-src="{{asset('assets/images/pattern/pattern2.png')}}">
						<div class="header-text content-text mb-0">
							<div class="container">
								<div class="row">
									<div class="col-md-7">
										<div class="text-white wow fadeInLeft">
											<h2 class="mb-2 fs-30 font-weight-semibold">Need Support & Response within 24 hours?</h2>
											<p class="fs-16 text-white-50">Excepteur sint occaecat cupidatat non proident mollit anim id est laborum</p>
											<a  href="javascript:void(0);" class="btn btn-white btn-lg">Open Ticket</a>
										</div>
									</div>
									<div class="col-md-5 wow fadeInRight">
										<img src="{{asset('assets/images/png/support.png')}}" alt="img" class="header-text3 img-fluid">
									</div>
								</div>

							</div>
						</div><!-- /header-text -->
					</div>
				</section>
				<!-- /SECTION -->

				<!-- SECTION -->
				<section>
					<div class="cover-image sptb">
						<div class="container">
							<div class="section-title center-block text-center">
								<h2 class="wow fadeInDown" data-wow-delay="0.1s">Check Out Categories</h2>
								<p class="wow fadeInDown" data-wow-delay="0.15s">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-6">
									<div class="support-card card overflow-hidden wow fadeInUp" data-wow-delay="0.2s">
										<div class="card-body">
											<div class="categ-icon">
												<i class="ri-service-line text-primary"></i>
											</div>
											<h3 class="fs-20 mb-3">Services</h3>
											<ul class="list-unstyled widget-spec">
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Duis aute irure dolor</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Ut enim ad minima veniam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text"> How to pursue pleasure</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Neque porro quisquam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Quis autem vel eum</span></a>
												</li>
											</ul>
											<div class="mb-0 mt-4">
												<a class="text-primary"  href="javascript:void(0);">View more <i class="las la-arrow-right ms-1"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="support-card card overflow-hidden wow fadeInUp" data-wow-delay="0.2s">
										<div class="card-body">
											<div class="categ-icon">
												<i class="ri-customer-service-2-line text-orange"></i>
											</div>
											<h3 class="fs-20 mb-3">Support</h3>
											<ul class="list-unstyled widget-spec">
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Duis aute irure dolor</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Ut enim ad minima veniam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text"> How to pursue pleasure</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Neque porro quisquam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Quis autem vel eum</span></a>
												</li>
											</ul>
											<div class="mb-0 mt-4">
												<a class="text-primary"  href="javascript:void(0);">View more <i class="las la-arrow-right ms-1"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="support-card card overflow-hidden wow fadeInUp" data-wow-delay="0.2s">
										<div class="card-body">
											<div class="categ-icon">
												<i class="ri-file-text-line text-warning"></i>
											</div>
											<h3 class="fs-20 mb-3">License</h3>
											<ul class="list-unstyled widget-spec">
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Duis aute irure dolor</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Ut enim ad minima veniam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text"> How to pursue pleasure</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Neque porro quisquam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Quis autem vel eum</span></a>
												</li>
											</ul>
											<div class="mb-0 mt-4">
												<a class="text-primary"  href="javascript:void(0);">View more <i class="las la-arrow-right ms-1"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="support-card card overflow-hidden mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
										<div class="card-body">
											<div class="categ-icon">
												<i class="ri-bill-line text-danger"></i>
											</div>
											<h3 class="fs-20 mb-3">Billing</h3>
											<ul class="list-unstyled widget-spec">
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Duis aute irure dolor</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Ut enim ad minima veniam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text"> How to pursue pleasure</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Neque porro quisquam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Quis autem vel eum</span></a>
												</li>
											</ul>
											<div class="mb-0 mt-4">
												<a class="text-primary"  href="javascript:void(0);">View more <i class="las la-arrow-right ms-1"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="support-card card overflow-hidden mb-xl-0 wow fadeInUp" data-wow-delay="0.2s">
										<div class="card-body">
											<div class="categ-icon">
												<i class="ri-settings-2-line text-success"></i>
											</div>
											<h3 class="fs-20 mb-3">Settings</h3>
											<ul class="list-unstyled widget-spec">
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Duis aute irure dolor</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Ut enim ad minima veniam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text"> How to pursue pleasure</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Neque porro quisquam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Quis autem vel eum</span></a>
												</li>
											</ul>
											<div class="mb-0 mt-4">
												<a class="text-primary"  href="javascript:void(0);">View more <i class="las la-arrow-right ms-1"></i></a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-6">
									<div class="support-card card overflow-hidden mb-0 wow fadeInUp" data-wow-delay="0.2s">
										<div class="card-body">
											<div class="categ-icon">
												<i class="ri-stack-line text-pink"></i>
											</div>
											<h3 class="mb-3 fs-20">Customization</h3>
											<ul class="list-unstyled widget-spec">
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Duis aute irure dolor</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Ut enim ad minima veniam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text"> How to pursue pleasure</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Neque porro quisquam</span></a>
												</li>
												<li>
													<a class="text-dark"  href="javascript:void(0);"><i class="feather feather-minus me-1"></i><span class="categ-text">Quis autem vel eum</span></a>
												</li>
											</ul>
											<div class="mb-0 mt-4">
												<a class="text-primary"  href="javascript:void(0);">View more <i class="las la-arrow-right ms-1"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /SECTION -->

				<!-- SECTION -->
				<section>
					<div class="cover-image sptb bg-white">
						<div class="container">
							<div class="section-title center-block text-center">
								<h2 class="wow fadeInDown" data-wow-delay="0.1s">Check Out Recent Articles</h2>
								<p class="wow fadeInDown" data-wow-delay="0.15s">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="row">
								<div class="col-xl-4">
									<div class="support-card card mb-xl-0 border">
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
									<div class="support-card card mb-xl-0 border">
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
									<div class="support-card card mb-0 border">
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

				<!-- SECTION -->
				<section>
					<div class="cover-image sptb">
						<div class="container">
							<div class="section-title center-block text-center">
								<h2 class="wow fadeInDown" data-wow-delay="0.1s">Check Out Your Plan</h2>
								<p class="wow fadeInDown" data-wow-delay="0.15s">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="row pricing-tabs">
								<div class="col-md-12">
									<div class="pri-tabs-heading pri-tabs-heading3 text-center">
										<ul class="nav nav-price">
											<li><a class="active" data-bs-toggle="tab" href="#month">Monthly</a></li>
											<li><a class="" data-bs-toggle="tab" href="#year">Yearly</a></li>
										</ul>
									</div>
									<div class="tab-content">
										<div class="tab-pane pb-0 active show" id="month">
											<div class="row">
												<div class="col-md-12 col-lg-4 my-2">
													<div class="pricing-table card">
														<div class="price-header">
															<h3 class="title">Basic</h3>
															<div class="price">
																<span class="dollar">$</span>19
															</div><span class="permonth">Monthly License</span>
														</div>
														<div class="price-body">
															<ul>
																<li><b>0-20</b> Employees</li>
																<li><b>Forum</b> Support</li>
																<li><b>1 Year</b> Support &amp; Updates</li>
																<li><b>24/7</b> Support</li>
															</ul>
														</div>
														<div class="price-footer">
															<a class="order-btn btn btn-primary btn-pill btn-lg btn-block" href="javascript:void(0);">Get Started</a>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-4 my-2">
													<div class="pricing-table card">
														<div class="price-header">
															<h3 class="title">Advanced</h3>
															<div class="price">
																<span class="dollar">$</span>39
															</div><span class="permonth">Monthly License</span>
														</div>
														<div class="price-body">
															<ul>
																<li><b>0-80</b> Employees</li>
																<li><b>Forum</b> Support</li>
																<li><b>3 Year</b> Support &amp; Updates</li>
																<li><b>24/7</b> Support</li>
															</ul>
														</div>
														<div class="price-footer">
															<a class="order-btn btn btn-primary btn-pill btn-lg btn-block" href="javascript:void(0);">Get Started</a>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-4 my-2">
													<div class="pricing-table card">
														<div class="price-header">
															<h3 class="title">Premium</h3>
															<div class="price">
																<span class="dollar">$</span>59
															</div><span class="permonth">Monthly License</span>
														</div>
														<div class="price-body">
															<ul>
																<li><b>Unlimited</b> Employees</li>
																<li><b>Forum</b> Support</li>
																<li><b>Lifetime</b> Support &amp; Updates</li>
																<li><b>24/7</b> Support</li>
															</ul>
														</div>
														<div class="price-footer">
															<a class="order-btn btn btn-primary btn-pill btn-lg btn-block" href="javascript:void(0);">Get Started</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="tab-pane pb-0" id="year">
											<div class="row">
												<div class="col-md-12 col-lg-4 my-2">
													<div class="pricing-table card">
														<div class="price-header">
															<h3 class="title">Basic</h3>
															<div class="price">
																<span class="dollar">$</span>49
															</div><span class="permonth">Yearly License</span>
														</div>
														<div class="price-body">
															<ul>
																<li><b>0-20</b> Employees</li>
																<li><b>Forum</b> Support</li>
																<li><b>1 Year</b> Support &amp; Updates</li>
																<li><b>24/7</b> Support</li>
															</ul>
														</div>
														<div class="price-footer">
															<a class="order-btn btn btn-primary btn-pill btn-lg btn-block" href="javascript:void(0);">Get Started</a>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-4 my-2">
													<div class="pricing-table card">
														<div class="price-header">
															<h3 class="title">Advanced</h3>
															<div class="price">
																<span class="dollar">$</span>89
															</div><span class="permonth">Yearly License</span>
														</div>
														<div class="price-body">
															<ul>
																<li><b>0-80</b> Employees</li>
																<li><b>Forum</b> Support</li>
																<li><b>3 Year</b> Support &amp; Updates</li>
																<li><b>24/7</b> Support</li>
															</ul>
														</div>
														<div class="price-footer">
															<a class="order-btn btn btn-primary btn-pill btn-lg btn-block" href="javascript:void(0);">Get Started</a>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-4 my-2">
													<div class="pricing-table card">
														<div class="price-header">
															<h3 class="title">Premium</h3>
															<div class="price">
																<span class="dollar">$</span>139
															</div><span class="permonth">Yearly License</span>
														</div>
														<div class="price-body">
															<ul>
																<li><b>Unlimited</b> Employees</li>
																<li><b>Forum</b> Support</li>
																<li><b>Lifetime</b> Support &amp; Updates</li>
																<li><b>24/7</b> Support</li>
															</ul>
														</div>
														<div class="price-footer">
															<a class="order-btn btn btn-primary btn-pill btn-lg btn-block" href="javascript:void(0);">Get Started</a>
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
				</section>
				<!-- /SECTION -->

				<!-- SECTION -->
				<section>
					<div class="cover-image sptb bg-white">
						<div class="container">
							<div class="section-title center-block text-center">
								<h2 class="wow fadeInDown" data-wow-delay="0.1s">Check Out Client Says</h2>
								<p class="wow fadeInDown" data-wow-delay="0.15s">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div>
										<div id="myCarousel1" class="owl-carousel testimonial-owl-carousel">
											<div class="item text-center">
												<div class="card-body">
													<div class="row">
														<div class="col-xl-8 col-md-12 d-block mx-auto">
															<div class="testimonia">
																<div class="testimonia-img mx-auto mb-3">
																	<img src="{{asset('assets/images/users/3.jpg')}}" class="avatar avatar-xxl brround text-center mx-auto" alt="">
																</div>
																<p>
																	<i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam.
																</p>
																<div class="testimonia-data">
																	<h4 class="fs-20">Heather Bell</h4>
																	<div class="text-warning">
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star-half-full"> </i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item text-center">
												<div class="card-body">
													<div class="row">
														<div class="col-xl-8 col-md-12 d-block mx-auto">
															<div class="testimonia">
																<div class="testimonia-img mx-auto mb-3">
																	<img src="{{asset('assets/images/users/8.jpg')}}" class="avatar avatar-xxl brround text-center mx-auto" alt="">
																</div>
																<p><i class="fa fa-quote-left"></i> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore. </p>
																<div class="testimonia-data">
																	<h4 class="fs-20">David Blake</h4>
																	<div class="text-warning">
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="item text-center">
												<div class="card-body">
													<div class="row">
														<div class="col-xl-8 col-md-12 d-block mx-auto">
															<div class="testimonia">
																<div class="testimonia-img mx-auto mb-3">
																	<img src="{{asset('assets/images/users/4.jpg')}}" class="avatar avatar-xxl brround text-center mx-auto" alt="">
																</div>
																<p><i class="fa fa-quote-left"></i> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
																<div class="testimonia-data">
																	<h4 class="fs-20">Sophie Carr</h4>
																	<div class="text-warning">
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star"> </i>
																		<i class="fa fa-star-o"> </i>
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
							</div>
						</div>
					</div>
				</section>
				<!-- /SECTION -->

				<!-- SECTION -->
				<section>
					<div class="cover-image sptb">
						<div class="container">
							<div class="section-title center-block text-center">
								<h2 class="wow fadeInDown" data-wow-delay="0.1s">Check Out FAQs</h2>
								<p class="wow fadeInDown" data-wow-delay="0.15s">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
							</div>
							<div aria-multiselectable="true" class="accordion suuport-accordion" id="accordion" role="tablist">
								<div class="row">
									<div class="col-md-9 d-block mx-auto">
										<div class="acc-card wow fadeInUp" data-wow-delay="0.2s">
											<div class="acc-header" id="headingOne" role="tab">
												<h5 class="mb-0">
													<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapseOne">
														1. Nemo enim ipsam voluptatem quia voluptas sit aspernatur ? <span class="float-end acc-angle"><i class="fe fe-chevron-right"></i></span>
													</a>
												</h5>
											</div>
											<div aria-labelledby="headingOne" class="collapse" data-parent="#accordion" id="collapseOne" role="tabpanel">
												<div class="acc-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 d-block mx-auto">
										<div class="acc-card mt-2 wow fadeInUp" data-wow-delay="0.2s">
											<div class="acc-header" id="headingTwo" role="tab">
												<h5 class="mb-0">
													<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapseTwo">
														2. I will give you a complete account of the system, and expound the actual ? <span class="float-end acc-angle"><i class="fe fe-chevron-right"></i></span>
													</a>
												</h5>
											</div>
											<div aria-labelledby="headingTwo" class="collapse" data-parent="#accordion" id="collapseTwo" role="tabpanel">
												<div class="acc-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 d-block mx-auto">
										<div class="acc-card mt-2 wow fadeInUp" data-wow-delay="0.2s">
											<div class="acc-header" id="headingThree" role="tab">
												<h5 class="mb-0">
													<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapseThree">
														3. Which is the same as saying through shrinking from toil and pain ?<span class="float-end acc-angle"><i class="fe fe-chevron-right"></i></span>
													</a>
												</h5>
											</div>
											<div aria-labelledby="headingThree" class="collapse" data-parent="#accordion" id="collapseThree" role="tabpanel">
												<div class="acc-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 d-block mx-auto">
										<div class="acc-card mt-2 wow fadeInUp" data-wow-delay="0.2s">
											<div class="acc-header" id="headingfour" role="tab">
												<h5 class="mb-0">
													<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapsefour">
														4. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet ? <span class="float-end acc-angle"><i class="fe fe-chevron-right"></i></span>
													</a>
												</h5>
											</div>
											<div aria-labelledby="headingfour" class="collapse" data-parent="#accordion" id="collapsefour" role="tabpanel">
												<div class="acc-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-9 d-block mx-auto">
										<div class="acc-card mt-2 wow fadeInUp" data-wow-delay="0.2s">
											<div class="acc-header" id="headingfive" role="tab">
												<h5 class="mb-0">
													<a aria-controls="collapseOne" aria-expanded="true" data-bs-toggle="collapse" href="#collapsefive">
														5. Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil? <span class="float-end acc-angle"><i class="fe fe-chevron-right"></i></span>
													</a>
												</h5>
											</div>
											<div aria-labelledby="headingfour" class="collapse" data-parent="#accordion" id="collapsefive" role="tabpanel">
												<div class="acc-body">
													Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /SECTION -->

				<!-- SECTION -->
				<section class="absolute-banner-section">
					<div class="container">
						<div class="card mb-0 box-shadow overflow-hidden livechat-bg wow fadeInUp" data-wow-delay="0.1s">
							<div class="card-body p-6">
								<div class="text-center">
									<div>
										<h3 class="mb-2 display-6 font-weight-semibold">Any Questions? We can Help</h3>
										<p class="">Excepteur sint occaecat cupidatat non proident mollit anim id est laborum</p>
									</div>
									<div class="btn-list mt-4">
										<a  href="javascript:void(0);" class="btn btn-primary btn-pill btn-lg me-5"><i class="fa fa-commenting-o fs-18 my-auto me-2"></i>Quick Live Chat</a>
										<a  href="javascript:void(0);" class="btn btn-outline-primary btn-pill btn-lg"><i class="fa fa-paper-plane-o fs-18 my-auto me-2"></i>Submit Request</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /SECTION -->

@endsection

@section('modals')

				<!-- CHAT POPUP -->
				<div class="chat-message-popup card mb-4 animated">
					<div class="popup-head">
						<div class="row">
							<div class="message-popup-left">
								<div class="dropdown">
									<a class="" href="javascript:void(0);" data-bs-toggle="dropdown"><i class="fe fe-more-horizontal text-white"></i></a>
									<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
										<a  href="javascript:void(0);" class="dropdown-item" >
											<i class="fe fe-mail text-primary me-1"></i> Send Mail
										</a>
										<a class="dropdown-item"  href="javascript:void(0);">
											<i class="fe fe-thumbs-up text-primary me-1"></i> Rate as Good
										</a>
										<a  href="javascript:void(0);" class="dropdown-item" >
											<i class="fe fe-thumbs-down text-primary me-1"></i> Rate as Bad
										</a>
										<a  href="javascript:void(0);" class="dropdown-item" >
											<i class="fe fe-settings text-primary me-1"></i> Settings
										</a>
									</div>
								</div>
							</div>
							<div class="text-center font-weight-bold col-12 text-center">
								Chat With Us
							</div>
							<div class="message-popup-right text-end">
								<a class="card-options-fullscreen me-2"  href="javascript:void(0);" data-bs-toggle="card-fullscreen"><i class="fe fe-maximize text-white"></i></a>
								<a class="popup-minimize-normal"  href="javascript:void(0);"><i class="fe fe-x text-white"></i></a>
								<a class="popup-minimize"  href="javascript:void(0);"><i class="fe fe-x text-white"></i></a>
								<a class="popup-minimize-fullscreen"  href="javascript:void(0);"><i class="fe fe-x text-white"></i></a>
							</div>
						</div>
					</div>
					<div class="popup-chat-main-body">
						<div class="user-header p-3 border-top border-bottom">
							<div class="d-flex">
								<div class="d-flex">
									<img class="avatar avatar-md brround me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
									<div>
										<h6 class="mb-0 font-weight-bold">Abigali kelly</h6>
										<span class="w-2 h-2 brround bg-success d-inline-block me-1"></span> <small>active</small>
									</div>
								</div>
								<div class="ms-auto">
									<div class="chat-message-header-icons mt-1 fs-20">
										<a class="me-2" href="javascript:void(0);"><i class="fe fe-volume-2"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="popup-messages pt-0 chat-body-style">
							<div class="direct-chat-messages">
								<div class="chat-box-single-line">
									<abbr class="timestamp">March 15th, 2021</abbr>
								</div>
								<div class="direct-chat-msg">
									<div class="direct-chat-text">Hello. How are you today?<small class="time-text">10.00am</small></div>
									<img class="direct-chat-img me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-text">
										Yes
										<small class="time-text">10.00am</small>
									</div>
									<div class="direct-chat-text">
										I'm fine. Thanks for asking fine. Thanks for asking!
										<small class="time-text">10.00am</small>
									</div>
									<img class="direct-chat-img" src="{{asset('assets/images/users/1.jpg')}}" alt="message user image">
								</div>
								<div class="chat-box-single-line mt-5">
									<abbr class="timestamp">March 16th, 2021</abbr>
								</div>
								<div class="direct-chat-msg">
									<div class="direct-chat-text">Various versions have evolved over the years, sometimes<small class="time-text">10.00am</small></div>
									<img class="direct-chat-img me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-text">
										If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
										<small class="time-text">10.00am</small>
									</div>
									<img class="direct-chat-img" src="{{asset('assets/images/users/1.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg">
									<div class="direct-chat-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary<small class="time-text">10.00am</small></div>
									<div class="direct-chat-text">making this the first true generator on the Internet<small class="time-text">10.00am</small></div>
									<img class="direct-chat-img me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-text">
										<img src="{{asset('assets/images/photos/1.jpg')}}" class="d-block" alt="img">
										<small class="time-text">10.00am</small>
									</div>
									<img class="direct-chat-img" src="{{asset('assets/images/users/1.jpg')}}" alt="message user image">
								</div>
								<div class="chat-box-single-line mt-5">
									<abbr class="timestamp">March 16th, 2021</abbr>
								</div>
								<div class="direct-chat-msg">
									<div class="direct-chat-text">Various versions have evolved over the years, sometimes<small class="time-text">10.00am</small></div>
									<img class="direct-chat-img me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-text">
										If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
										<small class="time-text">10.00am</small>
									</div>
									<img class="direct-chat-img" src="{{asset('assets/images/users/1.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg">
									<div class="direct-chat-text"><iframe width="100" height="250" src="https://www.youtube.com/embed/kFjETSa9N7A"  allow="accelerometer; autoplay;" allowfullscreen></iframe><small class="time-text">10.00am</small></div>
									<div class="direct-chat-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary<small class="time-text">10.00am</small></div>
									<img class="direct-chat-img me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-text">
										<img src="{{asset('assets/images/photos/2.jpg')}}" class="d-block" alt="img">
										<small class="time-text">10.00am</small>
									</div>
									<div class="direct-chat-text">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary<small class="time-text">10.00am</small></div>
									<img class="direct-chat-img me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg">
									<div class="direct-chat-text">making this the first true generator on the Internet<small class="time-text">10.00am</small></div>
									<img class="direct-chat-img me-2" src="{{asset('assets/images/users/16.jpg')}}" alt="message user image">
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-text">
										<div class="d-flex">
											<i class="fe fe-file-text fs-40 op-2 text-muted d-block me-2"></i>
											<div>
												<div class="font-weight-bold fs-12">sampledemo.txt</div>
												<span class="fs-12">4.5 kb</span>
											</div>
										</div>
										<small class="time-text">10.00am</small>
									</div>
									<div class="direct-chat-text pb-6">
										<div class="d-flex">
											<div><img src="{{asset('assets/images/photos/thumb1.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img"></div>
											<div><img src="{{asset('assets/images/photos/thumb2.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img"></div>
										</div>
										<div class="d-flex">
											<div><img src="{{asset('assets/images/photos/thumb3.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img"></div>
											<div class="relative"><img src="{{asset('assets/images/photos/thumb4.jpg')}}" class="m-1 w-8 h-8 br-2" alt="img">
												<div class="more-images">+10</div>
											</div>
										</div>
										<small class="time-text">10.00am</small>
									</div>
									<img class="direct-chat-img" src="{{asset('assets/images/users/1.jpg')}}" alt="message user image">
								</div>
							</div>
						</div>
						<div class="popup-messages-footer card-footer p-0">
							<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message" class="form-control"></textarea>
							<div class="chat-footer-icons">
								<a class=""  href="javascript:void(0);"><i class="fe fe-paperclip text-muted"></i></a>
								<a class=""  href="javascript:void(0);"><i class="fe fe-send text-muted"></i></a>
							</div>
						</div>
					</div>
					<div class="popup-end-chat-main-body">
						<div class="p-6">
							<div class="section-end-chat text-center chat-content">
								<h2 class="font-weight-bold">End Chat?</h2>
								<p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
								<div class="mt-6">
									<a class="btn btn-primary end-chat-button px-5"  href="javascript:void(0);">Conform End Chat</a>
								</div>
								<div class="mt-3">
									<a class="btn btn-link text-primary goback-chat btn-sm"  href="javascript:void(0);"><i class="fe fe-arrow-left"></i> Go Back</a>
								</div>
							</div>
						</div>
					</div>
					<div class="rating-chat-main-body">
						<div class="p-6">
							<div class="text-start">
								<h3 class="font-weight-bold fs-20">Thank you for Contacting Us</h3>
								<h6>Please rate our supportive team in the following areas </h6>
								<form class="mt-5">
									<div class="mt-0">
										<label>What is your best reason for your score</label>
										<div class="star-ratings start-ratings-main mb-3 clearfix">
											<div class="stars stars-example-fontawesome star-sm">
												<select class="rating-fontawesome" name="rating">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4" selected>4</option>
													<option value="5">5</option>
												</select>
											</div>
										</div>
									</div>
									<div class="mt-3">
										<label>What is your best reason for your score</label>
										<textarea class="form-control" rows="5" cols="50"></textarea>
									</div>
									<a class="btn btn-success px-5 mt-4 btn-chat-close"  href="javascript:void(0);">Submit your Review</a>
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- END CHAT POPUP -->

				<!-- CHAT POPUP ICON -->
				<a  href="javascript:void(0);" id="chat-popup" class="chat-popup-active"><i class="feather feather-message-square"></i></a>
				<!-- END CHAT POPUP ICON -->

@endsection

@section('scripts')

        <!-- INTERNAL HORIZONTALMENU JS -->
        <script src="{{asset('assets/plugins/horizontal-menu/horizontal-menu.js')}}"></script>

        <!-- INTERNAL WOWMASTER JS -->
        <script src="{{asset('assets/plugins/wowmaster/wow.js')}}"></script>

        <!-- INTERNAL JQUERY AUTOCOMPLETE JS -->
        <script src="{{asset('assets/plugins/jquery.autocomplete/jquery.autocomplete.js')}}"></script>
        <script src="{{asset('assets/plugins/jquery.autocomplete/custom-autocomplete.js')}}"></script>

        <!-- INTERNAL OWL-CAROUSEL JS -->
        <script src="{{asset('assets/plugins/owl-carousel/owl-carousel.js')}}"></script>

		<!-- INTERNAL CHAT JS -->
		<script src="{{asset('assets/js/livechat.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/support/support-landing.js')}}"></script>

		<!-- INTERNAL BACKWARD RELOAD SCRIPTS -->
		<script>
		window.addEventListener( "pageshow", function ( event ) {
			var perfEntries = performance.getEntriesByType("navigation");
			if (perfEntries[0].type === "back_forward") {
			location.reload();
			}
			});

		</script>

@endsection
