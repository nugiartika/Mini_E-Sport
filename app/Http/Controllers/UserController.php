<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
            $role = $request->get('role');
            $action = $request->get('action') == 'approval';
            $search = $request->input('search');

            $users = $this->user
                ->when($action, function ($query) {
                    $query->where([
                        'status' => 'pending',
                        'role' => 'organizer'
                    ]);
                })
                ->when($role, function ($query) use ($role) {
                    $query->where([
                        'role' => $role,
                        'status' => 'active'
                    ]);
                })
                ->when($search, function ($query) use ($search) {
                    $query->where('name', 'LIKE', "%{$search}%")
                          ->orWhere('email', 'LIKE', "%{$search}%");
                })
                ->paginate(15);

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
    public function update(Request $request, User $user)
    {
        $data = $request->except('_token');
        $data['email_verified_at'] = $data['status'] === 'active' ? now() : null;

        $user->update($data);

        return redirect()->back()->with('success', 'User berhasil diubah statusnya');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            $user->delete();
            return redirect()->back()->with('success', 'Berhasil Menghapus Data');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal Menghapus Data');
        }
    }

}
