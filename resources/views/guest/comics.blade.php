@extends('guest.layout.base')

@section('documentTitle')
    Fumetti
@endsection

@section('content')

   {{-- @dd($comics) --}}
   <div class="container-comics">
       <div class="jumbotron-bg"></div>
    <div class="container-img">
        <img src="{{$comics['thumb']}}" alt="">
    </div>
    <div class="container-60">
        <div class="container-text flex">
            <div class="col-left">
                <div class="description">
                    <h1>{{ $comics['title'] }}</h1>
                    <div class="ticket flex">
                        <div class="col-left flex">
                            <p>U.S Price: <span>{{ $comics['price'] }}</span></p>
                            <p>AVAILABLE</p>
                        </div>
                        <div class="col-right flex">
                            <a href="#">CHECK Availability</a>
                        </div>
                    </div>
                    <div class="comics-description">
                        <p>{{ $comics['description'] }}</p>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <h3>ADVERTISEMENT</h3>
                <img src="{{ asset('img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container-info">
        <div class="container-60 flex">
            <div class="col-left">
                <h2>Talent</h2>
                <div class="artist flex">
                    <div class="col-left">
                        <p>Art by: </p>
                    </div>
                    <div class="col-right">
                        @foreach ($comics['artists'] as $artist)
                    <a href="#">{{ $artist }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="writers flex">
                    <div class="col-left">
                        <p>Written by: </p>
                    </div>
                    <div class="col-right">
                        @foreach ($comics['writers'] as $artist)
                    <a href="#">{{ $artist }}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-right">
                <h2>Specs</h2>
                <div class="series flex">
                    <div class="col-left">
                        <p>Series: </p>
                    </div>
                    <div class="col-right">
                        <a href="#" id="serie">{{ $comics['series']}}</a>
                    </div>
                </div>
                <div class="price flex">
                    <div class="col-left">
                        <p>U.S. Price: </p>
                    </div>
                    <div class="col-right">
                        <p>{{ $comics['price']}}</p>
                    </div>
                </div>
                <div class="sale-date flex">
                    <div class="col-left">
                        <p>On Sale Date: </p>
                    </div>
                    <div class="col-right">
                        <p>{{ $comics['sale_date']}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-icons flex">
        <div class="container-60 flex">
                <div class="box flex">
                    <h3>DIGITAL COMICS</h3>
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
                </div>
                <div class="box flex">
                    <h3>SHOP DC</h3>
                    <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
                </div>
                <div class="box flex">
                    <h3>COMIC SHOP LOCATOR</h3>
                    <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
                </div>
                <div class="box flex">
                    <h3>SUBSCRIPTIONS</h3>
                     <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
   </div>
@endsection