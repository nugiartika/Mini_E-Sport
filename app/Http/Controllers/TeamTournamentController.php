<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamTournamentRequest;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TeamTournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $tournaments = Tournament::all();
        return view('user.tournamentUser', compact('teams', 'tournaments'));
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
    public function create(Request $request)
    {
        $teams = Team::where('user_id', auth()->id())->get();
        $tournaments = Tournament::all();
        $selectedTournamentId = $request->input('tournament_id');

        $user_id = Auth::user();
        $existingTeam = Team::where('tournament_id', $selectedTournamentId)
        ->where('user_id', $user_id->id)
        ->first();

        // Cek apakah user sudah terdaftar di turnamen ini melalui model TeamTournament
        $existingTeamTournament = TeamTournament::where('tournament_id', $selectedTournamentId)
            ->whereHas('team', function ($query) use ($user_id) {
                $query->where('user_id', $user_id->id);
            })
            ->first();

        if ($existingTeam || $existingTeamTournament) {
            return redirect()->route('user.tournament')->withErrors(['error' => 'Anda sudah terdaftar di turnamen ini.']);
        }

        
        return view('user.teams', compact('teams', 'tournaments', 'selectedTournamentId','user_id', 'tournaments'));
    }

    public function store(TeamTournamentRequest $request)
    {
        $tournament_id = $request->get('tournament_id');
        $team_id = $request->team_id;
        $tournamentData = Tournament::where([
            ['id', $tournament_id],
            ['paidment', 'Gratis']
        ]);

        $teamTournament = TeamTournament::create([
            'tournament_id' => $tournament_id,
            'team_id' => $team_id,
        ]);

        if ($tournamentData->exists()) {
            Transaction::create([
                'name' => auth()->user()->name,
                'email' => auth()->user()->email,
                'phone' => '081234567890',
                'status' => 'PAID',
                'team_tournament_id' => $teamTournament->id,
                'payment_method' => 'FREE',
                'amount' => 0,
                'transaction_id' => 'TRANS-'. Str::upper(Str::random(16)),
                'ref_id' => 'INV-'. Str::upper(Str::random(16))
            ]);
        }

        return redirect()->route('user.tournament')->with('success', 'Team added successfully');
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
