@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Typhography</div>
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
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Default Heading Text</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
											<h1>h1. Heading</h1>
											<h2>h2. Heading</h2>
											<h3>h3. Heading</h3>
											<h4>h4. Heading</h4>
											<h5>h5. Heading</h5>
											<h6>h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Heading with color Text</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using standard <code>h1</code> to <code>h6</code> html tags</p>
											<h1 class="text-primary">h1. Heading</h1>
											<h2  class="text-secondary">h2. Heading</h2>
											<h3  class="text-success">h3. Heading</h3>
											<h4  class="text-danger">h4. Heading</h4>
											<h5  class="text-info">h5. Heading</h5>
											<h6  class="text-warning">h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Heading-Inverse</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using <code>heading-inverse</code> css</p>
											<h1 class="heading-inverse">h1. Heading</h1>
											<h2 class="heading-inverse">h2. Heading</h2>
											<h3 class="heading-inverse">h3. Heading</h3>
											<h4 class="heading-inverse">h4. Heading</h4>
											<h5 class="heading-inverse">h5. Heading</h5>
											<h6 class="heading-inverse">h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Heading primary to danger</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Examples using <code>heading-primary</code> to <code>heading-danger</code> css</p>
											<h1 class="heading-inverse bg-primary ">h1. Heading</h1>
											<h2 class="heading-inverse bg-secondary">h2. Heading</h2>
											<h3 class="heading-inverse bg-success">h3. Heading</h3>
											<h4 class="heading-inverse bg-info">h4. Heading</h4>
											<h5 class="heading-inverse bg-warning">h5. Heading</h5>
											<h6 class="heading-inverse bg-danger">h6. Heading</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Paragraph Text</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
											<p class="lead">Most designers set their type arbitrarily, either by pulling values out of the sky or by adhering to a baseline grid. The former case isn’t worth discussing here, but the latter requires a closer look.</p>
											<p>You can use the mark tag to <mark>highlight</mark> text.</p>
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
										<h3 class="card-title">Text alignment</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Easily realign text to components with text alignment classes.</p>
											<div class="example">
												<p class="text-start">Left aligned text on all viewport sizes.</p>
												<p class="text-center">Center aligned text on all viewport sizes.</p>
												<p class="text-end">Right aligned text on all viewport sizes.</p>
												<p class="text-justify m-0">Both aligned text on all viewport sizes. Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Text transform</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Transform text in components with text capitalization classes.</p>
											<div class="example">
												<p class="text-lowercase">Lowercased text.</p>
												<p class="text-uppercase">Uppercased text.</p>
												<p class="text-capitalize m-0">Capitalized text.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Letter spacing</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Utilities for controlling the tracking (letter spacing) of an element.</p>
											<div class="example">
												<p class="tracking-tight">Lorem ipsum dolor sit amet. Tight letter spacing.</p>
												<p class="tracking-normal">Lorem ipsum dolor sit amet. Normal letter spacing.</p>
												<p class="tracking-wide m-0">Lorem ipsum dolor sit amet. Wide letter spacing.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Line Height</h3>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<p>Utilities for controlling the leading (line height) of an element.</p>
											<div class="example">
												<p class="leading-none">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-tight">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-normal">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
												<p class="leading-loose m-0">Lorem ipsum dolor sit amet.<br />
													Dolor sit amet.
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Text-styles</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<p>You can use the mark tag to
											<mark>highlight</mark> text.
										</p>
										<p>
											<del>This line of text is meant to be treated as deleted text.</del>
										</p>
										<p>
											<s>This line of text is meant to be treated as no longer accurate.</s>
										</p>
										<p>
											<ins>This line of text is meant to be treated as an addition to the document.</ins>
										</p>
										<p><u>This line of text will render as underlined</u></p>
										<p>
											<small>This line of text is meant to be treated as fine print.</small>
										</p>
										<p><strong>This line rendered as bold text.</strong></p>
										<p><em>This line rendered as italicized text.</em></p>
										<p><b>This line rendered as italicized text.</b></p>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Unorder List Style</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ul class="list-style">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ul>
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Unorder List Style2</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ul class="list-style2">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ul>
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Unorder List Style3</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ul class="list-style3">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ul>
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Unorder List Style4</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ul class="list-style4">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ul>
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Unorder List Style5</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ul class="list-style5">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ul>
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Unorder List Style6</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ul class="list-style6">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ul>
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Order list</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ol class="order-list">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ol class="order-list">
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ol>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ol>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Order With unorder</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<ol class="order-list">
												  <li>Lorem ipsum dolor sit amet</li>
												  <li>Consectetur adipiscing elit</li>
												  <li>Integer molestie lorem at massa</li>
												  <li>Facilisis in pretium nisl aliquet</li>
												  <li>Nulla volutpat aliquam velit
													<ul class="list-style4 ps-5">
													  <li>Phasellus iaculis neque</li>
													  <li>Purus sodales ultricies</li>
													  <li>Vestibulum laoreet porttitor sem</li>
													  <li>Ac tristique libero volutpat at</li>
													</ul>
												  </li>
												  <li>Faucibus porta lacus fringilla vel</li>
												  <li>Aenean sit amet erat nunc</li>
												  <li>Eget porttitor lorem</li>
												</ol>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Inline Style</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<ul class="list-inline">
										  <li class="list-inline-item">Lorem ipsum</li>
										  <li class="list-inline-item">Phasellus iaculis</li>
										  <li class="list-inline-item">Nulla volutpat</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Description Align</h3>
									</div>
									<div class="card-body ps-5 pe-5">
										<dl class="row">
										  <dt class="col-sm-3">Description lists</dt>
										  <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

										  <dt class="col-sm-3">Euismod</dt>
										  <dd class="col-sm-9">
											<p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
											<p>Donec id elit non mi porta gravida at eget metus.</p>
										  </dd>

										  <dt class="col-sm-3">Malesuada porta</dt>
										  <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

										  <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
										  <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

										  <dt class="col-sm-3">Nesting</dt>
										  <dd class="col-sm-9">
											<dl class="row">
											  <dt class="col-sm-4">Nested definition list</dt>
											  <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
											</dl>
										  </dd>
										</dl>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Quote Left</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<blockquote class="blockquote">
													<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="card">
											<div class="card-header border-bottom-0">
												<h3 class="card-title">Quote Center</h3>
											</div>
											<div class="card-body ps-5 pe-5">
												<blockquote class="blockquote text-center">
													<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
													<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
												</blockquote>
											</div>
										</div>
									</div>
									<div class="col-lg-12">
										<!--div-->
										<div class="card">
											<div class="card-header border-bottom-0">
												<div class="card-title">
													Font Size
												</div>
											</div>
											<div class="card-body">
												<div class="mb-4">
													<p class="fs-5">Demo Content Title</P>
													<p class="fs-6">Demo Content Title</P>
													<p class="fs-7">Demo Content Title</P>
													<p class="fs-8">Demo Content Title</P>
													<p class="fs-9">Demo Content Title</P>
													<p class="fs-10">Demo Content Title</P>
													<p class="fs-11">Demo Content Title</P>
													<p class="fs-12">Demo Content Title</P>
													<p class="fs-13">Demo Content Title</P>
													<p class="fs-14">Demo Content Title</P>
													<p class="fs-15">Demo Content Title</P>
													<p class="fs-16">Demo Content Title</P>
													<p class="fs-17">Demo Content Title</P>
													<p class="fs-18">Demo Content Title</P>
													<p class="fs-19">Demo Content Title</P>
													<p class="fs-20">Demo Content Title</P>
												</div>
												<div class="table-responsive">
													<table class="table table-bordered text-nowrap mg-t-0">
														<tbody>
															<tr>
																<td class=""><b>Classes</b></td>
																<td><code>.fs-[size]</code></td>
															</tr>
															<tr>
																<td class=""><b>Values</b></td>
																<td>5 | 6 | 7 | 8 | 9 | 10 | 11 | 12 | 13 | 14 | 15 | 16 | 18 | 20 | 25 | 30 | ... | 100</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!--/div-->

										<!--div-->
										<div class="card">
											<div class="card-header border-bottom-0">
												<div class="card-title">
													Font Weight
												</div>
											</div>
											<div class="card-body">
												<div class="mb-4">
													<p class="font-weight-light">Demo Content Title</P>
													<p class="font-weight-normal">Demo Content Title</P>
													<p class="font-weight-semibold">Demo Content Title</P>
													<p class="font-weight-bold">Demo Content Title</P>
												</div>
												<div class="table-responsive">
													<table class="table  table-bordered text-nowrap mg-t-0 mg-b-0">
														<tbody>
															<tr>
																<td class=""><b>Classes</b></td>
																<td><code>.font-[weight]</code></td>
															</tr>
															<tr>
																<td class=""><b>Weight</b></td>
																<td>bold | semibold | normal | light </td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!--/div-->

										<!--div-->
										<div class="card">
											<div class="card-header border-bottom-0">
												<div class="card-title">
													Font Color
												</div>
											</div>
											<div class="card-body">
												<div class="mb-4">
													<p class="text-primary">Demo Content Title</P>
													<p class="text-secondary">Demo Content Title</P>
													<p class="text-info">Demo Content Title</P>
													<p class="text-success">Demo Content Title</P>
													<p class="text-warning">Demo Content Title</P>
													<p class="text-danger">Demo Content Title</P>
													<p class="text-purple">Demo Content Title</P>
													<p class="text-orange">Demo Content Title</P>
												</div>
												<div class="table-responsive">
													<table class="table table-bordered text-nowrap mg-t-0">
														<tbody>
															<tr>
																<td class="wd-20p"><b>Classes</b></td>
																<td><code>.text-[color]</code></td>
															</tr>
															<tr>
																<td class="wd-20p"><b>Colors</b></td>
																<td>primary | success | warning | danger | info | indigo | purple | orange | teal | pink | black | white | inverse</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<!--/div-->
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
