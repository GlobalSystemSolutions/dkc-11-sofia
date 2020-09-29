<table class="header-table">
    <tr>
        <td class="lab-logo">
            <span class="logo">
                <a href="{{ config('app.url') }}" target="_blank" title="ДКЦ XI - София">
                    <img src="{{ config('app.url') }}/app-assets/images/logo-dkc-11.svg" alt="">
                </a>
            </span>
        </td>
        <td class="right-aligned">
            <h2>{{ $laboratory_data['IME'] }}</h2>
            {{ $laboratory_data['ADRESREZ'] }}
        </td>
    </tr>
</table>