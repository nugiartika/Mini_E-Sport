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

    protected $casts = [
        'end_pendaftaran' => 'datetime',
        'end_permainan' => 'datetime',
        'permainan' => 'datetime',
        'pendaftaran' => 'datetime',
    ];

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

    public function prizepool ()
    {
        return $this->hasMany(Prizepool::class, 'prizepool_id', 'id');
    }

    public function jadwal ()
    {
        return $this->belongsTo(jadwal::class,'jadwal_id');
    }

    public function tournament_prize()
    {
        return $this->hasMany(tournament_prize::class);
    }

}
