@extends('layouts.admin.app')

@section('title')
    <title>Административен панел | ДКЦ XI - София</title>
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
                                <li class="breadcrumb-item active">
                                    <a href="{{ route('admin.home') }}">Административен панел</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Административен панел</div>
            </div>


            <div class="row admin-panel">
                @role('super', 'admin')
                <div class="col-md-4">
                    <a href="{{ route('admin.center.index') }}">
                        <div class="card text-white bg-success">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-hospital-o"></i></span>
                                <span class="card-title">Лечебно заведение</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('admin.doctors') }}">
                        <div class="card text-white bg-blue">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-user-md"></i></span>
                                <span class="card-title">Лекарски състав</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('admin.prices') }}">
                        <div class="card text-white bg-warning">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-money"></i></span>
                                <span class="card-title">Ценоразпис</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endrole

                <div class="col-md-4">
                    <a href="{{ route('admin.news.index') }}">
                        <div class="card text-white bg-info">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-newspaper-o"></i></span>
                                <span class="card-title">Новини</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('admin.campaigns.index') }}">
                        <div class="card text-white bg-pink bg-lighten-1">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-bullhorn"></i></span>
                                <span class="card-title">Кампании</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('admin.careers.index') }}">
                        <div class="card text-white bg-teal bg-lighten-1">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-road"></i></span>
                                <span class="card-title">Кариери</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('admin.buyer.index') }}">
                        <div class="card text-white bg-blue-grey bg-lighten-1">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-handshake-o"></i></span>
                                <span class="card-title">Профил на купувача</span>
                            </div>
                        </div>
                    </a>
                </div>

                @role('super')
                <div class="col-md-4">
                    <a href="{{ route('admin.laboratories') }}">
                        <div class="card text-white bg-amber bg-lighten-1">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-flask"></i></span>
                                <span class="card-title">Лаборатории</span>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="{{ route('admin.users') }}">
                        <div class="card text-white bg-cyan">
                            <div class="card-header">
                                <span class="card-icon"><i class="fa fa-users"></i></span>
                                <span class="card-title">Потребители</span>
                            </div>
                        </div>
                    </a>
                </div>
                @endrole

            </div>

        </div>
    </div>
@endsection
