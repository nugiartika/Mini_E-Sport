<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Tournament_prizeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function tournament_prize(): array
    {
        return [
            'note'=>'required',
            'prizepool_id'=>'required',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages(): array
    {
        return [
            'note.required'=>'keterangan hadiah harus jelas',
            'prizepool_id.required'=>'hadiah harus dipilih',
        ];
    }
}
