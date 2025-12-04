<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BobotPenilaian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $fillable = ['certainty_term', 'cf', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
