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
                                            <img class="img-fluid" src="images/portfolio/post-one-1200x800.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="ttm-pf-single-detail-box res-991-mt-30">
                                            <div class="ttm-pf-detailbox">
                                                <ul class="ttm-pf-detailbox-list">
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-medkit"></i>Research Name </span>
                                                        <span class="ttm-pf-right-details">Vulputate Cursus</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-user"></i> Patient </span>
                                                        <span class="ttm-pf-right-details">Andrew Bert</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-user-md"></i>Doctor </span>
                                                        <span class="ttm-pf-right-details">Dr. Teresa Mayer</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-stethoscope"></i>Category </span>
                                                        <span class="ttm-pf-right-details">Neurology</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-calendar"></i>Date </span>
                                                        <span class="ttm-pf-right-details">25th November 2018</span>
                                                    </li>
                                                    <li class="ttm-pf-details-date">
                                                        <span class="ttm-pf-left-details"><i class="fa fa-map-marker"></i>Location </span>
                                                        <span class="ttm-pf-right-details">Bulls Stadium, Califorina</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-pf-single-content-area">
                                <div class="ttm-portfolio-description">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>About this project</h4>
                                            <div class="sep_holder_box width-100 mb-20">
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                                <span class="sep_holder"><span class="sep_line"></span></span>
                                            </div>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                        </div>
                                    </div>
                                    <!-- row -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h4>About Hospital Services</h4>
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
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- row end-->
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="ttm-social-share-wrapper ttm-social-share-portfolio-wrapper">
                                    <div class="ttm-social-share-title">Share</div>
                                    <div class="social-icons circle social-hover">
                                        <ul class="list-inline">
                                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="social-twitter"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="social-gplus"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li class="social-linkedin"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ttm-nextprev-bottom-nav">
                                    <nav class="navigation post-navigation">
                                        <div class="nav-links">
                                            <div class="nav-previous"><a href="#" rel="prev"><span class="meta-nav" aria-hidden="true">Previous</span></a></div>
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
                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                    <div class="ttm-box-view-content-inner">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <a href="#"> <img class="img-fluid" src="images/portfolio/04.jpg" alt="image"></a>
                                        </div><!-- featured-thumbnail end-->
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="featured-iconbox ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" title="Rehabilitation Center" data-rel="prettyPhoto" href="images/portfolio/04.jpg">
                                                    <i class="ti ti-search"></i>
                                                </a>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                    </div>
                                    <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                        <div class="featured-title">
                                            <h5><a href="single-style-3.html">Rehabilitation Center</a></h5>
                                        </div>
                                        <span class="category">
                                            <a href="portfolio-category.html">Cardiology</a>,
                                            <a href="portfolio-category.html">Pharmacy</a>
                                        </span>
                                    </div>
                                </div><!-- featured-imagebox -->
                            </div>
                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                    <div class="ttm-box-view-content-inner">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <a href="#"> <img class="img-fluid" src="images/portfolio/05.jpg" alt="image"></a>
                                        </div><!-- featured-thumbnail end-->
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="featured-iconbox ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" title="Blood Pressure Checkup" data-rel="prettyPhoto" href="images/portfolio/05.jpg">
                                                    <i class="ti ti-search"></i>
                                                </a>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                    </div>
                                    <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                        <div class="featured-title">
                                            <h5><a href="single-style-3.html">Blood Pressure Checkup</a></h5>
                                        </div>
                                        <span class="category">
                                            <a href="portfolio-category.html">Anesthesiology</a>,
                                            <a href="portfolio-category.html">Pediatric</a>
                                        </span>
                                    </div>
                                </div><!-- featured-imagebox -->
                            </div>
                            <div class="ttm-box-col-wrapper col-lg-4 col-md-4 col-sm-6">
                                <!-- featured-imagebox -->
                                <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                    <div class="ttm-box-view-content-inner">
                                        <!-- featured-thumbnail -->
                                        <div class="featured-thumbnail">
                                            <a href="#"> <img class="img-fluid" src="images/portfolio/06.jpg" alt="image"></a>
                                        </div><!-- featured-thumbnail end -->
                                        <!-- ttm-box-view-overlay -->
                                        <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                            <div class="featured-iconbox ttm-media-link">
                                                <a class="ttm_prettyphoto ttm_image" title="Dentures / Partial Dentures" data-rel="prettyPhoto" href="images/portfolio/06.jpg">
                                                    <i class="ti ti-search"></i>
                                                </a>
                                            </div>
                                        </div><!-- ttm-box-view-overlay end-->
                                    </div>
                                    <div class="ttm-box-bottom-content featured-content-portfolio box-shadow">
                                        <div class="featured-title">
                                            <h5><a href="single-style-3.html">Dentures / Partial Dentures</a></h5>
                                        </div>
                                        <span class="category">
                                            <a href="portfolio-category.html">Oncology</a>,
                                            <a href="portfolio-category.html">Pharmacy</a>
                                        </span>
                                    </div>
                                </div><!-- featured-imagebox -->
                            </div>
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

