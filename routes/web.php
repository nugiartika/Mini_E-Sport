<?php

use App\Http\Controllers\TesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterOrganizerController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Route Admin
    Route::middleware('admin')->group(function () {
        Route::get('/admin', function () {
            return view('admin.index');
        })->name('admin.index');
        Route::get('/listUser', function () {
            return view('admin.listUser');
        })->name('listUser');
        Route::resource('category', CategoryController::class);
    });
});
    //Route Organizer
        Route::resource('ptournament', TournamentController::class);
        Route::get('/ptournamentfilter', [TournamentController::class, 'filter'])->name('tournament.filter');
        Route::get('/pdetail', function () {
            return view('penyelenggara.detailtournament');
        })->name('ptournament.detail');



    //route User
        Route::get('/tournament', function () {
            return view('user.tournament');
        })->name('user.tournament');


        Route::get('/detail', function () {
            return view('user.detailtournament');
        })->name('detailTournament');



        Route::get('/index', function () {
            return view('user.index');
        })->name('index');

        Route::get('/game', function () {
            return view('user.game');
        });

        Route::get('/detailteam', function () {
            return view('detailteam');
        });

        Route::get('/team', function () {
            return view('team');
        });


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});
