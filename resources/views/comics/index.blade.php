@extends ('layouts/main')

@section('content')

<div id="main">
    
    <div class="main-container">
        <div class="container-centered">
            <button id="btn-absolute" class="blue-btn">CURRENT SERIES</button>
            <div id="cards-container">
                @foreach($comics as $card)
                
                <a href="" class="card">
                    <img src="{{ $card->thumb }}" alt="">
                    <div class="title"> {{ strtoupper($card->title) }} </div>
                </a>
               
                @endforeach
            </div>
            <div class="btn-container">
                <button id="btn-load" class="blue-btn">LOAD MORE</button>
            </div>
        </div>  
    </div>

    <section class="shop-section">
        <div class="container-centered">
            
            <div class="links-container">
                @foreach($buyLinks as $link)
                <a class="link">
                    <div class="img-container">
                        <img src="{{Vite::asset($link['image'])}}" alt="">
                    </div>
                    <div class="text">
                        {{ strtoupper($link['text']) }}
                    </div>
                </a>
                @endforeach
            </div>
           
        </div>
    </section>
</div>

@endsection