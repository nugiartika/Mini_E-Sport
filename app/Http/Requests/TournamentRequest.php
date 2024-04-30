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
            'end_pendaftaran'=>'required|date|after:pendaftaran',
            'end_permainan'=>'require|date|after:pendaftaran',
            'categories_id'=>'required|exists:categories,id',
            'users_id' => 'nullable|exists:users,id',
            'slotTeam' => [
                        'required',
                        'integer',
                        'min:2',
                        'max:12', // Maksimal 12 slot
                        function ($attribute, $value, $fail) {
                            // Memeriksa apakah nilai genap
                            if ($value % 2 !== 0) {
                                $fail('The '.$attribute.' must be an even number.');
                            }
                        },
                    ],
            'contact' => 'required|integer',
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
            'end_pendaftaran.required'=>'the end of pendaftaran must be filled in after the pendaftaran date.',
            'end_permainan.required'=>'the end of permainan must be filled in after the permainan date.',
            'categories_id.required' => 'Category must be filled in.',
            'categories_id.exists' => 'The Category you entered is invalid.',
            'images.required'=>'images must be filled in.',
            'contact.required'=>'contact must be filled in.',
            'description.required'=>'description must be filled in.',
            'description.max' => 'description must not exceed 2048 characters.',
            'rule.required'=>'rule must be filled in.',
            'rule.max' => 'rule must not exceed 2048 characters.',
        ];
    }
}



