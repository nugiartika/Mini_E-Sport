<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamTournament extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
    public function upload()
    {
        return $this->hasMany(Upload::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function toTeam()
    {
        return $this->belongsTo(Team::class, 'team_id', 'id');
    }
    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
