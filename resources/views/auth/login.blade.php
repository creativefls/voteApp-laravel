@extends('layouts.master_login')

@section('title','Login')
@section('judul_form','Login dulu young leader!')

@section('content_form')
  <!-- form login -->
  <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}

    <div class="form-group">
      <label>Email</label>
      <input id="email" type="email" class="form-control border-input" placeholder="emailkamu@email.com" name="email" value="{{ old('email') }}" required autofocus>
      @if ($errors->has('email'))
        <span class="help-block warning">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      <label>Kata Sandi</label>
      <input id="password" type="password" class="form-control border-input" placeholder="password" name="password" required>
      @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
      @endif
    </div>

    <!-- ingat saya | remember me -->
    <div class="checkbox">
      <label style="margin-left:-0.8em;">
        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat Saya
      </label>
      <label style="pull-right">
        <a href="{{ url('/password/reset') }}">Lupa Kata Sandi ?</a>
      </label>
    </div>
    <!-- login button -->
    <div class="text-center">
      <button type="submit" class="btn btn-info btn-fill btn-wd">Login</button>
    </div>
  </form>
@endsection
