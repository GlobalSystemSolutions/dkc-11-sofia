@extends('layouts.admin.app')

@section('title')
    <title>Новини | ДКЦ XI - София</title>
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
                            <li class="breadcrumb-item active">
                                <a href="{{ route('admin.news.index') }}">Новини</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 section-title">Новини</div>
        </div>

        <div class="row">
            <div class="col-12">
                <a href="{{ route('admin.news.create.show') }}">
                    <button type="button" class="btn btn-success new"><i class="fa fa-plus-circle"></i> Създай новина</button>
                </a>
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
                                        <th class="published-status text-center">Статус</th>
                                        <th class="news-edit text-center">Последна<br>редакция</th>
                                        <th class="action-buttons text-center">Действие</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($newsCollection as $news)
                                    <tr>
                                        <td class="news-date text-center">{{ \Carbon\Carbon::parse($news->published_on)->format('d.m.Y') }} г.</td>
                                        <td>{{ $news->title }}</td>
                                        <td class="published-status text-center">
                                            @if ($news->published)
                                                <button type="button" class="btn bg-success bg-darken-2 text-white text-center status">Публикувана</button>
                                                {{-- <div class="status-icon text-center " title="Публикувана"><i class="fa fa-eye"></i></div> --}}
                                            @else
                                                <button type="button" class="btn bg-danger bg-darken-3 text-white text-center status">Не публикувана</button>
                                                {{-- <div class="status-icon text-center" title="Не публикувана"><i class="fa fa-low-vision"></i></div> --}}
                                            @endif
                                        </td>
                                        <td class="news-edit text-center">
                                            {{ \Carbon\Carbon::parse($news->updated_at)->format('d.m.Y') }} г. в
                                            {{ \Carbon\Carbon::parse($news->updated_at)->format('H:i') }} ч.
                                        </td>
                                        <td class="action-buttons text-center">

                                            <div class="crud-action first">
                                                <form class="form update-form" method="POST" action="{{ route('admin.news.edit.show') }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="news_id" value="{{ $news->id }}">
                                                    <button type="submit" class="btn edit action-hidden" title="Редактирай"><i class="fa fa-pencil"></i></button>
                                                </form>
                                            </div>

                                            <div class="crud-action">
                                                @if ($news->published)
                                                <button type="button" class="btn deactivate action-hidden" data-toggle="modal"
                                                data-target="#modal-deactivate-news-{{ $news->id }}" title="Отмени публикацията"><i class="fa fa-pause"></i></button>

                                                <div class="modal fade text-center" id="modal-deactivate-news-{{ $news->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-news-{{ $news->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-deactivate-news-{{ $news->id }}"><strong>Отмяна на публикация</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.news.deactivate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="news_id" value="{{ $news->id }}">

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
                                                data-target="#modal-activate-news-{{ $news->id }}" title="Публикувай"><i class="fa fa-play"></i></button>

                                                <div class="modal fade text-center" id="modal-activate-news-{{ $news->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-news-{{ $news->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-activate-news-{{ $news->id }}"><strong>Публикуване на новина</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.news.activate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="news_id" value="{{ $news->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете да публикувате новината?</p>
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
                                                <button type="button" class="btn delete action-hidden" data-toggle="modal" data-target="#modal-delete-news-{{ $news->id }}" title="Изтрий">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                                <div class="modal fade text-center test" id="modal-delete-news-{{ $news->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-news-{{ $news->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-delete-news-{{ $news->id }}"><strong>Изтриване на новина</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.news.delete') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="news_id" value="{{ $news->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете да изтриете новината?</p>
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
    $(document).ready(function() {

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
                emptyTable: "Няма създадени новини",
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
