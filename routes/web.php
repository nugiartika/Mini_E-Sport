<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DetailTournamentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegisterOrganizerController;
use App\Http\Controllers\SainsRoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamTournamentController;
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
        Route::get('AdminDetailTournament', [DetailTournamentController::class, 'index'])->name('DetailTournament');
        Route::put('listUserPenyelenggara/{sainsRole}', [SainsRoleController::class, 'update'])->name('konfirmUser');
        Route::delete('HapusDataTournament/{idTournament}', [DashboardAdminController::class, 'destroy'])->name('deleteTournament');
        Route::delete('rejectUser/{idUser}', [SainsRoleController::class, 'destroy'])->name('rejectUser');
        Route::delete('deleteUser/{idUser}', [UserController::class, 'destroy'])->name('deleteUser');
        Route::get('chart', [DashboardAdminController::class, 'response'])->name('chart');
    });

    // Organizer Routes
    Route::middleware('organizer')->group(function () {
        Route::get('/detailTournament/{id}', [TournamentController::class, 'detailTournament'])->name('tournament.detail');
        Route::get('/tambah', [TournamentController::class, 'create'])->name('tambahtournament');
        Route::get('/tournament/{id}/edit', [TournamentController::class, 'edittour'])->name('ptournament.edittour');
        Route::post('/tournament/{id}/proses', [TournamentController::class, 'updatetour'])->name('ptournament.updatetour');
        Route::get('/DashboardOrganizer', [TournamentController::class, 'dashboard'])->name('dashboardPenyelenggara');
        Route::resource('ptournament', TournamentController::class);
        Route::get('/ptournamentfilter', [TournamentController::class, 'filter'])->name('tournament.filter');
        Route::get('/games', [CategoryController::class, 'indexuser'])->name('games');
        Route::post('/jadwal', [TournamentController::class, 'jadwal'])->name('ptournament.jadwal');
        Route::post('/juara', [TournamentController::class, 'juara'])->name('ptournament.juara');
    });

    // User Routes
    Route::middleware('user')->group(function () {
        Route::post('/teams', [TeamController::class, 'storeId'])->name('team.storeId')->name('team.create');
        Route::get('DashboardUser', [DashboardUserController::class, 'index'])->name('dashboardUser');
    });
});

// Public Routes
Route::get('/teams.create', [TeamController::class, 'createId'])->name('team.createId');

// Route::get('tournament', [TournamentController::class, 'indexuser'])->name('user.tournament');
Route::get('tournamentUser', [TournamentController::class, 'indexuser'])->name('user.tournament');



Route::resource('team', TeamController::class);
Route::resource('member', MemberController::class);
Route::get('tournament/{tournament}', [TournamentController::class, 'detail'])->name('detailTournament');
Route::get('/game', [CategoryController::class, 'indexusers'])->name('game');
Route::get('/detailteam', function () {
    return view('detailteam');
})->name('team.detail');
Route::get('/', function () {
    return view('user.index');
})->name('index');


