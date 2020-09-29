@extends('layouts.app')

@section('title')
    <title>{{ $publication->title }} | Кариери | ДКЦ XI - София</title>
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
                                <li class="breadcrumb-item">
                                    <a href="{{ route('careers') }}">Кариери</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="section-title">{{ $publication->title }}</div>
                    <div class="content-date"><span><i class="fa fa-calendar"></i> {{ $publication->published_on_string }}</span></div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="card publication">
                        <div class="card-section-content">

                            @if ($publication->rating)
                            <div class="publication-rating">
                                @for ($i = 0; $i < 5 ; $i++)
                                    @if($i < $publication->rating)
                                    <img class="rating-star" alt="{{ $i }}" src="{{ config('app.url') }}/app-assets/images/raty/star-on.png">
                                    @else
                                    <img class="rating-star" alt="{{ $i }}" src="{{ config('app.url') }}/app-assets/images/raty/star-off.png">
                                    @endif
                                @endfor
                            </div>
                            @endif

                            <div class="publication-position">{{ $publication->position }}</div>

                            {!! $publication->body !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="price-list-files-container">
                        <div class="list-group">
                            @foreach($last_careers as $career)
                            <a href="{{ config('app.url') }}/careers/{{ $career->slug }}"
                                class="list-group-item"
                                title="{{ $career->title }}" >
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">{{ $career->title }}</h6>
                                        <p class="font-small-2 mb-0 text-muted">{{ $career->published_on_string }}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
