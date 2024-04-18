<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournamentRequest extends FormRequest
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
            'pendaftaran'=>'required',
            'permainan'=>'required',
            'penyelenggara'=>'required|max:30',
            'images'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description'=>'required|max:2048',
            'rule'=>'required|max:2048',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=>'name must be filled in.',
            'name.max' => 'name must not exceed 2048 characters.',
            'pendaftaran.required'=>'pendaftaran must be filled in.',
            'permainan.required'=>'permainan must be filled in.',
            'penyelenggara.required'=>'penyelenggara must be filled in.',
            'penyelenggara.max' => 'penyelenggara must not exceed 2048 characters.',
            'images.required'=>'images must be filled in.',
            'description.required'=>'description must be filled in.',
            'description.max' => 'description must not exceed 2048 characters.',
            'rule.required'=>'rule must be filled in.',
            'rule.max' => 'rule must not exceed 2048 characters.',
        ];
    }
}


