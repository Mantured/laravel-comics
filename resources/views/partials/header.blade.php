<header>
    <div class="index-header">
        <!-- img -->

        <a href="{{ @route('home')}}"><img src="{{asset("images/dc-logo.png")}}" alt="Dc Comics Logo"></a>
        <!-- nav -->
        <nav>
            <ul>
                @foreach ($links as $link)
                <li class="{{ Route::currentRouteName() == $link['route-name'] ? 'active' : ""}}"><a href="{{ @route($link['route-name'])}}">{{$link['text']}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
    <div class="index-main">
        <div id="jumbotron">
            {{-- <button class="my-btn">Current Series</button> --}}
        </div>
    </div>
</header>
