<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamBaruRequest;
use App\Http\Requests\TeamRequest;
use App\Models\Category;
use App\Models\Member;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $category = Category::all();
        $tournaments = Tournament::all();
        return view('user.teamUser', compact('teams','category','tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $teams = Team::all();
        $user = User::all();
        $selectedTournamentId = $request->input('tournament_id');

        return view('user.createteam', compact('teams','user','selectedTournamentId'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        $tournament_id = $request->get('tournament_id');
        $user = Auth::user();

        $gambar = $request->file('profile');
        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('team', $gambar);
        }

        $team = Team::create([
            'name' => $request->name,
            'profile' => $path_gambar,
            'tournament_id' => $tournament_id,
            'user_id' => $user->id,
        ]);
        return redirect()->route('team.show', $team->id);
    }
    // public function store(TeamRequest $request)
    // {
    //     $tournament_id = $request->get('tournament_id');
    //     $user = Auth::user();

    //     $gambar = $request->file('profile');
    //     if ($gambar) {
    //         $path_gambar = Storage::disk('public')->put('team', $gambar);
    //     }

    //     $team = Team::create([
    //         'name' => $request->name,
    //         'profile' => $path_gambar,
    //         'tournament_id' => $tournament_id,
    //         'user_id' => $user->id,
    //     ]);

    //     return redirect()->route('team.show', $team->id)->with('success', 'Team added successfully');
    // }

    public function indexdetail($id)
    {
        $teams = Team::with('category')->findOrFail($id);
        $membersCount = Member::where('team_id', $id)->whereNotNull('nickname')->count();
        $category = Category::all();
        $tournament = Tournament::all();
        $members = Member::where('team_id', $id)->whereNotNull('nickname')->orderByDesc('is_captain')->get();
        $categoryName = $teams->category->name ?? '';
        $categoryId = $teams->tournament->category->name;
        return view('user.detailteam', compact('teams','category', 'membersCount', 'tournament', 'members','categoryName','categoryId'));


        // $members = Member::where('team_id', $id)->whereNotNull('nickname')->where('is_captain', '$id')->get();
        // $members = Member::where('team_id', $id)->whereNotNull('nickname')->get();
        // $categoryName = $teams->category->name ?? '';
        // $categoryId = $teams->tournament->category->name;
        // return view('user.detailteam', compact('teams','category', 'membersCount', 'tournament', 'members','categoryName','categoryId'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        $members = Member::all();
        $teams = Team::all();
        $teamId = $team->id;
        $user = User::all();
        $membersPerTeam = $team->tournament->category->membersPerTeam;


        return view('user.createmember', compact('members', 'teams', 'teamId','user','membersPerTeam'));
    }

    public function addTeam(Request $request)
    {
        $user = User::all();
        $category = Category::all();
        $selectedTournamentId = $request->input('tournament_id');

        return view('user.addteam', compact('user', 'selectedTournamentId','category'));
    }

    public function storeTeam(TeamBaruRequest $request)
    {
        // $tournament_id = $request->get('tournament_id');
        $user = Auth::user();

        $gambar = $request->file('profile');
        $path_gambar = $gambar ? Storage::disk('public')->put('team', $gambar) : null;

        $team = Team::create([
            'name' => $request->name,
            'profile' => $path_gambar,
            // 'tournament_id' => $tournament_id,
            'user_id' => $user->id,
            'categories_id' => $request->categories_id,
        ]);

        return redirect()->route('team.showteam', $team->id);
    }

    public function showTeam(Team $team)
    {
        $members = Member::all();
        $teams = Team::all();
        $teamId = $team->id;
        $user = User::all();
        $category = Category::all();
        $membersPerTeam = $team->category?->membersPerTeam;


        return view('user.addmember', compact('members', 'teams', 'teamId', 'user','category','membersPerTeam'));
    }

}
