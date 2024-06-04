<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upload extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class, 'tournament_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function teamtournament()
    {
        return $this->belongsTo(TeamTournament::class, 'teamtournament_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
