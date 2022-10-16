@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Специализирани кабинети</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-1-efh5kh0gx9.css">
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
                                <a href="{{ route('specialized-cabinets') }}">Специализирани кабинети</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 section-title">Специализирани кабинети</div>
        </div>

        <div class="row">
            <div class="col-md-8 section-tabs">
                <div class="tab-content px-1">
                    {{-- Акушерство и гинекология --}}
                    <div role="tabpanel" class="tab-pane active" id="tab-1" aria-expanded="true" aria-labelledby="base-tab1">

                        <div class="specialty-title">Акушерство и гинекология</div>

                        <div class="specialty-description">
                            Акушерството е област от клиничната медицина, която изучава физиологичните и патологичните процеси, свързани със зачатието, бременността, раждането и следродовия период, и разработва методи за подпомагане на раждането, за профилактика и лекуване на усложненията у жената и новороденото.<br><br>Гинекологията е част от клиничната медицина, която изучава физиологията на женските полови органи, техните болести, предпазване и лекуване. Акушерството и гинекологията са свързани с много раздели на медицината, но особено тясно с ендокринологията, ембриологията и физиологията.<br><br>

                            Преглед при акушер-гинеколог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-description">
                            ДКЦ-XI София предлага ранна диагностика на рак на млечната жлеза с най-съвременният апарат в света "<strong>BRASTER-PRO</strong>".<br><br>
                            Изследването с апарат "<strong>BRASTER-PRO</strong>" e иновативна технология продукт на дългогодишни разработки. Методът се основава на контактна томография с течни кристали, която е напълно безвредна, изключително точна, открива образувания в млечната жлеза с размер от едва 3 мм., без абсолютно никакво облъчване и без причиняване на болка.
                            Безвредната технология позволява да се извършва диагностика няколко пъти годишно, което е важна предпоставка за ранното откриване на заболяването.<br><br>
                            <strong>Записването за преглед с апарат "BRASTER-PRO" става само през регистратура на ДКЦ-XI.</strong>
                            <br><br>
                            <a title="Прочетете повече информация за ракът на гърдата и новите диагностични възможности в медицинската практика" href="/files/shares/5c61307706c02.pdf" target="_blank" rel="noopener">Прочетете повече информация за ракът на гърдата и новите диагностични възможности в медицинската практика</a>
                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <!-- <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Вани Георгиева">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/companies/000689517/dcc-11-sofia/obstetrics-and-gynecology/2300001319/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Вани Георгиева</div>
                                    <div class="staff-member-specialty">Акушер-гинеколог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div> -->

							<div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Инширах Алшарафи">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/companies/000689517/dcc-11-sofia/obstetrics-and-gynecology/2300014712/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Инширах Алшарафи</div>
                                    <div class="staff-member-specialty">Акушер-гинеколог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 19</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Владя Ангелова">
                                    </div>

                                    <!-- <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/obstetrics-and-gynecology/inshirah-alsharafi" target="_blank">Резервирай час</a>
                                    </div> -->
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Владя Ангелова</div>
                                    <div class="staff-member-specialty">Акушер-гинеколог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 20</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                        </div>
                    </div>

                    {{-- Гастроентерология --}}
                    <div role="tabpanel" class="tab-pane" id="tab-2" aria-expanded="true" aria-labelledby="base-tab2">

                        <div class="specialty-title">Гастроентерология</div>

                        <div class="specialty-description">
                            Гастроентерологията е раздел на вътрешните болести, който изучава причините, развитието, клиничните прояви, лекуването и профилактиката на заболяванията на храносмилателната система. Тези болести заемат второ място по разпространение след болестите на сърдечносъдовата система и това определя значението на гастроентерологията.<br><br>От гастроентерологията постепенно се обособяват хепатологията и проктологията, които изучават болестите на черния дроб и на дебелото черво.<br><br>

                            Преглед при гастроентеролог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <!-- <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Андреева">
                                    </div>

                                    {{-- <div class="staff-member-appointment">
                                        <a href="" target="_blank">Резервирай час</a>
                                    </div> --}}
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Андреева</div>
                                    <div class="staff-member-specialty">Гастроентеролог</div>

                                    <div class="staff-member-location">
                                        {{-- <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div> --}}
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div> -->

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Юлия Григорова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300009956/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Юлия Григорова</div>
                                    <div class="staff-member-specialty">Гастроентеролог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
                                        <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 02 9318048</div>
                                    </div>

                                    <div class="staff-member-practices">
                                        {{-- <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-nzok.png" title="Работи с НЗОК">
                                        </span> --}}
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-cash.png" title="Работи платено">
                                        </span>
                                        <span class="practice-icon">
                                            <img class="children" src="{{ config('app.url') }}/app-assets/images/practice-pediatric.png" title="Работи с деца">
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    {{-- Ендокринология и болести на обмяната --}}
                    <div role="tabpanel" class="tab-pane" id="tab-3" aria-expanded="true" aria-labelledby="base-tab3">

                        <div class="specialty-title">Ендокринология и болести на обмяната</div>

                        <div class="specialty-description">
                            Ендокринологията е наука за строежа и функциите на ендокринните жлези (жлезите с вътрешна секреция), за образуването и действието на техните хормони. Клиничната ендокринология изучава болестите на ендокринните жлези, техните причини, развитие, диагностика, лекуване и профилактика, а също и участието им в развитието на други заболявания.<br><br>Ендокринните жлези са описани през ХVІ – ХVІІІ в., но понятието вътрешна секреция е формулирано едва през ХІХ в., когато се описват и първите ендокринни болести.<br><br>Днес се знае, че ендокринните жлези функционират като една обща система, която се саморегулира по принципа на обратната връзка в тесен контакт с нервната система. По такъв начин се постига неврохуморалната регулация на процесите в организма.<br><br>Изолирането на хормоните в чист вид допринася много за диагностиката и лекуването на ендокринните болести. Някои хормони се използват и за лекуване на неендокринни заболявания като ревматизма.<br><br>

                            Преглед при ендокринолог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Афродита Иванова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300000761/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Афродита Иванова</div>
                                    <div class="staff-member-specialty">Ендокринолог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Наташа Станкова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300006797/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Наташа Станкова</div>
                                    <div class="staff-member-specialty">Ендокринолог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>


                        </div>
                    </div>

                    {{-- Кардиология --}}
                    <div role="tabpanel" class="tab-pane" id="tab-4" aria-expanded="true" aria-labelledby="base-tab4">

                        <div class="specialty-title">Кардиология</div>

                        <div class="specialty-description">
                            Кардиологията е специалност, която се занимава с диагностика, лечение и профилактика на сърдечно-съдовите заболявания. Сърдечно-съдовите заболявания претърпяват бързо развитие, поради което е необходим чест контрол на състоянието, особено при остри коронарни синдроми, хипертонични кризи, възпалителни заболявания на сърцето. Лечението на тези болести изисква висока квалификация и богат клиничен опит, които осигуряват бърза и точна диагноза и правилно лечение.Една от причините за заболяване на органите на кръвообращението е високото артериално налягане.<br><br>

                            <strong>Високоспециализирани медицински дейности:</strong><br><br>

                            <strong>Ехокардиография</strong><br><br>
                            Ехокардиографията по същество представлява изследване на сърцето с ултразвукови вълни, базирано върху различната способност на сърдечните структури да рефлектират тези вълни. То представя в реално време структурата и функцията на сърцето, както и движението на кръвотока през сърдечните кухини и големите съдове.<br><br>

                            Преглед при кардиолог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <!-- <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Ася Чакърова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300012619/" target="_blank">Резервирай час</a>
                                    </div>
                                </div> -->

                                <!-- <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Ася Чакърова</div>
                                    <div class="staff-member-specialty">Кардиолог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
                                        <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                    </div>

                                    <div class="staff-member-practices">
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-nzok.png" title="Работи с НЗОК">
                                        </span>
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-cash.png" title="Работи платено">
                                        </span>
                                        {{-- <span class="practice-icon">
                                            <img class="children" src="{{ config('app.url') }}/app-assets/images/practice-pediatric.png" title="Работи с деца">
                                        </span> --}}
                                    </div>
                                </div> -->
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Йовица Божков">
                                    </div>

                                    <!-- <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/cardiology/nadezhda-toneva" target="_blank">Резервирай час</a>
                                    </div> -->
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Йовица Божков</div>
                                    <div class="staff-member-specialty">Кардиолог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <!-- <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Петко Филипов">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300007482/" target="_blank">Резервирай час</a>
                                    </div>
                                </div> -->

                                <!-- <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Петко Филипов</div>
                                    <div class="staff-member-specialty">Кардиолог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                </div> -->
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>
<div class="specialty-staff-member">

    <div class="staff-member">
        <div class="staff-member-image">
            <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Доц. дм Валентин Семова">
        </div>

        <div class="staff-member-appointment">
            <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/obstetrics-and-gynecology/inshirah-alsharafi" target="_blank">Резервирай час</a>
        </div>
    </div>

    <div class="staff-member-info">
        <div class="staff-member-name">Доц. дм Валентин Семова</div>
        <div class="staff-member-specialty">Кардиолог</div>

        <div class="staff-member-location">
            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 3</div>
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
    {{-- <div class="staff-member-short-bio">
        Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
    </div> --}}
