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
</main>
@endsection