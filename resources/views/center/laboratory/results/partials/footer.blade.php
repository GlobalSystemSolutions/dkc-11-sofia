<div class="results-footer">
    <div class="attention-label"><strong>@lang('results-blank-general.label_attention')</strong>:</div>
    <div>@lang('results-blank-general.attention_text')</div>
    <div class="responsible-staff">
        <div class="">
            <strong>@lang('results-blank-general.label_investigator')</strong>:
        </div>
        @foreach($responsible_staff as $staffMember)
        <div>
            @if(!empty($staffMember['title']))
                {{ $staffMember['title'] }}&nbsp;
            @endif
            {{ $staffMember['first_name'] }} {{ $staffMember['last_name'] }}
        </div>
        @endforeach
    </div>
</div>