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
                <h4 class="content-title mb-0 my-auto">Hospitals</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Profile</span>
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
                            <div class="main-img-user profile-user">
                                <img alt=""
                                     src="{{ URL::to('Attachments')}}/{{$hospital->id ?? ''}}/{{$attachment->url_logo ?? ''}}"><a
                                    class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
                            </div>
                            <div class="d-flex justify-content-between mg-b-20">
                                <div>
                                    <h5 class="main-profile-name">{{$hospital->name ?? ''}}</h5>
                                </div>
                            </div>
                            <h6>Description</h6>
                            <div class="main-profile-bio">
                                {{$hospital->description ?? ''}}
                            </div><!-- main-profile-bio -->

                            <hr class="mg-y-30">
                            <label class="main-content-label tx-13 mg-b-20">Social</label>
                            <div class="main-profile-social-list">
                                <div class="media">
                                    <div class="media-icon bg-danger-transparent text-danger">
                                        <i class="icon ion-md-link"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Website</span> <a>{{$hospital->website ?? ''}}/</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-icon bg-info-transparent text-danger">
                                        <i class="icon ion-md-phone-portrait"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Contact 1</span> <a>{{$hospital->contact1 ?? ''}}</a>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-icon bg-primary-transparent text-danger">
                                        <i class="icon ion-md-phone-portrait"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Contact 2</span> <a>{{$hospital->contact2 ?? ''}}</a>
                                    </div>
                                </div>


                                <div class="media">
                                    <div class="media-icon bg-danger-transparent text-danger">
                                        <i class="icon ion-md-contact"></i>
                                    </div>
                                    <div class="media-body">
                                        <span>Email</span> <a
                                            href="mailto:{{$hospital->email  ?? ' '}}">{{$hospital->email ?? ''}}</a>
                                    </div>
                                </div>
                            </div>
                            <hr class="mg-y-30">

                        </div><!-- main-profile-overview -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="row row-sm">
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-primary-transparent">
                                    <i class="icon-layers text-primary"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Contract Date</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">{{$hospital->contract_date ?? ''}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-danger-transparent">
                                    <i class="icon-credit-card text-danger"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">CR-No</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">{{$hospital->cr_no ??' '}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xl-4 col-lg-12 col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <div class="counter-status d-flex md-mb-0">
                                <div class="counter-icon bg-success-transparent">
                                    <i class="icon-rocket text-success"></i>
                                </div>
                                <div class="mr-auto">
                                    <h5 class="tx-13">Expiry Date</h5>
                                    <h2 class="mb-0 tx-22 mb-1 mt-1">{{$hospital->expiry_date ??''}}</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="tabs-menu ">
                        <!-- Tabs -->
                        <ul class="nav nav-tabs profile navtab-custom panel-tabs">
                            <li class="active">
                                <a href="#home" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="far fa-address-card"></i>
                                    </span> <span class="hidden-xs">ABOUT HOSPITAL</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#services" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fas fa-paste"></i>
                                    </span> <span
                                        class="hidden-xs">SERVICES</span> </a>
                            </li>
                            <li class="">
                                <a href="#profile" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fas fa-cogs"></i>
                                    </span> <span
                                        class="hidden-xs">SETTINGS</span> </a>
                            </li>



                        </ul>
                    </div>
                    <div class="tab-content border-left border-bottom border-right border-top-0 p-4">
                        <div class="tab-pane active" id="home">
                            <h4 class="tx-15 text-uppercase text-primary mb-3">COMMENT</h4>
                            <p class="m-b-5">{{$hospital->comment ??''}}</p>
                            <div class="m-t-30">
                                <h4 class="tx-15 text-uppercase text-primary mt-3">Place</h4>
                                <div class=" p-t-10">
                                    <p class="">{{$hospital->place ??''}}</p>
                                </div>

                                <h4 class="tx-15 text-uppercase text-primary mt-3">Address</h4>
                                <div class=" p-t-10">
                                    <p class="">{{$hospital->address ??' '}}</p>
                                </div>

                                <h4 class="tx-15 text-uppercase text-primary mt-3">Provider Type</h4>
                                <div class=" p-t-10">
                                    <td>{{$hospital->Category->category ?? ' '}}</td>
                                </div>
                                <hr>
                                <h4 class="tx-15 text-uppercase text-primary mt-3">Status</h4>
                                <div class=" p-t-10">
                                    @if($hospital->status ??'' == 0)
                                        <td><i class="fas fa-circle" style="color: red"></i>-Draft</td>
                                    @elseif($hospital->status ?? '' == 1)
                                        <td><i class="fas fa-circle" style="color: orange"></i>-Pending</td>
                                    @else
                                        <td><i class="fas fa-circle" style="color: #0a47ff"></i>-Done</td>

                                    @endif
                                </div>

                                <h4 class="tx-15 text-uppercase text-primary mt-3">Online-Offline</h4>
                                <div class=" p-t-10">
                                    @if($hospital->on_off ??' ' == 0)
                                        <td><i class="fas fa-circle" style="color: red"></i>-Offline</td>
                                    @else
                                        <td><i class="fas fa-circle" style="color: blue"></i>-Online</td>

                                    @endif
                                </div>



                            </div>
                        </div>
                        <div class="tab-pane" id="profile">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card mg-b-20">
                                        <div class="card-header pb-0">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mg-b-0 text-primary">Logo Hospital Image</h4>
                                            </div>
                                            <p class="tx-12 tx-gray-500 mb-2"></p>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example33" class="table key-buttons text-md-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Id</th>
                                                        <th class="border-bottom-0">Logo</th>
                                                        <th class="border-bottom-0">Process</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{$attachment->id ?? ' '}}</td>
                                                        <td>{{$attachment->url_logo ?? ' '}}</td>
                                                        <td>
                                                            @if(!(($attachment->id ?? ' ') == ' '))
                                                                <a class="modal-effect btn btn-sm btn-danger"
                                                                   data-effect="effect-scale"
                                                                   data-id="{{$hospital->id ?? ' '}}" data-name="{{$attachment->url_logo ?? ' '}}"
                                                                   data-toggle="modal"
                                                                   href="#modaldem" title="delete"><i class="las la-trash"></i></a>

                                                            @else

                                                            @endif
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <div class="card mg-b-20">
                                        <div class="card-header pb-0">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mg-b-0 text-primary">Contract Hospital File</h4>
                                            </div>
                                            <p class="tx-12 tx-gray-500 mb-2"></p>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example11" class="table key-buttons text-md-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Id</th>
                                                        <th class="border-bottom-0">contract</th>
                                                        <th class="border-bottom-0">Process</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{$contract->id ?? ' '}}</td>
                                                        <td>{{$contract->contract_file ?? ' '}}</td>
                                                        <td>
                                                            @if(!(($contract->id ?? ' ') == ' '))
                                                            <a class="modal-effect btn btn-sm btn-danger"
                                                                 data-effect="effect-scale"
                                                                 data-id="{{$hospital->id ?? ' '}}" data-name="{{$contract->contract_file ?? ' '}}"
                                                                 data-toggle="modal"
                                                                 href="#modaldem11" title="delete"><i class="las la-trash"></i></a>

                                                            @else

                                                            @endif
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <div class="card mg-b-20">
                                        <div class="card-header pb-0">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mg-b-0 text-primary">Doctors List File</h4>
                                            </div>
                                            <p class="tx-12 tx-gray-500 mb-2"></p>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example11" class="table key-buttons text-md-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Id</th>
                                                        <th class="border-bottom-0">List</th>
                                                        <th class="border-bottom-0">Process</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>{{$list->id ?? ' '}}</td>
                                                        <td>{{$list->file ?? ' '}}</td>
                                                        <td>
                                                            @if(!(($list->id ?? ' ') == ' '))
                                                                @can('doctor-list')
                                                            <a class="modal-effect btn btn-sm btn-danger"
                                                                 data-effect="effect-scale"
                                                                 data-id="{{$list->id ?? ' '}}" data-name="{{$list->file ?? ' '}}"
                                                                 data-toggle="modal"
                                                                 href="#modaldem113" title="delete"><i class="las la-trash"></i></a>

                                                                @endcan
                                                            @can('download-doctor')

                                                                <a class="btn btn-outline-primary btn-sm"
                                                                   href="{{ url('View_file') }}/{{ $list->id }}/{{ $list->file }}"
                                                                   role="button"><i class="fas fa-file-download"></i>&nbsp;
                                                                </a>

                                                                    @endcan
                                                            @else

                                                            @endif
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/div-->
                                </div>
                                </div>


                        <div class="tab-pane" id="services">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card mg-b-20">
                                        <div class="card-header pb-0">
                                            <div class="d-flex justify-content-between">
                                                <h4 class="card-title mg-b-0 text-primary">Doctors List File</h4>
                                            </div>

                                            <div class="d-flex justify-content-between float-right">
                                                <a class="modal-effect btn btn-md btn-outline-primary"
                                                   data-effect="effect-scale"
                                                   data-id="{{$hospital->id ?? ''}}" data-name="{{$hospital->name ??' '}}"
                                                   data-toggle="modal"
                                                   href="#modaldem223" title="Services"><i class="fas fa-plus"></i></a>
                                            </div>
                                            <p class="tx-12 tx-gray-500 mb-2"></p>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="example1" class="table key-buttons text-md-nowrap">
                                                    <thead>
                                                    <tr>
                                                        <th class="border-bottom-0">Id</th>
                                                        <th class="border-bottom-0">name</th>
                                                        <th class="border-bottom-0">discount</th>
                                                        <th class="border-bottom-0">price</th>
                                                        <th class="border-bottom-0"></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($services as $services)
                                                    <tr>
                                                        <td>{{$services->id ?? ' '}}</td>
                                                        <td>{{$services->name ?? ' '}}</td>
                                                        <td>{{$services->discount ?? ' '}}</td>
                                                        <td>{{$services->price ?? ' '}}</td>
                                                        <td>
                                                            @if(!(($services->id ?? ' ') == ' '))
                                                                <a class="modal-effect btn btn-sm btn-danger"
                                                                   data-effect="effect-scale"
                                                                   data-id="{{$services->id ?? ' '}}" data-name="{{$services->name ?? ' '}}"
                                                                   data-toggle="modal"
                                                                   href="#modaldem1132" title="delete"><i class="las la-trash"></i></a>

                                                                <a class="modal-effect btn btn-sm btn-primary"
                                                                   data-effect="effect-scale"
                                                                   data-id="{{$services->id ?? ' '}}" data-name="{{$services->name ?? ' '}}"
                                                                   data-ar="{{$services->name_ar ?? ' '}}"  data-discount="{{$services->discount ?? ' '}}"
                                                                   data-price="{{$services->price ?? ' '}}"
                                                                   data-toggle="modal"
                                                                   href="#modaldem22" title="delete"><i class="fas fa-sync"></i></a>

                                                            @else

                                                            @endif
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
                                </div>
                                <div class="tab-pane" id="settings">
                                    <form role="form">
                                        <div class="form-group">
                                            <label for="FullName">Full Name</label>
                                            <input type="text" value="John Doe" id="FullName" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" value="first.last@example.com" id="Email"
                                                   class="form-control">
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

    {{--delete--}}
    <div class="modal" id="modaldem">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Logo</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('delete_attachment')}}" method="post">
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


    {{--delete-contract--}}
    <div class="modal" id="modaldem11">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Contract</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('delete_contract')}}" method="post">
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

    {{--delete-List--}}
    <div class="modal" id="modaldem113">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete File</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('delete_list')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p>Are you sure of the deleting process ?</p><br>
                        <input type="text" name="id_inp" id="id_inp">
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


    {{--delete-Services--}}
    <div class="modal" id="modaldem1132">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Service</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('service_delete')}}" method="post">
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

    {{--Services--}}
    <div class="modal" id="modaldem22">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Hospital Services</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>

                </div>
                <form action="{{route('service_edit')}}" method="post">
                    @csrf
                    <div class="modal-body row">
                        <div class="col-lg-6">
                            <label class="label mt-2">The Service</label>
                            <input class="form-control" name="id_id" type="hidden" required>
                            <input class="form-control" name="service" type="text" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="label mt-2">*Arabic*</label>
                            <input class="form-control" name="service_ar" type="text" required>
                        </div>

                        <div class="col-lg-12">
                            <label class="label mt-2">Discount %</label>
                            <input class="form-control" name="discount" type="text">
                        </div>

                        <div class="col-lg-12">
                            <label class="label mt-2">Price Before</label>
                            <input class="form-control" name="price" type="text">
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



    {{--Services--}}
    <div class="modal" id="modaldem223">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Edit Hospital Services</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>

                </div>
                <form action="{{route('service_add')}}" method="post">
                    @csrf
                    <div class="modal-body row">
                        <div class="col-lg-6">
                            <label class="label mt-2">The Service</label>
                            <input class="form-control" name="id_id" type="hidden" required>
                            <input class="form-control" name="service" type="text" required>
                        </div>
                        <div class="col-lg-6">
                            <label class="label mt-2">*Arabic*</label>
                            <input class="form-control" name="service_ar" type="text" required>
                        </div>

                        <div class="col-lg-12">
                            <label class="label mt-2">Discount %</label>
                            <input class="form-control" name="discount" type="text">
                        </div>

                        <div class="col-lg-12">
                            <label class="label mt-2">Price Before</label>
                            <input class="form-control" name="price" type="text">
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
        $('#modaldem11').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[id="id_inp"]').val(id);
            $(e.currentTarget).find('input[id="name_inp"]').val(name);
        });
    </script>

    <script type="text/javascript">
        $('#modaldem113').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[id="id_inp"]').val(id);
            $(e.currentTarget).find('input[id="name_inp"]').val(name);
        });
    </script>

    <script type="text/javascript">
        $('#modaldem1132').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');


            $(e.currentTarget).find('input[id="id_inp"]').val(id);
            $(e.currentTarget).find('input[id="name_inp"]').val(name);
        });
    </script>

    <script type="text/javascript">
        $('#modaldem223').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            $(e.currentTarget).find('input[name="id_id"]').val(id);
        });
    </script>

    <script type="text/javascript">
        $('#modaldem22').on('show.bs.modal', function (e) {

            var id = $(e.relatedTarget).data('id');
            var name = $(e.relatedTarget).data('name');
            var name_ar = $(e.relatedTarget).data('ar');
            var discount = $(e.relatedTarget).data('discount');
            var price = $(e.relatedTarget).data('price');


            $(e.currentTarget).find('input[name="id_id"]').val(id);
            $(e.currentTarget).find('input[name="service"]').val(name);
            $(e.currentTarget).find('input[name="service_ar"]').val(name_ar);
            $(e.currentTarget).find('input[name="discount"]').val(discount);
            $(e.currentTarget).find('input[name="price"]').val(price);
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
