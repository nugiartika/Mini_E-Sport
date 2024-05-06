<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SainsRole;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
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
     * Where to redirect users after registration.
     *
     * @var string
     */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:50|',
            'email' => 'required|string|email|max:50|unique:users,email,except,id',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6'
        ], [
            'name.required' => 'Nama wajib di isi',
            'name.max' => 'Nama maksimal 50 karakter',
            'email.required' => 'Email wajib di isi',
            'email.max:50' => 'Email maksimal 50 karakter',
            'email.unique' => 'Email sudah digunakan, Gunakan email yang belum terdaftar',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 6 karakter',
            'password_confirmation.required' => 'Password konfirmasi wajib di isi',
            'password_confirmation.min' => 'Minimum password 6 karakter'
        ]);

        if ($request->role == 'user') {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = $request->role;
            $user->save();
        } elseif ($request->role == 'organizer') {
            $sainsRole = new SainsRole();
            $sainsRole->name = $request->name;
            $sainsRole->email = $request->email;
            $sainsRole->password = Hash::make($request->password);
            $sainsRole->role = $request->role;
            $sainsRole->save();
        }



        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silahkan masuk ke akun anda.');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user',
        ]);
    }
}
