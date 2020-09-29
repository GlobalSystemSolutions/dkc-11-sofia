<table class="doctor-info">
    <tr>
        <td class="doctor-label">@lang('doctor.label_doctor'):</td>
        <td class="doctor-name">
            {{ $general_examination_data['doctor_first_name'] }}
            {{ $general_examination_data['doctor_last_name'] }}
        </td>
        <td class="doctor-uin-label"><strong>@lang('doctor.label_uin')</strong>:</td>
        <td class="doctor-uin">{{ $general_examination_data['doctor_uin'] }}</td>
    </tr>
    <tr>
        <td class="affiliate-label">@lang('doctor.label_affiliate'):</td>
        <td class="affiliate-name" colspan="3">{{ $general_examination_data['affiliate_name'] }}</td>
    </tr>
</table>