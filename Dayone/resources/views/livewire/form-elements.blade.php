@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Form-Elements</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class=" btn-list">
									<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
									<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
									<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
								</div>
							</div>
						</div>
						<!-- PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Inputs & Textareas </h3>
									</div>
									<div class="card-body pb-2">
										<div class="row row-sm">
											<div class="col-lg">
												<input class="form-control mb-4" placeholder="Input box" type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<input class="form-control mb-4" placeholder="Input box (readonly)" readonly="" type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<input class="form-control mb-4" disabled="" placeholder="Input box (disabled)" type="text">
											</div>
										</div>
										<div class="row row-sm">
											<div class="col-lg">
												<textarea class="form-control mb-4" placeholder="Textarea" rows="3"></textarea>
											</div>
											<div class="col-lg mg-t-10">
												<textarea class="form-control mb-4" placeholder="Textarea (readonly)" readonly="" rows="3"></textarea>
											</div>
											<div class="col-lg mg-t-10">
												<textarea class="form-control mb-4" disabled="" placeholder="Texarea (disabled)" rows="3"></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Input Sizes</h3>
									</div>
									<div class="card-body">
										<div class="row row-sm">
											<div class="col-lg">
												<input class="form-control form-control-sm  mb-4" placeholder="Input sm box" type="text">
												<input class="form-control  mb-4" placeholder="Input box" type="text">
												<input class="form-control form-control-lg" placeholder="Input lg box" type="text">
											</div>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Valid Inputs</h3>
									</div>
									<div class="card-body pb-2">
										<form class="needs-validation was-validated">
											<div class="row row-sm">
												<div class="col-lg-6">
													<div class="form-group">
														<input class="form-control  mb-4 is-valid state-valid" placeholder="Input box (success state)" required="" type="text" value="This is input">
														<textarea class="form-control mb-4 is-valid state-valid" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<input class="form-control mb-4 is-invalid state-invalid" placeholder="Input box (invalid state)" required="" type="text">
														<textarea class="form-control mb-4 is-invalid state-invalid" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div  class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Form elements</h3>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label class="form-label">Country</label>
											<select name="country" class="form-control custom-select select2" data-placeholder="Select Country">
												<option label="Select Country"></option>
												<option value="br">Brazil</option>
												<option value="cz">Czech Republic</option>
												<option value="de">Germany</option>
												<option value="pl" selected>Poland</option>
											</select>
										</div>
										<div class="form-group">
											<label class="form-label">Input group</label>
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search for...">
												<span class="input-group-append">
													<button class="btn btn-primary" >Go!</button>
												</span>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Input group buttons</label>
											<div class="input-group">
												<input type="text" class="form-control">
												<div class="input-group-append">
													<button  class="btn btn-primary">Action</button>
													<button data-bs-toggle="dropdown"  class="btn btn-primary dropdown-toggle"></button>
													<div class="dropdown-menu dropdown-menu-end">
														<a class="dropdown-item" href="javascript:void(0)">News</a>
														<a class="dropdown-item" href="javascript:void(0)">Messages</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="javascript:void(0)">Edit Profile</a>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Separated inputs</label>
											<div class="row ">
												<div class="col">
													<input type="text" class="form-control" placeholder="Search for...">
												</div>
												<span class="col-auto">
													<button class="btn btn-sm btn-secondary" ><i class="fe fe-search"></i></button>
												</span>
											</div>
										</div>
										<div class="form-group">

											<div class="input-icon">
												<span class="input-icon-addon">
													<i class="fe fe-user"></i>
												</span>
												<input type="text" class="form-control" placeholder="Username">
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">ZIP Code</label>
											<div class="row gutters-sm">
												<div class="col">
													<input type="text" class="form-control" placeholder="Search for...">
												</div>
												<span class="col-auto align-self-center">
													<span class="form-help" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="<p>ZIP Code must be US or CDN format. You can use an extended ZIP+4 code to determine address more accurately.</p>
													<p class='mb-0'><a href=''>USP ZIP codes lookup tools</a></p>
													"></span>
												</span>
											</div>
										</div>
										<div class="form-group">
											<label class="form-label">Bootstrap's Custom File Input</label>
												<input class="form-control" type="file">
										</div>
										<div class="form-group m-0">
											<label class="form-label">Date of birth</label>
											<div class="row ">
												<div class="col-5">
													<select name="user[month]" class="form-control custom-select select2" data-placeholder="Select Month">
														<option label="Select Month"></option>
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option selected="selected" value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
												<div class="col-3">
													<select name="user[day]" class="form-control custom-select select2" data-placeholder="Select Day">
														<option label="Select Day"></option>
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
														<option value="6">6</option>
														<option value="7">7</option>
														<option value="8">8</option>
														<option value="9">9</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option selected="selected" value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-4">
													<select name="user[year]" class="form-control custom-select select2" data-placeholder="Select Year">
														<option label="Select Year"></option>
														<option value="2014">2014</option>
														<option value="2013">2013</option>
														<option value="2012">2012</option>
														<option value="2011">2011</option>
														<option value="2010">2010</option>
														<option value="2009">2009</option>
														<option value="2008">2008</option>
														<option value="2007">2007</option>
														<option value="2006">2006</option>
														<option value="2005">2005</option>
														<option value="2004">2004</option>
														<option value="2003">2003</option>
														<option value="2002">2002</option>
														<option value="2001">2001</option>
														<option value="2000">2000</option>
														<option value="1999">1999</option>
														<option value="1998">1998</option>
														<option value="1997">1997</option>
														<option value="1996">1996</option>
														<option value="1995">1995</option>
														<option value="1994">1994</option>
														<option value="1993">1993</option>
														<option value="1992">1992</option>
														<option value="1991">1991</option>
														<option value="1990">1990</option>
														<option selected="selected" value="1989">1989</option>
														<option value="1988">1988</option>
														<option value="1987">1987</option>
														<option value="1986">1986</option>
														<option value="1985">1985</option>
														<option value="1984">1984</option>
														<option value="1983">1983</option>
														<option value="1982">1982</option>
														<option value="1981">1981</option>
														<option value="1980">1980</option>
														<option value="1979">1979</option>
														<option value="1978">1978</option>
														<option value="1977">1977</option>
														<option value="1976">1976</option>
														<option value="1975">1975</option>
														<option value="1974">1974</option>
														<option value="1973">1973</option>
														<option value="1972">1972</option>
														<option value="1971">1971</option>
														<option value="1970">1970</option>
														<option value="1969">1969</option>
														<option value="1968">1968</option>
														<option value="1967">1967</option>
														<option value="1966">1966</option>
														<option value="1965">1965</option>
														<option value="1964">1964</option>
														<option value="1963">1963</option>
														<option value="1962">1962</option>
														<option value="1961">1961</option>
														<option value="1960">1960</option>
														<option value="1959">1959</option>
														<option value="1958">1958</option>
														<option value="1957">1957</option>
														<option value="1956">1956</option>
														<option value="1955">1955</option>
														<option value="1954">1954</option>
														<option value="1953">1953</option>
														<option value="1952">1952</option>
														<option value="1951">1951</option>
														<option value="1950">1950</option>
														<option value="1949">1949</option>
														<option value="1948">1948</option>
														<option value="1947">1947</option>
														<option value="1946">1946</option>
														<option value="1945">1945</option>
														<option value="1944">1944</option>
														<option value="1943">1943</option>
														<option value="1942">1942</option>
														<option value="1941">1941</option>
														<option value="1940">1940</option>
														<option value="1939">1939</option>
														<option value="1938">1938</option>
														<option value="1937">1937</option>
														<option value="1936">1936</option>
														<option value="1935">1935</option>
														<option value="1934">1934</option>
														<option value="1933">1933</option>
														<option value="1932">1932</option>
														<option value="1931">1931</option>
														<option value="1930">1930</option>
														<option value="1929">1929</option>
														<option value="1928">1928</option>
														<option value="1927">1927</option>
														<option value="1926">1926</option>
														<option value="1925">1925</option>
														<option value="1924">1924</option>
														<option value="1923">1923</option>
														<option value="1922">1922</option>
														<option value="1921">1921</option>
														<option value="1920">1920</option>
														<option value="1919">1919</option>
														<option value="1918">1918</option>
														<option value="1917">1917</option>
														<option value="1916">1916</option>
														<option value="1915">1915</option>
														<option value="1914">1914</option>
														<option value="1913">1913</option>
														<option value="1912">1912</option>
														<option value="1911">1911</option>
														<option value="1910">1910</option>
														<option value="1909">1909</option>
														<option value="1908">1908</option>
														<option value="1907">1907</option>
														<option value="1906">1906</option>
														<option value="1905">1905</option>
														<option value="1904">1904</option>
														<option value="1903">1903</option>
														<option value="1902">1902</option>
														<option value="1901">1901</option>
														<option value="1900">1900</option>
														<option value="1899">1899</option>
														<option value="1898">1898</option>
														<option value="1897">1897</option>
													</select>
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
							<div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Gerenal Elements</h4>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-lg-6 col-md-12">
												<form class="form-horizontal">
													<div class="form-group row">
														<label class="col-md-3 form-label">Text</label>
														<div class="col-md-9">
															<input type="text" class="form-control" value="Typing.....">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label" for="example-email">Email</label>
														<div class="col-md-9">
															<input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Password</label>
														<div class="col-md-9">
															<input type="password" class="form-control" value="password">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Placeholder</label>
														<div class="col-md-9">
															<input type="text" class="form-control" placeholder="text">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Readonly</label>
														<div class="col-md-9">
															<input type="text" class="form-control" readonly="" value="Readonly value">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Disabled</label>
														<div class="col-md-9">
															<input type="text" class="form-control" disabled="" value="Disabled value">
														</div>
													</div>
													<div class="form-group row mb-0">
														<label class="col-md-3 form-label">Number</label>
														<div class="col-md-9">
															<input class="form-control" type="number" name="number">
														</div>
													</div>
												</form>
											</div>
											<div class="col-lg-6 col-md-12">
												<form class="form-horizontal">
													<div class="form-group row">
														<label class="col-md-3 form-label">Name</label>
														<div class="col-md-9">
															<input class="form-control" type="text" name="name">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Text area</label>
														<div class="col-md-9">
															<textarea class="form-control" rows="3">Hiiiii.....</textarea>
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">URL</label>
														<div class="col-md-9">
															<input class="form-control" type="url" name="url">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Search</label>
														<div class="col-md-9">
															<input class="form-control" type="search" name="search">
														</div>
													</div>
													<div class="form-group row">
														<label class="col-md-3 form-label">Tel</label>
														<div class="col-md-9">
															<input class="form-control" type="tel" name="tel">
														</div>
													</div>
													<div class="form-group row mb-0">
														<label class="col-md-3 form-label">Input Select</label>
														<div class="col-md-9">
															<select class="form-control select2" data-placeholder="Choose One">
																<option label="Choose one"></option>
																<option>Apple</option>
																<option>Orange</option>
																<option>Mango</option>
																<option>Grapes</option>
																<option>Banana</option>
															</select>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<form method="post" class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">form elements</h3>
									</div>
									<div class=" card-body">
										<div class="row">
											<div class="col-md-6 col-lg-6">
												<div class="form-group">
													<div class="form-label">Toggle switch single</div>
													<label class="custom-switch">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">I agree with terms and conditions</span>
													</label>
												</div>
												<div class="form-group ">
													<label class="form-label">Your skills</label>
													<div class="selectgroup selectgroup-pills">
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
															<span class="selectgroup-button">HTML</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="CSS" class="selectgroup-input">
															<span class="selectgroup-button">CSS</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="PHP" class="selectgroup-input">
															<span class="selectgroup-button">PHP</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
															<span class="selectgroup-button">JavaScript</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Angular" class="selectgroup-input">
															<span class="selectgroup-button">Angular</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Java" class="selectgroup-input">
															<span class="selectgroup-button">Java</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="C++" class="selectgroup-input">
															<span class="selectgroup-button">C++</span>
														</label>
													</div>
												</div>
												<div class="form-group m-0">
													<label class="form-label">Select Color</label>
													<div class="row ">
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="azure" class="colorinput-input" checked />
																<span class="colorinput-color bg-azure"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="indigo" class="colorinput-input"  />
																<span class="colorinput-color bg-indigo"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="purple" class="colorinput-input" />
																<span class="colorinput-color bg-purple"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="pink" class="colorinput-input" />
																<span class="colorinput-color bg-pink"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="red" class="colorinput-input" />
																<span class="colorinput-color bg-red"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="orange" class="colorinput-input" />
																<span class="colorinput-color bg-orange"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="yellow" class="colorinput-input" />
																<span class="colorinput-color bg-yellow"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="lime" class="colorinput-input" />
																<span class="colorinput-color bg-lime"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="green" class="colorinput-input" />
																<span class="colorinput-color bg-green"></span>
															</label>
														</div>
														<div class="col-auto">
															<label class="colorinput">
																<input name="color" type="checkbox" value="teal" class="colorinput-input" />
																<span class="colorinput-color bg-teal"></span>
															</label>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-6 col-lg-6">
												<div class="form-group ">
													<div class="form-label">Radios</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked>
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios" value="option3" disabled>
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-radio">
															<input type="radio" class="custom-control-input" name="example-radios2" value="option4" disabled checked>
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>

												<div class="form-group m-0">
													<div class="form-label">Checkboxes</div>
													<div class="custom-controls-stacked">
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
															<span class="custom-control-label">Option 1</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
															<span class="custom-control-label">Option 2</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox3" value="option3" disabled>
															<span class="custom-control-label">Option Disabled</span>
														</label>
														<label class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="example-checkbox4" value="option4" checked disabled>
															<span class="custom-control-label">Option Disabled Checked</span>
														</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<div class="card-title">Switches </div>
									</div>
									<div class="card-body">
										 <ul class="list-group">
											<li class="list-group-item">
												Bootstrap Switch Default
												<div class="material-switch pull-right">
													<input id="someSwitchOptionDefault" name="someSwitchOption001" type="checkbox" />
													<label for="someSwitchOptionDefault" class="label-default"></label>
												</div>
											</li>
											<li class="list-group-item">
												Bootstrap Switch Primary
												<div class="material-switch pull-right">
													<input id="someSwitchOptionPrimary" name="someSwitchOption001" type="checkbox"/>
													<label for="someSwitchOptionPrimary" class="label-primary"></label>
												</div>
											</li>
											<li class="list-group-item">
												Bootstrap Switch Success
												<div class="material-switch pull-right">
													<input id="someSwitchOptionSuccess" name="someSwitchOption001" type="checkbox"/>
													<label for="someSwitchOptionSuccess" class="label-success"></label>
												</div>
											</li>
											<li class="list-group-item">
												Bootstrap Switch Info
												<div class="material-switch pull-right">
													<input id="someSwitchOptionInfo" name="someSwitchOption001" type="checkbox"/>
													<label for="someSwitchOptionInfo" class="label-info"></label>
												</div>
											</li>
											<li class="list-group-item">
												Bootstrap Switch Warning
												<div class="material-switch pull-right">
													<input id="someSwitchOptionWarning" name="someSwitchOption001" type="checkbox"/>
													<label for="someSwitchOptionWarning" class="label-warning"></label>
												</div>
											</li>
											<li class="list-group-item">
												Bootstrap Switch Danger
												<div class="material-switch pull-right">
													<input id="someSwitchOptionDanger" name="someSwitchOption001" type="checkbox"/>
													<label for="someSwitchOptionDanger" class="label-danger"></label>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

                        <!-- ROW -->
						<div class="row">
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Vertical Form</h4>
									</div>
									<div class="card-body">
										<form>
											<div class="">
												<div class="form-group">
													<label for="exampleInputEmail1" class="form-label">Email address</label>
													<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1" class="form-label">Password</label>
													<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
												</div>
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
													<span class="custom-control-label">Check me Out</span>
												</label>
											</div>
											<a href="javascript:void(0);" class="btn btn-primary mt-4 mb-0">Submit</a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h4 class="card-title">Horizontal Form</h4>
									</div>
									<div class="card-body">
										<form class="form-horizontal">
											<div class="form-group row">
												<label for="inputName" class="col-md-3 form-label">User Name</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="inputName" placeholder="Name">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputEmail3" class="col-md-3 form-label">Email</label>
												<div class="col-md-9">
													<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputPassword3" class="col-md-3 form-label">Password</label>
												<div class="col-md-9">
													<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
												</div>
											</div>
											<div class="form-group mb-0 row justify-content-end">
												<div class="col-md-9">
													<label class="custom-control custom-checkbox">
														<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
														<span class="custom-control-label">Check me Out</span>
													</label>
												</div>
											</div>
											<div class="form-group mb-0 mt-4 row justify-content-end">
												<div class="col-md-9">
													<a  href="javascript:void(0);" class="btn btn-primary">Sign in</a>
													<a  href="javascript:void(0);" class="btn btn-secondary">Cancel</a>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

                        <!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Shipping Details</h3>
									</div>
									<div class="card-body">
										<div class="form-row">
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="name1" placeholder="First Name">
												</div>
											</div>
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="name2" placeholder="Last Name">
												</div>
											</div>
										</div>
										<div class="form-group ">
											<input type="email" class="form-control" id="inputEmail5" placeholder="Email Address">
										</div>
										<div class="form-group ">
											<input type="text" class="form-control" id="address" placeholder="AddressLine1">
										</div>
										<div class="form-row">
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="country" placeholder="Country">
												</div>
											</div>
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="region" placeholder="Country/Region">
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="text" class="form-control" id="city" placeholder="City">
												</div>
											</div>
											<div class="form-group col-md-6 mb-0">
												<div class="form-group">
													<input type="number" class="form-control" id="postal" placeholder="Zip/Postal">
												</div>
											</div>
										</div>
										<div class="form-footer mt-2">
											<a  href="javascript:void(0);" class="btn btn-primary">Confirm  Details</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">CheckOut</h3>
										<div class="card-options">
											<div class="btn-group">
												<button  class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
													Visa<span class="caret"></span>
												</button>
												<ul class="dropdown-menu">
													<li><a  href="javascript:void(0);">Visa</a></li>
													<li><a  href="javascript:void(0);">Rupay</a></li>
													<li><a  href="javascript:void(0);">Mastercard</a></li>
													<li><a  href="javascript:void(0);">PayPal</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="form">
											<div class="form-group">
												<div class="form-group">
													<label class="form-label">CardHolder Name</label>
													<input type="text" class="form-control" id="name11" placeholder="First Name">
												</div>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-9 mb-0">
												<div class="form-group">
													<label class="form-label">Credit card Number</label>
													<input type="number" class="form-control" id="number" placeholder="number">
												</div>
											</div>
											<div class="form-group col-md-3 mb-0">
												<div class="form-group">
													<label class="form-label">CVV Number</label>
													<input type="number" class="form-control" id="region1" placeholder="675">
												</div>
											</div>
										</div>
										<div class="form-group m-0">
											<label class="form-label">Expiration Date</label>
											<div class="row ">
												<div class="col-6">
													<select name="user[month]" class="form-control custom-select select2" data-placeholder="Select Month">
														<option label="Select Month"></option>
														<option value="1">January</option>
														<option value="2">February</option>
														<option value="3">March</option>
														<option value="4">April</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">August</option>
														<option value="9">September</option>
														<option value="10">October</option>
														<option value="11">November</option>
														<option value="12">December</option>
													</select>
												</div>
												<div class="col-6">
													<select name="user[year]" class="form-control custom-select select2" data-placeholder="Select Year">
														<option label="Select Year"></option>
														<option value="2014">2040</option>
														<option value="2014">2039</option>
														<option value="2014">2037</option>
														<option value="2014">2036</option>
														<option value="2014">2035</option>
														<option value="2014">2034</option>
														<option value="2014">2033</option>
														<option value="2014">2032</option>
														<option value="2014">2031</option>
														<option value="2014">2030</option>
														<option value="2014">2030</option>
														<option value="2013">2029</option>
														<option value="2012">2028</option>
														<option value="2011">2027</option>
														<option value="2010">2026</option>
														<option value="2009">2025</option>
														<option value="2008">2024</option>
														<option value="2007">2023</option>
														<option value="2006">2022</option>
														<option value="2005">2021</option>
														<option value="2004">2020</option>
														<option value="2003">2019</option>
														<option value="2002">2018</option>
													</select>
												</div>
											</div>
										</div>
										<div class="mt-4 mb-0 text-dark">
											Your Credit  card information is encrypted
										</div>
										<div class="form-footer mt-2">
											<a  href="javascript:void(0);" class="btn btn-primary">Make Payment</a>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!-- END ROW -->

                        <!-- ROW -->
						<div class="row">
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Billing Information</h3>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">First Name <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="First name">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="Last name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Company Name <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="Company name">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Email address <span class="text-red">*</span></label>
													<input type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Country <span class="text-red">*</span></label>
													<select class="form-control custom-select select2" data-placeholder="Select">
														<option label="Select"></option>
														<option value="1">Germany</option>
														<option value="2">Canada</option>
														<option value="3">Usa</option>
														<option value="4">Aus</option>
													</select>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="form-label">Address <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="Home Address">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">City <span class="text-red">*</span></label>
													<input type="text" class="form-control" placeholder="City">
												</div>
											</div>
											<div class="col-sm-6 col-md-6">
												<div class="form-group">
													<label class="form-label">Postal Code <span class="text-red">*</span></label>
													<input type="number" class="form-control" placeholder="ZIP Code">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-bottom-0">
										<h3 class="card-title">Payment Information</h3>
									</div>
									<div class="card-body">
										<div class="card-pay">
											<ul class="tabs-menu nav">
												<li class=""><a href="#tab20" class="active" data-bs-toggle="tab"><i class="fa fa-credit-card"></i> Credit Card</a></li>
												<li><a href="#tab21" data-bs-toggle="tab" class=""><i class="fa fa-paypal"></i>  Paypal</a></li>
												<li><a href="#tab22" data-bs-toggle="tab" class=""><i class="fa fa-university"></i>  Bank Transfer</a></li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active show" id="tab20">
													<div class="bg-danger-transparent-2 text-danger px-4 py-2 br-3 mb-4" role="alert">Please Enter Valid Details</div>
													<div class="form-group">
														<label class="form-label">CardHolder Name</label>
														<input type="text" class="form-control" placeholder="First Name">
													</div>
													<div class="form-group">
														<label class="form-label">Card number</label>
														<div class="input-group">
															<input type="text" class="form-control" placeholder="Search for...">
															<span class="input-group-append">
																<button class="btn btn-secondary box-shadow-0" ><i class="fa fa-cc-visa"></i> &nbsp; <i class="fa fa-cc-amex"></i> &nbsp;
																<i class="fa fa-cc-mastercard"></i></button>
															</span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-8">
															<div class="form-group">
																<label class="form-label">Expiration</label>
																<div class="input-group">
																	<input type="number" class="form-control" placeholder="MM" name="Month">
																	<input type="number" class="form-control" placeholder="YY" name="Year">
																</div>
															</div>
														</div>
														<div class="col-sm-4">
															<div class="form-group">
																<label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
																<input type="number" class="form-control" required="">
															</div>
														</div>
													</div>
													<a  href="javascript:void(0);" class="btn  btn-lg btn-primary">Confirm</a>
												</div>
												<div class="tab-pane" id="tab21">
													<p>Paypal is easiest way to pay online</p>
													<p><a  href="javascript:void(0);" class="btn btn-primary"><i class="fa fa-paypal"></i> Log in my Paypal</a></p>
													<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
												</div>
												<div class="tab-pane" id="tab22">
													<p>Bank account details</p>
													<dl class="card-text">
													  <dt>BANK: </dt>
													  <dd> THE UNION BANK 0456</dd>
													</dl>
													<dl class="card-text">
													  <dt>Account number: </dt>
													  <dd> 67542897653214</dd>
													</dl>
													<dl class="card-text">
													  <dt>IBAN: </dt>
													  <dd>543218769</dd>
													</dl>
													<p class="mb-0"><strong>Note:</strong> Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
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

        <!-- INTERNAL SELECT2 JS -->
        <script src="{{asset('assets/js/select2.js')}}"></script>

@endsection
