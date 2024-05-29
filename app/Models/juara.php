<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class juara extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    protected $fillable = ['nama_juara1', 'nama_juara2', 'nama_juara3', 'mvp'];

    public function tournament()
    {
        return $this->OneToMany(tournament::class);
    }
}
