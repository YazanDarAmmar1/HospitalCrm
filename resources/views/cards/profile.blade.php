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
<link href="{{URL::asset('assets/plugins/treeview/treeview.css')}}" rel="stylesheet" type="text/css"/>
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<style>
@media print {
    #print_Button {
        display: none;
    }
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


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
                <a href="{{route('show_cards')}}" class="btn btn-outline-success btn-lg" title="all card"><i
                        class="far fa-address-card"></i></a>
            </div>

            <div class="btn-group">
                <a href="{{route('add_cards')}}" title="add card" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-user-plus"></i>
                </a>
            </div>

            <div class="btn-group">
                <a href="{{route('profile_invoice_show',$card->id)}}" title="print invoice" class="btn btn-outline-danger">
                    <i class="fas fa-print"></i>
                    Print Invoice
                </a>
            </div>
            @if($card->cpr_no == $card->father_id)
            <div class="btn-group">
                <a href="{{route('profile_invoice_show_all',$card->id)}}" title="print all invoice " class="btn btn-outline-danger">
                    <i class="fas fa-print"></i>
                    Print All
                </a>
            </div>
            @else
            @endif
            @if($card->cpr_no == $card->father_id)
            <div class="btn-group">
                <a class="modal-effect btn  btn-outline-indigo"
                   data-effect="effect-scale"
                   data-id="{{$card->cpr_no}}" data-name="{{$card->name}}"
                   data-email="{{$card->email}}" data-date="{{$card->date}}"
                   data-mobile="{{$card->mobile}}" data-phone="{{$card->phone}}"
                   data-house="{{$card->house}}" data-road="{{$card->road}}"
                   data-block="{{$card->block}}" data-place="{{$card->place}}"
                   data-country="{{$card->country}}" data-card_type="{{$card->card_type_id}}"
                   data-payment_method="{{$card->payment_method}}" data-contact_method="{{$card->contact_method}}"
                   data-package_type="{{$card->package_type}}"
                   data-toggle="modal"
                   href="#modaldem2" title="add more"><i class="fas fa-users"></i>  Add More People</a>
            </div>
            @else
            @endif

            <div class="btn-group">
                <button type="submit" title="update" class="btn btn-outline-dark btn-lg"><i class="far fa-edit"></i></button>
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
                                    <input type="text" class="form-control" name="name"
                                           value="{{$card->name ?? ' '}}">

                                    <label class="label">Relation With | </label>
                                    <a href="{{url('profile')}}/{{$father_name->father_id ?? $card->cpr_no}}">{{$father_name->name ?? 'himself
'}}</a>
                                    <input type="hidden" readonly class="form-control" name="id"
                                           value="{{$card->id ?? ' '}}">

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
                                <a href="#home" data-toggle="tab" aria-expanded="true"> <span
                                        class="visible-xs"><i class="fas fa-user-check text-purple"></i></span> <span
                                        class="hidden-xs">ABOUT CUSTOMER</span>
                                </a>
                            </li>
                            @if($card->cpr_no == $card->father_id)
                            <li class="">
                                <a href="#profile" data-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="fas fa-users"></i></span> <span
                                        class="hidden-xs">MEMBER SHIP</span> </a>
                            </li>
                            @else

                            @endif

                            <li class="">
                                <a href="#card" data-toggle="tab" aria-expanded="false"> <span
                                        class="visible-xs"><i class="fas fa-id-badge"></i></span> <span
                                        class="hidden-xs">Card</span> </a>
                            </li>
                            @if($card->cpr_no == $card->father_id)

                                <li class="">
                                    <a href="#allcard" data-toggle="tab" aria-expanded="false"> <span
                                            class="visible-xs"><i class="fas fa-id-card"></i></span> <span
                                            class="hidden-xs">All Cards</span> </a>
                                </li>
                            @else

                            @endif

                            @if($card->cpr_no == $card->father_id)

                                <li class="">
                                    <a href="#allcarddesing" data-toggle="tab" aria-expanded="false"> <span
                                            class="visible-xs"><i class="fas fa-drafting-compass"></i></span> <span
                                            class="hidden-xs">All Design</span> </a>
                                </li>
                            @else

                            @endif
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
                                    <input type="text" name="house" class="form-control mb-1"
                                           value="{{$card->house ?? ' '}}">
                                </div>

                                <div class="col-lg-3 mt-2">
                                    <label class="label mb-1">Road</label>
                                    <input type="text" name="road" class="form-control mb-1"
                                           value="{{$card->road  ?? ' '}}">
                                </div>

                                <div class="col-lg-3 mt-2">
                                    <label class="label mb-1">Block</label>
                                    <input type="text" name="block" class="form-control mb-1"
                                           value="{{$card->block ?? ' '}}">
                                </div>

                                <div class="col-lg-3 mt-2">
                                    <label class="label mb-1">Place</label>
                                    <input type="text" name="place" class="form-control mb-1"
                                           value="{{$card->place ?? ' '}}">
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
                                               data-parent="#accordion11" href="#collapseFour1"
                                               aria-expanded="false">Card
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
                                                    <select class="form-control select2 mb-1"
                                                            name="payment_method">
                                                        <option selected
                                                                value="{{$card->payment_method ?? ' '}}">
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
                                                    <select class="form-control select1 mb-1"
                                                            name="contact_method">
                                                        <option selected
                                                                value="{{$card->contact_method ?? ' '}}">
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



                                                <div class="col-md-6 mg-t-10 mg-md-t-0">
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

                                                <div class="col-md-6 mg-t-10 mg-md-t-0">
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

                                                <div class="col-lg-3  mg-t-10 mg-md-t-0">
                                                    <label class="label mb-1">Prices-Card</label>
                                                    <input type="text" onchange="sum();" name="prices" id="prices" class="form-control mb-1"
                                                           value="{{$card->price ?? $card->Package->package_prices ?? ' '}}">
                                                </div>

                                                <div class="col-lg-3  mg-t-10 mg-md-t-0">
                                                    <label class="label mb-1">Delivery-Charge</label>
                                                    <input type="text" onchange="sum();" name="delivery" id="delivery" class="form-control mb-1"
                                                           value="{{$card->delivery ??  ' '}}">
                                                </div>


                                                <div class="col-lg-3  mg-t-10 mg-md-t-0">
                                                    <label class="label mb-1">Total</label>
                                                    <input type="text" name="total" id="total" class="form-control mb-1"
                                                           value="{{$card->total ?? ' '}}"    >
                                                </div>

                                                <div class="col-lg-3  mg-t-10 mg-md-t-0">
                                                    <label class="label mb-1">Balance Due</label>
                                                    <input type="text" name="balance" id="total" class="form-control mb-1"
                                                           value="{{$card->balance ?? ' '}}"    >
                                                </div>
                                                <div class="col-lg-12 mg-t-10 mg-md-t-0">
                                                    <label class="label">Image</label>
                                                    <input type="file" id="id_service_image" class="dropify" name="customer_img" value="{{$card->img}}"
                                                           data-height="90" data-default-file="{{ URL::to('customer_img')}}/{{$card->cpr_no ?? ''}}/{{$card->img ?? ''}}"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group float-right">
                                <button type="submit" class="btn btn-outline-indigo">UPDATE</button>
                            </div>
                        </div>

                        {{--profile--}}
                        <div class="tab-pane" id="profile">
                            <div class="row">
                                <div class="card-body col-lg-12">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example1">
                                            <thead>
                                            <tr>

                                                <th class="wd-15p border-bottom-0">id</th>
                                                <th class="wd-15p border-bottom-0">Name</th>
                                                <th class="wd-15p border-bottom-0">CPR</th>
                                                <th class="wd-20p border-bottom-0">Status</th>
                                                <th class="wd-15p border-bottom-0">Mobile</th>
                                                <th class="wd-10p border-bottom-0">Comment</th>
                                                <th class="wd-10p border-bottom-0">Action</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($card_father as $c)
                                                <tr>
                                                    <td>{{$c->id}}</td>
                                                    <td>{{$c->name}}</td>
                                                    <td>{{$c->cpr_no}}</td>
                                                    @if($c->status == 'draft')
                                                        <td> Draft <i class="fas fa-circle"
                                                                      style="color: red"></i></td>
                                                    @elseif($c->status == 'pending')
                                                        <td>Pending <i class="fas fa-circle"
                                                                       style="color: orange"></i></td>
                                                    @elseif($c->status == 'expired')
                                                        <td>Expired <i class="fas fa-circle"
                                                                       style="color: darkred"></i></td>
                                                    @elseif($c->status == 'done')
                                                        <td>Done <i class="fas fa-circle"
                                                                    style="color: blue"></i></td>
                                                    @elseif($c->status == 'paid')
                                                        <td>Paid <i class="fas fa-circle"
                                                                    style="color: dodgerblue"></i></td>
                                                    @else
                                                        <td>Print <i class="fas fa-circle"
                                                                     style="color: dodgerblue"></i></td>
                                                    @endif
                                                    <td>{{$c->mobile}}</td>
                                                    <td>{{$c->comment}}</td>
                                                    <td>
                                                        <div class="dropdown dropup">
                                                            <button aria-expanded="false" aria-haspopup="true"
                                                                    class="btn ripple btn-purple btn-sm"
                                                                    data-toggle="dropdown" type="button">Action  &downarrow;
                                                            </button>
                                                            <div class="dropdown-menu tx-13">

                                                                <a class="dropdown-item"
                                                                   href="{{route('profile_show',$c->cpr_no)}}"
                                                                   data-effect="effect-scale"
                                                                   title="edit"><i class="far fa-edit"></i> Edit</a>

                                                                <a class="modal-effect dropdown-item "
                                                                   data-effect="effect-scale"
                                                                   data-id="{{$c->id}}" data-name="{{$c->name}}"
                                                                   data-toggle="modal"
                                                                   href="#modaldem1" title="status"><i class="fe fe-refresh-cw"></i>

                                                                    Status</a>

                                                                <a class="modal-effect dropdown-item text-danger "
                                                                   data-effect="effect-scale"
                                                                   data-id="{{$c->id}}" data-name="{{$c->name}}"
                                                                   data-toggle="modal"
                                                                   href="#modaldem" title="delete"><i
                                                                        class="las la-trash"></i> Delete</a>


                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                        {{--card--}}
                        <div class="tab-pane" id="card">
                            <div class="row" id="print">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8 col-md-12" style="background-color:white" >

                                    <div class="row" style="height:330px;">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-12 ml-lg-5 pl-lg-5" style="margin-top: 16%;height: 180px;">
                                            <p class="mb-1 tx-bold " > Name : <span class="tx-uppercase"> {{$card->name ?? ''}}<br/> </span> </p>
                                            <p class="mb-1 tx-bold"> CPR : {{$card->cpr_no ?? ''}}<br/> </p>
                                            <p class="mb-1 tx-bold">  ID No. : SHC222 - {{$card->id ?? ''}}<br/> </p>
                                            <p class="mb-3 tx-bold">   Expiry Date  : {{$card->expiry ?? ''}}<br/> </p>
                                            <p class="tx-lg-bold"> This is Not Insurance Card </p>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <a href="{{route('single_card',['id'=>$card->id,'id2'=>0])}}"  class="btn btn-danger float-left mt-3 mr-2">
                                        <i class="mdi mdi-printer ml-1"></i>Print
                                    </a>
                                </div>

                            </div>

                            <br/>
                            <br/>


                            <div class="row" id="print">
                                <div class="col-lg-2">


                                </div>
                                <div class="col-lg-8 col-md-12" style="background-image: url({{URL::asset('assets/img/sama_card.jpg')}});background-size:cover; " >

                                    <div class="row" style="height:330px;">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-12 ml-lg-5 pl-lg-5" style="margin-top: 16%;height: 180px;">

                                            <p class="mb-1 tx-bold " > Name : <span class="tx-uppercase"> {{$card->name ?? ''}}<br/> </span> </p>
                                            <p class="mb-1 tx-bold"> CPR : {{$card->cpr_no ?? ''}}<br/> </p>
                                            <p class="mb-1 tx-bold">  ID No. : SHC222 - {{$card->id ?? ''}}<br/> </p>
                                            <p class="mb-3 tx-bold">   Expiry Date  : {{$card->expiry ?? ''}}<br/> </p>
                                           <p class="tx-lg-bold"> This is Not Insurance Card </p>

                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                </div>
                                <div class="col-lg-2">
                                    <a href="{{route('single_card',['id'=>$card->cpr_no,'id2'=>1])}}" onclick="" class="btn btn-danger float-left mt-3 mr-2">
                                        <i class="mdi mdi-printer ml-1"></i>Print
                                    </a>
                                </div>

                            </div>


                        </div>

                        {{--Allcard--}}
                        <div class="tab-pane" id="allcard">
                            <div class="row">
                                <div class="col-lg-4"><a href="{{route('single_card',['id'=>$card->id,'id2'=>2])}}"  class="btn btn-primary float-left mt-3 mr-2">
                                    <i class="mdi mdi-printer ml-1"></i>Print All
                                </a>
                            </div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"></div>
                            </div>
                            @foreach($card_father as $f)

                            <div class="row" id="print">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8" style="background-color: white" >

                                    <div class="row" style="height:330px;">
                                        <div class="col-lg-3">
                                        </div>
                                        <div class="col-lg-12 ml-lg-5 pl-lg-5" style="margin-top: 16%;height: 180px;">
                                            <p class="mb-1 tx-bold " > Name : <span class="tx-uppercase"> {{$f->name ?? ''}}<br/> </span> </p>
                                            <p class="mb-1 tx-bold"> CPR : {{$f->cpr_no ?? ''}}<br/> </p>
                                            <p class="mb-1 tx-bold">  ID No. : SHC222 - {{$f->id ?? ''}}<br/> </p>
                                            <p class="mb-3 tx-bold">   Expiry Date  : {{$f->expiry ?? ''}}<br/> </p>
                                            <p class="tx-lg-bold"> This is Not Insurance Card </p>

                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                </div>

                                <div class="col-lg-2">
                                    <a href="{{route('single_card',['id'=>$f->id,'id2'=>0])}}"  class="btn btn-danger float-left mt-3 mr-2">
                                        <i class="mdi mdi-printer ml-1"></i>Print
                                    </a>
                                </div>

                            </div>
                                <br/>
                                <br/>
                            @endforeach
                        </div>

                        {{--Allcarddesing--}}
                        <div class="tab-pane" id="allcarddesing">
                            <div class="row">
                                <div class="col-lg-4"><a href="{{route('single_card',['id'=>$card->id,'id2'=>3])}}"  class="btn btn-primary float-left mt-3 mr-2">
                                        <i class="mdi mdi-printer ml-1"></i>Print All
                                    </a>
                                </div>
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4"></div>
                            </div>
                            @foreach($card_father as $f)

                            <div class="row" id="print">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8" style="background-image: url({{URL::asset('assets/img/sama_card.jpg')}});background-size:cover;">

                                    <div class="row" style="height:330px;">
                                        <div class="col-lg-3"></div>
                                        <div class="col-lg-12 ml-lg-5 pl-lg-5" style="margin-top: 16%;height: 180px;">
                                            <p class="mb-1 tx-bold " > Name : <span class="tx-uppercase"> {{$f->name ?? ''}}<br/> </span> </p>
                                            <p class="mb-1 tx-bold"> CPR : {{$f->cpr_no ?? ''}}<br/> </p>
                                            <p class="mb-1 tx-bold">  ID No. : SHC222 - {{$f->id ?? ''}}<br/> </p>
                                            <p class="mb-3 tx-bold">   Expiry Date  : {{$f->expiry ?? ''}}<br/> </p>
                                            <p class="tx-lg-bold"> This is Not Insurance Card </p>

                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                </div>

                                <div class="col-lg-2">
                                    <a href="{{route('single_card',['id'=>$f->id,'id2'=>1])}}"  class="btn btn-danger float-left mt-3 mr-2">
                                        <i class="mdi mdi-printer ml-1"></i>Print
                                    </a>
                                </div>

                            </div>
                                <br/>
                                <br/>
                            @endforeach
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
<div class="modal " id="modaldem2" >
<div class="modal-dialog modal-dialog-centered modal-lg " role="document" >
    <div class="modal-content modal-content-demo">
        <div class="modal-header">
            <h6 class="modal-title">Add More People</h6>
            <button aria-label="Close" class="close" data-dismiss="modal"
                    type="button"><span aria-hidden="true">&times;</span></button>
        </div>
        <form action="{{route('add_cards_user')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body" style="background-color: whitesmoke">
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
                    <div class="col-lg-12 mg-t-10 mg-md-t-0">
                        <label class="label">Image</label>
                        <input type="file"  class="dropify" name="customer_img"
                               data-height="90"/>
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
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal  Form-elements js-->
<script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
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


{{--delete--}}
<script type="text/javascript">
$('#modaldem').on('show.bs.modal', function (e) {

    var id = $(e.relatedTarget).data('id');
    var name = $(e.relatedTarget).data('name');


    $(e.currentTarget).find('input[id="id_inp"]').val(id);
    $(e.currentTarget).find('input[id="name_inp"]').val(name);
});
</script>

<script>
function sum() {
    var prices = parseFloat(document.getElementById('prices').value);
    var delivery = parseFloat(document.getElementById('delivery').value);
    total2 = prices + delivery;
     document.getElementById('total').value=total2;

}
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
