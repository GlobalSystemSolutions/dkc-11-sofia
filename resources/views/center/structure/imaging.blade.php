@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Образна диагностика</title>
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
                                    <a href="{{ route('imaging') }}">Образна диагностика</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Образна диагностика</div>
            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="specialty-description">
                        ДКЦ-ХІ София разполага с ренгенографски апарат, с който може да се направят пълните образно- диагностични изследвания, необходими на пациента. При нас, също така можете да си направите мамография. Тя е полезна за ранното диагностиране на проблеми с млечната жлеза. Като всяка жена на 40 години, трябва и е желателно да си прави тези изследвания всяка година. ДКЦ-ХІ разполага и с проявителна машина за дентални графии.<br><br>

                        Епохалното откритие на рентгеновите лъчи и лъчите от радиоактивния разпад изигра решаваща роля за задълбочаването на нашите познания върху строежа на материята. Това откритие намери ценно и плодотворно приложение в медицината.<br><br>

                        Рентгенологията обхваща приложението на рентгеновите лъщи с диагностични цели. Тя включва изучаването на многобройните рентгенови диагностични методи за изследване на различните области на човешкото тяло в норма и патология и обслужва с диагностична цел всички медицински дисциплини.<br><br>

                        Не без основание някои я наричат патоанатомия на живия човек. Рентгенологията е високотехнологична медицинска специалност, при която с помощта на рентгенови лъчи, ултразвук и магнитно поле се получават образи на изследваните органи и системи. В последните години образната диагностика претърпя изключително бурно развитие с въвеждането на нови методи на изследване, по-малко лъченатоварващи и по-високо информативни.<br><br>

                        Рентгенологията се прилага както при спешните състояния за установяване на травматични увреди, така и при лечение на различни видове болести за проследяването на терапевтичния ефект.<br><br>

                        Образната диагностика се дели на мусколоскелетна, сърдечно-съдова, диагностики на торакса, на жлъчно-чернодробната и панкреасна системи, на хранителния тракт, урорентгенология и неврорентгенология. Като нов дял се обособи и мамодиагностиката.<br><br>

                        ДКЦ-XI София предлага ранна диагностика на рак на млечната жлеза с най-съвременният апарат в света "<strong>BRASTER-PRO</strong>".<br><br>
                        Изследването с апарат "<strong>BRASTER-PRO</strong>" e иновативна технология продукт на дългогодишни разработки. Методът се основава на контактна томография с течни кристали, която е напълно безвредна, изключително точна, открива образувания в млечната жлеза с размер от едва 3 мм., без абсолютно никакво облъчване и без причиняване на болка.
                        Безвредната технология позволява да се извършва диагностика няколко пъти годишно, което е важна предпоставка за ранното откриване на заболяването.<br><br>
                        <strong>Записването за преглед с апарат "BRASTER-PRO" става само през регистратура на ДКЦ-XI.</strong>
                        <br><br>
                        <a title="Прочетете повече информация за ракът на гърдата и новите диагностични възможности в медицинската практика" href="/files/shares/5c61307706c02.pdf" target="_blank" rel="noopener">Прочетете повече информация за ракът на гърдата и новите диагностични възможности в медицинската практика</a> <br><br>

                        Преглед при рентгенолог се извършва по няколко начина:

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>С направление &numero;3 от личен лекар.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>По линия на допълнително здравно осигуряване.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Чрез платен прием.</span>
                        </div>

                        <div class="specialty-cabinet-work-time">
                            <span><i class="fa fa-clock-o"></i>Работно време: 08:30 - 19:00</span>
                        </div>
                    </div>

                    <div class="specialty-staff">

                        <div class="specialty-staff-title">Специалисти</div>

                        <div class="specialty-staff-member">

                            <div class="staff-member">
                                <div class="staff-member-image">
                                    <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Мария Караманова">
                                </div>

                                <div class="staff-member-appointment">
                                    <a href="https://myhealth.bg/companies/000689517/dcc-11-sofia/imaging/2300006036/" target="_blank">Резервирай час</a>
                                </div>
                            </div>

                            <div class="staff-member-info">
                                <div class="staff-member-name">Д-р Мария Караманова</div>
                                <div class="staff-member-specialty">Специалист образна диагностика</div>

                                <div class="staff-member-location">
                                    <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                    {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 101</div> --}}
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
                                Д-р Караманова е специалист, който работи по европейските стандарти за добра медицинска практика. Тя е била участъков терапевт по рентгенология в МБАЛ "Света Анна" София. Практикува своята специалност във Втора МБАЛ София от 2000г, била е част и от екипа на Втори медицински център София. Към момента д-р Караманова работи в ДКЦ ХІ София. Основната и задача е грижата към пациента, доброто изслушване, което води и до добрата диагностика и съответно добър резултат на лечение.
                            </div>

                        </div>

<!-- <div class="specialty-staff-member">

    <div class="staff-member">
        <div class="staff-member-image">
            <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Теодора Тонева">
        </div>

        <div class="staff-member-appointment">
            <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/imaging/mariya-karamanova" target="_blank">Резервирай час</a>
        </div>
    </div>

    <div class="staff-member-info">
        <div class="staff-member-name">Д-р Теодора Тонева</div>
        <div class="staff-member-specialty">Специалист образна диагностика</div>

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

    <div class="staff-member-short-bio">
        Д-р Караманова е специалист, който работи по европейските стандарти за добра медицинска практика. Тя е била участъков терапевт по рентгенология в МБАЛ "Света Анна" София. Практикува своята специалност във Втора МБАЛ София от 2000г, била е част и от екипа на Втори медицински център София. Към момента д-р Караманова работи в ДКЦ ХІ София. Основната и задача е грижата към пациента, доброто изслушване, което води и до добрата диагностика и съответно добър резултат на лечение.
    </div>

</div> -->
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/imaging-1.jpg">
                    </div>

                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/imaging-2.jpg">
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
