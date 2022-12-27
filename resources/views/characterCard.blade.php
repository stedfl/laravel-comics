@extends('layouts.main')

@section('content')
    <main class="info-card">
        <div class="current-card">
            <div class="container info">
                <img src="{{$comic_get['thumb']}}" alt="poster {{$comic_get['title']}}">
            </div>
        </div>
        <div class="top-info">
            <div class="container info top">
                <div class="col-left">
                    <h1 class="title">{{$comic_get['title']}}</h1>
                    <div class="availability-bar">
                        <div class="price-box">
                            <div class="price">
                               <span class="text">U.S. Price: </span>  
                                <span class="float">{{$comic_get['price']}}</span> 
                            </div>
                            <span class="status">available</span>
                        </div>
                        <div class="check">Check Availability</div>
                    </div>
                    <div class="description">
                        {{$comic_get['description']}}
                    </div>
                </div>
                <div class="col-right">
                    <h3>advertisement</h3>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="logo adv">
                </div>
            </div>
        </div>
        <div class="bottom-info">
            <div class="specific">
                <div class="container info">
                    <div class="col-left">
                        <h2>Talent</h2>
                        <div class="row">
                            <span class="title">Art by:</span>
                            <span class="list special">
                                {{implode(', ', $comic_get['artists'])}}
                            </span>
                        </div>
                        <div class="row">
                            <span class="title">Written by:</span>
                            <span class="list special">
                                {{implode(',', $comic_get['writers'])}}
                            </span>
                        </div>
                    </div>
                    <div class="col-right">
                        <h2>Specs</h2>
                        <div class="row">
                            <span class="title">Series:</span>
                            <span class="list special series">{{$comic_get['series']}}</span>
                        </div>
                        <div class="row">
                            <span class="title">U.S. Price:</span>
                            <span class="list">{{$comic_get['price']}}</span>
                        </div>
                        <div class="row">
                            <span class="title">On Sale Date:</span>
                            <span class="list">{{$comic_get['sale_date']}}</span>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </main>
@endsection
