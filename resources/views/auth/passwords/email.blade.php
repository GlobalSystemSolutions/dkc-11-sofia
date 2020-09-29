@extends('layouts.app')

@section('content')
<div class="flexbox-container">
    <div class="col-12 d-flex justify-content-center align-items-center">
        <div class="col-md-5 col-xl-4 col-10 box-shadow-1 p-0">
            <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                    <div class="card-title text-center">
                        <div class="reset"><i class="fa fa-user-circle-o"></i></div>
                    </div>
                </div>
                <div class="card-content">

                    <div class="card-body pt-0">
                        <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">

                            {{ csrf_field() }}

                            @captcha('bg')

                            <fieldset class="form-group floating-label-form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Електронна поща</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" tabindex="1"  required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </fieldset>

                            <div>&nbsp;</div>

                            <button type="submit" class="btn btn-outline-primary btn-block"tabindex="2" ><i class="ft-mail"></i> Заяви промяна на парола</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
