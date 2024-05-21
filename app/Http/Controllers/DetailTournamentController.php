<?php

namespace App\Http\Controllers;

use App\Models\Category;
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


        return view('admin.ListTournament', compact('tournaments', 'category','prizes'));
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

    $tournaments = $query->paginate(5);
    $prizes = tournament_prize::all();

    return view('admin.ListTournament', compact('tournaments', 'category', 'selectedCategories', 'oldSearch', 'user', 'teamCounts', 'teamIdCounts', 'teams','prizes'));
}

}
