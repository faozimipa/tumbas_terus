<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>tumbas.in Cara mudah untuk belanja di Pasar</title>
    <meta name="keywords" content="Pasar, Pasar Tradisional, Belanja, Belanja Mudah, Belanja lebih mudah, Order Pasar " />
    <meta name="description" content="Sebuah aplikasi yang bertujuan untuk memudahkan masyarakat berbelanja di pasar tradisional. Harapan dari adanya tumbas.in bukan hanya memudahkan masyarakat dalam berbelanja kebutuhan sandang dan pangan di pasar tradisional saja, tetapi juga memajukan tingkat perekonomian para pedagang pasar tradisional agar mereka dapat bersaing dengan pasar modern serta membangun pasar-pasar tradisional yang ada agar lebih maju dan lebih bersaing kondisinya dengan pasar modern.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" type="image/png" href="profile/img/logo-tumbasin2.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,700,800,900" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->{{--
    <link src="profile/css/bootstrap.min.css" rel="stylesheet" />--}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="profile/css/style.css" rel="stylesheet" />
    <link href="profile/css/font-awesome.min.css" rel="stylesheet" />
    <link href="profile/css/v-nav-menu.css" rel="stylesheet" />
    <link href="profile/css/v-animation.css" rel="stylesheet" />
    <link href="profile/css/v-bg-stylish.css" rel="stylesheet" />
    <link href="profile/css/v-shortcodes.css" rel="stylesheet" />
    <link href="profile/css/theme-responsive.css" rel="stylesheet" />
    <link href="profile/plugins/owl-carousel/owl.theme.css" rel="stylesheet" />
    <link href="profile/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

    <!-- Current Page CSS -->
    <link href="profile/plugins/rs-plugin/css/settings.css" rel="stylesheet" />
    <link href="profile/plugins/rs-plugin/css/custom-captions.css" rel="stylesheet" />
    <link rel="stylesheet" href="plugins/sweetalert-master/dist/sweetalert.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" src="profile/css/custom.css">
</head>

<body class="no-page-top">

<!--Header-->
<!--Set your own background color to the header-->

<!-- Untuk Merubah warna Header transparent-->
<!--<header class="semi-transparent-header" data-bg-color="rgba(9, 103, 139, 0.36)" data-font-color="#fff">-->
<header class="semi-transparent-header" data-bg-color="rgba(249, 252, 249, 0.36)" data-font-color="#fff">
    <div class="container">

        <!--Site Logo-->
        <div class="logo" data-sticky-logo="profile/img/logo-tumbasin2.png" data-normal-logo="profile/img/logo-tumbasin2.png">
            <a href="index.html">
                <img alt="Tumbas" class="logo-tumbas" src="profile/img/logo-tumbasin2.png" data-logo-height="50">
            </a>
        </div>
        <!--End Site Logo-->

        <div class="navbar-collapse nav-main-collapse collapse">

            <!--Header Search-->
            <!-- <div class="search" id="headerSearch">
                 <a href="#" id="headerSearchOpen"><i class="fa fa-search"></i></a>
                 <div class="search-input">
                     <form id="headerSearchForm" action="#" method="get">
                         <div class="input-group">
                             <input type="text" class="form-control search" name="q" id="q" placeholder="Search...">
                             <span class="input-group-btn">
                                 <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                             </span>
                         </div>
                     </form>
                     <span class="v-arrow-wrap"><span class="v-arrow-inner"></span></span>
                 </div>
             </div>-->
            <!--End Header Search-->

            <!--Main Menu-->
            <nav class="nav-main mega-menu one-page-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="active">
                        <a data-hash href="#home"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a data-hash href="#describe"><i class="fa fa-globe"></i>Tentang</a>
                    </li>
                    <!--<li>
                        <a data-hash href="#why-us"><i class="fa fa-gear"></i>Layanan</a>
                    </li>-->
                    <!--<li>
                        <a data-hash href="#describe"><i class="fa fa-flash"></i>Describe</a>
                    </li>-->
                    <li>
                        <a data-hash href="#download"><i class="fa fa-download"></i>Download</a>
                    </li>
                    <!--<li>
                        <a data-hash href="#comment"><i class="fa fa-comment"></i>Komentar</a>
                    </li>-->
                    <li>
                        <a data-hash href="#contact-us"><i class="fa fa-phone-square"></i>Kontak Kami</a>
                    </li>
                    <!--<li>
                        <a data-hash href="#home"><i class="fa fa-users"></i>Jadi Mitra</a>
                    </li>-->
                    <li>
                        <a href='contruction.html'><i class="fa fa-shopping-cart"></i>Ayo Belanja</a>
                    </li>
                    <!--<li class="dropdown">
                        <a class="dropdown-toggle menu-icon" href="#"><i class="fa fa-umbrella"></i>Menu <i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Blog - Standard</a></li>
                            <li><a href="#">Blog - Small</a></li>
                            <li><a href="#">Blog - Masonry</a></li>
                            <li><a href="#">Blog – Fullwidth Masonry</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">Blog Posts</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Standard Post</a></li>
                                    <li><a href="#">Slideshow Post</a></li>
                                    <li><a href="#">Full Width Post</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>-->
                </ul>
            </nav>
            <!--End Main Menu-->
        </div>
        <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>
    </div>
</header>
<!--End Header-->

<div id="container">

    <!--Set your own slider options. Look at the v_RevolutionSlider() function in 'theme-core.js' file to see options-->
    <div class="home-slider-wrap fullwidthbanner-container" id="home">
        <div class="v-rev-slider" data-slider-options='{ "startheight": 700 }'>

            <ul>

                <li data-transition="fade" data-slotamount="7" data-masterspeed="600">

                    <img src="profile/img/slider/sayur1.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption v-caption-big-white sfl stl"
                         data-x="400"
                         data-y="245"
                         data-speed="600"
                         data-start="600"
                         data-easing="Power1.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0"
                         data-endelementdelay="0"
                         data-endspeed="300">
                        TUMBAS.IN
                    </div>

                    <div class="tp-caption v-caption-h1 sfl stl"
                         data-x="400"
                         data-y="300"
                         data-speed="700"
                         data-start="1200"
                         data-easing="Power1.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0"
                         data-endelementdelay="0"
                         data-endspeed="300">
                        <i class="fa fa-quote-left"></i>
                        Berbelanja di Pasar Tradisional dengan cepat dan mudah.
                        <i class="fa fa-quote-right"></i>
                    </div>

                    <!--
                       <div class="tp-caption sfl stl"
                           data-x="450"
                           data-y="450"
                           data-speed="600"
                           data-start="1800"
                           data-easing="Power1.easeInOut"
                           data-splitin="none"
                           data-splitout="none"
                           data-elementdelay="0"
                           data-endelementdelay="0"
                           data-endspeed="300">
                           <a href='contruction.html' class="btn v-btn v-second-light"><i class="fa fa-shopping-cart"></i>AYO BELANJA</a>
                       </div>

                        <div class="tp-caption sfl stl"
                           data-x="630"
                           data-y="450"
                           data-speed="600"
                           data-start="2200"
                           data-easing="Power1.easeInOut"
                           data-splitin="none"
                           data-splitout="none"
                           data-elementdelay="0"
                           data-endelementdelay="0"
                           data-endspeed="300">
                           <a href='contruction.html' class="btn v-btn v-second-light"><i class="fa fa-tablet"></i>DOWNLOAD APP</a>
                       </div>
                   -->
                    <div class="tp-caption v-caption-h1 sfl stl"
                         data-x="600"
                         data-y="400"
                         data-speed="600"
                         data-start="1800"
                         data-easing="Power1.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0"
                         data-endelementdelay="0"
                         data-endspeed="300">
                        <i class="fa fa-phone"></i> +62 822-4286-1268
                    </div>

                    <div class="tp-caption v-caption-h1 sfl stl"
                         data-x="850"
                         data-y="400"
                         data-speed="600"
                         data-start="2200"
                         data-easing="Power1.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0"
                         data-endelementdelay="0"
                         data-endspeed="300">
                        <i class="fa fa-envelope"></i> admin@tumbas.in
                    </div>
                    <!-- <div class="tp-caption v-caption-h1 sfl stl"
                            data-x="5"
                            data-y="100"
                            data-speed="600"
                            data-start="200"
                            data-easing="Power1.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0"
                            data-endelementdelay="0"
                            data-endspeed="300">
                            <i class="fa fa-user"></i> +62 822-4286-1268
                        </div>

                        <div class="tp-caption v-caption-h1 sfl stl"
                            data-x="260"
                            data-y="100"
                            data-speed="600"
                            data-start="400"
                            data-easing="Power1.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0"
                            data-endelementdelay="0"
                            data-endspeed="300">
                            <i class="fa fa-envelope"></i> admin@tumbas.in
                        </div>-->

                    <div class="tp-caption sfl stl"
                         data-x="43"
                         data-y="210"
                         data-speed="600"
                         data-start="1800"
                         data-easing="Power1.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0"
                         data-endelementdelay="0"
                         data-endspeed="300">
                        <!--<a href='#' class="btn v-btn v-third-light">GET IT NOW!</a>-->
                        <img src="profile/img/logo-tumbasin2.png" width="300" />
                    </div>



                    <!--<div class="v-slider-overlay overlay-colored"></div>-->
                </li>
            </ul>
        </div>

        <div class="shadow-right"></div>
    </div>

    <!--Describe-->
    <div class="v-parallax v-bg-stylish" id="describe">
        <div class="container">
            <div class="row app-brief">
                <div class="col-sm-6">
                    <p class="v-smash-text-large-2x pull-top">
                        <span>APA ITU TUMBAS.IN</span>
                    </p>
                    <div class="horizontal-break left"></div>
                    <p class="v-lead text-justify">
                        Sebuah aplikasi yang bertujuan untuk memudahkan anda berbelanja di pasar tradisional. tumbas.in dapat membantu masyarakat dalam membandingkan harga-harga khususnya kebutuhan bahan pokok dari pasar satu ke pasar lainnya. Selain itu tumbas.in akan memudahkan ibu untuk untuk menyalurkan hoby memasaknya dirumah.
                    </p>

                </div>

                <div class="col-sm-6">
                    <img class="img-responsive phone-image v-animation" data-animation="fade-from-right" data-delay="300" src="profile/img/landing/prototype11.png" />
                </div>

                <div class="col-sm-12">
                    <a href="contruction.html">
                        <img src="profile/img/landing/appstore.png" alt="appstore_icon">
                    </a>
                    <a href="contruction.html">
                        <img src="profile/img/landing/google.png" alt="google_icon">
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--End Describe-->

    <!--Why Us
    <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="why-us">
        <div class="container">
            <div class="row app-brief">
                <div class="col-sm-6">
                    <img class="img-responsive phone-image v-animation" data-animation="fade-from-left" data-delay="250" src="profile/img/landing/prototype2.png" />
                </div>

                <div class="col-sm-6">
                    <p class="v-smash-text-large-2x pull-top">
                        <span>LAYANAN KAMI</span>
                    </p>
                    <div class="horizontal-break left"></div>
                    <p class="v-lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat.
                    </p>

                    <div class="v-spacer col-sm-12 v-height-small"></div>

                    <ul class="v-list-v2">
                        <li class="v-animation" data-animation="fade-from-right" data-delay="150"><i class="fa fa-check"></i><span class="v-lead">Simple & with endless possibilties.</span></li>
                        <li class="v-animation" data-animation="fade-from-right" data-delay="300"><i class="fa fa-check"></i><span class="v-lead">Everything is perfectly orgainized for future.</span></li>
                        <li class="v-animation" data-animation="fade-from-right" data-delay="450"><i class="fa fa-check"></i><span class="v-lead">Sliders give you the opportunity to showcase.</span></li>
                        <li class="v-animation" data-animation="fade-from-right" data-delay="600"><i class="fa fa-check"></i><span class="v-lead">Multiple layout for home pages, portfolio & blog.</span></li>
                        <li class="v-animation" data-animation="fade-from-right" data-delay="750"><i class="fa fa-check"></i><span class="v-lead">The best way to grow your business</span></li>
                        <li class="v-animation" data-animation="fade-from-right" data-delay="900"><i class="fa fa-check"></i><span class="v-lead">Lorem ipsum dolor sit amet, consectetur.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    End Why Us-->

    <div class="v-page-wrap no-bottom-spacing">

        <!--<div class="container">
            <div class="v-spacer col-sm-12 v-height-small"></div>
        </div>-->

        <!--Features
        <div class="container" id="features">

            <div class="row center">

                <div class="col-sm-12">
                    <p class="v-smash-text-large-2x">
                        <span>FITUR TUMBAS.IN</span>
                    </p>
                    <div class="horizontal-break"></div>
                    <p class="lead" style="color: #999;">
                        Responsive &amp; optimized for mobile devices.<br>
                        Completely without coding skills!
                    </p>
                </div>
                <div class="v-spacer col-sm-12 v-height-standard"></div>
            </div>

            <div class="row features">

                <div class="col-md-4 col-sm-4">
                    <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-left" data-delay="300">
                        <div class="feature-box-icon small">
                            <i class="fa fa-laptop v-icon"></i>
                        </div>
                        <div class="feature-box-text">
                            <h3>Super Design Layout</h3>
                            <div class="feature-box-text-inner">
                                Class aptent taciti sociosqu ad litora torquent
                                        per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.
                            </div>
                        </div>
                    </div>

                    <div class="v-spacer col-sm-12 v-height-standard"></div>

                    <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="600">
                        <div class="feature-box-icon small">
                            <i class="fa fa-vimeo-square v-icon"></i>
                        </div>
                        <div class="feature-box-text">
                            <h3>Retina Graphic Display</h3>
                            <div class="feature-box-text-inner">
                                Class aptent taciti sociosqu ad litora torquent per
                                        conubia nostra, per inceptos himenaeos nulla nunc duil.
                            </div>
                        </div>
                    </div>

                    <div class="v-spacer col-sm-12 v-height-standard"></div>

                    <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="900">
                        <div class="feature-box-icon small">
                            <i class="fa fa-cloud-download v-icon"></i>
                        </div>
                        <div class="feature-box-text">
                            <h3>Regular Updates & Support</h3>
                            <div class="feature-box-text-inner">
                                Class aptent taciti sociosqu ad litora torquent per
                                        conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <img class="img-responsive phone-image v-animation" data-animation="fade-from-bottom" data-delay="250" src="profile/img/landing/single-iphone.png" />
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-right" data-delay="300">
                        <div class="feature-box-icon small">
                            <i class="fa fa-tablet v-icon"></i>
                        </div>
                        <div class="feature-box-text">
                            <h3>Responsive Web Design</h3>
                            <div class="feature-box-text-inner">
                                Class aptent taciti sociosqu ad litora torquent per
                                conubia nostra, per inceptos himenaeos nulla nunc dui.
                            </div>
                        </div>
                    </div>

                    <div class="v-spacer col-sm-12 v-height-standard"></div>

                    <div class="feature-box left-icon v-animation" data-animation="fade-from-right" data-delay="600">
                        <div class="feature-box-icon small">
                            <i class="fa fa-lightbulb-o v-icon"></i>
                        </div>
                        <div class="feature-box-text">
                            <h3>Aweosme Design Layout</h3>
                            <div class="feature-box-text-inner">
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra,
                                per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.<br />
                            </div>
                        </div>
                    </div>

                    <div class="v-spacer col-sm-12 v-height-standard"></div>

                    <div class="feature-box left-icon v-animation" data-animation="fade-from-right" data-delay="900">
                        <div class="feature-box-icon small">
                            <i class="fa fa-google-plus v-icon"></i>
                        </div>
                        <div class="feature-box-text">
                            <h3>Social Media Friendly</h3>
                            <div class="feature-box-text-inner">
                                Class aptent taciti sociosqu ad litora torquent per
                                conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        End Features-->

        <!--Screenshots
        <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="screenshots">
            <div class="container">
                <div class="row center">
                    <div class="col-sm-12">
                        <p class="v-smash-text-large-2x">
                            <span>SCREENSHOTS</span>
                        </p>
                        <div class="horizontal-break"></div>
                        <p class="lead" style="color: #999;">
                            Responsive & optimized for mobile devices.
                        </p>
                    </div>
                    <div class="v-spacer col-sm-12 v-height-standard"></div>
                </div>

                <div class="row">
                    <div class="col-sm-12">

                        <div class="carousel-wrap">

                            <div class="owl-carousel" data-plugin-options='{"items": 4, "singleItem": false, "pagination": true}'>
                                <div class="item">
                                    <figure class="lightbox animated-overlay overlay-alt clearfix">
                                        <img src="profile/img/landing/1.jpg" class="attachment-full">
                                        <a class="view" href="img/landing/1.jpg" rel="image-gallery"></a>
                                        <figcaption>
                                            <div class="thumb-info">
                                                <h4>Lorem ipsum dolor sit amet.</h4>
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="item">
                                    <figure class="lightbox animated-overlay overlay-alt clearfix">
                                        <img src="profile/img/landing/2.jpg" class="attachment-full">
                                        <a class="view" href="img/landing/2.jpg" rel="image-gallery"></a>
                                        <figcaption>
                                            <div class="thumb-info">
                                                <h4>Lorem ipsum dolor sit amet.</h4>
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="item">
                                    <figure class="lightbox animated-overlay overlay-alt clearfix">
                                        <img src="profile/img/landing/3.jpg" class="attachment-full">
                                        <a class="view" href="img/landing/3.jpg" rel="image-gallery"></a>
                                        <figcaption>
                                            <div class="thumb-info">
                                                <h4>Lorem ipsum dolor sit amet.</h4>
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="item">
                                    <figure class="lightbox animated-overlay overlay-alt clearfix">
                                        <img src="profile/img/landing/4.jpg" class="attachment-full">
                                        <a class="view" href="img/landing/4.jpg" rel="image-gallery"></a>
                                        <figcaption>
                                            <div class="thumb-info">
                                                <h4>Lorem ipsum dolor sit amet.</h4>
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="item">
                                    <figure class="lightbox animated-overlay overlay-alt clearfix">
                                        <img src="profile/img/landing/1.jpg" class="attachment-full">
                                        <a class="view" href="img/landing/1.jpg" rel="image-gallery"></a>
                                        <figcaption>
                                            <div class="thumb-info">
                                                <h4>Lorem ipsum dolor sit amet.</h4>
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>

                                <div class="item">
                                    <figure class="lightbox animated-overlay overlay-alt clearfix">
                                        <img src="profile/img/landing/2.jpg" class="attachment-full">
                                        <a class="view" href="img/landing/2.jpg" rel="image-gallery"></a>
                                        <figcaption>
                                            <div class="thumb-info">
                                                <h4>Lorem ipsum dolor sit amet.</h4>
                                                <i class="fa fa-eye"></i>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        End Screenshots-->

        <!--<div class="container">
            <div class="v-spacer col-sm-12 v-height-standard"></div>
        </div>-->

        <!--Services-->
        <div class="v-parallax v-parallax-video v-bg-stylish" id="services" style="background-image: url(profile/img/slider/sayur2.jpg);">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="0">
                            <div class="feature-box-icon small">
                                <i class="fa fa-phone v-icon"></i>
                            </div>
                            <div class="feature-box-text clearfix">
                                <h3>PESAN</h3>
                                <div class="feature-box-text-inner">
                                    <p>
                                        Pelanggan memesan apa saja bahan-bahan yang mau di beli.
                                        Dengan kualitas bahan masih segar dan harga yang terjangkau.<br />
                                    </p>

                                    <!--<a href="#" class="read-more">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="200">
                            <div class="feature-box-icon small">
                                <i class="fa fa-thumbs-up v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>DEAL</h3>
                                <div class="feature-box-text-inner">
                                    <p>
                                        Setelah mencatat pesanan pelanggan,
                                        pihak tumbas.in akan menuju pasar yang paling dekat
                                        dan paling murah dengan kualitas bahan masih segar.<br />
                                    </p>
                                    <!--<a href="#" class="read-more">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="feature-box feature-box-secundary-one v-animation" data-animation="grow" data-delay="400">
                            <div class="feature-box-icon small">
                                <i class="fa fa-truck v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>ANTAR</h3>
                                <div class="feature-box-text-inner">
                                    <p>
                                        Mitra tumbas.in akan mengantarkan pesanan pelanggan
                                        sesuai dengan perjanjian sebelumnya. Tepat waktu dan
                                        tanpa dipungut biaya pengantaran.<br />
                                    </p>
                                    <!--<a href="#" class="read-more">Read More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="v-bg-overlay overlay-colored"></div>
                </div>
            </div>
        </div>
        <!--End Services-->

        <div class="container">
            <div class="v-spacer col-sm-12 v-height-big"></div>
        </div>

        <div class="container">
            <div class="row center v-counter-wrap">
                <div class="col-sm-3">
                    <i class="fa fa-building v-icon icn-holder"></i>
                    <div class="v-counter">
                        <div class="count-number" data-from="0" data-to="7" data-speed="1000" data-refresh-interval="25"></div>
                        <div class="count-divider"><span></span></div>
                        <h6 class="v-counter-text">Pasar Tradisional</h6>
                    </div>
                </div>
                <div class="col-sm-3">
                    <i class="fa fa-users v-icon icn-holder"></i>
                    <div class="v-counter">
                        <div class="count-number" data-from="0" data-to="500" data-speed="1500" data-refresh-interval="25"></div>
                        <div class="count-divider"><span></span></div>
                        <h6 class="v-counter-text">Pedagang Pasar</h6>
                    </div>
                </div>
                <div class="col-sm-3">
                    <i class="fa fa-bicycle v-icon icn-holder"></i>
                    <div class="v-counter">
                        <div class="count-number" data-from="0" data-to="50" data-speed="2000" data-refresh-interval="25"></div>
                        <div class="count-divider"><span></span></div>
                        <h6 class="v-counter-text">Tukang Antar</h6>
                    </div>
                </div>

                <div class="col-sm-3">
                    <i class="fa fa-download v-icon icn-holder"></i>
                    <div class="v-counter">
                        <div class="count-number" data-from="0" data-to="0" data-speed="2500" data-refresh-interval="25"></div>
                        <div class="count-divider"><span></span></div>
                        <h6 class="v-counter-text">Download App</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="v-spacer col-sm-12 v-height-standard"></div>
        </div>

        <!--Download-->
        <div class="v-parallax v-bg-stylish v-bg-stylish-v10" id="download" style="background-image: url(profile/img/slider/sayur3.jpg);">

            <div class="container">
                <div class="row center">

                    <div class="col-sm-12">

                        <div class="v-content-wrapper">
                            <p class="v-smash-text-large-2x">
                                <span>DOWNLOAD APLIKASI TUMBAS.IN</span>
                            </p>

                            <div class="v-spacer col-sm-12 v-height-standard"></div>

                            <div id="intro_stores">
                                <a href="contruction.html">
                                    <img src="profile/img/landing/appstore.png" alt="appstore_icon"></a>
                                <a href="contruction.html">
                                    <img src="profile/img/landing/google.png" alt="google_icon"></a>
                                <!--<a href="#">
                                    <img src="profile/img/landing/amazon.png" alt="amazon_icon"></a>-->
                            </div>

                            <div class="v-spacer col-sm-12 v-height-big"></div>

                            <p class="v-smash-text-large-2x">
                                <span>Subscribe Sekarang!</span>
                            </p>

                            <div class="v-spacer col-sm-12 v-height-small"></div>

                            <form class="subscription-form form-inline"
                                  method="post"
                                  action="{{route('web.profile.post.subscribe')}}"
                                  >
                                {{csrf_field()}}
                                <input type="email" name="email" placeholder="Email" class="subscriber-email form-control input-box">
                                <button type="submit" class="subscriber-button btn v-btn v-medium-button no-three-d v-belize-hole"><i class="fa fa-send"></i>Subscribe</button>

                            </form>
                        </div>

                    </div>

                    <div class="v-bg-overlay overlay-colored"></div>
                </div>
            </div>
        </div>
        <!--End Download-->

        <!--Comment
        <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="comment">
            <div class="container">
                <div class="row center">
                    <div class="col-md-8 col-md-offset-2">
                        <p class="v-smash-text-large-2x">
                            <span>KATA MEREKA</span>
                        </p>
                            <div class="horizontal-break"></div>
                            <!--<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                            <!-- Carousel indicators
                                <ol class="carousel-indicators">
                                    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
                                </ol>
                                <!-- Carousel items
                                    <div class="carousel-inner">
                                        <div class="item">
                                            <!--<div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                                            <div class="profile-circle">
                                                <img src="profile/img/slider/sayur1.png">
                                            </div>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                </blockquote>
                                        </div>
                                        <div class="item">
                                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                </blockquote>
                                        </div>
                                        <div class="active item">
                                            <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                </blockquote>
                                        </div>
                                        <div class="item">
                                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                </blockquote>
                                        </div>
                                        <div class="item">
                                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                </blockquote>
                                        </div>
                                        <div class="item">
                                            <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                                                <blockquote>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                </blockquote>
                                        </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        End Comment-->

        <!--Call Us-->
        <div class="v-parallax v-bg-stylish" id="contact-us">
            <div class="container">
                <div class="row center">
                    <div class="col-sm-8 col-sm-offset-2">
                        <p class="v-smash-text-large-2x">
                            <span>Kontak Kami</span>
                        </p>
                        <br />
                        <p class="lead" style="color: #999;">
                            +62 822-4286-1268
                        </p>
                        <div class="horizontal-break"></div>

                        <div class="v-spacer col-sm-12 v-height-small"></div>

                        <form action="{{ route('web.profile.post.message') }}"
                              method="post"
                              >
                            {{csrf_field()}}
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label>Nama <span class="required">*</span></label>
                                        <input type="text"
                                               maxlength="100"
                                               class="form-control"
                                               name="name"
                                               placeholder="Masukan Nama Anda"
                                               id="name">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Alamat Email <span class="required">*</span></label>
                                        <input type="email"
                                               maxlength="100"
                                               class="form-control"
                                               placeholder="Masukan Email Anda"
                                               name="email"
                                               id="email1">
                                    </div>
                                    <div class="col-sm-4">
                                        <label>Website</label>
                                        <input type="text"
                                               maxlength="100"
                                               class="form-control"
                                               placeholder="Masukan Website Anda"
                                               name="website"
                                               id="website">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <label>Komentar <span class="required">*</span></label>
                                        <textarea maxlength="5000"
                                                  rows="10"
                                                  class="form-control"
                                                  placeholder="Masukan Pesan"
                                                  name="message"
                                                  id="message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <br />
                                    <button name="submit" type="submit" id="sendmesage" class="btn v-btn no-three-d">Send Message</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="row">
                    <div class="v-spacer col-sm-12 v-height-small"></div>
                </div>

                <div class="row center">
                    <ul class="social-icons large center">
                        <li class="twitter"><a href="https://twitter.com/tumbasin?s=08" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                        <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                        <li class="instagram"><a href="https://www.instagram.com/tumbas.in/" target="_blank"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a></li>
                        <!--<li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a></li>
                        <li class="vimeo"><a href="http://www.vimeo.com/#" target="_blank"><i class="fa fa-vimeo-square"></i><i class="fa fa-vimeo-square"></i></a></li>
                        <li class="tumblr"><a href="http://tumblr.tumblr.com/" target="_blank"><i class="fa fa-tumblr"></i><i class="fa fa-tumblr"></i></a></li>
                        <li class="skype"><a href="skype:#" target="_blank"><i class="fa fa-skype"></i><i class="fa fa-skype"></i></a></li>
                        <li class="linkedin"><a href="#" target="_blank"><i class="fa fa-linkedin"></i><i class="fa fa-linkedin"></i></a></li>
                        <li class="googleplus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <!--End Call Us-->
    </div>

    <!--Footer-Wrap-->
    <div class="footer-wrap">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <section class="widget">
                            <h4>TUMBAS.IN</h4>
                            <p class="pull-bottom-small">
                                Sebuah aplikasi yang bertujuan untuk memudahkan masyarakat berbelanja di pasar tradisional. Harapan dari adanya tumbas.in bukan hanya memudahkan masyarakat dalam berbelanja kebutuhan sandang dan pangan di pasar tradisional saja, tetapi juga . . . . .
                            </p>
                            <p>
                                <a href="#describe">Selengkapnya →</a>
                            </p>
                        </section>
                    </div>
                    <div class="col-sm-3">
                        <section class="widget">
                            <div class="widget-heading">
                                <h4>KONTAK KAMI</h4>
                            </div>
                            <div class="footer-contact-info">
                                <ul>
                                    <li>
                                        <p><i class="fa fa-building"></i>tumbas.in </p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-map-marker"></i>Semarang, Indonesia </p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-envelope"></i><strong>Email:</strong> <a href="mailto:admin@tumbas.in">admin@tumbas.in</a></p>
                                    </li>
                                    <li>
                                        <p><i class="fa fa-phone"></i><strong>Phone:</strong> +62 822-4286-1268</p>
                                    </li>
                                </ul>
                                <br />

                                <ul class="social-icons standard">
                                    <li class="twitter"><a href="https://twitter.com/tumbasin?s=08" target="_blank"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a></li>
                                    <li class="facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a></li>
                                    <li class="instagram"><a href="https://www.instagram.com/tumbas.in/" target="_blank"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a></li>
                                    <!--<li class="youtube"><a href="#" target="_blank"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a></li>
                                    <li class="googleplus"><a href="#" target="_blank"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a></li>-->
                                </ul>
                            </div>
                        </section>
                    </div>

                    <div class="col-sm-3">
                        <section class="widget">
                            <div class="widget-heading">
                                <h4>Lokasi</h4>
                            </div>
                           {{-- <iframe class="set-maps" src="http://www.mapi.ie/create-google-map/map.php?width=100%&amp;height=200&amp;hl=en&amp;coord=-6.968022,110.4285541&amp;q=Semarang%2C%20Indonesia+(TUMBAS.IN)&amp;ie=UTF8&amp;t=&amp;z=15&amp;iwloc=A&amp;output=embed" style="border:0" allowfullscreen="" frameborder="0"></iframe>
                      --}}  </section>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright">
            <div class="container">
                <!--<p>© Copyright 2014 by Venue. All Rights Reserved.</p>-->
                <p>© Copyright 2017 by tumbas.in</p>
                <nav class="footer-menu std-menu">
                    <ul class="menu">
                        <li><a data-hash href="#describe">Tentang</a></li>
                        <li><a data-hash href="#download">Download</a></li>
                        <li><a data-hash href="#comment">Komentar</a></li>
                        <li><a data-hash href="#contact-us">Kontak Kami</a></li>
                        <li><a href='contruction.html'>Ayo Belanja</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--End Footer-Wrap-->
</div>

<!--// BACK TO TOP //-->
<div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>

<!-- Libs -->
<script src="profile/js/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script src="profile/js/jquery.flexslider-min.js"></script>
<script src="profile/js/jquery.easing.js"></script>
<script src="profile/js/jquery.fitvids.js"></script>
<script src="profile/js/jquery.carouFredSel.min.js"></script>
<script src="profile/js/theme-plugins.js"></script>
<script src="profile/js/jquery.isotope.min.js"></script>
<script src="profile/js/imagesloaded.js"></script>

<script src="profile/js/view.min.js?auto"></script>

<script src="profile/plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="profile/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="profile/js/theme-core.js"></script>
<!--- sweet alert --->
<script src="plugins/sweetalert-master/dist/sweetalert.min.js"></script>

<!-- Sweet Alert -->
@include('sweet::alert')

</body>
</html>
