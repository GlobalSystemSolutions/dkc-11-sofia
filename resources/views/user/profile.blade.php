@extends('layouts.app')

@section('title')
    <title>Профил | ДКЦ XI - София</title>
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
                                <a href="{{ route('home') }}">Профил</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 section-title">Профил</div>
        </div>

        <div class="row">

            <div class="col-12 col-md-4 col-lg-4">
                <div class="aside-menu-links-container">
                    <div class="list-group ">

                        @role('super', 'admin', 'moderator')
                        <a class="list-group-item" href="{{ route('admin.home') }}" >
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0"><i class="ft-settings"></i>&nbsp;&nbsp;&nbsp;Административен панел</h6>
                                </div>
                            </div>
                        </a>
                        @endrole

                        {{--
                        <a class="list-group-item" href="#">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0"><i class="ft-edit-3"></i>&nbsp;&nbsp;&nbspРедакция на профил</h6>
                                </div>
                            </div>
                        </a>

                        <a class="list-group-item" href="#">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0"><i class="ft-unlock"></i>&nbsp;&nbsp;&nbspПромяна на парола</h6>
                                </div>
                            </div>
                        </a>
 --}}
                        <a class="list-group-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <div class="media">
                                <div class="media-body w-100">
                                    <h6 class="media-heading mb-0"><i class="ft-power"></i>&nbsp;&nbsp;&nbspИзход</h6>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-s12 col-md-8 col-lg-8 user-properties">
                <table class="table table-striped">
                    <tr>
                        <td class="profile-property" >Име:</td>
                        <td>{{ $user->first_name }}</td>
                    </tr>
                    <tr>
                        <td class="profile-property">Фамилия:</td>
                        <td>{{ $user->last_name }}</td>
                    </tr>
                    <tr>
                        <td class="profile-property">Електронна поща:</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <td class="profile-property">Роля:</td>
                        <td>{{ $user_role->name_bg }}</td>
                    </tr>
                    <tr>
                        <td class="profile-property">Статус:</td>
                        <td>
                            @if ($user->active)
                                <button class="btn bg-success text-white">Активен</button>
                            @else
                                <button class="btn bg-danger text-white">Не активен</button>
                            @endif
                        </td>
                    </tr>

                </table>
            </div>


        </div>



    </div>
</div>
@endsection

@section('footer-scripts')

@endsection
