<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Jadwal;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
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

        $selectedTournament = Tournament::findOrFail($id);

        return view('penyelenggara.detailtournament', compact('jadwal','tournaments', 'category', 'user', 'teamCounts', 'selectedTournament'));
    }

    public function jadwal(Request $request, $id)
    {
        // Mencari turnamen berdasarkan ID, dan jika tidak ditemukan, akan mengembalikan 404
        $tournament = Tournament::findOrFail($id);

        // Membuat jadwal baru dengan data yang diterima dari request
        Jadwal::create([
            'tournament_id' => $tournament->id,
            'tanggalPenyisihan' => $request->tanggalPenyisihan,
            'waktuPenyisihan' => $request->waktuPenyisihan,
            'boPenyisihan' => $request->boPenyisihan,
            'tanggalSemi' => $request->tanggalSemi,
            'waktuSemi' => $request->waktuSemi,
            'boSemi' => $request->boSemi,
            'tanggalFinal' => $request->tanggalFinal,
            'waktuFinal' => $request->waktuFinal,
            'boFinal' => $request->boFinal,
        ]);

        return redirect()->route('tournament.detail', $tournament->id)->with('success','Jadwal Berhasil Ditambahkan');

    }

}
