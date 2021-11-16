@extends('layouts_master.master')
@section('css')
@endsection
@section('content')
<!--page start-->
<div class="page">

    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-classicinfo">
        <!-- ttm-fbar-main-w -->
        <div class="ttm-fbar-main-w ttm-fbar-position-right">
            <div class="ttm-fbar-box-w ttm-textcolor-white ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes">
                    <span class="ttm-fbar-btn">
                        <a href="javascript:void(0)" class="ttm-fbar-btn-link">
                            <span class="ttm-fbar-open-icon"><i class="fa fa-bars"></i></span>
                            <span class="ttm-fbar-close-icon"><i class="fa fa-times"></i></span>
                        </a>
                    </span>
                <div class="ttm-fbar-bg-layer ttm-bg-layer"></div>
                <!-- ttm-fbar-content-wrapper -->
                <div class="ttm-fbar-content-wrapper">
                    <div class="ttm-fbar-box">
                        <!-- ttm_widget_team_search-2 -->
                        <aside id="ttm_widget_team_search-2" class="widget-even widget-4 widget ttm_widget_team_search">
                            <div class="team-search-form-w">
                                <form method="get" class="team-search-form " action="#">
                                    <div class="ttm-team-search-title">
                                        <h2>Doctors Search:</h2>
                                    </div>
                                    <div class="team-search-form-before-text">We provide the most full medical services, so every person could have the opportunity</div>
                                    <div class="ttm-fbar-input">
                                        <div class="search_field by_name">
                                            <i class="fa fa-user-md"></i><input type="text" placeholder="Search By Name" name="s" value="">
                                        </div>
                                    </div>
                                    <div class="ttm-fbar-input">
                                        <div class="search_field selectbox">
                                            <i class="fa fa-tags"></i>
                                            <select name="team_group" tabindex="-1" class="select2-hidden-accessible" aria-hidden="true">
                                                <option value="" class="select-empty">All Sections</option>
                                                <option value="dental">Dental</option>
                                                <option value="dermatologist">Dermatologist</option>
                                                <option value="health-care">Health Care</option>
                                                <option value="ophthalmology">Ophthalmology</option>
                                                <option value="psychological">Psychological</option>
                                                <option value="surgery">Surgery</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="submit_field"><button type="submit">Search</button></div>
                                </form>
                            </div>
                        </aside><!-- ttm_widget_team_search-2 end -->
                        <!-- enhanced-text-widget -->
                        <aside id="enhancedtextwidget-10" class="widget-odd widget-5 widget widget_text enhanced-text-widget">
                            <h3 class="widget-title">Opening Hours:</h3>
                            <div class="textwidget widget-text">These are our normal opening hours. When we are closed can be found here.<br>
                                <div class="ttm-pricelistbox-wrapper ">
                                    <ul class="ttm-pricelist-block">
                                        <li>Monday - Saturday<span class="service-price">8.30 – 17.00</span></li>
                                        <li>Sunday<span class="service-price"><strong>Closed</strong></span></li>
                                    </ul>
                                </div>
                            </div>
                        </aside><!-- enhanced-text-widget end -->
                        <!-- enhanced-text-widget -->
                        <aside id="enhancedtextwidget-11" class="widget-even widget-6 widget widget_text enhanced-text-widget">
                            <div class="textwidget widget-text">
                                <div class="featured-icon-box left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                            <i class="fa fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>+123 456 78910 / 11</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Have a question? call us now</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside><!-- enhanced-text-widget end -->
                    </div>
                </div><!-- ttm-fbar-content-wrapper end -->
            </div>
        </div><!-- ttm-fbar-main-w end -->
        <!-- ttm-topbar-wrapper -->
        <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
            <div class="container">
                <div class="ttm-topbar-content">
                    <ul class="top-contact text-left">
                        <li><i class="themifyicon ti-location-pin" style="color: white"></i>42 Building, 1 Road, 4202 Block, Muharraq</li>
                        <li><i class="themifyicon ti-timer" style="color: white"></i>Sun - Thu 9.00 - 2.00. Friday & Sunday CLOSED</li>
                    </ul>
                    <div class="topbar-right text-right">
                        <div class="ttm-social-links-wrapper list-inline">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-whatsapp"></i></a>
                                </li>
                            </ul>
                        </div>
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#">Be a Member!</a>
                    </div>
                </div>
            </div>
        </div><!-- ttm-topbar-wrapper end -->
        <!-- ttm-header-wrap -->
        <div class="ttm-header-wrap">
            <!-- ttm-stickable-header-w -->
            <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
                <div id="site-header-menu" class="site-header-menu">
                    <div class="site-header-menu-inner ttm-stickable-header">
                        <div class="container">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="index.html" title="Sama Card" rel="home">
                                    <img id="logo-img" class="img-center" src="{{URL::asset('assets/home/images/logo_home2.png')}}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <!-- header-icons -->
                                <div class="ttm-header-icons ">
                                        <span class="ttm-header-icon ttm-header-cart-link">
                                            <a href="#"><i class="fa fa-shopping-cart"></i>
                                                <span class="number-cart">0</span>
                                            </a>
                                        </span>
                                    <div class="ttm-header-icon ttm-header-search-link">
                                        <a href="#"><i class="ti ti-search"></i></a>
                                        <div class="ttm-search-overlay">
                                            <div class="ttm-search-outer">
                                                <div class="ttm-form-title">Hi, How Can We Help You?</div>
                                                <form method="get" class="ttm-site-searchform" action="#">
                                                    <div class="w-search-form-h">
                                                        <div class="w-search-form-row">
                                                            <div class="w-search-input">
                                                                <input type="search" class="field searchform-s" name="s" placeholder="Type Word Then Enter...">
                                                                <button type="submit">
                                                                    <i class="ti ti-search"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- header-icons end -->
                                <div class="ttm-menu-toggle">
                                    <input type="checkbox" id="menu-toggle-form" />
                                    <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                        <span class="toggle-block toggle-blocks-1"></span>
                                        <span class="toggle-block toggle-blocks-2"></span>
                                        <span class="toggle-block toggle-blocks-3"></span>
                                    </label>
                                </div>
                                <nav id="menu" class="menu">
                                    <ul class="dropdown">
                                        <li class="active"><a href="index.html">{{trans('main_tran.Home')}}</a>

                                        </li>
                                        <li><a href="#">{{trans('main_tran.Medical Program')}}</a>
                                            <ul>
                                                <li><a href="aboutus-1.html">{{trans('main_tran.Sama Health Saver Card')}}</a></li>
                                                <li><a href="aboutus-2.html">{{trans('main_tran.Medical Directory')}}</a></li>
                                                <li><a href="services.html">{{trans('main_tran.Our Services')}}</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">{{trans('main_tran.Join us')}}</a>
                                            <ul>
                                                <li><a href="research-style-1.html">{{trans('main_tran.Apply For the Card')}}</a></li>
                                                <li><a href="research-style-2.html">{{trans('main_tran.Be A Partner')}}</a></li>
                                                <li><a href="research-style-2.html">{{trans('main_tran.Search Your Card')}}</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">{{trans('main_tran.About Us')}}</a></li>
                                        <li><a href="#">{{trans('main_tran.Contact Us')}}</a>
                                        </li>
                                        <li><a href="#">language</a>
                                            <ul>
                                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                    <li>
                                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                            {{ $properties['native'] }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>

                                    </ul>
                                </nav>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div><!-- ttm-stickable-header-w end-->
        </div><!--ttm-header-wrap end -->
        <div class="ttm-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- ttm-info-widget-->
                        <div class="ttm-info-widget">
                            <div class="header-widget">
                                <div class="header-icon">
                                    <i class="fa fa-hospital-o"></i>
                                </div>
                                <div class="header-content">
                                    <h3>Number 1 Hospital</h3>
                                    <p>In United States</p>
                                </div>
                            </div>
                            <div class="header-widget">
                                <div class="header-icon">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <div class="header-content">
                                    <h3>Personal Cabinet</h3>
                                    <p>Qualified Staff</p>
                                </div>
                            </div>
                            <div class="header-widget">
                                <div class="header-icon">
                                    <i class="fa fa-thumbs-o-up"></i>
                                </div>
                                <div class="header-content">
                                    <h3>Get Result Online</h3>
                                    <p>Satisfied Patients</p>
                                </div>
                            </div>
                        </div>
                        <!-- ttm-info-widget end -->
                        <div class="ttm-contact">
                            <span class="icon"><i class="fa fa-phone"></i></span>Call Us : +973 77690000
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><!--header end-->

    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

        <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
            <ul>

                <li data-index="rs-7" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slides/slider-mainbg-002.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <img src="{{URL::asset('assets/home/images/slides/slide1.jpg')}}" alt="" title="mainslider-bg002" width="1920" height="750" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    <div class="tp-caption" id="slide-7-layer-11" data-x="['right','right','right','center']" data-hoffset="['50','40','30','334']" data-y="['middle','middle','middle','top']" data-voffset="['-149','-134','-136','48']"
                         data-fontsize="['65','65','50','55']"
                         data-lineheight="['60','60','50','55']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(0,214,163)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":170,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><i class="fa fa-hospital-o"></i> </div>

                    <div class="tp-caption slide-main-text" id="slide-7-layer-3" data-x="['right','right','right','center']" data-hoffset="['120','110','80','0']" data-y="['top','top','top','top']" data-voffset="['191','181','61','65']"
                         data-fontsize="['75','75','60','45']"
                         data-lineheight="['80','80','60','40']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":230,"speed":600,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">We Make </div>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-7-layer-4" data-x="['right','right','right','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','top']" data-voffset="['265','254','121','109']"
                         data-fontsize="['75','75','60','45']"
                         data-lineheight="['80','80','60','45']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":400,"speed":800,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Quality <strong class="ttm-textcolor-skincolor">Healthcare</strong> </div>




                    <a class="tp-caption shape-round tp-resizeme ttm_prettyphoto" style="background-color: #761193" href="https://youtu.be/e13TGGccvT4" target="_self" id="slide-7-layer-15" data-x="['left','left','left','left']" data-hoffset="['55','45','35','-436']" data-y="['middle','middle','middle','middle']" data-voffset="['215','240','130','107']"
                       data-width="['54','54','54','60']"
                       data-height="['54','54','54','60']"
                       data-fontsize="['20','20','20','20']"
                       data-lineheight="['54','54','54','54']"
                       data-fontweight="['400','400','400','400']"
                       data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                       data-whitespace="nowrap"
                       data-visibility="['on','on','on','off']"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1080,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['center','center','center','center']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"><i class="fa fa-play"></i></a>

                    <div class="tp-caption icon-text tp-resizeme" id="slide-7-layer-8" data-x="['left','left','left','left']" data-hoffset="['131','118','107','-303']" data-y="['middle','middle','middle','middle']" data-voffset="['203','227','117','96']"
                         data-fontsize="['19','19','18','20']"
                         data-lineheight="['21','21','21','20']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1180,"speed":500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">{{trans('main_tran.Play Video')}}</div>





                    <a class="tp-caption skin-flat-button tp-resizeme" style="background-color:white;color:  #761193;" href="#" target="_self" id="slide-7-layer-6" data-x="['center','center','center','center']" data-hoffset="['449','361','256','0']" data-y="['top','top','top','top']" data-voffset="['432','425','226','235']"
                       data-fontsize="['13','13','13','12']"
                       data-lineheight="['18','18','16','12']"
                       data-fontweight="['600','600','600','600']"
                       data-letterspacing="['1','1','0','0']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1270,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[17,17,17,15]"
                       data-paddingright="[30,30,23,20]"
                       data-paddingbottom="[17,17,17,15]"
                       data-paddingleft="[30,30,23,20]">{{trans('main_tran.Apply For the Card')}}</a>

                    <a class="tp-caption  tp-resizeme" style="background-color:white;color:  #761193;" href="#" target="_self" id="slide-7-layer-13" data-x="['center','center','center','center']" data-hoffset="['195','125','36','0']" data-y="['top','top','top','top']" data-voffset="['432','425','225','180']"
                       data-fontsize="['13','13','13','12']"
                       data-lineheight="['16','16','16','12']"
                       data-fontweight="['600','600','600','600']"
                       data-letterspacing="['1','1','0','0']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1330,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[17,17,17,15]"
                       data-paddingright="[30,30,23,20]"
                       data-paddingbottom="[17,17,17,15]"
                       data-paddingleft="[30,30,23,20]">{{trans('main_tran.Hospital Directory')}}
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

        <!--row-top-section-->
        <section class="ttm-row row-top-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt_45 res-991-mt-50 ttm-bgcolor-white">
                            <div class="row no-gutters">
                                <div class="col-lg">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon style4 text-center">
                                        <div class="featured-icon-box-inner">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-care"></i>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>{{trans('main_tran.Apply Card')}}</h5>
                                                </div>
                                                <div class="ttm-di_links">
                                                    <a href="#" class="di_link">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon style4 text-center">
                                        <div class="featured-icon-box-inner">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-heart-3"></i>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>{{trans('main_tran.Be A Partner')}}</h5>
                                                </div>

                                                <div class="ttm-di_links">
                                                    <a href="#" class="di_link">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-lg">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon style4 text-center">
                                        <div class="featured-icon-box-inner">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-ambulance"></i>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>{{trans('main_tran.Hospital Directory')}}</h5>
                                                </div>

                                                <div class="ttm-di_links">
                                                    <a href="#" class="di_link">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>

                                <div class="col-lg">
                                    <!-- featured-icon-box -->
                                    <div class="featured-icon-box top-icon style4 text-center">
                                        <div class="featured-icon-box-inner">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-eye"></i>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>{{trans('main_tran.Search e-Card')}}</h5>
                                                </div>

                                                <div class="ttm-di_links">
                                                    <a href="#" class="di_link">
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div><!-- row end -->
                </div>
        </section>
        <!-- row-top-section end -->


        <!--introduction-section-->
        <section class="ttm-row introduction-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <div class="pt-50 res-991-pt-0">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>{{trans('main_tran.About Us')}}</h5>
                                    <h2 class="title">{{trans('main_tran.Setting')}}</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="mb-30 clearfix">
                                <p>{{trans('main_tran.aboutinfo')}}</p>
                            </div>
                            <h5>{{trans('main_tran.Features')}}</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Immediate')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Unlimited')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Covered')}}</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Resanable')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Covered2')}}</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">{{trans('main_tran.Network')}}</span></li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mt-25 res-991-mt-0 res-991-mb-40">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mr-15 mt-15" href="#">VIEW MORE</a>
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mt-15" href="#">CONTACT US!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper text-right">
                            <img class="img-fluid" src="{{URL::asset('assets/home/images/home3.jpg')}}" alt="">
                        </div>
                        <div class="about-overlay-shape">
                            <div class="row">
                                <div class="col-lg-2 col-sm-3"></div>
                                <div class="col-lg-10 col-sm-6">

                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--introduction-section end-->




        <!--services-section-->
        <div class="ttm-row services-section ttm-bgcolor-darkgrey bg-img5 ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>{{trans('main_tran.SERVICES')}}</h5>
                                <h2 class="title">{{trans('main_tran.High-quality')}}</h2>
                            </div>
                            <div class="title-desc">{{trans('main_tran.Since')}}</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mb-30 mt-45 res-991-mt-0 float-right" href="#">{{trans('main_tran.More')}}</a>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-10">
                            <div class="row no-gutters">
                                <div class="col-md-3 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style5">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>{{trans('main_tran.Dental')}}</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>{{trans('main_tran.Dental2')}}</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon  ttm-icon_element-size-lg">
                                                <i class="flaticon-doctor-1"></i>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style5">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>{{trans('main_tran.sessions')}}</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>{{trans('main_tran.sessions2')}}</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-size-lg">
                                                <i class="flaticon-first-aid-kit"></i>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style5">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>{{trans('main_tran.pregnancy')}}</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>{{trans('main_tran.pregnancy2')}}</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon  ttm-icon_element-size-lg">
                                                <i class="flaticon-patient-1"></i>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style5">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>{{trans('main_tran.Surgical')}}</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>{{trans('main_tran.Surgical2')}}</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon  ttm-icon_element-size-lg">
                                                <i class="flaticon-orthopedics"></i>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-50 mb-50 text-center res-991-mt-30 res-991-mb-0">
                            <strong>{{trans('main_tran.hesitate')}} <a href="#"> <span class="ttm-textcolor-white"><u>{{trans('main_tran.started')}} </u></span></a></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--services-section end-->

        <!--team-section-->
        <section class="ttm-row team-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-10 col-md-10">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h2 class="title">{{trans('main_tran.Hospital')}}</h2>
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
        </section>
        <!--team-section end-->

        <!--cta-section-->



    </div><!--site-main end-->


    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="first-footer ttm-bgcolor-skincolor">
            <div class="container">
                <div class="row">
                    <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box iconalign-before-heading">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h5>+123 456 78910 / 11</h5>
                                    <h4>Have a question? call us now</h4>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box iconalign-before-heading">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h5>info@domainname.com</h5>
                                    <h4>Need support? Drop us an email</h4>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                    <div class="widget-area col-xs-12 col-sm-12 col-md-6 col-lg-4">
                        <aside class="widget widget-text">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box iconalign-before-heading">
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-sm ttm-icon_element-style-square">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div class="featured-title">
                                    <h5>Mon – Sat 07:00 – 21:00</h5>
                                    <h4>We are open on</h4>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">About Delmont</h3>
                            <div class="textwidget widget-text">
                                Our Clinic has grown to provide a world class facility for the clinic advanced restorative dentistry.
                                <br><br>We are among the most qualified implant providers in the AUS with over 30 years of quality training and experience.
                                <br><br>
                                <div class="social-icons social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                        <li class="social-gplus"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Quick Links</h3>
                            <ul id="menu-footer-quick-links">
                                <li><a href="index.html">Make Appointments</a></li>
                                <li><a href="services-1.html">Before & After</a></li>
                                <li><a href="about-1.html">Customer Treatments</a></li>
                                <li><a href="single-style-1.html">Our Doctors Team</a></li>
                                <li><a href="blog.html">Departments Services</a></li>
                                <li><a href="our-team.html">About our Clinic</a></li>
                                <li><a href="faq.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget style2 widget-out-link clearfix">
                            <h3 class="widget-title">Latest News</h3>
                            <ul class="widget-post ttm-recent-post-list">
                                <li>
                                    <a href="single-blog.html"><img src="images/blog/01.jpg" alt="post-img"></a>
                                    <span class="post-date">April 1, 2019</span>
                                    <a href="single-blog.html">How much aspirin to take for stroke</a>
                                </li>
                                <li>
                                    <a href="single-blog.html"><img src="images/blog/02.jpg" alt="post-img"></a>
                                    <span class="post-date">April 1, 2019</span>
                                    <a href="single-blog.html">Implant Surgical equipment technology</a>
                                </li>
                                <li>
                                    <a href="single-blog.html"><img src="images/blog/03.jpg" alt="post-img"></a>
                                    <span class="post-date">April 05, 2019</span>
                                    <a href="single-blog.html">The Benefits of Middle-Age Fitness</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu menu-footer-services-menu clearfix">
                            <h3 class="widget-title">Our Services</h3>
                            <ul id="menu-footer-services-menu" class="menu">
                                <li><a href="#">Surgery</a></li>
                                <li><a href="#">Psychological</a></li>
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Orthopedics</a></li>
                                <li><a href="#">Pediatric</a></li>
                                <li><a href="#">Oncology</a></li>
                                <li><a href="#">Anesthesiology</a></li>
                                <li><a href="#">Dermatology</a></li>
                            </ul>
                        </div>
                        <div class="widget widget-text clearfix">
                            <h3 class="widget-title">Newsletter</h3>
                            <form id="subscribe-form" method="post" action="#" data-mailchimp="true">
                                <div class="ttm_subscribe_form">
                                    <input type="email" name="EMAIL" placeholder="Enter Your Email" required="">
                                    <button class="btn" type="submit"> <i class="fa fa-envelope-o"></i> </button>
                                </div>
                                <div class="subscribe-response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-12">
                        <span>Copyright © 2019 Delmont Theme by <a href="https://themetechmount.com/">ThemetechMount</a></span>
                    </div>
                    <div class="col-md-12">
                        <ul id="menu-footer-menu" class="footer-nav-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Privacy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->
@endsection

<!-- Javascript -->

@section('js')
@endsection

