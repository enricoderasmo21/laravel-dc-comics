@extends ('layouts/main')

@section('content')

<div id="main">
    
    <div class="main-container">
        <div class="container-centered">
            <button id="btn-absolute" class="blue-btn">CURRENT SERIES</button>
            <div id="cards-container">
                @foreach($comics as $card)
                
                <a href="{{route('comics.show', $card->id)}}" class="card">
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
                <a class="link">
                    <div class="img-container">
                        <img src="http://[::1]:5173/resources/img/buy-comics-digital-comics.png" alt="">
                    </div>
                    <div class="text">
                        DIGITAL COMICS
                    </div>
                </a>
                <a class="link">
                    <div class="img-container">
                        <img src="http://[::1]:5173/resources/img/buy-comics-merchandise.png" alt="">
                    </div>
                    <div class="text">
                        DC MERCHANDISE
                    </div>
                </a>
                <a class="link">
                    <div class="img-container">
                        <img src="http://[::1]:5173/resources/img/buy-comics-subscriptions.png" alt="">
                    </div>
                    <div class="text">
                        SUBSCRIPTION
                    </div>
                </a>
                <a class="link">
                    <div class="img-container">
                        <img src="http://[::1]:5173/resources/img/buy-comics-shop-locator.png" alt="">
                    </div>
                    <div class="text">
                        COMIC SHOP LOCATOR
                    </div>
                </a>
                <a class="link">
                    <div class="img-container">
                        <img src="http://[::1]:5173/resources/img/buy-dc-power-visa.svg" alt="">
                    </div>
                    <div class="text">
                        DC POWER VISA
                    </div>
                </a>
            </div>
        </div>
        
    </div>
</section>
</div>

@endsection