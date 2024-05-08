<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamTournamentRequest;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\Tournament;
use Illuminate\Http\Request;

class TeamTournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $tournaments = Tournament::all();
        return view('user.tournamentUser', compact('teams','tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */

    // public function create(Request $request)
    // {
        //     $tournament_id = $request->query('tournament_id');
    //     $tournaments = Tournament::all();
    //     $teams = Team::whereHas('tournament', function ($query) use ($tournament_id) {
    //         $query->where('category_id', $tournament_id);
    //     })->get();

    //     return view('user.tournament', compact('teams', 'tournaments'));
    // }
    public function create()
    {
        $teams = Team::all();
        $tournaments = Tournament::all();
        return view('user.tournamentUser', compact('teams', 'tournaments'));
    }

    public function store(TeamTournamentRequest $request)
    {
        $tournament_id = $request->tournament_id;
        $team_id = $request->team_id;

        TeamTournament::create([
            'tournament_id' => $tournament_id,
            'team_id' => $team_id,
        ]);

        // $team = Team::findOrFail($team_id);

        // Team::create([
        //     'name' => $team->name,
        //     'profile' => $team->profile,
        //     'user_id' => $team->user_id,
        //     'tournament_id' => $tournament_id,
        // ]);
        return redirect()->back()->with('success', 'Team added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(TeamTournament $teamTournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TeamTournament $teamTournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TeamTournament $teamTournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TeamTournament $teamTournament)
    {
        //
    }
}
