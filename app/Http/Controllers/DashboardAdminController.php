<?php

namespace App\Http\Controllers;

use App\Models\DashboardAdmin;
use App\Http\Requests\StoreDashboardAdminRequest;
use App\Http\Requests\UpdateDashboardAdminRequest;
use App\Models\Category;
use App\Models\Team;
use App\Models\Tournament;
use App\Models\User;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all()->count();
        $organizer = User::where('role', 'organizer')->count();
        $category = Category::all()->count();
        $tournament = Tournament::all()->count();
        $team = Team::all()->count();

        return view('admin.index', compact('user', 'organizer', 'category', 'tournament', 'team'));

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
    public function store(StoreDashboardAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardAdminRequest $request, DashboardAdmin $dashboardAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardAdmin $dashboardAdmin)
    {
        //
    }
}
