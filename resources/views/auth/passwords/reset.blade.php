@extends('layouts.master_login')

@section('name','Reset Your Password')
@section('judul_form','Reset Your Password')

@section('content_form')
  <!-- form reset password -->
  <form method="POST" action="{{ route('password.request') }}">
    {{ csrf_field() }}
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label>E-Mail Address</label>
            <input id="email" type="email" class="form-control border-input" name="email" value="{{ $email or old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label>Password</label>
            <input id="password" type="password" class="form-control border-input" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label>Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control border-input" name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group">
        <div class="text-center">
            <button type="submit" class="btn btn-info btn-fill btn-wd">
                Reset Password
            </button>
        </div>
    </div>

  </form>
@endsection
