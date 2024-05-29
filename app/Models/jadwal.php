<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;

    protected $fillable = ['tournament_id','tanggalPenyisihan','waktuPenyisihan','boPenyisihan','tanggalSemi','waktuSemi','boSemi','tanggalFinal','waktuFinal','boFinal'];
    public function tournament()
    {
        return $this->belongsTo(tournament::class);
    }
}
