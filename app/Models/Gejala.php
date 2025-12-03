<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gejala extends Model
{
    use HasFactory;
    protected $fillable = ["kode", "gejala"];

    public function jawabans()
    {
        return $this->belongsToMany(JawabanMaster::class, 'gejala_jawaban')
            ->withPivot('nilai')
            ->withTimestamps();
    }
}
