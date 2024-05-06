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
    protected $fillable = ['name','pendaftaran','permainan','end_pendaftaran','end_permainan','categories_id','users_id','users_id','images','slotTeam','contact','description','rule','prize','jumlah','status','paidment','nominal'];

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
