<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow do-not-print">
    {{-- Mobile  --}}
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row ">
                <li class="nav-item mobile-menu d-sm-block d-md-none">
                    <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
                        <i class="ft-menu font-large-1"></i>
                    </a>
                </li>
                <li class="nav-item d-sm-block d-md-none">
                    <a class="navbar-brand" href="{{ config('app.url') }}">
                        <h2 class="brand-text">ДКЦ XI - София</h2>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- Desktop --}}
    <div class="d-none d-md-block d-lg-block d-xl-block header-logo">
        <div class="logo-container">
            <img src="{{ config('app.url') }}/app-assets/images/logo-dkc-11.svg" alt="Лого ДКЦ-11 София" >
        </div>
        <div class="logo-title">
            <div class="title-main">ДКЦ XI - София</div>
            <div class="title-subtitle">Столично общинско здравеопазване</div>
        </div>

        <div class="user-nav">
            <ul class="nav navbar-nav">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}"><i class="ft-log-in"></i> Вход</a></li>
                    {{-- <li><a href="{{ route('register') }}">Регистрация</a></li> --}}
                @else
                    <li class="dropdown dropdown-user nav-item">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-link dropdown-user-link">
                        <span class="user-name">{{ auth()->user()->first_name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('home') }}" class="dropdown-item"><i class="ft-user"></i> Профил</a>

                            @role('super', 'admin', 'moderator')
                                <a href="{{ route('admin.home') }}" class="dropdown-item"><i class="ft-settings"></i> Административен панел</a>
                            @endrole

                           {{--  <a href="#" class="dropdown-item"><i class="ft-edit-3"></i> Редакция на профил</a>

                            <a href="#" class="dropdown-item"><i class="ft-unlock"></i> Промяна на парола</a> --}}

                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                                class="dropdown-item"><i class="ft-power"></i> Изход</a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>

    </div>
</nav>
