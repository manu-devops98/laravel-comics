<header>
    <div class="header-top">
        <div class="container-80 flex">
            <h4>DC POWER VISA</h4>
            <h4>ADDITIONAL DC SITES</h4>
        </div>
    </div>
    <div class="container-80">
        <div class="header-bottom flex">
            <img src="{{asset('img/dc-logo.png')}}" alt="" />
            <ul class="flex">
              <li><a class="{{ 'characters' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('characters')}}">CHARACTERS</a></li>
              <li><a class="{{ 'home' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('home')}}">COMICS</a></li>
              <li><a class="{{ 'movies' === Route::currentRouteName() ? 'active' : '' }}" href="{{route('movies')}}">MOVIES</a></li>
              <li><a href="">TV</a></li>
              <li><a href="">GAMES</a></li>
              <li><a href="">COLLECTIBLES</a></li>
              <li><a href="">VIDEOS</a></li>
              <li><a href="">FANS</a></li>
              <li><a href="">NEWS</a></li>
              <li><a href="">SHOP</a></li>
            </ul>
            <div class="input">
                <form action="">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</header>