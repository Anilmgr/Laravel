
 
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top ">
  <a class="navbar-brand" href="/dashboard">NEPATHYA ADMIN PANEL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
     @guest
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          {{-- <li class="nav-item active">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li> --}}
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" ariai-labelledby="navbarDropdown" >
              <a class="dropdown-item" href="/dashboard">Dashboard</a>

                                    
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
  </div>
</nav>