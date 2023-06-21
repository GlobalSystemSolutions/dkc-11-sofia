@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Контакти</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-1-efh5kh0gx9.css">
@endsection

@section('content')
    <div id="google-map" class="map"></div>

    <div class="main-content-wrapper contacts">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Начало</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="{{ route('contacts') }}">Контакти</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Контакти</div>
            </div>

            <div class="row section-contacts-content">

                <div class="col-md-3 col-sm-12">
                    <div class="card-header">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    <span class="contacts-info-title">Работно време:</span><br>
                                    Понеделник - Петък<br>
                                    07:30 - 19:30<br><br>
                                <span class="contacts-info-title">Почивни дни:</span><br>
                                Събота и Неделя
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <div class="card-header">
                        <i class="fa fa-map-marker"></i>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    <span class="contacts-info-title">Адрес:</span><br>
                                    1303 София,<br>
                                    р-н Възраждане,<br>
                                    София-Център,<br>
                                    ул. "Цар Симеон" &numero;145
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <div class="card-header">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    <span class="contacts-info-title">Телефон:</span><br>
                                    02 931 80 48
                                </p>
                                <p>
                                    <span class="contacts-info-title">Мобилен - Администрация:</span><br>
                                    0884720457
                                </p>
                                <p>
                                    <span class="contacts-info-title">Администрация:</span><br>
                                    02/8319686
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-12">
                    <div class="card-header">
                        <i class="fa fa-envelope-o"></i>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <p>
                                    <span class="contacts-info-title">Електронна поща:</span><br>
                                    dkc11@abv.bg
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('footer-scripts')
    <script>
        function initMap() {
            var myOptions = {
                zoom: 15,
                center: new google.maps.LatLng(42.703343, 23.308868),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById('google-map'), myOptions);
            var marker = new google.maps.Marker({
                map: map,
                position: new google.maps.LatLng(42.703343, 23.308868)
            });
            var infowindow = new google.maps.InfoWindow({
                content: '<div class="info-window-content"><span class="info-window-title">ДКЦ XI - София</span><br><br>1303 София,<br>р-н Възраждане,<br>София-Център,<br>ул. "Цар Симеон" &numero;145<br><br>тел: 02 931 80 48</div>'
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
            infowindow.open(map, marker);
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIBUUEceqqAMKSetfLxTScin5BnTxBXms&callback=initMap&amp;language=bg&amp;region=BG"></script>
@endsection
