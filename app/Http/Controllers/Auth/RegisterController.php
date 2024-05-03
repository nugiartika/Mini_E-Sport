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
            'name.required' => 'Name must be filled in',
            'name.max' => 'Names cannot exceed 50 characters',
            'email.required' => 'Email must be filled in',
            'email.max:50' => 'Emails should not exceed 50 characters',
            'email.unique' => 'email is already in use, Use another email',
            'password.required' => 'Password must be filled in',
            'password.min' => 'Password must be at least 6 characters',
            'password_confirmation.required' => 'Password confirmation is mandatory',
            'password_confirmation.min' => 'Minimum password must be 6 characters'
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
