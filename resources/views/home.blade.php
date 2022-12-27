@extends('layouts.main')

@section('content')
<main class="home">
    <div class="container">
        <span class="current">current series</span>
        <div class="cards">
            @foreach ($comics as $comic )
            <div class="card">
                <a href="{{route('character-details', ['id' => $comic['id']])}}">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                </a>
                <h3>{{$comic['series']}}</h3>
            </div>
            @endforeach
            <button>load more</button>
        </div>
    </div>
    <div class="buy-bar">
        <nav>
          <ul>
            @foreach ($menuBuy as $item )
                <li>
                    <div class="buy-card">
                        <img src="{{Vite::asset('resources/img/'.$item['pathImage'])}}" alt="{{$item['text']}} logo">
                    </div>
                    <a href="#">{{$item['text']}}</a>
                </li>
            @endforeach
          </ul>
        </nav>
    </div>
</main>
@endsection
