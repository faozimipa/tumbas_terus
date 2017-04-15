@extends('themes.profile.master')
@section('content')
        <!--Set your own slider options. Look at the v_RevolutionSlider() function in 'theme-core.js' file to see options-->
        <div class="home-slider-wrap fullwidthbanner-container" id="home">
            <div class="v-rev-slider" data-slider-options='{ "startheight": 700 }'>

                <ul>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="600">

                        <img src="profile/img/slider/vegetable.png" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                        <div class="tp-caption v-caption-big-white sfl stl"
                             data-x="450"
                             data-y="245"
                             data-speed="600"
                             data-start="600"
                             data-easing="Power1.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0"
                             data-endelementdelay="0"
                             data-endspeed="300">
                            Belanja di Pasar Tradisional
                            <br>Jadi Mudah Dengan Tumbas.in.
                        </div>

                        <div class="tp-caption v-caption-h1 sfl stl"
                             data-x="450"
                             data-y="350"
                             data-speed="700"
                             data-start="1200"
                             data-easing="Power1.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0"
                             data-endelementdelay="0"
                             data-endspeed="300">
                            <i class="fa fa-quote-left"></i>
                            Kurir kami akan mengantarkan belanjaan Anda
                            <br>sampai di depan rumah. Dengan produk
                            <br>yang masih segar dan harga sesuai pasar tradisional.
                            <i class="fa fa-quote-right"></i>
                        </div>

                        <!--<div class="tp-caption sfl stl"
                            data-x="600"
                            data-y="500"
                            data-speed="600"
                            data-start="1800"
                            data-easing="Power1.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0"
                            data-endelementdelay="0"
                            data-endspeed="300">
                            <a data-hash href="#describe" class="btn v-btn v-second-light1"><i class="fa fa-user"></i>Gabung Kami</a>
                        </div>-->

                        <div class="tp-caption sfl stl"
                             data-x="450"
                             data-y="500"
                             data-speed="600"
                             data-start="2400"
                             data-easing="Power1.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0"
                             data-endelementdelay="0"
                             data-endspeed="300">
                            <a href='https://play.google.com/store/apps/details?id=com.app.tumbasin' class="btn v-btn v-second-light"><i class="fa fa-tablet"></i>DOWNLOAD APP</a>
                        </div>
                        <!--<div class="tp-caption v-caption-h1 sfl stl"
                                 data-x="450"
                                 data-y="600"
                                 data-speed="600"
                                 data-start="3000"
                                 data-easing="Power1.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0"
                                 data-endelementdelay="0"
                                 data-endspeed="300">
                                <i class="fa fa-phone"></i> +62 822-4286-1268
                            </div>

                            <div class="tp-caption v-caption-h1 sfl stl"
                                 data-x="780"
                                 data-y="600"
                                 data-speed="600"
                                 data-start="3600"
                                 data-easing="Power1.easeInOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0"
                                 data-endelementdelay="0"
                                 data-endspeed="300">
                                <i class="fa fa-envelope"></i> admin@tumbas.in
                            </div>-->
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
                             data-x="100"
                             data-y="100"
                             data-speed="600"
                             data-start="300"
                             data-easing="Power1.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0"
                             data-endelementdelay="0"
                             data-endspeed="300">
                            <!--<a href='#' class="btn v-btn v-third-light">GET IT NOW!</a>-->
                            <img src="profile/img/android_mockup.png" width="340" />
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
                            Sebuah aplikasi yang bertujuan untuk memudahkan Anda berbelanja di pasar tradisional. Tumbas.in dapat membantu masyarakat dalam membandingkan harga-harga khususnya kebutuhan bahan pokok dari pasar satu ke pasar lainnya. Selain itu tumbas.in akan memudahkan Ibu untuk menyalurkan hobi memasaknya di rumah.
                        </p>
                        <h2> <blink> Khusus Wilayah Semarang dan Sekitarnya</blink> </h2>

                    </div>

                    <div class="col-sm-6">
                        <img class="img-responsive phone-image v-animation" data-animation="fade-from-right" data-delay="300" src="profile/img/landing/prototype_about.png" />
                    </div>

                    <!--<div class="col-sm-12" >
                       <a href="#">
                            <img src="profile/img/landing/appstore.png" alt="appstore_icon">
                        </a>
                        <a href="https://play.google.com/store/apps/details?id=com.app.tumbasin">
                            <img src="profile/img/landing/google.png" alt="google_icon">
                        </a>-->

                </div>
            </div>
        </div>
        </div>
        <!--End Describe-->

        <!--Why Us-->
        <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="why-us">
            <div class="container">
                <div class="row app-brief">
                    <div class="col-sm-6">
                        <img class="img-responsive phone-image v-animation" data-animation="fade-from-left" data-delay="250" src="profile/img/landing/prototype_layanan.png" />
                    </div>

                    <div class="col-sm-6">
                        <p class="v-smash-text-large-2x pull-top">
                            <span>LAYANAN KAMI</span>
                        </p>
                        <div class="horizontal-break left"></div>
                        <p class="v-lead text-justify">
                            Layanan yang kami berikan :
                        </p>

                        <div class="v-spacer col-sm-12 v-height-small"></div>

                        <ul class="v-list-v2">
                            <li class="v-animation" data-animation="fade-from-right" data-delay="150"><i class="fa fa-check"></i><span class="v-lead">Pengambilan belanjaan langsung dari pasar tradisional.</span></li>
                            <li class="v-animation" data-animation="fade-from-right" data-delay="300"><i class="fa fa-check"></i><span class="v-lead">Belanjaan masih segar/fresh dan tanpa bahan kimia.</span></li>
                            <li class="v-animation" data-animation="fade-from-right" data-delay="450"><i class="fa fa-check"></i><span class="v-lead">Harga yang sesuai dengan harga pasar tradisional.</span></li>
                            <li class="v-animation" data-animation="fade-from-right" data-delay="600"><i class="fa fa-check"></i><span class="v-lead">Pengiriman belanjaan kurang dari 2 jam setelah order.</span></li>
                            <li class="v-animation" data-animation="fade-from-right" data-delay="750"><i class="fa fa-check"></i><span class="v-lead">Belanjaan terbungkus dengan rapi.</span></li>
                            <li class="v-animation" data-animation="fade-from-right" data-delay="900"><i class="fa fa-check"></i><span class="v-lead">Kurir yang sopan dan ramah ke pelanggan.</span></li>
                            <li class="v-animation" data-animation="fade-from-right" data-delay="1050"><i class="fa fa-check"></i><span class="v-lead">Pemesanan dari jam 3.00 - 15.00 WIB, diatas itu akan dikirim di hari selanjutnya.</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Why Us-->

        <div class="v-page-wrap no-bottom-spacing">

            <!--<div class="container">
                <div class="v-spacer col-sm-12 v-height-small"></div>
            </div>-->

            <!--Features-->
            <div class="container" id="features">

                <div class="row center">

                    <div class="col-sm-12">
                        <p class="v-smash-text-large-2x">
                            <span>MENGAPA MENGGUNAKAN TUMBAS.IN?</span>
                        </p>
                        <div class="horizontal-break"></div>
                        <!--<p class="lead" style="color: #999;">
                            Responsive &amp; optimized for mobile devices.<br>
                            Completely without coding skills!
                        </p>-->
                    </div>
                    <div class="v-spacer col-sm-12 v-height-standard"></div>
                </div>

                <div class="row features">

                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-left" data-delay="300">
                            <div class="feature-box-icon small">
                                <i class="fa fa-shopping-cart v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Belanja kebutuhan harian</h3>
                                <div class="feature-box-text-inner">
                                    Anda tidak perlu ke Pasar Tradisional karena kami yang akan membelanjakan kebutuhan harian Anda.
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="600">
                            <div class="feature-box-icon small">
                                <i class="fa fa-thumbs-up v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Kesegaran belanjaan</h3>
                                <div class="feature-box-text-inner">
                                    Anda tidak perlu khawatir tentang kesegaran produk Pasar Tradisional, karena kami
                                    memiliki seorang shoper yang menjamin kesegaran dan kualitas belanjaan.
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-left" data-delay="900">
                            <div class="feature-box-icon small">
                                <i class="fa fa-money v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Harga sesuai harga pasar</h3>
                                <div class="feature-box-text-inner">
                                    Anda tidak perlu khawatir tentang naik dan turunya harga produk Pasar,
                                    kami yang akan menawar harga produk yang Anda pesan.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <img class="img-responsive phone-image v-animation" data-animation="fade-from-bottom" data-delay="250" src="profile/img/fitur.png" />
                    </div>

                    <div class="col-md-4 col-sm-4">
                        <div class="feature-box left-icon v-animation pull-top" data-animation="fade-from-right" data-delay="300">
                            <div class="feature-box-icon small">
                                <i class="fa fa-file v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Tidak ada minimal pemesanan</h3>
                                <div class="feature-box-text-inner">
                                    Tidak ada batas minimal belanjaan, berapa pun minimal pesanan Anda
                                    akan kami kirim sampai depan rumah.
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-right" data-delay="600">
                            <div class="feature-box-icon small">
                                <i class="fa fa-bicycle v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Pengiriman belanjaan cepat</h3>
                                <div class="feature-box-text-inner">
                                    Pengiriman belanjaan yang cepat sampai tujuan tanpa Anda menunggu lama,
                                    karena kami mempunyai shopper dan kurir yang cepat tanggap.<br />
                                </div>
                            </div>
                        </div>

                        <div class="v-spacer col-sm-12 v-height-standard"></div>

                        <div class="feature-box left-icon v-animation" data-animation="fade-from-right" data-delay="900">
                            <div class="feature-box-icon small">
                                <i class="fa fa-map-marker v-icon"></i>
                            </div>
                            <div class="feature-box-text">
                                <h3>Transaksi tidak ribet</h3>
                                <div class="feature-box-text-inner">
                                    Transaksi yang sangat mudah, Anda tinggal membayar setelah belanjaan sampai di
                                    depan rumah Anda.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Features-->

            <!--Screenshots-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="screenshots">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-12">
                            <p class="v-smash-text-large-2x">
                                <span>SCREENSHOTS APLIKASI</span>
                            </p>
                            <div class="horizontal-break"></div>
                            <p class="lead" style="color: #999;">
                                Mudah dipahami oleh pengguna
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
                                            <img src="profile/img/landing/1.png" class="attachment-full">
                                            <a class="view" href="img/landing/1.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>SplashScreen</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="profile/img/landing/2.png" class="attachment-full">
                                            <a class="view" href="img/landing/2.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Menu Utama</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="profile/img/landing/3.png" class="attachment-full">
                                            <a class="view" href="img/landing/3.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Menu Slider</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="profile/img/landing/4.png" class="attachment-full">
                                            <a class="view" href="img/landing/4.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Kategori Detail</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="profile/img/landing/5.png" class="attachment-full">
                                            <a class="view" href="img/landing/5.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Keranjang Belanja</h4>
                                                    <i class="fa fa-eye"></i>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>

                                    <div class="item">
                                        <figure class="lightbox animated-overlay overlay-alt clearfix">
                                            <img src="profile/img/landing/6.png" class="attachment-full">
                                            <a class="view" href="img/landing/6.png" rel="image-gallery"></a>
                                            <figcaption>
                                                <div class="thumb-info">
                                                    <h4>Proses Checkout</h4>
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
            <!--End Screenshots-->

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
                                            Pelanggan memesan apa saja belanjaan yang mau di beli, dengan menggunakan
                                            aplikasi tumbasin yang sudah tersedia di Playstore. Harga pasar tradisional
                                            dan kualitas pasar modern.
                                            <br />
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
                                            Shopper/Agen di setiap pasar akan langsung membelanjakan
                                            produk yang di pesan dengan harga sesuai pasar dan kualitas
                                            produk sesuai pasar modern.
                                            <br />
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
                                            Kurir akan mengantarkan belanjaan yang sebelumnya sudah
                                            dipacking dengan rapi sampai di depan rumah dengan cepat, dan
                                            pembayaran langsung ditempat.
                                            <br />
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
                            <div class="count-number" data-from="0" data-to="5" data-speed="1000" data-refresh-interval="25"></div>
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
                            <div class="count-number" data-from="0" data-to="204" data-speed="2500" data-refresh-interval="25"></div>
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
                                    <!-- <a href="#">
                                        <img src="profile/img/landing/appstore.png" alt="appstore_icon"></a> -->
                                    <a href="https://play.google.com/store/apps/details?id=com.app.tumbasin">
                                        <img src="profile/img/landing/google.png" alt="google_icon"></a>
                                    <!--<a href="#">
                                        <img src="profile/img/landing/amazon.png" alt="amazon_icon"></a>-->
                                </div>

                                <div class="v-spacer col-sm-12 v-height-big"></div>

                                <p class="v-smash-text-large-2x">
                                    <span>Mau Tahu Info dan Promo Harga Pasar?</span>
                                </p>
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

            <!--Comment-->
            <div class="v-parallax v-bg-stylish v-bg-stylish-v4 no-shadow" id="comment">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-8 col-md-offset-2">
                            <p class="v-smash-text-large-2x">
                                <span>KATA MEREKA</span>
                            </p>
                            <div class="horizontal-break"></div>
                            <!--<div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>-->
                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                <!-- Carousel indicators-->
                                <ol class="carousel-indicators">
                                    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                                </ol>
                                <!-- Carousel items-->
                                <div class="carousel-inner">
                                    <div class="item">
                                        <!--<div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>-->
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                            <p>"Tri Asworo MS"</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <!--<div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>-->
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                        </blockquote>
                                    </div>
                                    <div class="active item">
                                        <!--<div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>-->
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <!--<div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>-->
                                        <blockquote>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                        </blockquote>
                                    </div>
                                    <div class="item">
                                        <!--<div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>-->
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
            <!--End Comment-->

            <!--Call Us-->
            <div class="v-parallax v-bg-stylish" id="contact-us">
                <div class="container">
                    <div class="row center">
                        <div class="col-sm-8 col-sm-offset-2">
                            <p class="v-smash-text-large-2x">
                                <span>PUNYA PERTANYAAN, KRITIK, ATAU SARAN?</span>
                            </p>
                            <br />
                            <p class="lead" style="color: #999;">
                                Isi Form di Bawah Ini Atau Bisa Hubungi di Nomor : +62 822-4286-1268
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
                                                   placeholder="Nama Anda"
                                                   id="name">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Alamat Email <span class="required">*</span></label>
                                            <input type="email"
                                                   maxlength="100"
                                                   class="form-control"
                                                   placeholder="Email Anda"
                                                   name="email"
                                                   id="email1">
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Website</label>
                                            <input type="text"
                                                   maxlength="100"
                                                   class="form-control"
                                                   placeholder="Website Anda"
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
                                                          placeholder="Tulis Komentar"
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
@endsection