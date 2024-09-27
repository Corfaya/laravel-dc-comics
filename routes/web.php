<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController as PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'homeRedirect'])->name('homepage');

Route::get('/characters', [PagesController::class, 'charactersRedirect'])->name('characters');

Route::get('/movies', [PagesController::class, 'moviesRedirect'])->name('movies');

Route::get('/tv', [PagesController::class, 'tvRedirect'])->name('tv');

Route::get('/games', [PagesController::class, 'gamesRedirect'])->name('games');

Route::get('/collectibles', [PagesController::class, 'collectiblesRedirect'])->name('collectibles');

Route::get('/videos', [PagesController::class, 'videosRedirect'])->name('videos');

Route::get('/fans', [PagesController::class, 'fansRedirect'])->name('fans');

Route::get('/news', [PagesController::class, 'newsRedirect'])->name('news');

Route::get('shop', [PagesController::class, 'shopRedirect'])->name('shop');