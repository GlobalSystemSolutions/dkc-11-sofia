@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Общопрактикуващи и дентални лекари</title>
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
                                    <a href="{{ route('general-practitions-and-dentists') }}">Общопрактикуващи и дентални лекари</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Общопрактикуващи и дентални лекари</div>
            </div>

            <div class="row">
                <div class="col-md-8 section-tabs">
                    <div class="tab-content px-1">

                        <div role="tabpanel" class="tab-pane active" id="tab-1" aria-expanded="true" aria-labelledby="base-tab1">

                            <div class="specialty-title">Общопрактикуващи лекари</div>

                            <div class="specialty-staff">

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Антоанета Сотирова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Антоанета Сотирова</div>
                                        <div class="staff-member-specialty">Общопрактикуващ лекар</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 28</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>08:30 - 13:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>14:00 - 19:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Бисер Георгиев">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Бисер Георгиев</div>
                                        <div class="staff-member-specialty">Общопрактикуващ лекар</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 12</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>08:00 - 13:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>14:00 - 19:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Ваня Пиянечка">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Ваня Пиянечка</div>
                                        <div class="staff-member-specialty">Общопрактикуващ лекар</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 12</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>14:00 - 19:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>08:00 - 13:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Радослав Радев">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Радослав Радев</div>
                                        <div class="staff-member-specialty">Общопрактикуващ лекар</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 8</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 0888986966</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Понеделник, Сряда, Петък</th>
                                                    <td>9:00 - 13:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Вторник, Четвъртък</th>
                                                    <td>13:00 - 17:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Ирина Грохлева">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Ирина Грохлева</div>
                                        <div class="staff-member-specialty">Общопрактикуващ лекар</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 10</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>14:00 - 19:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>08:00 - 13:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Розина Керакова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Розина Керакова</div>
                                        <div class="staff-member-specialty">Общопрактикуващ лекар</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 22</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>15:00 - 20:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>08:00 - 13:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Стефка Русева">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Стефка Русева</div>
                                        <div class="staff-member-specialty">Общопрактикуващ лекар</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 7</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>08:00 - 11:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>13:00 - 15:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab-2" aria-expanded="true" aria-labelledby="base-tab2">
                            <div class="specialty-title">Дентални лекари</div>

                            <div class="specialty-staff">

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Благовеста Николова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Благовеста Николова</div>
                                        <div class="staff-member-specialty">Стоматолог</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 25</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>13:30 - 19:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>09:00 - 18:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Виолета Михайлова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Виолета Михайлова</div>
                                        <div class="staff-member-specialty">Стоматолог</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 15</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>07:30 - 13:30</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>13:30 - 19:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Галина Моллова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Галина Моллова</div>
                                        <div class="staff-member-specialty">Стоматолог</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 27</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>07:30 - 13:30</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>13:30 - 19:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Дечка Кирячко">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Дечка Кирячко</div>
                                        <div class="staff-member-specialty">Стоматолог</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 25</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>07:30 - 13:30</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>13:30 - 19:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Диана Миланова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Диана Миланова</div>
                                        <div class="staff-member-specialty">Стоматолог</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 25</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>07:30 - 13:30</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>13:30 - 19:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Евгения Маринова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Евгения Маринова</div>
                                        <div class="staff-member-specialty">Стоматолог</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 15</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Нечетна дата</th>
                                                    <td>13:30 - 19:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Четна дата</th>
                                                    <td>09:00 - 18:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Майк Шойб">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Майк Шойб</div>
                                        <div class="staff-member-specialty">Стоматолог</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 24</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Всеки ден</th>
                                                    <td>12:00 - 21:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div role="tabpanel" class="tab-pane" id="tab-3" aria-expanded="true" aria-labelledby="base-tab3">
                            <div class="specialty-title">Психотерапевти</div>

                            <div class="specialty-staff">
                                <div class="specialty-staff-member">
                                    <div class="staff-member">
                                        <div class="staff-member-image">
                                            <img class="general-practition" src="{{ config('app.url') }}/assets/images/profiles/user.svg" title="Д-р Лидия Нецова">
                                        </div>
                                    </div>

                                    <div class="staff-member-info">
                                        <div class="staff-member-name">Д-р Лидия Нецова</div>
                                        <div class="staff-member-specialty">Психотерапевт</div>

                                        <div class="staff-member-location">
                                            <div class="location-item"><i class="fa fa-hospital-o"></i>Етаж: 1</div>
                                            <div class="location-item"><i class="fa fa-caret-square-o-right"></i>Кабинет: 26</div>
                                            <div class="location-item"><i class="fa fa-phone-square"></i>Телефон: 029318048</div>
                                        </div>
                                    </div>

                                    <div class="staff-business-hours">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">&nbsp;</th>
                                                    <th scope="col">Приемно време</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Всеки ден</th>
                                                    <td>10:00 - 18:00</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Сряда - безплатни консултации</th>
                                                    <td>12:00 - 13:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                    <div class="aside-menu-links-container">
                        <div class="list-group ">
                            <a class="list-group-item active" id="base-tab1" data-toggle="tab" aria-controls="tab-1" href="#tab-1" aria-expanded="true">
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">Общопрактикуващи лекари</h6>
                                    </div>
                                </div>
                            </a>

                            <a class="list-group-item" id="base-tab2" data-toggle="tab" aria-controls="tab-2" href="#tab-2" aria-expanded="false">
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">Дентални лекари</h6>
                                    </div>
                                </div>
                            </a>

                            <a class="list-group-item" id="base-tab3" data-toggle="tab" aria-controls="tab-3" href="#tab-3" aria-expanded="false">
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">Психотерапевти</h6>
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
