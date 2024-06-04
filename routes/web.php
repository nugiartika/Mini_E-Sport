<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JuaraController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PrizepoolController;
use App\Http\Controllers\SainsRoleController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\TeamTournamentController;
use App\Http\Controllers\DetailTournamentController;
use App\Http\Controllers\PaymentProofController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserGameController;
use App\Http\Controllers\UserTimController;
use App\Http\Controllers\UserTournamentController;
use App\Models\UserTournament;

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
        Route::resource('user', UserController::class);
        Route::get('/listOrganizer', [UserController::class, 'indexpenyelenggara'])->name('listPenyelenggara');
        Route::resource('category', CategoryController::class);
        Route::get('confirmtournament', [TournamentController::class, 'indexadmin'])->name('konfirmtournament');
        Route::get('konfirmtournament/{konfirmtournament}/edit', [TournamentController::class, 'edit'])->name('konfirm.edit');
        Route::put('konfirmtournament/{tournament}', [TournamentController::class, 'update'])->name('konfirm.update');
        Route::get('AdminTournament', [DetailTournamentController::class, 'index'])->name('DetailTournament');
        Route::get('AdminTournamentFilter', [DetailTournamentController::class, 'filter'])->name('tournamentfilter');
        Route::put('listUserPenyelenggara/{sainsRole}', [SainsRoleController::class, 'update'])->name('konfirmUser');
        Route::delete('HapusDataTournament/{idTournament}', [DashboardAdminController::class, 'destroy'])->name('deleteTournament');
        Route::delete('rejectUser/{idUser}', [SainsRoleController::class, 'destroy'])->name('rejectUser');
        Route::delete('deleteUser/{idUser}', [UserController::class, 'destroy'])->name('deleteUser');
        Route::get('chart', [DashboardAdminController::class, 'response'])->name('chart');
        Route::get('/addprizepool', [PrizepoolController::class, 'addprizepool'])->name('admin.prizepool');
        Route::post('/storePrize', [PrizepoolController::class, 'storePrize'])->name('admin.storePrize');
        Route::delete('/destroyPrize/{id}', [PrizepoolController::class, 'destroyPrize'])->name('admin.destroyPrize');
        Route::get('/income', [TournamentController::class, 'indexIncome'])->name('income.index');
    });

    // Organizer Routes
    Route::middleware('organizer')->group(function () {
        Route::get('/tambah', [TournamentController::class, 'create'])->name('tambahtournament');
        Route::get('/tournament/{id}/edit', [TournamentController::class, 'edittour'])->name('ptournament.edittour');
        Route::post('/tournament/{id}/proses', [TournamentController::class, 'updatetour'])->name('ptournament.updatetour');
        Route::get('/DashboardOrganizer', [TournamentController::class, 'dashboard'])->name('dashboardPenyelenggara');
        Route::resource('ptournament', TournamentController::class);
        Route::get('/ptournamentfilter', [TournamentController::class, 'filter'])->name('tournament.filter');
        Route::get('/NotifikasiTournament', [TournamentController::class, 'notification'])->name('notificationTournament');
        Route::get('/UpdateNotifikasi{id}', [TournamentController::class, 'updatenotification'])->name('Updatenotification');
        Route::get('/games', [CategoryController::class, 'indexuser'])->name('games');
        Route::post('/jadwal/{tournament}', [JadwalController::class, 'jadwal'])->name('ptournament.jadwal');
        Route::patch('/editjadwal/{tournament}', [JadwalController::class, 'editJadwal'])->name('ptournament.editjadwal');
        Route::post('/juara/{id}', [JuaraController::class, 'juara'])->name('ptournament.juara');
        Route::patch('/editjuara/{id}', [JuaraController::class, 'editJuara'])->name('ptournament.editjuara');
        Route::patch('/addbracket/{tournament}', [TournamentController::class, 'bracket'])->name('add.bracket');
        Route::get('/tournaments/{id}/edit', [TournamentController::class, 'editStatus'])->name('editStatus');
        Route::put('/tournaments/{id}/update-status', [TournamentController::class, 'updateStatus'])->name('updateStatus');
        Route::get('/detailTournament/{id}', [TournamentController::class, 'detailTournament'])->name('tournament.detail');
        Route::get('/organizerincome', [TournamentController::class, 'organizerIncome'])->name('organizerincome');
    });

    Route::get('/detailTournamentUser/{id}', [TournamentController::class, 'detailTournamentUser'])->name('tournament.detailUser');

    // User Routes
    Route::middleware('user')->group(function () {
        // Route::post('/teams', [TeamController::class, 'storeId'])->name('team.storeId')->name('team.create');
        Route::get('DashboardUser', [DashboardUserController::class, 'index'])->name('dashboardUser');
        Route::get('/search-users', [UserController::class, 'searchUsers']);
        // Route::get('member/{id}/', [UserController::class, 'searchUsers'])->name('dashboardUser');
        Route::get('tournamentUser/history', [TournamentController::class, 'history'])->name('user.tournament.history');
        Route::get('/tournamentfilter', [TournamentController::class, 'filteruser'])->name('tournament.filteruser');
        Route::get('/detailTeam/{id}', [TeamController::class, 'indexdetail'])->name('user.detailTeam');
        Route::get('/addteam', [TeamController::class, 'addTeam'])->name('team.addteam');
        Route::post('/storeteam', [TeamController::class, 'storeTeam'])->name('team.storeteam');
        Route::get('/showteam/{team}', [TeamController::class, 'showTeam'])->name('team.showteam');
        Route::get('/addmember', [MemberController::class, 'createMember'])->name('team.addmember');
        Route::post('/storemember', [MemberController::class, 'storemember'])->name('team.storemember');
        Route::resource('/teams', TeamTournamentController::class);
        Route::get('teams/{team}', [TeamController::class, 'show'])->name('teams.show');
        Route::resource('team', TeamController::class);
        Route::get('tournamentUser', [TournamentController::class, 'indexuser'])->name('user.tournament');
    });

    Route::resource('Upload', UploadController::class);
    Route::get('UploadAcc', [UploadController::class, 'accbukti'])->name('accbukti');


    Route::get('/home', function() {
        $user = Auth::user();

        if ($user->role === 'organizer') {
            $redirectTo = route('dashboardPenyelenggara');
        } elseif ($user->role === 'admin') {
            $redirectTo = route('admin.index');
        } elseif ($user->role === 'user') {
            $redirectTo = route('dashboardUser');
        }

        return redirect($redirectTo);
    });
});

