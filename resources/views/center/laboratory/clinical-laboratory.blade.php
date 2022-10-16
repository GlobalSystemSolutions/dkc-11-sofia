@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Клинична лаборатория</title>
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
                                    <a href="{{ route('clinical-laboratory') }}">Клинична лаборатория</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Клинична лаборатория</div>
            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="specialty-description">
                        Лабораторията разполага с възможности за изработване на биохимични анализи, хематологични анализи, урина, хемостаза, микробиолгични е серологични анализи. Работи с НЗОК, допълнително здравно осигуряване и платени изследвания. <br><br>
                        Клиничната лаборатория е разположена в сградата на "ДКЦ XI – София"  на ІІ-ти етаж, 18 кабинет. Ръководи се от Д-р Николай Поломски, който отговаря на нормативните изисквания за образователно-квалификационна степен, квалификация и назначаване.<br><br>

                    <a href="{{ route('results') }}" class="clinical-laboratory-results"><i class="fa fa-flask"></i>Проверка на резултати</a>
                    </div>

                    <!-- <div class="specialty-staff">

                        <div class="specialty-staff-title">Специалисти</div>

                        <div class="specialty-staff-member">

                            <div class="staff-member">
                                <div class="staff-member-image">
                                    <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Николай Поломски">
                                </div>

                                <div class="staff-member-appointment">
                                    <a href="https://myhealth.bg/companies/000689517/dcc-11-sofia/clinical-laboratory/2300007133/" target="_blank">Резервирай час</a>
                                </div>
                            </div>

                            <div class="staff-member-info">
                                <div class="staff-member-name">Д-р Николай Поломски</div>
                                <div class="staff-member-specialty">Специалист клинична лаборатория</div>

                                <div class="staff-member-location">
                                    <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                    <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 29</div>
                                    <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                </div>

                                <div class="staff-member-practices">
                                    <span class="practice-icon">
                                        <img src="{{ config('app.url') }}/app-assets/images/practice-nzok.png" title="Работи с НЗОК">
                                    </span>
                                    <span class="practice-icon">
                                        <img src="{{ config('app.url') }}/app-assets/images/practice-cash.png" title="Работи платено">
                                    </span>
                                    <span class="practice-icon">
                                        <img class="children" src="{{ config('app.url') }}/app-assets/images/practice-pediatric.png" title="Работи с деца">
                                    </span>
                                </div>
                            </div>

                            <div class="staff-member-short-bio">
                                Клиничен лекар и част от екипа на ДКЦ-ХІ София. Завършва своето висше през 1988 г. в Медицинската академия - София, а през 1994 г. придобива специалност по клинична лаборатория. От 1995 г. работи като лекар във Веонномедицинска академия на длъжност началник хематология на отделение, където продължва да работи и до сега. Има и сертификати за проведени множество следдипломни курсове и специлизации във връзка с технологични новости в лабораторно диагностичната практика. Ежегодно участва в межународни европейски и световни конгреси по клинична лаборатория.
                            </div>

                        </div>
                    </div> -->

                    <div class="specialty-description">
                        Клиничната лаборатория разполага с методи за измерване на циркулиращите в кръвта хормони с цел откриване хормонална дисфункция и осигуряване на мониторирано лечение на многобройните разстройства и заболявания на невроендокринната система. Хормоните са лабораторни показатели за оценка функцията на хипоталамуса и хипофизата, щитовидната жлеза, паращитовидните жлези, надбъбречните жлези, репродуктивната система.<br><br>

                        Растежът и диференцияцията на клетките в организма се контролират от отделни тъкани, чрез положителни и отрицателни биологични сигнали, изпращани до прицелните тъкани.<br><br>

                        Комуникацията между нервната система и клетъчната функция се осъществява от невротрансмитери, ендокринна система, междуклетъчни медиатори, мембранни рецептори на прицелните клетки, вътреклетъчни медиатори и краен получател на сигнала.<br><br>

                        <strong>Високо специализирани лабораторни изследвания</strong><br><br>
                        <strong>Хормонален анализ</strong><br><br>
                        Хормон е всяко вещество в организма, което пренася сигнал, който предизвиква някаква промяна на клетъчното ниво (биологичен отговор). Участвайки в процеса на сигнална трансдукция, хормоните осъществяват хомеостазата на организма на определено ниво. Те постъпват в циркулацията в много ниски концентрации и имат кратък период на полуживот, но висока биологична активност. Затова измерването им изисква високо технологични методи и себестойността им е висока.<br><br>

                        За да се постигне надежност и ефективност на хормоналните изследвания е
необходимо те да се извършват с надеждната, отговаряща на съвременните
изисквания аналитична система, с каквато &quot;ДКЦ XI - София&quot; разполага в
партньорство и сътрудничество с Медико диагностична лаборатория ЕСКУЛАП,
както и спазване на показания, пред-аналитични изисквания, прилагане на
вътре-лабораторен качествен контрол и участие в система на външна оценка
на качеството.<br><br>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/clinical-laboratory-1.jpg">
                    </div>

                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/clinical-laboratory-2.jpg">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
