<?php

namespace App\Http\Controllers;

use App\Models\jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal(Request $request )
    {
        Jadwal::create([
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
        return redirect()->route('tournament.detail')->with('success', 'Jadwal added successfully');
    }
}
