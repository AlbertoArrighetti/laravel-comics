@extends('layouts/app')

@section('content')
<main>
    {{-- comics section --}}
    <section id="homepage">
        <div class="container">
            <div class="my_btn absolute">
                <button>current series</button>
            </div>
    
            <div class="row row-cols-6">
                
                @foreach ($comics as $currentComic)
                <a href="comic" class="comic-card">
                    <div class="thumb">
                        <img src="{{$currentComic['thumb']}}" alt="">
                    </div>
        
                    <div class="title">
                        <div>{{$currentComic['series']}}</div>
                    </div>
                </a>
                @endforeach
            </div> 
    
            <div id="bottom-main" class="d-flex justify-content-center">
                <div class="my_btn more">
                    <button>load more</button>
                </div>
            </div>
        </div>
    </section>



    {{-- categories section --}}
    <section id="categories">
        <div class="container">
            <div class="row row-cols-5">
                @foreach ($categories as $currentCategory)
                    <div class="category-card d-flex">
                        <div class="category-img">
                            <img src="{{ Vite::asset('resources/img' . $currentCategory['url']) }}" alt="">
                        </div>
                        <div class="category-title">
                            {{$currentCategory['title']}}
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </section>

</main>
@endsection