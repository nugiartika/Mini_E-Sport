<?php

namespace App\Http\Controllers;

use App\Models\DashboardUser;
use App\Http\Requests\StoreDashboardUserRequest;
use App\Http\Requests\UpdateDashboardUserRequest;
use App\Models\Category;
use App\Models\Tournament;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorys = Category::all()->count();
        $tournaments = Tournament::all()->count();
        $tournament = Tournament::all();
        $tournamentFree = Tournament::where('paidment','unpaid')->count();
        $tournamentPaid = Tournament::where('paidment','paid')->count();
        return view('user.Dashboard', compact('categorys', 'tournaments', 'tournament', 'tournamentFree', 'tournamentPaid'));
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
    public function store(StoreDashboardUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardUserRequest $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
