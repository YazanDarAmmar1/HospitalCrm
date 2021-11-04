@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Cards</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Card</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn text-white" style="background-color:#761193;">{{date('Y-M-d')}}</button>
							</div>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">

                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">All Customers Card</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2"></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table key-buttons text-md-nowrap tr" style="background-color:#761193;">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">#</th>
                                            <th class="border-bottom-0 text-white">Agent</th>
                                            <th class="border-bottom-0 text-white">Name</th>
                                            <th class="border-bottom-0 text-white">CPR</th>
                                            <th class="border-bottom-0 text-white">Phone</th>
                                            <th class="border-bottom-0 text-white">Status</th>
                                            <th class="border-bottom-0 text-white">Package</th>
                                            <th class="border-bottom-0 text-white">Expiry</th>
                                            <th class="border-bottom-0 text-white">Comment</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($card as $c)
                                        <tr>
                                            <td>{{$c->id}}</td>
                                            <td>{{$c->User->name}}</td>
                                            <td>{{$c->name}}</td>
                                            <td>{{$c->cpr_no}}</td>
                                            <td>{{$c->phone}}</td>
                                            @if($c->status == 0)
                                                <td> Draft <i class="fas fa-circle" style="color: red"></i></td>
                                            @elseif($c->status == 1)
                                                <td>Pending <i class="fas fa-circle" style="color: orange"></i></td>
                                            @elseif($c->status == 2)
                                                <td >Expired <i class="fas fa-circle" style="color: darkred"></i></td>
                                            @elseif($c->status == 3)
                                                <td>Done <i class="fas fa-circle" style="color: blue"></i></td>
                                            @elseif($c->status == 4)
                                                <td>Paid <i class="fas fa-circle" style="color: dodgerblue"></i></td>
                                            @else
                                                <td>Print <i class="fas fa-circle" style="color: yellow"></i></td>
                                            @endif
                                            <td>{{$c->Package->name}}</td>
                                            <td></td>
                                            <td>{{$c->comment}}</td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                                </div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
    <!-- Internal Data tables -->
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
