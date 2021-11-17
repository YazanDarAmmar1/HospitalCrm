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
                            <h1 class="title">{{trans('main_tran.Medical Directory')}}</h1>
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
                                <li ><a href="neurology-services.html">{{trans('main_tran.Apply Card')}}</a></li>
                                <li class="active"><a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a></li>
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
                                        <h4>Search The Directory Of Existing Hospitals </h4>
                                        <form class="form-group" method="post" action="">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="search" placeholder="Search">
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="submit" class="form-control btn btn-outline-primary" name="search" placeholder="Search"><i class="fa fa-search"></i> Search</button>
                                                </div>
                                            </div>
                                        </form>
                                        @foreach($hospital as $h)
                                        <div class="ttm-box-col-wrapper col-lg-12 col-md-6 col-sm-12">
                                            <!-- featured-imagebox-post -->
                                            <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow row">
                                                <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                                    <div class="ttm-post-featured-outer">
                                                        <div class="ttm-post-thumbnail featured-thumbnail">
                                                            <img class="img-fluid" src="{{URL::asset('Attachments')}}/{{$h->id ?? ''}}/{{$h->Attachment->url_logo ?? ''}}" alt="logo-hospital">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                                    @if(App::getLocale()== 'en')
                                                    <div class="post-title featured-title text-dark tx-bold">
                                                      <b>  <h4 class=""><a href="#">{{$h->name}}</a></h4></b>
                                                    </div>
                                                    @else
                                                        <div class="post-title featured-title text-dark tx-bold">
                                                           <b> <h4 class=""><a href="#">{{$h->name_ar}}</a></h4></b>
                                                        </div>
                                                    @endif
                                                    <div class="post-meta">
                                                        @if(App::getLocale()== 'en')

                                                        <span class="ttm-meta-line comments-link text-dark tx-bold"><b><i class="fa fa-location-arrow"></i>{{$h->place}}</b></span>
                                                        @else
                                                            <span class="ttm-meta-line comments-link text-dark tx-bold"><b><i class="fa fa-location-arrow"></i>{{$h->place_ar}}</b></span>
                                                        @endif
                                                            <span class="ttm-meta-line comments-link text-dark tx-bold"><b><i class="fa fa-location-arrow"></i>{{$h->contact1}}</b></span>
                                                    </div>
                                                    <div class="post-desc featured-desc">
                                                        @if(App::getLocale()== 'en')

                                                        <p>{{$h->description}}.</p>
                                                        @else
                                                            <p>{{$h->description_ar}}.</p>

                                                        @endif
                                                    </div>
                                                </div>
                                            </div><!-- featured-imagebox-post end-->
                                        </div>
                                        @endforeach
                                        <div class="col-lg-5 float-right justify-content-lg-end">
                                        </div>
                                        <div class="col-lg-5 float-right justify-content-lg-end">
                                        </div>
                                        <div class="col-lg-2 float-right justify-content-lg-end">
                                            {{$hospital->links()}}

                                        </div>

                                    </div>
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

