@extends('layouts.app')

@section('styles')


@endsection

@section('content')

                        <!--Page header-->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Role Access</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!--Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-xl-3">
												<div class="form-group">
													<label class="form-label">Select Property:</label>
													<input type="text" class="form-control" placeholder="Property" value="">
												</div>
											</div>
											<div class="col-xl-3">
												<div class="form-group">
													<label class="form-label">Select Value:</label>
													<select  class="form-control custom-select select2" data-placeholder="Select Value">
														<option label="Select Value"></option>
														<option value="1">Option 1</option>
														<option value="2">Option 2</option>
														<option value="3">Option 3</option>
														<option value="4">Option 4</option>
														<option value="5">Option 5</option>
														<option value="6">Option 6</option>
														<option value="7">Option 7</option>
														<option value="8">Option 8</option>
														<option value="9">Option 9</option>
														<option value="10">Option 10</option>
														<option value="11">Option 11</option>
														<option value="12">Option 12</option>
														<option value="13">Option 13</option>
														<option value="14">Option 14</option>
													</select>
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group mt-xl-5">
													<a  href="javascript:void(0);" class="btn btn-primary btn-block">Search</a>
												</div>
											</div>
											<div class="col-xl-2">
												<div class="form-group mt-xl-5">
													<a  href="javascript:void(0);" class="btn btn-danger btn-block">Reset</a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="table-responsive role-table">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="role-list">
												<thead>
													<tr>
														<th class="border-bottom-0 w-5">NO</th>
														<th class="border-bottom-0">Role Name</th>
														<th class="border-bottom-0 text-center">Super Admin</th>
														<th class="border-bottom-0 text-center">Admin</th>
														<th class="border-bottom-0 text-center">HR</th>
														<th class="border-bottom-0 text-center">Client</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>Admin Dashboard</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>2</td>
														<td>General Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon  role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Modify</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>4</td>
														<td>New Custom Field</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Edit Custom Field</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Email Templates</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>7</td>
														<td>Security Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>8</td>
														<td>Modify Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>9</td>
														<td>Theme Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>10</td>
														<td>Modify Theme</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>11</td>
														<td>Chat Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>12</td>
														<td>Admin Notification Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>13</td>
														<td>API Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>14</td>
														<td>Payment Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>15</td>
														<td>Social Settings</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>16</td>
														<td>New Login</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>17</td>
														<td>Edit Login</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>18</td>
														<td>Delete Login</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>19</td>
														<td>New Role</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>20</td>
														<td>Edit Role</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>21</td>
														<td>Delete Role</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>22</td>
														<td>Ticket List</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>23</td>
														<td>Ticket Delete</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
													<tr>
														<td>24</td>
														<td>WebChat Panel</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-check text-success icon-style-circle bg-success-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
														<td class="text-center">
															<a  href="javascript:void(0);" class="access-icon role"><span class="feather feather-x text-danger icon-style-circle bg-danger-transparent"></span></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

@endsection

@section('modals')


@endsection

@section('scripts')

        <!-- INTERNAL PEITYCHART JS -->
        <script src="{{asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
		<script src="{{asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>

		<!-- INTERNAL  DATEPICKER JS -->
		<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>

		<!-- INTERNAL SWEET-ALERT JS -->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>

		<!-- INTERNAL COLORPICKER JS -->
		<script src="{{asset('assets/plugins/spectrum-colorpicker/spectrum-colorpicker.js')}}"></script>

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

		<!-- INTERNAL INDEX JS -->
		<script src="{{asset('assets/js/admin/admin-role.js')}}"></script>

@endsection
