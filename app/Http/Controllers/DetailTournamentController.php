<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\prizepool;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\tournament_prize;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailTournamentController extends Controller
{
    public function index(Request $request)
    {
        $tournaments = Tournament::with('category', 'user')
            ->where('status', 'accepted')
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%");
            })
            ->paginate(5);

        $category = Category::all();
        $prizes = tournament_prize::all();
        $statusaktif = $request->input('aktif');
        $selectedPrizes = $request->input('prizepool_id', []);
        $prizepool = prizepool::all();
        $statustournament = $request->input('status');
        $type = $request->input('paidment');


        return view('admin.ListTournament', compact('tournaments', 'category','prizes','statusaktif','selectedPrizes','prizepool','statustournament','type'));
    }

    public function detail($id)
    {
        $tournament = Tournament::with('category', 'user')->findOrFail($id);
        $prizes = tournament_prize::where('tournament_id', $id)->get();


        return view('admin.detailTournament', compact('tournament','prizes'));
    }

    public function filter(Request $request)
{
    $counttournaments = Tournament::where('users_id', auth()->user()->id)
                                  ->where('status', 'rejected')
                                  ->count();
    $oldSearch = $request->input('search');
    $user = Auth::user();
    $category = Category::all();
    $selectedCategories = $request->input('categories_id', []);
    $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
                      ->groupBy('tournament_id')
                      ->get();
    $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
                                  ->groupBy('tournament_id')
                                  ->get();
    $teams = Team::all();
    $query = Tournament::where('status', 'accepted');

    if (!empty($selectedCategories)) {
        $query->whereIn('categories_id', $selectedCategories);
    }

    $type = $request->input('paidment');

    if ($type === 'Berbayar') {
        $query->where('paidment', 'Berbayar');
    } elseif ($type === 'Gratis') {
        $query->where('paidment', 'Gratis');
    }

    $prizepool = prizepool::all();
    $prizepooltournament = tournament_prize::all();

    $selectedPrizes = $request->input('prizepool_id', []);

    if (!empty($selectedPrizes)) {
        $tournamentIdsWithPrizes = tournament_prize::whereIn('prizepool_id', $selectedPrizes)->pluck('tournament_id')->toArray();

        $query->whereIn('id', $tournamentIdsWithPrizes);
    }

    $statusaktif = $request->input('aktif');

    if ($statusaktif === 'aktif') {
        $query->where('aktif', 'aktif');
    } elseif ($statusaktif === 'tidak aktif') {
        $query->where('aktif', 'tidak aktif');
    }

    $statustournament = $request->input('status');

    if ($statustournament === 'accepted') {
        $query->where('status', 'accepted');
    } elseif ($statustournament === 'rejected') {
        $query->where('status', 'rejected');
    }

    $tournaments = $query->paginate(5);
    $prizes = tournament_prize::all();

    return view('admin.ListTournament', compact('tournaments', 'category', 'selectedCategories', 'oldSearch', 'user', 'teamCounts', 'teamIdCounts', 'teams','prizes','type','prizepool','selectedPrizes','statusaktif','statustournament'));
}

}
