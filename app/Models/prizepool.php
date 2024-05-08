<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prizepool extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['prize'];

    public function tournament()
    {
        return $this->hasMany(Tournament::class);
    }
}
