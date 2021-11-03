@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!---Internal Fancy uploader css-->
    <link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Setting</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Card Type</span>
						</div>
					</div>

                    <div class="d-flex my-xl-auto right-content">
                        <div class="pr-1 mb-3 mb-xl-0">
                            <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-super-scaled"
                               data-toggle="modal" href="#modaldemlo124"><i class="fas fa-plus"></i> </a>
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

                            <div class="card-body" >
                                <div class="table-responsive">
                                    <table class="table text-md-nowrap" id="example1" style="background-color:#761193;">
                                        <thead>
                                        <tr>
                                            <th class="wd-15p border-bottom-0 text-black-50">#</th>
                                            <th class="wd-15p border-bottom-0 text-white">name</th>
                                            <th class="wd-20p border-bottom-0 text-white">description</th>
                                            <th class="wd-20p border-bottom-0 text-white">process</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($cardType as $c)
                                        <tr>
                                            <td>{{$c->id}}</td>
                                            <td>{{$c->name}}</td>
                                            <td>{{$c->description}}</td>
                                            <td>
                                                @can('provider-delete')
                                                <a class="modal-effect btn btn-sm btn-danger"
                                                   data-effect="effect-scale"
                                                   data-id="{{$c->id}}" data-name="{{$c->name}}"
                                                   data-toggle="modal"
                                                   href="#modaldem" title="delete"><i class="las la-trash"></i></a>
                                                @endcan
                                                @can('provider-edit')
                                                <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                   data-id="{{$c->id}}" data-name="{{$c->name}}"
                                                   data-description="{{$c->description}}"
                                                   data-toggle="modal"
                                                   href="#modaldemlo1245"
                                                   title="edit"><i class="las la-pen"></i></a>
                                                    @endcan
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/div-->

				</div>
				<!-- row closed -->

                {{--add provider--}}
                <div class="modal" id="modaldemlo124">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Add Card Type</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal"
                                        type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{route('show_cardType_add')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body row form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label class="label mt-2">Name</label>
                                        <input type="text" class="form-control"  name="name"/>
                                    </div>

                                    <div class="col-lg-12">
                                        <label class="label mt-2">Description</label>
                                        <textarea class="form-control" name="description" placeholder="description" rows="3"></textarea>
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



                {{--edit provider--}}
                <div class="modal" id="modaldemlo1245">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content modal-content-demo">
                            <div class="modal-header">
                                <h6 class="modal-title">Edit Type Of Provider</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal"
                                        type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{route('show_cardType_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body row form-group">
                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <label class="label mt-2">Name</label>
                                        <input type="hidden" class="form-control"  name="id"/>
                                        <input type="text" class="form-control"  name="name"/>
                                    </div>


                                    <div class="col-lg-12">
                                        <label class="label mt-2">Description</label>
                                        <textarea class="form-control" name="description" placeholder="description" rows="3"></textarea>
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
                                <h6 class="modal-title">Delete Card</h6>
                                <button aria-label="Close" class="close" data-dismiss="modal"
                                        type="button"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <form action="{{route('show_cardType_delete')}}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <p>Are you sure of the deleting process ?</p><br>
                                    <input type="hidden" name="id_inp" id="id_inp">
                                    <input class="form-control" name="name_inp" id="name_inp" type="text" readonly>
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
    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

    <!-- SWEET Alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('#modaldem').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[id="id_inp"]').val(id);
            $(e.currentTarget).find('input[id="name_inp"]').val(name);
        });
    </script>
    <script type="text/javascript">
        $('#modaldemlo1245').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');
            var description = $(e.relatedTarget).data('description');


            $(e.currentTarget).find('input[name="id"]').val(id);
            $(e.currentTarget).find('input[name="name"]').val(name);
            $(e.currentTarget).find('textarea[name="description"]').val(description);
        });
    </script>

    @if (Session::has('add'))
        <script>
            swal("Good Job", "{!! Session::get('add') !!}", {
                button: "Okay",
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            });
        </script>

    @endif

    @if (Session::has('delete'))
        <script>
            swal("Good Job", "{!! Session::get('delete') !!}", {
                button: "Okay",
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            });
        </script>

    @endif

    @if (Session::has('edit'))
        <script>
            swal("Good Job", "{!! Session::get('edit') !!}", {
                button: "Okay",
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 2500
            });
        </script>

    @endif

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
            swal("Error", "{!! $error !!}", {
                button: "Okay",
                icon: 'error',
                timer: 2500
            })
            @endforeach
        </script>

    @endif
    <script>
        $(function () {
            $('.selectpicker').selectpicker();
        });
    </script>
@endsection
