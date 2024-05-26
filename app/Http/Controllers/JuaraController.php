<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\juara;
use App\Models\jadwal;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JuaraController extends Controller
{
    public function detailTournament($id)
    {
        $user = Auth::user();
        $tournaments = Tournament::where('users_id', $user->id)->get();
        // $tournaments = Tournament::all();
        $teamCounts = Team::select('tournament_id', DB::raw('COUNT(*) as count'))
            ->groupBy('tournament_id')
            ->get();
        $category = Category::all();
        $jadwal = jadwal::all();
        $juara = juara::find($id);
        $juara = juara::all();


        $selectedTournament = Tournament::findOrFail($id);

        return view('penyelenggara.detailtournament', compact('juara','jadwal','tournaments', 'category', 'user', 'teamCounts', 'selectedTournament'));
    }

    public function juara(Tournament $tournament, Request $request, $id)
    {

        $tournament = Tournament::find($id);

            Juara::create([
                'tournament_id' => $tournament->id,
                'nama_juara1' => $request->input('nama_juara1'),
                'nama_juara2' => $request->input('nama_juara2'),
                'nama_juara3' => $request->input('nama_juara3'),
                'mvp' => $request->input('mvp'),
            ]);

            toastr()->success('Daftar Juara Berhasil Ditambahkan');

            return redirect()->route('tournament.detail', $tournament->id);

    }



}
