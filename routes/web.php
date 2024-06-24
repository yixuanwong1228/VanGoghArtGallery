<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtWorkController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/',[ArtworkController::class,'index']);

Route::get('/artwork_details/{id}',[ArtWorkController::class,'artwork_details']);

Route::get('/art_assistance/{id}',[ArtWorkController::class,'art_assistance']);

Route::post('/api/get_artwork_info', [ArtworkController::class, 'getArtworkInfo']);

Route::get('/face_change_game',[ArtworkController::class,'face_change_game']);

Route::get('/biography_timeline',[ArtistController::class,'biography_timeline']);

Route::get('/about',[ArtistController::class,'about']);

Route::get('/puzzle_index',[GameController::class,'puzzle_index']);

Route::get('/word_guess',[GameController::class,'word_guess']);

Route::get('/puzzle_board/{name}', [GameController::class, 'puzzle_board'])->name('puzzle_board');

Route::post('add_feedback', [ArtworkController::class, 'add_feedback'])->name('add_feedback');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin'
], function () {
    Route::get('/home_page', [AdminController::class, 'home_page'])->name('home_page');
    Route::get('/add_artist_page', [AdminController::class, 'add_artist_page'])->name('add_artist_page');
    Route::post('add_artist', [AdminController::class, 'add_artist'])->name('add_artist');
    Route::get('/artist_details/{id}',[AdminController::class,'artist_details'])->name('artist_details');
    Route::get('/view_artworks/{id}',[AdminController::class,'view_artworks'])->name('view_artworks');
    Route::get('/add_artwork_page/{id}',[AdminController::class,'add_artwork_page'])->name('add_artwork_page');
    Route::post('add_artwork', [AdminController::class, 'add_artwork'])->name('add_artwork');
    Route::get('/artwork_details/{id}',[AdminController::class,'artwork_details'])->name('artwork_details');
    Route::get('/view_biographies/{id}',[AdminController::class,'view_biographies'])->name('view_biographies');
    Route::get('/add_biography_page/{id}',[AdminController::class,'add_biography_page'])->name('add_biography_page');
    Route::post('add_biography', [AdminController::class, 'add_biography'])->name('add_biography');
    Route::post('update_artwork/{id}', [AdminController::class, 'update_artwork'])->name('update_artwork');
    Route::get('/feedback_artwork_lists/{id}',[AdminController::class,'feedback_artwork_lists'])->name('feedback_artwork_lists');
    Route::get('/feedback_details/{id}',[AdminController::class,'feedback_details'])->name('feedback_details');
    Route::get('/login_page', [AdminController::class, 'login_page'])->name('login_page');
    Route::post('login', [AdminController::class, 'login'])->name('login');
    Route::get('/view_videos/{id}',[AdminController::class,'view_videos'])->name('view_videos');
    Route::get('/add_video_page/{id}',[AdminController::class,'add_video_page'])->name('add_video_page');
    Route::post('add_video', [AdminController::class, 'add_video'])->name('add_video');
    Route::post('delete_video/{id}', [AdminController::class, 'delete_video'])->name('delete_video');
    Route::post('update_artist/{id}', [AdminController::class, 'update_artist'])->name('update_artist');
});