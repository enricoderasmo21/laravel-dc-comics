@extends ('layouts/main')

@section('content')

<div id="create-edit">

    <div class="container-centered create-container">

        <h2 class="title">Modifica un fumetto</h2>

        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label class="form-label text-light" for="title">Titolo</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value='{{old('title') ?? $comic->title}}'>
              
              @error('title')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label text-light" for="description">Descrizione</label>
              <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"> {{old('desription') ?? $comic->description}} </textarea>
              
              @error('description')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror 
            </div>

            <div class="mb-3">
              <label class="form-label text-light" for="thumb">Percorso immagine</label>
              <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value='{{old('thumb') ?? $comic->thumb}}'>
              
              @error('thumb')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror 
            </div>

            <div class="mb-3">
              <label class="form-label text-light" for="price">Prezzo</label>
              <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value='{{old('price') ?? $comic->price}}'>
              
              @error('price')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror 
            </div>

            <div class="mb-3">
              <label class="form-label text-light" for="series">Serie</label>
              <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value='{{old('series') ?? $comic->series}}'>
              
              @error('series')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror 
            </div>

            <div class="mb-3">
              <label class="form-label text-light" for="sale_date">Data di uscita</label>
              <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value='{{old('sale_date') ?? $comic->sale_date}}'>
              
              @error('sale_date')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror 
            </div>

            <div class="mb-3">
              <label class="form-label text-light" for="type">Tipo</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value='{{old('type') ?? $comic->type}}'>
              
              @error('type')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror 
            </div>

            <div class="mb-3">
              <label class="form-label text-light" for="artists">Artisti</label>
              <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" value='{{old('artists') ?? $comic->artists}}'>
              
              @error('artists')
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror 
              </div>

              <div class="mb-3">
                <label class="form-label text-light" for="writers">Scrittori</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" value='{{old('writers') ?? $comic->writers}}'>
                
                @error('writers')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror 
              </div>

            
            <button type="submit" class="btn btn-primary">MODIFICA</button>
        </form>
        
    </div>
</div>


@endsection

