@extends('layouts.admin.app')

@section('title')
    <title>Редакция на лечебно заведение | ДКЦ XI - София</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-1-efh5kh0gx9.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/admin/admin.css">
@endsection

@section('content')
<div class="main-content-wrapper contacts">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('welcome') }}">Начало</a>
                            </li>
                            <li class="breadcrumb-item">
                                    <a href="{{ route('admin.home') }}">Административен панел</a>
                                </li>
                            <li class="breadcrumb-item active">
                                <a href="{{ route('admin.center.index') }}">Лечебно заведение</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-12 section-title">{{ $center->name_short }}</div>
        </div>
        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" method="POST" action="{{ route('admin.center.edit') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="center_id" value="{{ $center->id }}">

                                @role('moderator')
                                <input type="hidden" name="lat" value="{{ $center->lat }}">
                                <input type="hidden" name="lng" value="{{ $center->lng }}">
                                <input type="hidden" name="web_address" value="{{ $center->web_address }}">
                                @endrole

                                <div class="form-body">

                                    <div class="row">
                                        <div class="col-12">

                                            <h4 class="form-section"><i class="fa fa-hospital-o"></i> Основна информация</h4>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <label for="full_name">Пълно наименование <span class="legend-mark">*</span></label>
                                                        <input type="text" id="full_name" class="form-control  "
                                                            placeholder="Пълно наименование"
                                                            name="name"
                                                            value="{{ old('name') ? old('name') : $center->name }}">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="short_name">Кратко наименование</label>
                                                        <input type="text" id="short_name" class="form-control  "
                                                            placeholder="Кратко наименование"
                                                            name="name_short"
                                                            value="{{ old('name_short') ? old('name_short') : $center->name_short }}">
                                                        @if ($errors->has('name_short'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_short') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                @role('super', 'admin')
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="medical-base">Мед. база</label>
                                                        <input type="text" id="medical-base" class="form-control  "
                                                            name="medical_base"
                                                            value="{{ old('medical_base') ? old('medical_base') : $center->medical_base }}" >
                                                        @if ($errors->has('medical_base'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('medical_base') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                @endrole


                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label for="status">Статус</label>
                                                        @if ($center->active)
                                                            <div><button type="button" class="btn bg-success text-white">Активен</button></div>
                                                        @else
                                                            <div><button type="button" class="btn bg-danger text-white">Не активен</button></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row"><div class="col-12">&nbsp;</div></div>

                                            <h4 class="form-section"><i class="fa fa-map-marker"></i> Адрес</h4>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="city">Град <span class="legend-mark">*</span></label>
                                                        <input type="text" id="city" class="form-control  " placeholder="Град"
                                                            name="city"
                                                            value="{{ old('city') ? old('city') : $center->city }}">
                                                        @if ($errors->has('city'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('city') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="district">Район</label>
                                                        <input type="text" id="district" class="form-control  " placeholder="Район"
                                                            name="district"
                                                            value="{{ old('district') ? old('district') : $center->district }}">
                                                        @if ($errors->has('district'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('district') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="section">Ж.К.</label>
                                                        <input type="text" id="section" class="form-control  " placeholder="Ж.К."
                                                            name="section"
                                                            value="{{ old('section') ? old('section') : $center->section }}">
                                                        @if ($errors->has('section'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('section') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="post-code">П.К. <span class="legend-mark">*</span></label>
                                                        <input type="text" id="post-code" class="form-control  " placeholder="П.К."
                                                            name="post_code"
                                                            value="{{ old('post_code') ? old('post_code') : $center->post_code }}">
                                                        @if ($errors->has('post_code'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('post_code') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="street">Улица <span class="legend-mark">*</span></label>
                                                        <input type="text" id="street" class="form-control  " placeholder="Улица"
                                                            name="street"
                                                            value="{{ old('street') ? old('street') : $center->street }}">
                                                        @if ($errors->has('street'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('street') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="street_number">&numero; <span class="legend-mark">*</span></label>
                                                        <input type="text" id="street_number" class="form-control  "
                                                            name="street_number"
                                                            value="{{ old('street_number') ? old('street_number') : $center->street_number }}">
                                                        @if ($errors->has('street_number'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('street_number') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="additional-addr-info">Допълнителна информация за адрес</label>
                                                        <input type="text" id="additional-addr-info" class="form-control  " placeholder="Допълнителна информация за адрес"
                                                            name="additional_address_info"
                                                            value="{{ old('additional_address_info') ? old('additional_address_info') : $center->additional_address_info }}">
                                                        @if ($errors->has('additional_address_info'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('additional_address_info') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            @role('super', 'admin')
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="lat">Геогр. ширина (Latitude) <span class="legend-mark">*</span></label>
                                                        <input type="text" id="lat" class="form-control  "
                                                            name="lat"
                                                            value="{{ old('lat') ? old('lat') : $center->lat }}">
                                                        @if ($errors->has('lat'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('lat') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="longitude">Геогр. дължина (Longitude) <span class="legend-mark">*</span></label>
                                                        <input type="text" id="longitude" class="form-control  "
                                                            name="lng"
                                                            value="{{ old('lng') ? old('lng') : $center->lng }}"
                                                            @role('moderator')
                                                                disabled
                                                            @endrole>
                                                        @if ($errors->has('lng'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('lng') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @endrole

                                            <div class="row"><div class="col-12">&nbsp;</div></div>

                                            <h4 class="form-section"><i class="fa fa-phone-square"></i> Контакти</h4>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="phone_registry_1">Тел. регистратура I</label>
                                                        <input type="text" id="phone_registry_1" class="form-control  " placeholder="Тел. регистратура I"
                                                            name="phone_registry_1"
                                                            value="{{ old('phone_registry_1') ? old('phone_registry_1') : $center->phone_registry_1 }}">
                                                        @if ($errors->has('phone_registry_1'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_registry_1') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="phone_registry_2">Тел. регистратура II</label>
                                                        <input type="text" id="phone_registry_2" class="form-control  " placeholder="Тел. регистратура II"
                                                            name="phone_registry_2"
                                                            value="{{ old('phone_registry_2') ? old('phone_registry_2') : $center->phone_registry_2 }}">
                                                        @if ($errors->has('phone_registry_2'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_registry_2') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="phone_registry_3">Тел. регистратура III</label>
                                                        <input type="text" id="phone_registry_3" class="form-control  " placeholder="Тел. регистратура III"
                                                            name="phone_registry_3"
                                                            value="{{ old('phone_registry_3') ? old('phone_registry_3') : $center->phone_registry_3 }}">
                                                        @if ($errors->has('phone_registry_3'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_registry_3') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="fax">Fax</label>
                                                        <input type="text" id="fax" class="form-control  " placeholder="Fax"
                                                            name="fax"
                                                            value="{{ old('fax') ? old('fax') : $center->fax }}">
                                                        @if ($errors->has('fax'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('fax') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="manager">Управител <span class="legend-mark">*</span></label>
                                                        <input type="text" id="manager" class="form-control  " placeholder="Управител"
                                                            name="manager"
                                                            value="{{ old('manager') ? old('manager') : $center->manager }}">
                                                        @if ($errors->has('manager'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('manager') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_manager">Тел. управител</label>
                                                        <input type="text" id="phone_manager" class="form-control  " placeholder="Тел. управител"
                                                            name="phone_manager"
                                                            value="{{ old('phone_manager') ? old('phone_manager') : $center->phone_manager }}">
                                                        @if ($errors->has('phone_manager'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_manager') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="accountant">Гл. счетоводител</label>
                                                        <input type="text" id="accountant" class="form-control  " placeholder="Гл. счетоводител"
                                                            name="accountant"
                                                            value="{{ old('accountant') ? old('accountant') : $center->accountant }}">
                                                        @if ($errors->has('accountant'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('accountant') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_accountant">Тел. гл. счетоводител</label>
                                                        <input type="text" id="phone_accountant" class="form-control  " placeholder="Тел. гл. счетоводител"
                                                            name="phone_accountant"
                                                            value="{{ old('phone_accountant') ? old('phone_accountant') : $center->phone_accountant }}">
                                                        @if ($errors->has('phone_accountant'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_accountant') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="senior_nurse_1">Старша мед. сестра I</label>
                                                        <input type="text" id="senior_nurse_1" class="form-control  " placeholder="Старша мед. сестра I"
                                                            name="senior_nurse_1"
                                                            value="{{ old('senior_nurse_1') ? old('senior_nurse_1') : $center->senior_nurse_1 }}">
                                                        @if ($errors->has('senior_nurse_1'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('senior_nurse_1') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_senior_nurse_1">Тел. старша мед. сестра I</label>
                                                        <input type="text" id="phone_senior_nurse_1" class="form-control  " placeholder="Тел. старша мед. сестра I"
                                                            name="phone_senior_nurse_1"
                                                            value="{{ old('phone_senior_nurse_1') ? old('phone_senior_nurse_1') : $center->phone_senior_nurse_1 }}">
                                                        @if ($errors->has('phone_senior_nurse_1'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_senior_nurse_1') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="senior_nurse_2">Старша мед. сестра II</label>
                                                        <input type="text" id="senior_nurse_2" class="form-control  " placeholder="Старша мед. сестра II"
                                                            name="senior_nurse_2"
                                                            value="{{ old('senior_nurse_2') ? old('senior_nurse_2') : $center->senior_nurse_2 }}">
                                                        @if ($errors->has('senior_nurse_2'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('senior_nurse_2') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_senior_nurse_2">Тел. старша мед. сестра II</label>
                                                        <input type="text" id="phone_senior_nurse_2" class="form-control  " placeholder="Тел. старша мед. сестра II"
                                                            name="phone_senior_nurse_2"
                                                            value="{{ old('phone_senior_nurse_2') ? old('phone_senior_nurse_2') : $center->phone_senior_nurse_2 }}">
                                                        @if ($errors->has('phone_senior_nurse_2'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_senior_nurse_2') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="senior_nurse_3">Старша мед. сестра III</label>
                                                        <input type="text" id="senior_nurse_3" class="form-control  " placeholder="Старша мед. сестра III"
                                                            name="senior_nurse_3"
                                                            value="{{ old('senior_nurse_3') ? old('senior_nurse_3') : $center->senior_nurse_3 }}">
                                                        @if ($errors->has('senior_nurse_3'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('senior_nurse_3') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone_senior_nurse_3">Тел. старша мед. сестра III</label>
                                                        <input type="text" id="phone_senior_nurse_3" class="form-control  " placeholder="Тел. старша мед. сестра III"
                                                            name="phone_senior_nurse_3"
                                                            value="{{ old('phone_senior_nurse_3') ? old('phone_senior_nurse_3') : $center->phone_senior_nurse_3 }}" >
                                                        @if ($errors->has('phone_senior_nurse_3'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('phone_senior_nurse_3') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row"><div class="col-12">&nbsp;</div></div>

                                            <h4 class="form-section"><i class="fa fa-clock-o"></i> Работно време и посещения</h4>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="business_hours_start">Начало работно време</label>
                                                        <input type="text" id="business_hours_start" class="form-control  " placeholder="00:00"
                                                            name="business_hours_start"
                                                            value="{{ old('business_hours_start') ? old('business_hours_start') : $center->business_hours_start }}">
                                                        @if ($errors->has('business_hours_start'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('business_hours_start') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="business_hours_end">Край работно време</label>
                                                        <input type="text" id="business_hours_end" class="form-control  " placeholder="00:00"
                                                            name="business_hours_end"
                                                            value="{{ old('business_hours_end') ? old('business_hours_end') : $center->business_hours_end }}">
                                                        @if ($errors->has('business_hours_end'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('business_hours_end') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="visiting_hours_start">Начало посещения</label>
                                                        <input type="text" id="visiting_hours_start" class="form-control  " placeholder="00:00"
                                                            name="visiting_hours_start"
                                                            value="{{ old('visiting_hours_start') ? old('visiting_hours_start') : $center->visiting_hours_start }}">
                                                        @if ($errors->has('visiting_hours_start'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('visiting_hours_start') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="visiting_hours_end">Край посещения</label>
                                                        <input type="text" id="visiting_hours_end" class="form-control  " placeholder="00:00"
                                                            name="visiting_hours_end"
                                                            value="{{ old('visiting_hours_end') ? old('visiting_hours_end') : $center->visiting_hours_end }}">
                                                        @if ($errors->has('visiting_hours_end'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('visiting_hours_end') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="non_working_days">Неработни дни</label>
                                                        <input type="text" id="non_working_days" class="form-control  " placeholder="Неработни дни"
                                                            name="non_working_days"
                                                            value="{{ old('non_working_days') ? old('non_working_days') : $center->non_working_days }}">
                                                        @if ($errors->has('non_working_days'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('non_working_days') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row"><div class="col-12">&nbsp;</div></div>

                                            <h4 class="form-section"><i class="fa fa-globe"></i> Уеб и социални мрежи</h4>
                                            <div class="row">

                                                @role('super', 'admin')
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="web_address">Уеб сайт <span class="legend-mark">*</span></label>
                                                        <input type="text" id="web_address" class="form-control  " placeholder="Уеб сайт"
                                                            name="web_address"
                                                            value="{{ old('web_address') ? old('web_address') : $center->web_address }}"
                                                            @role('moderator')
                                                                disabled
                                                            @endrole>
                                                        @if ($errors->has('web_address'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('web_address') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                @endrole

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="email">Електронна поща <span class="legend-mark">*</span></label>
                                                        <input type="text" id="email" class="form-control  " placeholder="Електронна поща"
                                                            name="email"
                                                            value="{{ old('email') ? old('email') : $center->email }}">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            @role('super', 'admin')
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="web_myhealth_address">Линк към Здравен портал (myhealth.bg)</label>
                                                        <input type="text" id="web_myhealth_address" class="form-control  " placeholder="Линк към Здравен портал"
                                                            name="web_myhealth_address"
                                                            value="{{ old('web_myhealth_address') ? old('web_myhealth_address') : $center->web_myhealth_address }}"
                                                            @role('moderator')
                                                                disabled
                                                            @endrole>
                                                        @if ($errors->has('web_myhealth_address'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('web_myhealth_address') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="social_fb">Линк към Facebook</label>
                                                        <input type="text" id="social_fb" class="form-control  " placeholder="Линк към Facebook"
                                                            name="social_fb"
                                                            value="{{ old('social_fb') ? old('social_fb') : $center->social_fb }}"
                                                            @role('moderator')
                                                                disabled
                                                            @endrole>
                                                        @if ($errors->has('social_fb'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('social_fb') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="social_gplus">Линк към Google+</label>
                                                        <input type="text" id="social_gplus" class="form-control  " placeholder="Линк към Google+"
                                                            name="social_gplus"
                                                            value="{{ old('social_gplus') ? old('social_gplus') : $center->social_gplus }}"
                                                            @role('moderator')
                                                                disabled
                                                            @endrole>
                                                        @if ($errors->has('social_gplus'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('social_gplus') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="social_twitter">Линк към Twitter</label>
                                                        <input type="text" id="social_twitter" class="form-control  " placeholder="Линк към Twitter"
                                                            name="social_twitter"
                                                            value="{{ old('social_twitter') ? old('social_twitter') : $center->social_twitter }}"
                                                            @role('moderator')
                                                                disabled
                                                            @endrole>
                                                        @if ($errors->has('social_twitter'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('social_twitter') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="social_youtube">Линк към YouTube</label>
                                                        <input type="text" id="social_youtube" class="form-control  " placeholder="Линк към YouTube"
                                                            name="social_youtube"
                                                            value="{{ old('social_youtube') ? old('social_youtube') : $center->social_youtube }}"
                                                            @role('moderator')
                                                                disabled
                                                            @endrole>
                                                        @if ($errors->has('social_youtube'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('social_youtube') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @endrole
                                        </div>

                                    </div>

                                </div>
                                <div class="form-actions right">
                                    <a href="{{ route('admin.center.index') }}">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Откажи
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check-square-o"></i> Запази
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection
