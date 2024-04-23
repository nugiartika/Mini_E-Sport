<?php

namespace App\Http\Controllers;

use App\Models\DashboardPenyelenggara;
use App\Http\Requests\StoreDashboardPenyelenggaraRequest;
use App\Http\Requests\UpdateDashboardPenyelenggaraRequest;

class DashboardPenyelenggaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('penyelenggara.Dashboard');
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
    public function store(StoreDashboardPenyelenggaraRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardPenyelenggara $dashboardPenyelenggara)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardPenyelenggara $dashboardPenyelenggara)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardPenyelenggaraRequest $request, DashboardPenyelenggara $dashboardPenyelenggara)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardPenyelenggara $dashboardPenyelenggara)
    {
        //
    }
}
