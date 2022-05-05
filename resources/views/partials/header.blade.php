<header>
    <div class="index-header">
        <!-- img -->

        <a href="{{ @route('home')}}"><img src="{{asset("images/dc-logo.png")}}" alt="Dc Comics Logo"></a>
        <!-- nav -->
        <nav>
            {{-- <ul>
                @foreach ($navlinks as $link)
                <li>
                    <a href="{{$link['href']}}"></a>{{$link['text']}}
                </li>
            </ul> --}}
            <ul>
                <li class="{{ Route::currentRouteName() == 'characters' ? 'active' : ''}}"><a href="{{ @route('characters')}}">characters</a></li>
                <li class="{{ Route::currentRouteName() == 'comics' || Route::currentRouteName() == 'comics-detail' ? 'active' : ''}}"><a href="{{ @route('comics')}}">comics</a></li>
                <li class="{{ Route::currentRouteName() == 'games' ? 'active' : ''}}"><a href="{{ @route('games')}}">games</a></li>
                <li class="{{ Route::currentRouteName() == 'collectibles' ? 'active' : ''}}"><a href="{{ @route('collectibles')}}">collectibles</a></li>
                <li class="{{ Route::currentRouteName() == 'videos' ? 'active' : ''}}"><a href="{{ @route('videos')}}">videos</a></li>
                <li class="{{ Route::currentRouteName() == 'fans' ? 'active' : ''}}"><a href="{{ @route('fans')}}">fans</a></li>
                <li class="{{ Route::currentRouteName() == 'news' ? 'active' : ''}}"><a href="{{ @route('news')}}">news</a></li>
                <li class="{{ Route::currentRouteName() == 'shop' ? 'active' : ''}}"><a href="{{ @route('shop')}}">shop</a></li>
                <li class="{{ Route::currentRouteName() == 'tv' ? 'active' : ''}}"><a href="{{ @route('tv')}}">tv</a></li>
                <li class="{{ Route::currentRouteName() == 'movies' ? 'active' : ''}}"><a href="{{ @route('movies')}}">movies</a></li>
            </ul>
        </nav>
    </div>
    <div class="index-main">
        <div id="jumbotron">
            {{-- <button class="my-btn">Current Series</button> --}}
        </div>
    </div>
</header>
