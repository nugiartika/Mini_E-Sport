<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Category;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        $category = Category::all();
        return view('user.team', compact('teams','category'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teams = Team::all();
        $category = Category::all();
        return view('user.createteam', compact('teams','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeamRequest $request)
    {
        $gambar = $request->file('profile');
        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('team', $gambar);
        }

        $category = $request->input('categories_id');

    Team::create([
        'name' => $request->name,
        'profile' => $path_gambar,
        'categories_id' => $category,
        'member1' => $request->member1,
        'member2' => $request->member2,
        'member3' => $request->member3,
        'member4' => $request->member4,
        'member5' => $request->member5,
        'cadangan1' => $request->cadangan1,
        'cadangan2' => $request->cadangan2,
    ]);

    return redirect()->route('team.index')->with('success', 'Team added successfully');
    }


    public function indexdetail($id)
    {
        $teams = Team::findOrFail($id);
        $category = Category::all();
        return view('user.detailteam', compact('teams','category'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        //
    }
}
