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
							<h4 class="content-title mb-0 my-auto">Setting</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Providers</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
                            <a class="btn btn-purple ml-2 ripple" data-target="#modaldemo1" data-toggle="modal" href="">ADD PROVIDER  <i class="mdi mdi-plus"></i></a>

						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="d-flex justify-content-between">
                                    <h4 class="card-title mg-b-0">ALL PROVIDER DATA</h4>
                                    <i class="mdi mdi-dots-horizontal text-gray"></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0">#</th>
                                            <th class="wd-15p border-bottom-0">Provider Name</th>
                                            <th class="wd-20p border-bottom-0">Total Count</th>
                                            <th class="wd-20p border-bottom-0">Process</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(\App\Provider::all() as $p)
                                        <tr>
                                            <td>{{$p->id}}</td>
                                            <td>{{$p->name}}</td>
                                            <td>System Developer</td>
                                            <td>
                                                    <a class="modal-effect btn btn-sm btn-danger"
                                                       data-effect="effect-scale"
                                                       data-id="{{$p->id}}" data-name="{{$p->name}}"
                                                       data-toggle="modal"
                                                       href="#modaldem" title="delete"><i class="las la-trash"></i></a>

                                                    <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                       data-id="{{$p->id}}" data-name="{{$p->name}}"
                                                       data-toggle="modal"
                                                       href="#modaldemlo1245"
                                                       title="edit"><i class="las la-pen"></i></a>
                                            </td>

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
                <!-- Basic modal -->
                <div class="modal" id="modaldemo1">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">ADD PROVIDER</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{route('category.provider.add')}}" method="post">
                                @csrf
                                <div class="modal-body ">

                                    <label class="status bold">Provider Name</label>
                                    <input type="text" name="provider_name" class="form-control">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Basic modal -->

                {{--edit provider--}}
                <div class="modal" id="modaldemlo1245">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Provider</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal"
                                        type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{route('category.provider.edit')}}" method="post">
                                @csrf
                                <div class="modal-body row form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label class="label mt-2">Provider Name</label>
                                        <input type="hidden" class="form-control"  name="id"/>
                                        <input type="text" class="form-control"  name="name"/>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


                {{--delete--}}
                <div class="modal" id="modaldem">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Delete Provider</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal"
                                        type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{route('category.provider.delete')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <p>Are you sure of the deleting process ?</p><br>
                                    <input type="hidden" name="id" id="id_inp">
                                    <input class="form-control" name="name" id="name_inp" type="text" readonly>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

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

    @if (Session::has('add'))
        <script>
            notif({
                msg: "{!! Session::get('add') !!}",
                position: "left",
                bgcolor: "#8500ff",
                color: "#fff"
            });

        </script>

    @endif

    <script type="text/javascript">
        $('#modaldemlo1245').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[name="id"]').val(id);
            $(e.currentTarget).find('input[name="name"]').val(name);
        });
    </script>

    <script type="text/javascript">
        $('#modaldem').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[name="id"]').val(id);
            $(e.currentTarget).find('input[name="name"]').val(name);
        });
    </script>
@endsection
