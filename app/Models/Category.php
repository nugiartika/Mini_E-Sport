<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function tournament()
    {
        return $this->hasMany(Tournament::class);
    }
}
