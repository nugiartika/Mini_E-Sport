<?php

namespace App\Http\Controllers;

use App\Models\LandingPage;
use App\Http\Requests\StoreLandingPageRequest;
use App\Http\Requests\UpdateLandingPageRequest;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;

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

        return view('user.index', compact('Tournaments', 'Categories', 'listGame','categoryFilter'));
    }

    public function detailTournament($id)
    {
        $tournaments = Tournament::findOrFail($id);
        return view('user.LandingPageDetail', compact('tournaments'));
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
