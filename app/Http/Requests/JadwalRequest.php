<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
{


    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
{
    return [
        'tanggalPenyisihan' => 'required|date_format:Y-m-d',
        'waktuPenyisihan' => 'required', // Menggunakan "date_format:H:i:s" untuk format waktu
        'boPenyisihan' => 'required|numeric|min:1', // Menggunakan "numeric" untuk memastikan input adalah angka
        'tanggalSemi' => 'required|date_format:Y-m-d|after:tanggalPenyisihan',
        'waktuSemi' => 'required',
        'boSemi' => 'required|numeric|min:1',
        'tanggalFinal' => 'required|date_format:Y-m-d|after:tanggalSemi',
        'waktuFinal' => 'required',
        'boFinal' => 'required|numeric|min:1',
    ];
}

public function messages(): array
{
    return [
        'tanggalPenyisihan.required' => 'Tanggal pada babak penyisihan harus diisi',
        'waktuPenyisihan.required' => 'Waktu pelaksanaan harus diisi',
        'boPenyisihan.required' => 'Jumlah main harus diisi',
        'boPenyisihan.numeric' => 'Jumlah main harus berupa angka',
        'boPenyisihan.min' => 'Jumlah main harus minimal 1',
        'tanggalSemi.required' => 'Tanggal pada babak semifinal harus diisi',
        'waktuSemi.required' => 'Waktu pelaksanaan harus diisi',
        'boSemi.required' => 'Jumlah main harus diisi',
        'boSemi.numeric' => 'Jumlah main harus berupa angka',
        'boSemi.min' => 'Jumlah main harus minimal 1',
        'tanggalFinal.required' => 'Tanggal pada babak final harus diisi',
        'waktuFinal.required' => 'Waktu pelaksanaan harus diisi',
        'boFinal.required' => 'Jumlah main harus diisi',
        'boFinal.numeric' => 'Jumlah main harus berupa angka',
        'boFinal.min' => 'Jumlah main harus minimal 1',
    ];
}

}
