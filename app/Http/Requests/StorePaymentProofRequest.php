<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePaymentProofRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'transaction_id' => 'required|uuid|exists:transactions,id',
            'user_id' => 'required|exists:users,id',
            'file' => 'nullable|file|mimes:jpeg,png|max:2048',
            'payment_date' => 'required|date',
        ];
    }

    /**
     * Get custom error messages for specific validation rules.
     */
    public function messages(): array
    {
        return [
            'transaction_id.required' => 'ID Transaksi wajib diisi.',
            'transaction_id.uuid' => 'ID Transaksi harus berupa UUID yang valid.',
            'transaction_id.exists' => 'ID Transaksi yang dipilih tidak valid.',
            'user_id.required' => 'ID Pengguna wajib diisi.',
            'user_id.exists' => 'ID Pengguna yang dipilih tidak valid.',
            'file.file' => 'Berkas harus berupa file.',
            'file.mimes' => 'Berkas harus berupa tipe: jpeg, png, pdf.',
            'file.max' => 'Ukuran berkas tidak boleh lebih dari 2MB.',
            'payment_date.required' => 'Tanggal pembayaran wajib diisi.',
            'payment_date.date' => 'Tanggal pembayaran harus berupa tanggal yang valid.',
        ];
    }
}
