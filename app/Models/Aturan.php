<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aturan extends Model
{

    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = [
        'penyakit_id',
        'min_gejala_utama',
        'min_gejala_lain',
        'wajib_g011',
        'wajib_g012',
        'user_id'
    ];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
