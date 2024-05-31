<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name'=>'required|unique:categories,name,max:50',
            'photo'=>'required|image|mimes:jpeg,png,jpg|max:2048',
            'membersPerTeam' => 'required|integer|min:1|max:7'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama Game Wajib Diisi',
            'name.unique' => 'Nama Game sudah digunakan.',
            'name.max' => 'Nama Tidak Boleh lebih dari 50 character.',
            'photo.required' => 'Foto Wajib diisi.',
            'photo.image' => 'Masukan harus berupa foto',
            'photo.mimes' => 'Foto harus berupa file jpeg,png,jpg',
            'photo.max' => 'Ukuran foto harus kurang 2MB',
            'membersPerTeam.required' => 'Anggota pertim wajib diisi',
            'membersPerTeam.min' => 'Minimal 1 anggota',
            'membersPerTeam.max' => 'Maksimal 7 anggota'
        ];
    }
}
