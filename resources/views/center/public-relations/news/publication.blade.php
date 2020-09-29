@extends('layouts.app')

@section('title')
    <title>{{ $publication->title }} | Новини | ДКЦ XI - София</title>
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
                                    <a href="{{ route('news') }}">Новини</a>
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
                        <div class="card-section-content">{!! $publication->body !!}</div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="price-list-files-container">
                        <div class="list-group">
                            @foreach($last_news as $news)
                            <a href="{{ config('app.url') }}/news/{{ $news->slug }}"
                                class="list-group-item"
                                title="{{ $news->title }}" >
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">{{ $news->title }}</h6>
                                        <p class="font-small-2 mb-0 text-muted">{{ $news->published_on_string }}</p>
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
