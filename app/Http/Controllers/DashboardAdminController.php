<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Team;
use App\Models\User;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Support\Facades\Storage;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::count();
        $organizer = User::where('role', 'organizer')->count();
        $category = Category::all()->count();
        $tournament = Tournament::all()->count();
        $team = Team::all()->count();
        $eoConfirm = User::where('status', 'pending')->count();

        return view('admin.index', compact('user', 'organizer', 'category', 'tournament', 'team', 'eoConfirm'));
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
