<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\jadwal;
use App\Models\bracket;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BracketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function detailTournament($id)
    {
        $user = Auth::user();
        $tournaments = Tournament::where('users_id', $user->id)->get();
        // $tournaments = Tournament::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();
        $jadwal = jadwal::all();
        $bracket = bracket::findOrFail($id);

        $selectedTournament = Tournament::findOrFail($id);

        return view('penyelenggara.detailtournament', compact('bracket','jadwal','tournaments', 'category', 'user', 'teamCounts', 'selectedTournament'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function bracket(Request $request, $id)
    {
        // Mencari turnamen berdasarkan ID, dan jika tidak ditemukan, akan mengembalikan 404
        $tournament = Tournament::findOrFail($id);

        // Membuat jadwal baru dengan data yang diterima dari request
        Bracket::create([
                'bracket' => $request->bracket,
        ]);

        // Redirect ke halaman detail turnamen dengan menyertakan ID turnamen
        return redirect()->route('tournament.detail', ['id' => $tournament]);
    }

}
