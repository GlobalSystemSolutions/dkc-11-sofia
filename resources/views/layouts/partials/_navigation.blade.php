<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow do-not-print">
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
            <li class=" nav-item {{ return_if(on_page('/'), 'active') }}">
                <a href="{{ route('welcome') }}">
                    <i class="main-menu-icon fa fa-home d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Начало</span>
                </a>
            </li>
            <li class=" nav-item {{ return_if(on_page('specialized-cabinets'), 'active') }}">
                <a href="{{ route('specialized-cabinets') }}">
                    <i class="main-menu-icon medical-icon-i-social-services d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Специализирани кабинети</span>
                </a>
            </li>
            <li class=" nav-item {{ return_if(on_page('imaging'), 'active') }}">
                <a href="{{ route('imaging') }}">
                    <i class="main-menu-icon medical-icon-i-imaging-root-category d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Образна диагностика</span>
                </a>
            </li>
            <li class="nav-item {{ return_if(on_page('clinical-laboratory'), 'active') }}">
                <a href="{{ route('clinical-laboratory') }}">
                    <i class="main-menu-icon fa fa-flask d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Клинична лаборатория</span>
                </a>
            </li>
            <li class="nav-item {{ return_if(on_page('physical-therapy-and-rehabilitation'), 'active') }}">
                <a href="{{ route('physical-therapy-and-rehabilitation') }}">
                    <i class="main-menu-icon medical-icon-i-physical-therapy d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Физикална терапия и<br> рехабилитация</span></a>
            </li>

            <li class="nav-item {{ return_if(on_page('general-practitions-and-dentists'), 'active') }}">
                <a href="{{ route('general-practitions-and-dentists') }}">
                    <i class="main-menu-icon fa fa-user-md d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Общопрактикуващи и<br> дентални лекари</span>
                </a>
            </li>
            {{-- <li class="nav-item {{ return_if(on_page('specialized-home-services'), 'active') }}">
                <a href="{{ route('specialized-home-services') }}">
                    <i class="main-menu-icon fa fa-medkit d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Специализирани услуги<br> по домовете</span>
                </a>
            </li> --}}

            <li class="nav-item {{ return_if(on_page('buyer-profile'), 'active') }}">
                <a href="{{ route('buyer-profile') }}">
                    <i class="main-menu-icon fa fa-handshake-o d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Профил на купувача</span>
                </a>
            </li>

            <li class="nav-item {{ return_if(on_page('price-list'), 'active') }}">
                <a href="{{ route('price-list') }}">
                    <i class="main-menu-icon fa fa-money d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Ценоразпис</span>
                </a>
            </li>

            <li class="nav-item results-item {{ return_if(on_page('results'), 'active') }}">
                <a href="{{ route('results') }}">
                    <i class="main-menu-icon fa fa-list-alt d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Проверка на резултати</span>
                </a>
            </li>

            <li class=" nav-item {{ return_if(on_page('careers'), 'active') }}">
                <a href="{{ route('careers') }}">
                    <i class="main-menu-icon fa fa-address-card-o d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Кариери</span>
                </a>
            </li>

            <li class=" nav-item {{ return_if(on_page('about-us'), 'active') }}">
                <a href="{{ route('about-us') }}">
                    <i class="main-menu-icon fa fa-hospital-o d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">За нас</span>
                </a>
            </li>

            <li class="nav-item {{ return_if(on_page('contacts'), 'active') }}">
                <a href="{{ route('contacts') }}">
                    <i class="main-menu-icon fa fa-phone d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Контакти</span>
                </a>
            </li>
        </ul>
    </div>
</div>