</div>
                        </div>


                    </div>

                    {{-- Кожни и венерически болести --}}
                    <div role="tabpanel" class="tab-pane" id="tab-5" aria-expanded="true" aria-labelledby="base-tab5">

                        <div class="specialty-title">Кожни и венерически болести</div>

                        <div class="specialty-description">
                            Дерматологията е наука, която изучава строежа и физиологията на нормалната и засегнатата от различни болести кожа и придатъците й (коса, нокти и др.),  методите за изследване на кожните заболявания, тяхното лекуване и профилактика.Дерматологията се разделя на обща и специална дерматология. Общата дерматология има за предмет причините, които пораждат кожните болести, техните симптоми и лекуване. Факторите, които предизвикват кожните болести, се разделят на екзогенни (външни) и ендогенни (вътрешни).<br><br>Към външните фактори се отнасят: механичните въздействия (удар, триене, натъртване и др.), физични въздействия (термични – изгаряне, измръзване; електрични; лъчеви – ултравиолетови и рентгенови лъчи), химични въздействия (киселини, основи и други съединения, които освен изгаряне могат да причинят алергична реакция), биологични агенти (растения, микроорганизми, гъбички, вируси, първаци и др.). Към външните фактори спадат и географско-климатичните условия.  Към вътрешните фактори се отнасят някои общи заболявания, отравяния, наследственост, реактивност и индивидуални особености. чкожните болести се характеризират с типични за тях прояви. Освен общите признаци на температура, неразположение, слабост и др. Те имат и някои специфични кожни симптоми: изменения на кожата и лигавиците, усещания на сърбеж, парене, болка и др.<br><br>

                            Преглед при дерматолог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Деница Мирчева">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300012141/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Деница Мирчева</div>
                                    <div class="staff-member-specialty">Дерматолог</div>

                                    <div class="staff-member-location">
                                        {{-- <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div> --}}
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="проф. Д-р Петранка Троянова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300007495/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">проф. Д-р Петранка Троянова</div>
                                    <div class="staff-member-specialty">Дерматолог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

