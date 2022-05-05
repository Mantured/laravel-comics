

@extends('layouts.app')

@section('title', 'Comics Detail')

{{-- @section('heder-content')
@endsection --}}
@section( 'main-content')


<div class="comics-book-container">
    <div class="banner"></div>
        <div class="comics-book-detail">
            <img src="{{ $comicsBook['thumb']}}" alt="{{ $comicsBook['title']}}">
            <h4> {{$comicsBook['title']}}</h4>
        </div>
</div>

@endsection
