@extends('layouts.master_login')

@section('title','Reset your password')
@section('judul_form','Reset your password')

@section('content_form')
  <form method="POST" action="{{ route('password.email') }}">
      {{ csrf_field() }}

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <div class="form-group">
          <label>E-Mail Address</label>
              <input id="email" type="email" class="form-control border-input" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
        </div>
      </div>

      <div class="form-group">
          <div class="text-center">
              <button type="submit" class="btn btn-success btn-fill">
                  Send Password Reset Link
              </button>
          </div>
      </div>
  </form>
@endsection
