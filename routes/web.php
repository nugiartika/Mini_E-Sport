<?php

use App\Http\Controllers\TesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterOrganizerController;
use App\Http\Controllers\TeamController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('signin', function () {
    return view('login');
});

Route::get('/tes', function (){
    return view('tes');
});
Route::get('/date', function (){
    return view('date');
});

Route::get('/index', function (){
    return view('user.index');
})->name('index');

Route::get('/tournament', function (){
    return view('user.tournament');
})->name('user.tournament');

Route::resource('ptournament', TournamentController::class);
Route::get('/ptournamentfilter', [TournamentController::class, 'filter'])->name('tournament.filter');
Route::get('/pdetail', function (){
    return view('penyelenggara.detailtournament');
})->name('ptournament.detail');

Route::get('/detail', function (){
    return view('user.detailtournament');
})->name('detailTournament');

Route::get('/game', function (){
    return view('user.game');
});

Route::middleware('admin')->group(function(){
    Route::get('/admin', function(){
        return view('admin.index');
    })->name('admin.index');
    Route::get('/listUser', function(){
        return view('admin.listUser');
    })->name('listUser');
    Route::get('konfirmtournament',[TournamentController::class, 'indexadmin'])->name('konfirmtournament');
    Route::resource('category', CategoryController::class);
    Route::get('/form', function(){
        return view('admin.form');
    });
});


Route::middleware('user')->group(function(){
    Route::resource('team', TeamController::class);
    Route::get('/team/{team}', [TeamController::class, 'indexdetail'])->name('team.detail');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



