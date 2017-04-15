<!DOCTYPE html>

<html>
<head>
    @include('themes.profile.common.header')
    @yield('_header')
</head>

<body class="no-page-top">

<!--Header-->
<!--Set your own background color to the header-->

<!-- Untuk Merubah warna Header transparent-->
@include('themes.profile.common.nav')

<div id="container">

    @yield('content')
    <!--Footer-Wrap-->
        @include('themes.profile.common.footer')
        @yield('_footer')
    <!--End Footer-Wrap-->
</div>

<!--// BACK TO TOP //-->
<div id="back-to-top" class="animate-top"><i class="fa fa-angle-up"></i></div>
    @include('themes.profile.common.scripts')
    @yield('_script')
</body>
</html>
