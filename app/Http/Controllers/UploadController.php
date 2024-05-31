<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUploadRequest;
use App\Http\Requests\UpdateUploadRequest;
use App\Models\Tournament;
use App\Models\upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $uploads = upload::where('user_id', auth()->user()->id)->get();
        $uploadedTournamentIds = $uploads->pluck('tournament_id')->toArray();

        return view('user.historytournament', compact('uploads','uploadedTournamentIds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $uploads = upload::all();
        return view('user.historytournament', compact('uploads'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUploadRequest $request)
    {
        try {

        $user_id = Auth::user();
        $tournament_id = $request->get('tournament_id');
        $team_id = $request->get('team_id');
        $teamtournament_id = $request->get('teamtournament_id');
        $gambar = $request->file('upload');
        if ($gambar) {
            $path_gambar = Storage::disk('public')->put('bukti', $gambar);
        }

        $upload = upload::create([
            'user_id' => $user_id->id,
            'team_id' => $team_id,
            'teamtournament_id' => $teamtournament_id,
            'tournament_id' => $tournament_id,
            'upload' => $path_gambar,
            'status' => 'pending',

        ]);

        return redirect()->back()->with('success', 'Berhasil kirim bukti pebayaran');
    } catch (\Throwable $th) {
        dd($th);
        return redirect()->back()->withErrors(['warning' => $th->getMessage()]);
    }
    }

    /**
     * Display the specified resource.
     */
    public function show(upload $upload)
    {
        //
    }


    public function accbukti(upload $upload)
    {
        $counttournaments = Tournament::where('users_id', auth()->user()->id)
        ->whereIn('status', ['rejected', 'accepted'])
        ->where('notif', 'belum baca')
        ->count();
        $uploads = upload::all();
        return view('penyelenggara.accbukti', compact('uploads','counttournaments'));

    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(upload $upload)
    {
        $uploads = upload::all();
        return view('penyelenggara.accbukti', compact('uploads'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $upload =  upload::findOrFail($id);

        $request->validate([
            'status' => 'required|in:accepted,rejected',
            'reason' => 'required_if:status,rejected|nullable|string|max:255',
        ], [
            'status.required' => 'Kolom STATUS wajib diisi.',
            'status.in' => 'Status harus berupa "accepted" atau "rejected".',
            'reason.required_if' => 'Alasan penolakan wajib diisi.',
            'reason.string' => 'Alasan penolakan harus berupa teks.',
            'reason.max' => 'Alasan penolakan tidak boleh melebihi 255 karakter.',
        ]);

        $user_id = Auth::user();
        $upload->status = $request->status;

        if ($request->status == 'rejected' && $request->has('reason')) {
            $upload->reason = $request->reason;
        }

        $upload->save();
        return redirect()->back()->with('success', 'Status bukti pembayaran berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(upload $upload)
    {
        //
    }
}
