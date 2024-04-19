<?php

use App\Http\Controllers\TesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TournamentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
Route::get('signin', function () {
    return view('login');
});

Auth::routes();

Route::get('/tes', function (){
    return view('tes');
});

Route::get('/index', function (){
    return view('user.index');
});

Route::get('/tournament', function (){
    return view('user.tournament');
});

Route::resource('ptournament', TournamentController::class);
Route::get('/ptournamentfilter', [TournamentController::class, 'filter'])->name('tournament.filter');
Route::get('/pdetail', function (){
    return view('penyelenggara.detailtournament');
})->name('ptournament.detail');

Route::get('/detail', function (){
    return view('user.detailtournament');
});

Route::get('/game', function (){
    return view('user.game');
});

Route::get('/team', function (){
    return view('team');
});

Route::get('/detailteam', function (){
    return view('detailteam');
});

Route::middleware('admin')->group(function(){
    Route::get('/admin', function(){
        return view('admin');
    });
    Route::resource('   ', CategoryController::class);
});

