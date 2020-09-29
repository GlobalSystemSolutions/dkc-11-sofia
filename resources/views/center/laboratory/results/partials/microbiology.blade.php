<table class="results-table type-2">
    <tr>
        <td class="group-name" colspan="2">@lang('microbiology.label_examination_title')</td>
    </tr>
    <tr>
        <td colspan="2">
            <div><strong>@lang('microbiology.label_material_type')</strong>:</div>
            <div class="result-field">{{ $result['result_material_type'] }}</div>
            <br>@if(!$result['result_material_type'])<br>@endif
            <div><strong>@lang('microbiology.label_date_of_collection')</strong>: {{ Carbon\Carbon::parse($result['result_date_of_collection'])->format('d.m.Y') }}</div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div><strong>@lang('microbiology.label_cultivation_of_microorganisms')</strong>:</div>
            <div class="result-field">1. {{ $result['result_cultivation_of_microorganisms_1'] }}</div>
            <div class="result-field">2. {{ $result['result_cultivation_of_microorganisms_2'] }}</div>
            <div class="result-field">3. {{ $result['result_cultivation_of_microorganisms_3'] }}</div>
        </td>
    </tr>
    <tr>
        <td class="left-column">
            <div><strong>@lang('microbiology.label_isolated_microorganisms')</strong>:</div>
            <div class="result-field">1. {{ $result['result_isolated_microorganisms_1'] }}</div>
            <div class="result-field">2. {{ $result['result_isolated_microorganisms_2'] }}</div>
            <div class="result-field">3. {{ $result['result_isolated_microorganisms_3'] }}</div>
        </td>
        <td class="right-column" rowspan="2">
            {{-- Antibiogram --}}
            @if($result['result_antibiogram'])
                <table class="antibiogram">
                    <thead>
                        <tr>
                            <th colspan="8" class="antibiogram-header">
                                @lang('microbiology.label_antibiogram_header_title')
                            </th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <td class="antibiogram-footer" colspan="8">@lang('microbiology.label_antibiogram_footer')</td>
                        </tr>
                    </tfoot>
                    <tr>
                        <td class="antibiotic-header-name-column">@lang('microbiology.label_antibiogram_column_name')</td>
                        <td class="antibiotic-interpretation"><strong>1</strong></td>
                        <td class="antibiotic-interpretation"><strong>2</strong></td>
                        <td class="antibiotic-interpretation"><strong>3</strong></td>
                        <td class="antibiotic-header-name-column">@lang('microbiology.label_antibiogram_column_name')</td>
                        <td class="antibiotic-interpretation"><strong>1</strong></td>
                        <td class="antibiotic-interpretation"><strong>2</strong></td>
                        <td class="antibiotic-interpretation"><strong>3</strong></td>
                    </tr>
                    @php $current_antibiogram_row = 0 @endphp
                    <tr>
                    @foreach($result['result_antibiogram'] as $antibiogram)
                        @if(($current_antibiogram_row % 2) == 0) </tr><tr> @php $current_antibiogram_row = 0 @endphp @endif
                        <td class="antibiotic-name-column">{{ $antibiogram['antibiotic_name'] }}</td>
                        <td class="antibiotic-interpretation">{{ $antibiogram['antibiotic_interpretation_1'] }}</td>
                        <td class="antibiotic-interpretation">{{ $antibiogram['antibiotic_interpretation_2'] }}</td>
                        <td class="antibiotic-interpretation">{{ $antibiogram['antibiotic_interpretation_3'] }}</td>
                        @php $current_antibiogram_row += 1 @endphp
                    @endforeach
                    </tr>
                </table>
            @endif
        </td>
    </tr>
    <tr>
        <td class="left-column">
            <div><strong>@lang('microbiology.label_microbial_number')</strong>:</div>
            <div class="result-field">{{ $result['result_microbial_number'] }}</div>
            <br>@if(!$result['result_microbial_number'])<br>@endif
            <div><strong>@lang('microbiology.label_quantification')</strong>:</div>
            <div class="result-field">{{ $result['result_quantification_1'] }}</div>
            <br>@if(!$result['result_quantification_1'])<br>@endif
            <div><strong>@lang('microbiology.label_bacteriuria')</strong>:</div>
            <div class="result-field">
                {{ $result['result_bacteriuria'] }}
                @if(!$result['result_bacteriuria']) <span class="result-empty-space">&nbsp;</span> @endif
                @lang('microbiology.label_bacteriuriа_units')
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div><strong>@lang('microbiology.label_microscopic_preparation')</strong>:</div>
            <div class="result-field">{{ $result['result_microscopic_preparation'] }}</div>
            <br>@if(!$result['result_microscopic_preparation'])<br>@endif
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div><strong>@lang('microbiology.label_microbiology_result')</strong>:</div>
            <div class="result-field">{{ $result['result_microbilogy_result'] }}</div>
            <br>@if(!$result['result_microbilogy_result'])<br>@endif
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <div><strong>@lang('microbiology.label_recommendations')</strong>:</div>
            <div class="result-field">{{ $result['result_recommendations'] }}</div>
            <br>@if(!$result['result_recommendations'])<br>@endif
        </td>
    </tr>
</table>