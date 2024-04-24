<?php

namespace App\Http\Controllers;

use App\Models\SainsRole;
use App\Http\Requests\StoreSainsRoleRequest;
use App\Http\Requests\UpdateSainsRoleRequest;
use App\Models\User;
use Illuminate\Http\Request;

class SainsRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::where('role', 'user')->get();
        $sainsRole = SainsRole::all();
        // Mengirimkan data pengguna ke view
        return view('admin.listUser', compact('sainsRole'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSainsRoleRequest $request)
    {
        $user = new User();
        $user->user_id = auth()->id();
        $user->save();

        $users = User::all();
        return view('admin.listUser', compact('users'));
    }

    /**
     * Display the specified resource.
     */
    public function show(SainsRole $sainsRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SainsRole $sainsRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $sainsRole = SainsRole::find($id);

        if ($sainsRole) {
            $sainsRole->role = 'organizer';
            $sainsRole->save();

            $user = $sainsRole->user;
            if ($user) {
                $user->role = 'organizer';
                $user->save();
            }

            $sainsRole->delete();
        }


        return redirect()->back()->with('success', 'Berhasil Konfirmasi');
    }
    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($idUser)
    {
        $sainsRole = SainsRole::find($idUser);

        if ($sainsRole) {
            // Hapus SainsRole
            $sainsRole->delete();

            // Mengembalikan pengguna ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'User ditolak menjadi penyelenggara');
        } else {
            // Jika SainsRole tidak ditemukan
            return redirect()->back()->with('error', 'Data SainsRole tidak ditemukan');
        }
    }
}
