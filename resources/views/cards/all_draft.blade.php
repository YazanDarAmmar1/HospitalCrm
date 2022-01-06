@extends('layouts.master')
@section('css')
    <!-- Internal Data table css -->
    <link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>
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
                <h4 class="content-title mb-0 my-auto">Cards</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ All Card</span>
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

                    <a class=" btn btn-outline-danger btn-block"href="{{route('show_cards')}}">All Cards</a>
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

        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                    <div class="d-flex justify-content-between">
                        <h4 class="card-title mg-b-0">All Customers Draft Card</h4>
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
                                <th class="border-bottom-0 text-white">Status</th>
                                <th class="border-bottom-0 text-white">Mem</th>
                                <th class="border-bottom-0 text-white">Online</th>
                                <th class="border-bottom-0 text-white">Comment</th>
                                <th class="border-bottom-0 text-white"></th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($card as $c)
                                <tr>
                                    <td style="">{{$c->date}}</td>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->cpr_no}}</td>
                                    <td>{{$c->mobile}}</td>
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

                                    @if($c->cpr_no == $c->father_id)
                                        <td>Father  <i class="fas fa-circle" style="color: dodgerblue"></i></td>
                                    @else
                                        <td>Child  <i class="fas fa-circle" style="color: black"></i></td>
                                    @endif

                                    @if($c->online == 1)
                                        <td>Online  <i class="fas fa-circle" style="color: orangered"></i></td>
                                    @else
                                        <td>Manually  <i class="fas fa-circle" style="color: green"></i></td>
                                    @endif

                                    <td>{{$c->comment}}</td>
                                    <td>
                                        <a class=" btn btn-sm btn-info" href="{{route('profile_show',$c->cpr_no)}}"
                                           data-effect="effect-scale"
                                           title="edit"><i class="far fa-edit"></i> Edit</a>

                                        <a class="modal-effect btn btn-sm btn-danger"
                                           data-effect="effect-scale"
                                           data-id="{{$c->id}}" data-name="{{$c->name}}"
                                           data-toggle="modal"
                                           href="#modaldem" title="delete"><i class="las la-trash"></i> Delete</a>
                                        @if($c->father_id == null)

                                            <a class="modal-effect btn btn-sm btn-primary"
                                               data-effect="effect-scale"
                                               data-id="{{$c->id}}" data-name="{{$c->name}}"
                                               data-email="{{$c->email}}" data-date="{{$c->date}}"
                                               data-mobile="{{$c->mobile}}" data-phone="{{$c->phone}}"
                                               data-house="{{$c->house}}" data-road="{{$c->road}}"
                                               data-block="{{$c->block}}" data-place="{{$c->place}}"
                                               data-country="{{$c->country}}" data-card_type="{{$c->card_type_id}}"
                                               data-payment_method="{{$c->payment_method}}"
                                               data-contact_method="{{$c->contact_method}}"
                                               data-package_type="{{$c->package_type}}"
                                               data-toggle="modal"
                                               href="#modaldem2" title="add more"><i class="fas fa-users"></i> Add More
                                                People</a>
                                        @else
                                        @endif
                                        <a class="modal-effect btn btn-sm btn-success"
                                           data-effect="effect-scale"
                                           data-id="{{$c->id}}" data-name="{{$c->name}}"
                                           data-toggle="modal"
                                           href="#modaldem1" title="status"><i class="fas fa-sync"></i> Status</a>


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
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->


    {{--delete--}}
    <div class="modal" id="modaldem">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Customer Card</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('delete_card')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p>Are you sure of the deleting process ?</p><br>
                        <input type="hidden" readonly name="id_inp" id="id_inp">
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

    {{--status--}}
    <div class="modal" id="modaldem1">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Change Customer Status</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('update_status')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <label class="status">Status</label>
                        <input type="hidden" readonly name="id_inp" id="id_inp">
                        <select class="form-control select1 mb-1" name="status">
                            <option label="select one">
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

                        </select></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{--add more people--}}
    <div class="modal " id="modaldem2">
        <div class="modal-dialog modal-dialog-centered modal-lg " role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add More People</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('add_cards_user')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" readonly name="id_inp" id="id_inp">
                        <div class="row row-xs">
                            <div class="col-md-6">
                                <label class="label">Name</label>
                                <input class="form-control mb-1" placeholder="Enter your username" name="name"
                                       type="text">
                            </div>
                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                <label class="label">CPR NO.</label>
                                <input class="form-control mb-1" placeholder="Enter your CPR" name="cpr"
                                       type="text">
                            </div>

                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                <label class="label">Email</label>
                                <input class="form-control mb-1" placeholder="Enter your email" name="email"
                                       type="email">
                            </div>

                            <div class="col-md-4 mg-t-10 mg-md-t-0">
                                <label class="label">Date</label>
                                <input class="form-control mb-1" name="date" type="date">
                            </div>

                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                <label class="label">Gender</label>
                                <select class="form-control select2 mb-1" name="gender">
                                    <option label="Choose one">
                                    </option>
                                    <option value="male">
                                        Male
                                    </option>
                                    <option value="female">
                                        Female
                                    </option>
                                </select>
                            </div>

                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                <label class="label">Mobile No.</label>
                                <input class="form-control mb-1" placeholder="Enter your mobile" name="mobile"
                                       type="text">
                            </div>

                            <div class="col-md-2 mg-t-10 mg-md-t-0">
                                <label class="label">Phone No.</label>
                                <input class="form-control mb-1" placeholder="Enter phone" name="phone"
                                       type="text">
                            </div>

                            <div class="col-md-2 mg-t-10 mg-md-t-0">
                                <label class="label">House</label>
                                <input class="form-control mb-1" placeholder="Enter your house" name="house"
                                       type="text">
                            </div>
                            <div class="col-md-2 mg-t-10 mg-md-t-0">
                                <label class="label">Road</label>
                                <input class="form-control mb-1" placeholder="Enter your road" name="road"
                                       type="text">
                            </div>
                            <div class="col-md-2 mg-t-10 mg-md-t-0">
                                <label class="label">Block</label>
                                <input class="form-control mb-1" placeholder="Enter your block" name="block"
                                       type="text">
                            </div>
                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                <label class="label">Place</label>
                                <input class="form-control mb-1" placeholder="Enter your place" name="place"
                                       type="text">
                            </div>
                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                <label class="label">Country</label>
                                <input class="form-control mb-1" placeholder="Enter your country" name="country"
                                       type="text">
                            </div>


                            <div class="col-md-12">
                                <div class="card-body">
                                    <div class="panel-group1" id="accordion11">
                                        <div class="panel panel-default  mb-4">
                                            <div class="panel-heading1" style="background-color:#761193;">
                                                <h4 class="panel-title1">
                                                    <a class="accordion-toggle collapsed" data-toggle="collapse"
                                                       data-parent="#accordion11" href="#collapseFour1"
                                                       aria-expanded="false">Card Data<i
                                                            class="fe fe-arrow-left ml-2"></i></a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel"
                                                 style="background-color: white" aria-expanded="false">
                                                <div class="panel-body border">
                                                    <div class="row">
                                                        <div class="col-md-4 mg-t-10 mg-md-t-0">
                                                            <label class="label">Card Type</label>
                                                            <select class="form-control select1 mb-1"
                                                                    name="card_type">
                                                                @foreach($card_type as $c)
                                                                    <option value="{{$c->id}}">
                                                                        {{$c->name}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 mg-t-10 mg-md-t-0">
                                                            <label class="label">Payment Method</label>
                                                            <select class="form-control select1 mb-1"
                                                                    name="payment_method">
                                                                <option label="Choose one">
                                                                </option>
                                                                <option value="benefit">
                                                                    Benefit
                                                                </option>
                                                                <option value="cash">
                                                                    Cash
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 mg-t-10 mg-md-t-0">
                                                            <label class="label">Contact Method</label>
                                                            <select class="form-control select1 mb-1"
                                                                    name="contact_method">
                                                                <option label="Choose one">
                                                                </option>
                                                                <option value="call">
                                                                    Call
                                                                </option>
                                                                <option value="whatsapp">
                                                                    Whatsapp
                                                                </option>
                                                                <option value="online">
                                                                    Online
                                                                </option>

                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 mg-t-10 mg-md-t-0">
                                                            <label class="label">Package Type</label>
                                                            <select class="form-control select1 mb-1"
                                                                    name="package">
                                                                <option label="Choose one">
                                                                </option>
                                                                @foreach($package as $c)
                                                                    <option value="{{$c->id}}">
                                                                        {{$c->name}}
                                                                    </option>
                                                                @endforeach

                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 mg-t-10 mg-md-t-0">
                                                            <label class="label">Period</label>
                                                            <select class="form-control select1 mb-1" name="period">
                                                                <option label="Choose one">
                                                                </option>
                                                                <option value="3Months">
                                                                    3 Months
                                                                </option>
                                                                <option value="4Months">
                                                                    4 Months
                                                                </option>
                                                                <option value="5Months">
                                                                    5 Months
                                                                </option>
                                                                <option value="1Year">
                                                                    1 Year
                                                                </option>
                                                                <option value="2Years">
                                                                    2 Years
                                                                </option>
                                                                <option value="5Years">
                                                                    5 Years
                                                                </option>
                                                            </select>
                                                        </div>

                                                        <div class="col-md-4 mg-t-10 mg-md-t-0">
                                                            <label class="label">Status</label>
                                                            <select class="form-control select1 mb-1" name="status">
                                                                <option value="draft">
                                                                    Draft
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

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 mb-4 ">
                                <label class="label">Comment</label>
                                <textarea class="form-control" placeholder="Comment" name="comment"
                                          rows="3"></textarea>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Person</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--contract--}}
    <div class="modal" id="modaldemlo12234">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add File Import</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('card_customer_import')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-sm-12 col-md-4 col-lg-12">
                            <label class="label mt-2">File Import</label>
                            <input type="file" class="dropify" data-height="70" name="import"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Import</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

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
    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('assets/js/table-data.js')}}"></script>

    <!-- SWEET Alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    {{--delete--}}
    <script type="text/javascript">
        $('#modaldem').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[id="id_inp"]').val(id);
            $(e.currentTarget).find('input[id="name_inp"]').val(name);
        });
    </script>

    {{--status--}}
    <script type="text/javascript">
        $('#modaldem1').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[id="id_inp"]').val(id);
            $(e.currentTarget).find('input[id="name_inp"]').val(name);
        });
    </script>


    {{--more people--}}
    <script type="text/javascript">
        $('#modaldem2').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var email = $(e.relatedTarget).data('email');
            var date = $(e.relatedTarget).data('date');
            var mobile = $(e.relatedTarget).data('mobile');
            var phone = $(e.relatedTarget).data('phone');
            var house = $(e.relatedTarget).data('house');
            var road = $(e.relatedTarget).data('road');
            var block = $(e.relatedTarget).data('block');
            var place = $(e.relatedTarget).data('place');
            var country = $(e.relatedTarget).data('country');


            $(e.currentTarget).find('input[id="id_inp"]').val(id);
            $(e.currentTarget).find('input[name="email"]').val(email);
            $(e.currentTarget).find('input[name="date"]').val(date);
            $(e.currentTarget).find('input[name="mobile"]').val(mobile);
            $(e.currentTarget).find('input[name="phone"]').val(phone);
            $(e.currentTarget).find('input[name="house"]').val(house);
            $(e.currentTarget).find('input[name="road"]').val(road);
            $(e.currentTarget).find('input[name="block"]').val(block);
            $(e.currentTarget).find('input[name="place"]').val(place);
            $(e.currentTarget).find('input[name="country"]').val(country);
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
