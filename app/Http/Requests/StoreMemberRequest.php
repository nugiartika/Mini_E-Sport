<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreMemberRequest extends FormRequest
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
            'member.*' => 'nullable', // Member inti wajib diisi
            'nickname.*' => 'required',
            'member_cadangan.*' => 'nullable', // Member cadangan dapat kosong
            'nickname_cadangan.*' => 'nullable',
            'is_captain.*' => 'nullable', // Isi kapten harus boolean

        ];
    }
    
    public function messages(): array
    {
        return [
            'nickname.*.required' => 'Kolom Email wajib diisi.',
            'nickname.*.unique' => 'Email tidak boleh sama di dalam tim ini.',
            'nickname_cadangan.*.unique' => 'Email cadangan harus unik di dalam tim ini.',
        ];
    }
}
