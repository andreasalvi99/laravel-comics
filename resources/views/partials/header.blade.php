<header>
    <x-navbar>
        <nav class="d-flex justify-content-around p-3">
            <a href="{{ route('home') }}" class="nav-link"><img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="dc-logo" class="navbar-logo"></a>
            <ul class="navbar-nav d-flex flex-row align-items-center gap-4 fw-bold">
                <li class="nav-item">
                    <a href="{{ route('characters') }}" class="nav-link">CHARACTERS</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('comics') }}" class="nav-link">COMICS</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('movies') }}" class="nav-link">MOVIES</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('tv') }}" class="nav-link">TV</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('games') }}" class="nav-link">GAMES</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('collectibles') }}" class="nav-link">COLLECTIBLES</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('videos') }}" class="nav-link">VIDEOS</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('fans') }}" class="nav-link">FANS</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('news') }}" class="nav-link">NEWS</a>
                </li class="nav-item">
                <li class="nav-item">
                    <a href="{{ route('shop') }}" class="nav-link">SHOP</a>
                </li class="nav-item">
            </ul>
        </nav>
    </x-navbar>
</header>