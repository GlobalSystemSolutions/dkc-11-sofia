@extends('layouts.admin.app')

@section('title')
    <title>Профил на купувача | ДКЦ XI - София</title>
@endsection

@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{ config('app.url') }}/app-assets/css/plugins/forms/switch.css">
@endsection

@section('styles')
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
                            <li class="breadcrumb-item active">
                                <a href="{{ route('admin.buyer.index') }}">Профил на купувача</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 section-title">Профил на купувача</div>
        </div>

        <div class="row">
            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">Управление на раздели</h4>
                    </div>


                    <div class="card-content collapse show">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12">
                                    <form class="form" method="POST" action="{{ route('admin.buyer.type.create') }}">

                                        {{ csrf_field() }}

                                        <div class="form-body">

                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                        <label for="name">Име на нов раздел <span class="legend-mark">*</span></label>
                                                        <input type="text" id="name" class="form-control"
                                                            placeholder="Име на раздел"
                                                            name="name"
                                                            value="{{ old('name') }}">

                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="col-12 col-md-2">
                                                        <div class="form-group {{ $errors->has('active') ? ' has-error' : '' }}">
                                                            <label for="switch">Активирай</label><br>
                                                            <input type="checkbox" class="switch" id="switch" name="active" >

                                                            @if ($errors->has('active'))
                                                                <span class="help-block">
                                                                    <strong>{{ $errors->first('active') }}</strong>
                                                                </span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-12 col-md-3">
                                                    <div class="form-group text-right">
                                                        <label>&nbsp;</label><br>
                                                        <button type="submit" class="btn btn-success">
                                                            <i class="fa fa-plus-circle"></i> Създай раздел
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>

                            <hr>

                            <table id="buyer-types-table" class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>Име на раздел</th>
                                        <th class="text-center">Статус</th>
                                        <th class="news-edit text-center">Последна<br>редакция</th>
                                        <th class="action-buttons text-center">Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buyer_types as $buyer_type)
                                    <tr>
                                        <td><a href="{{ config('app.url') }}/admin/buyer-profile/{{ $buyer_type->slug }}">{{ $buyer_type->name }}</a></td>
                                        <td class="published-status text-center">
                                            @if ($buyer_type->active)
                                                <button type="button" class="btn bg-success text-white status">Активен</button>
                                            @else
                                                <button type="button" class="btn bg-danger bg-darken-3 text-white status">Не активен</button>
                                            @endif
                                        </td>
                                        <td class="news-edit text-center">
                                            {{ \Carbon\Carbon::parse($buyer_type->updated_at)->format('d.m.Y') }} г. в
                                            {{ \Carbon\Carbon::parse($buyer_type->updated_at)->format('H:i') }} ч.
                                        </td>
                                        <td class="action-buttons text-center">

                                            <div class="crud-action first">
                                                <button type="button" class="btn edit action-hidden" data-toggle="modal" data-target="#modal-edit-buyer-type-{{ $buyer_type->id }}" title="Редактирай">
                                                    <i class="fa fa-pencil"></i>
                                                </button>

                                                <div class="modal fade text-center test" id="modal-edit-buyer-type-{{ $buyer_type->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-edit-buyer-type-{{ $buyer_type->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-edit-buyer-type-{{ $buyer_type->id }}"><strong>Редакция на раздел</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.buyer.type.edit') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="buyer_type_id" value="{{ $buyer_type->id }}">

                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="text-left form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                                                <label for="name">Име на раздел <span class="legend-mark">*</span></label>
                                                                                <input type="text" id="name" class="form-control"
                                                                                    placeholder="Име на раздел"
                                                                                    name="name"
                                                                                    value="{{ old('name') ? old('name') : $buyer_type->name }}">

                                                                                @if ($errors->has('name'))
                                                                                    <span class="help-block">
                                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                                    </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div>&nbsp;</div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-success" value="Запази">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="crud-action">
                                                @if ($buyer_type->active)
                                                <button type="button" class="btn deactivate action-hidden" data-toggle="modal"
                                                data-target="#modal-deactivate-buyer-type-{{ $buyer_type->id }}" title="Деактивирай"><i class="fa fa-pause"></i></button>

                                                <div class="modal fade text-center" id="modal-deactivate-buyer-type-{{ $buyer_type->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-deactivate-buyer-type-{{ $buyer_type->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-deactivate-buyer-type-{{ $buyer_type->id }}"><strong>Деактивиране на раздел</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.buyer.type.deactivate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="buyer_type_id" value="{{ $buyer_type->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете да деактивирате раздела?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-danger" value="Деактивирай">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <button type="button" class="btn activate action-hidden" data-toggle="modal"
                                                data-target="#modal-activate-buyer-type-{{ $buyer_type->id }}" title="Активирай"><i class="fa fa-play"></i></button>

                                                <div class="modal fade text-center" id="modal-activate-buyer-type-{{ $buyer_type->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-activate-buyer-type-{{ $buyer_type->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-activate-buyer-type-{{ $buyer_type->id }}"><strong>Активиране на раздел</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.buyer.type.activate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="buyer_type_id" value="{{ $buyer_type->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете да активирате раздела?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-success" value="Активирай">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>

                                            <div class="crud-action last">
                                                <button type="button" class="btn delete action-hidden" data-toggle="modal" data-target="#modal-delete-buyer-type-{{ $buyer_type->id }}" title="Изтрий">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                                <div class="modal fade text-center test" id="modal-delete-buyer-type-{{ $buyer_type->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-buyer-type-{{ $buyer_type->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-delete-buyer-type-{{ $buyer_type->id }}"><strong>Изтриване на раздел</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.buyer.type.delete') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="buyer_type_id" value="{{ $buyer_type->id }}">

                                                                <div class="modal-body">
                                                                    <p>
                                                                        Сигурни ли сте, че желаете да изтриете раздела?<br><br>
                                                                        <strong>Всички публикации принадлежащи към този раздел<br>ще бъдат изтрити!</strong>
                                                                    </p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-danger" value="Изтрий">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@section('footer-scripts')
