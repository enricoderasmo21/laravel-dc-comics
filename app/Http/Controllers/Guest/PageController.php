<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $comics = config('comics');
        $links = config('comics_links');
        $footerLinks = config('comics_footer_links');
        $buyLinks = config('comics_buy_links');
        $socialIconsList = config('comics_social_icons_list');
        
        return view('home', compact('comics', 'links', 'footerLinks', 'buyLinks', 'socialIconsList'));
    }
}
