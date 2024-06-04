<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use App\Models\UserTournament;
use App\Http\Requests\StoreUserTournamentRequest;
use App\Http\Requests\UpdateUserTournamentRequest;

class UserTournamentController extends Controller
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

        return view('Landingpage.tournament', compact('Tournaments', 'Categories', 'listGame','categoryFilter'));
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
