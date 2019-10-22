<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/">Accueil</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="{{Route('movie.list')}}">Movies</a>
    </li>
    <li class="nav-item" active>


      <div class="dropdown show">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Coen Bros
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="{{Route('ethan')}}">Ethan</a>
          <a class="dropdown-item" href="{{Route('joel')}}">Joel</a>
        </div>
      </div>
    </ul>
    
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      @guest
      <li class="nav-item">
        <a class="nav-link" href="{{ Route('login') }}">{{ __('Login') }}</a>
      </li>
      @if (Route::has('register'))
      <li class="nav-item">
        <a class="nav-link" href="{{ Route('register') }}">{{ __('Register') }}</a>
      </li>
      @endif
      @else
      <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
          Profile <span class="caret"></span>
        </a>


        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="users/profile">
            User Profile
          </a>
          <a class="dropdown-item" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
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
</div>
</nav>