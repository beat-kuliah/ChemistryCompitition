<nav class="navbar navbar-expand-xl navbar-light" style="background-color: #6c6b86;">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ URL::to('images/Landing Page/logo cf ver 1-02.png') }}" alt="" width="60" height="60">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample06">
        <ul class="navbar-nav ms-auto me-auto pe-4 mb-6 mb-xl-0">
            <li class="nav-item">
                <a class="nav-link mid-link" href="">CC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mid-link" href="">COD</a>
            </li>
            <li class="nav-item">
                <a class="mid-link nav-link" href="">CIP</a>
            </li>
            <li class="nav-item">
                <a class="mid-link nav-link" href="">Semnas</a>
            </li>
            <li class="nav-item">
                <a class="mid-link nav-link" href="">Chempaign</a>
            </li>
            <li class="nav-item">
                <a class="mid-link nav-link" href="">News</a>
            </li>
        </ul>
        
            @guest
            <ul class="navbar-nav ps-auto mb-xl-0">
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link right-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link right-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                </ul>
            @else
            <ul class="navbar-nav pe-2 ps-auto mb-xl-0">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle right-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            @endguest
      </div>
    </div>
  </nav>


{{-- <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #6c6b86;">
    <div class="container">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="">CC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">COD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">CIP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Semnas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Chempaign</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">News</a>
                </li>
            </ul>
        </div>

        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ URL::to('images/Landing Page/logo cf ver 1-02.png') }}" alt="" width="50" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        
    </div>
</nav> --}}