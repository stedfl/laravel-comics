<footer>
    <div class="footer-menu">
        <div class="container">
            <div class="left">
                <nav>
                    @foreach (config('db.footerMenu') as $itemMenu )
                        <ul>
                            <h3>{{$itemMenu['title']}}</h3>
                            @foreach ($itemMenu['items'] as $item )
                                <li>
                                    <a href="
                                    @if ($item['routeName'] === '#')
                                        {{$item['routeName']}}
                                    @else
                                        {{route($item['routeName'])}}
                                    @endif
                                    "
                                    >{{$item['text']}}</a>
                                </li>  
                            @endforeach
                        </ul>
                    @endforeach
                </nav>
                <p class="reserved-text">
                    <span class="capitalize">
                        all site content TM and &copy; 2020 DC entertainment,
                    </span>
                    unless otherwise <span><a class="link-reserved" href="#">noted here.</a></span>
                    All right reserved.
                    <span>
                        <a class="link-reserved capitalize" href="#">cookies setting</a>
                    </span>
                </p>
            </div>
            <div class="right">
                <img src="{{asset('img/dc-logo-bg.png')}}" alt="logo DC">
            </div>
        </div>
    </div>

    <div class="footer-social">
        <div class="container">
            <button>sign-up now!</button>
            <div class="social-icons">
                <a class="follow" href="#">follow us</a>
                <ul>
                    @foreach (config('db.footerSocial') as $item )
                        <li>
                            <a href="#">
                                <img src="{{Vite::asset('resources/img/'.$item['pathImage'])}}" alt="{{$item['name']}}">
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
