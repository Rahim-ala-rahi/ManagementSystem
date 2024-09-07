@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Pricing</div>
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
						<div class="row text-center">
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<div class="mb-4"><i class="fa fa-plane plan-icon bg-primary"></i></div>
											<h6 class="text-uppercase font-weight-semibold text-primary">Starter Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$19 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>2 </strong> FreeDomain Name</p>
											<p><strong>2</strong> One-Click Apps</p>
											<p><strong>1</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a  href="javascript:void(0);" class="btn btn-lg btn-primary mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<div class="mb-4"><i class="fa fa-trophy plan-icon bg-success"></i></div>
											<h6 class="text-uppercase font-weight-semibold text-success">Professional Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0  font-weight-semibold">$29 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>3 </strong> FreeDomain Name</p>
											<p><strong>5</strong> One-Click Apps</p>
											<p><strong>3</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a  href="javascript:void(0);" class="btn btn-lg btn-success mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<div class="mb-4"><i class="fa fa-umbrella plan-icon bg-orange"></i></div>
											<h6 class="text-uppercase font-weight-semibold text-orange">Enterprise Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$39 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>10 </strong> FreeDomain Name</p>
											<p><strong>10</strong> One-Click Apps</p>
											<p><strong>8</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a  href="javascript:void(0);" class="btn btn-lg btn-orange mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6">
								<div class="card plan-card">
									<div class="card-block">
										<div class="pt-4 pb-4">
											<div class="mb-4"><i class="fa fa-cube plan-icon bg-warning"></i></div>
											<h6 class="text-uppercase font-weight-semibold text-warning">Unlimited Pack</h6>
										</div>
										<div>
											<h1 class="plan-price padding-b-15 display-4 mb-0 font-weight-semibold">$49 <span class="text-muted m-l-10"><sup>Per Month</sup></span></h1>
											<div class="plan-div-border"></div>
										</div>
										<div class="plan-features pb-4 mt-4 text-muted padding-t-b-30">
											<p><strong>12 </strong> FreeDomain Name</p>
											<p><strong>10</strong> One-Click Apps</p>
											<p><strong>6</strong>  Databases</p>
											<p><strong>Money</strong> BackGuarntee</p>
											<p><strong>24/7</strong> Support</p>
											<a  href="javascript:void(0);" class="btn btn-lg btn-warning mt-4">Sign Up Now</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="card px-5 pt-5">
							<div class="row">
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="card shadow-none">
										<div class="card-body text-center pricing bg-primary">
											<div class="card-category">Basic</div>
											<div class="display-3 my-4 font-weight-semibold">$10</div>
											<ul class="list-unstyled leading-loose">
												<li><strong>2 </strong> FreeDomain Name</li>
												<li><strong>2</strong> One-Click Apps</li>
												<li><strong>1</strong>  Databases</li>
												<li><strong>Money</strong> BackGuarntee</li>
												<li><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a  href="javascript:void(0);" class="btn btn-lg btn-white btn-block">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="card shadow-none">
										<div class="card-body text-center  pricing bg-primary ">
											<div class="card-category">Premium</div>
											<div class="display-3 my-4 font-weight-semibold">$49</div>
											<ul class="list-unstyled leading-loose">
												<li><strong>3 </strong> FreeDomain Name</li>
												<li><strong>5</strong> One-Click Apps</li>
												<li><strong>3</strong>  Databases</li>
												<li><strong>Money</strong> BackGuarntee</li>
												<li><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a  href="javascript:void(0);" class="btn btn-lg btn-white btn-block">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="card shadow-none">
										<div class="card-body text-center pricing bg-orange">
											<div class="card-category font-weight-semibold">Enterprise</div>
											<div class="display-3 my-4 font-weight-semibold">$99</div>
											<ul class="list-unstyled leading-loose">
												<li><strong>10 </strong> FreeDomain Name</li>
												<li><strong>10</strong> One-Click Apps</li>
												<li><strong>8</strong>  Databases</li>
												<li><strong>Money</strong> BackGuarntee</li>
												<li><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a  href="javascript:void(0);" class="btn btn-lg btn-white btn-block">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-md-6">
									<div class="card shadow-none">
										<div class="card-body text-center  pricing bg-primary ">
											<div class="card-category">Unlimited</div>
											<div class="display-3 my-4 font-weight-semibold">$139</div>
											<ul class="list-unstyled leading-loose">
												<li><strong>12 </strong> FreeDomain Name</li>
												<li><strong>10</strong> One-Click Apps</li>
												<li><strong>6</strong>  Databases</li>
												<li><strong>Money</strong> BackGuarntee</li>
												<li><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a  href="javascript:void(0);" class="btn btn-lg btn-white btn-block">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-6 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
											<path fill="#3366ff" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Personal</div>
									</div>
									<div class="panel-body text-center pt-0">
										<p class="lead font-weight-semibold"><strong>$15 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 1 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-end-0 border-start-0">
										<a class="btn btn-lg btn-primary btn-block"  href="javascript:void(0);">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 mt-2">
								<div class="panel price  panel-color">
									<div class="bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
											<path fill="#0dcd94" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Premium</div>
									</div>
									<div class="panel-body text-center pt-0">
										<p class="lead font-weight-semibold"><strong>$25 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-end-0 border-start-0">
										<a class="btn btn-lg btn-success btn-block"  href="javascript:void(0);">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
											<path fill="#f34932" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Corporate</div>
									</div>
									<div class="panel-body text-center pt-0">
										<p class="lead font-weight-semibold"><strong>$35 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-end-0 border-start-0">
										<a class="btn btn-lg btn-orange btn-block"  href="javascript:void(0);">Purchase Now!</a>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-6 mt-2">
								<div class="panel price  panel-color">
									<div class="bg-white text-center price-svg">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
											<path fill="#ffad00" fill-opacity="1" d="M0,96L48,133.3C96,171,192,245,288,266.7C384,288,480,256,576,240C672,224,768,224,864,192C960,160,1056,96,1152,106.7C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
										</svg>
										<div class="price-title">Business</div>
									</div>
									<div class="panel-body text-center pt-0">
										<p class="lead font-weight-semibold"><strong>$99 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center border-end-0 border-start-0">
										<a class="btn btn-lg btn-warning btn-block"  href="javascript:void(0);">Purchase Now!</a>
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
