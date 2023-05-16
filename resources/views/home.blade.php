@extends ('layouts/main')

@section('content')

<div id="home">

    <div class="container-centered home-container">
        
        <h2 class="title">Esplora i fumetti  --></h2>
        <button class="blue-btn">
            <a href=" {{route('comics.index')}} ">ESPLORA</a>  
        </button>
        
    </div>

</div>


@endsection