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
            'name'=>'required|max:30|unique:teams,name',
            'profile'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tournament_id' => 'nullable|exists:tournaments,id',
            'user_id'=>'nullable',
            // 'member1'=>'nullable|max:30',
            // 'member2'=>'nullable|max:30',
            // 'member3'=>'nullable|max:30',
            // 'member4'=>'nullable|max:30',
            // 'member5'=>'nullable|max:30',
            // 'cadangan1'=>'nullable|max:30',
            // 'cadangan2'=>'nullable|max:30',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'Nama harus diisi.',
            'name.max' => 'nama  2048 characters.',
            'name.unique' => 'Nama tim Sudah di gunakan',
            // 'categories_id.required' => 'Category must be filled in.',
            // 'categories_id.exists' => 'The Category you entered is invalid.',
            'profile.required'=>'profile must be filled in.',
        ];
    }
}
