<!--header start-->
<header id="masthead" class="header ttm-header-style-classicinfo">

    <!-- ttm-topbar-wrapper -->
    <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
        <div class="container">
            <div class="ttm-topbar-content">
                <ul class="top-contact text-left">
                    <li><i class="themifyicon ti-location-pin" style="color: white"></i>42 Building, 1 Road, 4202 Block,
                        Muharraq
                    </li>
                    <li><i class="themifyicon ti-timer" style="color: white"></i>Sun - Thu 9.00 - 4.00. Friday & Sunday
                        CLOSED
                    </li>
                </ul>
                <div class="topbar-right text-right">
                    <div class="ttm-social-links-wrapper list-inline">
                        <ul class="social-icons">
                            <li><a href="https://www.instagram.com/sama.solution/"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li><a href="https://wa.link/j43ido"><i class="fa fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>
                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor"
                       href="{{route('apply.view')}}">Apply Card!</a>
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
                            <a class="home-link" href="{{route('home_page')}}" title="Sama Card" rel="home">
                                <img id="logo-img" class="img-center"
                                     src="{{URL::asset('assets/home/images/logo_home2.png')}}" alt="logo-img">
                            </a>
                        </div><!-- site-branding end -->
                        <!--site-navigation -->
                        <div id="site-navigation" class="site-navigation">
                            <!-- header-icons -->
                            <div class="ttm-header-icons ">
                                        <span class="ttm-header-icon ttm-header-cart-link">
{{--language if want--}}
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
                                                            <input type="search" class="field searchform-s" name="s"
                                                                   placeholder="Type Word Then Enter...">
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
                                <input type="checkbox" id="menu-toggle-form"/>
                                <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                    <span class="toggle-block toggle-blocks-1"></span>
                                    <span class="toggle-block toggle-blocks-2"></span>
                                    <span class="toggle-block toggle-blocks-3"></span>
                                </label>
                            </div>
                            <nav id="menu" class="menu">
                                <ul class="dropdown">
                                    <li class="active"><a href="{{route('home_page')}}">{{trans('main_tran.Home')}}</a>

                                    </li>
                                    <li><a href="#">{{trans('main_tran.Medical Program')}}</a>
                                        <ul>
                                            <li>
                                                <a href="aboutus-1.html">{{trans('main_tran.Sama Health Saver Card')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('hospital.directory')}}">{{trans('main_tran.Medical Directory')}}</a>
                                            </li>
                                            <li><a href="{{route('services.home')}}">{{trans('main_tran.Our Services')}}</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">{{trans('main_tran.Join us')}}</a>
                                        <ul>
                                            <li>
                                                <a href="{{route('apply.view')}}">{{trans('main_tran.Apply For the Card')}}</a>
                                            </li>
                                            <li><a href="research-style-2.html">{{trans('main_tran.Be A Partner')}}</a>
                                            </li>
                                            <li>
                                                <a href="{{route('search.card')}}">{{trans('main_tran.Search Your Card')}}</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li><a href="{{route('about-us')}}">{{trans('main_tran.About Us')}}</a></li>
                                    <li><a href="{{route('contact-us')}}">{{trans('main_tran.Contact Us')}}</a>
                                    </li>
                                    <li><a href="#">language</a>
                                        <ul>
                                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                                <li>
                                                    <a rel="alternate" hreflang="{{ $localeCode }}"
                                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
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
</header><!--header end-->
