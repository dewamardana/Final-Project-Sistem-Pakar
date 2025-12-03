<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JawabanMaster extends Model
{
    use HasFactory;
    protected $fillable = ['nama'];

    public function gejalas()
    {
        return $this->belongsToMany(Gejala::class, 'gejala_jawaban')
            ->withPivot('nilai')
            ->withTimestamps();
    }
}
