<?php

namespace App\Http\Controllers;

use App\Models\UserTim;
use App\Http\Requests\StoreUserTimRequest;
use App\Http\Requests\UpdateUserTimRequest;
use App\Models\Member;
use App\Models\Team;

class UserTimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        // $membersCount = Member::where('team_id', $teams->id)->whereNotNull('nickname')->count();
        return view('Landingpage.team', compact('teams'));
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
    public function store(StoreUserTimRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserTim $userTim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserTim $userTim)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserTimRequest $request, UserTim $userTim)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserTim $userTim)
    {
        //
    }
}
