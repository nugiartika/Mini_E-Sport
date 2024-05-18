<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrizeRequest;
use App\Models\prizepool;
use Illuminate\Http\Request;

class PrizepoolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addprizepool(Request $request)
    {
        if ($request->has('search')) {
            $a = $request->input('search');
            $prizepool = Prizepool::where('prize', 'LIKE', "%$a%")->paginate(5);
        } else {
            $prizepool = Prizepool::paginate(5);
        }
        return view('admin.addprizepool', compact('prizepool'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePrize(StorePrizeRequest $request)
    {
        try {
            prizepool::create([
                'prize' => $request->prize,
            ]);
            return redirect()->route('admin.prizepool')->with('success', 'Hadiah berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->route('admin.prizepool')->with('error', 'Hadiah gagal ditambahkan');
        }
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