<!-- <div class="specialty-staff-member">

    <div class="staff-member">
        <div class="staff-member-image">
            <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Боянка Семова">
        </div>

        <div class="staff-member-appointment">
            <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/obstetrics-and-gynecology/inshirah-alsharafi" target="_blank">Резервирай час</a>
        </div>
    </div>

    <div class="staff-member-info">
        <div class="staff-member-name">Д-р Боянка Семова</div>
        <div class="staff-member-specialty">Дерматолог</div>

        <div class="staff-member-location">
            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 20</div>
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
    {{-- <div class="staff-member-short-bio">
        Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
    </div> --}}
</div> -->
<div class="specialty-staff-member">

    <div class="staff-member">
        <div class="staff-member-image">
            <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Александър Александров">
        </div>

        <!-- <div class="staff-member-appointment">
            <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/obstetrics-and-gynecology/inshirah-alsharafi" target="_blank">Резервирай час</a>
        </div> -->
    </div>

    <div class="staff-member-info">
        <div class="staff-member-name">Д-р Александър Александров</div>
        <div class="staff-member-specialty">Дерматолог</div>

        <div class="staff-member-location">
            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 21</div>
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
    {{-- <div class="staff-member-short-bio">
        Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
    </div> --}}
</div>
<div class="specialty-staff-member">

    <div class="staff-member">
        <div class="staff-member-image">
            <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Андре Хашим">
        </div>

        <!-- <div class="staff-member-appointment">
            <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/obstetrics-and-gynecology/inshirah-alsharafi" target="_blank">Резервирай час</a>
        </div> -->
    </div>

    <div class="staff-member-info">
        <div class="staff-member-name">Д-р Андре Хашим</div>
        <div class="staff-member-specialty">Дерматолог</div>

        <div class="staff-member-location">
            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 21</div>
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
    {{-- <div class="staff-member-short-bio">
        Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
    </div> --}}
