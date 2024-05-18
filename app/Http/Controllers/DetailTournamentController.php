<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DetailTournamentController extends Controller
{
    public function index(Request $request)
    {
        // $tournaments =Tournament::where('status', 'accepted')->get();
        $query = Tournament::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('status', 'accepted')
                  ->where('name', 'LIKE', "%{$search}%");
        } else {
            $query->where('status', 'accepted');
        }
        $tournaments = $query->paginate(5);

        $user = User::all();
        $category = Category::all();
        return view('admin.ListTournament', compact('tournaments', 'user', 'category'));

    }

    public function detail()
    {
        $turnamets = Tournament::all();
        $user  = User::all();
        $category = Category::all();

        return view('admin.detailTournament', compact('turnamets', 'user', ));
    }

    public function filter(Request $request)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)->where('status', 'rejected')->count();
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
        $query = Tournament::query();

        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }

        $tournaments = $query->paginate(5); 

        return view('admin.ListTournament', compact('tournaments', 'category', 'selectedCategories', 'oldSearch', 'user', 'teamCounts', 'teamIdCounts', 'teams'));
    }

}
