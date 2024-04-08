@extends('layouts/app')

@section('content')
<main id="homepage">
    <div class="container">
        <div class="my_btn absolute">
            <button>current series</button>
        </div>

        <div class="row row-cols-6">
            
            @foreach ($comics as $currentComic)
            <div class="comic-card">
                <div class="thumb">
                    <img src="{{$currentComic['thumb']}}" alt="">
                </div>
    
                <div class="title">
                    <div>{{$currentComic['series']}}</div>
                </div>
            </div>
            @endforeach
        </div> 

        <div id="bottom-main" class="d-flex justify-content-center">
            <div class="my_btn more">
                <button>load more</button>
            </div>
        </div>
    </div>
</main>
@endsection