</div>

                        </div>


                    </div>

                    {{-- Нервни болести --}}
                    <div role="tabpanel" class="tab-pane" id="tab-6" aria-expanded="true" aria-labelledby="base-tab6">

                        <div class="specialty-title">Нервни болести</div>

                        <div class="specialty-description">
                            Неврологията е наука, която се занимава с нормалните функции и болестните разстройства на нервната система. Дели се на обща и специализирана.<br><br>Общата изучава анатомичните и физиологични основи на нервните функции – рефлекси, сетивност и др., методите на тяхното изследване, разстройства, както и редица методи на изследване – електроенцефалография, доплерсонография, контрастно рентгеново изследване и пр.<br><br>Специализираната неврология изучава заболяванията на централната, периферна и вегетативна нервната система – функционални /неврози/ и органични – мозъчни инсулти, моно- и полиневропатии, вестибулопатия, дискова херния, възпалителни заболявания и други.<br><br>

                            Преглед при невролог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Любомир Тодоров">
                                    </div>

                                    <!-- <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/neurology/zdravka-bakalova" target="_blank">Резервирай час</a>
                                    </div> -->
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Любомир Тодоров</div>
                                    <div class="staff-member-specialty">Невролог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 21</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Мария Сечкова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2400001053/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Мария Сечкова</div>
                                    <div class="staff-member-specialty">Невролог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
                                        <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                    </div>

                                    <div class="staff-member-practices">
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-nzok.png" title="Работи с НЗОК">
                                        </span>
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-cash.png" title="Работи платено">
                                        </span>
                                        {{-- <span class="practice-icon">
                                            <img class="children" src="{{ config('app.url') }}/app-assets/images/practice-pediatric.png" title="Работи с деца">
                                        </span> --}}
                                    </div>
                                </div>
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                        </div>


                    </div>

                    {{-- Ортопедия и травматология --}}
                    <div role="tabpanel" class="tab-pane" id="tab-7" aria-expanded="true" aria-labelledby="base-tab7">

                        <div class="specialty-title">Ортопедия и травматология</div>

                        <div class="specialty-description">
                            Травматологията е наука, която проучва, предпазва и лекува нараняванията на костно-ставния апарат, мускулите, нервите и кръвоносните съдове. Обект на ортопедията са преди всичко вродените и придобити заболявания на опорно-двигателния апарат, при които намират приложение оперативните и безкръвните хирургични методи за лечение. Към тях се прибавят голям брой общи, инфекциозни, обменни и ендокринни заболявания, както и заболявания на ЦНС и нервните пътища и други заболявания на опорно-двигателния апарат.<br><br>

                            Преглед при ортопед-травматолог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <!-- <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Светла Маркова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/orthopedics/svetla-markova" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Светла Маркова</div>
                                    <div class="staff-member-specialty">Ортопед</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 2</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div> -->
                        </div>
                    </div>

                    {{-- Очни болести --}}
                    <div role="tabpanel" class="tab-pane" id="tab-8" aria-expanded="true" aria-labelledby="base-tab8">

                        <div class="specialty-title">Очни болести</div>

                        <div class="specialty-description">
                            Офталмологията е наука, която има за предмет изучаването на окото – както на неговата нормална структура и функция, така и на патологичните процеси, развиващи се в него, а също и методите на изследване на зрителния орган.<br><br>Названието произхожда от гръцката дума ophtalmos – око и logos – наука. От всички сетивни органи само изучаването на окото е обособено в отделна наука. Това се определя на първо място от изключително важното значение, което има зрителният анализатор за живота на организмите и специално за човека. Доказано е, че чрез не го се получава над 80% от информацията за заобикалящата ни действителност.  В производствената дейност на човека доброто зрение е абсолютно необходимо за почти всяка професия.<br><br>Втората причина за обособяването на офталмологията в отделна наука са анатомическата и функционална особеност и сложност на зрителният орган, специфичните само за окото методи на изследване, както и специалната апаратура за изследване, която не се прилага в нито една друга дисциплина.<br><br>Прозрачността на очните среди дава възможност да се наблюдават и изучават редица общобиологични и патологични процеси, развиващи се в живия организъм. Така единствено в очното дъно могат да се наблюдават отделни кръвоносни съдове и да се проследят в динамика промените настъпващи в тях.<br><br>Изключителното натоварване на зрителния анализатор определя нуждата от неговото редовно и активно контролиране и от създаването на благоприятни условия за неговото нормално развитие и функциониране. Във връзка с това и днес е актуална мисълта на основоположника на българската офталмология, големият учен академик Константин Пашев: “Виждането е рождено право на всеки, опазването му е дълг на всички”.<br><br>

                            Преглед при офталмолог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Николай Сурчев">
                                    </div>

                                    {{-- <div class="staff-member-appointment">
                                        <a href="" target="_blank">Резервирай час</a>
                                    </div> --}}
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Николай Сурчев</div>
                                    <div class="staff-member-specialty">Офталмолог</div>

                                    <div class="staff-member-location">
                                        {{-- <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div> --}}
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>
                        </div>

