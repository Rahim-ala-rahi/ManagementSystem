@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-lg-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Form-Treeview</div>
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

						<!-- ROW OPEN -->
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview1">
											<li><a  href="javascript:void(0);">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview2">
											<li><a  href="javascript:void(0);">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="treeview3">
											<li><a  href="javascript:void(0);">TECH</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li>XRP
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree1">
											<li><a  href="javascript:void(0);">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree2">
											<li><a  href="javascript:void(0);">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-body">
										<ul id="tree3">
											<li><a  href="javascript:void(0);">Treeview1</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview2</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview3</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview4</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview5</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.
																		<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
											<li><a  href="javascript:void(0);">Treeview6</a>
												<ul>
													<li>Company Maintenance</li>
													<li>Employees
														<ul>
															<li>Reports
																<ul>
																	<li>Report1</li>
																	<li>Report2</li>
																	<li>Report3</li>
																</ul>
															</li>
															<li>Employee Maint.
																<ul>
																	<li>Reports
																		<ul>
																			<li>Report1</li>
																			<li>Report2</li>
																			<li>Report3</li>
																		</ul>
																	</li>
																	<li>Employee Maint.<ul>
																			<li>Reports
																				<ul>
																					<li>Report1</li>
																					<li>Report2</li>
																					<li>Report3</li>
																				</ul>
																			</li>
																			<li>Employee Maint.</li>
																		</ul>
																	</li>
																</ul>
															</li>
														</ul>
													</li>
													<li>Human Resources</li>
												</ul>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW CLOSED -->

@endsection

@section('modals')


@endsection

@section('scripts')

        <!-- INTERNAL TREEVIEW JS -->
        <script src="{{asset('assets/plugins/treeview/treeview.js')}}"></script>

@endsection
