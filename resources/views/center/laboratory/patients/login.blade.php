@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Проверка на резултати - Вход за пациенти</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-2-efh5kh0gx9.css">
@endsection

@section('content')

    <div class="main-content-wrapper results-page">
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
                                    <a href="{{ route('results') }}">Проверка на резултати</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Проверка на резултати</div>
            </div>

            <div class="row">
                <div class="col-md-8">

                    <div class="results-wrapper">

                    <form class="form results-login" method="post" action="{{ route('patient-results') }}" >

                            {{ csrf_field() }}

                            <div class="form-body">
                                <h4 class="form-section results-section-title"><i class="fa fa-user"></i> Вход за пациенти</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput1">ID номер</label>
                                            <input type="text"
                                                class="form-control"
                                                id="projectinput1"
                                                name="idExaminationSample"
                                                value="{{ old('idExaminationSample') }}"
                                                placeholder="ID номер"
                                                autocomplete="off" >
                                            @if ($errors->has('idExaminationSample'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('idExaminationSample') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="projectinput2">Парола</label>
                                            <input type="password"
                                                id="projectinput2"
                                                class="form-control"
                                                name="examinationPassword"
                                                value=""
                                                placeholder="Парола"
                                                autocomplete="off" >
                                            @if ($errors->has('examinationPassword'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('examinationPassword') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-check-square-o"></i> Вход
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="results-links-container">
                        <div class="list-group ">
                        <a href="{{ route('results') }}" class="list-group-item active" >
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">Вход за пациенти</h6>
                                    </div>
                                </div>
                            </a>

                            <a href="{{ route('doctors') }}" class="list-group-item " >
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">Вход за лекари</h6>
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

@section('footer-scripts')
<script>
    // $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
</script>
@endsection
