<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['tanggalPenyisihan','waktuPenyisihan','boPenyisihan','tanggalSemi','waktuSemi','boSemi','tanggalFinal','waktuFinal','boFinal'];
    public function tournament()
    {
        return $this->OneToMany(tournament::class);
    }
}
