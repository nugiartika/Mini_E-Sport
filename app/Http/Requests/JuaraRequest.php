<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JuaraRequest extends FormRequest
{


    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
{
    return [
        'nama_juara1' => 'required',
        'nama_juara2' => 'required', // Menggunakan "date_format:H:i:s" untuk format waktu
        'nama_juara3' => 'required', // Menggunakan "numeric" untuk memastikan input adalah angka
        'mvp' => 'required'
    ];
}

public function messages(): array
{
    return [
        'nama_juara1.required' => 'nama tim juara 1 harus diisi',
        'nama_juara2.required' => 'nama tim juara 2 harus diisi',
        'nama_juara3.required' => 'nama tim juara 3 harus diisi',
        'mvp.numeric' => 'nama player mvp harus diisi',
    ];
}

}
