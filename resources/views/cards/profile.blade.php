@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Font Awesome -->
    <link href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <!--Internal   Notify -->
    <link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
    <!--Internal  treeview -->
    <link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css" />

@endsection
@section('page-header')
    <form action="{{route('profile_update')}}" method="post" enctype="multipart/form-data">
        @csrf
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Cards</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Edit-Profile</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            <div class="mb-3 mb-xl-0">

                    @csrf
                    <div class="btn-group">
                        <button type="submit" class="btn btn-outline-indigo">UPDATE</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row row-sm">
        <div class="col-lg-4">
            <div class="card mg-b-20">
                <div class="card-body">
                    <div class="pl-0">
                        <div class="main-profile-overview">

                            <div class="d-flex justify-content-between row mg-b-20">
                                <div class="col-lg-12">
                                    <h5 class="label">Name</h5>
                                    <input type="text" class="form-control" name="name" value="{{$card->name ?? ' '}}">
                                    <input type="hidden" readonly class="form-control" name="id" value="{{$card->id ?? ' '}}">

                                </div>
                            </div>
                            <h6>Comment</h6>
                            <div class="main-profile-bio">
                                <textarea row="3" class="form-control"
                                          name="comment">{{$card->comment ?? ' '}}</textarea>
                            </div><!-- main-profile-bio -->
                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                            <div class="main-profile-social-list">

                                <div class="media">
                                    <div class="media-icon bg-info-transparent text-info">
                                        <i class="far fa-id-card"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>CPR NO.</span><input type="number" class="form-control" name="cpr"
                                                                   value="{{$card->cpr_no ?? ' '}}">
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-primary">
                                        <i class="fas fa-phone-square-alt"></i></div>
                                    <div class="media-body">
                                        <span>Phone</span><input class="form-control" type="text" name="phone"
                                                                 value="{{$card->phone ?? ' '}}">
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-success-transparent text-success">
                                        <i class="fas fa-mobile-alt"></i></div>
                                    <div class="media-body">
                                        <span>Mobile</span><input class="form-control" type="text" name="mobile"
                                                                  value="{{$card->mobile ?? ' '}}">
                                    </div>
                                </div>

                            </div>

                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">

            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="active">
                                <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i
                                            class="las la-user-circle tx-16 mr-1"></i></span> <span class="hidden-xs">ABOUT CUSTOMER</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-images tx-15 mr-1"></i></span> <span
                                        class="hidden-xs">GALLERY</span> </a>
                            </li>
                            <li class="">
                                <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i
                                            class="las la-cog tx-16 mr-1"></i></span> <span
                                        class="hidden-xs">SETTINGS</span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content border-left border-bottom border-right border-top-0 p-4"
                         style="background-color: whitesmoke">
                        <div class="tab-pane active" id="home">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="label mb-1">Email</label>
                                    <input type="email" name="email" class="form-control mb-2"
                                           value="{{$card->email ?? ' '}}">
                                </div>
                                <div class="col-lg-6">
                                    <label class="label mb-1">Issue Date</label>
                                    <input type="date" name="date" value="{{$card->date ?? ' '}}"
                                           class="form-control mb-1">
                                </div>
                                <div class="col-lg-6">
                                    <label class="label mb-1">Expiry Date</label>
                                    <input type="text" readonly name="expiry" class="form-control mb-1"
                                           value="{{$card->expiry ?? ' '}}">
                                </div>

                                <div class="col-lg-6">
                                    <label class="label mb-2">Agent</label>
                                    <select class="form-control select2" name="agent">
                                        <option selected value="{{$card->agent_id ?? ' '}}">
                                            {{$card->User->name ?? ' '}}
                                        </option>
                                        @foreach($user as $u)
                                            <option value="{{$u->id ?? ' '}}">
                                                {{$u->name ?? ' '}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label class="label mb-2">Gender</label>
                                    <select class="form-control select2" name="gender">
                                        <option selected value="{{$card->gender ?? ' '}}">
                                            {{$card->gender ?? ' '}}
                                        </option>
                                        <option value="male">
                                            Male
                                        </option>
                                        <option value="female">
                                            Female
                                        </option>
                                    </select>
                                </div>

                                <div class="col-lg-3 mt-2">
                                    <label class="label mb-1"> House </label>
                                    <input type="text" name="house" class="form-control mb-1" value="{{$card->house ?? ' '}}">
                                </div>

                                <div class="col-lg-3 mt-2">
                                    <label class="label mb-1">Road</label>
                                    <input type="text" name="road" class="form-control mb-1" value="{{$card->road  ?? ' '}}">
                                </div>

                                <div class="col-lg-3 mt-2">
                                    <label class="label mb-1">Block</label>
                                    <input type="text" name="block" class="form-control mb-1" value="{{$card->block ?? ' '}}">
                                </div>

                                <div class="col-lg-3 mt-2">
                                    <label class="label mb-1">Place</label>
                                    <input type="text" name="place" class="form-control mb-1" value="{{$card->place ?? ' '}}">
                                </div>

                                <div class="col-lg-12 mt-2">
                                    <label class="label mb-1">Country</label>
                                    <input type="text" name="country" class="form-control mb-1"
                                           value="{{$card->country ?? ' '}}">
                                </div>

                            </div>
                            <hr/>

                            <div class="panel-group1" id="accordion11">
                                <div class="panel panel-default  mb-4">
                                    <div class="panel-heading1" style="background-color:#761193;">
                                        <h4 class="panel-title1">
                                            <a class="accordion-toggle collapsed" data-toggle="collapse"
                                               data-parent="#accordion11" href="#collapseFour1" aria-expanded="false">Card
                                                Data<i class="fe fe-arrow-left ml-2"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour1" class="panel-collapse collapse" role="tabpanel"
                                         style="background-color: white" aria-expanded="false">
                                        <div class="panel-body border">
                                            <div class="row">
                                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                    <label class="label">Card Type</label>
                                                    <select class="form-control select2 mb-1" name="card_type">
                                                        <option selected value="{{$card->card_type_id ?? ' '}}">
                                                            {{$card->Type->name ?? ' '}}
                                                        </option>
                                                        @foreach($card_type as $c)
                                                            <option value="{{$c->id ?? ' '}}">
                                                                {{$c->name ?? ' '}}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                    <label class="label">Payment Method</label>
                                                    <select class="form-control select2 mb-1" name="payment_method">
                                                        <option selected value="{{$card->payment_method ?? ' '}}">
                                                            {{$card->payment_method ?? ' '}}
                                                        </option>
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
                                                    <select class="form-control select1 mb-1" name="contact_method">
                                                        <option selected value="{{$card->contact_method ?? ' '}}">
                                                            {{$card->contact_method ?? ' '}}
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

                                                <div class="col-md-3 mg-t-10 mg-md-t-0">
                                                    <label class="label">Package Type</label>
                                                    <select class="form-control select2 mb-1" name="package">
                                                        <option value="{{$card->package_type ?? ' '}}">
                                                            {{$card->Package->name ?? ' '}}
                                                        </option>
                                                        @foreach($package as $p)
                                                            <option value="{{$p->id ?? ' '}}">
                                                                {{$p->name ?? ' '}}
                                                            </option>
                                                        @endforeach


                                                    </select>
                                                </div>

                                                <div class="col-lg-4  mg-t-10 mg-md-t-0">
                                                    <label class="label mb-1">Prices</label>
                                                    <input type="number" name="prices" class="form-control mb-1"
                                                           value="{{$card->price ?? ' '}}">
                                                </div>

                                                <div class="col-md-4 mg-t-10 mg-md-t-0">
                                                    <label class="label">Period</label>
                                                    <select class="form-control select1 mb-1" name="period">
                                                        <option selected value="{{$card->period ?? ' '}}">
                                                            {{$card->period ?? ''}}
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
                                                        <option selected value="{{$card->status ?? ' '}}">
                                                            {{$card->status ?? ' '}}
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

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{--profile--}}
                        <div class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="border p-1 card thumb">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{URL::asset('assets/img/photos/7.jpg')}}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{URL::asset('assets/img/photos/8.jpg')}}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{URL::asset('assets/img/photos/9.jpg')}}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb  mb-xl-0">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{URL::asset('assets/img/photos/10.jpg')}}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb  mb-xl-0">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{URL::asset('assets/img/photos/6.jpg')}}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class=" border p-1 card thumb  mb-xl-0">
                                        <a href="#" class="image-popup" title="Screenshot-2"> <img
                                                src="{{URL::asset('assets/img/photos/5.jpg')}}" class="thumb-img"
                                                alt="work-thumbnail"> </a>
                                        <h4 class="text-center tx-14 mt-3 mb-0">Gallary Image</h4>
                                        <div class="ga-border"></div>
                                        <p class="text-muted text-center"><small>Photography</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">
                            <form role="form">
                                <div class="form-group">
                                    <label for="FullName">Full Name</label>
                                    <input type="text" value="John Doe" id="FullName" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" value="first.last@example.com" id="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Username">Username</label>
                                    <input type="text" value="john" id="Username" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" placeholder="6 - 15 Characters" id="Password"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="RePassword">Re-Password</label>
                                    <input type="password" placeholder="6 - 15 Characters" id="RePassword"
                                           class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="AboutMe">About Me</label>
                                    <textarea id="AboutMe" class="form-control">Loren gypsum dolor sit mate, consecrate disciplining lit, tied diam nonunion nib modernism tincidunt it Loretta dolor manga Amalia erst volute. Ur wise denim ad minim venial, quid nostrum exercise ration perambulator suspicious cortisol nil it applique ex ea commodore consequent.</textarea>
                                </div>
                                <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save
                                </button>
                            </form>
                        </div>
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
    </form>
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{URL::asset('assets/js/select2.js')}}"></script>

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
