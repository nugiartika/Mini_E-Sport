<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JadwalRequest extends FormRequest
{
    public function jadwal(): array
    {

        return [
            'tanggalPenyisihan' => 'required|date_format:Y-m-d',
            'waktuPenyisihan' => 'required|time_format:hh:mm:ss',
            'boPenyisihan' => 'required',
            'tanggalSemi' => 'required|date_format:Y-m-d',
            'waktuSemi' => 'required|time_format:hh:mm:ss',
            'boSemi' => 'required',
            'tanggalFinal' => 'required|date_format:Y-m-d',
            'waktuFinal' => 'required|time_format:hh:mm:ss',
            'boFinal' => 'required',
        ];


    }

    public function messages(): array
    {
        return [
            'tanggalPenyisihan.required' => 'Tanggal pada babak penyisihan harus diisi',
            'waktuPenyisihan.required' => 'Waktu plaksaan harus diisi',
            'boPenyisihan.required'=>'jumlah main harus jelas ',
            'tanggalSemi.required' => 'Tanggal pada babak semi final harus diisi',
            'waktuSemi.required' => 'Waktu plaksaan harus diisi',
            'boSemi.required'=>'jumlah main harus jelas ',
            'tanggalFinal.required' => 'Tanggal pada babak Final harus diisi',
            'waktuFinal.required' => 'Waktu plaksaan harus diisi',
            'boFinal.required'=>'jumlah main harus jelas ',
        ];

    }
}