<div class="specialty-staff">
    <div class="specialty-staff-title">Специалисти</div>

    <div class="specialty-staff-member">

        <div class="staff-member">
            <div class="staff-member-image">
                <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Мариела Сотирова">
            </div>

            {{-- <div class="staff-member-appointment">
                <a href="" target="_blank">Резервирай час</a>
            </div> --}}
        </div>

        <div class="staff-member-info">
            <div class="staff-member-name">Д-р Мариела Сотирова</div>
            <div class="staff-member-specialty">Офталмолог</div>

            <div class="staff-member-location">
                <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 5</div>
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
        {{-- <div class="staff-member-short-bio">
            Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
        </div> --}}
    </div>
</div>


                    </div>

                    {{-- Педиатрия --}}
                    <div role="tabpanel" class="tab-pane" id="tab-9" aria-expanded="true" aria-labelledby="base-tab9">

                        <div class="specialty-title">Педиатрия</div>

                        <div class="specialty-description">
                            Като отделна наука педиатрията се оформя през ХІХ в.<br><br>Съдържанието на науката за лекуване на детските болести (педиатрията) днес далече надхвърля тесния етимологичен смисъл на тази дума.<br><br>Педиатрията е основна дисциплина в медицината, появила се сравнително по-късно в исторически аспект от други основни медицински специалности. Основна цел е детското здравеопазване, но наред с това педиатърът осъществява специфична и неспецифична профилактика на инфекциозните и недоимачни детски заболявания. Съблюдава растежа и развитието, отглеждането и възпитанието, както и рационалното хранене на детето във всички възрастови периоди от раждането до края на пубертетската възраст. Целта е откриване на вродените заболавания и впоследствие предоставянето им на другите специалности.<br><br>

                            Преглед при педиатър се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Лора Бучукова">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/1900000405/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Лора Бучукова</div>
                                    <div class="staff-member-specialty">Педиатър</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 17</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                        </div>


                    </div>

                    {{-- Пневмология и фтизиатрия --}}
                    <div role="tabpanel" class="tab-pane" id="tab-10" aria-expanded="true" aria-labelledby="base-tab10">

                        <div class="specialty-title">Пневмология и фтизиатрия</div>

                        <div class="specialty-description">
                            Пневмология и фтизиатрия (пулмология) е специалност, която се занимава с лечение и профилактика на заболяванията на дихателната система, в частност – белите дробове. Най – честите заболявания са: хроничен бронхит; хроничен обструктивен бронхит, бронхиална астма; белодробен емфизем; пневмонии с всичките им разновидностти; плеврити (вирусни, туберколозни и др.); белодробна и извънбелодробна туберколоза, саркоидоза, доброкачествени и злокачествени заболявания на дихателната система.<br><br>

                            Преглед при пулмолог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="доц. Д-р Антоанета Гочева">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300000545/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">доц. Д-р Антоанета Гочева</div>
                                    <div class="staff-member-specialty">Пулмолог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                        </div>


                    </div>

                    {{-- Урология --}}
                    <div role="tabpanel" class="tab-pane" id="tab-11" aria-expanded="true" aria-labelledby="base-tab11">

                        <div class="specialty-title">Урология</div>

                        <div class="specialty-description">
                            <strong>Урологията е комплексна медицинска специалност с хирургична насоченост, която изучава етиологията, патогенезата и симптоматиката на заболяванията на пикочно-половата система при мъжете и на пикочната система при жените, като осъществява и разработва методи за диагностиката, лечението и профилактиката им.</strong><br><br>
                            Урологията се занимава предимно с лечение на съответните заболявания, но ползва и консервативни методи за лечение.<br><br>

                            С развиването на урологията като самостоятелна специалност извън хирургията, в нея се обособяват различни подразделения. Те не са медицински специалности, а профили на урологията.<br><br>

                            <strong>Андрологията</strong> се занимава с диагностиката и лечението на заболяванията на мъжката репродуктивна система и стерилитета на мъжа.<br><br>

                            <strong>Урогинекологията</strong> диагностицира и лекува заболяванията на пикочната система при жените.<br><br>

                            <strong>Ендоурология</strong> се занимава с приложението и осъществяването на ендоскопските, миниивазивните методи в урологията.<br><br>

                            <strong>Онкоурологията</strong> се занимава с дигностиката, лечението и профилактиката на онкологичните заболявания в урологията.<br><br>

                            <strong>Детската урология</strong> изследва особеностите, диагностиката и лечението на урологичните заболявания в детска възраст.<br><br>

                            <strong>Старческата урология</strong> изследва особеностите, диагностиката и лечението на урологичните заболявания в старческа възраст.<br><br>

                            Преглед при уролог се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Никола Фарах">
                                    </div>
                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300014714/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Никола Фарах</div>
                                    <div class="staff-member-specialty">Уролог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
                                        <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                    </div>

                                    <div class="staff-member-practices">
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-nzok.png" title="Работи с НЗОК">
                                        </span>
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-cash.png" title="Работи платено">
                                        </span>
                                        {{-- <span class="practice-icon">
                                            <img class="children" src="{{ config('app.url') }}/app-assets/images/practice-pediatric.png" title="Работи с деца">
                                        </span> --}}
                                    </div>
                                </div>
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Петър Павлов">
                                    </div>
                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300007523/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Петър Павлов</div>
                                    <div class="staff-member-specialty">Уролог</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                        </div>
                    </div>

                    {{-- Ушно-носно-гърлени болести --}}
                    <div role="tabpanel" class="tab-pane" id="tab-12" aria-expanded="true" aria-labelledby="base-tab12">

                        <div class="specialty-title">Ушно-носно-гърлени болести</div>

                        <div class="specialty-description">
                            Оториноларингологията е дисциплина занимаваща се с анатомията, физиологията и заболяванията (остри и хронични) на ушите, носа, гърлото, ларинкса и слюнчените жлези.<br><br>Тук спадат още заболяванията на хранопровода и бронхите, дефектите на гласа и слуха.<br><br>

                            Преглед при специалист УНГ се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <!-- <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Поля Моева">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/otolaryngology/ivan-voev" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Поля Моева</div>
                                    <div class="staff-member-specialty">Специлиаст УНГ</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 30</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div> -->

                        </div>


                    </div>

                    {{-- Хирургия --}}
                    <div role="tabpanel" class="tab-pane" id="tab-13" aria-expanded="true" aria-labelledby="base-tab13">

                        <div class="specialty-title">Хирургия</div>

                        <div class="specialty-description">
                            Общата хирургия е област от клиничната медицина, която изучава болести, лекуването на които изисква оперативна намеса.<br><br>Обща хирургия е практикувана от най-дълбока древност. Развива се особено бързо след втората половина на ХІХ в., когато са въведени наркозата, асептиката, антисептиката, позволяващи извършване на големи и сложни операции. Бързото й развитие довежда до оформянето на нови самостоятелни частни хирургични дисциплини – ортопедия, травматология, неврохирургия, сърдечносъдова хирургия и др.<br><br>Хирургията е медицинска специалност, занимаваща се с диагнозата и лечението на група заболявания, при които използването на операция е задължително или потенциално възможно.<br><br>Хирургията е основна и комплексна медицинска наука. За по-съвършеното и специализирано третиране на хирургичните заболявания се обособяват профилирани специалности (по органи и системи на човешкото тяло).<br><br>

                            Преглед при хирург се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div>

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Григор Григоров">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300002469/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Григор Григоров</div>
                                    <div class="staff-member-specialty">Хирург</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
                                        <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                    </div>

                                    <div class="staff-member-practices">
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-nzok.png" title="Работи с НЗОК">
                                        </span>
                                        <span class="practice-icon">
                                            <img src="{{ config('app.url') }}/app-assets/images/practice-cash.png" title="Работи платено">
                                        </span>
                                    </div>
                                </div>
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>

                            <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Силвия Стаева">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/practices/practice-profiles/2300008569/" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Силвия Стаева</div>
                                    <div class="staff-member-specialty">Хирург</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 2</div>
                                        {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div>
                        </div>


                    </div>

                    {{-- Вътрешни болести --}}
                    <div role="tabpanel" class="tab-pane" id="tab-14" aria-expanded="true" aria-labelledby="base-tab14">

                        <div class="specialty-title">Вътрешни болести</div>

                        <!-- <div class="specialty-description">
                            Като отделна наука педиатрията се оформя през ХІХ в.<br><br>Съдържанието на науката за лекуване на детските болести (педиатрията) днес далече надхвърля тесния етимологичен смисъл на тази дума.<br><br>Педиатрията е основна дисциплина в медицината, появила се сравнително по-късно в исторически аспект от други основни медицински специалности. Основна цел е детското здравеопазване, но наред с това педиатърът осъществява специфична и неспецифична профилактика на инфекциозните и недоимачни детски заболявания. Съблюдава растежа и развитието, отглеждането и възпитанието, както и рационалното хранене на детето във всички възрастови периоди от раждането до края на пубертетската възраст. Целта е откриване на вродените заболавания и впоследствие предоставянето им на другите специалности.<br><br>

                            Преглед при педиатър се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div> -->

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <!-- <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Иван Кръстев">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/pediatrics/lora-buchukova" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Иван Кръстев</div>
                                    <div class="staff-member-specialty">Педиатър</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 4</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div> -->

                        </div>


                    </div>

                    {{-- Образна диагностика --}}
                    <div role="tabpanel" class="tab-pane" id="tab-15" aria-expanded="true" aria-labelledby="base-tab15">

                        <div class="specialty-title">Образна диагностика</div>

                        <!-- <div class="specialty-description">
                            Като отделна наука педиатрията се оформя през ХІХ в.<br><br>Съдържанието на науката за лекуване на детските болести (педиатрията) днес далече надхвърля тесния етимологичен смисъл на тази дума.<br><br>Педиатрията е основна дисциплина в медицината, появила се сравнително по-късно в исторически аспект от други основни медицински специалности. Основна цел е детското здравеопазване, но наред с това педиатърът осъществява специфична и неспецифична профилактика на инфекциозните и недоимачни детски заболявания. Съблюдава растежа и развитието, отглеждането и възпитанието, както и рационалното хранене на детето във всички възрастови периоди от раждането до края на пубертетската възраст. Целта е откриване на вродените заболавания и впоследствие предоставянето им на другите специалности.<br><br>

                            Преглед при педиатър се извършва по няколко начина:
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                            </div>
                            <div class="specialty-description-item">
                                <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                            </div>

                        </div> -->

                        <div class="specialty-staff">
                            <div class="specialty-staff-title">Специалисти</div>

                            <!-- <div class="specialty-staff-member">

                                <div class="staff-member">
                                    <div class="staff-member-image">
                                        <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Теодора Тонева">
                                    </div>

                                    <div class="staff-member-appointment">
                                        <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/pediatrics/lora-buchukova" target="_blank">Резервирай час</a>
                                    </div>
                                </div>

                                <div class="staff-member-info">
                                    <div class="staff-member-name">Д-р Теодора Тонева</div>
                                    <div class="staff-member-specialty">Педиатър</div>

                                    <div class="staff-member-location">
                                        <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                        <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 6</div>
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
                                {{-- <div class="staff-member-short-bio">
                                    Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
                                </div> --}}
                            </div> -->

                        </div>


                    </div>

{{-- Физикална терапия и рехабилитация --}}
<div role="tabpanel" class="tab-pane" id="tab-16" aria-expanded="true" aria-labelledby="base-tab16">

    <div class="specialty-title">Физикална терапия и рехабилитация</div>

    <!-- <div class="specialty-description">
        Като отделна наука педиатрията се оформя през ХІХ в.<br><br>Съдържанието на науката за лекуване на детските болести (педиатрията) днес далече надхвърля тесния етимологичен смисъл на тази дума.<br><br>Педиатрията е основна дисциплина в медицината, появила се сравнително по-късно в исторически аспект от други основни медицински специалности. Основна цел е детското здравеопазване, но наред с това педиатърът осъществява специфична и неспецифична профилактика на инфекциозните и недоимачни детски заболявания. Съблюдава растежа и развитието, отглеждането и възпитанието, както и рационалното хранене на детето във всички възрастови периоди от раждането до края на пубертетската възраст. Целта е откриване на вродените заболавания и впоследствие предоставянето им на другите специалности.<br><br>

        Преглед при педиатър се извършва по няколко начина:
        <div class="specialty-description-item">
            <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
        </div>
        <div class="specialty-description-item">
            <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
        </div>
        <div class="specialty-description-item">
            <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
        </div>

    </div> -->

    <div class="specialty-staff">
        <div class="specialty-staff-title">Специалисти</div>

        <!-- <div class="specialty-staff-member">

            <div class="staff-member">
                <div class="staff-member-image">
                    <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Диана Тенева">
                </div>

                <div class="staff-member-appointment">
                    <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/pediatrics/lora-buchukova" target="_blank">Резервирай час</a>
                </div>
            </div>

            <div class="staff-member-info">
                <div class="staff-member-name">Д-р Диана Тенева</div>
                <div class="staff-member-specialty">Педиатър</div>

                <div class="staff-member-location">
                    <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                    <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 6</div>
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
            {{-- <div class="staff-member-short-bio">
                Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста. Кратка автобиография за специалиста.
            </div> --}}
        </div> -->

    </div>


</div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="aside-menu-links-container">
                    <div class="list-group ">
                        <a class="list-group-item active"  id="base-tab1" data-toggle="tab" aria-controls="tab-1" href="#tab-1" aria-expanded="true">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Акушерство и гинекология</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab2" data-toggle="tab" aria-controls="tab-2" href="#tab-2" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Гастроентерология</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab3" data-toggle="tab" aria-controls="tab-3" href="#tab-3" aria-expanded="false" >
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Ендокринология и болести на обмяната</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item"  id="base-tab4" data-toggle="tab" aria-controls="tab-4" href="#tab-4" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Кардиология</h6>
                                </div>
                            </div>
                        </a>

                        {{-- <a class="list-group-item" href="{{ route('clinical-laboratory') }}">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Клинична лаборатория</h6>
                                </div>
                            </div>
                        </a> --}}

                        <a class="list-group-item" id="base-tab5" data-toggle="tab" aria-controls="tab-5" href="#tab-5" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Кожни и венерически болести</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab6" data-toggle="tab" aria-controls="tab-6" href="#tab-6" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Нервни болести</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab8" data-toggle="tab" aria-controls="tab-15" href="#tab-15" aria-expanded="false" >
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Образна диагностика</h6>
                                </div>
                            </div>
                        </a>

                        <!-- <a class="list-group-item" id="base-tab7" data-toggle="tab" aria-controls="tab-7" href="#tab-7" aria-expanded="false" >
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Ортопедия и травматология</h6>
                                </div>
                            </div>
                        </a> -->

                        <a class="list-group-item" id="base-tab8" data-toggle="tab" aria-controls="tab-8" href="#tab-8" aria-expanded="false" >
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Очни болести</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab9" data-toggle="tab" aria-controls="tab-9" href="#tab-9" aria-expanded="false" >
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Педиатрия</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab10" data-toggle="tab" aria-controls="tab-10" href="#tab-10" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Пневмология и фтизиатрия</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab11" data-toggle="tab" aria-controls="tab-11" href="#tab-11" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Урология</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab12" data-toggle="tab" aria-controls="tab-12" href="#tab-12" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Ушно-носно-гърлени болести</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab8" data-toggle="tab" aria-controls="tab-16" href="#tab-16" aria-expanded="false" >
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Физикална и рехабилитационна медицина</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab13" data-toggle="tab" aria-controls="tab-13" href="#tab-13" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Хирургия</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" id="base-tab14" data-toggle="tab" aria-controls="tab-14" href="#tab-14" aria-expanded="false">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0">Вътрешни болести</h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

@endsection
