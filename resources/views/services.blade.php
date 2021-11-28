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
                            <h1 class="title">{{trans('main_tran.Our Services')}}</h1>
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
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu box-shadow">
                                <li><a
                                        href="{{route('apply.view')}}">{{trans('main_tran.Apply Card')}}</a></li>
                                <li><a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a></li>
                                <li><a href="{{route('search.card')}}">{{trans('main_tran.Search e-Card')}}</a></li>
                            </ul>
                        </aside>


                    </div>
                    <div class="col-lg-9 content-area">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="ttm-service-description">
                                        <h4>{{trans('main_tran.Our services in the Sama Healthcare Card')}}</h4>
                                        <div class="sep_holder_box width-100 mb-20">
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                            <span class="sep_holder"><span class="sep_line"></span></span>
                                        </div>
                                        <!-- row -->
                                        <h5>{{trans('main_tran.Discounts on the following services')}}:</h5>

                                        <div class="row pt-15 pb-15">

                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Counseling')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.X-rays and analyzes')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.All dental treatments')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Physiotherapy sessions and electrical sessions')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Hemodialysis and lithotripsy')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Pregnancyfollow')}}.</span></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-6">
                                                <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey">
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Microinjection')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.medical equipments')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Eyeglasses and sunglasses')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Treatment of mental and neurological diseases')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.LASIK and cataracts')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Covering major surgeries')}}.</span></li>
                                                    <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Covering everything that is an exception in all other health care programs')}}.</span></li>
                                                </ul>
                                            </div>
                                        </div><!-- row end -->
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="mb-35">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <section class="ttm-row team-section clearfix">
                                        <div class="container">
                                            <!-- row -->
                                            <div class="row">
                                                <div class="col-lg-10 col-md-10">
                                                    <!-- section-title -->
                                                    <div class="section-title with-desc clearfix">
                                                        <div class="title-header">
                                                            <h3 class="title">{{trans('main_tran.Hospital')}}</h3>
                                                        </div>

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
                                                            <img class="img-fluid" src="{{URL::asset('assets/home/images/hos1.jpg')}}" alt="image">
                                                        </div>

                                                        <div class="featured-content featured-content-team">
                                                            <div class="featured-title">
                                                                <h5><a href="team-details.html">{{trans('main_tran.Bahrain')}}</a></h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-team end-->

                                                    <!-- featured-imagebox-team -->
                                                    <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{URL::asset('assets/home/images/hos2.jpg')}}" alt="image">
                                                        </div>

                                                        <div class="featured-content featured-content-team">
                                                            <div class="featured-title">
                                                                <h5><a href="team-details.html">{{trans('main_tran.Bahrain')}}</a></h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-team end-->

                                                    <!-- featured-imagebox-team -->
                                                    <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{URL::asset('assets/home/images/hos3.jpg')}}" alt="image">
                                                        </div>

                                                        <div class="featured-content featured-content-team">
                                                            <div class="featured-title">
                                                                <h5><a href="team-details.html">{{trans('main_tran.Bahrain')}}</a></h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-team end-->

                                                    <!-- featured-imagebox-team -->
                                                    <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                                        <div class="featured-thumbnail">
                                                            <img class="img-fluid" src="{{URL::asset('assets/home/images/hos1.jpg')}}" alt="image">
                                                        </div>

                                                        <div class="featured-content featured-content-team">
                                                            <div class="featured-title">
                                                                <h5><a href="team-details.html">{{trans('main_tran.Bahrain')}}</a></h5>
                                                            </div>
                                                        </div>
                                                    </div><!-- featured-imagebox-team end-->

                                                </div>
                                            </div><!-- row end -->
                                        </div>
                                    </section>        <!--team-section end-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ttm-service-single-content-are end -->
                </div>
            </div><!-- row end -->
        </div>
    </div>




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

