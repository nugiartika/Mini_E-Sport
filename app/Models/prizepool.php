<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prizepool extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['prize'];
    public function tournament_prize()
    {
        return $this->hasMany(tournament_prize::class);
    }

    public function tournament()
    {
        return $this->belongsTo(tournament::class);
    }
}
