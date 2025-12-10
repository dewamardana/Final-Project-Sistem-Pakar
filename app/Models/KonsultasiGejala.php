<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KonsultasiGejala extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['konsultasi_id', 'gejala_id', 'jawaban', 'cf_user', 'cf_evidence', 'threshold', 'accept'];

    public function konsultasi()
    {
        return $this->belongsTo(Konsultasi::class);
    }
    public function gejala()
    {
        return $this->belongsTo(Gejala::class);
    }
}
