<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterOrganizerController;
use App\Http\Controllers\SainsRoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    // Admin Routes
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [DashboardAdminController::class, 'index'])->name('admin.index');
        Route::get('/listUserPenyelenggara', [SainsRoleController::class, 'index'])->name('listUserPenyelenggara');
        Route::get('/listUser', [UserController::class, 'index'])->name('listUser');
        Route::get('/listOrganizer', [UserController::class, 'indexpenyelenggara'])->name('listPenyelenggara');
        Route::resource('category', CategoryController::class);
        Route::get('confirmtournament', [TournamentController::class, 'indexadmin'])->name('konfirmtournament');
        Route::get('konfirmtournament/{konfirmtournament}/edit', [TournamentController::class, 'edit'])->name('konfirm.edit');
        Route::put('konfirmtournament/{id}', [TournamentController::class, 'update'])->name('konfirm.update');
        Route::put('listUserPenyelenggara/{sainsRole}', [SainsRoleController::class, 'update'])->name('konfirmUser');
        Route::delete('rejectUser/{idUser}', [SainsRoleController::class, 'destroy'])->name('rejectUser');
        Route::delete('deleteUser/{idUser}',[UserController::class, 'destroy'])->name('deleteUser');
        Route::get('chart', [DashboardAdminController::class, 'response'])->name('chart');
    });

    // Organizer Routes
    Route::middleware('organizer')->group(function () {
        Route::get('/DashboardOrganizer', [TournamentController::class, 'dashboard'])->name('dashboardPenyelenggara');
        Route::resource('ptournament', TournamentController::class);
        Route::get('/ptournamentfilter', [TournamentController::class, 'filter'])->name('tournament.filter');
        Route::get('/DetailTournament', function () {
            return view('penyelenggara.detailtournament');
        })->name('ptournament.detail');
        Route::get('/games', [CategoryController::class, 'indexuser'])->name('games');
    });

    // User Routes
    Route::middleware('user')->group(function () {
        Route::get('/admin/listUser', [SainsRoleController::class, 'create'])->name('admin.listUser');
        Route::get('/index', function () {
            return view('user.index');
        })->name('index');
        Route::get('/game', [CategoryController::class, 'indexusers'])->name('game');
        Route::get('/detailteam', function () {
            return view('detailteam');
        })->name('team.detail');
    });
});

// Public Routes
Route::get('tournament', [TournamentController::class, 'indexuser'])->name('user.tournament');
Route::resource('team', TeamController::class);
Route::resource('member', MemberController::class);
Route::get('tournament/{tournament}', [TournamentController::class, 'detail'])->name('detailTournament');
Route::get('/game', function () {
    return view('user.game');
})->name('game');
Route::get('/detailteam', function () {
    return view('detailteam');
})->name('team.detail');
Route::get('/', function () {
    return view('user.index');
})->name('home');

