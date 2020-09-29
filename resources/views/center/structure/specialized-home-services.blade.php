@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Специализирани услуги по домовете</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-2-efh5kh0gx9.css">
@endsection

@section('content')

    <div class="main-content-wrapper">
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
                                    <a href="{{ route('specialized-home-services') }}">Специализирани услуги по домовете</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Специализирани услуги по домовете</div>
            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="service-title">
                    <div class="service-title-main">Медхаус</div>
                    <div class="service-title-sub">медицинско обслужване по домовете</div>
                    </div>

                    <div class="card collapse-icon accordion-icon-rotate service-description">
                        <div id="headingCollapse11" class="card-header">
                            <a data-toggle="collapse" href="#collapse11" aria-expanded="true" aria-controls="collapse11" class="card-title lead">Цел</a>
                        </div>
                        <div id="collapse11" role="tabpanel" aria-labelledby="headingCollapse11" class="collapse show">
                            <div class="card-content">
                                <div class="card-body">
                                    Предоставяне на качествена медицинска помощ в домашни условия.
                                </div>
                            </div>
                        </div>
                        <div id="headingCollapse12" class="card-header">
                            <a data-toggle="collapse" href="#collapse12" aria-expanded="true" aria-controls="collapse12" class="card-title lead">Предмет на дейност</a>
                        </div>
                        <div id="collapse12" role="tabpanel" aria-labelledby="headingCollapse12" class="collapse show" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="service-list">
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Осигуряване на здравни грижи на трудно подвижни, възрастни и тежко болни хора в домашни условия от специалисти по здравни грижи.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Осигуряване на рехабилитационно-възстановителни мероприятия от рехабилитатор.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Клинико-лабораторна диагностика.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Преглед от специалист.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="headingCollapse13" class="card-header">
                            <a data-toggle="collapse" href="#collapse13" aria-expanded="true" aria-controls="collapse13" class="card-title lead">Видове медицински услуги</a>
                        </div>
                        <div id="collapse13" role="tabpanel" aria-labelledby="headingCollapse13" class="collapse show" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <ul class="service-list">
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Изпълнение на назначена медикаментозна терапия, манипулации:
                                            <ul class="service-list-2">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    поставяне на мускулни, подкожни и венозни инжекции.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    венозни вливания, поставяне и смяна на системи.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    поставяне и смяна на катетри.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    смяна на превръзки и др.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Домашна рехабилитация:
                                            <ul class="service-list-2">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    раздвижване на лежащо болни и профилактика на усложненията.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    вертикализация на пациенти.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    раздвижване на пациенти след мозъчен инсулт.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    рехабилитация след ортопедични операции на тазобедрена или колянна става.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    обучение в ходене със и без помощни средства.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    обучение в грижи за лежащо болни.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-caret-right"></i></span>
                                                    рехабилитация на деца с ДЦП.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Вземане на биологичен материал за клинико-лабораторни изследвания.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Консулт със специалист.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Медицински транспорт с оборудвана линейка за превоз на лежащо болни от дома до лечебно заведение и обратно в областта или страната, с възможност за придружител – медицинско лице.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="headingCollapse14" class="card-header">
                            <a data-toggle="collapse" href="#collapse14" aria-expanded="true" aria-controls="collapse14" class="card-title lead">Кадрови ресурс</a>
                        </div>
                        <div id="collapse14" role="tabpanel" aria-labelledby="headingCollapse14" class="collapse show" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    Eкип от специалисти – лекари, специалисти по здравни грижи, рехабилитатори и клинични лаборанти, служители на "ДКЦ XI - София" ЕООД.
                                </div>
                            </div>
                        </div>
                        <div id="headingCollapse15" class="card-header">
                            <a data-toggle="collapse" href="#collapse15" aria-expanded="true" aria-controls="collapse15" class="card-title lead">Предназначение</a>
                        </div>
                        <div id="collapse15" role="tabpanel" aria-labelledby="headingCollapse15" class="collapse show" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body last-item">
                                    Пациентите получават необходимите качествени здравни грижи и услуги у дома, а семействата им спокойствие и сигурност, че са поверили близките си в добри ръце.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/home-services-1.jpg">
                    </div>

                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/home-services-2.jpg">
                    </div>

                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/home-services-3.jpg">
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
