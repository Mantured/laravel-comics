

@extends('layouts.app')

@section('title', 'Comics Detail')

{{-- @section('heder-content')
@endsection --}}
@section( 'main-content')

<div class="container-fluid bg-primary banner">
    <div class="container-banner ">
        <img src="{{ $comicsBook['thumb']}}" alt="{{ $comicsBook['title']}}">
    </div>
</div>
<div class="container-fluid">
    <div class="container-top position-relative">
        <div class="row">
            <div class="col-9">
                <h2> {{$comicsBook['title']}}</h2>
                <div class="row">
                    <div class="col-8 d-flex justify-content-between">
                        <p>U.S. Price {{$comicsBook['price']}}</p>
                        <p>AVAILABLE</p>
                    </div>
                    <div class="col-4 text-end">
                        <p>
                            Check Avaiability &#9662;
                        </p>
                    </div>
                </div>
                <p>
                    {{$comicsBook['description']}}
                </p>

            </div>
            <div class="col-3">
                <p class="text-uppercase text-end"> adv</p>
                <img  class="img-fluid" src="{{asset("images/adv.jpg")}}" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-comics-book">
    <div class="container-bottom">
        <div class="row">
            <div class="col-6">
                <h3>
                    Talent
                </h3>
                <div class="row">
                    <div class="col-4">
                        <h5>Art by :</h5>
                    </div>
                    <div class="col-8">
                        <p>
                            @foreach ($comicsBook['artists'] as $artist)
                            <span>{{$artist}}</span>,
                            @endforeach
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h5>Written by : </h5>
                    </div>
                    <div class="col-8">
                        <p>
                            @foreach ($comicsBook['writers'] as $writer)
                            <span>{{$writer}}</span>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h3>
                    Specs
                </h3>
                <div class="row">
                    <div class="col-4 ">
                        <h5>Series: </h5>
                    </div>
                    <div class="col-8 text-uppercase">
                        <p>{{$comicsBook['series']}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h5>U.S. Price :</h5>
                    </div>
                    <div class="col-8">
                        <p>{{$comicsBook['price']}}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <h5> On Sale Date: </h5>
                    </div>
                    <div class="col-8">
                        <p>{{$comicsBook['sale_date']}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-icons">
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
</div>


{{-- <div class="comics-book-container">
    <div class="banner"></div>
    <div class="comics-book-cover">
        <img src="{{ $comicsBook['thumb']}}" alt="{{ $comicsBook['title']}}">
        <div class=comics-book-txt>
            <h2> {{$comicsBook['title']}}</h2>
            <div class="comics-book-info">
                <div class="comics-book-price">
                    <p>U.S. Price {{$comicsBook['price']}}</p>
                    <p>AVAILABLE</p>
                </div>
                <div class="comics-book-avaiability">

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

</div> --}}

@endsection
