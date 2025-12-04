<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class KonsultasiHasil extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['konsultasi_id', 'penyakit_id', 'cf_akhir', 'kesimpulan'];

    public function konsultasi()
    {
        return $this->belongsTo(Konsultasi::class);
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
