@extends('layouts.admin.app')

@section('title')
    <title>Лечебно заведение | ДКЦ XI - София</title>
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
                                <a href="{{ route('admin.center.index') }}">Лечебно заведение</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 section-title">Лечебно заведение</div>
        </div>

        @role('super')
        <div class="row">

            <div class="col-12">
                <a href="{{ route('admin.center.create') }}">
                    <button type="button" class="btn btn-success new"><i class="fa fa-plus-circle"></i> Създай ново лечебно заведение / база</button>
                </a>
            </div>
        </div>
        <div class="row"><div class="col-12">&nbsp;</div></div>
        @endrole

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Наименование</th>
                                            <th>База</th>
                                            <th>Статус</th>
                                            <th>Редакция</th>
                                            @role('super')
                                            <th>Активация/<br>Деактивация</th>
                                            <th>Изтриване</th>
                                            @endrole
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($centerBases) > 0)
                                        @foreach($centerBases as $center)
                                        <tr>
                                            <td>{{ $center->name_short }}</td>
                                            <td>
                                                @if ($center->medical_base)
                                                    {{ $center->medical_base }}
                                                @else
                                                    ---
                                                @endif
                                            </td>
                                            <td>
                                                @if ($center->active)
                                                    <button type="button" class="btn bg-success text-white status">Активен</button>
                                                @else
                                                    <button type="button" class="btn bg-danger text-white status">Не активен</button>
                                                @endif
                                            </td>
                                            <td>
                                                <form class="form update-form" method="POST" action="{{ route('admin.center.edit.show') }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="center_id" value="{{ $center->id }}">
                                                    <button type="submit" class="btn btn-info edit"><i class="ft-edit-3"></i> Редакция</button>
                                                </form>
                                            </td>
                                            @role('super')
                                            @if ($center->active)
                                            <td>
                                                <button type="button" class="btn btn-warning deactivate " data-toggle="modal"
                                                data-target="#modal-deactivate-center-{{ $center->id }}">Деактивиране</button>

                                                <div class="modal fade text-center test" id="modal-deactivate-center-{{ $center->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-center-{{ $center->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-deactivate-center-{{ $center->id }}"><strong>Деактивиране</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.center.deactivate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="center_id" value="{{ $center->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете деактивиране?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-danger" value="Деактивирай">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            @else
                                            <td>
                                                <button type="button" class="btn btn-success activate " data-toggle="modal"
                                                data-target="#modal-activate-center-{{ $center->id }}">Активиране</button>

                                                <div class="modal fade text-center test" id="modal-activate-center-{{ $center->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-center-{{ $center->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-activate-center-{{ $center->id }}"><strong>Активиране</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.center.activate') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="center_id" value="{{ $center->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете активиране?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-success" value="Активирай">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            @endif
                                            <td>
                                                <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#modal-delete-center-{{ $center->id }}">
                                                    Изтриване
                                                </button>

                                                <div class="modal fade text-center test" id="modal-delete-center-{{ $center->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-center-{{ $center->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <label class="modal-title text-text-bold-600" id="modal-delete-center-{{ $center->id }}"><strong>Изтриване</strong></label>
                                                                <p></p>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <form class="form update-form" method="POST" action="{{ route('admin.center.delete') }}">

                                                                {{ csrf_field() }}

                                                                <input type="hidden" name="center_id" value="{{ $center->id }}">

                                                                <div class="modal-body">
                                                                    <p>Сигурни ли сте, че желаете изтриване?</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <input type="reset" class="btn btn-secondary " data-dismiss="modal" value="Откажи">
                                                                    <input type="submit" class="btn btn-danger" value="Изтрий">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            @endrole
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td class="text-center" colspan="6">Няма създадено лечебно заведение / база</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection
