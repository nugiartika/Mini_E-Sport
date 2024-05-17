<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\DB;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:50',
            'email' => [
                'required',
                'string',
                'email',
                'max:50',
                $this->emailUniqueRule(),
            ],
            'role' => 'in:admin,organizer,user|required',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|same:password'
        ];
    }

    /**
     * Custom validation rule for email uniqueness.
     *
     * @return \Closure
     */
    private function emailUniqueRule()
    {
        return function ($attribute, $value, $fail) {
            if (DB::table('users')->where('email', $value)->exists() ||
                DB::table('sains_roles')->where('email', $value)->exists()) {
                $fail('Email sudah digunakan, Gunakan email yang belum terdaftar');
            }
        };
    }

    /**
     * Get the custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib di isi',
            'name.max' => 'Nama maksimal 50 karakter',
            'email.required' => 'Email wajib di isi',
            'email.max' => 'Email maksimal 50 karakter',
            'email.email' => 'Format email tidak valid',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 6 karakter',
            'password_confirmation.required' => 'Password konfirmasi wajib di isi',
            'password_confirmation.min' => 'Minimum password 6 karakter',
            'password_confirmation.same' => 'Password konfirmasi harus sama dengan password'
        ];
    }
}
