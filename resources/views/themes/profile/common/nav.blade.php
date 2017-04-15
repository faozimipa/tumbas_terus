<!--<header class="semi-transparent-header" data-bg-color="rgba(9, 103, 139, 0.36)" data-font-color="#fff">-->
<header class="semi-transparent-header" data-bg-color="rgba(249, 252, 249, 0.36)" data-font-color="#fff">
    <div class="container">

        <!--Site Logo-->
        <div class="logo" data-sticky-logo="{{ asset('/profile/img/icon_uptumbas.png') }}" data-normal-logo="{{ asset('/profile/img/icon_uptumbas.png') }}">
            <a href="/">
                <img alt="Tumbas" class="logo-tumbas" src="{{ asset('/profile/img/icon_uptumbas.png') }}" data-logo-height="35">
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
                    <li>
                        <a data-hash href="#why-us"><i class="fa fa-gear"></i>Layanan</a>
                    </li>
                    <!--<li>
                        <a data-hash href="#describe"><i class="fa fa-flash"></i>Describe</a>
                    </li>-->
                    <li>
                        <a data-hash href="#comment"><i class="fa fa-comment"></i>Komentar</a>
                    </li>
                    <li>
                        <a data-hash href="#contact-us"><i class="fa fa-phone-square"></i>Kontak Kami</a>
                    </li>
                    <li>
                        <a data-hash href="#download"><i class="fa fa-download"></i>Download</a>
                    </li>
                    <!--<li>
                        <a data-hash href="#home"><i class="fa fa-users"></i>Jadi Mitra</a>
                    </li>
                    <li>
                        <a href='#home'><i class="fa fa-users"></i>GABUNG</a>
                    </li>-->
                    <li class="dropdown">
                        <a class="dropdown-toggle menu-icon" href="#"><i class="fa fa-users"></i>GABUNG KAMI<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <!--<li><a href="#">SEBAGAI MITRA</a></li>-->
                            <li><a href="https://goo.gl/forms/v6UyAQ0EgpoMsHxD2" target="_blank">SEBAGAI SHOPPER</a></li>
                            <li><a href="https://goo.gl/forms/BlpAjN1zhDCqt4Fw2" target="_blank">SEBAGAI KURIR</a></li>
                            <!--<li class="dropdown-submenu">
                                <a href="#">Blog Posts</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Standard Post</a></li>
                                    <li><a href="#">Slideshow Post</a></li>
                                    <li><a href="#">Full Width Post</a></li>
                                </ul>
                            </li>-->
                        </ul>
                    </li>
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