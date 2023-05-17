@extends ('layouts/main')

@section('content')

<div id="show">
    
    <div id="sep">

    </div>

    <div class="container-centered">

        <div id="main-sec">

            <div id="thumb-container">
                <img src="{{ $comic->thumb }}" alt="">
            </div>

            <div id="left-container">
                <div id="title">{{ strtoupper($comic->title) }}</div>
                <div class="green-tab">
                    <div class="first-tab-sec">
                        <div> <span class="price">U.S. Price:</span> {{ $comic->price }} </div>
                        <div class="available">AVAILABLE</div>
                    </div>
                    <div class="second-tab-sec">
                        Check availability &#9660;
                    </div>
                </div>
                <p class="paragraph"> {{ $comic->description }} </p>
            </div>

            <div id="right-container">
                <div id="ad">ADVERTISEMENT</div>
                <div id="ad-container">
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bot-container">

        <div class="container-centered">

            <div class="inner-container">

                <div class="left-container container">
                    <h3>Talent</h3>
                    <hr>
                    <div class="_row">
                        <div class="label">Art by:</div>  <div class="text">{{ $comic->artists }}</div>
                    </div>
                    <hr>
                    <div class="_row">
                        <div class="label">Written by:</div>  <div class="text">{{ $comic->writers }}</div>
                    </div>
                    <hr>
                </div>

                <div class="right-container container">
                    <h3>Specs</h3>
                    <hr>
                    <div class="_row">
                        <div class="label">Series:</div>  <div class="text">{{$comic->series}}</div>
                    </div>
                    <hr>
                    <div class="_row">
                        <div class="label">U.S. Price:</div>  <div class="text">{{$comic->price}}</div>
                    </div>
                    <hr>
                    <div class="_row">
                        <div class="label">On sale date:</div>  <div class="text">{{$comic->sale_date}}</div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="buttons-container">

            <button class="blue-btn mb-3">
                <a href="{{route('comics.edit', $comic->id)}}" class="text-light">MODIFICA</a>
            </button>

            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="red-btn mb-3" type="submit">RIMUOVI</button>
            </form>

        </div>
    </div>
</div>


@endsection