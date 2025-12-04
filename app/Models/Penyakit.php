<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penyakit extends Model
{

    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['nama_penyakit', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function aturan()
    {
        return $this->hasMany(Aturan::class);
    }
    public function KonsultasiHasil()
    {
        return $this->hasMany(KonsultasiHasil::class);
    }
}
