@extends('layouts.app')

@section('content')
<div class="flexbox-container">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-xl-4 col-10 box-shadow-1 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="reset"><i class="fa fa-unlock"></i></div>
                    </div>
                </div>
                <div class="card-content">

                    <div class="card-body pt-0">
                        <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">

                            {{ csrf_field() }}

                            <input type="hidden" name="token" value="{{ $token }}">

                            <fieldset class="form-group floating-label-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Електронна поща</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" tabindex="1"  required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group mb-1 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password">Нова парола</label>
                                <input id="password" type="password" class="form-control" name="password" required tabindex="2" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <fieldset class="form-group floating-label-form-group mb-1 {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password_confirm"">Повторете новата парола</label>
                                <input id="password_confirm" type="password" class="form-control" name="password_confirmation" required tabindex="3" >
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <div>&nbsp;</div>

                            <button type="submit" class="btn btn-outline-primary btn-block"tabindex="4" ><i class="ft-lock"></i> Запази паролата</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
