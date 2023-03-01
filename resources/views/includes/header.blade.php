<header>
    <div class="info-nav">
        <div class="container">
            <h6>DC POWER VISA</h6>
        </div>
    </div>
    <div class="container nav">
        <figure>
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/dc-logo.png') }}" alt="logo DC">
            </a>
        </figure>
        <ul>
            <li><a href="{{ route('characters') }}"
                    class="{{ request()->routeIs('characters') ? 'active' : '' }}">CHARACTERS</a></li>
            <li><a href="{{ route('comics.index') }}"
                    class="{{ request()->routeIs('comics.index') ? 'active' : '' }}">COMICS</a></li>
            <li><a href="{{ route('movies') }}" class="{{ request()->routeIs('movies') ? 'active' : '' }}">MOVIES</a>
            </li>
            <li><a href="{{ route('tv') }}" class=" {{ request()->routeIs('tv') ? 'active' : '' }}">TV</a></li>
            <li><a href="{{ route('games') }}" class="{{ request()->routeIs('home') ? 'games' : '' }}">GAMES</a></li>
            <li><a href="{{ route('collectibles') }}"
                    class="{{ request()->routeIs('collectibles') ? 'active' : '' }}">COLLECTIBLES</a></li>
            <li><a href="{{ route('videos') }}" class="{{ request()->routeIs('videos') ? 'active' : '' }}">VIDEOS</a>
            </li>
            <li><a href="{{ route('fans') }}" class="{{ request()->routeIs('fans') ? 'active' : '' }}">FANS</a></li>
            <li><a href="{{ route('news') }}" class="{{ request()->routeIs('news') ? 'active' : '' }}">NEWS</a></li>
        </ul>
    </div>
    <div class="jumbotron">

    </div>
</header>
