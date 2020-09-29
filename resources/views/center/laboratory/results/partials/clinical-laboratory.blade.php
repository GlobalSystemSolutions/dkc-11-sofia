<table class="results-table type-1">

    @if($result['result_profile_data'])
        @include('center.laboratory.results.partials.clinical-laboratory-profile')
    @else

        @if($current_technological_group_id != $result['result_technological_group_id'])
            <tr>
                <td class="group-name" colspan="4">{{ $result['result_technological_group_name'] }}</td>
            </tr>
            <tr>
                <td class="test-name-header">@lang('clinical-laboratory.label_test_name')</td>
                <td class="test-result-header">@lang('clinical-laboratory.label_result')</td>
                <td class="test-units-header">@lang('clinical-laboratory.label_units')</td>
                <td class="test-ref-values-header">@lang('clinical-laboratory.label_reference_values')</td>
            </tr>
            <tr>
                <td class="test-name">{{ $result['result_name'] }}</td>
                <td class="test-result">
                    @if($result['result_display_low_high_status'] && $result['result_low_status'])
                        <span class="status low" title="@lang('clinical-laboratory.legend.low_title')">L</span>
                    @elseif($result['result_display_low_high_status'] && $result['result_high_status'])
                        <span class="status high" title="@lang('clinical-laboratory.legend.high_title')">H</span>
                    @elseif(!$result['result_completed'])
                        <span class="status " title="@lang('clinical-laboratory.label_status_not_ready_title')">
                            <i class="fa fa-flask"></i>
                        </span>
                    @endif
                    {{ $result['result_value'] }}
                </td>
                <td class="test-units">{{ $result['result_units'] }}</td>
                <td class="test-ref-values">{{ $result['result_reference_values'] }}</td>
            </tr>
        @else
            <tr>
                <td class="test-name">{{ $result['result_name'] }}</td>
                <td class="test-result">
                    @if($result['result_display_low_high_status'] && $result['result_low_status'])
                        <span class="status low" title="@lang('clinical-laboratory.legend.low_title')">L</span>
                    @elseif($result['result_display_low_high_status'] && $result['result_high_status'])
                        <span class="status high" title="@lang('clinical-laboratory.legend.high_title')">H</span>
                    @elseif(!$result['result_completed'])
                        <span class="status " title="@lang('clinical-laboratory.label_status_not_ready_title')">
                            <i class="fa fa-flask"></i>
                        </span>
                    @endif
                    {{ $result['result_value'] }}
                </td>
                <td class="test-units">{{ $result['result_units'] }}</td>
                <td class="test-ref-values">{{ $result['result_reference_values'] }}</td>
            </tr>
        @endif
    @endif
</table>
