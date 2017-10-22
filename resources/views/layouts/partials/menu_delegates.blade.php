<div class="sidebar-wrapper">
      <div class="logo">
          <a href="{{ url('/') }}" class="simple-text">
              Delegates
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
              <a href="{{ url('delegates/kelas-workshop') }}">
                  <i class="ti-agenda"></i>
                  <p>Kelas Workshop</p>
              </a>
          </li>
          <li class="{{ Route::currentRouteName() == "menu-makan" ? "active" : "" }}">
              <a href="{{ url('/delegates/menu-makan') }}">
                  <i class="ti-shopping-cart-full"></i>
                  <p>Menu Makan</p>
              </a>
          </li>
          <li class="{{ Route::currentRouteName() == "vote-organisasi" ? "active" : "" }}">
              <a href="{{ url('/delegates/vote-organisasi') }}">
                  <i class="ti-bar-chart"></i>
                  <p>Voting Komunitas</p>
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
