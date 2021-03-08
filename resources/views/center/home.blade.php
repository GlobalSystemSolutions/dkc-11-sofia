@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Начало</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/home-qjlx7g1f0t.css">
    <style>
        .promotion-text.subtitle {
            font-size: 14px;
            opacity: 0.9;
            margin-top: 6px;
            margin-bottom: 6px;
        }
    </style>
@endsection

@section('content')

    <div class="main-content-wrapper">

            <div class="page-hero">
                <div class="container custom-hero">
                    {{-- hero-salutation --}}

                    {{-- <div class="page-hero-salutation">
                        <div class="salutation-top-title">Добре дошли!</div>
                        <div class="salutation-text">"ДКЦ XI - София" ЕООД е разположен в централната част на столицата в масивна триетажна сграда. Доброто местоположение и комуникативните възможности, създават удобства и улесняват достъпа на пациенти.</div>
                        <div><a href="{{ route('about-us') }}" class="more-info">Прочети повече</a></div>
                    </div> --}}


                    {{-- promotion --}}
                    <div class="promotion">
                        <div class="page-hero-promo">
                            <div class="campaign-title promo">
                                <span class="promotion-icon"><i class="fa fa-gift"></i></span>Текущи промоции
                            </div>
                            <div class="promotion-container">
                                <!-- <div class="promotion-dates">8 Октомври - 8 Ноември</div> -->
                                <div class="promotion-text subtitle">Текущи промоции</div>
                                <!-- <p class="promotion-text">БЕЗПЛАТНИ мамологични прегледи с най-иновативния апарат Braster Pro за ранна диагностика на рак на гърдата</p> -->
                                <div><a href="https://www.dkc11-sofia.com/news/tekushchi-promotsii-bcgnwzxdzhfjhjr5" class="more-info">Прочети повече</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if (count($news_collection))
            <div class="container custom">
                <div class="row pb-1">
                    <div class="col-7 align-middle">
                        <span class="news-icon mr-1"><i class="fa fa-newspaper-o"></i></span>
                        <span class="campaign-title">Новини</span>
                    </div>
                    <div class="col-5">
                        <div class="align-middle text-right">
                            <a href="{{ route('news') }}" class="load-more">Виж Всички</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 section-content">
                        <div class="card-section">
                            @foreach($news_collection as $news)
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ $news->title }}</h4>
                                    </div>
                                    <div class="card-footer text-muted">
                                        <span><i class="fa fa-calendar"></i> {{ $news->published_on_string }}</span>
                                    <a href="{{ config('app.url') }}/news/{{$news->slug}}" class="read-more-link float-right">Прочети повече&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if(count($campaigns))
            <div class="container custom">
                <div class="row pb-1">
                    <div class="col-7 align-middle">
                        <span class="campaign-icon mr-1"><i class="fa fa-rss"></i></span>
                        <span class="campaign-title">Кампании</span>
                    </div>
                    <div class="col-5">
                        <div class="align-middle text-right">
                            <a href="{{ route('campaigns') }}" class="load-more">Виж Всички</a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 section-content">
                        <div class="card-section">

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
                        </div>
                    </div>
                </div>
            </div>
            @endif


    </div>
@endsection
