@extends('layouts.main')

@section('content')
    <main class="info-card">
        <div class="current-card">
            <div class="container info">
                <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="poster">
            </div>
        </div>
        <div class="top-info">
            <div class="container info top">
                <div class="col-left">
                    <h2 class="title"></h2>
                    <div class="availability-bar">
                        <div class="price">
                            <span>U.S. Price:</span>
                            <span class="status"></span>
                        </div>
                        <div class="check">Check Availability</div>
                    </div>
                    <div class="description"></div>
                </div>
                <div class="col-right">
                    <h3>advertisement</h3>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
        <div class="bottom-info">
        </div>
    </main>
@endsection
