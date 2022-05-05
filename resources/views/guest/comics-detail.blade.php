

@extends('layouts.app')

@section('title', 'Comics Detail')

{{-- @section('heder-content')
@endsection --}}
@section( 'main-content')


<div class="comics-book-container">
    <div class="banner"></div>
    <div class="comics-book-cover">
        <img src="{{ $comicsBook['thumb']}}" alt="{{ $comicsBook['title']}}">
        <div class=comics-book-txt>
            <h2> {{$comicsBook['title']}}</h2> {{-- uppercase  --}}
            <div class="comics-book-info">
                <div class="comics-book-price">{{-- d-flex j-space between border right --}}
                    <p>U.S. Price {{$comicsBook['price']}}</p>
                    <p>AVAILABLE</p>
                </div>
                <div class="comics-book-avaiability"> {{-- check avaiability --}}
                        <p>im a fking select</p>
                </div>
            </div>
            <p>
                {{$comicsBook['description']}}
            </p>
        </div>
    </div>
    <div class="comics-book-detail clearfix">
        <div class="talent">
            <h2>Talent</h2>
            <div class="artists">
                <h4> Art by:</h4>
            <p>
                @foreach ($comicsBook['artists'] as $artist)
                <span>{{$artist}}</span>,
                @endforeach
            </p>
            </div>
            <div class="writers">
                <h4>Written by:</h4>
            <p>
                @foreach ($comicsBook['writers'] as $writer)
                <span>{{$writer}}</span>
                @endforeach
        </div>
            </div>
        <div class="speces">
            <h2>Speces</h2>
            <div class=series>
                <h4> Series:</h4>
                <p>{{$comicsBook['series']}}</p>
            </div>
            <div class="price">
                <h4> U.S. Price:</h4>
                <p>{{$comicsBook['price']}}</p>
            </div>
            <div class="on-sale">
                <h4> On Sale Date:</h4>
                <p>{{$comicsBook['sale_date']}}</p>
            </div>
        </div>
    </div>
    <div class="comics-book-bottom">
        <ul>
            <li>
                <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                <span>
                    Digital comics
                </span>
            </li>
            <li>
                <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                <span>
                    dc merchandising
                </span></li>
            <li>
                <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    <span>
                        subscription
                    </span></li>
            <li><img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                <span>
                    comic shop locator
                </span></li>
            <li>
                <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                <span>
                    DC power visa
                </span>
            </li>

        </ul>
    </div>

</div>

@endsection
