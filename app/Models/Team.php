<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
    public function teamTournament()
    {
        return $this->hasMany(TeamTournament::class);
    }
}
