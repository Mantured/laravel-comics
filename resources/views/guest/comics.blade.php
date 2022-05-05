@extends('layouts.app')

@section('title', 'Comics')

@section('main-content')

<div class="index-main-top">
    @foreach ( $comics as $index => $comic )
        <div class="comic-card">
            <img src="{{ $comic['thumb']}}" alt="{{ $comic['title']}}">
            <a href={{route("comics-detail", ['index' => $index])}}>
                <h4> {{$comic['title']}}</h4>
            </a>
        </div>
    @endforeach
</div>
<div class="index-main-bottom">
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

@endsection
