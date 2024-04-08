@extends('layouts/app')

@section('content')
<main>
    <div id="comic-details">
        <div class="bar"></div>

        <div class="container d-flex ">
            <div class="details">
                <h2>{{$comic['title']}}</h2>

                <div class="availability">
                    <div class="left">
                        <div class="price">U.S. Price: <span>{{$comic['price']}}</span></div>
                        <span>Avaible</span>
                    </div>
                    <div class="right">
                        Check Availability 
                        <i>▼</i>
                    </div>
                </div>

                <p>{{$comic['description']}}</p>
            </div>

            <div class="img-wrapper">
                <div>Advertise</div>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>

        </div>
    </div>

    <hr class="m-0">

    <div id="more-comic-infos">
        <div class="container d-flex">

            <div class="talent">
                <h3>Talent</h3>
                <hr>
                <ul>
                    <li>
                        <span>Art by:</span>
                        <p>
                            José Luis Garcia-Lôpez, Clay Mann, Rafael Albuquerque,
                            Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams,
                            Curt Swan, John Cassaday, Olivier Coipel, Jim Lee
                        </p>
                    </li>
                    <li>
                        <span>Written by:</span>
                        <p>
                            Brad Meltzer, Tom King. Scott Snyder, Geoff Johns,
                            Brian Michael Bendis, Paul Dini, Louise Simonson,
                            Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan
                            Jurgens. Jerry Siegel, Paul Levitz
                        </p>
                    </li>
                </ul>
            </div>

            <div class="specs">
                <h3>Specs</h3>
                <hr>

                <ul>
                    <li>
                        <span>Series:</span>
                        <div class="series"> {{$comic['series']}} </div>
                    </li>
                    <li>
                        <span>U.S. Price: </span>
                        <div>{{$comic['price']}}</div>
                    </li>
                    <li>
                        <span>On sale Date:</span>
                        <div>{{ $formattedDate }}</div>
                    </li>
                </ul>
            </div>

        </div>
    </div>

    <div id="icons">
        <div class="container">
            {{-- images --}}
        </div>
    </div>
</main>
@endsection