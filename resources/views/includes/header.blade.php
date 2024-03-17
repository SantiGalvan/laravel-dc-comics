<header>
    <div class="container header-elements">
        <figure>
            <a href="{{url('/')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC Comics">
            </a>
        </figure>
        <nav>
            <ul class="header-list">
                <li class="@if (Route::is('characters')) current @endif"><a href="{{route('characters')}}">Characters</a></li>
                <li class="@if (Request::is('comics*'))) current @endif"><a href="{{route('comics.index')}}">Comics</a></li>
                <li class=""><a href="">Movies</a></li>
                <li class=""><a href="">Tv</a></li>
                <li class=""><a href="">Games</a></li>
                <li class=""><a href="">Collectibles</a></li>
                <li class=""><a href="">Videos</a></li>
                <li class=""><a href="">Fans</a></li>
                <li class=""><a href="">News</a></li>
                <li class=""><a href="">Shop</a></li>
            </ul>
        </nav>
    </div>
</header>