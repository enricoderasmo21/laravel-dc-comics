@extends ('layouts/main')

@section('content')

<div id="home">

    <div class="container-centered home-container">

        <div class="inner-container">
            <div class="title">Esplora i fumetti  --></div>
            <button class="blue-btn">
                <a href=" {{route('comics.index')}} ">ESPLORA</a>  
            </button>
        </div>

        <div class="inner-container">
            <div class="title">Aggiungi un fumetto  --></div>
            <button class="blue-btn">
                <a href=" {{route('comics.create')}} ">AGGIUNGI</a>  
            </button>
        </div>
        
    </div>

</div>


@endsection