<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function homeRedirect(){
        return view('home');
    }

    public function charactersRedirect(){
        return view('pages.characters');
    }
    public function moviesRedirect(){
        return view('pages.movies');
    }

    public function tvRedirect(){
        return view('pages.tv');
    }
    public function gamesRedirect(){
        return view('pages.games');
    }
    public function collectiblesRedirect(){
        return view('pages.collectibles');
    }
    public function videosRedirect(){
        return view('pages.videos');
    }
    public function fansRedirect(){
        return view('pages.fans');
    }
    public function newsRedirect(){
        return view('pages.news');
    }
    public function shopRedirect(){
        return view('pages.shop');
    }
}
