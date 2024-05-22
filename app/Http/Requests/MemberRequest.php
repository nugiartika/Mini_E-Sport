<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MemberRequest extends FormRequest
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
        $teamId = $this->team_id;

        return [
            'member.*' => 'nullable',
            'nickname.*' => [
                'required',
                Rule::unique('members', 'nickname')->where(function ($query) use ($teamId) {
                    return $query->where('team_id', $teamId);
                })
            ],
            'member_cadangan.*' => 'nullable',
            'nickname_cadangan.*' => [
                'nullable',
                Rule::unique('members', 'nickname')->where(function ($query) use ($teamId) {
                    return $query->where('team_id', $teamId);
                })
            ],
            'is_captain.*' => 'nullable',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nickname.*.required' => 'Kolom Email wajib diisi.',
            'nickname.*.unique' => 'Email tidak boleh sama di dalam tim ini.',
            'nickname_cadangan.*.unique' => 'Email cadangan harus unik di dalam tim ini.',
        ];
    }
}
