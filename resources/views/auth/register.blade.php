@extends('layouts.app')

@section('content')
<div class="flexbox-container">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-xl-4 col-10 box-shadow-1 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="register-icon"><i class="fa fa-address-card-o"></i></div>
                    </div>
                </div>
                <div class="card-content">

                    <div class="card-body pt-0">
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">

                            {{ csrf_field() }}

                            @captcha('bg')

                            <fieldset class="form-group floating-label-form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name">Име</label>
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" tabindex="1" required autofocus>

                                @if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name">Фамилия</label>
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" tabindex="2" required autofocus>

                                @if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Електронна поща</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="3"  required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group mb-1 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Парола</label>
                                <input id="password" type="password" class="form-control" name="password" required tabindex="4" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group mb-1 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password_confirm"">Повторете паролата</label>
                                <input id="password_confirm" type="password" class="form-control" name="password_confirmation" required tabindex="5" >
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <div>&nbsp;</div>

                            <button type="submit" class="btn btn-outline-primary btn-block"tabindex="6" ><i class="ft-edit-3"></i> Регистрация</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
