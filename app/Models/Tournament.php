<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;


class Tournament extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id');
    }
    public function team()
    {
        return $this->hasOne(Team::class);
    }
}
