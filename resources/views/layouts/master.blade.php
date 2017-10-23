<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="https://user-images.githubusercontent.com/10141928/29763334-dc42e228-8bfc-11e7-8b86-222741dcd7a4.png">
  <link rel="icon" type="image/png" sizes="96x96" href="https://user-images.githubusercontent.com/10141928/29763334-dc42e228-8bfc-11e7-8b86-222741dcd7a4.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <meta content='#cecece' name='theme-color' />

  <title>@yield('title') | #DaretoCreate</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <meta name="author" content="Future Leader Summit">
  <meta name="keyword" content="fls, future leader summit, fls 2017, 2017, delegates 2017, calon delegates, delegates fls, nusantara muda, fls blog, fls artikel">
  <meta name="description" content="Merupakan aplikasi yang digunakan untuk pemilihan kelas workshop dan voting komunitas pada acara Future Leader Summit 2017.">
  <meta property="og:url" content="{{ url('/')}}" />
  <meta property="og:image" content="https://user-images.githubusercontent.com/10141928/27992993-bce8de68-64ca-11e7-86d8-50a489d6b744.png" />

  {{-- stylesheet --}}
  <link href="{{ url('/css/app.css') }}" rel="stylesheet" />
  {{-- font and icon --}}
  <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>

</head>

<body>

  <div class="wrapper">
    <div class="sidebar" data-background-color="black" data-active-color="info">

      {{-- jenis menunya user --}}
      @if (Auth::user()->role == 'rangers')
        @include('layouts.partials.menu_rangers')
      @else
        @include('layouts.partials.menu_delegates')
      @endif
      {{-- end of menu users --}}
    </div>

    <div class="main-panel">
      {{-- header --}}
      @include('layouts.partials.header')

      {{-- content web --}}
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              @include('flash::message')
            </div>
            @yield('content')
          </div>
        </div>
      </div>

      {{-- this is footer --}}
      @include('layouts.partials.footer')
      {{-- end of footer --}}
    </div>
  </div>


</body>
{{-- js file apps --}}
<script src="{{ url('/js/app.js') }}" type="text/javascript"></script>

</html>
