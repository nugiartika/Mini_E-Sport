<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Log;
use \Illuminate\Support\Arr;

class RegisterController extends Controller
{
    private User $user;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->user = new User();
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \App\Http\Requests\RegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function register(RegisterRequest $request)
    {
        try {
            $data = Arr::except($request->validated(), 'password_confirmation');
            $data['password'] = bcrypt($data['password']);
            $data['status'] = $data['role'] == 'user' ? 'active' : 'pending';

            $this->user->create($data);

            return redirect()->route('login')->with('success', 'Registrasi berhasil! Silahkan masuk ke akun anda.');
        } catch (\Throwable $th) {
            Log::error('Registration failed', ['error' => $th->getMessage(), 'trace' => $th->getTrace()]);

            return redirect()->back()->withInput()->withErrors(['error' => 'Registrasi gagal, silahkan coba lagi.']);
        }
    }
}
