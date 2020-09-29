<table class="patient-info">
    <tr>
        <td class="first-column">{{ Carbon\Carbon::parse($general_examination_data['examination_date'])->format('d.m.Y') }}</td>
        <td class="middle-column">
            <span class="patient-name">{{ $general_examination_data['patient_first_name'] }}</span>
            <span class="patient-name">{{ $general_examination_data['patient_middle_name'] }}</span>
            <span class="patient-name">{{ $general_examination_data['patient_last_name'] }}</span>
        </td>
        <td class="patient-egn"><strong>@lang('patient.label_egn')</strong>: {{ $general_examination_data['patient_egn'] }}</td>
        <td class="patient-age"><strong>@lang('patient.label_age')</strong>: {{ $general_examination_data['patient_age'] }}</td>
        <td class="last-column"><strong>ID</strong>: {{ $general_examination_data['examination_sample_id'] }}</td>
    </tr>
</table>