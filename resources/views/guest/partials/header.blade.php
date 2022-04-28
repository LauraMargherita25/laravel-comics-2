<header>
    <div class="container">
        <div class="img_wrapper">
            <a href="{{ route('home')}}">
                <img src="{{ asset('images/dc-logo.png') }}" alt="">
            </a>
        </div>
  
        <nav>
            <ul>
                {{-- @foreach ($nav as $navItem)
                    <li class="{{ Route::currentRouteName() == $navItem['link'] ? 'active' : '' }}"><a href="{{ $navItem['link'] }}">{{ $navItem['text'] }}</a></li>
                @endforeach --}}
                <li class="{{ Route::currentRouteName() == 'characters' ? 'active' : '' }}"><a href="{{ route('characters')}}">characters</a></li>
                <li class="{{ Route::currentRouteName() == 'comics' ? 'active' : '' }}"><a href="{{ route('comics')}}">comics</a></li>
                <li><a href="#">movies</a></li>
                <li><a href="#">tv</a></li>
                <li><a href="#">games</a></li>
                <li><a href="#">collectibles</a></li>
                <li><a href="#">videos</a></li>
                <li><a href="#">fans</a></li>
                <li><a href="#">news</a></li>
                <li><a href="#">shop</a></li>
            </ul>
        </nav>
      </div>
</header>