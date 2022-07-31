<nav class="navbar navbar-expand-xl navbar-light py-0 fs-5 fixed-top" style="background-color: #000000b2;" id="navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ URL::to('images/Landing Page/logo cf ver 1-02.png') }}" alt="" width="60" height="60">
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBasic" aria-controls="navBasic" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-md-center" id="navBasic">
        <ul class="navbar-nav ms-auto me-auto pe-4 mb-6 mb-xl-0">
            <li class="nav-item">
                <a class="nav-link" href="/cc"><p class="mid-link">CC</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cod"><p class="mid-link">COD</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cip"><p class="mid-link">CIP</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/semnas"><p class="mid-link">Semnas</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/chempaign"><p class="mid-link">Chempaign</p></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/news"><p class="mid-link">News</p></a>
            </li>
        </ul>
        
            @guest
            <ul class="navbar-nav ps-auto mb-xl-0">
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}"><button class="btn btn-info "><p class="right-link"> Daftar </p></button></a>
                    </li>
                @endif

                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}"><button class="btn btn-outline-info"><p class="right-link"> Masuk </p></button></a>
                    </li>
                @endif
                </ul>
            @else
            <ul class="navbar-nav pe-2 ps-auto mb-xl-0">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <p class="right-link dropdown-toggle">{{ Auth::user()->name }} </p>
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->isAdmin == 1)
                            <a class="dropdown-item" href="/dashboard">Dashboard</a>
                        @else
                            <a class="dropdown-item" href="/list_pendaftaran">Pendaftaran</a>
                        @endif
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