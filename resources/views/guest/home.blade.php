@extends('guest.layout.base')

@section('documentTitle')
    Home
@endsection

@section('content')
    <main>
        <div class="jumbotron-bg">

            <div class="current">
                <h2>CURRENT SERIES</h2>
            </div>
        </div>
        <div class="container-80 cards-container">
            @foreach ($comics as $card)
                <div class="card">
                    <div class="container-img">
                        <img src="{{$card['thumb']}}" alt="{{$card['title']}}">
                    </div>
                    <h2>{{ $card['title'] }}</h2>
                </div>
            @endforeach
        </div>
    </main>
@endsection