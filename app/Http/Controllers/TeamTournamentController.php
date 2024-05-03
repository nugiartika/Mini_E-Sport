<?php

namespace App\Http\Controllers;

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
        return view('user.tournament', compact('teams','tournaments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        $tournaments = Tournament::all();
        return view('user.tournament', compact('teams', 'tournaments'));
    }



    public function store(Request $request)
    {
        $tournament_id = $request->tournament_id;
        TeamTournament::create([
            'tournament_id' => $tournament_id,
            'team_id' => $request->team_id,
        ]);
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
