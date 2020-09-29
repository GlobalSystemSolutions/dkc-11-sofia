@extends('layouts.admin.app')

@section('title')
    <title>{{ $buyer_type_selected->name }} - Създаване на публикация | ДКЦ XI - София</title>
@endsection

@section('vendor-styles')
@endsection

@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/plugins/forms/switch.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/layout-1-efh5kh0gx9.css">
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/assets/css/admin/admin.css">
@endsection

@section('content')
<div class="main-content-wrapper contacts">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('welcome') }}">Начало</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.home') }}">Административен панел</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.buyer.index') }}">Профил на купувача</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ config('app.url') }}/admin/buyer-profile/{{ $buyer_type_selected->slug }}">{{ $buyer_type_selected->name }}</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 section-title">Създаване на публикация</div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" method="POST" action="{{ route('admin.buyer.create') }}">

                                {{ csrf_field() }}

                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="form-section"><i class="fa fa-newspaper-o"></i> Основна информация</h4>
                                            <div class="row">
                                                <div class="col-12 col-md-10">
                                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                                        <label for="title">Заглавие <span class="legend-mark">*</span></label>
                                                        <input type="text" id="title" class="form-control"
                                                            placeholder="Заглавие"
                                                            name="title"
                                                            value="{{ old('title') }}">

                                                        @if ($errors->has('title'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('title') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-2">
                                                    <div class="form-group {{ $errors->has('published') ? ' has-error' : '' }}">
                                                        <label for="switch">Публикувай</label><br>
                                                        <input type="checkbox" class="switch" id="switch" name="published" >

                                                        @if ($errors->has('published'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('published') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <div class="form-group{{ $errors->has('buyer_type_id') ? ' has-error' : '' }}">
                                                        <label for="buyer_type">Раздел <span class="legend-mark">*</span></label>
                                                        <select class="form-control" id="buyer_type" name="buyer_type_id" >
                                                            <option value="">--- Изберете раздел ---</option>
                                                            @foreach ($buyer_types as $buyer_type)
                                                                <option value="{{ $buyer_type->id }}"
                                                                    @if(old('buyer_type_id'))
                                                                        {{ old('buyer_type_id') == $buyer_type->id ? 'selected' : null }}
                                                                    @else
                                                                        {{ ($buyer_type_selected->id == $buyer_type->id) ? 'selected' : null }}
                                                                    @endif
                                                                >{{ $buyer_type->name }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('buyer_type_id'))
                                                            <span class="help-block">
                                                                {{ $errors->first('buyer_type_id') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <div class="form-group {{ $errors->has('published_on') ? ' has-error' : '' }}">
                                                        <label for="published_on">Дата на публикация <span class="legend-mark">*</span></label>

                                                        <input type="text" id="published_on"
                                                            class="form-control datepicker"
                                                            name="published_on"
                                                            value="{{ old('published_on') }}"
                                                            required >

                                                        @if ($errors->has('published_on'))
                                                            <span class="help-block">
                                                                {{ $errors->first('published_on') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <div class="form-group {{ $errors->has('deadline') ? ' has-error' : '' }}">
                                                        <label for="deadline">Краен срок</label>

                                                        <input type="text" id="deadline"
                                                            class="form-control datepicker"
                                                            name="deadline"
                                                            value="{{ old('deadline') }}"
                                                            required >

                                                        @if ($errors->has('deadline'))
                                                            <span class="help-block">
                                                                {{ $errors->first('deadline') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row"><div class="col-12">&nbsp;</div></div>

                                            <h4 class="form-section"><i class="fa fa-pencil-square"></i> Съдържание</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="body">Текст <span class="legend-mark">*</span></label>
                                                        <textarea class="form-control my-editor" id="body" rows="3" name="body"  placeholder="Текст на новината">
                                                            {!! old('body') !!}
                                                        </textarea>
                                                        @if ($errors->has('body'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('body') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-actions right">
                                    <a href="{{ config('app.url') }}/admin/buyer-profile/{{ $buyer_type_selected->slug }}">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Откажи
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check-square-o"></i> Създай
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@section('footer-scripts')
    <script src="{{ config('app.url') }}/app-assets/vendors/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/js/scripts/forms/switch.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/pickers/pickadate/picker.js" type="text/javascript"></script>
    <script src="{{ config('app.url') }}/app-assets/vendors/js/pickers/pickadate/picker.date.js" type="text/javascript"></script>

    <script type="text/javascript">
        $('.datepicker').pickadate({
            monthsFull: [ 'Януари','Февруари','Март','Април','Май','Юни','Юли','Август','Септември','Октомври','Ноември','Декември' ],
            monthsShort: [ 'Янр','Фев','Мар','Апр','Май','Юни','Юли','Авг','Сеп','Окт','Ное','Дек' ],
            weekdaysFull: [ 'неделя', 'понеделник', 'вторник', 'сряда', 'четвъртък', 'петък', 'събота' ],
            weekdaysShort: [ 'нд', 'пн', 'вт', 'ср', 'чт', 'пт', 'сб' ],
            today: 'Днес',
            clear: 'Изтрий',
            firstDay: 1,
            format: 'dd mmmm yyyy г.',
            formatSubmit: 'yyyy-mm-dd',
            close: 'Затвори',

            // Accessibility labels
            labelMonthNext: 'Следващ месец',
            labelMonthPrev: 'Предишен месец',
            labelMonthSelect: 'Изберете месец',
            labelYearSelect: 'Изберете година',
        });

        var editor_config = {
            path_absolute : "/",
            selector: "textarea.form-control.my-editor",
            height : "480",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Файлов мениджър',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

    tinymce.init(editor_config);
    </script>

@endsection
