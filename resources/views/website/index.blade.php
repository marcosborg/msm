<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MSM</title>
    <meta name="description" content="A Manuel da Silva Marques, Comércio Internacional, Lda. Dedica-se à comercialização de artigos para decoração e objectos utilitários." />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="website/css/bootstrap.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="website/css/font-awesome.min.css">
    <link rel="stylesheet" href="website/css/elegant-font.css">
    <link rel="stylesheet" href="website/css/linearicons.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="website/revolution/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="website/revolution/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="website/revolution/css/navigation.css">
    <!-- OWL CAROUSEL
	  	================================================== -->
    <link rel="stylesheet" href="website/css/owl.carousel.css">
    <!-- SCROLL BAR MOBILE MENU
  		================================================== -->
    <link rel="stylesheet" href="website/css/jquery.mCustomScrollbar.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="website/style.css?v=0.2">

    <!-- Favicons
		  ================================================== -->
    <link rel="shortcut icon" href="website/images/favicon.ico">
</head>

<body>

    <div id="page">
        <div id="skrollr-body">
            <header id="mainmenu" class="header-v2 header-v4 header-border header-fix header-bg-white " data-0="padding:10px;padding-left:40px;padding-right:40px;" data-251="padding:10px; padding-left:40px;padding-right:40px;top:0;">
                <div class="container">
                    <div class="left-header">
                        <ul class="navi-level-1">
                            <li>
                                <a href="index.html" class="logo"><img src="website/images/logo.png" class="img-responsive" alt="Image">
                                </a>
                            </li>
                        </ul>
                    </div><!-- End Left Header -->
                    @if ($menus)
                    <nav>
                        <ul id="main-navi" class="navi-level-1 hover-style-2 main-navi">
                            @foreach ($menus as $menu)
                            <li>
                                <a href="{{ $menu->link }}"><span>{{ $menu->name }}</span></a>
                            </li>
                            @endforeach
                        </ul>
                    </nav><!-- End Nav -->
                    @endif
                </div>
            </header>
            <!-- End  Header -->
            @if ($sliders->count() > 0)
            <section>
                <div class="rev_slider_wrapper">
                    <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                    <div id="slider-h4" class="rev_slider slider-home-4" data-version="5.0">
                        <ul>

                            @foreach ($sliders as $slider)
                            <!-- SLIDE  -->
                            <li data-transition="fade">

                                <!-- MAIN IMAGE -->
                                <img src="{{ $slider->image->getUrl() ?? 'http://placehold.it/1140x640/ccc.jpg' }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">

                                <!-- LAYER NR. 1 -->
                                <div class="tp-caption heading-2 white-text" data-x="center" data-y="center" data-voffset="-80" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">{{ $slider->title ?? '' }}</div>
                                <!-- LAYER NR. 2 -->
                                <div class="tp-caption heading-1 white-text text-cap " data-x="center" data-y="center" data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:80px;opacity:0;s:300;" data-start="1400">{{ $slider->subtitle ?? '' }}</div>

                                <!-- LAYER NR. 3 -->
                                <div class="tp-caption btn-1" data-x="center" data-y="center" data-voffset="100" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
                                    <a href="{{ $slider->link ?? '#' }}" class="ot-btn btn-main-color text-cap ">{{ $slider->button ?? '' }}</a>

                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div><!-- END REVOLUTION SLIDER -->
                </div><!-- END REVOLUTION SLIDER WRAPPER -->
            </section>
            <!-- End Section Slider -->
            @endif
            @if ($header_links)
            <section class="bg-grey padding padding-bot-90">
                <div class="container">
                    <div class="row" style="display: flex; justify-content: space-between;">
                        @foreach ($header_links as $key => $header_link)
                        <div class="col-sm-4 col-md-4 col">
                            <div class="block-img-full {{ $sliders->count() > 0 ? 'services-fix' : 'services-fix2' }}">
                                <a class="img-block" href="{{ $header_link->link }}"><img src="{{ $header_link->image->getUrl() ?? 'http://placehold.it/810x451/ccc.jpg' }}" class="img-responsive" alt="Image"></a>
                                <div class="text-box">
                                    <a href="{{ $header_link->link }}">
                                        <h4 class="text-cap">{{ $header_link->title }}</h4>
                                    </a>
                                    <p>
                                        {{ $header_link->text }}
                                    </p>
                                    <a class="text-cap view-more" href="{{ $header_link->link }}">{{ $header_link->button }}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- End Services Fix -->
            @endif
            @if ($abouts)
            @foreach ($abouts as $about)
            <section class="padding padding-bot-90">
                <div class="container">
                    <div class="row text-center">
                        <div class="title-block">
                            <h2 class="title text-cap">{{ $about->title }}</h2>
                            <div class="divider divider-1">
                                <svg class="svg-triangle-icon-container">
                                    <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                                </svg>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="clearfix mgb30"></div>
                        {!! $about->text !!}
                    </div>
                </div>
            </section>
            <!-- End Section About Us  Counter Up-->
            @endforeach
            @endif
            @if ($links)
            <section class="padding ">
                <div class="container">
                    <div class="row">
                        <div class="lastest-blog-container">
                            @foreach ($links as $link)
                            <div class="col-md-4">
                                <article class="lastest-blog-item">
                                    <figure class="latest-blog-post-img effect-zoe">
                                        <a href="{{ $link->link }}">
                                            <img src="{{ $link->image->getUrl() ?? 'http://placehold.it/1140x640/ccc.jpg' }}" class="img-responsive" alt="Image">
                                        </a>
                                    </figure>
                                    <div class="latest-blog-post-description">
                                        <a href="{{ $link->link }}">
                                            <h3>{{ $link->title }}</h3>
                                        </a>
                                        <p>{{ $link->text }}</p>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Lastest Blog 3 Columns -->
            @endif
            @if ($partners)
            <section class="padding bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="title-block">
                            <h2 class="title text-cap">As nossas marcas</h2>
                            <div class="divider divider-1">
                                <svg class="svg-triangle-icon-container">
                                    <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                                </svg>
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="owl-partner-warp">
                            <div class="customNavigation">
                                <a class="btn prev-partners"><i class="fa fa-angle-left"></i></a>
                                <a class="btn next-partners"><i class="fa fa-angle-right"></i></a>
                            </div><!-- End owl button -->

                            <div id="owl-partners" class="owl-carousel owl-theme owl-partners clearfix">
                                @foreach ($partners as $partner)
                                <div class="item">
                                    <a href="{{ $partner->link ?? '#' }}">
                                        <img src="{{ $partner->logo->getUrl() ?? 'http://placehold.it/96x95/ccc.jpg' }}" class="img-responsive" alt="{{ $partner->link ?? '' }}">
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div><!-- End row partners -->
                    </div>
                </div>
            </section>
            <!-- End Section Owl Partners -->
            @endif
            <footer class="footer-v3 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="/">
                                <img src="website/images/logo.png" width="200" alt="Image">
                            </a>
                            @if ($abouts)
                            @foreach ($abouts as $about)
                            <p>
                                {{ $common_information->footer_info }}
                            </p>
                            @endforeach
                            @endif
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-cap">
                                Company
                            </h4>
                            @if ($menus)
                            <ul class="list-link-footer">
                                @foreach ($menus as $menu)
                                <li><a class="text-cap" href="{{ $menu->link }}">{{ $menu->name }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <h4 class="text-cap">
                                Contact
                            </h4>
                            <ul class="list-link-footer">
                                <li><i class="fa fa-home" aria-hidden="true"></i> {{ $common_information->address }}</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> {{ $common_information->phone }}</li>
                                <li><i class="fa fa-envelope-o" aria-hidden="true"></i> {{ $common_information->email }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->

            <section class="copyright">
                <p>Copyright © 2024 Designed by <a href="https://netlook.pt">Netlook</a>. All rights reserved.</p>
            </section>
        </div>
    </div>
    <!-- End page -->

    <a id="to-the-top"><i class="fa fa-angle-up"></i></a>
    <!-- Back To Top -->
    <!-- SCRIPT -->
    <script src="website/js/vendor/jquery.min.js"></script>
    <script src="website/js/vendor/bootstrap.min.js"></script>
    <script src="website/js/plugins/jquery.waypoints.min.js"></script>
    <script src="website/js/plugins/wow.min.js"></script>
    <script src="website/js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="website/js/plugins/skrollr.min.js"></script>


    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="website/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
		(Load Extensions only on Local File Systems !  
		The following part can be removed on Server for On Demand Loading) -->
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="website/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <!-- Intializing Slider-->
    <script type="text/javascript" src="website/js/plugins/slider.js"></script>

    <!-- Mobile Menu
    ================================================== -->
    <script src="website/js/plugins/jquery.mobile-menu.js"></script>

    <!-- Initializing the isotope
    ================================================== -->
    <script src="website/js/plugins/isotope.pkgd.min.js"></script>
    <script src="website/js/plugins/custom-isotope.js"></script>
    <!-- Initializing Owl Carousel
    ================================================== -->
    <script src="website/js/plugins/owl.carousel.js"></script>
    <script src="website/js/plugins/custom-owl.js"></script>
    <!-- Initializing Counter Up
    ================================================== -->
    <script src="website/js/plugins/jquery.counterup.min.js"></script>
    <!-- PreLoad
    ================================================== -->
    <script type="text/javascript" src="website/js/plugins/royal_preloader.min.js"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            Royal_Preloader.config({
                mode: 'logo', // 'number', "text" or "logo"
                logo: 'website/images/logo.png'
                , timeout: 1
                , showInfo: false
                , opacity: 1
                , background: ['#FFFFFF']
            });
        })(jQuery);

    </script>

    <!-- Global Js
    ================================================== -->
    <script src="website/js/plugins/custom.js"></script>
    <script src="website/js/plugins/custom-h4.js"></script>
</body>

</html>
