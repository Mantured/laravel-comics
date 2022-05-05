<header>
    <div class="index-header">
        <!-- img -->
        <img src="{{asset("images/dc-logo.png")}}" alt="Dc Comics Logo">
        <!-- nav -->
        <nav>
            {{-- <ul>
                @foreach ($navlinks as $link)
                <li>
                    <a href="{{$link['href']}}"></a>{{$link['text']}}
                </li>
            </ul> --}}
            <ul>
                <li><a href="#">characters</a></li>
                <li><a href="{{ @route('comics')}}">comics</a></li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">v</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </nav>
    </div>
</header>
