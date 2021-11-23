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
                            <h1 class="title">{{trans('main_tran.Contact Us')}}</h1>
                        </div><!-- /.page-title-captions -->

                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row bg-layer bg-layer-equal-height res-991-p-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <!-- testimonial-box -->
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor ttm-textcolor-white spacing-8">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <h3>Do You Want to Reach the Best Level From the Health Side ?</h3>
                                <p>Order the Card now or Enter your Details, We will Contact you quickly!</p>
                                <div class="sep_holder_box width-100 pt-20 mb-35">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-phone"></i>

                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>+973 776 90000</h5>
                                            <h4>Have a question? call us now</h4>
                                        </div>

                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-envelope-o"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>www.samacardsbh.com</h5>
                                            <h4>Need support? Drop us an email</h4>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-map-marker"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>23 Office, 42 Building, 4202 Block </h5>
                                            <h4>1 Road, Muharraq</h4>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box iconalign-before-heading mb-25">
                                    <div class="featured-content">
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>Sun – Thu 09:00 – 2:00</h5>
                                            <h4>We are open on</h4>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="sep_holder_box width-100 pt-20 mb-30">
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                    <span class="sep_holder"><span class="sep_line"></span></span>
                                </div>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="WhatsApp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-8">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <!-- section title -->
                            <div class="section-title with-desc clearfix">
                                <div class="title-header">
                                    <h5>WHAT WE DO</h5>
                                    <h2 class="title">Get In Touch</h2>
                                </div>
                                <div class="title-desc">We offer extensive medical procedures to outbound and inbound patients what it is and we are very proud of achievpatients for recovery</div>
                            </div><!-- section title end -->
                            <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="#">
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i><input name="your-name" type="text" value="" placeholder="Your Name" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i><input name="your-phone" type="text" value="" placeholder="Cell Phone" required="required"></span>
                                </label>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="email" type="email" value="" placeholder="Email" required="required"></span>
                                </label>

                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea name="message" cols="40" rows="3" placeholder="Message" required="required"></textarea></span>
                                </label>
                                <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" value="SEND MESSAGE">
                            </form>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
            <br/>
            <div class="map-wrapper">
                <div id="map_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1789.0056262754952!2d50.61958224182682!3d26.261298201220505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49a6169edd5ae3%3A0xa5547ddbae532a4f!2smazyon%20Phone!5e0!3m2!1sar!2sbh!4v1637665330796!5m2!1sar!2sbh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>                </div>
            </div>
        </section>
        <!-- intro-section end -->




    </div>
    <!--site-main end-->
    </div>



@endsection

<!-- Javascript -->

@section('js')
    <!-- SWEET Alert-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>


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

