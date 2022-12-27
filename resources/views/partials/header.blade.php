<header>
    <div class="header-top">
        <div class="container">
            <a href="#">dc power visa &reg;</a>
            <a href="#">additional dc sites <span class="chevron">&#x25BC;</span></a>
        </div>
    </div>
    <div class="container nav-bar">
        <div class="logo">
            <a href="{{route('home')}}"><img src="{{asset('img/dc-logo.png')}}" alt="logo Dc" /></a>
        </div>
        <nav>
            <ul>
                @foreach (config('db.navigationMenu') as $item )
                    <li>
                        <a class="{{Route::currentRouteName() == $item['routeName'] ? 'active' : ''}}" href="{{route($item['routeName'])}}">{{$item['text']}}</a>
                    </li> 
                @endforeach
            </ul>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <span><i class="fa-solid fa-magnifying-glass icon"></i></span>
        </div>
    </div>
</header>
