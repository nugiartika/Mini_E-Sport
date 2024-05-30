<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUploadRequest extends FormRequest
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
            // 'tournament_id'=>'required|unique:categories,name,max:50',
            // 'upload'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'reason'=>'required',
            'status'=>'nullable',

        ];
    }

    public function messages(): array
    {
        return [
            // 'tournament_id.required' => 'Tournament_id Wajib Diisi',
            'reason.required' => 'alasan Wajib Diisi',
            // 'upload.required' => 'Foto Wajib diisi.',
            // 'upload.image' => 'Masukan harus berupa foto',
            // 'upload.mimes' => 'Foto harus berupa file jpeg,png,jpg',
            // 'upload.max' => 'Ukuran foto harus kurang 2MB',
        ];
    }
}
