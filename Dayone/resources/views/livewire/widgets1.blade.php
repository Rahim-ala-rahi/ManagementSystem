@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Widgets</div>
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
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon text-success icon-dropshadow-success" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
											<path opacity=".0" d="M3.31,11 L5.51,19.01 L18.5,19 L20.7,11 L3.31,11 Z M12,17 C10.9,17 10,16.1 10,15 C10,13.9 10.9,13 12,13 C13.1,13 14,13.9 14,15 C14,16.1 13.1,17 12,17 Z"></path>
											<path d="M22,9 L17.21,9 L12.83,2.44 C12.64,2.16 12.32,2.02 12,2.02 C11.68,2.02 11.36,2.16 11.17,2.45 L6.79,9 L2,9 C1.45,9 1,9.45 1,10 C1,10.09 1.01,10.18 1.04,10.27 L3.58,19.54 C3.81,20.38 4.58,21 5.5,21 L18.5,21 C19.42,21 20.19,20.38 20.43,19.54 L22.97,10.27 L23,10 C23,9.45 22.55,9 22,9 Z M12,4.8 L14.8,9 L9.2,9 L12,4.8 Z M18.5,19 L5.51,19.01 L3.31,11 L20.7,11 L18.5,19 Z M12,13 C10.9,13 10,13.9 10,15 C10,16.1 10.9,17 12,17 C13.1,17 14,16.1 14,15 C14,13.9 13.1,13 12,13 Z"></path>
										</svg>
										<p class=" mb-1 ">All Orders</p>
										<h2 class="mb-1 font-weight-bold">3257</h2>
										<span class="mb-1 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 43.2</span> than last month</span>
										<div class="progress progress-sm mt-3 bg-success-transparent">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 78%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon text-primary icon-dropshadow-primary" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
											<path opacity=".0" d="M12.07,6.01 C8.2,6.01 5.07,9.14 5.07,13.01 C5.07,16.88 8.2,20.01 12.07,20.01 C15.94,20.01 19.07,16.88 19.07,13.01 C19.07,9.14 15.94,6.01 12.07,6.01 Z M13.07,14.01 L11.07,14.01 L11.07,8.01 L13.07,8.01 L13.07,14.01 Z"></path>
											<path d="M9.07,1.01 L15.07,1.01 L15.07,3.01 L9.07,3.01 L9.07,1.01 Z M11.07,8.01 L13.07,8.01 L13.07,14.01 L11.07,14.01 L11.07,8.01 Z M19.1,7.39 L20.52,5.97 C20.09,5.46 19.62,4.98 19.11,4.56 L17.69,5.98 C16.14,4.74 14.19,4 12.07,4 C7.1,4 3.07,8.03 3.07,13 C3.07,17.97 7.09,22 12.07,22 C17.05,22 21.07,17.97 21.07,13 C21.07,10.89 20.33,8.93 19.1,7.39 Z M12.07,20.01 C8.2,20.01 5.07,16.88 5.07,13.01 C5.07,9.14 8.2,6.01 12.07,6.01 C15.94,6.01 19.07,9.14 19.07,13.01 C19.07,16.88 15.94,20.01 12.07,20.01 Z"></path></svg>
										<p class=" mb-1 ">Pending Orders</p>
										<h2 class="mb-1 font-weight-bold">1658</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 19.8</span> than last month</span>
										<div class="progress progress-sm mt-3 bg-primary-transparent">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" style="width: 58%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<svg class="card-custom-icon text-danger icon-dropshadow-danger" x="1008" y="1248" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false">
											 <path d="M17.65,6.35 C16.2,4.9 14.21,4 12,4 C7.58,4 4.01,7.58 4.01,12 C4.01,16.42 7.58,20 12,20 C15.73,20 18.84,17.45 19.73,14 L17.65,14 C16.83,16.33 14.61,18 12,18 C8.69,18 6,15.31 6,12 C6,8.69 8.69,6 12,6 C13.66,6 15.14,6.69 16.22,7.78 L13,11 L20,11 L20,4 L17.65,6.35 Z"></path></svg>
										<p class=" mb-1 ">Refund Requests</p>
										<h2 class="mb-1 font-weight-bold">168</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> than last month</span>
										<div class="progress progress-sm mt-3 bg-danger-transparent">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 58%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!-- END ROW -->

                        <!-- ROW -->
						<div class="row">
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<i class="mdi mdi-file-outline card-custom-icon icon-dropshadow-primary text-primary fs-60"></i>
										<p class=" mb-1">Page Views</p>
										<h2 class="mb-1 font-weight-bold">234k</h2>
										<span class="mb-1 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 43.2</span> than last month</span>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<i class="mdi mdi-clock card-custom-icon icon-dropshadow-warning text-warning fs-60"></i>
										<p class=" mb-1">Time On Site</p>
										<h2 class="mb-1 font-weight-bold">12m 3s</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 19.8</span> than last month</span>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<i class="mdi mdi-heart-outline card-custom-icon icon-dropshadow-success text-success fs-60"></i>
										<p class=" mb-1">Impressions</p>
										<h2 class="mb-1 font-weight-bold">168</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> than last month</span>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<i class="mdi mdi-account-multiple-outline card-custom-icon icon-dropshadow-secondary text-secondary fs-60"></i>
										<p class=" mb-1">Total Followers</p>
										<h2 class="mb-1 font-weight-bold">3456k</h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> than last month</span>
									</div>
								</div>
							</div>
						</div>
                        <!-- END ROW -->

                        <!-- ROW -->
						<div class="row">
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card bg-primary text-white">
									<div class="card-body text-center">
										<img class="avatar avatar-xxl brround mb-5" src="{{asset('assets/images/users/16.jpg')}}" alt="img">
										<h4 class="font-weight-semibold mb-1">John Thomson</h4>
										<p class="fs-12 mb-0">UI/UX Designer</p>
									</div>
									<div class="card-body border-transparent">
										<div class="row mb-3">
											<div class="col-4 fs-12">Previous</div>
											<div class="col-8 font-weight-semibold fs-12">New Tech Software Pvt Ltd</div>
										</div>
										<div class="row">
											<div class="col-4 fs-12">Education</div>
											<div class="col-8 font-weight-semibold fs-12">Bachelors of Engineering</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">Interview Schedule</div>
									</div>
									<div class="card-body">
										<h3 class="font-weight-bold">04<sup>th</sup> July, 2020</h3>
										<div class="d-flex mb-3">
											<div class="icon icon-shape bg-primary rounded-circle text-white mb-0 me-3">
												<div>04</div>
											</div>
											<div>
												<p class="mb-1">New Modal Technologies<br> <b>Software Pvt ltd</b></p>
												<small class="text-muted">10.04am</small>
											</div>
										</div>
										<div class="d-flex">
											<div class="icon icon-shape bg-secondary rounded-circle text-white mb-0 me-3">
												<div>04</div>
											</div>
											<div>
												<p class="mb-1">New Modal Technologies<br> <b>Software Pvt ltd</b></p>
												<small class="text-muted">12.04pm</small>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Revenue of this Month</h3>
									</div>
									<div class="card-body p-6">
										<div class="d-flex align-items-center justify-content-between mg-b-5 mg-t-15">
											<h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Monthly Profit</h6>
											<span class="tx-10 tx-color-04">57.45% goal reached</span>
										</div>
										<div class="d-flex align-items-end justify-content-between mg-b-5">
											<h4 class="font-weight-bold">$25,854</h4>
											<h4 class="font-weight-bold">45,000</h4>
										</div>
										<div class="progress progress-sm mb-7">
											<div class="progress-bar bg-primary" style="width: 50%"></div>
										</div>
										<div class="d-flex align-items-center justify-content-between mg-b-5 mg-t-20">
											<h6 class="tx-uppercase tx-10 tx-spacing-1 tx-color-02 tx-semibold mg-b-0">Monthly Orders</h6>
											<span class="tx-10 tx-color-04">52.43% goal reached</span>
										</div>
										<div class="d-flex justify-content-between mg-b-5">
											<h4 class="font-weight-bold">8,654</h4>
											<h4 class="font-weight-bold">50,000</h4>
										</div>
										<div class="progress progress-sm mb-0">
											<div class="progress-bar bg-warning" style="width: 60%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="mb-4 fs-14 font-weight-semibold">
											Actual Revenue Vs Target Revenue
										</div>
										<div class="row">
											<div class="col">
												Target Achivement
											</div>
											<div class="col col-auto">
												<span class="text-success h5">+90%</span>
											</div>
										</div>
										<div class="progress progress-sm mb-3 mt-2">
											<div class="progress-bar bg-primary" style="width: 90%"></div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Target Revenue</h6>
													<h4 class="mb-0 font-weight-semibold">$35,425</h4>
												</div>
											</div>
											<div class="col col-auto">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Actual Revenue</h6>
													<h4 class="mb-0 font-weight-semibold">$28,425</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="mb-4 fs-14 font-weight-semibold">
											Actual Customers Vs Target
										</div>
										<div class="row">
											<div class="col">
												Target Achivement
											</div>
											<div class="col col-auto">
												<span class="text-danger h5">-25%</span>
											</div>
										</div>
										<div class="progress progress-sm mb-3 mt-2">
											<div class="progress-bar bg-secondary" style="width: 30%"></div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Target Customers</h6>
													<h4 class="mb-0 font-weight-semibold">5,643</h4>
												</div>
											</div>
											<div class="col col-auto">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Actual Customers</h6>
													<h4 class="mb-0 font-weight-semibold">2,341</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<div class="mb-4 fs-14 font-weight-semibold">
											Customer Avg Revenue Vs Target
										</div>
										<div class="row">
											<div class="col">
												Target Achievement
											</div>
											<div class="col col-auto">
												<span class="text-success h5">+95%</span>
											</div>
										</div>
										<div class="progress progress-sm mb-3 mt-2">
											<div class="progress-bar bg-success" style="width: 95%"></div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Target Revenue</h6>
													<h4 class="mb-0 font-weight-semibold">$67,234</h4>
												</div>
											</div>
											<div class="col col-auto">
												<div class="mt-4">
													<h6 class="mb-1 fs-12">Actual Revenue</h6>
													<h4 class="mb-0 font-weight-semibold">$32,543</h4>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                        <!-- END ROW -->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="row me-0 ms-0">
										<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<p class="mb-1">Visits</p>
									            <h2 class="mb-1 font-weight-bold">3,56,667</h2>
												<span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.7%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<p class="mb-1">Avg visit Duration</p>
									            <h2 class="mb-1 font-weight-bold">39Sec</h2>
									            <span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.2%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<p class="mb-1">Page Views</p>
									            <h2 class="mb-1 font-weight-bold">5,987</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 12%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<p class="mb-1">Bounce Rate</p>
									            <h2 class="mb-1 font-weight-bold">35.8%</h2>
									            <span class="mb-0 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.2%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0 border-end">
											<div class="card-body text-center">
												<p class="mb-1">Pages per Visit</p>
									            <h2 class="mb-1 font-weight-bold">2.89</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 1.2%</span> Last month</span>
									        </div>
										</div>
										<div class="col-xl-2 col-lg-6 col-sm-6 pe-0 ps-0">
											<div class="card-body text-center">
												<p class="mb-1">Goal Conversion</p>
									            <h2 class="mb-1 font-weight-bold">12.7%</h2>
									            <span class="mb-0 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 0.6%</span> Last month</span>
									        </div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<p class=" mb-1">Income Budget</p>
										<h2 class="mb-1 font-weight-bold">4500,00<span class="fs-12 text-muted ms-1">this month</span></h2>
										<span class="mb-1 text-muted"><span class="text-danger"><i class="fa fa-caret-down  me-1"></i> 43.2</span> vs $56,699 than last month</span>
										<div class="progress progress-xs mt-3">
											<div class="progress-bar bg-primary" style="width: 78%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<p class=" mb-1 ">Expense Budget</p>
										<h2 class="mb-1 font-weight-bold">5678,20<span class="fs-12 text-muted ms-1">this month</span></h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 19.8</span> vs $36,144 than last month</span>
										<div class="progress progress-xs mt-3">
											<div class="progress-bar bg-secondary" style="width: 58%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-4 col-md-12">
								<div class="card">
									<div class="card-body">
										<p class=" mb-1 ">Gross Profit Margin</p>
										<h2 class="mb-1 font-weight-bold">78%<span class="fs-12 text-muted ms-1">since last week</span></h2>
										<span class="mb-1 text-muted"><span class="text-success"><i class="fa fa-caret-up  me-1"></i> 0.8%</span> vs 1.6% than last month</span>
										<div class="progress progress-xs mt-3">
											<div class="progress-bar bg-warning" style="width: 58%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1 font-weight-bold">678</h2>
										<div class="text-muted">Visitors online</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary " style="width: 37%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1 font-weight-bold">567</h2>
										<div class="text-muted">Total Sales</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 57%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1 font-weight-bold">56</h2>
										<div class="text-muted">Total Projects</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: 70%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card">
									<div class="card-body">
										<h2 class="mb-1 font-weight-bold">567</h2>
										<div class="text-muted ">Today Income</div>
										<div class="progress progress-sm mt-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" style="width: 87%"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Today Orders</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">6532</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-danger"></i> <span class="">15%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Today Sales</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">5835</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span class="">22%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Today Profit</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">$69588</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-success"></i> <span class="">32%</span> Increase</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-3 col-lg-6">
								<div class="card text-center">
									<div class="card-body"> <span>Position in Market</span>
									  <h1 class=" mb-1 mt-1 font-weight-bold">12</h1>
									  <div class="text-muted"><i class="si si-arrow-up-circle text-warning"></i> <span class=""></span> Increase from 20 to 12</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<svg class="svg-icon2  fill-white text-primary icon-dropshadow-primary" x="0" y="240" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="currentColor" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4v0a2 2 0 100-4v0zm-8 2a2 2 0 11-4 0v0a2 2 0 114 0v0z"></path></svg>
										<p class="card-text mt-3 mb-0">New Orders</p>
										<p class="h2 text-center font-weight-bold">262</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<svg class="svg-icon2 text-success icon-dropshadow-success" xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
										<p class="card-text mt-3 mb-0">Customer Visitis</p>
										<p class="h2 text-center font-weight-bold">2635</p>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-lg-4">
								<div class="card">
									<div class="card-body text-center list-icons">
										<svg class="svg-icon2 fill-secondary icon-dropshadow-secondary" x="0" y="240" viewBox="0 0 24 24"  height="100%" width="100%" preserveAspectRatio="xMidYMid meet" focusable="false"><path opacity=".0" d="M20,8 L12,13 L4,8 L4,18 L20,18 L20,8 Z M20,6 L4,6 L12,10.99 L20,6 Z"></path>
											<path d="M4,20 L20,20 C21.1,20 22,19.1 22,18 L22,6 C22,4.9 21.1,4 20,4 L4,4 C2.9,4 2,4.9 2,6 L2,18 C2,19.1 2.9,20 4,20 Z M20,6 L12,10.99 L4,6 L20,6 Z M4,8 L12,13 L20,8 L20,18 L4,18 L4,8 Z"></path>
										</svg>
										<p class="card-text mt-3 mb-0">Mails</p>
										<p class="h2 text-center font-weight-bold">245</p>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0 font-weight-bold"><i class="mdi mdi-account-multiple-outline text-primary"></i> 67</div>
										<div class="text-muted mb-0"> Customers</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0 font-weight-bold"><i class="mdi mdi-cash-multiple text-red"></i> 76</div>
										<div class="text-muted mb-0"> Total Sales</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0 font-weight-bold"><i class="mdi mdi-chart-line text-warning"></i> 45</div>
										<div class="text-muted mb-0"> New Orders</div>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="h2 m-0 font-weight-bold"><i class="mdi mdi-account-outline text-info"></i> 38</div>
										<div class="text-muted mb-0"> Invoice</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-primary">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Invoices</h6>
												<h2 class="text-white m-0 font-weight-bold">625</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-file-text-o fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-secondary">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Sales</h6>
												<h2 class="text-white m-0 font-weight-bold">25k</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-signal fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-warning">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">Profit</h6>
												<h2 class="text-white m-0 font-weight-bold">62K</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-usd fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-3">
								<div class="card bg-info">
									<div class="card-body">
										<div class="d-flex no-block align-items-center">
											<div>
												<h6 class="text-white">News</h6>
												<h2 class="text-white m-0 font-weight-bold">542</h2>
											</div>
											<div class="ms-auto">
												<span class="text-white display-6"><i class="fa fa-newspaper-o fa-2x"></i></span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12 col-xl-4 col-sm-12">
								<div class="card  mb-5">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-start mb-0">
												<img src="{{asset('assets/images/users/1.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md me-3">
											</figure>
											<div class="media-body">
												<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Victoria</h5>
												New york, UK
											</div>
											<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">victoriacott@Dayone.com</span>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-sm-12">
								<div class="card mb-5">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-start mb-0">
												<img src="{{asset('assets/images/users/16.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md me-3">
											</figure>
											<div class="media-body">
												<h5 class="time-title p-0 mb-0 font-weight-semibold leading-normal">Thomas Jaim</h5>
												Spain, UN
											</div>
											<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">thomasjaim@Dayone.com</span>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-sm-12">
								<div class="card mb-5">
									<div class="card-body">
										<div class="media mt-0">
											<figure class="rounded-circle align-self-start mb-0">
												<img src="{{asset('assets/images/users/3.jpg')}}" alt="Generic placeholder image" class="avatar brround avatar-md me-3">
											</figure>
											<div class="media-body">
												<h5 class="time-title p-0 font-weight-semibold leading-normal mb-0">Rebbaca wisely</h5>
												Japan, UN
											</div>
											<button class="btn btn-primary d-none d-sm-block me-2"><i class="fa fa-comments"></i> </button>
											<button class="btn btn-info d-none d-sm-block"><i class="fa fa-phone"></i> </button>
										</div>
									</div>
									<div class="card-footer text-secondary border-top">
										Email: <span class="text-primary">rebbacawisely@Dayone.com</span>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-12">
								<div class="card demo-gallery">
									<div class="card-header">
										<h3 class="card-title">Best Pictures for Today</h3>
									</div>
									<div class="card-body">
										<div>
											<ul id="lightgallery" class="list-unstyled row">
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/1.jpg')}}" data-src="{{asset('assets/images/photos/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/1.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/7.jpg')}}" data-src="{{asset('assets/images/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/7.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/3.jpg')}}" data-src="{{asset('assets/images/photos/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/3.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/4.jpg')}}" data-src="{{asset('assets/images/photos/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/4.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/5.jpg')}}" data-src="{{asset('assets/images/photos/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/5.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/6.jpg')}}" data-src="{{asset('assets/images/photos/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/6.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/7.jpg')}}" data-src="{{asset('assets/images/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/7.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
												<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{asset('assets/images/photos/8.jpg')}}" data-src="{{asset('assets/images/photos/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
													<a href="" class="d-block link-overlay">
														<img class="img-responsive rounded" src="{{asset('assets/images/photos/8.jpg')}}" alt="Thumb-1">
														<span class="link-overlay-bg rounded">
															<i class="fa fa-search"></i>
														</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

						<!-- ROW -->
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="facebook p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-facebook"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">56k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">17k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="twitter p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-twitter"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">86k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">20k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="linkedin p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-linkedin"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">76k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">27k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-12 m-b-3">
								<div class="card overflow-hidden">
									<div class="">
										<div class="row">
											<div class="col-12">
												<div class="instagram p-4 ">
													<div class="text-center text-white social">
														<i class="fa fa-instagram"></i>
													</div>
												</div>
												<div class="card-body mt-0">
													<div class="d-flex  align-items-center">
														<div>
															<h3 class="font-weight-semibold mb-1">36k</h3>
															<h5 class="text-muted mb-0">Following</h5>
														</div>
														<div class="ms-auto">
															<h3 class="font-weight-semibold mb-1">10k</h3>
															<h5 class="text-muted mb-0">Friends</h5>
														</div>
													</div>
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

        <!-- INTERNAL GALLERY JS -->
        <script src="{{asset('assets/plugins/lightgallery/picturefill.js')}}"></script>
        <script src="{{asset('assets/plugins/lightgallery/lightgallery.js')}}"></script>
        <script src="{{asset('assets/plugins/lightgallery/lg-pager.js')}}"></script>
        <script src="{{asset('assets/plugins/lightgallery/lg-autoplay.js')}}"></script>
        <script src="{{asset('assets/plugins/lightgallery/lg-fullscreen.js')}}"></script>
        <script src="{{asset('assets/plugins/lightgallery/lg-zoom.js')}}"></script>
        <script src="{{asset('assets/plugins/lightgallery/lg-hash.js')}}"></script>
        <script src="{{asset('assets/plugins/lightgallery/lg-share.js')}}"></script>
        <script src="{{asset('assets/js/gallery.js')}}"></script>

@endsection
