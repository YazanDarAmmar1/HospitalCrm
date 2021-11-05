@extends('layouts.master')
@section('css')
    <!--- Internal Select2 css-->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <!---Internal Fancy uploader css-->
    <link href="{{URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet"/>
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css')}}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css')}}">
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
                <h4 class="content-title mb-0 my-auto">Hospitals</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add Hospital</span>
            </div>
        </div>
        <div class="d-flex my-xl-auto right-content">
            @can('add-hospital')
            <div class="pr-1 mb-3 mb-xl-0">
                <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-super-scaled"
                   data-toggle="modal" href="#modaldemo8"><i class="fas fa-plus"></i> </a>
            </div>
            @endcan
            @can('import-services')

            <div class="pr-1 mb-3 mb-xl-0">


                <a class="modal-effect btn btn-outline-danger btn-block" data-effect="effect-super-scaled"
                   data-toggle="modal" href="#modaldemlo124">Import Services</a>

            </div>
            @endcan

            @can('import-hospital')
            <div class="pr-1 mb-3 mb-xl-0">

                <a class="modal-effect btn btn-outline-dark btn-block" data-effect="effect-super-scaled"
                   data-toggle="modal" href="#modaldemlo12234">Import Hospitals</a>

            </div>
            @endcan
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <!-- row opened -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example">
                            <thead>
                            <tr>

                                <th class="wd-15p border-bottom-0">name</th>
                                <th class="wd-15p border-bottom-0">expiry date</th>
                                <th class="wd-20p border-bottom-0">email</th>
                                <th class="wd-15p border-bottom-0">comment</th>
                                <th class="wd-15p border-bottom-0">online</th>
                                <th class="wd-10p border-bottom-0">status</th>
                                <th class="wd-25p border-bottom-0"></th>
                                <th class="wd-25p border-bottom-0">process</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hospitals as $h)
                                <tr id="pos{{$h->id}}">
                                    <td><a href="{{url('profile')}}/{{$h->id}}">{{$h->name}}</a></td>
                                    <td>{{$h->expiry_date}}</td>
                                    <td>{{$h->email}}</td>
                                    <td>{{$h->comment}}</td>
                                    @if($h->on_off == 0)
                                        <td><i class="fas fa-circle" style="color: red"></i>Offline</td>
                                    @else
                                        <td><i class="fas fa-circle" style="color: blue"></i>Online</td>

                                    @endif

                                    @if($h->status == 0)
                                        <td><i class="fas fa-circle" style="color: red"></i>Draft</td>
                                    @elseif($h->status == 1)
                                        <td><i class="fas fa-circle" style="color: orange"></i>Pending</td>
                                    @else
                                        <td><i class="fas fa-circle" style="color: #0a47ff"></i>Done</td>

                                    @endif
                                    <td></td>

                                    <td>
                                        @can('delete-hospital')
                                        <a class="modal-effect btn btn-sm btn-danger"
                                           data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}"
                                           data-toggle="modal"
                                           href="#modaldem" title="delete"><i class="las la-trash"></i></a>
                                        @endcan
                                        @can('edit-hospital')
                                        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}" data-name_ar="{{$h->name_ar}}"
                                           data-contract="{{$h->contract_date}}"
                                           data-expiry="{{$h->contract_date}}" data-cr="{{$h->cr_no}}"
                                           data-place="{{$h->place}}"
                                           data-place_ar="{{$h->place_ar}}" data-contact="{{$h->contact1}}"
                                           data-contact2="{{$h->contact2}}"data-category="{{$h->category_ar}}"
                                           data-email="{{$h->email}}" data-address="{{$h->address}}"
                                           data-address_ar="{{$h->address_ar}}"
                                           data-website="{{$h->website}}" data-category="{{$h->category}}"
                                           data-description="{{$h->description}}"
                                           data-description_ar="{{$h->description_ar}}" data-comment="{{$h->comment}}"
                                           data-toggle="modal"
                                           href="#modaldemo99"
                                           title="edit"><i class="las la-pen"></i></a>
                                            @endcan
                                            @can('edit-status-hospital')
                                        <a class="modal-effect btn btn-sm btn-primary"
                                           data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}"
                                           data-toggle="modal"
                                           href="#modaldem2" title="status"><i class="fas fa-sync-alt"></i></a>
                                            @endcan
                                            @can('edit-online')

                                        <a class="modal-effect btn btn-sm btn-dark"
                                           data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}"
                                           data-toggle="modal"
                                           href="#modaldem21" title="Online-Offline"><i class="fas fa-plug"></i></a>
                                            @endcan
                                            @can('add-service')
                                        <a class="modal-effect btn btn-sm btn-danger"
                                           data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}"
                                           data-toggle="modal"
                                           href="#modaldem22" title="Services"><i class="far fa-hospital"></i></a>
                                            @endcan
                                            @can('logo')
                                        <a class="modal-effect btn btn-sm btn-info"
                                           data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}"
                                           data-toggle="modal"
                                           href="#modaldemlo" title="Logo"><i class="far fa-images"></i></a>
                                            @endcan
                                            @can('contract')

                                        <a class="modal-effect btn btn-sm btn-warning"
                                           data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}"
                                           data-toggle="modal"
                                           href="#modaldemlo122" title="contract"><i class="fas fa-file-signature"></i></a>
                                            @endcan
                                            @can('doctor-list')

                                        <a class="modal-effect btn btn-sm btn-danger"
                                           data-effect="effect-scale"
                                           data-id="{{$h->id}}" data-name="{{$h->name}}"
                                           data-toggle="modal"
                                           href="#modaldemlod" title="pdf"><i class="far fa-file-pdf"></i></a>
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


        <!-- row closed -->
        <!-- Modal effects edit -->
        <div class="modal" id="modaldemo99">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-content-demo">
                    <div class="modal-header">
                        <h6 class="modal-title">Add Hospital</h6>
                        <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <form method="post" action="{{route('hospital_edit')}}">
                        @csrf
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="label">Contract Date</label>
                                    <input type="date" class="form-control" name="contract_date">
                                    <input type="hidden" class="form-control" name="id">
                                </div>

                                <div class="col-lg-6">
                                    <label class="label">Expiry Date</label>
                                    <input type="date" class="form-control" name="expiry_date">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="labe mt-2 ">Provider Name</label>
                                    <input type="text" class="form-control" name="provider_name">
                                </div>

                                <div class="col-lg-6">
                                    <label class="labe mt-2 ">*Arabic*</label>
                                    <input type="text" class="form-control" name="provider_name_ar">
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="label mt-2">CR No</label>
                                    <input type="text" class="form-control" name="cr_no">
                                </div>
                                <div class="col-lg-6">
                                    <label class="label mt-2">Place</label>
                                    <input type="text" class="form-control" name="place">
                                </div>
                                <div class="col-lg-6">
                                    <label class="label mt-2">*Arabic*</label>
                                    <input type="text" class="form-control" name="place_ar">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="label mt-2">Contact 1</label>
                                    <input class="form-control" id="contact" name="contact" type="tel">
                                </div>
                                <div class="col-lg-6">
                                    <label class="label mt-2">Contact 2</label>
                                    <input class="form-control" id="contact" name="contact2" type="tel">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="label mt-2">Email</label>

                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">@</span>
                                        </div>
                                        <input aria-describedby="basic-addon1" name="email" class="form-control"
                                               placeholder="Email" type="email">
                                    </div><!-- input-group -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="label mt-2">Address</label>
                                    <input class="form-control" id="Address" name="address" type="text">
                                </div>
                                <div class="col-lg-6">
                                    <label class="label mt-2">*Arabic*</label>
                                    <input class="form-control" id="Address" name="address_ar" type="text">
                                </div>
                                <div class="col-lg-12">
                                    <label class="label mt-2">Website</label>
                                    <input class="form-control" id="Website" name="website" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="label mt-2">Category</label>
                                    <select class="form-control select2" name="category">
                                        <option label="Choose one">
                                        </option>
                                        <option value="Firefox">
                                            Firefox
                                        </option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label class="label mt-2">*Arabic*</label>
                                    <input class="form-control" id="type_of" name="category_ar" type="text">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <label class="label mt-2">Description</label>
                                    <textarea class="form-control" name="description"
                                              rows="3"></textarea>
                                </div>

                                <div class="col-lg-6">
                                    <label class="label mt-2">*Arabic*</label>
                                    <textarea class="form-control" name="description_ar"
                                              rows="3"></textarea>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <label class="label mt-2">Comment</label>
                                    <textarea class="form-control" name="comment" placeholder="Comment"
                                              rows="3"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn ripple btn-primary" type="submit">Save</button>
                                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Modal effects-->

        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->
    </div>


    {{--delete--}}
    <div class="modal" id="modaldem">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Delete Hospital</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('hospital_delete')}}" method="post">
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

    {{--logo--}}
    <div class="modal" id="modaldemlo">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Logo & Images </h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('save_attachment')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-sm-12 col-md-4 col-lg-12">
                            <label class="label mt-2">Logo</label>
                            <input type="hidden" name="id_inp">
                            <input type="file" class="dropify" data-height="70" name="file_name"/>
                        </div>

                        <div class="col-sm-12 col-md-4 col-lg-12">
                            <label class="label mt-2">Hospital Image</label>
                            <input type="file" disabled="disabled" class="dropify" data-height="70" name="hospital"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{--logo--}}
    <div class="modal" id="modaldemlod">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Doctors List </h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('save_list')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-sm-12 col-md-4 col-lg-12">
                            <label class="label mt-2">Doctors List</label>
                            <input type="hidden" name="id_inp">
                            <input type="file" class="dropify" data-height="70" name="list" required/>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Add</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    {{--contract--}}
    <div class="modal" id="modaldemlo122">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Contract</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('save_contract')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="col-sm-12 col-md-4 col-lg-12">
                            <label class="label mt-2">Contract</label>
                            <input type="hidden" name="id_inp">
                            <input type="file" class="dropify" data-height="70" name="contract"/>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Add</button>
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
                <form action="{{route('hospital_import')}}" method="post" enctype="multipart/form-data">
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


    {{--contract--}}
    <div class="modal" id="modaldemlo124">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add File Import</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('services_import')}}" method="post" enctype="multipart/form-data">
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


    {{--Status--}}
    <div class="modal" id="modaldem2">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Change Status</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('edit_status')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p>Do you want to change status ?</p><br>
                        <input type="hidden" name="id_inp" id="id_inp">
                        <select class="form-control select2" name="status">
                            <option label="Choose one">
                            </option>
                            <option value="0">
                                Draft
                            </option>
                            <option value="1">
                                Pending
                            </option>
                            <option value="2">
                                Done
                            </option>
                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Change</button>
                    </div>
                </form>
            </div>
        </div>

    </div>




    {{--Online--}}
    <div class="modal" id="modaldem21">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Change Status Online</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('edit_status_online')}}" method="post">
                    @csrf
                    <div class="modal-body">
                        <p>Do you want to change status Online ?</p><br>
                        <input type="hidden" name="id_inp" id="id_inp">
                        <select class="form-control select2" name="on_off">
                            <option label="Choose one">
                            </option>
                            <option value="1">
                                Online
                            </option>
                            <option value="0">
                                Offline
                            </option>

                        </select>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Change</button>
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
                    <h6 class="modal-title">Add Hospital Services</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal"
                            type="button"><span aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('service_add')}}" method="post">
                    @csrf
                    <div class="modal-body row">
                        <div class="col-lg-6">
                            <label class="label mt-2">The Service</label>
                            <input class="form-control" name="hospital_id" type="hidden" required>
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

    <!-- Modal effects -->
    <div class="modal" id="modaldemo8">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">Add Hospital</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form method="post" action="{{route('hospital_add')}}">
                    @csrf
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="label">Contract Date</label>
                                <input type="date" class="form-control" name="contract_date">
                            </div>

                            <div class="col-lg-6">
                                <label class="label">Expiry Date</label>
                                <input type="date" class="form-control" name="expiry_date">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="labe mt-2 ">Provider Name</label>
                                <input type="text" class="form-control" name="provider_name">
                            </div>

                            <div class="col-lg-6">
                                <label class="labe mt-2 ">*Arabic*</label>
                                <input type="text" class="form-control" name="provider_name_ar">
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <label class="label mt-2">CR No</label>
                                <input type="text" class="form-control" name="cr_no">
                            </div>
                            <div class="col-lg-6">
                                <label class="label mt-2">Place</label>
                                <input type="text" class="form-control" name="place">
                            </div>
                            <div class="col-lg-6">
                                <label class="label mt-2">*Arabic*</label>
                                <input type="text" class="form-control" name="place_ar">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="label mt-2">Contact 1</label>
                                <input class="form-control" id="contact" name="contact" type="tel">
                            </div>
                            <div class="col-lg-6">
                                <label class="label mt-2">Contact 2</label>
                                <input class="form-control" id="contact" name="contact2" type="tel">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <label class="label mt-2">Email</label>

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">@</span>
                                    </div>
                                    <input aria-describedby="basic-addon1" name="email" class="form-control"
                                           placeholder="Email" type="email">
                                </div><!-- input-group -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="label mt-2">Address</label>
                                <input class="form-control" id="Address" name="address" type="text">
                            </div>
                            <div class="col-lg-6">
                                <label class="label mt-2">*Arabic*</label>
                                <input class="form-control" id="Address" name="address_ar" type="text">
                            </div>
                            <div class="col-lg-12">
                                <label class="label mt-2">Website</label>
                                <input class="form-control" id="Website" name="website" type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="label mt-2">Category</label>
                                <select class="form-control select2" name="category">
                                    <option label="Choose one">
                                    </option>
                                    <option value="Firefox">
                                        Firefox
                                    </option>
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <label class="label mt-2">*Arabic*</label>
                                <input class="form-control" id="type_of" name="category_ar" type="text">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <label class="label mt-2">Description</label>
                                <textarea class="form-control" name="description"
                                          rows="3"></textarea>
                            </div>

                            <div class="col-lg-6">
                                <label class="label mt-2">*Arabic*</label>
                                <textarea class="form-control" name="description_ar"
                                          rows="3"></textarea>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <label class="label mt-2">Comment</label>
                                <textarea class="form-control" name="comment" placeholder="Comment" rows="3"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-primary" type="submit">Save</button>
                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Modal effects-->


    @endsection
    @section('js')

        <!-- Internal Modal js-->
            <script src="{{URL::asset('assets/js/modal.js')}}"></script>
            <!--Internal  Datepicker js -->
            <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
            <!-- Internal Select2 js-->
            <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
            <!--Internal Fileuploads js-->
            <script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
            <!--Internal Fancy uploader js-->
            <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
            <!--Internal  Form-elements js-->
            <script src="{{URL::asset('assets/js/advanced-form-elements.js')}}"></script>
            <script src="{{URL::asset('assets/js/select2.js')}}"></script>
            <!--Internal Sumoselect js-->
            <script src="{{URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js')}}"></script>
            <!-- Internal TelephoneInput js-->
            <script src="{{URL::asset('assets/plugins/telephoneinput/telephoneinput.js')}}"></script>
            <script src="{{URL::asset('assets/plugins/telephoneinput/inttelephoneinput.js')}}"></script>
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
                $('#modaldem2').on('show.bs.modal', function (e) {

                    var id = $(e.relatedTarget).data('id');

                    $(e.currentTarget).find('input[id="id_inp"]').val(id);
                });
            </script>

            <script type="text/javascript">
                $('#modaldem21').on('show.bs.modal', function (e) {

                    var id = $(e.relatedTarget).data('id');

                    $(e.currentTarget).find('input[id="id_inp"]').val(id);
                });
            </script>

            <script type="text/javascript">
                $('#modaldem22').on('show.bs.modal', function (e) {

                    var id = $(e.relatedTarget).data('id');

                    $(e.currentTarget).find('input[name="hospital_id"]').val(id);
                });
            </script>

            <script type="text/javascript">
                $('#modaldemlo').on('show.bs.modal', function (e) {

                    var id = $(e.relatedTarget).data('id');

                    $(e.currentTarget).find('input[name="id_inp"]').val(id);
                });
            </script>
            <script type="text/javascript">
                $('#modaldemlo122').on('show.bs.modal', function (e) {

                    var id = $(e.relatedTarget).data('id');

                    $(e.currentTarget).find('input[name="id_inp"]').val(id);
                });
            </script>

            <script type="text/javascript">
                $('#modaldemlod').on('show.bs.modal', function (e) {

                    var id = $(e.relatedTarget).data('id');

                    $(e.currentTarget).find('input[name="id_inp"]').val(id);
                });
            </script>

            <script>
                $(function (e) {
                    $("#checkall").click(function () {
                        $(".check").prop('checked', $(this).prop('checked'));
                    })
                })
            </script>
            <script>

                $("#deleteall").click(function (e) {
                    e.preventDefault();
                    var allids = [];
                    $("input:checkbox[name=check]:checked").each(function () {
                        allids.push($(this).val())
                    });
                    $.ajax({
                        url: "hospital/delete/all",
                        type: "DELETE",
                        data: {
                            _token: $("input[name=_token]").val(),
                            idp: allids
                        }, success: function (response) {
                            $.each(allids, function (key,val) {
                                $("#pos" + val).remove();

                            });

                        }
                    })
                })


            </script>





            <script type="text/javascript">
                $('#modaldemo99').on('show.bs.modal', function (e) {

                    var id = $(e.relatedTarget).data('id');
                    var name = $(e.relatedTarget).data('name');
                    var name_ar = $(e.relatedTarget).data('name_ar');
                    var contract = $(e.relatedTarget).data('contract');
                    var expiry = $(e.relatedTarget).data('expiry');
                    var cr = $(e.relatedTarget).data('cr');
                    var place = $(e.relatedTarget).data('place');
                    var place_ar = $(e.relatedTarget).data('place_ar');
                    var contact2 = $(e.relatedTarget).data('contact2');
                    var contact = $(e.relatedTarget).data('contact');
                    var email = $(e.relatedTarget).data('email');
                    var address = $(e.relatedTarget).data('address');
                    var address_ar = $(e.relatedTarget).data('address_ar');
                    var website = $(e.relatedTarget).data('website');
                    var category = $(e.relatedTarget).data('category');
                    var category_ar = $(e.relatedTarget).data('category');
                    var description = $(e.relatedTarget).data('description');
                    var description_ar = $(e.relatedTarget).data('description_ar');
                    var comment = $(e.relatedTarget).data('comment');

                    $(e.currentTarget).find('input[name="id"]').val(id);
                    $(e.currentTarget).find('input[name="contract_date"]').val(contract);
                    $(e.currentTarget).find('input[name="expiry_date"]').val(expiry);
                    $(e.currentTarget).find('input[name="provider_name"]').val(name);
                    $(e.currentTarget).find('input[name="provider_name_ar"]').val(name_ar);
                    $(e.currentTarget).find('input[name="cr_no"]').val(cr);
                    $(e.currentTarget).find('input[name="place"]').val(place);
                    $(e.currentTarget).find('input[name="place_ar"]').val(place_ar);
                    $(e.currentTarget).find('input[name="contact2"]').val(contact2);
                    $(e.currentTarget).find('input[name="contact"]').val(contact);
                    $(e.currentTarget).find('input[name="email"]').val(email);
                    $(e.currentTarget).find('input[name="address"]').val(address);
                    $(e.currentTarget).find('input[name="address_ar"]').val(address_ar);
                    $(e.currentTarget).find('input[name="website"]').val(website);
                    $(e.currentTarget).find('input[name="category"]').val(category);
                    $(e.currentTarget).find('input[name="category_ar"]').val(category_ar);
                    $(e.currentTarget).find('textarea[name="description"]').val(description);
                    $(e.currentTarget).find('textarea[name="description_ar"]').val(description_ar);
                    $(e.currentTarget).find('textarea[name="comment"]').val(comment);
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
