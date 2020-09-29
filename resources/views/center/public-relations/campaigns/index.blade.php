@extends('layouts.app')

@section('title')
    <title>Кампании | ДКЦ XI - София</title>
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
                                    <a href="{{ route('campaigns') }}">Кампании</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-8">
                    <div class="section-title">Кампании</div>
                </div>
            </div>

            @if (count($campaigns))
            <div class="row">
                <div class="col-md-8 publications">
                    @foreach($campaigns as $campaign)
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{ $campaign->title }}</h4>
                            </div>
                            <div class="card-footer text-muted">
                                <span><i class="fa fa-calendar"></i> {{ $campaign->published_on_string }}</span>
                            <a href="{{ config('app.url') }}/campaigns/{{$campaign->slug}}" class="read-more-link float-right">Прочети повече&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    @endforeach

                    {{ $campaigns->links() }}
                </div>

                <div class="col-md-4">
                    <div class="price-list-files-container">
                        <div class="list-group">
                            @foreach($latest_campaigns as $campaign)
                            <a href="{{ config('app.url') }}/campaigns/{{ $campaign->slug }}"
                                class="list-group-item"
                                title="{{ $campaign->title }}" >
                                <div class="media">
                                    <div class="media-body w-100">
                                        <h6 class="media-heading mb-0">{{ $campaign->title }}</h6>
                                        <p class="font-small-2 mb-0 text-muted">{{ $campaign->published_on_string }}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-8 publications">
                    Все още няма направени публикации.
                </div>
            </div>
            @endif

        </div>
    </div>
@endsection
