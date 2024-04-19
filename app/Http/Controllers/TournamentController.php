<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRequest;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournaments = Tournament::all();
        $category = Category::all();
        return view('penyelenggara.tournament', compact('tournaments','category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tournament = Tournament::all();
        $category = Category::all();
        return view('penyelenggara.tournament', compact('tournament','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TournamentRequest $request)
    {
        $gambar = $request->file('images');
        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('tournament', $gambar);
        }

        $category_id = $request->input('categories_id');

        Tournament::create([
            'name' => $request->name,
            'pendaftaran' => $request->pendaftaran,
            'permainan' => $request->permainan,
            'penyelenggara' => $request->penyelenggara,
            'categories_id' => $category_id,
            'images' => $path_gambar,
            'description' => $request->description,
            'rule' => $request->rule
        ]);

        return redirect()->back()->with('success', 'Tournament added successfully');
    }



    public function filter(Request $request)
    {
        $oldSearch = $request->input('search');
        $user = Auth::user();
        $category = Category::all();
        $selectedCategories = $request->input('categories_id', []);

        $query = Tournament::query();

        if (!empty($selectedCategories)) {
            $query->whereIn('categories_id', $selectedCategories);
        }

        $tournaments = $query->get();

        return view('penyelenggara.tournament', compact('tournaments', 'category', 'selectedCategories', 'oldSearch','user'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tournament = Tournament::find($id);
        return view('ptournament', compact('tournament'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tournament $tournament)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        //
    }
}
