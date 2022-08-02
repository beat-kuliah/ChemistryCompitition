<div class="nav-scroller bg-body border-bottom">
    <nav class="nav nav-underline" aria-label="Secondary navigation">
        <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
        <a class="nav-link" aria-current="page" href="/admin/cc">CC</a>
        <a class="nav-link" aria-current="page" href="/admin/cod">COD</a>
        <a class="nav-link" aria-current="page" href="/admin/cip">CIP</a>
        <a class="nav-link" aria-current="page" href="/admin/semnas">Semnas</a>
        <a class="nav-link" aria-current="page" href="/admin/chempaign">Chempaign</a>
        <a class="nav-link" aria-current="page" href="/admin/news">News</a>

        <a class="nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();" style="color: red">
                        {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
                    
    </nav>
  </div>
{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <hr>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/cc">CC</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/cod">COD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/cip">CIP</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/semnas">Semnas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/chempaign">Chempaign</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/admin/lini_masa">Lini Masa</a>
            </li>
        </ul>
    </div>
</nav> --}}