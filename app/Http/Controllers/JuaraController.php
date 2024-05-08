<?php

namespace App\Http\Controllers;

use App\Models\juara;
use Illuminate\Http\Request;

class JuaraController extends Controller
{
    public function juara(Request $request)
    {
        juara::create([
            'nama_juara1' => $request->input('nama_juara1'),
            'nama_juara2' => $request->input('nama_juara2'),
            'nama_juara3' => $request->input('nama_juara3'),
        ]);
        return redirect()->route('ptournament.index')->with('success', 'Jadwal added successfully');
    }
}
