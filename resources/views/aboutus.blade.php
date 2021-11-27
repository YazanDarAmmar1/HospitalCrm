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
            </div>
            <div class="row mt-3">
                <div class="col-lg-2 mb-3">
                    <a href="{{route('search.card')}}">
                        <button class="btn mr-2" style="background-color: white; color: purple;border-radius: 20px; width:150px;">{{trans('main_tran.Search e-Card')}}</button>
                    </a>
                </div>
                <div class="col-lg-2">
                    <a href="{{route('hospital.directory')}}">

                        <button class="btn" href="{{route('hospital.directory')}}" style="background-color: white; color: purple;border-radius: 20px;">{{trans('main_tran.Medical Directory')}}</button>
                    </a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <!--experiance-section-->
        <section class="ttm-row experiance-section bg-layer break-1199-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span pt-95 pb-100 res-991-pt-50 res-991-pb-50">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer ttm-bgcolor-grey"></div>
                            <div class="layer-content mr-5">
                                <div class="ttm_single_image-wrapper mr_240 res-1199-mr-0">
                                    <img class="img-fluid" src="{{URL::asset('assets/home/images/home3.jpg')}}" alt="">
                                </div><!-- ttm_single_image-wrapper end -->
                            </div>
                        </div>
                        <!-- about-img end -->
                    </div>
                    <div class="col-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-9">
                                <div class="pt-105 pb-30 res-1199-plr-15 res-991-pt-50">
                                    <!-- section title -->
                                    <div class="section-title with-desc clearfix">
                                        <div class="title-header">
                                            <h5>{{trans('main_tran.WHAT WE DO')}}</h5>
                                            <h2 class="title">{{trans('We Have 10 Years Experience')}}</h2>
                                        </div>
                                        <div class="title-desc">{{trans('We offer')}}</div>
                                    </div><!-- section title end -->
                                    <!-- acadion -->
                                    <div class="accordion">
                                        <!-- toggle -->
                                        <div class="toggle">
                                            <div class="toggle-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" >{{trans('Our Mission')}}</a></div>
                                            <div class="toggle-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="toggle-figure res-991-mb-15">
                                                            <img class="img-fluid" src="images/portfolio/post-one-1200x800.jpg" alt="image">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <p>
                                                            {{trans('Providing2')}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- toggle end -->

                                    </div><!-- acadion end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- experiance-section end -->

        <!-- fid-section -->
        <section class="ttm-row fid-section ttm-bg ttm-bgcolor-skincolor clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row ttm-facts-colum-sep">
                    <div class="col-md-3 col-sm-3 co-xs-12">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-user"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "3215"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                    >3215
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Clients<br></span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 co-xs-12">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-envelope"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "152"
                                            data-interval         = "5"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                    >152
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Hospitals Rooms<br></span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 co-xs-12">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-heart-broken"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "30"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                    >30
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Years of Experiance<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 co-xs-12">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="themifyicon ti-thumb-up"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "124"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                    >124
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Qualified Staffs<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fid-section end -->

        <!--team-section-->
        <section class="ttm-row team-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>MEET OUR EXPERIENCED TEAM</h5>
                                <h2 class="title">Our Dedicated Doctors Team</h2>
                            </div>
                            <div class="title-desc">We offer extensive medical procedures to outbound and inbound patients what it is and we are very proud of achievement of our staff, We are all work together to help our all patients for recovery</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-2 col-md-2"></div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel" data-item="4" data-nav="true" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/team-member/team-img01.jpg" alt="image">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="ttm-team-position">Senior Dr. at Delmont</div>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Dr. Metthew Wood</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/team-member/team-img02.jpg" alt="image">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="ttm-team-position">Cardiologist Specialist</div>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Dr. Roy Coleman</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/team-member/team-img03.jpg" alt="image">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="ttm-team-position">Neurology Specialist</div>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Dr. Andrew Bert</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/team-member/team-img04.jpg" alt="image">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="ttm-team-position">Senior Рathologist</div>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Dr. Teresa Mayer</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/team-member/team-img05.jpg" alt="image">
                            </div>
                            <div class="ttm-box-view-overlay">
                                <div class="featured-iconbox ttm-media-link">
                                    <a class="ttm_prettyphoto ttm_image" data-gal="prettyPhoto[gallery1]" title="spring-renovation" href="images/portfolio/05.jpg" data-rel="prettyPhoto"><i class="ti ti-plus"></i></a>
                                </div>
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="ttm-team-position">Senior Dr. at Delmont</div>
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Dr. Robert Burton</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--team-section end-->

    <!-- sidebar end -->


    </div><!--site-main end-->




@endsection

<!-- Javascript -->

@section('js')
    <!-- SWEET Alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var survey_options = document.getElementById('survey_options');
        var add_more_fields = document.getElementById('add_more_fields');
        add_more_fields.onclick = function () {
            var newField = document.createElement('input');
            var newField4 = document.createElement('label');
            var newField7 = document.createElement('h4');
            newField4.setAttribute('class', 'label  mt-5');
            newField4.innerHTML = "Name";
            newField7.setAttribute('class', 'col-sm-12 mt-5');
            newField7.setAttribute('style', 'color : #761193');
            newField7.innerHTML = "Add People";
            newField.setAttribute('type', 'text');
            newField.setAttribute('name', 'name[]');
            newField.setAttribute('required','');
            newField.setAttribute('class', 'form-control col-lg-12 mb-4 mt-5 ');
            newField.setAttribute('placeholder', 'Name');

            var newField2 = document.createElement('input');
            var newField5 = document.createElement('label');
            newField5.setAttribute('class', 'label mt-5');
            newField5.innerHTML = "CPR No.";
            newField2.setAttribute('type', 'number');
            newField2.setAttribute('name', 'cpr[]');
            newField2.setAttribute('required', '');
            newField2.setAttribute('class', 'form-control col-lg-12 mb-4 mt-5 ');
            newField2.setAttribute('placeholder', 'CPR No.');

            var newField3 = document.createElement('input');
            var newField6 = document.createElement('label');
            newField6.setAttribute('class', 'label mt-5');
            newField6.innerHTML = "Email";
            newField3.setAttribute('type', 'email');
            newField3.setAttribute('name', 'email[]');
            newField3.setAttribute('class', 'form-control col-lg-12 mb-4 mt-5 ');
            newField3.setAttribute('placeholder', 'Email');

            var newField11 = document.createElement('input');
            var newField12 = document.createElement('label');
            newField12.setAttribute('class', 'label mt-5');
            newField12.innerHTML = "Phone";
            newField11.setAttribute('type', 'number');
            newField11.setAttribute('name', 'phone[]');
            newField11.setAttribute('class', 'form-control col-lg-12 mb-4 mt-5 ');
            newField11.setAttribute('placeholder', 'Phone');


            var array = ["male", "female"];

         //Create and append select list
            var selectList = document.createElement('select');
            selectList.setAttribute('name','gender[]');
            selectList.setAttribute('class','form-control col-lg-12 mb-4 mt-5')
            var newField112 = document.createElement('label');
            newField112.setAttribute('class', 'label mt-5');
            newField112.setAttribute('required', '');
            newField112.innerHTML = "Gender";


        //Create and append the options
            for (var i = 0; i < array.length; i++) {
                var option = document.createElement("option");
                option.value = array[i];
                option.text = array[i];
                selectList.appendChild(option);
            }


            survey_options.appendChild(newField7);
            survey_options.appendChild(newField4);
            survey_options.appendChild(newField);
            survey_options.appendChild(newField5);
            survey_options.appendChild(newField2);
            survey_options.appendChild(newField6);
            survey_options.appendChild(newField3);
            survey_options.appendChild(newField12);
            survey_options.appendChild(newField11);
            survey_options.appendChild(newField112);
            survey_options.appendChild(selectList);



        }

    </script>

    @if (Session::has('add'))
        <script>
            swal("شكرا لك", "{!! Session::get('add') !!}", {
                button: "Okay",
                position: 'top-end',
                icon: 'success',
                showConfirmButton: false,
                timer: 5000
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
                timer: 5000
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
                timer: 5000
            });
        </script>

    @endif

    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
            swal("Error", "{!! $error !!}", {
                button: "Okay",
                icon: 'error',
                timer: 5000
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

