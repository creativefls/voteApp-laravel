<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar1"></span>
                <span class="icon-bar bar2"></span>
                <span class="icon-bar bar3"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">
              <img class="c-logo" src="{{ url('/img/logo/fls-logo-baru.png') }}" alt="FLS Logo">
            </a>
            <a class="navbar-brand">@yield('title')</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"> <i class="ti-user"></i> <p>Hai, {{ Auth::user()->name }}!</p>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
