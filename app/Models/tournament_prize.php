<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tournament_prize extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function prizepool()
    {
        return $this->belongsTo(prizepool::class);
    }

    public function tournament()
    {
        return $this->OneToMany(tournament::class);
    }
}
