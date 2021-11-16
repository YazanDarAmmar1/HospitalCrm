@extends('layouts_master.master')
@section('css')
@endsection
@section('content')

    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">{{trans('main_tran.Apply Card')}}</h1>
                        </div><!-- /.page-title-captions -->

                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div
                        class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu box-shadow">
                                <li class="active"><a href="neurology-services.html">{{trans('main_tran.Apply Card')}}</a></li>
                                <li><a href="x-ray-rmi-services.html">{{trans('main_tran.Medical Directory')}}</a></li>
                                <li><a href="x-ray-rmi-services.html">{{trans('main_tran.Be A Partner')}}</a></li>

                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-9 content-area" style="background-color: whitesmoke">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="ttm-service-description">
                                        <h4>Please Fill in All Fields</h4>

                                    </div>
                                </div>


                                <div class="col-lg-6 mb-4">
                                    <label class="label">Name :</label>
                                    <input class="form-control" type="text" name="name" placeholder="Name" required>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="label">CPR No. :</label>
                                    <input class="form-control" type="number" name="cpr" placeholder="CPR" required>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="label">Gender :</label>
                                    <select class="form-control"  name="gender">
                                        <option label="select one"></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="label">Card Package :</label>
                                    <select class="form-control"  name="gender">
                                        <option label="select one"></option>
                                        <option value=""></option>

                                    </select>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="label">Mobile No. :</label>
                                    <input class="form-control" type="text" name="mobile" placeholder="Mobile" required>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="label">Phone No. :</label>
                                    <input class="form-control" type="text" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-lg-12 mb-4">
                                    <label class="label">Email :</label>
                                    <input class="form-control" type="email" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-lg-3 mb-4">
                                    <label class="label">House :</label>
                                    <input class="form-control" type="email" name="house" placeholder="House" required>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <label class="label">Road :</label>
                                    <input class="form-control" type="email" name="road" placeholder="Road" required>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <label class="label">Block :</label>
                                    <input class="form-control" type="email" name="block" placeholder="Block" required>
                                </div>
                                <div class="col-lg-3 mb-4">
                                    <label class="label">Place :</label>
                                    <input class="form-control" type="email" name="place" placeholder="Place" required>
                                </div>

                                <div class="col-lg-6 mb-4">
                                    <label class="label">Type Of Payment :</label>
                                    <select class="form-control"  name="gender">
                                        <option label="select one"></option>
                                        <option value="benefit">Benefit</option>
                                        <option value="cash">Cash On Delivery</option>
                                    </select>
                                </div>
                                <div class="col-lg-6 mb-4">
                                    <label class="label">Image Id :</label>
                                    <input class="form-control" type="file" name="img"  required>
                                </div>

                                <div class="col-lg-12 mb-5">
                                    <label class="label">Note :</label>
                                    <textarea class="form-control" row="3" col="30"  name="note"></textarea>
                                </div>

                                <div class="col-lg-6 mb-4">
                                    <button class="btn btn-outline-primary col-lg-12" type="submit">Apply</button>
                                </div>

                                <div class="col-lg-6 ">
                                    <a href="#" class="btn btn-outline-danger col-lg-12" >Add More People</a>
                                </div>








                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->


@endsection

<!-- Javascript -->

@section('js')
@endsection

