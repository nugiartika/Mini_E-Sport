<?php

namespace App\Http\Controllers;

use App\Models\tes;
use App\Http\Requests\StoretesRequest;
use App\Http\Requests\UpdatetesRequest;

class TesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tes');
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
    public function store(StoretesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tes $tes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tes $tes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetesRequest $request, tes $tes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tes $tes)
    {
        //
    }
}