Route::group(['prefix' => 'transaction', 'as' => 'transaction.', 'middleware' => 'auth'], function () {
    // Route untuk menampilkan daftar transaksi
    Route::get('/', [TransactionController::class, 'index'])->name('index');

    // Route untuk menampilkan form pembuatan transaksi baru
    Route::get('create', [TransactionController::class, 'create'])->name('create');

    // Route untuk menyimpan transaksi baru
    Route::post('/', [TransactionController::class, 'store'])->name('store');

    // Route untuk menampilkan detail transaksi tertentu (menggunakan transaction_id)
    Route::get('{transaction:transaction_id}', [TransactionController::class, 'show'])->name('show');

    // Route untuk menampilkan form edit transaksi tertentu (menggunakan transaction_id)
    Route::get('{transaction:transaction_id}/edit', [TransactionController::class, 'edit'])->name('edit');

    Route::match(['put', 'patch'], '{transaction:id}', [TransactionController::class, 'update'])->name('update');
    Route::delete('{transaction:transaction_id}', [TransactionController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'payment-proof', 'as' => 'payment-proof.', 'middleware' => 'auth'], function () {
    Route::get('/', [PaymentProofController::class, 'index'])->name('index');
    Route::get('create', [PaymentProofController::class, 'create'])->name('create');

    Route::post('/', [PaymentProofController::class, 'store'])->name('store');
    Route::get('{paymentProof:payment_proof_id}', [PaymentProofController::class, 'show'])->name('show');

    Route::get('{paymentProof:payment_proof_id}/edit', [PaymentProofController::class, 'edit'])->name('edit');
    Route::match(['put', 'patch'], '{paymentProof:id}', [PaymentProofController::class, 'update'])->name('update');
    Route::delete('{paymentProof:id}', [PaymentProofController::class, 'destroy'])->name('destroy');
});

Route::get('/game', [CategoryController::class, 'indexusers'])->name('game');

Route::resource('member', MemberController::class);

//Landing Page
Route::get('DetailTournametUser/{id}', [LandingPageController::class, 'detailTOurnament'])->name('landingpageDetailTournamet');
Route::get('/', [LandingPageController::class, 'index'])->name('index');
Route::get('Tournament', [UserTournamentController::class, 'index'])->name('userTournament');
Route::get('Game', [UserGameController::class, 'index'])->name('userGame');
Route::get('Tim', [UserTimController::class, 'index'])->name('userTim');
