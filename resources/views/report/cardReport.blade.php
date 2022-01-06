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
                            <div class="btn-group">
                                <a href="{{route('add_cards')}}" class="btn btn-outline-primary btn-lg" title="add card">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                            </div>
                            <div class="btn-group">
                                <a href="{{route('show_cards_draft',1)}}" class="btn btn-success" title="online card">
                                    Online Cards
                                </a>
                            </div>

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
                    <div class="card col-lg-12">
                        <div class="card-header">
                            <form method="post" action="{{route('report.card.search')}}" role="search" >
                                @csrf
                                <div class="row">
                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Package Name:</p>
                                        <select class="form-control select2" name="package">
                                            <option value=""></option>
                                            @foreach($package as $p)
                                                <option value="{{$p->id}}">
                                                    {{$p->name}}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0 mb-4">
                                        <p class="mg-b-10">Agent Name:</p>
                                        <select class="form-control select2" name="agent">
                                            <option value="">All</option>
                                            @foreach(\App\User::all() as $u)
                                                <option value="{{$u->id}}">
                                                    {{$u->name}}
                                                </option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <!-- col-4 -->
                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">From Date</p>
                                        <input type="date" name="start" class="form-control" value="{{$start ?? ''}}">
                                    </div>

                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">To Date</p>
                                        <input type="date" name="end" class="form-control" value="{{$end ?? ''}}">
                                    </div>


                                    <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10">Status Card</p>
                                        <select class="form-control select2" name="status">
                                            <option value="{{$status ?? ''}}">
                                                {{$status ?? ''}}
                                            </option>
                                            <option value="draft">
                                                draft
                                            </option>
                                            <option value="pending">
                                                pending
                                            </option>
                                            <option value="expired">
                                                expired
                                            </option>
                                            <option value="done">
                                                done
                                            </option>
                                            <option value="paid">
                                                paid
                                            </option>
                                            <option value="print">
                                                print
                                            </option>
                                        </select>
                                    </div>


                                    <div class="col-lg-2 mg-t-20 mg-lg-t-0 float-right">
                                        <button type="submit"  class="form-control btn btn-success bg-primary text-white">
                                            Search
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

				</div>
                    @if(isset($card))
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
                                    <table id="example" class="table key-buttons text-md-nowrap tr"
                                           style="background-color:#761193;">
                                        <thead>
                                        <tr>
                                            <th class="border-bottom-0">issue date</th>
                                            <th class="border-bottom-0 text-white">Name</th>
                                            <th class="border-bottom-0 text-white">CPR</th>
                                            <th class="border-bottom-0 text-white">Mobile</th>
                                            <th class="border-bottom-0 text-white">Phone</th>
                                            <th class="border-bottom-0 text-white">Email</th>
                                            <th class="border-bottom-0 text-white">Gender</th>
                                            <th class="border-bottom-0 text-white">Mem</th>
                                            <th class="border-bottom-0 text-white">Expiry</th>
                                            <th class="border-bottom-0 text-white">Comment</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 1;?>
                                        @foreach($card as $c)
                                            <tr>
                                                <td>{{$c->date}}</td>
                                                <td><a href="{{route('profile_show',$c->cpr_no)}}"> {{$c->name}}</a></td>
                                                <td>{{$c->cpr_no}}</td>
                                                <td>{{$c->mobile}}</td>
                                                <td>{{$c->phone}}</td>
                                                <td>{{$c->email}}</td>
                                                <td>{{$c->gender}}</td>

                                                @if($c->cpr_no == $c->father_id)
                                                    <td>Father  <i class="fas fa-circle" style="color: dodgerblue"></i></td>
                                                @else
                                                    <td>Child  <i class="fas fa-circle" style="color: black"></i></td>
                                                @endif


                                                <td>{{$c->expiry}}</td>
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

                    <!-- row closed -->
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
