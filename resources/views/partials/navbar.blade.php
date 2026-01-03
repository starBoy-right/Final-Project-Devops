<div class="navbar bg-white">
    <div class="nav-logo">
        <a href="{{ route('landing') }}#home">
            <img src="{{ asset('assets/images/hijo.png') }}" alt="">
        </a>
    </div>

    <div class="nav-items">
        <ul class="my-0">
            <li><a href="{{ route('landing') }}#home">Home</a></li>
            <li><a href="{{ route('landing') }}#services">Tentang Kami</a></li>
            <li><a href="{{ route('landing') }}#order">Daftar</a></li>
        </ul>
    </div>

    <div class="nav-button">
        <div class="anim-layer"></div>

        @auth
            <a href="/dashboard">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>

    <div id="hamburger-menu">&#9776;</div>
</div>

<div id="mobile-menu">
    <div class="mobile-nav-items">
        <ul>
            <li><a href="{{ route('landing') }}#home">Home</a></li>
            <li><a href="{{ route('landing') }}#services">Tentang Kami</a></li>
            <li><a href="{{ route('landing') }}#order">Daftar</a></li>
    </div>

    <div class="mobile-nav-button">
        <div class="anim-layer"></div>
        <a href="{{ route('login') }}">Login</a>
    </div>

    <div id="hamburger-cross">&#10006;</div>
</div>
