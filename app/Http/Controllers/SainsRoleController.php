<?php

namespace App\Http\Controllers;

use App\Models\SainsRole;
use App\Http\Requests\StoreSainsRoleRequest;
use App\Http\Requests\UpdateSainsRoleRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        return view('admin.AccUser', compact('sainsRole'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sainsRole = SainsRole::all();
        $user = User::all();
        return view('admin.AccUser', compact('user','sainsRole'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $sainsRole = new SainsRole();
        // $sainsRole->user_id = auth()->id(); // Pastikan user_id sesuai dengan pengguna yang masuk
        // $sainsRole->role = 'user'; // Atur peran pengguna di sini
        // $sainsRole->save();

        // return redirect()->back()->with('success', 'Berhasil daftar');
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
        $sainsRole = SainsRole::all();
        $user = User::all();
        return view('admin.AccUser', compact('sainsRole','user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SainsRole $sainsRole)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $status = $request->input('status');

        if($status === 'accepted'){
            $user = new User();
            $user->name = $sainsRole->name;
            $user->email = $sainsRole->email;
            $user->password = Hash::make($sainsRole->password);
            $user->role = $sainsRole->role;
            $user->email_verified_at = now();
            $user->save();

            $sainsRole->delete();

        }elseif($status === 'rejected'){
            $sainsRole->delete();
        }

        return redirect()->back()->with('success', 'Berhasil Konfirmasi');
    }


    // $sainsRole = SainsRole::find($id);

        // if ($sainsRole) {
        //     $sainsRole->role = 'organizer';
        //     $sainsRole->save();

        //     $user = $sainsRole->user;
        //     if ($user) {
        //         $user->role = 'organizer';
        //         $user->save();
        //     }

        //     $sainsRole->delete();
        // }



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
