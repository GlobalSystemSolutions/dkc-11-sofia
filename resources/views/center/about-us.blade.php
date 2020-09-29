@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | За нас</title>
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
                                    <a href="{{ route('about-us') }}">За нас</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">За нас</div>
            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="card collapse-icon accordion-icon-rotate service-description">
                        <div class="about-us-description">
                        „ДКЦ XI - София” ЕООД е разположен в централната част на столицата в масивна триетажна сграда. Доброто местоположение и комуникативните възможности, създават удобства и улесняват достъпа на пациенти до ДКЦ. <br><br>Лечебното заведение разполага с добра материална база, специализирани кабинети, сектор по образна диагнозтика, медико-диагностичен сектор, сектор по физикална и рехабилитационна медицина.<br><br>На територията на лечебното заведение има 7 общо практикуващи лекари (ОПЛ) и 5 стоматологични кабинета.
                        </div>

                        <div id="headingCollapse11" class="card-header">
                            <a data-toggle="collapse" href="#collapse11" aria-expanded="true" aria-controls="collapse11" class="card-title lead">Кабинети на лекари - специалисти</a>
                        </div>
                        <div id="collapse11" role="tabpanel" aria-labelledby="headingCollapse11" class="collapse show">
                            <div class="card-content">
                                <div class="card-body about-us">

                                    <div>Лечебното заведение разполага с добра материална база включваща:<br><br></div>
                                    <ul class="service-list main">
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Акушерство и гинекология
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Дерматология - специализиран в онкодерматологията
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Ендокринология
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Кардиология - ехокардиография, поставяне на холтери
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Неврология
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Ортопедия и травматология
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Очни болести - лекарски кабинет с манипулационна
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Педиатрия
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Пулмология - спирометрия
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по УНГ
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Кабинет по Урология - ехокардиография
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Манипулационна - обща
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Медико-диагностичен сектор - клинична лаборатория, хематология и биохимия, микробиология и паразитология, хормонална диагностика, цитология
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Сектор по Образна диагностика - рентгенография, мамография, ултразвукова диагностика, зъбен кугел
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Сектор по Физикална и рехабилитационна медицина - лекарски кабинет, кабинети аерозол, електролечение, светлолечение, електростимулация, вакуум-масаж, ултразвукова, лазер, магнито и криотерапия
                                        </li>
                                    </ul>

                                    {{-- <div>На територията на лечебното заведение има 7 общо практикуващи лекари (ОПЛ) и 5 стоматологични кабинета.</div> --}}
                                </div>
                            </div>
                        </div>
                        <div id="headingCollapse12" class="card-header">
                            <a data-toggle="collapse" href="#collapse12" aria-expanded="true" aria-controls="collapse12" class="card-title lead">Мисия на „ДКЦ XI - София“ ЕООД</a>
                        </div>
                        <div id="collapse12" role="tabpanel" aria-labelledby="headingCollapse12" class="collapse show" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <div>Мисията на „ДКЦ 11- София” ЕООД лаконично е изразена в мотото</div>
                                    <div class="moto">
                                        <blockquote class="blockquote">
                                            „С любов служим за Вашето здраве, хармония и радост.”
                                        </blockquote>
                                    </div>

                                    <div>Мисията е прозрение в бъдещата реалност, управленчески инструмент, елемент на фирмената култура и поведението на ръководителя, на управлението на човешките ресурси и придава смисъл, целенасоченост на дейността, мотивира и разкрива перспективи в общия път. <br><br></div>

                                    <div>Ценностите, които всички служители изповядват и вплитат в дейността в полза на всички пациенти и обществото са:</div>

                                    <ul class="service-list main">
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            сътрудничество, хармония, красота, съчувствие и милост.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            честност, морал, мотивация и вдъхновение.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            взаимопомощ, взаимоуважение, солидарност и сътворчество.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            равнопоставеност и еквивалентност.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            търпение, самопознание и саморазвитие.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            активно милосърдие и добротворство.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            внимание, подкрепа, поощрение и въстановителни грижи.
                                        </li>
                                    </ul>

                                    <div>Първото ни задължение е към нашите пациенти:</div>

                                    <ul class="service-list main">
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            качеството на здравните услуги трябва да е най-високо.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            честност, почтеност, етика и психосоматичен комфорт.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            достъпност и достатъчност.
                                        </li>
                                    </ul>

                                    <div>Второто ни задължение е към нашите служители:</div>

                                    <ul class="service-list main">
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            сигурност, справедливост, отговорност, толерантност.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            условия за квалификация.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            организирана система за предложения.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="headingCollapse13" class="card-header">
                            <a data-toggle="collapse" href="#collapse13" aria-expanded="true" aria-controls="collapse13" class="card-title lead">Главна цел, подцели и дейности</a>
                        </div>
                        <div id="collapse13" role="tabpanel" aria-labelledby="headingCollapse13" class="collapse show" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">

                                    <div>Главната бизнес цел на „ДКЦ 11София” ЕООД за тригодишен период 2017-2020 година e:</div>

                                    <div class="business-goal">
                                        Възстановяване на лидерските позиции на пазара на доболнични медицински услуги в района, подобряване имиджа на „ДКЦ XI - София” и повишаване лоялността на потребителите му.
                                    </div>

                                    <div>Главната цел ще се реализира чрез следните подцели:</div>

                                    <ol class="service-list">
                                        <li>
                                            Гарантиране на високо качество на медицинските услуги чрез:
                                            <ul class="service-list-2 sub-list">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    подобряване на сградния фонд, чрез саниране на сградата с помощтта на Столична община.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    внедряване на комплексна система за осигуряване и оценка на качеството на медицинските услуги.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    непрекъснато усъвършенстване на кадровата политика, системата за мотивация и програмите за непрекъснато повишаване на квалификацията на лекари и специалисти по здравни грижи.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    внедряване на съвременни диагностични методи – електромиография (ЕМГ), доплер на бъбречни съдове и др.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    оптимална организация на медицинската помощ, с цел осигуряване на максимално бързо и точно поставяне на диагноза и пристъпване към лечение.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    прилагане на човекоцентричен маркетинг на отношенията.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    въвеждане системата на бенчмаркинга.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Разширяване на промоционалната и профилактична дейност:
                                            <ul class="service-list-2 sub-list">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    запознаване на населението със симптоми и превенция на социално значими заболявания като сърдечно-съдови, онкологични, глаукома и др.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    организиране и провеждане на безплатни прегледи за населението във връзка с борба със социално-значими заболявания.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    организиране и провеждане на профилактични прегледи от специалисти – кардиолог, ендокринолог, невролог и офталмолог.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    установяване на контакти и сключване на договори с фирми и нови ДЗОФ за провеждане на профилактични прегледи.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Разширяване на дейността по договор с РЗОК.
                                            <ul class="service-list-2 sub-list">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    гастроентерология.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    съдова хирургия.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    доплер на съдове.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Въвеждане на нови платени услуги
                                            <ul class="service-list-2 sub-list">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    Медхаус (медицински услуги у дома).
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Маркетингов мениджмънт на дейността
                                            <ul class="service-list-2 sub-list">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    участие в обучения за повишаване на мениджърската квалификация.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    непрекъснато маркетингово проучване на удовлетвореността на пациентите на пазара на здравни услуги.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    действие на система за финансово управление и контрол (СФУК) и тримесечни анализи на дейността.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    развитие на връзките с обществеността и реклама за имиджа на лечебното заведение.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Финансова стабилност на лечебното заведение
                                            <ul class="service-list-2 sub-list">
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    оптимизиране на финансовото осигуряване чрез въвеждането на нови дейности по РЗОК и новите медицински дейности за обслужване на пациенти у дома.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    система за двоен контрол при разходването на медикаменти и консумативи.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    действие на системата за вътрешно-финансов контрол и ежемесечен анализ на приходи и разходи по звена.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    оптимизиране на непреките разходи.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    стриктно придържане към Закона за лечебните заведения, Наредбата за общинските лечебни заведения и др.
                                                </li>
                                                <li>
                                                    <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                                    непрекъснато развитие и усъвършенстване на системата за възнаграждения, в зависимост от резултатите от дейността с цел висока мотивация.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Продължаване на поетапното обновяване и снабдяване на ЛЗ с нова, съвременна медицинска апаратура
                                        </li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div id="headingCollapse14" class="card-header">
                            <a data-toggle="collapse" href="#collapse14" aria-expanded="true" aria-controls="collapse14" class="card-title lead">Стратегии за развитие</a>
                        </div>
                        <div id="collapse14" role="tabpanel" aria-labelledby="headingCollapse14" class="collapse show" aria-expanded="false" style="">
                            <div class="card-content">
                                <div class="card-body">
                                    <div>Стратегиите са подчинени на принципа за максимално удовлетворяване на здравните потребности на населението. В своето бъдещо развитие „ДКЦ XI - София” ще развива:</div>
                                    <ul class="service-list main">
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Стратегия на устойчиво интензивно развитие.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Стратегия на диверсификация.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Комуникационна стратегия.
                                        </li>
                                        <li>
                                            <span class="list-icon"><i class="fa fa-check-square-o"></i></span>
                                            Стратегия за мониторинг на здравните потребности.
                                        </li>
                                    </ul>
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
