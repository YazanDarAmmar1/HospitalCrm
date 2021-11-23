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
                            <h1 class="title">{{trans('main_tran.Search e-Card')}}</h1>
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
            <form method="post" action="{{route('search.card.cpr')}}" class="form-group">
                @csrf
            <div class="container" >
                <!-- row -->
                <div class="row" >
                    <div
                        class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu box-shadow">
                                <li><a
                                        href="{{route('apply.view')}}">{{trans('main_tran.Apply Card')}}</a></li>
                                <li><a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a></li>
                                <li class="active"><a href="{{route('search.card')}}">{{trans('main_tran.Search e-Card')}}</a></li>

                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-9 content-area" style="background-color: whitesmoke">
                        <!-- ttm-service-single-content-are -->
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="ttm-service-description">
                                    <h4>Please Fill in Your CPR No.</h4>

                                </div>
                            </div>
                            <div class="col-lg-10 col-md-12 col-sm-12 ">
                                <label class="label text-dark">CPR No. :</label>
                                <input class="form-control" type="number" style="border:solid 2px #761193;border-radius: 20px; " name="cpr" placeholder="CPR No." required>
                            </div>
                            <div class="col-lg-2 col-md-12 col-sm-12 mt-30 ">
                                <button class="btn form-control text-white" style="background-color: #761193;border-radius: 20px;"  type="submit"><i class="fa fa-search-plus"></i>  Search</button>
                                @if(isset($card))

                                    <a href="{{route('single_card',['id'=>$card->cpr_no,'id2'=>1])}}" onclick="" class="btn btn-danger float-left mt-3 mr-2">
                                        Download & Mail
                                    </a>
                                @endif
                            </div>



                            <div class="col-lg-3 col-md-3 col-md-3"></div>
                            <div class="col-lg-6 col-md-6 col-sm-6 mt-30" style="background-image: url({{URL::asset('assets/img/sama_card.jpg')}});background-size:contain; background-repeat: no-repeat; height:330px; ">
                                <div class="row">
                                    <div class="col-lg-2 header" style="margin-top: 18%;"> </div>
                                    <div class="col-lg-8 mt-80">
                                        <b>
                                            <table  class="table-hover" style="color: black;" >
                                                <tr>
                                                    <td><b>Name   :{{$card->name ?? ' XXXXXX'}} </b></td>
                                                </tr>
                                                <tr>
                                                    <td><b>CPR No.  : {{$card->cpr_no ?? ' XXXXXX'}}</b></td>
                                                </tr>
                                                <tr>
                                                    <td><b>ID No.  : SHC222 - {{$card->id ?? ' XXXXXX'}}</b></td>
                                                </tr>
                                                <tr>
                                                    <td><b>Valid till  : {{$card->expiry ?? ' XXXXXX'}}</b></td>
                                                </tr>

                                            </table>
                                        </b>

                                    </div>
                                    <div class="col-lg-2">

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-md-3">

                            </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
            </form>
        <!-- sidebar end -->


    </div><!--site-main end-->
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
            swal("Good Job", "{!! Session::get('add') !!}", {
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

