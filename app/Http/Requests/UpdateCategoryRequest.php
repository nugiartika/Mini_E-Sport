<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
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

        $categoryId = $this->route('category');
        return [
            'name_update' => [
                'required',
                Rule::unique('categories', 'name')->ignore($categoryId),
                'max:50'
            ],
            'photo_update' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'membersPerTeam_update' => 'required|integer|min:1|max:7'
        ];
    }
    public function messages(): array
    {
        return [
            'name_update.required' => 'nama harus diisi.',
            'name_update.unique' => 'nama sudah digunakan.',
            'name_update.max' => 'Nama Tidak Boleh lebih dari 50 karakter.',
            'photo_update.required' => 'Foto harus diisi.',
            'photo_update.mimes' => 'Foto harus berupa file jpeg,png,jpg',
            'photo_update.max' => 'Ukuran foto harus kurang 2MB',
            'membersPerTeam_update.required' => 'Member per team harus diisi.',
            'membersPerTeam_update.min' => 'Minimal 1 member',
            'membersPerTeam_update.max' => 'Maksimal 7 members'
        ];
    }
}
