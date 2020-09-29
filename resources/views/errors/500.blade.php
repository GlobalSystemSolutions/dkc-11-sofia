<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('app.url') }}/app-assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ config('app.url') }}/app-assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ config('app.url') }}/app-assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="{{ config('app.url') }}/app-assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="{{ config('app.url') }}/app-assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <title>Сървърна грешка | ДКЦ-XI София</title>

    <link href="{{ config('app.url') }}/assets/fonts/web-fonts-v1.css" rel="stylesheet">

    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/vendors.css">
    <!-- END VENDOR CSS-->

    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/app.css">
    <!-- END STACK CSS-->

    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/fonts/font-types/montserrat-regular.css">
    <!-- END Custom CSS-->
</head>

<body id="page" data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns ">

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-md-4 col-10 p-0">
                            <div class="card-header bg-transparent border-0">
                                <h2 class="error-code text-center mb-2">500</h2>
                                <h3 class="text-uppercase text-center">Сървърна грешка</h3>
                            </div>
                            <div class="card-content">
                                <div class="row py-2">
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a href="{{ route('welcome')  }}" class="btn btn-primary btn-block"><i class="fa fa-home"></i> Начало</a>
                                    </div>
                                    <div class="col-12 col-sm-6 col-md-6">
                                        <a href="{{ URL::previous() }}" class="btn btn-danger btn-block"><i class="ft-arrow-left"></i> Назад</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <p class="text-muted text-center col-12 py-1">
                                        Copyright &copy; {{ date('Y') }} ДКЦ XI - София.<br>Всички права запазени.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>

