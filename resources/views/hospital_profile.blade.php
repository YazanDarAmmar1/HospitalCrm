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

        <section class="ttm-row pb-50 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- ttm-pf-single-content-wrapper-innerbox -->
                        <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-left-image">
                            <div class="ttm-pf-detail-box">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                            <img class="img-fluid" src="{{URL::asset('Attachments')}}/{{$hospital->id ?? ''}}/{{$hospital->Attachment->url_logo ?? ''}}" alt="logo">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="ttm-pf-single-detail-box res-991-mt-30">
                                            <div class="ttm-pf-detailbox">

                                                <ul class="ttm-pf-detailbox-list">
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-medkit"></i>Name </span>
                                                        <span class="ttm-pf-right-details">{{$hospital->name}}</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-phone"></i> Contact 1 </span>
                                                        <span class="ttm-pf-right-details">{{$hospital->contact1}}</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-phone"></i>Contact 2 </span>
                                                        <span class="ttm-pf-right-details">{{$hospital->contact2}}</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-map-marker"></i>Place </span>
                                                        <span class="ttm-pf-right-details">{{$hospital->place}}</span>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-pf-single-content-area">
                                <div class="ttm-portfolio-description">

                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>About {{$hospital->name}} Discount Services</h4>
                                            <table class="table table-hover  table-striped">
                                                <thead style="background-color: #761193" class="text-white">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">SERVICES</th>
                                                    <th scope="col">DISCOUNT</th>
                                                    <th scope="col">PRICES</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $i = 0; ?>

                                                @foreach($service as $h)
                                                <tr>

                                                    <?php $i++?>
                                                    <th scope="row">{{$i}}</th>
                                                    <td>{{$h->name}}</td>
                                                    <td>{{$h->discount}}</td>
                                                    <td>{{$h->price}} </td>
                                                </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- row end-->
                                    <br/>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>About {{$hospital->name}}</h4>
                                            <div class="sep_holder_box width-100 mb-20">
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                            </div>
                                            <p>{{$hospital->description}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ttm-nextprev-bottom-nav">
                                    <nav class="navigation post-navigation">
                                        <div class="nav-links">
                                            <div class="nav-previous"><a href="{{route('hospital.directory')}}" rel="prev"><span class="meta-nav" aria-hidden="true">Previous</span></a></div>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div><!-- ttm-pf-single-content-wrapper-innerbox end-->
                        <!-- tttm-pf-single-related-wrapper -->
                        <div class="row ttm-pf-single-related-wrapper ttm-boxes-row-wrapper">
                            <div class="col-lg-12">
                                <h3 class="ttm-pf-single-related-title">Other Hospitals</h3>
                            </div>

                            @foreach($hospital2 as $h)
                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                    <div class="ttm-box-view-content-inner">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <a href="{{route('hospital.directory.profile',$h->id)}}"> <img class="img-fluid" src="{{URL::asset('Attachments')}}/{{$h->id ?? ''}}/{{$h->Attachment->url_logo ?? ''}}" alt="image"></a>
                                        </div><!-- featured-thumbnail end-->
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="featured-iconbox ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" title="Rehabilitation Center" data-rel="prettyPhoto" href="{{URL::asset('Attachments')}}/{{$h->id ?? ''}}/{{$h->Attachment->url_logo ?? ''}}">
                                                    <i class="ti ti-search"></i>
                                                </a>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                    </div>
                                    <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                        <div class="featured-title">
                                            <h5><a href="{{route('hospital.directory.profile',$h->id)}}">{{$h->name}}</a></h5>
                                        </div>

                                    </div>
                                </div><!-- featured-imagebox -->
                            </div>
                            @endforeach
                        </div>
                        <!-- tttm-pf-single-related-wrapper end-->
                    </div>
                </div>
            </div>
        </section>


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

