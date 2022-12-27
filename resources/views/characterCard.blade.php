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
                    <h1 class="title">Action Comics #1000: The Deluxe Edition</h1>
                    <div class="availability-bar">
                        <div class="price-box">
                            <div class="price">
                               <span class="text">U.S. Price: </span>  
                                <span class="float">$19.99</span> 
                            </div>
                            <span class="status">available</span>
                        </div>
                        <div class="check">Check Availability</div>
                    </div>
                    <div class="description">
                        The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                    </div>
                </div>
                <div class="col-right">
                    <h3>advertisement</h3>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
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
                            <span class="list special">  'José Luis García-López',
                                'Clay Mann',
                                'Rafael Albuquerque',
                                'Patrick Gleason',
                                'Dan Jurgens',
                                'Joe Shuster',
                                'Neal Adams',
                                'Curt Swan',
                                'John Cassaday',
                                'Olivier Coipel',
                                'Jim Lee',</span>
                        </div>
                        <div class="row">
                            <span class="title">Written by:</span>
                            <span class="list special">     'Brad Meltzer',
                                'Tom King',
                                'Scott Snyder',
                                'Geoff Johns',
                                'Brian Michael Bendis',
                                'Paul Dini',
                                'Louise Simonson',
                                'Richard Donner',
                                'Marv Wolfman',
                                'Peter J. Tomasi',
                                'Dan Jurgens',
                                'Jerry Siegel',
                                'Paul Levitz',</span>
                        </div>
                    </div>
                    <div class="col-right">
                        <h2>Specs</h2>
                        <div class="row">
                            <span class="title">Series:</span>
                            <span class="list special series">action comics</span>
                        </div>
                        <div class="row">
                            <span class="title">U.S. Price:</span>
                            <span class="list">$19.99</span>
                        </div>
                        <div class="row">
                            <span class="title">On Sale Date:</span>
                            <span class="list">Oct 2 2018</span>
                        </div>
                    </div>
                </div>
            </div>       
        </div>
    </main>
@endsection
