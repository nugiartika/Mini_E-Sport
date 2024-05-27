<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    protected string $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Http\JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $data['status'] = 'active'; // Tambahkan status aktif supaya yang terbanned dan masih pending gak bisa masuk

        // if (Auth::attempt($data)) {
        //     $user = Auth::user();

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            $user = Auth::user();

            if ($user->status === 'pending') {
                Auth::logout();
                return redirect()->back()->withInput()->withErrors([
                    'account_pending' => 'Akun anda belum dikonfirmasi oleh admin.'
                ]);
            }
        } elseif(Auth::attempt($data)) {
            $user = Auth::user();

            if ($user->role === 'organizer') {
                $this->redirectTo = route('dashboardPenyelenggara');
            } elseif ($user->role === 'admin') {
                $this->redirectTo = route('admin.index');
            } elseif ($user->role === 'user') {
                $this->redirectTo = route('dashboardUser');
            }

            return redirect($this->redirectTo);
        }

        return redirect()->back()->withInput()->withErrors([
            'email_password_mismatch' => "Surel {$request->email} tidak ditemukan, password salah."
        ]);
    }
}
