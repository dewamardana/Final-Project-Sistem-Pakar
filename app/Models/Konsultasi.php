<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konsultasi extends Model
{

    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'kode_konsultasi',
        'tanggal',
        'nama_pasien',
        'umur',
        'jenis_kelamin',
        'catatan'
    ];

    public function KonsultasiGejala()
    {
        return $this->hasMany(KonsultasiGejala::class);
    }
    public function hasil()
    {
        return $this->hasOne(KonsultasiHasil::class);
    }
}
