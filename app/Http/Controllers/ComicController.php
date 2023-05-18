<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics/index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);

        $formData = $request->all();
        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {

        return view('comics/show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics/edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);
        
        $formData = $request->all();
        $comic->update($formData);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }


    private function validation($request){

        $formData = $request->all();

        $validator = Validator::make($formData, [

            'title' => 'required|max:50|min:4',
            'description' => 'required|max:1000|min:10',
            'thumb' => 'required|active_url',
            'price' => 'required|max:10|min:4',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => 'required|max:20',
            'artists' => 'required|max:200',
            'writers' => 'required|max:200' 
        ], [
            'title.required' => 'Devi inserire il titolo del fumetto!',
            'title.max' => 'Non puoi inserire più di 50 caratteri!',
            'title.min' => 'Devi inserire almeno 4 caratteri!',

            'description.required' => 'Devi inserire la descrizione del fumetto!',
            'description.max' => 'Non puoi inserire più di 1000 caratteri!',
            'description.min' => 'Devi inserire almeno 10 caratteri!',

            'thumb.required' => "Devi inserire il percorso dell'immagine del fumetto!",
            'thumb.active_url' => "L'immagine deve avere un URL valido!",

            'price.required' => 'Devi inserire il prezzo del fumetto!',
            'price.max' => 'Non puoi inserire più di 10 caratteri!',
            'price.min' => 'Devi inserire almeno 4 caratteri!',

            'series.required' => 'Devi inserire la serie del fumetto!',
            'series.max' => 'Non puoi inserire più di 50 caratteri!',

            'sale_date.required' => 'Devi inserire la data del fumetto!',
            'sale_date.date' => 'Questo campo deve contenere una data valida!',

            'type.required' => 'Devi inserire il tipo di fumetto!',
            'type.max' => 'Non puoi inserire più di 20 caratteri!',

            'artists.required' => "Devi inserire l'artista/gli artisti del fumetto!",
            'artists.max' => 'Non puoi inserire più di 200 caratteri!',

            'writers.required' => "Devi inserire lo scrittore/gli scrittori del fumetto!",
            'writers.max' => 'Non puoi inserire più di 200 caratteri!',

        ])->validate(); 
        
        return $validator;
    }
}
