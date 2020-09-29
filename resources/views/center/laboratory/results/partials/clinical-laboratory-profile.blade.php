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
        <td class="test-name" colspan="4">{{ $result['result_name'] }}</td>
    </tr>
@else
    <tr>
        <td class="test-name" colspan="4">{{ $result['result_name'] }}</td>
    </tr>
@endif

@foreach($result['result_profile_data'] as $profile)
    <tr>
        <td class="test-name">
            <span class="test-name-profile-spacer">&nbsp;</span>
            {{ $profile['profile_result_name'] }}
        </td>
        <td class="test-result">
            @if($profile['profile_result_display_low_high_status'] && $profile['profile_result_low_status'])
                <span class="status low" title="@lang('clinical-laboratory.legend.low_title')">L</span>
            @elseif($profile['profile_result_display_low_high_status'] && $profile['profile_result_high_status'])
                <span class="status high" title="@lang('clinical-laboratory.legend.high_title')">H</span>
            @elseif(!$profile['profile_result_completed'])
                <span class="status " title="@lang('clinical-laboratory.label_status_not_ready_title')">
                    <i class="fa fa-flask"></i>
                </span>
            @endif
            {{ $profile['profile_result_value'] }}
        </td>
        <td class="test-units">{{ $profile['profile_result_units'] }}</td>
        <td class="test-ref-values">{{ $profile['profile_result_reference_values'] }}</td>
    </tr>
@endforeach