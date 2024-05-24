<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrizepoolRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function prizepool(): array
    {

        return [
            'prize' => 'required|max:225',
        ];


    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'prize.required' => 'Hadiah wajib diisi',
            'prize.max' => 'Hadiah tidak boleh melebihi 225 karakter.',
        ];

    }
}
