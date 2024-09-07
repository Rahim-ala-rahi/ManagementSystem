@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Products</div>
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
									<div class="card-body">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Searching.....">
											<span class="input-group-append">
												<button class="btn ripple btn-primary" >Search</button>
											</span>
										</div>
									</div>
									<div class="card-body">
										<h4 class="card-title">Categories</h4>
										<div class="mt-3">
											<div class="form-group">
												<label class="form-label">Select Gender</label>
												<select class="form-control custom-select select2" data-placeholder="Select Gender">
													<option label="Select Gender"></option>
													<option value="1">Mens</option>
													<option value="2">Womens</option>
													<option value="3">Kids</option>
													<option value="4">Others</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Category</label>
												<select class="form-control custom-select select2" data-placeholder="Select Category">
													<option label="Select Category"></option>
													<option value="1">Dress</option>
													<option value="2">Bags &amp; Purses</option>
													<option value="3">Coat &amp; Jacket</option>
													<option value="4">Beauty</option>
													<option value="5">Jeans</option>
													<option value="5">Jewellery</option>
													<option value="5">Electronics</option>
													<option value="5">Sports</option>
													<option value="5">Technology</option>
													<option value="5">Watches</option>
													<option value="5">Accessories</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Brand</label>
												<select class="form-control custom-select select2" data-placeholder="Select Barnd">
													<option label="Select Barnd"></option>
													<option value="1">White</option>
													<option value="2">Black</option>
													<option value="3">Red</option>
													<option value="4">Green</option>
													<option value="5">Blue</option>
													<option value="6">Yellow</option>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label">Color</label>
												<select class="form-control custom-select select2" data-placeholder="Select Color">
													<option label="Select Color"></option>
													<option value="1">White</option>
													<option value="2">Black</option>
													<option value="3">Red</option>
													<option value="4">Green</option>
													<option value="5">Blue</option>
													<option value="6">Yellow</option>
												</select>
											</div>
										</div>
									</div>
									<div class="card-body">
										<h4 class="card-title">Ratings</h4>
										<div class="mt-3">
											<div class="custom-checkbox custom-control mb-3">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1" checked="">
												<label for="checkbox-1" class="custom-control-label">
													<span class="fs-14 ms-2 my-auto">
														<i class="fa fa-star  text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
													</span>
												</label>
											</div>
											<div class="custom-checkbox custom-control mb-3">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
												<label for="checkbox-2" class="custom-control-label">
													<span class="fs-14 ms-2 my-auto">
														<i class="fa fa-star  text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
													</span>
												</label>
											</div>
											<div class="custom-checkbox custom-control mb-3">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
												<label for="checkbox-3" class="custom-control-label">
													<span class="fs-14 ms-2 my-auto">
														<i class="fa fa-star  text-warning"></i>
														<i class="fa fa-star text-warning"></i>
														<i class="fa fa-star text-warning"></i>
													</span>
												</label>
											</div>
											<div class="custom-checkbox custom-control mb-3">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
												<label for="checkbox-4" class="custom-control-label">
													<span class="fs-14 ms-2 my-auto">
														<i class="fa fa-star  text-warning"></i>
														<i class="fa fa-star text-warning"></i>
													</span>
												</label>
											</div>
											<div class="custom-checkbox custom-control">
												<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
												<label for="checkbox-5" class="custom-control-label">
													<span class="fs-14 ms-2 my-auto">
														<i class="fa fa-star  text-warning"></i>
													</span>
												</label>
											</div>
										</div>
									</div>
									<div class="card-body">
										<h4 class="card-title">Price</h4>
										<div class="mt-3">
											<div class="custom-controls-stacked">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option1" checked>
													<span class="custom-control-label">Under $25</span>
												</label>
											</div>
											<div class="custom-controls-stacked">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option2">
													<span class="custom-control-label">$25 to $50</span>
												</label>
											</div>
											<div class="custom-controls-stacked">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option3">
													<span class="custom-control-label">$50 to $100</span>
												</label>
											</div>
											<div class="custom-controls-stacked">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios1" value="option5">
													<span class="custom-control-label">Other (Specify)</span>
												</label>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn btn-primary btn-block"  href="javascript:void(0);">Apply Filter</a>
									</div>
								</div>
							</div>
							<div class="col-xl-9">
								<div class="row">
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<span class="badge badge-primary">New</span>
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/1.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title">Flower Pot</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-half-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (48)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$74</span>
													<span>$50</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/2.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title">Sofa Chair</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-half-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (18)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$450</span>
													<span>$250</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<span class="badge badge-warning">50%</span>
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/3.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart-o text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title">Watch</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-half-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (12)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$860</span>
													<span>$350</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/4.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title">Table</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (02)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$250</span>
													<span>$130</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/5.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title">Cup</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (06)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$125</span>
													<span>$55</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/6.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart-o text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title">Kurti</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-half-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (16)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$450</span>
													<span>$250</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/8.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart-o text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title"> Rockerz 255 Ear Pods</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-half-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (16)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$450</span>
													<span>$250</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xxl-3 colxl-4 col-lg-4 col-md-6 col-sm-6">
										<div class="card item-card overflow-hidden">
											<div class="item-image">
												<a  href="javascript:void(0);" class="image">
													<img src="{{asset('assets/images/products/11.jpg')}}" alt="img" class="img-fluid w-100  br-0">
												</a>
												<ul class="product-links">
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-heart-o text-danger"></i></a>
													</li>
													<li>
														<a class="product-links-icon"  href="javascript:void(0);"><i class="fa fa-shopping-cart"></i></a>
													</li>
												</ul>
												<div class="product-overly">
													<a  href="javascript:void(0);" class="text-white"><i class="fa fa-eye me-1"></i><span>Quick View</span></a>
												</div>
											</div>
											<div class="card-body text-center">
												<a class="shop-title">Black Digital Camera</a>
												<div class="mb-1 fs-13 mt-2">
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-half-o text-yellow"></i></a>
													<a  href="javascript:void(0);"><i class="fa fa-star-o text-yellow"></i></a>
													<a  href="javascript:void(0);" class="text-muted fs-13"> (16)</a>
												</div>
												<div class="cardprice">
													<span class="type--strikethrough">$450</span>
													<span>$250</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="d-flex justify-content-end">
								<ul class="pagination mb-5">
									<li class="disabled page-item">
										<a class="page-link"  href="javascript:void(0);">‹</a>
									</li>
									<li class="active page-item">
										<a class="page-link"  href="javascript:void(0);">1</a>
									</li>
									<li class="page-item">
										<a class="page-link"  href="javascript:void(0);">2</a>
									</li>
									<li class="page-item">
										<a class="page-link"  href="javascript:void(0);">3</a>
									</li>
									<li class="page-item">
										<a class="page-link"  href="javascript:void(0);">4</a>
									</li>
									<li class="page-item">
										<a class="page-link"  href="javascript:void(0);">5</a>
									</li>
									<li class="page-item">
										<a class="page-link"  href="javascript:void(0);">›</a>
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
