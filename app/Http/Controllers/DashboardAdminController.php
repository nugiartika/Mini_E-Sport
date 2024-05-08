<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Team;
use App\Models\User;
use App\Models\Category;
use App\Models\SainsRole;
use App\Models\Tournament;
use App\Models\DashboardAdmin;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreDashboardAdminRequest;
use App\Http\Requests\UpdateDashboardAdminRequest;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all()->count();
        $organizer = User::where('role', 'organizer')->count();
        $category = Category::all()->count();
        $tournament = Tournament::all()->count();
        $team = Team::all()->count();
        $sainsRole = SainsRole::all()->count();

        return view('admin.index', compact('user', 'organizer', 'category', 'tournament', 'team', 'sainsRole'));
    }

    public function response()
    {
        $userGrowth = [];
        $currentMonth = Carbon::now()->startOfYear()->subMonths(1); // Mulai dari bulan Desember tahun lalu

        for ($i = 0; $i < 12; $i++) {
            $currentMonth->addMonth();
            $userCount = User::whereYear('created_at', $currentMonth->year)
                ->whereMonth('created_at', $currentMonth->month)
                ->count();
            $userGrowth[] = $userCount;
        }

        return response()->json(['user_count' => $userGrowth]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDashboardAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardAdminRequest $request, DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $tournament = Tournament::findOrFail($id);
            if ($tournament->images) {
                Storage::disk('public')->delete($tournament->images);
            }
            $tournament->delete();
            return redirect()->route('DetailTournament')->with('success', 'Tournament berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('DetailTournament')->with('error', 'Gagal menghapus turnamen. Silakan coba lagi.');
        }
    }
}
