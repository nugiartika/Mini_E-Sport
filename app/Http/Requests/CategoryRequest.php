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
            'name.required' => 'The name field is required.',
            'name.unique' => 'The name has already been taken.',
            'name.max' => 'The name must not be greater than 50 characters.',
            'photo.required' => 'The photo field is required.',
            'photo.image' => 'input must be a photo',
            'photo.mimes' => 'The photo must be a file jpeg,png,jpg',
            'photo.max' => 'The photo must be less than 2MB',
            'membersPerTeam.required' => 'Member per team must be filled in.',
            'membersPerTeam.min' => 'Minimum 1 member'
        ];
    }
}
