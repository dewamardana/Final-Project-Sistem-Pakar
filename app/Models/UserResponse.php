<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserResponse extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'gejala_id', 'jawaban', 'nilai'];

    // Relasi ke user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke gejala
    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}
