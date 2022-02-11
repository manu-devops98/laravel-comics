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
        <div class="button flex">
            <button><a href="">LOAD MORE</a></button>
        </div>
        <div class="container-icons">
            <div class="container-80">
                <div class="box">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                    <h3>DIGITAL COMICS</h3>
                </div>
                <div class="box">
                    <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                    <h3>DC MERCHANDISE</h3>
                </div>
                <div class="box">
                    <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
                    <h3>SUBSCRIPTION</h3>
                </div>
                <div class="box">
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                    <h3>COMIC SHOP LOCATOR</h3>
                </div>
                <div class="box">
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                    <h3>DC POWER VISA</h3>
                </div>
            </div>
        </div>
    </main>
@endsection