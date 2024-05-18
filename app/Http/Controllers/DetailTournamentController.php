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
        $tournaments = Tournament::with('category', 'user')
            ->where('status', 'accepted')
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%");
            })
            ->paginate(5);

        $category = Category::all();

        return view('admin.ListTournament', compact('tournaments', 'category'));
    }

    public function detail($id)
    {
        $tournament = Tournament::with('category', 'user')->findOrFail($id);

        return view('admin.detailTournament', compact('tournament'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();
        $categories = Category::all();
        $selectedCategories = $request->input('categories_id', []);
        $search = $request->input('search');

        $tournaments = Tournament::with('category', 'user')
            ->where('status', 'accepted')
            ->when($selectedCategories, function ($query, $selectedCategories) {
                $query->whereIn('category_id', $selectedCategories);
            })
            ->when($search, function ($query, $search) {
                $query->where('name', 'LIKE', "%{$search}%");
            })
            ->paginate(5);

        // Collecting team counts and team tournament counts
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->pluck('count', 'tournament_id');

        $teamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->pluck('count', 'tournament_id');

        return view('admin.ListTournament', compact('tournaments', 'categories', 'selectedCategories', 'teamCounts', 'teamIdCounts', 'search'));
    }
}
