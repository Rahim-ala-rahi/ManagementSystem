@extends('layouts.hrapp')

@section('styles')


@endsection

@section('content')

                        <!-- PAGE HEADER -->
                        <div class="page-header d-xl-flex d-block">
							<div class="page-leftheader">
								<div class="page-title">Leave Settings</div>
							</div>
							<div class="page-rightheader ms-md-auto">
								<div class="d-flex align-items-end flex-wrap my-auto end-content breadcrumb-end">
									<div class="btn-list">
										<a  href="javascript:void(0);" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#addleavemodal">Add Leave Type</a>
										<button  class="btn btn-light" data-bs-toggle="tooltip" data-bs-placement="top" title="E-mail"> <i class="feather feather-mail"></i> </button>
										<button  class="btn btn-light" data-bs-placement="top" data-bs-toggle="tooltip" title="Contact"> <i class="feather feather-phone-call"></i> </button>
										<button  class="btn btn-primary" data-bs-placement="top" data-bs-toggle="tooltip" title="Info"> <i class="feather feather-info"></i> </button>
									</div>
								</div>
							</div>
						</div>
						<!-- END PAGE HEADER -->

						<!-- ROW -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header  border-0">
										<h4 class="card-title">Leaves Types</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table  table-vcenter text-nowrap table-bordered border-bottom" id="hr-leavestypes">
												<thead>
													<tr>
														<th class="border-bottom-0">Leaves Type</th>
														<th class="border-bottom-0 text-center">No.of Leaves</th>
														<th class="border-bottom-0">Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Casual Leaves</td>
														<td class="text-center font-weight-semibold">14</td>
														<td>
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>Sick Leaves</td>
														<td class="text-center font-weight-semibold">07</td>
														<td>
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>Maternity Leaves</td>
														<td class="text-center font-weight-semibold">20</td>
														<td>
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>Paternity Leaves</td>
														<td class="text-center font-weight-semibold">00</td>
														<td>
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>Annual Leaves</td>
														<td class="text-center font-weight-semibold">00</td>
														<td>
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>Unpaid Leaves</td>
														<td class="text-center font-weight-semibold">00</td>
														<td>
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
													<tr>
														<td>Other Leaves</td>
														<td class="text-center font-weight-semibold">00</td>
														<td>
															<div class="d-flex">
																<a  href="javascript:void(0);" class="action-btns1"  data-bs-toggle="modal" data-bs-target="#editleavemodal"><i class="feather feather-eye primary text-primary"></i></a>
																<a  href="javascript:void(0);" class="action-btns1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="feather feather-trash-2 text-danger"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- END ROW -->

@endsection

@section('modals')

            <!-- ADD LEAVE MODAL -->
            <div class="modal fade"  id="addleavemodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add New Leaves</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Type Of Leaves</label>
								<input class="form-control" placeholder="Text">
							</div>
							<div class="form-group">
								<label class="form-label">Number Of Days</label>
								<input class="form-control" placeholder="Numbers">
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Save</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADD LEAVE MODAL -->

			<!-- ADD LEAVE MODAL -->
			<div class="modal fade"  id="editleavemodal">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Edit Leaves</h5>
							<button  class="btn-close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label class="form-label">Type Of Leaves</label>
								<input class="form-control" placeholder="Text">
							</div>
							<div class="form-group">
								<label class="form-label">Number Of Days</label>
								<input class="form-control" placeholder="Numbers">
							</div>
						</div>
						<div class="modal-footer">
							<button  class="btn btn-outline-primary" data-bs-dismiss="modal">Close</button>
							<button  class="btn btn-primary">Update</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END ADD LEAVE MODAL -->

@endsection

@section('scripts')

        <!-- INTERNAL DATA TABLES  -->
        <script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>

        <!-- INTERNAL INDEX JS -->
        <script src="{{asset('assets/js/hr/hr-leaves.js')}}"></script>

@endsection
