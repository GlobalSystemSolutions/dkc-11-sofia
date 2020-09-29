@extends('layouts.admin.app')

@section('title')
    <title>{{ $buyer_type->name }} | ДКЦ XI - София</title>
@endsection

@section('vendor-styles')
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
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.buyer.index') }}">Профил на купувача</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="{{ config('app.url') }}/admin/buyer-profile/{{ $buyer_type->slug }}">{{ $buyer_type->name }}</a>
                            </li>

                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 section-title">{{ $buyer_type->name }}</div>
        </div>

        <div class="row">
            <div class="col-12">
                <form class="form update-form" method="POST" action="{{ route('admin.buyer.create.show') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="buyer_type_id" value="{{ $buyer_type->id }}">
                    <button type="submit" class="btn btn-success new"><i class="fa fa-plus-circle"></i> Създай публикация</button>
                </form>
            </div>
        </div>

        <div class="row"><div class="col-12">&nbsp;</div></div>

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <table id="news-table" class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th class="news-date text-center">Дата</th>
                                        <th>Заглавие</th>
                                        <th class="text-center">Статус</th>
                                        <th class="news-edit text-center">Последна<br>редакция</th>
                                        <th class="action-buttons text-center">Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($buyers as $buyer)
                                    <tr>
                                        <td class="news-date text-center">{{ \Carbon\Carbon::parse($buyer->published_on)->format('d.m.Y') }} г.</td>
                                        <td>{{ $buyer->title }}</td>
                                        <td class="published-status text-center">
                                            @if ($buyer->published)
                                                <button type="button" class="btn bg-success text-white status">Публикувана</button>
                                            @else
                                                <button type="button" class="btn bg-danger text-white status">Не публикувана</button>
                                            @endif
                                        </td>
                                        <td class="news-edit text-center">
                                            {{ \Carbon\Carbon::parse($buyer->updated_at)->format('d.m.Y') }} г. в
                                            {{ \Carbon\Carbon::parse($buyer->updated_at)->format('H:i') }} ч.
                                        </td>
                                        <td class="action-buttons text-center">

                                            <div class="crud-action first">
                                                <form class="form update-form" method="POST" action="{{ route('admin.buyer.edit.show') }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">
                                                    <button type="submit" class="btn edit action-hidden" title="Редактирай"><i class="fa fa-pencil"></i></button>
                                                </form>
                                            </div>

                                            <div class="crud-action">
                                                @if ($buyer->published)
                                                <button type="button" class="btn deactivate action-hidden" data-toggle="modal"
                                                data-target="#modal-deactivate-news-{{ $buyer->id }}" title="Отмени публикацията"><i class="fa fa-pause"></i></button>

                                                <div class="modal fade text-center" id="modal-deactivate-news-{{ $buyer->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-news-{{ $buyer->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-deactivate-news-{{ $buyer->id }}"><strong>Отмяна на публикация</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.buyer.deactivate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете да отмените публикацията?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-danger" value="Отмени публикацията">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                <button type="button" class="btn activate action-hidden" data-toggle="modal"
                                                data-target="#modal-activate-news-{{ $buyer->id }}" title="Публикувай"><i class="fa fa-play"></i></button>

                                                <div class="modal fade text-center" id="modal-activate-news-{{ $buyer->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-news-{{ $buyer->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-activate-news-{{ $buyer->id }}"><strong>Публикуване</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.buyer.activate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете да публикувате?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-success" value="Публикувай">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            </div>

                                            <div class="crud-action last">
                                                <button type="button" class="btn delete action-hidden" data-toggle="modal" data-target="#modal-delete-news-{{ $buyer->id }}" title="Изтрий">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                                <div class="modal fade text-center test" id="modal-delete-news-{{ $buyer->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-news-{{ $buyer->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-delete-news-{{ $buyer->id }}"><strong>Изтриване на публикация</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.buyer.delete') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="buyer_id" value="{{ $buyer->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете да изтриете публикацията?</p>
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
<script type="text/javascript">
    // $().DataTable();
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
                emptyTable: "Няма създадени публикации",
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
