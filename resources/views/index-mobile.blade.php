@extends('layouts_master.master')
@section('css')
    <script>
        if (screen.width >= 700) {
            document.location = "/home";
        }
    </script>
    <style>
        .gdchat-fixed-bottom-right {
            position: fixed;
            bottom: 0px;
            right: 0px;
            z-index: 108000;
            margin: 0.6em;

        }
    </style>
@endsection
@section('content')
    <div class="gdchat-fixed-bottom-right " style="height: 60px;width: 60px;border-radius:30px ; background-color: green">
    <a class="tooltip-top btn-lg" id="btn-back-to-top" target="_blank" href="https://wa.link/j43ido" data-tooltip="whatsapp">

        <i
            style="color: white;padding-top: 7px" class="fa fa-whatsapp fa-2x" aria-hidden="true"></i>
    </a>
    </div>
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->
        <!-- slider start -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{URL::asset('assets/home/images/slides/slide1.jpg')}}"
                         alt="First slide" style="height: 200px;width: 500px">

                </div>
                @foreach(\App\Attachment::where('hospital_id',null)->get() as $a)
                <div class="carousel-item">
                        <img class="d-block w-100" src="{{URL::asset('slider')}}/{{$a->url_slider}}"
                             alt="First slide" style="height: 200px;width: 500px">

                    </div>
                @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- slider end -->
        <section>
            <div class="row">
                <div class="col-6">
                    <!-- featured-icon-box -->
                    <a href="{{route('apply.view')}}">
                        <div class="featured-icon-box top-icon style8 text-center active ">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Apply Card</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white">
                                            <i class="ttm-textcolor-skincolor flaticon-care"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('search.card')}}">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon style8 text-center ">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Search Card</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="ttm-icon-dots"></div>
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white  ttm-icon_element-size-lg ttm-icon_element-style-rounded">
                                            <i class="ttm-textcolor-skincolor ti ti-credit-card"></i>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{route('hospital.directory')}}">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon style8 text-center">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Directory</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="ttm-icon-dots"></div>
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white  ttm-icon_element-size-lg ttm-icon_element-style-rounded">
                                            <i class="ttm-textcolor-skincolor flaticon-hospital"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
                <div class="col-6">
                    <a href="#">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box top-icon style8 text-center">
                            <div class="featured-icon-box-inner">
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h5>Be Partner</h5>
                                    </div>
                                    <div class="featured-icon">
                                        <div class="ttm-icon-dots"></div>
                                        <div
                                            class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-white  ttm-icon_element-size-lg ttm-icon_element-style-rounded">
                                            <i class="ttm-textcolor-skincolor flaticon-charity"></i>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </a>
                </div>
            </div><!-- row end -->
        </section>
        <br/>

    </div>
@endsection
@section('js')

@endsection
