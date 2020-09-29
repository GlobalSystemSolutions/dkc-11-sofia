@extends('layouts.admin.app')

@section('title')
    <title>Редакция на новина | ДКЦ XI - София</title>
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
                                <a href="{{ route('admin.news.index') }}">Новини</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 section-title">Редакция на новина</div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-content collapse show">
                        <div class="card-body">

                            <form class="form" method="POST" action="{{ route('admin.news.edit') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="news_id" value="{{ $news->id }}">

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
                                                            value="{{ old('title') ? old('title') : $news->title }}">

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
                                                        @if ($news->published)
                                                            <input type="checkbox" class="switch" id="switch" name="published"
                                                            {{ old('published') ? old('published') : 'checked' }} >
                                                        @else
                                                            <input type="checkbox" class="switch" id="switch" name="published"
                                                            {{ old('published') ? old('published') : '' }} >
                                                        @endif

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
                                                    <div class="form-group {{ $errors->has('published_on') ? ' has-error' : '' }}">
                                                        <label for="published_on">Дата на публикация <span class="legend-mark">*</span></label>

                                                        <input type="text" id="published_on"
                                                            class="form-control datepicker"
                                                            name="published_on"
                                                            value="{{ old('published_on') ? old('published_on') : $news->published_on_string }}"
                                                            required >

                                                        @if ($errors->has('published_on'))
                                                            <span class="help-block">
                                                                {{ $errors->first('published_on') }}
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <div class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                                        <label for="author">Автор</label>
                                                        <input type="text" id="author" class="form-control  "
                                                            placeholder="Автор"
                                                            name="author"
                                                            value="{{ old('author') ? old('author') : $news->author }}">

                                                        @if ($errors->has('author'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('author') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-4">
                                                    <div class="form-group {{ $errors->has('photographer') ? ' has-error' : '' }}">
                                                        <label for="photographer">Фотограф</label>
                                                        <input type="text" id="photographer" class="form-control  "
                                                            placeholder="Фотограф"
                                                            name="photographer"
                                                            value="{{ old('photographer') ? old('photographer') : $news->photographer }}">

                                                        @if ($errors->has('photographer'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('photographer') }}</strong>
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
                                                        <textarea class="form-control my-editor" id="body" rows="3" name="body">
                                                            {!! old('body') ? old('body') : $news->body !!}
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
                                    <a href="{{ route('admin.news.index') }}">
                                        <button type="button" class="btn btn-warning mr-1">
                                            <i class="ft-x"></i> Откажи
                                        </button>
                                    </a>
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-check-square-o"></i> Запази
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
