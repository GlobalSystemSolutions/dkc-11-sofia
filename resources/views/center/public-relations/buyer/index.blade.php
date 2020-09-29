@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Профил на купувача</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-1-efh5kh0gx9.css">
@endsection

@section('content')
    <div class="hero btLightSkin">&nbsp;</div>

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
                                    <a href="{{ route('buyer-profile') }}">Профил на купувача</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 section-title">Профил на купувача</div>
            </div>

            @if(count($buyer_types))
            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="main-menu-links-container">
                        @foreach($buyer_types as $buyer_type)
                        <a href="{{ config('app.url') }}/buyer-profile/{{ $buyer_type->slug }}">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">{{ $buyer_type->name }}</h4>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            @else
                <div class="row">
                    <div class="col-12 col-md-8">Все още няма създадени раздели.
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
