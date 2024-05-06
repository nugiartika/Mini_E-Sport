<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamTournamentRequest extends FormRequest
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
            'tournament_id' => 'nullable|exists:tournaments,id',
            'team_id' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'team_id.required'=>'Team must be filled in.',
        ];
    }
}
