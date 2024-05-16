<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $messages = [
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.exists' => 'Email tidak terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'email_password_mismatch' => 'Email :email tidak ditemukan.',
            'password_wrong' => 'Password salah.',
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
        ], $messages);

        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if ($user->role === 'organizer') {
                return redirect()->route('dashboardPenyelenggara');
            } elseif ($user->role === 'admin') {
                return redirect()->route('admin.index');
            } elseif ($user->role === 'user') {
                return redirect()->route('dashboardUser');
            }
        } else {
            return redirect()->back()->withInput()->withErrors(['email_password_mismatch' => 'Email ' . $request->email . ' tidak ditemukan atau password salah.']);
        }
    }
}
