@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Физикална терапия и рехабилитация</title>
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
                                    <a href="{{ route('physical-therapy-and-rehabilitation') }}">Физикална терапия и рехабилитация</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Физикална терапия и рехабилитация</div>
            </div>

            <div class="row">

                <div class="col-md-8">

                    <div class="specialty-description">
                        Физикалната медицина е сравнително млада медицинска специалност. Истинското й развитие като такава започва слад Втората световна война, когато от фронта се завръщат много млади военноинвалиди, които трябва да бъдат реинтегрирани в обществото. <br><br>С развитието на човешката цивилизация се променят и приоритетите пред физикалната медицина. Докато при зараждането си тя е имала за задача преодоляване на последствията от войната, то в днешно време нейните приоритети се заключават в профилактика и лечение на болестите на съвремието – травми, ревматологични заболявания, обменни заболявания, остеопороза, стрес и хиподинамия – като успешно съчетава едновременното приложение на природните и балнеологични фактори с преформираните средства за лечение.
                    </div>

                    <div class="specialty-staff">

                        <div class="specialty-staff-title">Специалисти</div>

                        <div class="specialty-staff-member">

                            <div class="staff-member">
                                <div class="staff-member-image">
                                    <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Донка Казакова">
                                </div>

                                <div class="staff-member-appointment">
                                    <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/rehabilitation/donka-kazakova" target="_blank">Резервирай час</a>
                                </div>
                            </div>

                            <div class="staff-member-info">
                                <div class="staff-member-name">Д-р Донка Казакова</div>
                                <div class="staff-member-specialty">Специалист физикална и рехабилитационна медицина</div>

                                <div class="staff-member-location">
                                    <div class="location-item"><i class="fa fa-hospital-o"></i>бул. "Ал. Стамболийски" 127</div>
                                    {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
                                    <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 0878 490 783</div>
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

                        </div>

<!-- <div class="specialty-staff-member">

    <div class="staff-member">
        <div class="staff-member-image">
            <img src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Диана Тенева">
        </div>

        <div class="staff-member-appointment">
            <a href="https://myhealth.bg/centers/profile/dcc-11-sofia/rehabilitation/donka-kazakova" target="_blank">Резервирай час</a>
        </div>
    </div>

    <div class="staff-member-info">
        <div class="staff-member-name">Д-р Диана Тенева</div>
        <div class="staff-member-specialty">Специалист физикална и рехабилитационна медицина</div>

        <div class="staff-member-location">
            <div class="location-item"><i class="fa fa-hospital-o"></i>бул. "Ал. Стамболийски" 127</div>
            {{-- <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 302</div> --}}
            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 0878 490 783</div>
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

</div> -->

                    </div>

                    <div class="specialty-description">
                        Обект на лечение със съвременните методи на физикалната медицина и рехабилитация са следните групи заболявания:

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Заболявания на дихателната система.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Заболявания на сърдечно-съдовата система.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Ендокринно-обменни заболявания.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Ревматични заболявания.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Дегенеративни ставни заболявания.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Детски заболявания.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Заболявания на централната нервна система.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Заболявания на периферната и вегетативната нервна система.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Травмени увреди на опорно-двигателния апарат.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Ортопедични заболявания.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Хирургични заболявания, изгаряния и измръзвания.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Заболявания на ушите,носа и гърлото.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Кожни заболявания.</span>
                        </div>

                        <div class="specialty-description-item">
                            <span><i class="fa fa-check-square-o"></i>Акушеро-гинекологични заболявания.</span>
                        </div>

                    </div>

                </div>

                <div class="col-md-4">
                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/rehabilitation-1.jpg">
                    </div>

                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/rehabilitation-2.jpg">
                    </div>

                    <div class="specialty-images-container">
                        <img class="specialty-images" src="{{ config('app.url') }}/app-assets/images/rehabilitation-3.jpg">
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
