@extends('layouts.master')
@section('css')
    <!-- Internal Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}"
          rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}"
          rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
    <!-- Interenal Accordion Css -->
    <link href="{{URL::asset('assets/plugins/accordion/accordion.css')}}" rel="stylesheet"/>
    <!---Internal Fileupload css-->
    <link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!--Internal  Font Awesome -->
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
    <!--Internal  treeview -->
    <link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Cards</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add Card</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            @can('all card')
            <div class="btn-group">
                <a href="{{route('show_cards')}}" class="btn btn-outline-success" title="all card"><i
                        class="far fa-address-card"></i></a>
            </div>
            @endcan

            <div class="pr-1 mb-3 mb-xl-0">
                <button onclick="location.reload();" type="button" class="btn btn-warning  btn-icon ml-2"><i
                        class="mdi mdi-refresh">

                    </i></button>
            </div>
            <div class="mb-3 mb-xl-0">


                <div class="btn-group dropdown">
                    <button type="button" class="btn btn-primary">{{date('Y-M-d')}}</button>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <form method="post" action="{{route('add_cards_user')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body" style="background-color: #761193">
                        <div class="main-content-label mg-b-5 text-white">
                            Register New Card
                        </div>
                        <p class="mg-b-20"></p>
                        <div class="pd-30 pd-sm-40 bg-gray-200">
                            <div class="row row-xs">
                                <div class="col-md-4">
                                    <label class="label">Name</label>
                                    <input class="form-control mb-1" placeholder="Enter your username" name="name"
                                           type="text">
                                </div>
                                <div class="col-md-2 mg-t-10 mg-md-t-0">
                                    <label class="label">CPR NO.</label>
                                    <input class="form-control mb-1" placeholder="Enter your CPR" name="cpr"
                                           type="text">
                                </div>

                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                    <label class="label">Email</label>
                                    <input class="form-control mb-1" placeholder="Enter your email" name="email"
                                           type="email">
                                </div>

                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                    <label class="label">Date</label>
                                    <input class="form-control mb-1" name="date" type="date" >
                                </div>

                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                    <label class="label">Agent</label>
                                    <select class="form-control select2 mb-1" name="agent">
                                        @foreach($user as $u)
                                            <option value="{{$u->id}}">
                                                {{$u->name}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                    <label class="label">Gender</label>
                                    <select class="form-control select2 mb-1" name="gender">

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

                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                    <label class="label">Phone No.</label>
                                    <input class="form-control mb-1" placeholder="Enter your phone" name="phone"
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
                                           type="text" value="Bahrain">
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
                                                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                                <label class="label">Card Type</label>
                                                                <select class="form-control select1 mb-1"
                                                                        name="card_type">
                                                                    @foreach($card as $c)
                                                                        <option value="{{$c->id}}">
                                                                            {{$c->name}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                                <label class="label">Payment Method</label>
                                                                <select class="form-control select1 mb-1"
                                                                        name="payment_method">

                                                                    <option value="benefit">
                                                                        Benefit
                                                                    </option>
                                                                    <option value="cash">
                                                                        Cash
                                                                    </option>

                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                                <label class="label">Contact Method</label>
                                                                <select class="form-control select1 mb-1"
                                                                        name="contact_method">
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

                                                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                                <label class="label">Package Type</label>
                                                                <select class="form-control select1 mb-1"
                                                                        name="package">

                                                                    @foreach($package as $c)
                                                                        <option value="{{$c->id}}">
                                                                            {{$c->name}}
                                                                        </option>
                                                                    @endforeach

                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                                <label class="label">Period</label>
                                                                <select class="form-control select1 mb-1" name="period">
                                                                    <option value="1Year">
                                                                        1 Year
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

                                                                    <option value="2Years">
                                                                        2 Years
                                                                    </option>
                                                                    <option value="5Years">
                                                                        5 Years
                                                                    </option>
                                                                </select>
                                                            </div>

                                                            <div class="col-md-3 mg-t-10 mg-md-t-0">
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
                                                            <div class="col-md-6 mg-t-10 mg-md-t-0">
                                                                <label class="label">Image</label>
                                                                <input type="file"  class="dropify" name="customer_img"
                                                                       data-height="90"/>
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

                                <div class="col-md-3 mt-4 mt-xl-0">
                                    <input type="submit" class="btn text-white  btn-block"
                                           style="background-color: #761193">

                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--- Internal Accordion Js -->
    <script src="{{URL::asset('assets/plugins/accordion/accordion.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/accordion.js')}}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>

    <!-- SWEET Alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Internal Treeview js -->
    <script src="{{URL::asset('assets/plugins/treeview/treeview.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/notify/js/notifit-custom.js')}}"></script>



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
        notif_confirm({
            'textaccept': 'That\'s it!',
            'textcancel': 'I don\'t have a pet :(',
            'message': 'What\'s your pet\'s name?',
            'callback': myCallback
        })
    </script>
@endsection
