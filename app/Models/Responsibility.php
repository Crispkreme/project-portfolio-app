<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsibility extends Model
{
    use HasFactory;

    protected $fillable = [
        'experience_id',
        'responsibility',
    ];

    public function user() {
        return $this->belongsTo(Experience::class, 'experience_id');
    }
}
