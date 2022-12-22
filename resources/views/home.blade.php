@extends('layouts.main')

@section('content')
<main class="home">
    <div class="container">
        <span class="current">current series</span>
        <div class="cards">
            @foreach ($comics as $comic )
            <div class="card">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                <h3>{{$comic['series']}}</h3>
            </div>
            @endforeach
            <button>load more</button>
        </div>
    </div>
</main>
@endsection
