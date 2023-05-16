@extends ('layouts/main')

@section('content')

<div id="create">

    <div class="container-centered create-container">

        <h2 class="title">Aggiungi un fumetto</h2>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
              <label class="form-label text-light" for="title">Titolo</label>
              <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label text-light" for="description">Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label text-light" for="thumb">Percorso immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
              </div>
              <div class="mb-3">
                <label class="form-label text-light" for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
              </div>
              <div class="mb-3">
                <label class="form-label text-light" for="series">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
              </div>
              <div class="mb-3">
                <label class="form-label text-light" for="sale_date">Data di uscita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
              </div>
            <div class="mb-3">
              <label class="form-label text-light" for="type">Tipo</label>
              <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label class="form-label text-light" for="artists">Artisti</label>
                <input type="text" class="form-control" id="artists" name="artists">
              </div>
              <div class="mb-3">
                <label class="form-label text-light" for="writers">Scrittori</label>
                <input type="text" class="form-control" id="writers" name="writers">
              </div>
            <button type="submit" class="btn btn-primary">AGGIUNGI</button>
        </form>
        
    </div>
</div>


@endsection