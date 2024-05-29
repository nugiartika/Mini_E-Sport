<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentProofRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'file' => 'nullable|file|mimes:jpeg,png|max:2048',
        ];
    }

    /**
     * Get custom error messages for specific validation rules.
     */
    public function messages(): array
    {
        return [
            'file.file' => 'Berkas harus berupa file.',
            'file.mimes' => 'Berkas harus berupa tipe: jpeg, png, pdf.',
            'file.max' => 'Ukuran berkas tidak boleh lebih dari 2MB.',
        ];
    }
}
