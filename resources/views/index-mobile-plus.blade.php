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
        <section>
            <div class="row">
                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 90px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{URL::asset('assets/img/card.png')}}" alt="case_01">
                        </div>
                        <div class="featured-content">
                            <a href="{{route('apply.view')}}">
                                <div class="featured-title text-center">
                                    <h5>Apply Card
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>
                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 90px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{URL::asset('assets/img/search.png')}}" alt="case_02">
                        </div>
                        <div class="featured-content">
                            <a href="{{route('search.card')}}">
                                <div class="featured-title text-center">
                                    <h5>Search Card </h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>

                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 90px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid"  src="{{URL::asset('assets/img/hospital.png')}}" alt="case_02">
                        </div>
                        <div class="featured-content">
                            <a href="{{route('hospital.directory.plus')}}">
                                <div class="featured-title text-center">
                                    <h5>Providers </h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>

                <div class="col-6">
                    <!--featured-imagebox-->
                    <div class="featured-imagebox ttm-box-view-top-image featured-imagebox-case" style="border: goldenrod 1px solid;border-radius: 90px;">
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{URL::asset('assets/img/partner.png')}}" alt="case_02">
                        </div>
                        <div class="featured-content">
                            <a href="#">
                                <div class="featured-title text-center">
                                    <h5>Be Partner </h5>
                                </div>
                            </a>
                        </div>
                    </div><!-- featured-imagebox end-->
                </div>


            </div><!-- row end -->
        </section>
        <br/>

    </div>
@endsection
@section('js')

@endsection
