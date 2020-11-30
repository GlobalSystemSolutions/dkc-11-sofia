<table class="results-table type-5">
    <tr>
        <td class="group-name">@lang('roentgen.label_examination_title')</td>
    </tr>
    <tr>
        <td>{{ $result['result_name'] }}</td>
    </tr>
    <tr>
        <td>
            @if ($result['result_value'])
                {!! $result['result_value'] !!}
            @else
                <div class="status"  title="@lang('roentgen.label_status_not_ready_title')">
                    <i class="fa fa-flask"></i>
                </div>
            @endif
        </td>
    </tr>
    @if ($result['result_image_path'])
    <tr>
        <td>
            <div class="image_row">
                @foreach($result['result_image_path'] as $result_image_path)
                <div class="image_column">
                <a title="" href="{{ $result_image_path }}" target="_blank"><img src="{{ $result_image_path }}" alt="" style="width:100px"></a> 
                </div>
                @endforeach
            </div>
        </td>
    </tr>
    @endif
</table>
