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
                        <li><i class="themifyicon ti-location-pin"></i>42 Building, 1 Road, 4202 Block, Muharraq</li>
                        <li><i class="themifyicon ti-timer"></i>Sun - Thu 9.00 - 2.00. Friday & Sunday CLOSED</li>
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
                                <a class="home-link" href="index.html" title="Delmont" rel="home">
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
                                            <ul>
                                                <li class="active"><a href="index.html">Homepage 1</a></li>
                                                <li><a href="home-2.html">Homepage 2</a></li>
                                                <li><a href="home-3.html">Homepage 3</a></li>
                                                <li><a href="home-4.html">Homepage 4</a></li>
                                                <li><a href="home-5.html">Home Corona</a></li>
                                                <li><a href="home-6.html">Home Vector</a></li>
                                                <li><a href="#">Header Styles</a>
                                                    <ul>
                                                        <li class="active"><a href="index.html">Header Classic Info</a></li>
                                                        <li><a target="_blank" href="header-overlay.html">Header Overlay</a></li>
                                                        <li><a target="_blank" href="header-infostack.html">Header Infostack</a></li>
                                                        <li><a target="_blank" href="header-classic.html">Header Classic</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Pages</a>
                                            <ul>
                                                <li><a href="aboutus-1.html">About Us</a></li>
                                                <li><a href="aboutus-2.html">About Us 2</a></li>
                                                <li><a href="services.html">Services</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="contact-us-2.html">Contact Us 2</a></li>
                                                <li><a href="our-team.html">Our Doctors</a></li>
                                                <li><a href="#">Shop</a>
                                                    <ul>
                                                        <li><a href="home-shop.html">Home Shop</a></li>
                                                        <li><a href="shop.html">Default Shop</a></li>
                                                        <li><a href="product-details.html">Single Product Details</a></li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Features</a>
                                                    <ul>
                                                        <li><a href="before-after.html">Before & After</a></li>
                                                        <li><a href="our-events.html">Our Events</a></li>
                                                        <li><a href="book-appointment.html">Book Appointment</a></li>
                                                        <li><a href="team-details.html">Doctor Details</a></li>
                                                        <li><a href="forums.html">bbPress</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="faq.html">FAQs</a></li>
                                                <li><a href="error.html">Error Page</a></li>
                                                <li><a href="element.html">Elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Research</a>
                                            <ul>
                                                <li><a href="research-style-1.html">Research Style 1</a></li>
                                                <li><a href="research-style-2.html">Research Style 2</a></li>
                                                <li><a href="#">Project Single</a>
                                                    <ul>
                                                        <li><a href="single-style-1.html">Style One</a></li>
                                                        <li><a href="single-style-2.html">Style Two</a></li>
                                                        <li><a href="single-style-3.html">Style Three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Services</a>
                                            <ul>
                                                <li><a href="neurology-services.html">Neurology Services</a></li>
                                                <li><a href="cardiology-services.html">Cardiology Services</a></li>
                                                <li><a href="x-ray-rmi-services.html">X-Ray & RMI Services</a></li>
                                                <li><a href="eye-care-services.html">Eye Care Services</a></li>
                                                <li><a href="dental-services.html">Dental Services</a></li>
                                                <li><a href="orthopaedics-services.html">Orthopaedics Services</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Classic</a></li>
                                                <li><a href="blog-left-image.html">Blog Left Image</a></li>
                                                <li><a href="blog-grid-view.html">Blog Grid View</a></li>
                                                <li><a href="single-blog.html">Blog Single View</a></li>
                                            </ul>
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
                            <span class="icon"><i class="fa fa-phone"></i></span>Toll Free : 1 123 456 78910
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
                <li data-index="rs-6" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slides/slider-mainbg-001.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <img src="images/slides/slider-mainbg-001.jpg" alt="" title="mainslider-bg001" width="1920" height="750" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    <div class="tp-caption tp-resizeme" id="slide-6-layer-1" data-x="['left','left','left','left']" data-hoffset="['50','40','-220','-220']" data-y="['top','top','top','top']" data-voffset="['160','158','63','63']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','off','off']"
                         data-type="image"
                         data-responsive_offset="on"
                         data-frames='[{"delay":180,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">

                        <img src="images/slides/slider-icon001.png" alt="" data-ww="['113px','113px','113px','113px']" data-hh="['45px','45px','45px','45px']" width="113" height="45" data-no-retina>

                    </div>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-6-layer-2" data-x="['left','left','left','center']" data-hoffset="['175','163','30','0']" data-y="['top','top','top','middle']" data-voffset="['178','175','76','-90']"
                         data-fontsize="['16','16','15','13']"
                         data-lineheight="['16','16','15','13']"
                         data-fontweight="['400','400','400','300']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-letterspacing="1"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":330,"speed":500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">WE GIVE YOU THE BEST! </div>

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-6-layer-3" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['213','211','106','-45']"
                         data-fontsize="['75','80','60','40']"
                         data-lineheight="['80','80','55','40']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":470,"speed":800,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><strong class="ttm-textcolor-skincolor">Medical</strong> Services </div>


                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-6-layer-4" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['286','286','167','-3']"
                         data-fontsize="['75','80','60','40']"
                         data-lineheight="['80','80','60','40']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":900,"speed":800,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">That You Can <strong class="ttm-textcolor-skincolor">Trust</strong> </div>

                    <div class="tp-caption slide-main-text tp-resizeme " id="slide-6-layer-5" data-x="['left','left','left','center']" data-hoffset="['50','40','-603','-603']" data-y="['top','top','top','middle']" data-voffset="['373','382','236','19']"
                         data-fontsize="['16','16','15','12']"
                         data-lineheight="['25','25','26','18']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(237, 237, 237)','rgb(237, 237, 237)','rgb(237, 237, 237)','rgb(237, 237, 237)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','off','off']"
                         data-type="text"
                         data-responsive_offset="['on','on','on','off']"
                         data-frames='[{"delay":1100,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Need professional help? Our support staff will answer your questions.<br> Visit us Now or Make an Appointment! </div>

                    <div class="tp-caption shape-rounded tp-resizeme" id="slide-6-layer-7" data-x="['center','center','center','center']" data-hoffset="['544','446','332','332']" data-y="['middle','middle','middle','middle']" data-voffset="['219','240','140','150']"
                         data-width="50"
                         data-height="48"
                         data-fontsize="['23','23','23','23']"
                         data-lineheight="['48','48','48','48']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1240,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><span class=" fa fa-user-md"></span> </div>

                    <div class="tp-caption icon-text tp-resizeme" id="slide-6-layer-8" data-x="['center','center','center','center']" data-hoffset="['444','349','235','442']" data-y="['middle','middle','middle','middle']" data-voffset="['207','227','128','95']"
                         data-fontsize="['19','19','19','18']"
                         data-lineheight="['21','21','21','20']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1350,"speed":500,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Dr. Alex Murry </div>

                    <div class="tp-caption icon-desc tp-resizeme" id="slide-6-layer-9" data-x="['center','center','center','center']" data-hoffset="['352','259','152','360']" data-y="['middle','middle','middle','middle']" data-voffset="['231','251','152','125']"
                         data-fontsize="['15','15','14','13']"
                         data-lineheight="['15','15','15','13']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1570,"speed":300,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Get an Appointment</div>

                    <a class="tp-caption icon-btn tp-resizeme" href="#" target="_self" id="slide-6-layer-10" data-x="['center','center','center','center']" data-hoffset="['466','373','259','465']" data-y="['middle','middle','middle','middle']" data-voffset="['230','250','151','123']"
                       data-fontsize="['15','15','14','13']"
                       data-lineheight="['15','15','14','13']"
                       data-fontweight="['400','400','400','600']"
                       data-color="['rgb(0, 214, 163)','rgb(0, 214, 163)','rgb(0, 214, 163)','rgb(0, 214, 163)']"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-visibility="['on','on','on','off']"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1570,"speed":300,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"><u>Learn More</u></a>

                    <a class="tp-caption white-flatborder-button tp-resizeme" href="#" target="_self" id="slide-6-layer-6" data-x="['left','left','left','center']" data-hoffset="['50','40','30','0']" data-y="['top','top','top','middle']" data-voffset="['467','482','265','59']"
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
                       data-frames='[{"delay":1480,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[17,17,17,15]"
                       data-paddingright="[30,30,23,20]"
                       data-paddingbottom="[17,17,17,15]"
                       data-paddingleft="[30,30,23,20]">MAKE AN APPOINTMENT! </a>

                </li>

                <li data-index="rs-7" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slides/slider-mainbg-002.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <img src="images/slides/slider-mainbg-002.jpg" alt="" title="mainslider-bg002" width="1920" height="750" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

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

                    <div class="tp-caption slide-main-text tp-resizeme" id="slide-7-layer-5" data-x="['right','center','right','right']" data-hoffset="['50','273','-320','-320']" data-y="['top','top','top','top']" data-voffset="['362','354','187','149']"
                         data-fontsize="['23','23','18','15']"
                         data-lineheight="['25','25','18','15']"
                         data-fontweight="['200','200','200','200']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','off','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":870,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Same-Day Emergency Appointments! </div>

                    <div class="tp-caption shape-round-border tp-resizeme" id="slide-7-layer-7" data-x="['left','left','left','left']" data-hoffset="['50','40','30','-439']" data-y="['middle','middle','middle','middle']" data-voffset="['215','240','130','108']"
                         data-width="['64','64','64','70']"
                         data-height="['64','64','64','70']"
                         data-fontsize="['20','20','20','20']"
                         data-lineheight="['70','70','70','70']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgba(255, 255, 255,0)','rgba(255, 255, 255,0)','rgba(255, 255, 255,0)','rgba(255, 255, 255,0)']"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":980,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"><i class="fa fa-play"></i> </div>

                    <a class="tp-caption shape-round tp-resizeme ttm_prettyphoto" href="https://youtu.be/e13TGGccvT4" target="_self" id="slide-7-layer-15" data-x="['left','left','left','left']" data-hoffset="['55','45','35','-436']" data-y="['middle','middle','middle','middle']" data-voffset="['215','240','130','107']"
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
                       data-paddingleft="[0,0,0,0]"><i class="fa fa-play"></i> </a>

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
                         data-paddingleft="[0,0,0,0]">Play Video </div>

                    <div class="tp-caption icon-desc tp-resizeme" id="slide-7-layer-9" data-x="['left','left','left','left']" data-hoffset="['129','116','106','-309']" data-y="['middle','middle','middle','middle']" data-voffset="['228','251','139','128']"
                         data-fontsize="['15','15','14','15']"
                         data-lineheight="['15','15','16','16']"
                         data-fontweight="['400','400','400','400']"
                         data-color="['rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)','rgb(255, 255, 255)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1400,"speed":300,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">Schedule Today </div>

                    <a class="tp-caption icon-btn tp-resizeme" href="#" target="_self" id="slide-7-layer-10" data-x="['left','left','left','left']" data-hoffset="['240','226','210','-193']" data-y="['middle','middle','middle','middle']" data-voffset="['227','251','140','130']"
                       data-fontsize="['15','15','14','15']"
                       data-lineheight="['15','15','14','15']"
                       data-fontweight="['400','400','400','600']"
                       data-color="['rgb(0, 214, 163)','rgb(0, 214, 163)','rgb(0, 214, 163)','rgb(0, 214, 163)']"
                       data-textdecoration="underline"
                       data-width="none"
                       data-height="none"
                       data-whitespace="nowrap"
                       data-visibility="['on','on','on','off']"
                       data-type="text"
                       data-actions=''
                       data-responsive_offset="on"
                       data-frames='[{"delay":1400,"speed":300,"frame":"0","from":"x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                       data-textAlign="['inherit','inherit','inherit','inherit']"
                       data-paddingtop="[0,0,0,0]"
                       data-paddingright="[0,0,0,0]"
                       data-paddingbottom="[0,0,0,0]"
                       data-paddingleft="[0,0,0,0]"><u>Contact! </u></a>

                    <a class="tp-caption skin-flat-button tp-resizeme" href="#" target="_self" id="slide-7-layer-6" data-x="['center','center','center','center']" data-hoffset="['449','361','256','0']" data-y="['top','top','top','top']" data-voffset="['432','425','226','235']"
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
                       data-paddingleft="[30,30,23,20]">MAKE AN APPOINTMENT! </a>

                    <a class="tp-caption white-flatborder-button tp-resizeme" href="#" target="_self" id="slide-7-layer-13" data-x="['center','center','center','center']" data-hoffset="['195','125','36','0']" data-y="['top','top','top','top']" data-voffset="['432','425','225','180']"
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
                       data-paddingleft="[30,30,23,20]">SEE HOW WE CAN HELP
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
                                                    <h5>Oral Care</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>The Stronger Teeth</p>
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
                                                    <h5>Heal Body</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>A small carebear</p>
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
                                                    <h5>Ambulance</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Shipping Via Air</p>
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
                                                <i class="flaticon-medicines"></i>
                                            </div>
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Drug store</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>A retailer  shop</p>
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
                                                    <h5>Eye Care</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Sharping vision</p>
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
                                    <h5>OUR MEDICAL</h5>
                                    <h2 class="title">We’re Setting the Standards in Research & Clinical Care</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="mb-30 clearfix">
                                <p>We provide the most full medical services, so every person could have the opportunity to receive qualitative medical help. Our Clinic has grown to provide a world class facility for the treatment of tooth loss, dental cosmetics and bore advanced restorative dentistry. We are among the most qualified implant providers in the USA with over 35 years of quality training and experience.</p>
                            </div>
                            <h5>Delmont Special Features</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Adult Trauma Center</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Birthing and Lactation Classes</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Dental and Oral Surgery</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor">
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Children's Trauma Center</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Heart and Vascular Institute</span></li>
                                        <li><i class="fa fa-arrow-circle-right"></i><span class="ttm-list-li-content">Plastic Surgery</span></li>
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
                            <img class="img-fluid" src="images/single-img-twel.jpg" alt="">
                        </div>
                        <div class="about-overlay-shape">
                            <div class="row">
                                <div class="col-lg-2 col-sm-3"></div>
                                <div class="col-lg-10 col-sm-6">
                                    <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-darkgrey mt_50 pl-35 pb-10  pt-15 ttm-textcolor-white">
                                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                        <div class="layer-content">
                                            <h5 class="font-weight-normal mb-0">We <span class="ttm-textcolor-skincolor"> &nbsp;<i class="fa fa-heart-o"></i>&nbsp; </span> To Care our <span class="ttm-textcolor-skincolor"> Patients !</span></h5>
                                        </div>
                                    </div><!-- ttm_single_image-wrapper end -->
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--introduction-section end-->


        <!--broken-section-->
        <section class="ttm-row broken-section bg-img6 bg-layer bg-layer-equal-height clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-5"></div>
                    <div class="col-lg-7">
                        <!-- ttm-fid-border -->
                        <div class="ttm-fid-border ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-skincolor spacing-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>ABOUT MEDICAL</h5>
                                        <h2 class="title">Powered By Over 1,503 Patients Trust Us With Their Sweet Love.</h2>
                                    </div>
                                </div><!-- section title end -->
                                <div class="pt-10">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="themifyicon ti-cup"></i>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation="animateDigits"
                                                                data-from="0"
                                                                data-to="201"
                                                                data-interval="5"
                                                                data-before=""
                                                                data-before-style="sup"
                                                                data-after=""
                                                                data-after-style="sub">
                                                            201
                                                        </span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title"><span>Award Win<br></span></h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="themifyicon ti-user"></i>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation="animateDigits"
                                                                data-from="0"
                                                                data-to="354"
                                                                data-interval="5"
                                                                data-before=""
                                                                data-before-style="sup"
                                                                data-after=""
                                                                data-after-style="sub">
                                                            354
                                                        </span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title"><span>Qualified Staff<br></span></h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="themifyicon ti-heart-broken"></i>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation="animateDigits"
                                                                data-from="0"
                                                                data-to="124"
                                                                data-interval="5"
                                                                data-before=""
                                                                data-before-style="sup"
                                                                data-after=""
                                                                data-after-style="sub">
                                                            124
                                                        </span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title"><span>Machines<br></span></h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="themifyicon ti-blackboard"></i>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation="animateDigits"
                                                                data-from="0"
                                                                data-to="4012"
                                                                data-interval="5"
                                                                data-before=""
                                                                data-before-style="sup"
                                                                data-after=""
                                                                data-after-style="sub">
                                                            4012
                                                        </span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title"><span>Hospital Rooms<br></span></h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="themifyicon ti-thumb-up"></i>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation="animateDigits"
                                                                data-from="0"
                                                                data-to="7015"
                                                                data-interval="5"
                                                                data-before=""
                                                                data-before-style="sup"
                                                                data-after=""
                                                                data-after-style="sub">
                                                            7015
                                                        </span>
                                                    </h4><h3 class="ttm-fid-title"><span>Happy Patients<br></span></h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                        <div class="col-sm-4">
                                            <!-- ttm-fid -->
                                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon">
                                                <div class="ttm-fid-icon-wrapper">
                                                    <i class="themifyicon ti-eraser"></i>
                                                </div>
                                                <div class="ttm-fid-contents">
                                                    <h4 class="ttm-fid-inner">
                                                        <span   data-appear-animation="animateDigits"
                                                                data-from="0"
                                                                data-to="254"
                                                                data-interval="5"
                                                                data-before=""
                                                                data-before-style="sup"
                                                                data-after=""
                                                                data-after-style="sub">
                                                            254
                                                        </span>
                                                    </h4>
                                                    <h3 class="ttm-fid-title"><span>Suppliers<br></span></h3>
                                                </div>
                                            </div><!-- ttm-fid end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-fid-border end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--broken-section end-->

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
                                <h5>WE OFFER SERVICES</h5>
                                <h2 class="title">Special High-quality Services</h2>
                            </div>
                            <div class="title-desc">Since its founding Delmont has been providing its patients with the full medical care, encompassing outpatients services, is neurology, laboratory, imaging diagnostics and more.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-white mb-30 mt-45 res-991-mt-0 float-right" href="#">MORE SERVICES</a>
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
                                                <h5>Internists</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>For normal & complex disease. subspecialties in  sleep medicine, cancer etc.</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-doctor-1"></i>
                                            </div>
                                        </div>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline mb-20" href="#">VIEW MORE</a>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style5">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Osteopaths</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>DOs are just like MDs. Recommend for  a "whole body” approach.</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-first-aid-kit"></i>
                                            </div>
                                        </div>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline mb-20" href="#">VIEW MORE</a>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style5">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Oncologists</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>An Internists! to cure cancer, work with radiation oncologists & surgeons.</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-patient-1"></i>
                                            </div>
                                        </div>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline mb-20" href="#">VIEW MORE</a>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style5">
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Podiatrists</h5>
                                            </div>
                                            <div class="featured-desc">
                                                <p>The specialists who help with problems that affect your feet or lower legs.</p>
                                            </div>
                                        </div>
                                        <div class="featured-icon">
                                            <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                <i class="flaticon-orthopedics"></i>
                                            </div>
                                        </div>
                                        <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-white btn-inline mb-20" href="#">VIEW MORE</a>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mt-50 mb-50 text-center res-991-mt-30 res-991-mb-0">
                            <strong>Don’t hesitate, contact us for better help and services. <span class="ttm-textcolor-white"><u>Let’s get started</u></span></strong>
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
                                    <a href="team-details.html"><i class="ti ti-plus"></i></a>
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
                                    <a href="team-details.html"><i class="ti ti-plus"></i></a>
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
                                    <a href="team-details.html"><i class="ti ti-plus"></i></a>
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
                                    <a href="team-details.html"><i class="ti ti-plus"></i></a>
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
                                    <a href="team-details.html"><i class="ti ti-plus"></i></a>
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

        <!--cta-section-->
        <section class="ttm-row cta-section bg-img1 clearfix">
            <div class="container"><!--container-->
                <div class="row"><!--row-->
                    <div class="col-lg-12">
                        <div class="pt-70 pb-140 mt-50 row-title res-991-mt-0 res-991-pb-30 text-center">
                            <div class="ttm-video-btn">
                                <div class="ttm-play-btn ttm_prettyphoto">
                                    <span class="ttm-btn-play"><i class="fa fa-play"></i></span>
                                </div>
                            </div>
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>Time can't be Resisted, But Aging Can</h5>
                                    <h2 class="title">Commited To Trusted Health Care Delmont</h2>
                                </div>
                            </div><!-- section title end -->
                            <h4>Get Your Quote or Call:<span class="ttm-textcolor-skincolor"> (0080) 123-453-789)</span> </h4>
                            <div class="mt-50 res-991-mt-30">
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mr-15 mb-20" href="#">APPOINTMENT!</a>
                                <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor mb-20" href="#">SEE HOW WE CAN HELP</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--cta-section end-->


        <!-- testimonial-section -->
        <section class="ttm-row broken-section break-991-colum bg-layer clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-5">
                        <div class="ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor spacing-2">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title with-desc clearfix">
                                    <div class="title-header">
                                        <h5>CLIENTS</h5>
                                        <h2 class="title">Happy Patients & Clients</h2>
                                    </div>
                                    <div class="title-desc">If you need any medical help we are available for you. Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tempor the incididunt ut labore et dolore.</div>
                                </div><!-- section title end -->
                                <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-white btn-inline mt_25" href="#">VIEW MORE DETAILS<i class="ti ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="ttm-col-bgcolor-yes ttm-right-span ttm-bg ttm-bgcolor-darkgrey spacing-3">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- wrap-testimonial -->
                                <div class="testimonial-slide owl-carousel" data-item="1" data-nav="true" data-dots="false" data-auto="false">
                                    <!-- testimonials -->
                                    <div class="testimonials ttm-testimonial-box-view-style1">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="images/testimonial/01.jpg" alt="testimonial-img">
                                            </div>
                                            <div class="testimonial-caption">
                                                <h5>RAshley Foster</h5>
                                                <label>Patient</label>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <blockquote class="ttm-testimonial-text">Prior to my stay at Delmont, I was aware of their stellar reputation and multiple friends commented about how lucky I was to have my surgery scheduled there. As a result my expectations were high and yet the kind and professional staff with excellent patient care surpassed them.</blockquote>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- testimonials end -->
                                    <!-- testimonials -->
                                    <div class="testimonials ttm-testimonial-box-view-style1">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="images/testimonial/02.jpg" alt="testimonial-img">
                                            </div>
                                            <div class="testimonial-caption">
                                                <h5>Alan Sears</h5>
                                                <label>Patient</label>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <blockquote class="ttm-testimonial-text">Great co workers, really good environment and excellent patient care. They are continuously innovating themselves which is why they remain a premier dental clinic.This was the cleanest medical establishment I've ever been in. They just loved the welcoming and warm atmosphere in there.</blockquote>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- testimonials end -->
                                    <!-- testimonials -->
                                    <div class="testimonials ttm-testimonial-box-view-style1">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-fluid" src="images/testimonial/03.jpg" alt="testimonial-img">
                                            </div>
                                            <div class="testimonial-caption">
                                                <h5>Raymon Myers</h5>
                                                <label>Patient</label>
                                            </div>
                                        </div>
                                        <div class="testimonial-content">
                                            <blockquote class="ttm-testimonial-text">The doctors and nurses and aides were excellent. The food was excellent. I am feeling fine and very lucky, back to my old self again and it feels great. Thank God for clinics such as yours. I appreciate all your kindness and good care you gave me is beyond my expectations they wonder for me.</blockquote>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- testimonials end -->
                                </div><!-- wrap-testimonial end-->
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- testimonial-section end-->

        <!--client-section-->
        <div class="ttm-row client-section ttm-bgcolor-grey mt_70 res-991-mt-0 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row text-center">
                    <div class="col-md-12">
                        <!-- ttm-client -->
                        <div class="ttm-client clients-slide owl-carousel owl-theme owl-loaded" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                    <div class="client-thumbnail">
                                        <img src="images/client/client-01.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                    <div class="client-thumbnail">
                                        <img src="images/client/client-02.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                    <div class="client-thumbnail">
                                        <img src="images/client/client-03.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="client-01">
                                    <div class="client-thumbnail">
                                        <img src="images/client/client-01.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="client-02">
                                    <div class="client-thumbnail">
                                        <img src="images/client/client-02.png" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="client-box ttm-box-view-separator-logo">
                                <div class="ttm-client-logo-tooltip" data-tooltip="client-03">
                                    <div class="client-thumbnail">
                                        <img src="images/client/client-03.png" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div><!-- ttm-client end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!--client-section end-->


        <!--blog-section-->
        <section class="ttm-row blog-section clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <h5>OUR BLOG</h5>
                                <h2 class="title">Recent Articles and News</h2>
                            </div>
                            <div class="title-desc">Since its founding Delmont has been providing its patients with the full medical care, encompassing outpatients services, is neurology, laboratory, imaging diagnostics and more.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-30 mt-45 res-991-mt-0 float-right" href="#">MORE ARTICLES</a>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep_holder_box width-100 mt_15 mb-35 res-991-mt-0">
                            <span class="sep_holder"><span class="sep_line"></span></span>
                            <span class="sep_holder"><span class="sep_line"></span></span>
                        </div>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <!-- post-slide -->
                    <div class="post-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                            <div class="ttm-post-featured-outer">
                                <div class="ttm-post-format-icon">
                                    <i class="ti ti-pencil"></i>
                                </div>
                                <div class="ttm-post-thumbnail featured-thumbnail">
                                    <img class="img-fluid" src="images/blog/01.jpg" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">16<span class="entry-month">Jan<span class="entry-year">2019</span></span></time>
                                    </span>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post box-shadow">
                                <div class="post-meta">
                                    <span class="ttm-meta-line comments-link"><i class="fa fa-comment"></i> 3 Comments</span>
                                    <span class="ttm-meta-line byline"><i class="fa fa-user"></i> Alex</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">How much aspirin to take for stroke</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-15" href="#">READ MORE<i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                            <div class="ttm-post-featured-outer">
                                <div class="ttm-post-format-icon">
                                    <i class="ti ti-pencil"></i>
                                </div>
                                <div class="ttm-post-thumbnail featured-thumbnail">
                                    <img class="img-fluid" src="images/blog/02.jpg" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">20<span class="entry-month">Jan<span class="entry-year">2019</span></span></time>
                                    </span>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post box-shadow">
                                <div class="post-meta">
                                    <span class="ttm-meta-line comments-link"><i class="fa fa-comment"></i> 3 Comments</span>
                                    <span class="ttm-meta-line byline"><i class="fa fa-user"></i> Alex</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">Implant Surgical equipment technology</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-15" href="#">READ MORE<i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                            <div class="ttm-post-featured-outer">
                                <div class="ttm-post-format-icon">
                                    <i class="ti ti-pencil"></i>
                                </div>
                                <div class="ttm-post-thumbnail featured-thumbnail">
                                    <img class="img-fluid" src="images/blog/03.jpg" alt="">
                                </div>
                                <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">24<span class="entry-month">Jan<span class="entry-year">2019</span></span></time>
                                    </span>
                                </div>
                            </div>
                            <div class="featured-content featured-content-post box-shadow">
                                <div class="post-meta">
                                    <span class="ttm-meta-line comments-link"><i class="fa fa-comment"></i> 3 Comments</span>
                                    <span class="ttm-meta-line byline"><i class="fa fa-user"></i> Alex</span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">The Benefits of Middle-Age Fitness</a></h5>
                                </div>
                                <div class="post-desc featured-desc">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-15" href="#">READ MORE<i class="ti ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!--blog-section end-->


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

