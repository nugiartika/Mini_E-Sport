<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function team()
{
    return $this->belongsTo(Team::class);
}

    public function tournament()
{
    return $this->belongsTo(Tournament::class);
}

public function category()
{
    return $this->belongsTo(Category::class);
}
}
