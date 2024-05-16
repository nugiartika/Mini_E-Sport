<?php

namespace App\Enums;

enum TransactionStatus: string
{
    case PENDING = 'PENDING';
    case UNPAID = 'UNPAID';
    case PAID = 'PAID';
    case REFUND = 'REFUND';
    case EXPIRED = 'EXPIRED';
    case FAILED = 'FAILED';

    public static function label($data)
    {
        return match($data) {
            'PENDING' => 'Menunggu',
            'UNPAID' => 'Belum Dibayar',
            'PAID' => 'Terbayarkan',
            'REFUND' => 'Dikembalikan',
            'EXPIRED' => 'Kadaluarsa',
            'FAILED' => 'Gagal',
            default => 'Unknown',
        };
    }

    public static function color($data)
    {
        return match($data) {
            'PENDING' => 'warning',
            'UNPAID' => 'warning',
            'PAID' => 'success',
            'REFUND' => 'secondary',
            'EXPIRED' => 'danger',
            'FAILED' => 'dark',
            default => 'secondary',
        };
    }
}
