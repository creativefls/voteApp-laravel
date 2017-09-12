@extends('layouts.master_login')

@section('title','Register')
@section('judul_form','Register Member')

@section('content_form')
  <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Nama</label>
      <input id="name" type="text" class="form-control border-input" placeholder="Nama" name="name" value="{{ old('name') }}" required autofocus>

      @if ($errors->has('name'))
          <span class="help-block">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
      @endif
    </div>

    <div class="form-group">
      <label>Alamat Email</label>
      <input id="email" type="email" class="form-control border-input border-input" placeholder="emailkamu@email.com" name="email" value="{{ old('email') }}" required>

      @if ($errors->has('email'))
          <span class="help-block">
              <strong>{{ $errors->first('email') }}</strong>
          </span>
      @endif
    </div>

    <div class="form-group">
      <label>password</label>
      <input id="password" type="password" class="form-control border-input" placeholder="password" name="password" required>

      @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
    </div>

    <div class="form-group">
      <label>Confirm Password</label>
      <input id="password-confirm" type="password" class="form-control border-input" placeholder="password" name="password_confirmation" required>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-info btn-fill btn-wd">Register</button>
    </div>
  </form>
@endsection
