<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Category;
use App\Models\Team;
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
        return view('user.team', compact('teams','category'));
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
        $tournament_id = $request->tournament_id;

        $user = Auth::user();
        // $loggedInUserName = $loggedInUser->name;

        $gambar = $request->file('profile');
        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('team', $gambar);
        }

        Team::create([
            'name' => $request->name,
            'profile' => $path_gambar,
            'tournament_id' => $tournament_id,
            // 'member_id' => $request->member_id,
            // 'cadangan1' => $request->cadangan1,
            // 'cadangan2' => $request->cadangan2,
        ]);

        return redirect()->route('member.create')->with('success', 'Team added successfully');
    }



    public function indexdetail($id)
    {
        $teams = Team::findOrFail($id);
        $category = Category::all();
        return view('user.detailteam', compact('teams','category'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
