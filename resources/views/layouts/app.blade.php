<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="ДКЦ-XI София ЕООД, Столично общинско здравеопазване.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('app.url') }}/app-assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ config('app.url') }}/app-assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ config('app.url') }}/app-assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ config('app.url') }}/app-assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="{{ config('app.url') }}/app-assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    @yield('title')

    <link href="{{ config('app.url') }}/assets/fonts/web-fonts-v1.css" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/vendors.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/forms/icheck/custom.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/extensions/toastr.css">
    @yield('vendor-styles')
    <!-- END VENDOR CSS-->

    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/app.css">
    <!-- END STACK CSS-->

    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <!-- END Page Level CSS-->

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/fonts/font-types/montserrat-regular.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/plugins/extensions/toastr.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/fonts/webfont-medical-icons/wfmi-style.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/base-efh5kh0gx9.css">

    @yield('styles')
    <!-- END Custom CSS-->
</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3V1QEYD1GJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3V1QEYD1GJ');
</script>

<body id="page" data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns   menu-expanded fixed-navbar">

    <!-- fixed top bar -->
    @include('layouts.partials._topbar')

    <!-- side main menu -->
    @include('layouts.partials._navigation')

    <div class="app-content content">
        <div class="content-wrapper">
            <!-- flash messages -->
            @include('flash-toastr::message')

            <!-- page content -->
            @yield('content')
        </div>
    </div>

    <!-- footer -->
    @include('layouts.partials._footer')

    <!-- BEGIN VENDOR JS-->
    <script src="{{ config('app.url') }}/app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/extensions/toastr.min.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->

    <!-- BEGIN PAGE VENDOR JS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/core/colors/palette-climacon.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/fonts/simple-line-icons/style.min.css">

    <!-- END PAGE VENDOR JS-->

    <!-- BEGIN STACK JS-->
    <script src="{{ config('app.url') }}/app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/js/core/app.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/js/scripts/forms/checkbox-radio.js" type="text/javascript"></script>

    <!-- END STACK JS-->

    <!-- BEGIN PAGE LEVEL JS-->
    @yield('footer-scripts')
    <!-- END PAGE LEVEL JS-->
</body>
</html>

