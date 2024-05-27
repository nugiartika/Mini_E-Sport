<?php

namespace App\Http\Controllers;

use App\Http\Requests\JuaraRequest;
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
        // $juara = juara::find($id);
        $juara = juara::all();


        $selectedTournament = Tournament::findOrFail($id);

        return view('penyelenggara.detailtournament', compact('juara','jadwal','tournaments', 'category', 'user', 'teamCounts', 'selectedTournament'));
    }

    public function juara(JuaraRequest  $request, $id)
{
    try {
        // Mencari turnamen berdasarkan ID, dan jika tidak ditemukan, akan mengembalikan 404
        $tournament = Tournament::findOrFail($id);

        // Validasi input menggunakan aturan yang didefinisikan di dalam JadwalRequest
        $validatedData = $request->validated();

        // Membuat jadwal baru dengan data yang sudah divalidasi
        Juara::create([
            'tournament_id' => $tournament->id,
            'nama_juara1' => $validatedData['nama_juara1'],
            'nama_juara2' => $validatedData['nama_juara2'],
            'nama_juara3' => $validatedData['nama_juara3'],
            'mvp' => $validatedData['mvp'],
        ]);

        return redirect()->route('tournament.detail', $tournament->id)->with('success','Juara Berhasil Ditambahkan');
    } catch (\Exception $e) {
        // Tangani jika turnamen tidak ditemukan atau terjadi kesalahan lain
        return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}



}
