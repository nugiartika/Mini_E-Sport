<?php

namespace App\Http\Controllers;

use App\Http\Requests\JadwalRequest;
use App\Models\Team;
use App\Models\Jadwal;
use App\Models\Category;
use App\Models\Tournament;
use Illuminate\Routing\Controller;
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

    public function jadwal(JadwalRequest $request, $id)
{
    try {
        // Mencari turnamen berdasarkan ID, dan jika tidak ditemukan, akan mengembalikan 404
        $tournament = Tournament::findOrFail($id);

        // Validasi input menggunakan aturan yang didefinisikan di dalam JadwalRequest
        $validatedData = $request->validated();

        // Membuat jadwal baru dengan data yang sudah divalidasi
        Jadwal::create([
            'tournament_id' => $tournament->id,
            'tanggalPenyisihan' => $validatedData['tanggalPenyisihan'],
            'waktuPenyisihan' => $validatedData['waktuPenyisihan'],
            'boPenyisihan' => $validatedData['boPenyisihan'],
            'tanggalSemi' => $validatedData['tanggalSemi'],
            'waktuSemi' => $validatedData['waktuSemi'],
            'boSemi' => $validatedData['boSemi'],
            'tanggalFinal' => $validatedData['tanggalFinal'],
            'waktuFinal' => $validatedData['waktuFinal'],
            'boFinal' => $validatedData['boFinal'],
        ]);

        return redirect()->route('tournament.detail', $tournament->id)->with('success','Jadwal Berhasil Ditambahkan');
    } catch (\Exception $e) {
        // Tangani jika turnamen tidak ditemukan atau terjadi kesalahan lain
        return redirect()->back()->with('warning', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}

public function editJadwal(JadwalRequest $request, $id){

    try{

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update([
            'tanggalPenyisihan' => $request['tanggalPenyisihan'],
            'waktuPenyisihan' => $request['waktuPenyisihan'],
            'boPenyisihan' => $request['boPenyisihan'],
            'tanggalSemi' => $request['tanggalSemi'],
            'waktuSemi' => $request['waktuSemi'],
            'boSemi' => $request['boSemi'],
            'tanggalFinal' => $request['tanggalFinal'],
            'waktuFinal' => $request['waktuFinal'],
            'boFinal' => $request['boFinal'],
        ]);
        return redirect()->back()->with('success', 'Jadwal berhasil diupdate.');
    }catch (\Exception $e){
        return redirect()->back()->with('warning', 'Terjadi kesalahan: ' . $e->getMessage());
    }
}


}
