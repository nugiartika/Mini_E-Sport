<?php

namespace App\Http\Controllers;

use App\Http\Requests\TournamentRequest;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tournament = Tournament::all();

        return view('penyelenggara.tournament', compact('tournament'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tournament = Tournament::all();
        return view('penyelenggara.tournament', compact('tournament'));
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

        Tournament::create([
            'name' => $request->name,
            'pendaftaran' => $request->pendaftaran,
            'permainan' => $request->permainan,
            'penyelenggara' => $request->penyelenggara,
            'images' => $path_gambar,
            'description' => $request->description,
            'rule' => $request->rule
        ]);

        return redirect()->route('tournament.index')->with('success', 'Tournament added successfully');
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