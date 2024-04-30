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
            'name' => [
                'required',
                Rule::unique('categories', 'name')->ignore($categoryId),
                'max:50'
            ],
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'membersPerTeam' => 'required|integer|min:1|max:7'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'The name field is required.',
            'name.unique' => 'The name has already been taken.',
            'name.max' => 'maximum 50 character',
            'membersPerTeam.required' => 'Member per team must be filled in.',
            'membersPerTeam.min' => 'Minimum 1 member',
            'membersPerTeam.max' => 'Maximum 7 members'
        ];
    }
}
