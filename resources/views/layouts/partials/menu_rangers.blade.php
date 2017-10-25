<div class="sidebar-wrapper">
      <div class="logo">
          <a href="{{ url('/') }}" class="simple-text">
              Rangers
          </a>
      </div>

      <ul class="nav">
          <li class="{{ Route::currentRouteName() == "dashboard" ? "active" : "" }}">
              <a href="{{ url('/') }}">
                  <i class="ti-panel"></i>
                  <p>Dashboard</p>
              </a>
          </li>
          <li class="{{ Route::currentRouteName() == "kelas-workshop" ? "active" : "" }}">
              <a href="{{ url('rangers/kelas-workshop') }}">
                  <i class="ti-agenda"></i>
                  <p>Kelas Workshop</p>
              </a>
          </li>
          <li class="{{ Route::currentRouteName() == "menu-makan" ? "active" : "" }}">
              <a href="{{ url('rangers/menu-makan') }}">
                  <i class="ti-face-smile"></i>
                  <p>Daftar Makanan</p>
              </a>
          </li>
          <li>
              <a href="{{ url('/') }}">
                  <i class="ti-bar-chart"></i>
                  <p>Hasil Voting</p>
              </a>
          </li>
            <li class="{{ Route::currentRouteName() == "buka-tutup" ? "active" : "" }}">
                <a href="{{ url('rangers/buka-tutup') }}">
                    <i class="ti-settings"></i>
                    <p>Buka-Tutup Kelas</p>
                </a>
            </li>
          <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="ti-lock"></i>
                <p>Logout</p>
            </a>
          </li>
      </ul>
</div>
@include('layouts.partials.logout_form')
