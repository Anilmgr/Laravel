
 
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top ">
  <a class="navbar-brand" href="/">NEPATHYA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">HOME</a>
      </li>
      <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
        <a class="nav-link" href="/posts">BLOG</a>
      </li>
      <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
        <a class="nav-link" href="/about">ABOUT US</a>
      </li>
      {{--  <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> --}}
      <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link " href="/contact">CONTACT</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COURSES</a>
        <div class="dropdown-menu "  aria-labelledby="dropdown04" >
          <a class="dropdown-item " href="#">BCA</a>
          <a class="dropdown-item " href="#">BSc.CSIT</a>
          <a class="dropdown-item " href="#">CA</a>
        </div>
        </li>
      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
      </form>
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
