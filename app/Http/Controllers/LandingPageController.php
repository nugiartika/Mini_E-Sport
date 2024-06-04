<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Http\Requests\StoreLandingPageRequest;
use App\Http\Requests\UpdateLandingPageRequest;
use App\Models\Category;
use App\Models\Team;
use App\Models\User;
use App\Models\TeamTournament;
use App\Models\Tournament;
use App\Models\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->has('categories_id')) {
            $a = $request->input('categories_id', []);
            $Tournaments = Tournament::where('categories_id', $a)->paginate(5)->where('aktif', 'aktif');
        } else {
            $Tournaments = Tournament::where('aktif', 'aktif')->get();
        }
        $Categories = Category::all();
        $categoryFilter = Category::all();
        $listGame = $Categories;
        $user = User::all();
        $acceptedUploads = upload::where('user_id',  auth()->id())->where('status', 'accepted')->pluck('tournament_id')->toArray();
        $uploads = Upload::where('status', 'accepted')->get();
        $uploadedTournamentIds = $uploads->pluck('team_id')->toArray();
        $uploadedTournamentteamIds = $uploads->pluck('teamtournament_id')->toArray();
        // Count teams with accepted uploads
        $acceptedTeamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');
        // Count teams with accepted uploads
        $acceptedTeamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentteamIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

        return view('Landingpage.index', compact('Tournaments', 'Categories', 'listGame','categoryFilter','acceptedUploads','user','uploads', 'uploadedTournamentIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts'));
        // return view('user.index', compact('Tournaments', 'Categories', 'listGame','categoryFilter','acceptedUploads','user','uploads', 'uploadedTournamentIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts'));
    }

    public function detailTournament($id)
    {
        $tournaments = Tournament::findOrFail($id);
        $user = User::all();
        $acceptedUploads = upload::where('user_id',  auth()->id())->where('status', 'accepted')->pluck('tournament_id')->toArray();
        $uploads = Upload::where('status', 'accepted')->get();
        $uploadedTournamentIds = $uploads->pluck('team_id')->toArray();
        $uploadedTournamentteamIds = $uploads->pluck('teamtournament_id')->toArray();
        // Count teams with accepted uploads
        $acceptedTeamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');
        // Count teams with accepted uploads
        $acceptedTeamIdCounts = TeamTournament::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->whereIn('id', $uploadedTournamentteamIds)
            ->groupBy('tournament_id')
            ->get()
            ->keyBy('tournament_id');

        return view('Landingpage.detailTournament', compact('tournaments','acceptedUploads','user','uploads', 'uploadedTournamentIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLandingPageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LandingPage $landingPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LandingPage $landingPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLandingPageRequest $request, LandingPage $landingPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LandingPage $landingPage)
    {
        //
    }
}
