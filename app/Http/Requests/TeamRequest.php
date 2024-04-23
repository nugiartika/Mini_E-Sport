<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'name'=>'required|max:30',
            'profile'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'categories_id'=>'required|exists:categories,id',
            // 'user_id'=>'nullable',
            'member1'=>'nullable|max:30',
            'member2'=>'required|max:30',
            'member3'=>'required|max:30',
            'member4'=>'required|max:30',
            'member5'=>'required|max:30',
            'cadangan1'=>'required|max:30',
            'cadangan2'=>'required|max:30',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'name must be filled in.',
            'name.max' => 'name must not exceed 2048 characters.',
            'categories_id.required' => 'Category must be filled in.',
            'categories_id.exists' => 'The Category you entered is invalid.',
            'member2.required'=>'member 2 must be filled in.',
            'member3.required'=>'member 3 must be filled in.',
            'member4.required'=>'member 4 must be filled in.',
            'member5.required'=>'member 5 must be filled in.',
            'cadangan1.required'=>'reserve 1 must be filled in.',
            'cadangan2.required'=>'reserve 2 must be filled in.',
            'profile.required'=>'profile must be filled in.',
        ];
    }
}
