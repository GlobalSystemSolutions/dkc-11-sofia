@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | {{ $doctor_record['doctor_title'] }} {{ $doctor_record['doctor_first_name'] }} {{ $doctor_record['doctor_last_name'] }}</title>
@endsection

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/pickers/datetime/bootstrap-datetimepicker.css">

    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/pickers/daterange/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/pickers/daterange/daterangepicker.css">
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-2-efh5kh0gx9.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/results-efh5kh0gx9.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/print-results-efh5kh0gx9.css">
@endsection

@section('content')
    <div class="main-content-wrapper results-page">

        {{-- <div id="print-btn" class="customizer-toggle do-not-print" title="@lang('results-blank-general.label_print_button')">
            <i class="ft-printer font-medium-3 fa  fa-fw white"></i>
        </div> --}}

        <div class="container-fluid">
            <div class="row do-not-print">
                <div class="col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('welcome') }}">Начало</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <a href="{{ route('doctors') }}">Вход за лекари</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">
                    {{ $doctor_record['doctor_title'] }} {{ $doctor_record['doctor_first_name'] }} {{ $doctor_record['doctor_last_name'] }}

                    <div class="doctor-record-info">
                        <strong>@lang('doctor.label_uin')</strong>: {{ $doctor_record['doctor_uin'] }}
                        <span class="spacer"></span>
                       <strong>@lang('doctor.label_practice')</strong>: {{ $doctor_record['doctor_practice'] }}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                @lang('doctor.label_published_referrals'):
                            </h4>
                            <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a class="menu-toggle hidden-xs is-active" ><i class="ft-maximize"></i></a></li>
                                </ul>
                            </div>

                            <div class="search-section">
                                <div class="repeater-default">
                                    <div data-repeater-list="car">
                                        <div data-repeater-item="">
                                        <form class="form row add-foods" method="post" action="{{ route('doctor-patients-search') }}">

                                                {{ csrf_field() }}

                                                <input type="hidden" name="doctor_uin" value="{{ $request_data['doctorUIN'] }}">
                                                <input type="hidden" name="doctor_password" value="{{ $request_data['doctorPassword'] }}">

                                                <div class="form-group{{ $errors->has('date_from') ? ' has-error' : '' }} mb-1 col-sm-12 col-md-2">
                                                    <label for="date_from">@lang('doctor.label_date_from'):</label>
                                                    <br>
                                                    <input type="text"
                                                        class="form-control singledate"
                                                        id="date_from"
                                                        name="date_from"
                                                        value="{{ $request_data['dateFrom'] }}"
                                                        autocomplete="off" >

                                                        @if ($errors->has('date_from'))
                                                            <span class="help-block">
                                                                {{ $errors->first('date_from') }}
                                                            </span>
                                                        @endif
                                                </div>

                                                <div class="form-group{{ $errors->has('date_to') ? ' has-error' : '' }} mb-1 col-sm-12 col-md-2">
                                                    <label for="date_to">@lang('doctor.label_date_to'):</label>
                                                    <br>
                                                    <input type="text"
                                                        class="form-control singledate"
                                                        id="date_to"
                                                        name="date_to"
                                                        value="{{ $request_data['dateTo'] }}"
                                                        autocomplete="off">

                                                        @if ($errors->has('date_to'))
                                                            <span class="help-block">
                                                                {{ $errors->first('date_to') }}
                                                            </span>
                                                        @endif
                                                </div>

                                                <div class="form-group{{ $errors->has('patient_egn') ? ' has-error' : '' }} mb-1 col-sm-12 col-md-2">
                                                    <label for="patient_egn">@lang('doctor.label_egn'):</label>
                                                    <br>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="patient_egn"
                                                        placeholder="@lang('doctor.label_egn')"
                                                        name="patient_egn"
                                                        value="{{ $request_data['patientEgn'] }}"
                                                        maxlength="10"
                                                        autocomplete="off" >

                                                        @if ($errors->has('patient_egn'))
                                                            <span class="help-block">
                                                                {{ $errors->first('patient_egn') }}
                                                            </span>
                                                        @endif
                                                </div>

                                                <div class="form-group{{ $errors->has('patient_last_name') ? ' has-error' : '' }} mb-1 col-sm-12 col-md-2">
                                                    <label for="patient_last_name">@lang('doctor.label_last_name'):</label>
                                                    <br>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="patient_last_name"
                                                        placeholder="@lang('doctor.label_last_name')"
                                                        name="patient_last_name"
                                                        value="{{ $request_data['patientLastName'] }}"
                                                        autocomplete="off">

                                                        @if ($errors->has('patient_last_name'))
                                                            <span class="help-block">
                                                                {{ $errors->first('patient_last_name') }}
                                                            </span>
                                                        @endif
                                                </div>

                                                <div class="form-group{{ $errors->has('cipher') ? ' has-error' : '' }} mb-1 col-sm-12 col-md-2">
                                                    <label for="cipher">@lang('doctor.label_cipher'):</label>
                                                    <br>
                                                    <input type="text"
                                                        class="form-control"
                                                        id="cipher"
                                                        placeholder="@lang('doctor.label_cipher')"
                                                        name="cipher"
                                                        value="{{ $request_data['cipher'] }}"
                                                        autocomplete="off">

                                                        @if ($errors->has('cipher'))
                                                            <span class="help-block">
                                                                {{ $errors->first('cipher') }}
                                                            </span>
                                                        @endif
                                                </div>

                                                <div class="form-group mb-1 col-sm-12 col-md-2 text-center">
                                                    <button type="submit" class="btn search-btn" > <i class="ft-search"></i> @lang('doctor.label_search_button')</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-content collapse show" style="">
                            <div class="card-body card-dashboard">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="refferals-table" class="table table-striped table-bordered zero-configuration" data-order='[[ 3, "asc" ]]'>
                                            <thead>
                                                <tr>
                                                    <th>@lang('doctor.label_id_examination_sample')</th>
                                                    <th>@lang('doctor.label_password')</th>
                                                    <th>@lang('doctor.label_mdd_number')</th>
                                                    <th>@lang('doctor.label_date_of_issue')</th>
                                                    <th>@lang('doctor.label_date_of_execution')</th>
                                                    <th>@lang('doctor.label_egn_patient')</th>
                                                    <th>@lang('doctor.label_patient_first_name')</th>
                                                    <th>@lang('doctor.label_patient_middle_name')</th>
                                                    <th>@lang('doctor.label_patient_last_name')</th>
                                                    {{-- <th>Схема на<br>продажба</th> --}}
                                                    <th>@lang('doctor.label_result')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($doctor_referrals as $referral)
                                                <tr>
                                                    <td>{{ $referral['referral_examination_sample_id'] }}</td>
                                                    <td>{{ $referral['referral_patient_id'] }}</td>
                                                    <td>{{ $referral['referral_mdd_number'] }}</td>
                                                    <td>{{ Carbon\Carbon::parse($referral['referral_date_of_issue'])->format('d.m.Y') }}</td>
                                                    <td>{{ Carbon\Carbon::parse($referral['referral_date'])->format('d.m.Y') }}</td>
                                                    <td>{{ $referral['referral_patient_egn'] }}</td>
                                                    <td>{{ $referral['referral_patient_first_name'] }}</td>
                                                    <td>{{ $referral['referral_patient_middle_name'] }}</td>
                                                    <td>{{ $referral['referral_patient_last_name'] }}</td>
                                                    <form method="post" action="{{ route('patient-results') }}" target="_blank">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="idExaminationSample" value="{{ $referral['referral_examination_sample_id'] }}">
                                                        <input type="hidden" name="examinationPassword" value="{{ $referral['referral_patient_id'] }}">
                                                        @if($referral['referral_completed'])
                                                        <td>
                                                            <button type="submit" class="btn bg-success bg-darken-1 results-btn" title="@lang('doctor.label_result_ready')"> <i class="ft-check-square"></i> @lang('doctor.label_result')</button>
                                                        </td>
                                                        @else
                                                        <td>
                                                            <button type="submit" class="btn bg-danger bg-darken-2 results-btn" title="@lang('doctor.label_result_not_ready')" > <i class="ft-x-square"></i> @lang('doctor.label_result')</button>
                                                        </td>
                                                        @endif
                                                    </form>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            {{-- <tfoot>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Парола</th>
                                                    <th>МДД<br>номер</th>
                                                    <th>Дата на<br>издаване</th>
                                                    <th>Дата на<br>изпълнение</th>
                                                    <th>ЕГН<br>пациент</th>
                                                    <th>Име<br>пациент</th>
                                                    <th>Презиме<br>пациент</th>
                                                    <th>Фамилия<br>пациент</th>

                                                    <th>Резултат</th>
                                                </tr>
                                            </tfoot> --}}
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('footer-scripts')
    <script src="{{ config('app.url') }}/app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>
    @if(App::isLocale('bg'))
        <script src="{{ config('app.url') }}/assets/js/datatables-config-bg.js" type="text/javascript"></script>
        <script src="{{ config('app.url') }}/assets/js/datepicker-config-bg.js" type="text/javascript"></script>
    @elseif(App::isLocale('en'))
        <script src="{{ config('app.url') }}/assets/js/datepicker-config-en.js" type="text/javascript"></script>
    @endif
    <script src="{{ config('app.url') }}/app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js"
  type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/pickers/daterange/daterangepicker.js"
  type="text/javascript"></script>




    {{-- <script type="text/javascript">
        $('.datepicker').pickadate({
            monthsFull: [ 'Януари','Февруари','Март','Април','Май','Юни','Юли','Август','Септември','Октомври','Ноември','Декември' ],
            monthsShort: [ 'Янр','Фев','Мар','Апр','Май','Юни','Юли','Авг','Сеп','Окт','Ное','Дек' ],
            weekdaysFull: [ 'неделя', 'понеделник', 'вторник', 'сряда', 'четвъртък', 'петък', 'събота' ],
            weekdaysShort: [ 'нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб' ],
            today: 'Днес',
            clear: 'Изтрий',
            firstDay: 1,
            format: 'd.m.yyyy',
            formatSubmit: 'yyyy/mm/dd',
            close: 'Затвори',

            // Accessibility labels
            labelMonthNext: 'Следващ месец',
            labelMonthPrev: 'Предишен месец',
            labelMonthSelect: 'Изберете месец',
            labelYearSelect: 'Изберете година',
        });
    </script> --}}
    <script>
        $('#print-btn').click(function () {
            window.print();
        });
    </script>
@endsection
