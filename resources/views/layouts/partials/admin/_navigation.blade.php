<div data-scroll-to-active="true" class="main-menu menu-fixed menu-dark menu-accordion menu-shadow do-not-print">
    <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">

            <li class=" nav-item {{ return_if(on_page('admin'), 'active') }}">
                <a href="{{ route('admin.home') }}">
                    <i class="main-menu-icon medical-icon-i-social-services d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Административен панел</span>
                </a>
            </li>

            @role('super', 'admin')
            <li class=" nav-item {{ return_if(on_page('admin/center'), 'active') }}">
                <a href="{{ route('admin.center.index') }}">
                    <i class="main-menu-icon medical-icon-i-social-services d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Лечебно заведение</span>
                </a>
            </li>

            <li class=" nav-item {{ return_if(on_page('admin/doctors'), 'active') }}">
                <a href="{{ route('admin.doctors') }}">
                    <i class="main-menu-icon medical-icon-i-imaging-root-category d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Лекарски състав</span>
                </a>
            </li>

            <li class="nav-item {{ return_if(on_page('admin/prices'), 'active') }}">
                <a href="{{ route('admin.prices') }}">
                    <i class="main-menu-icon fa fa-money d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Ценоразпис</span>
                </a>
            </li>
            @endrole

            <li class="nav-item {{ return_if(on_page('admin/news'), 'active') }}">
                <a href="{{ route('admin.news.index') }}">
                    <i class="main-menu-icon fa fa-flask d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Новини</span>
                </a>
            </li>

            <li class="nav-item {{ return_if(on_page('admin/campaigns'), 'active') }}">
                <a href="{{ route('admin.campaigns.index') }}">
                    <i class="main-menu-icon medical-icon-i-physical-therapy d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Кампании</span></a>
            </li>

            <li class="nav-item {{ return_if(on_page('admin/careers'), 'active') }}">
                <a href="{{ route('admin.careers.index') }}">
                    <i class="main-menu-icon fa fa-user-md d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Кариери</span>
                </a>
            </li>

            <li class="nav-item {{ return_if(on_page('admin/buyer-profile'), 'active') }}">
                <a href="{{ route('admin.buyer.index') }}">
                    <i class="main-menu-icon fa fa-handshake-o d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Профил на купувача</span>
                </a>
            </li>

            @role('super')
            <li class=" nav-item {{ return_if(on_page('admin/laboratories'), 'active') }}">
                <a href="{{ route('admin.laboratories') }}">
                    <i class="main-menu-icon medical-icon-i-social-services d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Лаборатории</span>
                </a>
            </li>

            <li class=" nav-item {{ return_if(on_page('admin/users'), 'active') }}">
                <a href="{{ route('admin.users') }}">
                    <i class="main-menu-icon medical-icon-i-social-services d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Потребители</span>
                </a>
            </li>
            @endrole

            <li class=" nav-item {{ return_if(on_page('/'), 'active') }}">
                <a href="{{ route('welcome') }}">
                    <i class="main-menu-icon fa fa-home d-none d-sm-none d-md-block"></i>
                    <span data-i18n="" class="menu-title">Обратно към сайта</span>
                </a>
            </li>
        </ul>
    </div>
</div>
