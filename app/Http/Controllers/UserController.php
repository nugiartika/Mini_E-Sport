<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.listuser', compact('users'));
    }


    public function indexpenyelenggara()
    {
        $users = User::where('role', 'organizer')->get();
        return view('admin.listPenyelenggara', compact('users'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $idUser)
    { 
        $user = $idUser;

        if(!$user) {
            return redirect()->back()->with('error', 'User Tidak ');
        }

        $user->delete();

        return redirect()->back()->with('success', 'Berhasil Menghapus Data');
    }
    }
