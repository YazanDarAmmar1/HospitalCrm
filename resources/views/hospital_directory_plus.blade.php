@extends('layouts_master.master')
@section('css')

@endsection
@section('content')
    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">

                    <div class="col-lg-8 content-area" style="background-color: whitesmoke">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="ttm-service-description">
                                        <h4>Search The Directory Of Existing: </h4>
                                        <form class="form-group" method="post" action="{{route('hospital.directory.search')}}" autocomplete="off">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <input type="text" style="border:solid 2px #761193;border-radius: 20px; " class="form-control typeahead" name="search" placeholder="Search" style="border-radius: 20px" value="{{$hospital ?? ''}}" id="hospital">
                                                </div>
                                                <div class="col-lg-2">
                                                    <button type="submit" class="form-control btn text-white"  placeholder="Search" style="border-radius: 20px;background-color:#761193 "><i class="fa fa-search"></i> Search</button>
                                                </div>
                                            </div>
                                        </form>
                                        @if(!isset($hospital_search))
                                            <div class="row">
                                                <div class="col-6" >
                                                    <!-- featured-iconbox -->
                                                    <div class="featured-icon-box icon-align-top-content box-shadow style1" style="background-color: #0c025b;height: 100px">

                                                        <div class="featured-content text-center">
                                                            <div class="featured-title">
                                                                <h3 style="color: white">Hospitals</h3>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-iconbox end-->
                                                </div>

                                                <div class="col-6" >
                                                    <!-- featured-iconbox -->
                                                    <div class="featured-icon-box icon-align-top-content box-shadow style1" style="background-color: rebeccapurple;height: 100px">

                                                        <div class="featured-content text-center">
                                                            <div class="featured-title">
                                                                <h3 style="color: white">Hotels</h3>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-iconbox end-->
                                                </div>

                                            </div>


                                        @else
                                            @foreach($hospital_search as $h)
                                                <div class="ttm-box-col-wrapper col-lg-12 col-md-6 col-sm-12">
                                                    <!-- featured-imagebox-post -->
                                                    <div class="featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow row">
                                                        <div class="col-lg-5 col-md-12 ttm-featured-img-left">
                                                            <div class="ttm-post-featured-outer">
                                                                <div class="ttm-post-thumbnail featured-thumbnail">
                                                                    <a href="{{route('hospital.directory.profile',$h->id)}}">
                                                                        <img class="img-fluid" src="{{URL::asset('Attachments')}}/{{$h->id ?? ''}}/{{$h->Attachment->url_logo ?? ''}}" alt="logo-hospital">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-md-12 featured-content featured-content-post">
                                                            @if(App::getLocale()== 'en')
                                                                <div class="post-title featured-title text-dark tx-bold">
                                                                    <b>  <h4 class=""><a href="{{route('hospital.directory.profile',$h->id)}}">{{$h->name}}</a></h4></b>

                                                                </div>
                                                            @else
                                                                <div class="post-title featured-title text-dark tx-bold">
                                                                    <b> <h4 class=""><a href="{{route('hospital.directory.profile',$h->id)}}">{{$h->name_ar}}</a></h4></b>

                                                                </div>
                                                            @endif
                                                            <div class="post-meta">
                                                                @if(App::getLocale()== 'en')

                                                                    <span class="ttm-meta-line comments-link text-dark tx-bold"><b><i class="fa fa-location-arrow"></i>{{$h->place}}</b></span>
                                                                @else
                                                                    <span class="ttm-meta-line comments-link text-dark tx-bold"><b><i class="fa fa-location-arrow"></i>{{$h->place_ar}}</b></span>
                                                                @endif
                                                                <span class="ttm-meta-line comments-link text-dark tx-bold"><b><i class="fa fa-phone"></i>  {{$h->contact1}}</b></span>
                                                            </div>
                                                            <div class="post-desc featured-desc">
                                                                @if(App::getLocale()== 'en')

                                                                    <p>{{ \Illuminate\Support\Str::limit($h->description, 50) }}.</p>
                                                                @else
                                                                    <p>{{ \Illuminate\Support\Str::limit($h->description_ar, 50) }}}.</p>

                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-post end-->
                                                </div>
                                            @endforeach
                                        @endif

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                    <div class="col-lg-4 widget-area sidebar-left ml-15 ">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu box-shadow">
                                <li ><a
                                        href="{{route('apply.view')}}">{{trans('main_tran.Apply Card')}}</a></li>
                                <li class="active"><a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a></li>
                                <li><a href="{{route('search.card')}}">{{trans('main_tran.Search e-Card')}}</a></li>

                            </ul>
                        </aside>


                        <aside class="widget tagcloud-widget">
                            <h3 class="ml-1">Tags</h3>
                            <div class="tagcloud">
                                @foreach(\App\Category::all() as $c)
                                <a href="{{route('hospital.category.show',$c->id)}}" class="tag-cloud-link">{{$c->category}}</a>
                                @endforeach

                            </div>
                        </aside>
                    </div>

                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->


@endsection

<!-- Javascript -->

@section('js')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" ></script>
    <script>

        var path = "{{ url('typeahead_autocomplete/action') }}";

        $('#hospital').typeahead({

            source: function(query, process){

                return $.get(path, {query:query}, function(data){

                    return process(data);

                });

            }

        });

    </script>
@endsection

