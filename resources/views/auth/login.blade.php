@extends('layouts.app')

@section('content')
<div class="flexbox-container">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-xl-4 col-10 box-shadow-1 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">

                            <div class="login-icon"><i class="fa fa-user-circle-o"></i></div>

                    </div>
                </div>
                <div class="card-content">

                    <div class="card-body pt-0">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">

                            {{ csrf_field() }}

                            <fieldset class="form-group floating-label-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Електронна поща</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="1"  required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group mb-1 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Парола</label>
                                <input id="password" type="password" class="form-control" name="password" required tabindex="2" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <div class="form-group row">
                                <div class="col-md-6 col-12 text-center text-sm-left">
                                    <fieldset>
                                        <div class="skin skin-flat" style="position: relative;">
                                            <input type="checkbox" id="remember_me" class="chk-remember" name="remember" {{ old('remember') ? 'checked' : '' }} style="position: absolute; opacity: 0;">
                                            <label for="remember_me" class=""> Запомни ме</label>
                                        </div>

                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                                    <a href="{{ route('password.request') }}" class="card-link">Забравена парола?</a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-outline-primary btn-block"tabindex="3" ><i class="ft-log-in"></i> Вход</button>


                        </form>
                    </div>
                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                        <span>Нов имейл за активация на акаунт?</span>
                    </p>
                    <div class="card-body">
                        <a href="{{ route('activation.resend') }}" class="btn btn-outline-danger btn-block"><i class="ft-mail"></i> Изпрати нов имейл за активация</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
