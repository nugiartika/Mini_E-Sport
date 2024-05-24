<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrizeRequest extends FormRequest
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
            'prize' => 'required|string|max:225',
        ];
    }

    public function messages(): array
    {
        return [
            'prize.required' => 'Hadiah harus diisi.',
            'prize.max' => 'Hadiah tidak boleh melebihi 225 karakter.',
        ];
    }
}