<script src="{{ config('app.url') }}/app-assets/vendors/js/forms/toggle/bootstrap-checkbox.js" type="text/javascript"></script>
<script src="{{ config('app.url') }}/app-assets/js/scripts/forms/switch.js" type="text/javascript"></script>
<script src="{{ config('app.url') }}/app-assets/vendors/js/forms/toggle/switchery.min.js" type="text/javascript"></script>
<script src="{{ config('app.url') }}/app-assets/vendors/js/extensions/jquery.raty.js" type="text/javascript"></script>
<script src="{{ config('app.url') }}/app-assets/js/scripts/extensions/rating.js" type="text/javascript"></script>
<script type="text/javascript">

    $(document).ready(function(){

        $('#news-table').DataTable({
            ordering: false,
            language: {
                processing: "Данните се обработват...",
                search: "Търси:&nbsp;",
                lengthMenu: "Покажи&nbsp; _MENU_",
                info: "Показване от _START_ до _END_ от общо _TOTAL_ резултата",
                infoEmpty: "Показване на 0 от 0 от общо 0 резултата",
                infoFiltered: "(филтрирани от общо _MAX_)",
                infoPostFix: "",
                loadingRecords: "Зареждане...",
                zeroRecords: "Няма резултати",
                emptyTable: "Няма публикации в този раздел",
                paginate: {
                    first: "Първа",
                    previous: "Предишна",
                    next: "Следваща",
                    last: "Последна"
                },
                aria: {
                    sortAscending:  ": activer pour trier la colonne par ordre croissant",
                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            }
        });

        $('#buyer-types-table').DataTable({
            ordering: false,
            language: {
                processing: "Данните се обработват...",
                search: "Търси:&nbsp;",
                lengthMenu: "Покажи&nbsp; _MENU_",
                info: "Показване от _START_ до _END_ от общо _TOTAL_ резултата",
                infoEmpty: "Показване на 0 от 0 от общо 0 резултата",
                infoFiltered: "(филтрирани от общо _MAX_)",
                infoPostFix: "",
                loadingRecords: "Зареждане...",
                zeroRecords: "Няма резултати",
                emptyTable: "Няма създадени раздели",
                paginate: {
                    first: "Първа",
                    previous: "Предишна",
                    next: "Следваща",
                    last: "Последна"
                },
                aria: {
                    sortAscending:  ": activer pour trier la colonne par ordre croissant",
                    sortDescending: ": activer pour trier la colonne par ordre décroissant"
                }
            }
        });


    });
</script>
@endsection
