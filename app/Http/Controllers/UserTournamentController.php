<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\UserTournament;
use App\Http\Requests\StoreUserTournamentRequest;
use App\Http\Requests\UpdateUserTournamentRequest;
use App\Models\prizepool;
use App\Models\Team;
use App\Models\TeamTournament;
use App\Models\tournament_prize;
use App\Models\upload;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserTournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // if ($request->has('categories_id')) {
        //     $a = $request->input('categories_id', []);
        //     $Tournaments = Tournament::where('categories_id', $a)->paginate(5)->where('aktif', 'aktif');
        // } else {
        //     $Tournaments = Tournament::where('aktif', 'aktif')->get();
        // }
        $query = Tournament::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('status', 'accepted')
                ->where('name', 'LIKE', "%{$search}%");
        } else {
            $query->where('status', 'accepted');
        }
        $Tournaments = $query->paginate(5);

        $Categories = Category::all();
        $categoryFilter = Category::all();
        $listGame = $Categories;
        $type = $request->input('paidment');
        $prizepool = prizepool::all();

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

        return view('Landingpage.tournament', compact('Tournaments', 'Categories', 'listGame','categoryFilter','acceptedUploads','user','uploads', 'uploadedTournamentIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts','type','prizepool'));
    }


    public function filter(Request $request)
    {
        $oldSearch = $request->input('search');
        $user = Auth::user();
        $selectedCategories = $request->input('categories_id', []);
        $query = Tournament::query();
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

        $Tournaments = $query->get();

        $Categories = Category::all();
        $categoryFilter = Category::all();
        $listGame = $Categories;
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

            return view('Landingpage.tournament', compact('Tournaments', 'oldSearch','selectedCategories','Categories', 'listGame','categoryFilter','acceptedUploads','user','uploads', 'uploadedTournamentIds', 'acceptedTeamCounts', 'acceptedTeamIdCounts','type','prizepool'));
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
    public function store(StoreUserTournamentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTournament $userTournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserTournament $userTournament)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserTournamentRequest $request, UserTournament $userTournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTournament $userTournament)
    {
        //
    }
}
