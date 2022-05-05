

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
        <div>talent</div>
        <div>speces</div>
    </div>

</div>

@endsection
