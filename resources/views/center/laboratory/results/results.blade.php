@extends('layouts.app')

@section('title')
    <title>ДКЦ XI - София | Проверка на резултати</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-2-efh5kh0gx9.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/results-efh5kh0gx9.css">
    <link rel="stylesheet" href="{{ config('app.url') }}/assets/css/print-results-efh5kh0gx9.css">
@endsection

@section('content')
    <div class="main-content-wrapper results-page">

        <div id="print-btn" class="customizer-toggle do-not-print" title="@lang('results-blank-general.label_print_button')">
            <i class="ft-printer font-medium-3 fa  fa-fw white"></i>
        </div>

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
                                    <a href="{{ route('results') }}">Проверка на резултати</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Clinical laboratory --}}
            @if(!empty($examination_results['type1']))
            <div id="results" class="results-wrapper">
                @include('center.laboratory.results.partials.header')
                @include('center.laboratory.results.partials.patient-info')
                @include('center.laboratory.results.partials.doctor-info')
                @foreach($examination_results['type1'] as $result)
                    @include('center.laboratory.results.partials.clinical-laboratory')
                    @php $current_technological_group_id = $result['result_technological_group_id'] @endphp
                @endforeach
                @include('center.laboratory.results.partials.legend')
                @include('center.laboratory.results.partials.footer')
            </div>
            @endif
            {{-- End Clinical laboratory --}}

            {{-- Microbiology result --}}
            @if(!empty($examination_results['type2']))
                @foreach($examination_results['type2'] as  $result)
                <div id="results" class="results-wrapper">
                    @include('center.laboratory.results.partials.results.header')
                    @include('center.laboratory.results.partials.patient-info')
                    @include('center.laboratory.results.partials.doctor-info')
                    @include('center.laboratory.results.partials.microbiology')
                    @include('center.laboratory.results.partials.footer')
                </div>
                @endforeach
            @endif
            {{-- End Microbiology result --}}

            {{-- Cytology result --}}
            @if(!empty($examination_results['type3']))
                @foreach($examination_results['type3'] as  $result)
                <div id="results" class="results-wrapper">
                    @include('center.laboratory.results.partials.header')
                    @include('center.laboratory.results.partials.patient-info')
                    @include('center.laboratory.results.partials.doctor-info')
                    @include('center.laboratory.results.partials.cytology')
                    @include('center.laboratory.results.partials.footer')
                </div>
                @endforeach
            @endif
            {{-- End Cytology result --}}

            {{-- Pathology result --}}
            {{-- @foreach($lab_result as  $result)
                @include('partials.results.pathology')
            @endforeach --}}

            {{-- Roentgen result --}}
            @if(!empty($examination_results['type5']))
            @foreach($examination_results['type5'] as  $result)
                <div id="results" class="results-wrapper">
                    @include('center.laboratory.results.partials.header')
                    @include('center.laboratory.results.partials.patient-info')
                    @include('center.laboratory.results.partials.doctor-info')
                    @include('center.laboratory.results.partials.roentgen')
                    @include('center.laboratory.results.partials.footer')
                </div>
            @endforeach
            @endif
            {{-- End Roentgen result --}}

            {{-- Parasitology result --}}
            {{-- @foreach($lab_result as  $result)
                @include('partials.results.parasitology')
            @endforeach --}}

        </div>
    </div>
@endsection

@section('footer-scripts')
    <script>
        $('#print-btn').click(function () {
            window.print();
        });
    </script>
@endsection
