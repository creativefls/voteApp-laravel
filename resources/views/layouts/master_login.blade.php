<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://user-images.githubusercontent.com/10141928/29763334-dc42e228-8bfc-11e7-8b86-222741dcd7a4.png">
  <link rel="icon" type="image/png" sizes="96x96" href="https://user-images.githubusercontent.com/10141928/29763334-dc42e228-8bfc-11e7-8b86-222741dcd7a4.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='#cecece' name='theme-color' />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title') | #DaretoCreate Apps</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!--  Paper Dashboard core CSS    -->
  <link href="{{ url('/css/app.css') }}" rel="stylesheet" />

  <!--  Fonts and icons     -->
  <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>


</head>

<body>

  <div class="wrapper">

    <!-- content acara -->
    <div class="content">
      <div class="container-fluid">
        <div class="row" style="margin-top:2em;">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-12">
            <div class="card card-user">
              <div class="image">
                <img src="https://user-images.githubusercontent.com/10141928/29747006-4ddf9562-8b16-11e7-8c67-6046135e827d.png" alt="FLS header logo">
              </div>
              <div class="author">
                <a href="{{ url('/') }}">
                  <img class="avatar border-gray" src="https://user-images.githubusercontent.com/10141928/29747027-e5da50a0-8b16-11e7-9a25-73e3dfa65363.png" alt="FLS Logo">
                </a>
                <h4 class="title">@yield('judul_form')<br> </h4>
              </div>
              <hr>
              <!-- form login -->
              <div class="content">
                <div class="row">
                  <div class="col-md-12">
                    <!-- flash data jika login gagal -->
                    @if ($errors->has('email'))
                      <div class="alert alert-warning">
                          <strong>{{ $errors->first('email') }}</strong>
                      </div>
                    @endif

                    @if ($errors->has('password'))
                      <div class="alert alert-warning">
                        <strong>{{ $errors->first('password') }}</strong>
                      </div>
                    @endif
                    @yield('content_form')

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--  -->
      </div>
      <!-- this is footer -->
      @include('layouts.partials.footer')
      <!-- end of footer -->
    </div>
  </div>


</body>
<!--   Core JS Files   -->
<script src="{{ url('/js/app.js') }}" type="text/javascript"></script>

</html>
