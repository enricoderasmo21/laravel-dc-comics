<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

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
        $links = config('comics_links');
        $footerLinks = config('comics_footer_links');
        $buyLinks = config('comics_buy_links');
        $socialIconsList = config('comics_social_icons_list');

        return view('comics/index', compact('comics', 'links', 'footerLinks', 'buyLinks', 'socialIconsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $links = config('comics_links');
        $footerLinks = config('comics_footer_links');
        $buyLinks = config('comics_buy_links');
        $socialIconsList = config('comics_social_icons_list');$links = config('comics_links');
        
        return view('comics/create', compact('links', 'footerLinks', 'buyLinks', 'socialIconsList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $links = config('comics_links');
        $footerLinks = config('comics_footer_links');
        $buyLinks = config('comics_buy_links');
        $socialIconsList = config('comics_social_icons_list');

        return view('comics/show', compact('comic', 'links', 'footerLinks', 'buyLinks', 'socialIconsList'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
