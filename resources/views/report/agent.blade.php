@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Reports</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Card</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
                        <div class="mb-3 mb-xl-0">
                            @can('add card')
                            <div class="btn-group">
                                <a href="{{route('add_cards')}}" class="btn btn-outline-primary btn-lg" title="add card">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                            </div>
                            @endcan
                            @can('online card')
                            <div class="btn-group">
                                <a href="{{route('show_cards_draft',1)}}" class="btn btn-success" title="online card">
                                    Online Cards
                                </a>
                            </div>
                                @endcan

                            <div class="btn-group dropdown">
                                <button type="button" class="btn text-white"
                                        style="background-color:#761193;">{{date('d-M-Y')}}</button>
                            </div>


                        </div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    @if(isset($card))
                    <div class="col-xl-12">
                        <div class="card mg-b-20">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">All Customers Card</h4>
                                    <i class="mdi mdi-horizontal text-gray"><label class="label tx-lg-bold">Total Paid card </label>
                                        <input type="text" readonly disabled  class="form-control" name="total" value="{{$total}} BD"></i>
                                </div>
                                <p class="tx-12 tx-gray-500 mb-2"></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table key-buttons text-md-nowrap tr"
                                           style="background-color:#761193;">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">issue date</th>
                                            <th class="border-bottom-0 text-white">Name</th>
                                            <th class="border-bottom-0 text-white">Mobile</th>
                                            <th class="border-bottom-0 text-white">Phone</th>
                                            <th class="border-bottom-0 text-white">Status</th>
                                            <th class="border-bottom-0 text-white">price</th>
                                            <th class="border-bottom-0 text-white">rate</th>
                                            <th class="border-bottom-0 text-white">Comment</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($card as $c)
                                            <tr>
                                                <td>{{$c->date}}</td>
                                                <td> {{$c->name}}</td>
                                                <td>{{$c->mobile}}</td>
                                                <td>{{$c->phone}}</td>
                                                @if($c->status == 'draft')
                                                    <td> Draft <i class="fas fa-circle" style="color: red"></i></td>
                                                @elseif($c->status == 'pending')
                                                    <td>Pending <i class="fas fa-circle" style="color: orange"></i></td>
                                                @elseif($c->status == 'expired')
                                                    <td>Expired <i class="fas fa-circle" style="color: darkred"></i></td>
                                                @elseif($c->status == 'done')
                                                    <td>Done <i class="fas fa-circle" style="color: blue"></i></td>
                                                @elseif($c->status == 'paid')
                                                    <td>Paid <i class="fas fa-circle" style="color: dodgerblue"></i></td>
                                                @else
                                                    <td>Print <i class="fas fa-circle" style="color: teal"></i></td>
                                                @endif
                                                <td>{{$c->price}} BD</td>
                                                @if(is_numeric($c->User->rate))
                                                <td>{{($c->price * $c->User->rate)/100}} BD</td>
                                                @else
                                                @endif



                                                <td>{{$c->comment}}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                @endif

                        <div class="col-lg-2">
                            <label class="label">Total Paid card </label>
                            <input type="text" disabled readonly class="form-control" name="total" value="{{$total}} BD">
                        </div>
                        <div class="col-lg-5">
                        </div>
                        <div class="col-lg-5">

                        </div> <!-- row closed -->
			</div>

			<!-- Container closed -->
		</div>
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
