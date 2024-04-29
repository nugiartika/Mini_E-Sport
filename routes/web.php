<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\TesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\RegisterOrganizerController;
use App\Http\Controllers\SainsRoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\UserController;
use App\Models\DashboardAdmin;
use App\Models\SainsRole;
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
        Route::get('/DashboardAdmin', [DashboardAdminController::class, 'index'])->name('admin.index');
        Route::get('/AccUser', [SainsRoleController::class, 'index'])->name('listUserPenyelenggara');
        Route::get('/listUser', [UserController::class, 'index'])->name('listUser');
        Route::get('/listOrganizer', [UserController::class, 'indexpenyelenggara'])->name('listPenyelenggara');
        Route::resource('category', CategoryController::class);
        Route::get('confirmtournament', [TournamentController::class, 'indexadmin'])->name('konfirmtournament');
        Route::get('konfirmtournament/{konfirmtournament}/edit', [TournamentController::class, 'edit'])->name('konfirm.edit');
        Route::put('konfirmtournament/{id}', [TournamentController::class, 'update'])->name('konfirm.update');
        Route::put('konfirmUser/{idUser}', [SainsRoleController::class, 'update'])->name('konfirmUser');
        Route::delete('rejectUser/{idUser}', [SainsRoleController::class, 'destroy'])->name('rejectUser');
        Route::delete('deleteUser/{idUser}',[UserController::class, 'destroy'])->name('deleteUser');
        Route::get('chart', [DashboardAdminController::class, 'response'])->name('chart');
    });


    Route::middleware('organizer')->group(function () {
        Route::get('/DashboardOrganizer', [TournamentController::class, 'dashboard'])->name('dashboardPenyelenggara');
        Route::resource('ptournament', TournamentController::class);
        Route::get('/ptournamentfilter', [TournamentController::class, 'filter'])->name('tournament.filter');
        Route::get('/DetailTournament', function () {
            return view('penyelenggara.detailtournament');
        })->name('ptournament.detail');
        Route::get('/games', [CategoryController::class, 'indexuser'])->name('games');
    });


    Route::middleware('user')->group(function () {

        Route::get('/admin/listUser', [SainsRoleController::class, 'create'])->name('admin.listUser');
        Route::post('/store-sains-role', [SainsRoleController::class, 'store'])->name('storeSainsRole');
        Route::get('/game', [CategoryController::class, 'indexusers'])->name('game');
        Route::get('/detailteam', function () {
            return view('detailteam');
        })->name('team.detail');
    });
});
Route::get('tournament', [TournamentController::class, 'indexuser'])->name('user.tournament');
Route::resource('team', TeamController::class);
Route::get('tournament/{tournament}', [TournamentController::class, 'detail'])->name('detailTournament');
Route::get('/admin/listUser', [SainsRoleController::class, 'create'])->name('admin.listUser');
Route::post('/store-sains-role', [SainsRoleController::class, 'store'])->name('storeSainsRole');
Route::get('/game', function () {
    return view('user.game');
})->name('game');

Route::get('/detailteam', function () {
    return view('detailteam');
})->name('team.detail');
Route::get('/', function () {
    return view('user.index');
})->name('index');
