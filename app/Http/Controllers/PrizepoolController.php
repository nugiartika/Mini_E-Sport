<?php

namespace App\Http\Controllers;

use App\Models\prizepool;
use Illuminate\Http\Request;

class PrizepoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addprizepool()
    {
        $prizepool = Prizepool::all();

        return view('admin.addprizepool', compact('prizepool'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePrize(Request $request)
    {
        prizepool::create([
            'prize' => $request->input('prize'),
        ]);
        return redirect()->route('admin.prizepool')->with('success', 'Hadiah berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */

     public function destroyPrize($prizepoolId)
     {
         try {
             $prizepool = Prizepool::findOrFail($prizepoolId);
             $prizepool->delete();
             return redirect()->route('admin.prizepool')->with('success', 'Hadiah berhasil dihapus');
         } catch (\Exception $e) {
             return redirect()->route('admin.prizepool')->with('error', 'Gagal menghapus Hadiah. Silakan coba lagi.');
         }
     }

}
