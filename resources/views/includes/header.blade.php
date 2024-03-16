<header>
    <div class="container header-elements">
        <figure>
            <a href="{{url('/')}}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo DC Comics">
            </a>
        </figure>
        <nav>
            <ul class="header-list">
                @foreach (config('header_menu') as $link)
                <li class="{{ Route::is($link['route_name']) ? 'current' : ''}}"><a href="{{$link['route_name']}}">{{$link['text']}}</a></li>
                @endforeach

            </ul>
        </nav>
    </div>
</header>