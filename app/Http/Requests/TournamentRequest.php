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
            'name' => 'required|string',
            'pendaftaran' => 'required|date_format:Y-m-d',
            'permainan' => 'required|date_format:Y-m-d|after:end_pendaftaran',
            'end_pendaftaran' => 'required|date_format:Y-m-d|after:pendaftaran',
            'end_permainan' => 'required|date_format:Y-m-d|after:permainan',
            'categories_id' => 'required|exists:categories,id',
            'users_id' => 'nullable',
            'slotTeam' => [
                'required',
                'integer',
                'min:2',
                function ($attribute, $value, $fail) {
                    if ($value % 2 !== 0) {
                        $fail('Slot tim harus merupakan bilangan genap.');
                    }
                },
            ],
            'contact' => 'required|string|max:14',
            'images' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'rule' => 'required|string',
            'paidment' => 'required|string',
            'nominal' => 'nullable|numeric|required_if:paidment,Berbayar',

        ];


    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama harus diisi.',
            'name.max' => 'Nama tidak boleh lebih dari 30 karakter.',
            'pendaftaran.required' => 'Tanggal pendaftaran harus diisi.',
            'permainan.required' => 'Tanggal permainan harus diisi.',
            'permainan.date' => 'Tanggal permainan harus valid.',
            'permainan.after' => 'Tanggal permainan harus setelah tanggal akhir pendaftaran.',
            'end_pendaftaran.required' => 'Tanggal akhir pendaftaran harus diisi setelah tanggal pendaftaran.',
            'end_pendaftaran.date' => 'Tanggal akhir pendaftaran harus valid.',
            'end_pendaftaran.after' => 'Tanggal akhir pendaftaran harus setelah tanggal pendaftaran.',
            'end_permainan.required' => 'Tanggal akhir permainan harus diisi setelah tanggal permainan.',
            'end_permainan.date' => 'Tanggal akhir permainan harus valid.',
            'end_permainan.after' => 'Tanggal akhir permainan harus setelah tanggal permainan.',
            'categories_id.required' => 'Kategori harus dipilih.',
            'categories_id.exists' => 'Kategori yang dipilih tidak valid.',
            'images.required' => 'Gambar harus diunggah.',
            'images.image' => 'File harus berupa gambar.',
            'images.mimes' => 'Gambar harus dalam format: jpeg, png, jpg, gif.',
            'images.max' => 'Gambar tidak boleh lebih dari 2048 kilobita.',
            'contact.required' => 'Kontak harus diisi.',
            'contact.integer' => 'Kontak harus berupa angka.',
            'contact.max' => 'Kontak tidak boleh lebih dari 14 angka',
            'description.required' => 'Deskripsi harus diisi.',
            'rule.required' => 'Aturan harus diisi.',
            'rule.max' => 'Aturan tidak boleh lebih dari 2048 karakter.',
            'prizepool_id.required' => 'Hadiah harus diisi.',
            'note.required' => 'Deskripsi Hadiah harus diisi.',
            'slotTeam.required' => 'Slot tim harus diisi.',
            'slotTeam.integer' => 'Slot tim harus berupa angka.',
            'slotTeam.min' => 'Slot tim tidak boleh kurang dari 2.',
            'slotTeam.custom' => 'Slot tim harus berupa angka genap.',
            'nominal.nullable' => 'Nominal harus berupa angka.',
            'paidment.required' => 'Metode pembayaran harus dipilih.',
        ];

    }
}
